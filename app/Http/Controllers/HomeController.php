<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function subscribe(Request $request){
        if(Newsletter::hasMember($request->email)){
            dd('opa');
        }else{
        Newsletter::subscribe($request->email);
        }
        return back();
    }
}
