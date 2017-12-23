<?php

namespace soyDeporte\Http\Controllers;

use Illuminate\Http\Request;
use soyDeporte\Deporte;

class DeporteController extends Controller
{
    public function index(){

    	$deportes = Deporte::orderBy('id','DESC');

    	
    	return view('deporte.index',compact('deportes'));

    }
}
