@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <h1 class="text-gray-800">Edit Artikel</h1>
    </div>
    <div class="col-sm-6 text-right">
        <a href="/artikel" class="btn btn-danger"><i class="fa fa-times-circle"></i> Batal</a>
    </div>
</div>
<hr>

<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <form action="/artikel/{{ $article->id }}" method="POST" autocomplete="off">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="title" value="{{ $article->title }}"
                        required="">
                </div>
            </div>
            <div class="form-group row">
                <label for="content" class="col-sm-2 col-form-label">Isi Artikel</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="content" id="content" rows="4"
                        required="">{{ $article->content }}</textarea>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
        </form>
    </div>
</div>
@endsection
