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
            $d->bduration = htmlentities($request->basicduration);
            $d->bscreens = htmlentities($request->basicscreen);
            $d->bpviewers = htmlentities($request->basicviewers);

            $d->premium = htmlentities($request->premium);
            $d->pprice = htmlentities($request->premiumprice);
            $d->pduration = htmlentities($request->premiumduration);
            $d->pscreens = htmlentities($request->premiumscreen);
            $d->ppviewers = htmlentities($request->premiumviewers);


            $d->elite = htmlentities($request->elite);
            $d->eprice = htmlentities($request->eliteprice);
            $d->eduration = htmlentities($request->eliteduration);
            $d->escreens = htmlentities($request->elitescreen);
            $d->epviewers = htmlentities($request->eliteviewers);
            $d->save();
        } else {
            $d = Digify::find(1);
            $d->basic = htmlentities($request->basic);
            $d->bprice = htmlentities($request->basicprice);
            $d->bduration = htmlentities($request->basicduration);
            $d->bscreens = htmlentities($request->basicscreen);
            $d->bpviewers = htmlentities($request->basicviewers);

            $d->premium = htmlentities($request->premium);
            $d->pprice = htmlentities($request->premiumprice);
            $d->pduration = htmlentities($request->premiumduration);
            $d->pscreens = htmlentities($request->premiumscreen);
            $d->ppviewers = htmlentities($request->premiumviewers);


            $d->elite = htmlentities($request->elite);
            $d->eprice = htmlentities($request->eliteprice);
            $d->eduration = htmlentities($request->eliteduration);
            $d->escreens = htmlentities($request->elitescreen);
            $d->epviewers = htmlentities($request->eliteviewers);
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
            $d->bduration = htmlentities($request->dbasicduration);
            $d->bscreens = htmlentities($request->dbasicscreen);
            $d->bpviewers = htmlentities($request->dbasicviewers);

            $d->premium = htmlentities($request->dpremium);
            $d->pprice = htmlentities($request->dpremiumprice);
            $d->pduration = htmlentities($request->dpremiumduration);
            $d->pscreens = htmlentities($request->dpremiumscreen);
            $d->ppviewers = htmlentities($request->dpremiumviewers);

            $d->elite = htmlentities($request->delite);
            $d->eprice = htmlentities($request->deliteprice);
            $d->eduration = htmlentities($request->deliteduration);
            $d->escreens = htmlentities($request->delitescreen);
            $d->epviewers = htmlentities($request->deliteviewers);
            $d->save();
        } else {
            $d = Dan::find(1);
            $d->basic = htmlentities($request->dbasic);
            $d->bprice = htmlentities($request->dbasicprice);
            $d->bduration = htmlentities($request->dbasicduration);
            $d->bscreens = htmlentities($request->dbasicscreen);
            $d->bpviewers = htmlentities($request->dbasicviewers);

            $d->premium = htmlentities($request->dpremium);
            $d->pprice = htmlentities($request->dpremiumprice);
            $d->pduration = htmlentities($request->dpremiumduration);
            $d->pscreens = htmlentities($request->dpremiumscreen);
            $d->ppviewers = htmlentities($request->dpremiumviewers);

            $d->elite = htmlentities($request->delite);
            $d->eprice = htmlentities($request->deliteprice);
            $d->eduration = htmlentities($request->deliteduration);
            $d->escreens = htmlentities($request->delitescreen);
            $d->epviewers = htmlentities($request->deliteviewers);
            $d->save();
        }
        return ['status' => 200];
    }
}
