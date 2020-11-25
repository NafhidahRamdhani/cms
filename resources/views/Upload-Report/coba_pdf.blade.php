<!DOCTYPE html>
<html>
<head>
        <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
        <style type="text/css">
        table tr td,
        table tr th{
            font-size: 10pt;
    }
        </style>
        <center>
            <h3>LAPORAN ARTICLE</h3>
            
        </center>
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($user as $a)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$a->name}}</td>
                    <td>{{$a->email}}</td>
                    <td>{{$a->roles}}</td>
                    <td><img src="{{ './storage/'.$a->image}}" alt=""></td>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>