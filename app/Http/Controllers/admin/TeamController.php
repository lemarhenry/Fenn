<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function Tvpage()
    {
        return view('admin.team/index');
    }

    public function Tcpage()
    {
        return view('admin.team/create');
    }

    public function teamSingle(Team $id)
    {
        return $id;
    }

    public function teamSave(Request $request)
    {
        $this->validate($request, [
            'tname' => 'required',
            'tposition' => 'required',
            'img' => 'mimes:jpeg,jpg,png|max:1999|required',
        ]);
        $team =  new Team;
        $team->name = htmlentities($request->tname);
        $team->position = htmlentities($request->tposition);
        $filenameWithExt = $request->file('img')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('img')->getClientOriginalExtension();
        $filenametostore = $filename . '_' . time() . '.' . $extension;
        $path = $request->file('img')->storeAs('public/team', $filenametostore);
        $team->img = $filenametostore;
        $team->save();
        return ['status' => 200];
    }

    public function teamDelete(Team $id)
    {
        Storage::delete('public/team/' . $id->img);
        $id->delete();
        return ['status' => 200];
    }

    public function teamUpdate(Request $request, Team $id)
    {
        if ($request->file('img') != null) {
            $this->validate(
                $request,
                ['img' => 'mimes:jpeg,jpg,png|max:1999']
            );
            Storage::delete('public/team/' . $id->img);
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->storeAs('public/team', $filenametostore);
            $id->img = $filenametostore;
        }
        $id->name = htmlentities($request->etname);
        $id->position = htmlentities($request->etposition);
        $id->save();
        return ['status' => 200];
    }
}
