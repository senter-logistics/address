<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;

class UtilsController extends Controller
{

  public function getPostalCodeData($id){
  	//postal code  = $id

    $data = DB::table('sepomex')->where('cp', $id)->orderBy('asentamiento', 'asc')->get();
      return response()->json($data);
      
    }

    public function getCities($id){
    	//dd($id);
      $data = DB::table('municipios')->where('estado_id', $id)->orderBy('nombre', 'asc')->get();
      return response()->json($data);
    }



  }
