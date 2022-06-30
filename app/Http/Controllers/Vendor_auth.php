<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //this helps us in using the DB class (query builder)
class Vendor_auth extends Controller
{
    //
     function login_submit(Request $request){
     $email = $request->input('email');
     $password = md5($request->input('password'));

     $result = DB::table('vendors')
               ->where('email_add',$email)
               ->where('password',$password)
               ->get();
           // echo "<pre>";
            //print_r($result);
       $balance = DB::table('wallet')
               ->where('id',$result[0]->wallet_bal)
               ->get();        
         if(isset($result[0]->id))
          {
                $request->session()->put('OYZER_VENDOR_ID',$result[0]->id);
                $request->session()->put('wallet',$balance[0]->bal_amt);
                
                $pieces = explode(' ', $result[0]->full_name);
                $first = $pieces[0]; // piece1
                $last = $pieces[1]; // piece2
                $request->session()->put('first',$first);
                $request->session()->put('last',$last);
                return redirect('/admin/list/'.$result[0]->id);
            }
            
         else{
            $request->session()->flash('msg',"Please Enter Valid Login Details");
            return redirect('/admin');
         }     
            }
}
