<?php

namespace App\Http\Controllers;

use App\EORM;
use Illuminate\Http\Request;

class EORMController extends Controller
{
    function selectAll(){
        $result = EORM::all();
        return $result;
    }
    function selectById(Request $request){
        $id = $request->input('id');
        $result = EORM::where('id',$id)->get();
        return $result;
    }
    function insert(Request $request){

        $name = $request->input("name");
        $roll = $request->input("roll");
        $city = $request->input("city");
        $phone = $request->input("phone");
        $class = $request->input("class");
        $result = EORM::insert(['name'=>$name, 'roll'=>$roll, 'city'=>$city, 'phone'=>$phone, 'class'=>$class]);
        if($result==true){
            return "Data Save Success";
        }
        else{
            return "Data Save Fail! Try Again";
        }
    }
    function delete(Request $request){
        $id = $request->input('id');
        $result = EORM::where('id',$id)->delete();
        if($result==true){
            return "Data Delete Success";
        }
        else{
            return "Data Delete Fail! Try Again";
        }
    }
    function update(Request $request){
        $name = $request->input("name");
        $id = $request->input("id");
        $result = EORM::where('id',$id)->update(['name'=>$name]);
        if($result==true){
            return "Data Update Success";
        }
        else{
            return "Data Update Fail! Try Again";
        }
    }


    function count(){
        $result = EORM::count();
        return $result;
    }
    function min(){
        $result = EORM::min('roll');
        return $result;
    }
    function max(){
        $result = EORM::count('roll');
        return $result;
    }
    function avg(){
        $result = EORM::avg('roll');
        return $result;
    }
    function sum(){
        $result = EORM::sum('roll');
        return $result;
    }
}
