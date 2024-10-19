<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KARYAWAN</title>
    <link rel="stylesheet" href={{asset('bootstrap/css/bootstrap.min.css')}}>

    <script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.all.min.js
    "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.min.css
    " rel="stylesheet">

</head>
<body>
<div class="container mt-4"><a href="{{ route('karyawan_index')}}" class="btn btn-lg btn-secondary" role="button">Kembali</a></div>
    <div class="container mt-4">
    <h1>Tambah Data Karyawan</h1>
    <form action="" method="post"></form>
</div>

<form class="responsive" action="{{ route('karyawan_store')}}" method="POST">
    @csrf
    <div class="mt-4">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $errors)
                <li>{{ $errors}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {{--name pada form sifatnya wajib--}}
        <div class="container mt-4">
            <div class="form-group row">
                <label for="" class="form label">Nama Keryawan</label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group row">
                <label for="" class="form label">Alamat</label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="address" id="address">
            </div>
            <div class="form-group row">
                <label for="" class="form label">Profesi</label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="profesion" id="profesion">
            </div>
            <div class="form-group row">
                <label for="" class="form label">Tanggal Lahir</label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="date_of_birth" id="date_of_birth">
            </div>
            <div class="form-group row">
                <label for="" class="form label">No HP</label>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" name="no_hp" id="no_hp">
            </div>
            <div class="mt-5">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </div>
</form>

<script src="{{asset('bootstrap/css/bootstrap.min.css')}}"></script>
</body>
</html>
