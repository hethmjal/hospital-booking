<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecurityManController extends Controller
{
    public function viewvisitors()
    {
        if(Auth::user()->type == "director" ){
            return redirect()->back();
        }
        $visitors = Visitor::latest()->paginate(20);
        return view('home.viewVisitors',['visitors'=>$visitors]);
    }
}
    