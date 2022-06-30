<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //this helps us in using the DB class (query builder)
class Frontend extends Controller
{
    //
     function form_ele(){
        $data['result'] = DB::table('city')->orderBy('name','asc')->get();
       // echo '<pre>';
       // print_r($data['result']);
        //die();
        return view('frontend.register',$data);

    }
}
