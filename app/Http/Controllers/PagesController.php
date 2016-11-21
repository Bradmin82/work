<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    /*public function home()
    {
    	$people = ['Taylor', 'Matt', 'Jeffrey'];

    	return view('pages.people', compact('people'));
    }*/
    public function home()
    {
        return view('welcome');
    }
    public function about()
    {
    	return view('pages.about');
    }
}