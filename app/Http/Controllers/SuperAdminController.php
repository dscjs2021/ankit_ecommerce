<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class SuperAdminController extends Controller
{
    //

   

    function index(){

         $getalldata = user::all();
        //  dd($getalldata);
        return view('superadmin.admin',['getalldata'=>$getalldata]);
    }
}
