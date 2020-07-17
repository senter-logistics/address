<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;

class UtilsController extends Controller
{

  public function getPostalCodeDataFromCanada($id){


    $data = DB::table('canada')
    //->whereRaw("REPLACE(`postal_code`, ' ' ,'') LIKE ?", '%'. $id.'%')
    //->where('postal_code','LIKE','%'.$id.'%')
    //->where('postal_code', $id)
    ->where('postal_code','LIKE','%'.$id.'%')
    ->orderBy('city', 'asc')
    ->get();

    $data_custom = [];

    foreach ($data as $city) {

      if ($city->province_abbr == 'AB') {
        $city->estate = 'Alberta';
      }

      if ($city->province_abbr == 'BC') {
        $city->estate = 'British Columbia';
      }


      if ($city->province_abbr == 'MB') {
        $city->estate = 'Manitoba';
      }


      if ($city->province_abbr == 'NB') {
        $city->estate = 'New Brunswick';
      }



      if ($city->province_abbr == 'NL') {
        $city->estate = 'Newfoundland and Labrador';
      }



      if ($city->province_abbr == 'NS') {
        $city->estate = 'Nova Scotia';
      }


      if ($city->province_abbr == 'NT') {
        $city->estate = 'Northwest Territory';
      }


      if ($city->province_abbr == 'OT') {
        $city->estate = 'Ontario';
      }


      if ($city->province_abbr == 'PE') {
        $city->estate = 'Prince Edward Island';
      }

      if ($city->province_abbr == 'QC') {
        $city->estate = 'Quebec';
      }

      if ($city->province_abbr == 'SK') {
        $city->estate = 'Saskatchewan';
      }
      if ($city->province_abbr == 'YT') {
        $city->estate = 'Yukon';
      }


      $data_custom [] = $city;
    }

    return response()->json($data_custom);

  }



  public function getPostalCodeData($id){

    $data = DB::table('sepomex2020')
    //->where('cp', $id)
    ->where('cp','LIKE','%'.$id.'%')
    ->orderBy('asentamiento', 'asc')
    ->get();

    return response()->json($data);
  }


  public function getPostalCodeDataFromColombia($id){

    $colombia_postal_code = DB::table('colombia')
    //->where('cp', $id)
    ->where('codigo_postal','LIKE','%'.$id.'%')
    ->orderBy('nombre_municipio', 'asc')
    ->get()->toArray();

    $newData = [];

    foreach ($colombia_postal_code as $data) {
      $newArray=[];

      $barrios = explode("-", $data->barrios_contenidos_en_el_codigo_postal);

      foreach ($barrios as $barrio) {
        $newArray['place']=$barrio;
        $newArray['asentamiento']=$barrio;
        $newArray['country']='Colombia';
        $newArray['country_short']="CO";
        $newArray['estate']=$data->nombre_departamento;
        $newArray['city']=$data->nombre_departamento;
        $newArray['estate_short']=$data->nombre_departamento;
        $newArray['cp']=$data->codigo_postal;

      $newData []= $newArray;

      }



    }
    return response()->json($newData);
  }




  public function getCities($id){
    	//dd($id);
    $data = DB::table('municipios')->where('estado_id', $id)->orderBy('nombre', 'asc')->get();
    return response()->json($data);
  }



  public function getCity($id){
    $data = DB::table('municipios')->where('id', $id)->orderBy('nombre', 'asc')->get();
    return response()->json($data);
  }

  public function getEstate($id){
    $data = DB::table('estados')->where('id', $id)->orderBy('nombre', 'asc')->get();
    return response()->json($data);
  }

  public function getColonia($id){
    $data = DB::table('localidades')->where('id', $id)->orderBy('nombre', 'asc')->get();
    return response()->json($data);
  }




}
