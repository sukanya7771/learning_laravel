<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //this helps us in using the DB class (query builder)
class Register extends Controller
{
    //
    function listing($id){
        
        $data['result'] = DB::table('vendors')->where('id',$id)->get();
       // echo '<pre>';
       // print_r($data['result']);
        //die();
       /*foreach($data as $res){
        $bal = DB::table('wallet')
               ->where('id',$res->wallet_bal)
               ->get(); 
        $cat =DB::table('wallet')
               ->where('id',$res->job_category)
               ->get();
        $cty = DB::table('wallet')
               ->where('id',$res->city)
               ->get(); 
         $data['bal'] = $bal[0]->bal_amt;
         $data['cat'] = $cat[0]->category_name;
         $data['cty'] = $cty[0]->name;                                         
       }*/ 
        return view('admin.manage.list',$data);

    }

    function submit(Request $request){
       $request->validate([
        'full_name'=>'required',
        'phno'=>'required',
        
        'email'=>'required',
        'pass'=>'required',
        'city'=>'required',
        'category'=>'required',
        'amount'=>'required'
        
       ]);

      // $image = $request->file('image')->store('public/post');
      // $image = $request->file('image');
      // $ext= $image->extension();
      // $file = time().'.'.$ext;
      // $image->storeAs('/public/post',$file);
        
        $data = array(
         'full_name'=>$request->input('full_name'),
         'phno'=>$request->input('phno'),
         'email_add'=>$request->input('email'),
         'password'=>md5($request->input('pass')),
         'city'=>$request->input('city'),
         'job_category'=>$request->input('category'),
         'wallet_bal'=>$request->input('amount'),
        

        );

        DB::table('vendors')->insert($data);
        $request->session()->flash('msg','Data Saved');
        return redirect('/admin');

    }

    function edit(Request $request, $id){

       // echo "Edit";
        $data['result'] = DB::table('vendors')->where('id',$id)->get();
       // echo '<pre>';
       // print_r($data['result']);
       // die();
        $data['cities'] = DB::table('city')->orderBy('name','asc')->get();
        $data['cats'] = DB::table('vendor_job_category')->orderBy('id','asc')->get();
        $data['wallet'] = DB::table('wallet')->orderBy('id','asc')->get();

        return view('admin.manage.edit',$data);
      }  

     function update(Request $request, $id){


        
       $request->validate([
        'full_name'=>'required',
        'phone_number'=>'required',
        
        'email'=>'required',
        
        'city'=>'required',
        'category'=>'required',
        'amount'=>'required',
        'adhaar_card'=>'required|mimes:jpg,jpeg,png',
        'pan_card'=>'required|mimes:jpg,jpeg,png',
        'license'=>'required|mimes:jpg,jpeg,png'
        
       ]);

       //$adhaar_image = $request->file('adhaar_card')->store('public/post');
      // $pan_image = $request->file('pan_card')->store('public/post');
      // $license_image = $request->file('license')->store('public/post');
       $adhaar_image = $request->file('adhaar_card');
       $ext= $adhaar_image->extension();
       $file_adhaar = sha1(date('d-m-Y H:i:s').rand(10000,1000000)).'.'.$ext;
       $adhaar_image->storeAs('/public/post',$file_adhaar);

       $pan_image = $request->file('pan_card');
       $ext= $pan_image->extension();
       $file_pan = sha1(date('d-m-Y H:i:s').rand(10000,1000000)).'.'.$ext;
       $pan_image->storeAs('/public/post',$file_pan);

       $license_image = $request->file('license');
       $ext= $license_image->extension();
       $file_license = sha1(date('d-m-Y H:i:s').rand(10000,1000000)).'.'.$ext;
       $license_image->storeAs('/public/post',$file_license);

       


    
    
        
        $data = array(
         'full_name'=>$request->input('full_name'),
         'phno'=>$request->input('phone_number'),
         'email_add'=>$request->input('email'),
         'adhaar_card'=>$file_adhaar,
         'pan_card'=>$file_pan,
         'license'=>$file_license,
         'city'=>$request->input('city'),
         'job_category'=>$request->input('category'),
         'wallet_bal'=>$request->input('amount'),
        

        );

    
        
        DB::table('vendors')->where('id',$id)->update($data);
        $request->session()->flash('msg','Data Updated');
        return redirect('/admin/list');
    }
    
}
