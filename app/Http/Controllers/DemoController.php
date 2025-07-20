<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
     function Simple_request(Request $request){
         return "This is a simple request";
     }

    function Url_prameters(Request $request){
        
        $name=$request->name;
        $age=$request->age;
        return "Your name is $name and your age is $age";
    }
    function Json_body_request(Request $request){
       //specific data  pass/pathanor jonno
     /*   $name=$request->name;
       $age=$request->age;
       return "Your name is $name and your age is $age"; */

       // icha moto data pass/pathanor jonno
 
       return $request->all();

    }
}
