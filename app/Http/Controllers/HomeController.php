<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
   {
       /*
    $visitor = Visitor::first();
    $date = Carbon::parse($visitor->date." ".$visitor->end_date);

    if( Carbon::now()->gt($date) ){
        $visitor->status = "finished";
        $visitor->save();
    }

   return $date.'  _______  ' . Carbon::now() .'  __________  '. Carbon::now()->gt($date);

    */




   /*  $visitors = Visitor::where('date',Carbon::now()->format('Y-m-d'))->get();
    $date = Carbon::parse($visitors[1]->date." ".$visitors[1]->end_date);
    if( Carbon::now()->gt($date) ){
        return "true";
    }
    return "false"; */
       return view('home.home');
   }



}
