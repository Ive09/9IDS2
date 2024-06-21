<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use App\Models\Etapas;
use Illuminate\Http\Request;

class EtapasController extends Controller
{
    public function index(Request $req){
        $servicios = Servicios::all();

        if($req->id){
            $etapa = Etapas::find($req->id);
        }else{
            $etapa = new Etapas();
        }

        return view('etapa',compact('servicios','etapa'));
    }


    public function store(Request $req){

        if($req->id != 0){
            $etapa = Etapas::find($req->id);
        }
        else{
            $etapa = new Etapas();
        }

        $etapa->nombre = $req->nombre;
        $etapa->duracion = $req->duracion;
        $etapa->id_servicio=$req->id_servicio;

        $etapa->save();

        return redirect()->route("etapas.lista");
        //return redirect()->to("home");
    }


    public function storeapi(Request $req){

        if($req->id != 0){
            $etapa = Etapas::find($req->id);
        }
        else{
            $etapa = new Etapas();
        }

        $etapa->nombre = $req->nombre;
        $etapa->duracion = $req->duracion;
        $etapa->id_servicio=$req->id_servicio;

        $etapa->save();

        return('OK');
    }

    
    public function list()
    {
        $etapas = Etapas::
                join('servicios','etapas.id_servicio','=','servicios.id')
                ->select('etapas.*','servicios.nombre as nombre_servicio') 
                ->get();

        return view('etapas', compact('etapas'));
    }


    public function listapi(Request $req)
    {
        $etapas = Etapas::
                join('servicios','etapas.id_servicio','=','servicios.id')
                ->select('etapas.*','servicios.nombre as nombre_servicio') ->where('etapas.id_servicio',$req->idservicio)
                ->get();
      

        return $etapas;
    }
    

    public function delete( $id){
        $etapa = Etapas::find($id);
        $etapa->delete();

        return redirect()->route("etapas.lista");
    }


    public function deleteapi(Request $req){
        $etapa = Etapas::find($req->id);
        $etapa->delete();

        return('OK');
    }

    public function show(Request $request){
        $etapa = Etapas::find($request->id);
        return response()->json($etapa);
    }
}

