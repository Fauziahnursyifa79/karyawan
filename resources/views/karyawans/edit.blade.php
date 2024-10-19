<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KARYAWAN</title>
    <link rel="stylesheet" href={{asset('bootstrap/css/bootstrap.min.css')}}>
</head>
<body>
    <div class="container mt-4"><a href="{{ route('karyawan_index')}}" class="btn btn-danger" role="button">Kembali</a></div>
    <div class="container mt-4">
        <h1>Form Mengedit Data Karyawan</h1>
        <form action="" method="post"></form>
        <div>
            <form class="responsive" action="{{ route('karyawan_update', $karyawan->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mt-4">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                    @endif
                    {{--name pada form sifatnya wajib--}}
                    <label for="" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $karyawan->name)}}">
                    <label for="" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $karyawan->address)}}">
                    <label for="" class="form-label">Profesion</label>
                    <input type="text" class="form-control" id="profesion" name="profesion" value="{{ old('profesion', $karyawan->profesion)}}">
                    <label for="" class="form-label">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', $karyawan->date_of_birth)}}">
                    <label for="" class="form-label">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp', $karyawan->no_hp)}}">
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{asset('bootstrap/css/bootstrap.min.css')}}"></script>
</body>
</html>
