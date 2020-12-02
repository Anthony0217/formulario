<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BR extends Controller
{
    public function verify(Request $request){
        $user = $request -> input('user');
        $pass = $request -> input('pass');

        if ( $user == 'AnthonyBR' && $pass == '696969'){
            $url = 'correcto';
        } else {
           $url= 'incorrecto';
        }
        return view ($url, [
            'user' => $request -> input('user')
        ]);
    }


    public function login(){
        return view('inicio');
}
}