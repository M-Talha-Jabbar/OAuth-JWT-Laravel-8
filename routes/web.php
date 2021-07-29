<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\LoginWithGoogleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(Request $request){
    if(isset($_COOKIE['token'])) {
       //dd($_COOKIE['token']);
       return redirect()->route('user.profile');
    }
    return view('login');
});

Route::get('/register',function(){
    return view('register');
});

Route::get('/redirect', [LoginWithGoogleController::class, 'redirectToProvider']);
Route::get('/callback', [LoginWithGoogleController::class, 'handleProviderCallback']);
