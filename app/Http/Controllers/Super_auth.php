<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //this helps us in using the DB class (query builder)
class Super_auth extends Controller
{
    //
     function login_submit(Request $request){
     $email = $request->input('email');
     $password = $request->input('password');

     $result = DB::table('superadmin')
               ->where('username',$email)
               ->where('password',$password)
               ->get();
           // echo "<pre>";
            //print_r($result);
            
         if(isset($result[0]->id))
          {
                $request->session()->put('OYZER_SUPER_ID',$result[0]->id);
                
                
                /*$pieces = explode(' ', $result[0]->full_name);
                $first = $pieces[0]; // piece1
                $last = $pieces[1]; // piece2
                $request->session()->put('first',$first);
                $request->session()->put('last',$last);*/
                return redirect('/superadmin/list/');
            }
            
         else{
            $request->session()->flash('msg',"Please Enter Valid Login Details");
            return redirect('/superadmin');
         }     
            }
}
