<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        Auth::User();
        return view('pages.home');
    }

    public function show($id)
    {
        //
    }

}
