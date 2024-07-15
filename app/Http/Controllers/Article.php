<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article as ArticleModel;

class Article extends Controller
{
    public function __invoke() {
        $articles = ArticleModel::orderByDesc('id')->limit(18)->get();
        return view('app.articles', ['articles' => $articles]);
    }

    public function article(Request $req, ArticleModel $article) {
        return view('app.article', ['article' => $article]);
    }
}
