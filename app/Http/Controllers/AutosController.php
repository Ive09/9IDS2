<?php

namespace App\Http\Controllers;

use App\Models\Autos;
use Illuminate\Http\Request;

class AutosController extends Controller
{
    public function index(Request $req)
    {
        if($req->id == 0){
            $auto = new Autos();
        }
        else
        {
            $auto = Autos::find($req->id);
        }
        
        return view('auto', compact('auto'));
    }


    public function store(Request $req)
    {
        if($req->id == 0){
            $auto = new Autos();
        }
        else
        {
            $auto = Autos::find($req->id);
        }

        $auto->matricula = $req->matricula;
        $auto->color = $req->color;
        $auto->modelo = $req->modelo;
        $auto->marca = $req->marca;
        
        $auto->save();

        return redirect()->route("autos.lista");

        return 'OK';
    }


    public function storeapi(Request $req)
    {
        if($req->id == 0){
            $auto = new Autos();
        }
        else
        {
            $auto = Autos::find($req->id);
        }

        $auto->matricula = $req->matricula;
        $auto->color = $req->color;
        $auto->modelo = $req->modelo;
        $auto->marca = $req->marca;
        
        $auto->save();

        return 'OK';
    }


    public function list()
    {
        $autos = Autos::all();

        return view('autos', compact('autos'));
    }

    public function listapi()
    {
        $autos = Autos::all();
      
        return $autos;
    }




    public function show(Request $request){
        $auto = Autos::find($request->id);
        return response()->json($auto);
    }


    public function delete($id)
    {
        $auto = Autos::find($id);

        $auto->delete();

        return redirect()->route("autos.lista");
    }


    public function deleteapi(Request $req)
    {
        $auto = Autos::find($req->id);

        $auto->delete();

        return ('OK');
    }
}