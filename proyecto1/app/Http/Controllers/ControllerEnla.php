<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerEnla extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('welcome');
        
    }
    public function dashboard()
    {

        return view('dashboard');
        
    }



    


}
