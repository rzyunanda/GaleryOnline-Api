<?php

namespace App\Http\Controllers;
use App\Galeries;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Resources\Galery as GaleryResource;


class GaleriesController extends Controller
{

	public function index(){

			$galery = Galeries::select('id','nama','lokasi','gambar','deskripsi','lat','lng')->get();

			return response()->json(['data'=>$galery]);    
		}


	public function show($id){

		$galery = Galeries::findOrFail($id);
		return new GaleryResource($galery);

	}

	function store(Request $request){

        if (isset($request->gambar)) {
            $picture = base64_decode($request->gambar);
           //Log::info($request->gambar);
            $filename = str_random().'.'.'jpeg';
            $path = storage_path().'/app/public/'.$filename;
            file_put_contents($path,$picture);
            $galery=Galeries::create($request->except('gambar')+['gambar' => $filename]);

        }else{
            $galery=Galeries::create($request->all());
        }
        
        return response()->json($galery,201);
    }


}
