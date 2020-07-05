@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <h1 class="text-gray-800">Daftar Artikel</h1>
    </div>
    <div class="col-sm-6 text-right">
        <a href="/artikel/create" class="btn btn-primary"><i class="fa fa-plus-square"></i> Tambah</a>
    </div>
</div>
<hr>
<div class="card primary shadow h-100 py-2">
    <div class="card-body">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Isi Artikel</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $key => $article)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($article->title, 30, $end='...') }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($article->content, 30, $end='...') }}</td>
                    <td style="text-align: center">
                        <a href="/artikel/{{ $article->id }}" class="btn btn-info mr-3"><i class="fa fa-eye"></i></a>
                        <a href="/artikel/edit/{{ $article->id }}" class="btn btn-success mr-3"><i
                                class="fa fa-edit"></i></a>
                        <form action="/artikel/{{ $article->id }}" method="POST" style="display: inline">
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

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush
