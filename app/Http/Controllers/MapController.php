<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MapController extends Controller
{
	public function esri()
	{
		return view('map.esri', $this->param);
	}

    public function google()
    {
    	$this->param['google_url'] = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAjwxZnNI1S7DA2G1IC0L6N-kf_Z0KUXBs&callback=initMap';
        return view('map.google', $this->param);
    }
}
