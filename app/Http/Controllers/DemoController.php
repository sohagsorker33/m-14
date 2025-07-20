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
    
}
