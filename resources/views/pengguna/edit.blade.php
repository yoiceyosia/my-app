<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Pengguna</title>
</head> -->
<body class="body">
    @extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Edit Pengguna</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Something wrong
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('pengguna.update', $pengguna->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mx-auto">
                            <div class="card">
                                <div class="card-header text-black">Edit Data Anda</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama">Nama:</label>
                                        <input type="text" class="form-control" name="nama" id="nama" value="{{ $pengguna->nama }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat_pengguna">Alamat pengguna:</label>
                                        <input type="text" class="form-control" name="alamat_pengguna" id="alamat_pengguna" value="{{ $pengguna->alamat_pengguna }}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="username">Username:</label>
                                        <input type="text" class="form-control" name="username" id="username" value="{{ $pengguna->username }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" name="password" id="password" value="{{ $pengguna->password }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" name="email" id="email" value="{{ $pengguna->email }}">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Jenis Kelamin: </label>
                                        <div class="form-check">
                                            <div class="radio">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" {{ $pengguna->jenis_kelamin=='laki-laki' ? 'checked' : '' }}>
                                                <label class="form-check-label">Laki-laki</label>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <div class="radio">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" {{ $pengguna->jenis_kelamin=='perempuan' ? 'checked' : '' }}>
                                                <label class="form-check-label">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     @endsection
</body>
</html>