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

    function insert($id){
        $changestatus = user::select('status')->where('id',$id)->first();
       
        if($changestatus->status==1){
            $status = 0;   
            
            
        }
        else{
            $status = 1;
           
        }
        
        $changestatus =  user::where('id',$id)->update(['status'=>$status]);
      

        return  redirect()->back();

    }

    // delete row

    function destroy($id){
         User::find($id)->delete();
         return redirect(route('superadminindex'));
    }

    // edit row 

    function edit($id){
            $editpage = user::find($id);
            return view('superadmin.edit',['editpage'=>$editpage]);
    }

    function update(Request $request, $id){
        $editpage = user::find($id);
        $editpage->name = $request->name;
        $editpage->email = $request->email;
        $editpage->save();
        return redirect(route('superadminindex'));


    }
}
