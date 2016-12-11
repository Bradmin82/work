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
        $first = 'Brad';
        $last = 'Weldy';
        $email = 'brad@bradweldy.com';

        $full = $first . " " . $last;
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $full;
    	#return view('pages.about')->with("fullname", $full);
        return view('pages.about')->withData($data);
    }
    /*public function getContact() {
        return view('pages.contact');
    }*/
    public function contact() {
        return view('pages.contact');
    }

}