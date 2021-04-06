<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\curd;
use Illuminate\Support\Facades\DB;
class curdController extends Controller
{
    // Display Add Data View while  Calling Index Function From Controller
    
    function index()
    {
        return view('/AddData');
    }

    function adddata(Request $req)
    {
        $rules=array(
            'username'=>'required',
            'email'=>'email:rfc,dns|required',
            'first_name'=>'required|alpha',
            'last_name'=>'required|alpha',
            'gen'=>'required',
            'mobile'=>'required|numeric',
            'portfolio'=>'required|max:4096',
            'dob'=>'required',
            'start_date'=>'required',
            'end_date'=>'required'
        );

        $validate=Validator::make($req->all(),$rules);
     
        if($validate->fails())
        {
            return Redirect('addData')->withErrors($validate);
        }
        else
        {
            $images=array();
            if($req->hasfile('portfolio'))
            {         
                foreach($req->file('portfolio') as $file)
                {

                    $name=$file->getClientOriginalName();
                    $file->move(public_path().'/images',$name);
                    $images[]=$name;
                   
                }
            
            }
            
            $curd=new curd;
            $curd->username=$req->username;
            $curd->email=$req->email;
            $curd->first_name=$req->first_name;
            $curd->last_name=$req->last_name;
            $curd->gender=$req->gen;
            $curd->mobile=$req->mobile;
            $curd->portfolio=implode("|",$images);
            $curd->dob=$req->dob;
            $curd->start_date=$req->start_date;
            $curd->end_date=$req->end_date;
            $result=$curd->save();
            if($result)
            {
                return redirect('/');
            }
            else
            {
                return "Sorry ";
            }
        }
        
       
       
    }

    function display()
    {
        $curd=curd::all();
        return view('index',["data"=>$curd]);
    }

    function edit($id)
    {   
        $curd=curd::where('id',$id)->first();
        return view('Edit',["data"=>$curd]);
    }

    function update(Request $req)
    {
        
        $curd=curd::where('id',$req->id_user)->first();
        $curd->username=$req->username;
        $curd->email=$req->email;
        $curd->first_name=$req->f_name;
        $curd->last_name=$req->l_name;
        $curd->gender=$req->gen;
        $curd->mobile=$req->mno;
        if($req->has('chk'))
        {
            $images=array();
            if($req->hasfile('portfolio'))
            {         
                foreach($req->file('portfolio') as $file)
                {

                    $name=$file->getClientOriginalName();
                    $file->move(public_path().'/images',$name);
                    $images[]=$name;
                   
                }
            
            }
            $curd->portfolio=implode("|",$images);
        }
        else
        {
            $curd->portfolio=$req->img;    
        }
       
        $curd->dob=$req->dob;
        $curd->start_date=$req->s_date;
        $curd->end_date=$req->e_date;
        $result=$curd->save();
        if($result)
        {
            return redirect('/');
        }
        else
        {
            return "Sorry ";
        }
    }

    function delete($id)
    {
        curd::destroy($id);
      
         return redirect('/');
      
    }
}
