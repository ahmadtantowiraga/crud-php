<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD DATA PENDUDUK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <h1 class="text-center mb-4">Data Penduduk</h1>

    <div class="container">
    <a href="/tambahpenduduk" class="btn btn-outline-success">Tambah Data</a>
        <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
            @endif
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Umur</th>
                <th scope="col">NIK</th>
                <th scope="col">Kota</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @php
                $no=1;
            @endphp
                @foreach ($data as $row)
                    <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$row->nama}}</td>
                    <td>{{$row->jeniskelamin}}</td>
                    <td>{{$row->umur}}</td>
                    <td>{{$row->NIK}}</td>
                    <td>{{$row->kota}}</td>
                    <td>
                        <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
                        <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                    </td>
                    </tr>
                @endforeach


            </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>