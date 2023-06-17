<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $all_post = Post::Latest()->paginate(5);

        // $apikey = '345892a51ab765f2f7ecbe914162334f';
        // $category = 'technology';
        // $url = "https://gnews.io/api/v4/top-headlines?category=$category&lang=en&country=us&max=10&apikey=$apikey";

        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $data = json_decode(curl_exec($ch), true);
        // curl_close($ch);
        // $articles = $data['articles'];
        // ,'articles'
        
        return view('home',compact('all_post'));
    }
}