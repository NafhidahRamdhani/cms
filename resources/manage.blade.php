@extends('layouts.main')

@section('content')
<div class = "col-lg-8">
    <div class = "card-header text-center">
        <h3>Daftar Artikel</h3>
    </div>
    <a href="article/add" class="btn btn-primary">Tambah Data</a>
    </br>
    </br>
    <div clas = "card body">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
            </tr>
            </thead>
        <tbody>
 @foreach($article as $a)
            <tr>
                <td>{{$a->id}}</td>
                <td>{{$a->title}}</td>
                <td>{{$a->created_at}}</td>
                <td>
                <a href="article/edit/{{ $a->id }}" class="badge badgewarning">Edit</a>
                <a href="article/delete/{{ $a->id }}" class="badge badgedanger">Hapus</a>
                <td>
            </tr>
 @endforeach
        </tbody>
</table>
</div>
</div>
</div>
@endsection
        
    