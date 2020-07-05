@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <h1 class="text-gray-800">Daftar Tags</h1>
    </div>
    <div class="col-sm-6 text-right">
        <a href="/tag/create" class="btn btn-primary"><i class="fa fa-plus-square"></i> Tambah</a>
    </div>
</div>
<hr>
<div class="card primary shadow h-100 py-2">
    <div class="card-body">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $key => $tag)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $tag->name }}</td>
                    <td style="text-align: center">
                        <a href="/tag/edit/{{ $tag->id }}" class="btn btn-success mr-3"><i class="fa fa-edit"></i></a>
                        <form action="/tag/{{ $tag->id }}" method="POST" style="display: inline">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger" onclick="return confirm('yakin hapus?')"><i
                                    class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
