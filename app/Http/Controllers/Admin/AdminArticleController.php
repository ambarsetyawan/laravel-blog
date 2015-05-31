<?php namespace App\Http\Controllers\Admin;

use App\Article;
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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $articles = Article::latest()->get();

        return view('admin.article.index', compact('articles'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.article.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ArticleRequest $request)
    {
        \Auth::user()->article()->save(new Article($request->all()));

        Flash::success('Content created!');

        return \Redirect::to('/admin/article');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('admin.article.edit', compact('article'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        Flash::success('Update content!');

        return redirect('admin/article');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Article::find($id)->delete();

        Flash::success('Content deleted!');

        return redirect('admin/article');
    }
}
