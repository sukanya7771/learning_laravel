<?php

namespace App\Http\Controllers\super;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //this helps us in using the DB class (query builder)
class SuperAdmin extends Controller
{
    //
    function listing(){
        
        $data['result'] = DB::table('vendors')->get();
       
        return view('super.manage.list',$data);

    }

    function edit_inactive(Request $request, $id){

        
        $data = array(
         'status'=>1
         );

    
        
        DB::table('vendors')->where('id',$id)->update($data);
        $request->session()->flash('msg','Vendor Activated');
        return redirect('/superadmin/list');
    }
    function edit_active(Request $request, $id){

        
        $data = array(
         'status'=>0
         );

    
        
        DB::table('vendors')->where('id',$id)->update($data);
        $request->session()->flash('msg','Vendor Activated');
        return redirect('/superadmin/list');
    }

}
