<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Models\desktop;
use App\Models\processor;


use App\Models\country;
use App\Models\city;

Route::get('/get_processor', function () {
    $processor=desktop::with('processsor');
    return $processor;
});
Route::get('/get_desktop', function () {
    $desktop=processor::with('desktop');
    return $desktop;
});

Route::get('/get_country', function () {
    $cities=country::with('city')->get();
    return $cities;
});
Route::get('/get_cities', function () {
    $countries=city::with('country')->get();
    return $countries;
});

