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

    function Header_request(Request $request){
    //specific data  pass/pathanor jonno
    /*     $name=$request->header('name');
        $age=$request->header('age');
        return "Your name is $name and your age is $age"; */

        // icha moto data pass/pathanor jonno

        return $request->header();
    
    }

    function Multiple_request(){
       $header=request()->header();
       $body=request()->all();
       $name=request()->name;
       $age=request()->age;
       return array(
           'header'=>$header,
           'body'=>$body,
           'name'=>$name,   
           'age'=>$age
       );
    }


function Multiple_fromData(Request $request){ 

   //  return $request->input();

   $photoFile=$request->file('photo');
   $fileSize=filesize($photoFile);
   $fileType=filetype($photoFile);
   $fileName=$photoFile->getClientOriginalName();
   $fileExtention=$photoFile->extension();
    
   return array(
       "fileSize"=>$fileSize,
       "fileType"=>$fileType,
       "fileName"=>$fileName,
       "fileExtention"=>$fileExtention,
       
   );
    
}

function File_upload(Request $request){
     if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $file->move(public_path('uploads'), $file->getClientOriginalName());
        return response()->json(['message' => 'Uploaded successfully']);
    } else {
        return response()->json(['error' => 'No file uploaded'], 400);
    }
}


 function Cookie(Request $request){
    return  $request->cookie();
 }

 function Array(){
    return array(
        array(
            "name"=>"Rakib",
            "age"=>20,
            "city"=>"Dhaka"
        ),
        array(
            "name"=>"Rakib",
            "age"=>20,
            "city"=>"Dhaka"
        ),
        array(
            "name"=>"Rakib",
            "age"=>20,
            "city"=>"Dhaka"
        ),
        array(
            "name"=>"Rakib",
            "age"=>20,
            "city"=>"Dhaka"
        ),
    );
 }

function JsonResponse(Request $request){
    $message="success";
    $data=array(
        "name"=>"Rakib",
        "age"=>20,
        "city"=>"Dhaka"
    );
     return response()->json([
        "message"=>$message,
        "data"=>$data
    ],status:201);
 
}

function Redirect(Request $request){
    return redirect('demo');
}


function CreateCookie(Request $request){
    $name="Token";
    $value="This is a data";
    $minutes=60;
    $path='/';
    $domain=$_SERVER['SERVER_NAME'];
    $secure=false;
    $httpOnly=true;
    return response("success")->cookie($name,$value,$minutes,$path,$domain,$secure,$httpOnly);
}

function ResponseHeader(Request $request){
     
    return response("success")->header("Token","This is a data")->header("name","Rakib");



}


}