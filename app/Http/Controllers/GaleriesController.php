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

			$galery = Galeries::all();
			return $galery;   
		}


	public function show($id){

		$galery = Galeries::findOrFail($id);
		return new GaleryResource($galery);

	}

	// function postFoto(Request $request){

 //        $gambar = explode(',',$request->photo_path);
 //        $satu = explode('/',$gambar[0]);
 //        $dua = explode(';',$satu[1]);
 //        $extention = $dua[0];
 //        $picture = base64_decode($gambar[1]);
 //        Log::info($gambar[1]);
 //        $filename = str_random().'.'.$extention;
 //        $path = public_path().'/photo/'.$filename;
 //        file_put_contents($path,$picture);

 //        $galeries=Galeries::insert($request->except('photo_path')+['photo_path' => $filename]);
 //        return response()->json($galeries,201);

 //    }


	public function destroy(){

	}


}
