<?php

use App\Http\Controllers\Guest\TrainController;
use Illuminate\Support\Facades\Route;
use App\Models\Train;

Route::get('/trains', function () {
    $trains = Train::all();
    dd($trains); 
})->name('trains.index');


Route::get('/', [TrainController::class, 'index'])->name('home');


