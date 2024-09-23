<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Pendaftaran</title>
</head> -->
<body class="body">
    @extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-3">Create Pengguna</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Something wrong</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('pengguna.store') }}" method="POST">
                        @csrf
                        <div class="mx-auto">
                            <div class="card">
                                <div class="card-header text-black">Create Data Anda</div>
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <label for="nama">Nama:</label>
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter Your Name">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="alamat_pengguna">Alamat Pengguna:</label>
                                        <input type="alamat_pengguna" class="form-control" name="alamat_pengguna" id="alamat_pengguna" placeholder="Enter Your Address">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="username">Username:</label>
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter Your Username">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Jenis Kelamin: </label>
                                        <div class="form-check">
                                            <div class="radio">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki">
                                                <label class="form-check-label">Laki-laki</label>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <div class="radio">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
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
        <div>
    @endsection
</body>
</html>