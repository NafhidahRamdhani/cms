@extends('layouts.main')

@section('title', 'Manage')

@section('content')

<div class="container" style="padding-top: 20px">
    <div class="textCake text-warning" style="padding-top: 70px">
        <p>TABEL</p>
      </div>
    <table class="table table-bordered table-striped text-black" style="text-align: center" bgcolor='DAA520'>
        <thead>
        <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Roles</th>
        <th><i class="fas fa-sliders-h"></i></th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $u)
        <tr>
        <td>{{$u->id}}</td>
        <td>{{$u->name}}</td>
        <td>{{$u->email}}</td>
        <td>{{$u->password}}</td>
        <td>{{$u->roles}}</td>
        <td>{{$u->image}}</td>
        <td><img src="{{asset('/storage/'.$u->image) }}" alt="imageCap"></td>
        <td><a href="manageUser/editUser/{{ $u->id }}" class="badge badge-warning">Edit</a>
            <a href="manageUser/delete/{{ $u->id }}" class="badge badge-danger">Hapus</a>
        </td>

        </tr>
        @endforeach
        </tbody>
    </table>
    <a href="manageUser/addUser" class="btn btn-warning float-right">Tambah Data</a>
    <a href="/manageUser/coba_pdf" class="btn btn-warning" target="_blank">CETAK PDF</a>
</div>
@endsection 

