<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\person;
use Illuminate\Support\Facades\Route;




Route::get('/',[Controller::class,'home']);
Route::get('AddPerson',[Controller::class,'addperson']);
Route::post('addpersons',[person::class,'addpersons']);
Route::get('delete/{cnic}',[Controller::class,'delete']);
Route::get('edit/{cnic}',[Controller::class,'edit']);
Route::put('update/{cnic}',[Controller::class,'update']);