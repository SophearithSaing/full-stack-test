<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function (Request $request) {
    return view('properties', [
        'offset' => $request->offset,
        'search' => $request->search,
    ]);
});

Route::get('/{city}', function (Request $request, $city) {
    return view('filtered-properties', [
        'offset' => $request->offset,
        'city' => $city,
    ]);
});
