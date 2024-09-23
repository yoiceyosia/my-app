<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Lokasi</title>
</head> -->
<body class="body">
    @extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-3">Create Lokasi</h2>
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
                    <form action="{{ route('lokasi.store') }}" method="POST">
                        @csrf
                        <div class="mx-auto">
                            <div class="card">
                                <div class="card-header text-black">Create Data Anda</div>
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <label for="tanggal">Tanggal:</label>
                                        <input type="date" class="form-control" name="tanggal" id="tanggal">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="alamat">Alamat:</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat Anda">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Jenis Vaksin</label>
                                            <select class="form-control" name="jenis_vaksin">
                                                <option value="">Pilih Vaksin</option>
                                                <option value="Sinovac">Sinovac</option>
                                                <option value="Moderna">Moderna</option>
                                                <option value="Booster">Booster</option>
                                            </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="kapasitas">Kapasitas:</label>
                                        <input type="text" class="form-control" name="kapasitas" id="kapasitas" placeholder="Kapasitas untuk Vaksin">
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