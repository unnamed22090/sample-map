<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MapController extends Controller
{
    public function google()
    {
        return view('map.google', $this->param);
    }
}
