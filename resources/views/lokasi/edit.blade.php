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
                <h2>Edit Lokasi</h2>
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
                    <form action="{{ route('lokasi.update', $lokasi->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mx-auto">
                            <div class="card">
                                <div class="card-header text-black">Edit Data Anda</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal:</label>
                                        <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $lokasi->tanggal }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat:</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $lokasi->alamat }}">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Vaksin</label>
                                            <select class="form-control" name="jenis_vaksin">
                                                <option value="">Pilih Vaksin</option>
                                                <option value="Sinovac" {{ $lokasi->jenis_vaksin == 'Sinovac' ? 'selected' : '' }}>Sinovac</option>
                                                <option value="Moderna" {{ $lokasi->jenis_vaksin == 'Moderna' ? 'selected' : '' }}>Moderna</option>
                                                <option value="Booster" {{ $lokasi->jenis_vaksin == 'Booster' ? 'selected' : '' }}>Booster</option>
                                            </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="kapasitas">Kapasitas:</label>
                                        <input type="text" class="form-control" name="kapasitas" id="kapasitas" value="{{ $lokasi->kapasitas }}">
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