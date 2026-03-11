<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/belajar', function () {
    return 'Selamat datang di belajar routing pada laravel';
});

Route::get('/user', [UserController::class, 'index']);

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($suri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);
// Route::match(['get', 'post'], '/', function () {
//     //
// });
// Route::any('/', function () {
//     //
// });

// <from method="POST" action="/provile">
//     @scrf
//     ...
// </from>

Route::redirect('/here', '/there');
Route::redirect('/here', '/there', 301);
Route::permanentRedirect('/here', '/there');
Route::get('/there', function () {
    return 'Selamat! Kamu berhasil dialihkan (redirect) ke halaman ini.';
});

Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Fahmi']);

Route::get('user/{name?}', function ($name = null){
    return $name;
});
Route::get('user/{name?}', function ($name = 'Jhon'){
    return $name;
});