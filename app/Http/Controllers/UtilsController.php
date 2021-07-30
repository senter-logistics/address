<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;

class UtilsController extends Controller
{


    /**
     * Obtener un código postal de Cánada.
     * Este endpoint te permite consultar la base de datos más actualizada y oficial del país.
     * <aside class="notice">Debes enviar tu <code>API_KEY</code> en esta consulta.</aside>
      * @urlParam  id required Postal code Number. Example: V2T5N7
 * @bodyParam  api_key string required The Api Key provided by e-hop. Example: ec28f5ed-91e2-4e93-8d86-030241fe2481
 * @response  [
    {
        "id": 604485,
        "postal_code": "V2T5N7",
        "city": "ABBOTSFORD",
        "province_abbr": "BC",
        "time_zone": "8",
        "estate": "British Columbia"
    }
]
     */
public function getPostalCodeDataFromCanada($id){
  if (strlen($id) >= 3 ){

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
}


    /**
     * Obtener un código postal de México.
     * Este endpoint te permite consultar la base de datos más actualizada del SEPOMEX.
     * <aside class="notice">Debes enviar tu <code>API_KEY</code> en esta consulta.</aside>
      * @urlParam  id required Postal code Number. Example: 64550
 * @bodyParam  api_key string required The Api Key provided by e-hop. Example: ec28f5ed-91e2-4e93-8d86-030241fe2481
 * @response  [
    {
        "id": 85181,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "Argentina",
        "cp": "64550"
    },
    {
        "id": 85182,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "Asarco",
        "cp": "64550"
    },
    {
        "id": 85183,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "Cantú",
        "cp": "64550"
    },
    {
        "id": 85184,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "Fabriles",
        "cp": "64550"
    },
    {
        "id": 85190,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "Jardines de Churubusco",
        "cp": "64550"
    },
    {
        "id": 85185,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "MartÍnez",
        "cp": "64550"
    },
    {
        "id": 85188,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Fraccionamiento",
        "asentamiento": "Privada Pinos",
        "cp": "64550"
    },
    {
        "id": 85186,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "Reforma",
        "cp": "64550"
    },
    {
        "id": 85187,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "Tampico",
        "cp": "64550"
    },
    {
        "id": 85189,
        "municipio": "Monterrey",
        "ciudad": "Monterrey",
        "estado": "Nuevo León",
        "tipo": "Colonia",
        "asentamiento": "U C Martínez",
        "cp": "64550"
    }
]
     */
public function getPostalCodeData($id){

  if (strlen($id) >= 3 ){

    $data = DB::table('sepomex2020')
    ->where('cp','LIKE','%'.$id.'%')
    ->join('estados', 'sepomex2020.estado', '=', 'estados.nombre')
    ->select('sepomex2020.*', 'abrev AS estado')
    ->orderBy('asentamiento', 'asc')
    ->get();

    return response()->json($data);
  }

}

public function gePostalCodeSV($id){

  $path = asset('sv-codigos-postales.json');
  $sv_postal_code = json_decode(file_get_contents($path), true); 
  $sv_postal_code = $sv_postal_code['model'];

  $array = [];


  foreach ($sv_postal_code as $key => $data) {
  foreach ($data['municipios'] as $key => $data2) {

    if ( $data2['codigoPostal'] ==  $id )  {
      $data2 ['ciudad'] = $data['nombre'];
      $array [] = $data2;
    }
  }
  }

  return response()->json($array);

}


public function getPostalCodeDataFromColombia($id){
  if (strlen($id) >= 3 ){
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
