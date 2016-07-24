<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
  public function index()
  {
    //return view('home.index', $this->param);
    return redirect('map/esri');
  }
}
