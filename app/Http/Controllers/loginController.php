<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function telaLogin(){
        
        #echo 'Tela de Login';
        return view('login');
    }

    public function fazerLogin(Request $request){

        $username = $request->get('username');
        $password = $request->get('password');
        
        if($username=="joao" & $password=="5086"){
            return redirect('/homepage');
        }
        if($username=="gabriel" & $password=="321"){
            return redirect('/homepage');
        }
        if($username=="andre" & $password=="prof"){
            return redirect('/homepage');
        }

        return redirect('/login');
        


    }
}
