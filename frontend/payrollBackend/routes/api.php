<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([
    'prefix' => 'user_route'

], function(){
     //http/localhost/user_route/register
                    //in_insomnie                         //function in controller
   Route::post('register_new_user', [UserController::Class, 'register_user']);
   
}

);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
