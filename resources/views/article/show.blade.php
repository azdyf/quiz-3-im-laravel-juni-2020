@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <h1 class="text-gray-800">Detail Artikel</h1>
    </div>
    <div class="col-sm-6 text-right">
        <a href="/artikel" class="btn btn-info"><i class="fa fa-undo"></i> Kembali</a>
    </div>
</div>
<hr>
<div class="card shadow">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">{{ $article->title }}</h3>
        <span>Created at:
            {{ Carbon\Carbon::parse($article->created_at)->format('d F Y H:i:s') }}</span>
        @if (!empty($p->updated_at))
        <span>| Updated at:
            {{ Carbon\Carbon::parse($article->updated_at)->format('d F Y H:i:s') }}</span>
        @endif
    </div>
    <div class="card-body">
        <p>
            {{ $article->content }}
        </p>
    </div>
</div>
@endsection
