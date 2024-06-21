<?php

namespace App\Http\Controllers;
use App\Models\Servicios;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index(Request $req)
    {
        if($req->id == 0){
            $servicio = new Servicios();
        }
        else
        {
            $servicio = Servicios::find($req->id);
        }
        
        return view('servicio', compact('servicio'));
    }


    public function store(Request $req)
    {
        if($req->id == 0){
            $servicio = new Servicios();
        }
        else
        {
            $servicio = Servicios::find($req->id);
        }

        $servicio->codigo = $req->codigo;
        $servicio->nombre = $req->nombre;
        $servicio->descripcion = $req->descripcion;
        $servicio->precio = $req->precio;
        
        $servicio->save();

        return redirect()->route("servicios.lista");

        return('OK');
    }


    public function storeapi(Request $req)
    {
        if($req->id == 0){
            $servicio = new Servicios();
        }
        else
        {
            $servicio = Servicios::find($req->id);
        }

        $servicio->codigo = $req->codigo;
        $servicio->nombre = $req->nombre;
        $servicio->descripcion = $req->descripcion;
        $servicio->precio = $req->precio;
        
        $servicio->save();

        return('OK');
    }


    public function list()
    {
        $servicios = Servicios::all();

        return view('servicios', compact('servicios'));
    }


    public function show(Request $request){
        $servicio = Servicios::find($request->id);
        return response()->json($servicio);
    }


    public function delete($id)
    {
        $servicio = Servicios::find($id);

        $servicio->delete();

        return redirect()->route("servicios.lista");
    }

    
    public function listapi()
    {
        $servicios = Servicios::all();
      

        return $servicios;
    }


    public function deleteapi(Request $req)
    {
        $servicio = Servicios::find($req->id);

        $servicio->delete();

        return ('OK');
    }
}
