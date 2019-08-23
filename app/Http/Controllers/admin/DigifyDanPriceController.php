<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Digify;
use SebastianBergmann\Diff\Diff;

class DigifyDanPriceController extends Controller
{

    public function Dvpage()
    {
        return view('admin.digify-dan/edit');
    }

    public function digify()
    {
        return Digify::find(1);
    }

    public function digifyupdate(Request $request)
    {
        $d = Digify::all();
        if (count($d) < 1) {
            $d =  new Digify;
            $d->basic = htmlentities($request->basic);
            $d->bprice = htmlentities($request->basicprice);
            $d->premium = htmlentities($request->premium);
            $d->pprice = htmlentities($request->premiumprice);
            $d->elite = htmlentities($request->elite);
            $d->eprice = htmlentities($request->eliteprice);
            $d->save();
        } else {
            $d = Digify::find(1);
            $d->basic = htmlentities($request->basic);
            $d->bprice = htmlentities($request->basicprice);
            $d->premium = htmlentities($request->premium);
            $d->pprice = htmlentities($request->premiumprice);
            $d->elite = htmlentities($request->elite);
            $d->eprice = htmlentities($request->eliteprice);
            $d->save();
        }
        return ['status' => 200];
    }
}
