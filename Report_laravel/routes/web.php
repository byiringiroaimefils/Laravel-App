<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\relationshipControler;

Route::get('/', function () {
    return view('report');
});
Route::get('/showreport', [relationshipControler::class,"show_report"]);

