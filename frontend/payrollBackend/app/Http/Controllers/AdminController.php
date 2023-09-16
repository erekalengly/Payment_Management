<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    //
    public function register_user(Request $req){
        $username = $req -> name;
        $email = $req -> email;
        $password = $req -> passsword;
        $cfpassword = $req -> confirm_password;

        #createmodelsavedatabase
        $new_data = new User([
            'name'=> $username,
            'email'=> $email,
            'password'=> $password

        ]);

        $new_data ->save();
        return response() -> json(['data' => $new_data], 200);
        dd($new_data);


    }
}
