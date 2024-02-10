<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persons;
class person extends Controller
{

    function addpersons(Request $request){
        $filename = '';
        if($request->hasFile('image')){
            $filename = $request->getSchemeAndHttpHost().'/assets/images/'.time().'.'.$request->image->extension();
            $request->image->move(public_path('/assets/images/'),$filename);
        }
        $data = new persons();
        $data->image = $filename;
        $data->name = $request->name;
        $data->id = $request->id;
        $data->save();
        return redirect('/')->with('status',"Data Added SuccessulLy!!!");
   }
}
