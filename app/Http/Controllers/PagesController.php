<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
        //$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        //return view('welcome')->withPosts($posts);

        //create a variable and store all the blog posts in it
        $posts = Post::orderBy('id', 'desc')->paginate(10);

        //return a view and pass in the above variable
        return view('welcome')->withPosts($posts);
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