<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/**
 * Ahora se modicaron el routeservice provider y el kernel.php
 * lo que entiendo esque estos archivos intermediarios era para configurar las rutas web y api
 * sin embargo ahora los archivos estan en la carpeta bootstrap
 */
