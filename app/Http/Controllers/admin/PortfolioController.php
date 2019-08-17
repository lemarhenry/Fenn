<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Portimg;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Pcpage()
    {
        return view('admin.portfolio/create');
    }

    public function portfolioSave(Request $request)
    {
        $this->validate(
            $request,
            ['img' => 'mimes:jpeg,jpg,png|max:1999']
        );
        $port = new Portfolio;
        $filenameWithExt = $request->file('img')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('img')->getClientOriginalExtension();
        $filenametostore = $filename . '_' . time() . '.' . $extension;
        $path = $request->file('img')->storeAs('public/portfolio', $filenametostore);
        $port->img = $filenametostore;
        $port->name = htmlentities($request->name);
        $port->description = htmlentities($request->description);
        $port->save();
        return ['status' => 200];
    }

    public function portImg(Request $request, $id)
    {
        $this->validate(
            $request,
            ['img' => 'mimes:jpeg,jpg,png|max:1999']
        );
        $filenameWithExt = $request->file('img')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('img')->getClientOriginalExtension();
        $filenametostore = $filename . '_' . time() . '.' . $extension;
        $path = $request->file('img')->storeAs('public/' . $id, $filenametostore);
        $pimg = new Portimg;
        $pimg->port_id = $id;
        $pimg->img = $filenametostore;
        $pimg->save();
        return ['status' => 200];
    }
    public function portfolioDelete(Portfolio $id)
    {
        $del = Portimg::where("port_id", $id->id)->get();
        foreach ($del as $d) {
            Storage::delete('public/' . $id->id . "/" . $d->img);
            $d->delete();
        }
        Storage::delete('public/portfolio'  . $id->img);
        $id->delete();
        return ['status' => 200];
    }
}
