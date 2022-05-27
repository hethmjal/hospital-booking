<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlternateDirectorController extends Controller
{
    public function createvisitors()
   {
    if(Auth::user()->type == "security" ){
        return redirect()->back();
    }
       $visitors = Visitor::get();
     //  return $visitors;
       return view('home.createvisitors',['visitors'=>$visitors]);
   }

   public function store(Request $request)
   {
    if(Auth::user()->type == "security" ){
        return redirect()->back();
    }
       //return $request->all();
   $visitor =  Visitor::updateOrCreate(['id' =>  $request->id],[
        "patient_id"=>$request->patient_id,
        "name"=>$request->name,
        "patient_name"=>$request->patient_name,
        "type"=>$request->type,
        "department"=>$request->department,
        "seconed_date"=>$request->seconed_date,

        "date"=>$request->date,
        "start_date"=>$request->start_date,
        "end_date"=>$request->end_date,
        "status"=>"active",
    ]);
    $visitors = Visitor::get();
    $count = $visitors->count();
    $data = [
        'count'=>$count,
        'visitor'=>$visitor,
    ];
    return $data;

    }

    public function update(Request $request,$id)
    {

     return $request->all();

     }

     public function destroy($id)
    {
        if(Auth::user()->type == "security" ){
            return redirect()->back();
        }
        Visitor::destroy($id);
        $visitors = Visitor::get();
        $count = $visitors->count();

        return $count;

     }
}
