<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;


class RSSController extends Controller
{
    public function index(){
        $news = News::latest()->get();
        return response()->view('news/rss', [
            'news' => $news
        ])->header('Content-Type', 'application/xml');
    }







}
