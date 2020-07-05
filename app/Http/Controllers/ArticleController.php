<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = ArticleModel::getAll();
        return view('article.index', compact('articles'));
    }

    public function create()
    {
        return view('article.form');
    }

    public function store(Request $request)
    {
        $new_article = ArticleModel::save($request->all());
        return redirect('/artikel');
    }

    public function show($id)
    {
        $article = ArticleModel::getById($id);
        return view('article.show', compact('article'));
    }

    public function edit($id)
    {
        $article = ArticleModel::getById($id);
        return view('article.edit', compact('article'));
    }

    public function update($id, Request $request)
    {
        $article = ArticleModel::update($id, $request);
        return redirect('/artikel');
    }

    public function destroy($id)
    {
        $article = ArticleModel::destroy($id);
        return redirect('/artikel');
    }
}
