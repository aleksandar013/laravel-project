<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;

class ArticlesController extends Controller
{
      public function __construct()
        {
            $this->middleware('auth',['except'=>['index','show']]);
        }
    public function index()
    {

    	$articles = Article::latest('published_at')->published()->get();

    	return view('articles.index',compact('articles'));
    }

    public function show($id)
    {

        $article=Article::findOrFail($id);

    	return view('articles.show',compact('article'));
    }

    public function create()
    {
    	return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
    	
    	$article = new Article($request->all());
        Auth::user()->articles()->save($article);

    	return redirect('articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.edit',compact('article'));

    }

    public function update($id,ArticleRequest $request)
    {

        $article =Article::findOrFail($id);
        $article->update($request->all());

        return redirect('articles');
    }
}
