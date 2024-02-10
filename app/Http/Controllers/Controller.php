<?php

namespace App\Http\Controllers;

use App\Models\persons;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    public function home(){
        $personData = array(
            'list' => DB::table('persons')->get()
        );
        $srnum = 1;
        $title = "C-U-R-D";
        $buttontitle = "Add New Data";
        return view('Home',compact(["title","buttontitle","srnum"]),$personData);
    }
    public function addperson(){
        $title = "C-U-R-D";
        return view('addperson',compact('title'));
    }
    public function delete($id){
        $persondata = persons::find($id);
        $persondata->delete();
        return redirect('/')->with('status','The filed has been deleted successfully!');
    }
    public function edit($id){
        $title = "C-U-R-D";
 
        $persondata = persons::find($id);
        return view('edit',compact("persondata","title"));
    }
    public function update(Request $req,$id){
        $person = persons::find($id);
        $person->name = $req->name;
        $person->id = $req->id;
        $person->update();
        return redirect('/')->with('status','The data has been updated successfully!');
    }
    use AuthorizesRequests, ValidatesRequests;

}
