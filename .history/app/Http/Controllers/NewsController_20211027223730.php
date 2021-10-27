<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Bureau;

class NewsController extends Controller
{
    public function index(){
        dd(News::all());
        return view('news', [
            'title' => 'News',
            'News' => News::all()
        ]);
    }
}
