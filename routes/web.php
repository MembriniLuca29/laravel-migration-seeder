<?php

use Illuminate\Support\Facades\Route;
use App\Models\Train; 

Route::get('/', function () {
    $trains = Train::all();
    dd($trains); 
});

