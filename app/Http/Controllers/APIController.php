<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Test;

class APIController extends Controller
{
   public function AddUsers(Request $request){
       
       if($request->isMethod('post')){
           $testdata = $request->input();
         //  echo "<pre>"; print_r($testdata); die;
           $test = new Test;
           $test->name = $testdata['name'];
           $test->email = $testdata['email'];
           $test->password = bcrypt($testdata['password']);
           $test->save();
           return response()->json(['message'=>'Data added successfully']);
           
       }
       
   }
}
