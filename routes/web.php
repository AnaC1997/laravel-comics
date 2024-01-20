<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $menuLinks = config("data.menuLinks");
    $infoCard = config("data.infoCard");

    return view('pagina', ['menuLinks' => $menuLinks], ['infoCard' => $infoCard]);
});
