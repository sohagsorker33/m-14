<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
     function Simple_request(Request $request){
         return "This is a simple request";
     }

    
}
