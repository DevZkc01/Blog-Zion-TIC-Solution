<?php

namespace App\Http\Controllers;

use App\Models;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class AcceuilController extends Controller
{

    public function index()
    {
        $apikey = '345892a51ab765f2f7ecbe914162334f';
        $category = 'technology';
        $url = "https://gnews.io/api/v4/top-headlines?category=$category&lang=en&country=us&max=10&apikey=$apikey";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = json_decode(curl_exec($ch), true);
        curl_close($ch);
        $articles = $data['articles'];

        return view('acceuils.index',compact('articles'));
    }
}