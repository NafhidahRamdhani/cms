@extends('layouts.main')

@section('content')
<div class = "col-lg-8">
    <div class = "card-header text-warning">
        <h3>Daftar Artikel</h3>
    </div>
    </br>
    </br>
    <form action="/article/create" method="POST">
        @csrf
        <div class="form-group text-warning">
            <label for="title">Judul</label>
            <input type="text" class="form-control" required="required" name="title"></br>
        </div>
        <div class="form-group text-warning">
            <label for="content">Content</label>
            <input type="text" class="form-control" required="required" name="content"></br>
        </div>
        <div class="form-group text-warning">
            <label for="image">Feature Image</label>
            <input type="text" class="form-control" required="required" name="image"></br>
        </div>
        <div class="form-group text-warning">
            <label for="result">Result</label>
            <input type="text" class="form-control" required="required" name="result"></br>
        </div>
        <div class="form-group text-warning">
            <label for="order">Order</label>
            <input type="text" class="form-control" required="required" name="order"></br>
        </div>
        <button type="submit" name="add" class="btn btn-warning float-right">Tambah Data</button>
    </form>
    </div>
</div>
 @endsection
            
