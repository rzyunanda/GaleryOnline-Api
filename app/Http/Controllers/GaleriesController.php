<?php

namespace App\Http\Controllers;
use App\Galeries;


use Illuminate\Http\Request;

class GaleriesController extends Controller
{

public function index(){
		$galery = Galeries::all();
		 
		 return response()->json([
		 'pesan' => 'berhasil',
		 'galery' => $galery
		 ], 200);    
	}
}
