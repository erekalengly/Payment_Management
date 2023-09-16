<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use GuzzLeHttp\Client;

class UserController extends Controller
{
    public function dashboard(Request $req){
        return view('dashboard');
    }
    public function employeePayroll(Request $req){
        return view('employeePayroll');
    }


}
