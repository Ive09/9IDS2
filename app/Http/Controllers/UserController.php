<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function crear(Request $req){
        if ($req->id==0){
            $user = new User();
        }
        else{
            $user = User::find($req->id);
        }

        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        
        $user->save();

        return 'OK';
    }
}
