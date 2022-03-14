<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Fraza Aditya Wiguna",
        "email" => "frazaadityawiguna@gmail.com",
        "image" => "https://media-exp1.licdn.com/dms/image/C5603AQFtfCTd9ODn_A/profile-displayphoto-shrink_200_200/0/1642731092656?e=1650499200&v=beta&t=Qyi7O5bq-YWNOJMI9Kriq6q4dblDDsOMNoSV99tQZVQ"
    ]);
});

Route::get('/blog', function () {
    return view('post');
});
