<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticleController extends Controller {

    public function index()
    {
        $articles = Article::latest()->paginate(10);

        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        $comments = Article::findOrFail($id)->comment;

        return view('article.show', compact('article', 'comments'));
    }

}
