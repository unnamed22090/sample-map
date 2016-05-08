<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('home.index', $this->param);
  }

  public function google()
  {
    return view('home.google', $this->param);
  }

}
