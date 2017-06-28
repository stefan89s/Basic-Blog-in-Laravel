<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index() {
    	return view('pages.index');
    }

    public function about() {
    	return view('pages.about');
    }

    public function contact() {
    	return view('pages.contact');
    }

    public function delete($id) {
        $post = Post::find($id);
    	return view('pages.delete')->with('post', $post);
    }
}
