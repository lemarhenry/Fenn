<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Digify;
use App\Dan;


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

    public function Dan()
    {
        return Dan::find(1);
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

    public function danUpdate(Request $request)
    {
        $d = Dan::all();
        if (count($d) < 1) {
            $d =  new Dan;
            $d->basic = htmlentities($request->dbasic);
            $d->bprice = htmlentities($request->dbasicprice);
            $d->premium = htmlentities($request->dpremium);
            $d->pprice = htmlentities($request->dpremiumprice);
            $d->elite = htmlentities($request->delite);
            $d->eprice = htmlentities($request->deliteprice);
            $d->save();
        } else {
            $d = Dan::find(1);
            $d->basic = htmlentities($request->dbasic);
            $d->bprice = htmlentities($request->dbasicprice);
            $d->premium = htmlentities($request->dpremium);
            $d->pprice = htmlentities($request->dpremiumprice);
            $d->elite = htmlentities($request->delite);
            $d->eprice = htmlentities($request->deliteprice);
            $d->save();
        }
        return ['status' => 200];
    }
}
