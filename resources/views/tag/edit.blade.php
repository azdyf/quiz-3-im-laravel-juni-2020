@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <h1 class="text-gray-800">Edit Tags</h1>
    </div>
    <div class="col-sm-6 text-right">
        <a href="/tag" class="btn btn-danger"><i class="fa fa-times-circle"></i> Batal</a>
    </div>
</div>
<hr>

<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <form action="/tag/{{ $tag->id }}" method="POST" autocomplete="off">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama Tags</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" value="{{ $tag->name }}" required="">
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
        </form>
    </div>
</div>
@endsection
