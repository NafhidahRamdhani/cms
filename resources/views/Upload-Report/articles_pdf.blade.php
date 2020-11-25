<!DOCTYPE html>
<html>
<head>
        <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
        <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
    }
        </style>
        <center>
            <h2>LAPORAN ARTICLE</h4>
        </center>
        <table class='table table-bordered' border="1px solid black">
            <thead>
                <tr bgcolor='FFD700' align='center'>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($article as $a)
                <tr bgcolor='D3D3D3' align='center'>
                    <td>{{ $i++ }}</td>
                    <td>{{$a->title}}</td>
                    <td>{{$a->content}}</td>
                    <td><img src="{{ './storage/'.$a->featured_image}}" alt=""></td>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>