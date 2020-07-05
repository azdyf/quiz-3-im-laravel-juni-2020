<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TagModel;

class TagController extends Controller
{
    public function index()
    {
        $tags = TagModel::getAll();
        return view('tag.index', compact('tags'));
    }

    public function create()
    {
        return view('tag.form');
    }

    public function store(Request $request)
    {
        $new_tag = TagModel::save($request->all());
        return redirect('/tag');
    }

    public function show($id)
    {
        $tag = TagModel::getById($id);
        return view('tag.show', compact('tag'));
    }

    public function edit($id)
    {
        $tag = TagModel::getById($id);
        return view('tag.edit', compact('tag'));
    }

    public function update($id, Request $request)
    {
        $tag = TagModel::update($id, $request);
        return redirect('/tag');
    }

    public function destroy($id)
    {
        $tag = TagModel::destroy($id);
        return redirect('/tag');
    }
}
