<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AccueilController extends Controller
{
    public function index()
    {
        return view('Acccueil.Home');
    }

    public function index2()
    {
        return view('Acccueil.About');
    }


    public function index3()
    {
        return view('Acccueil.Nouvelles');
    }
   
}

