@extends('layouts.main')

@section('content')
<div class = "col-lg-8">
    <div class = "card-header text-center text-warning">
        <h2>DAFTAR ARTIKEL</h2>
    </div>
    <a href="article/add" class="btn btn-warning">Tambah Data</a>
    </br>
    </br>
    <div clas = "card body">
        <table class="table table-bordered table-striped text-warning">
            <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Result</th>
                <th>Order</th>
            </tr>
            </thead>
        <tbody>
 @foreach($article as $a)
            <tr>
                <td>{{$a->id}}</td>
                <td>{{$a->title}}</td>
                <td>{{$a->created_at}}</td>
                <td>
                    <a href="article/edit/{{ $a->id }}" class="badge badge-warning">Edit</a>
                    <a href="article/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
                    </td>
                <td>{{$a->result}}</td>
                <td>{{$a->order}}</td>
            </tr>
 @endforeach
        </tbody>
</table>
</div>
</div>
</div>
@endsection
        
    