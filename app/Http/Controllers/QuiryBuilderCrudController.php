<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QuiryBuilderCrudController extends Controller
{
    function insert(Request $request){
        $name = $request->input("name");
        $roll = $request->input("roll");
        $city = $request->input("city");
        $phone = $request->input("phone");
        $class = $request->input("class");

        $result = DB::table('student')->insert(['name'=>$name, 'roll'=>$roll, 'city'=>$city, 'phone'=>$phone, 'class'=>$class]);
        if($result==true){
            return "Data Save Success";
        }
        else{
            return "Data Save Fail! Try Again";
        }
    }
    function update(Request $request){
        $name = $request->input("name");
        $id = $request->input("id");
        $result = DB::table('student')->where('id',$id)->update(['name'=>$name]);
        if($result==true){
            return "Data Update Success";
        }
        else{
            return "Data Update Fail! Try Again";
        }
    }
    function delete(Request $request){
        $id = $request->input("id");
        $result = DB::table('student')->where('id',$id)->delete();
        if($result==true){
            return "Data Delete Success";
        }
        else{
            return "Data Delete Fail! Try Again";
        }
    }
}
