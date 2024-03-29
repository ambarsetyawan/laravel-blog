<?php namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ArticleRequest;
use Laracasts\Flash\Flash;


/**
 * Class AdminArticleController
 * @package App\Http\Controllers\Admin
 */
class AdminArticleController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @param Article $article
     * @return \Illuminate\View\View
     */
    public function index(Article $article)
    {
        $articles = $article->latest()->get();

        return view('admin.article.index', compact('articles'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::lists('name', 'id');

        return view('admin.article.create', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ArticleRequest $request)
    {
//        dd(\Auth::user());
        \Auth::user()->articles()->save(new Article($request->all()));

        return \Redirect::to('/admin/article');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Article $article
     * @return \Illuminate\View\View
     */
    public function edit(Article $article)
    {
        $categories = Category::lists('name', 'id');

        return view('admin.article.edit', compact('article', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Article $article
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Article $article, ArticleRequest $request)
    {
//        dd($request->all());
        $article->update($request->all());

        return redirect('admin/article');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Article $article
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Article $article)
    {
        $article->delete();

        Flash::success('Content deleted!');

        return redirect('admin/article');
    }

}
