<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portimg;

class PortimgController extends Controller
{
    public function portImgs($id)
    {
        return Portimg::where('port_id', $id)->orderBy("created_at", 'desc')->get();
    }
}
