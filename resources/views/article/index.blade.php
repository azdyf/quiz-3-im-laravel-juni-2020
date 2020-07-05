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
    </div>
</div>
<thead>
    <tr>
        <th>#</th>
        <th>Judul</th>
        <th>Isi Artikel</th>
        <th class="text-center">Aksi</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>Judul Artikel 1</td>
        <td>Isi Konten Artikel 1...</td>
        <td style="text-align: center">
            <a href="" class="btn btn-info mr-3"><i class="fa fa-eye"></i></a>
            <a href="" class="btn btn-success mr-3"><i class="fa fa-edit"></i></a>
            <a href="" class="btn btn-danger mr-3"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
</tbody>
</table>

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
