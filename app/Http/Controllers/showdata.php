<?php

namespace App\Http\Controllers;

use App\Models\persons;
use Illuminate\Http\Request;

class showdata extends Controller
{
    public function showDta(){
        $data = persons::all();
        return view('/',compact($data));
    }
}
