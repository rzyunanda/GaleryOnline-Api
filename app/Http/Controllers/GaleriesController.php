<?php

namespace App\Http\Controllers;
use App\Galeries;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Resources\Galery as GaleryResource;


class GaleriesController extends Controller
{

	public function index(){
			// $galery = Galeries::all();
			 
			//  return response()->json([
			//  'pesan' => 'berhasil',
			//  'galery' => $galery
			//  ], 200);

			$galery = Galeries::paginate(15);
			return GaleryResource::collection($galery);    
		}


	public function show($id){

		$galery = Galeries::findOrFail($id);
		return new GaleryResource($galery);

	}

	public function store(){

	}


	public function destroy(){

	}


}
