<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $art = Article::find();
        return view('art.index', ['art' => $art]);
    }
}
