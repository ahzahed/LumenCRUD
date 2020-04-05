<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    function Create(Request $request)
    {
        $name = $request->input("name");
        $roll = $request->input("roll");
        $city = $request->input("city");
        $phone = $request->input("phone");
        $class = $request->input("class");

        $SQL = "INSERT INTO `student`(`name`, `roll`, `city`, `phone`, `class`) VALUES (?,?,?,?,?)";
        $result = DB::insert($SQL, [$name, $roll, $city, $phone, $class]);

        if($result==true){
            return "Data Save Success";
        }
        else{
            return "Data Save Fail! Try Again";
        }
    }

    function Read(Request $request)
    {
        $SQL = "SELECT * FROM student";
        $request = DB::select($SQL);
        return $request;
    }

    function Update(Request $request)
    {
        $id = $request->input("id");
        $name = $request->input("name");
        $phone = $request->input("phone");

        $SQL = "UPDATE `student` SET `name`=?,`phone`=? WHERE `id`=?";
        $result = DB::update($SQL, [$name,$phone,$id]);
        if($result==true){
            return "Data Update Success";
        }
        else{
            return "Data Update Fail! Try Again";
        }
    }

    function Delete(Request $request)
    {
        $id = $request->input("id");
        $SQL = "DELETE FROM `student` WHERE `id`=?";
        $result = DB::delete($SQL, [$id]);
        if($result==true){
            return "Data Delete Success";
        }
        else{
            return "Data Delete Fail! Try Again";
        }
    }
}
