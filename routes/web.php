<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Property_details;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/property-details', 'Property_details@index'); 
// Route::get('/form-validation', 'Property_details@form_validation'); 


Route::get('/property-details', [Property_details::class, 'index']); 
Route::get('/form-validation', [Property_details::class, 'form_validation']); 