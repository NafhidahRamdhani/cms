@extends('layouts.main')

@section('content')
<div class = "col-lg-8">
    <div class = "card-header text-center">
        <h3>Daftar Artikel</h3>
    </div>
    </br>
    </br>
    <form action="/article/update/{{$article->id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control"required="required" name="title"></br>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control"required="required" name="content"></br>
        </div>
        <div class="form-group">
            <label for="image">Feature Image</label>
            <input type="text" class="form-control"required="required" name="image"></br>
        </div>
        <button type="submit" name="add" class="btn btnprimary float-right">Tambah Data</button>
    </form>
    </div>
</div>
 @endsection
            
