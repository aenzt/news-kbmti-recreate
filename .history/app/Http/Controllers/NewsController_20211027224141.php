<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Bureau;

class NewsController extends Controller
{
    public function index(){
        return view('news', [
            'title' => 'News',
            'news' => News::all(),
            'bureau' => Bureau::all()
        ]);
    }
}
