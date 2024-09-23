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
                    <h2 class="mt-3">Create Pendaftaran</h2>
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
                    <form action="{{ route('pendaftaran.store') }}" method="POST">
                        @csrf
                        <div class="mx-auto">
                            <div class="card">
                                <div class="card-header text-black">Create Data Anda</div>
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <label>Nama:</label>
                                        <select class="form-control" name="pengguna_id">
                                            <option value=""></option>
                                            @foreach($penggunas as $pengguna)
                                            <option value="{{ $pengguna->id }}">
                                            {{ $pengguna->nama }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Alamat:</label>
                                        <select class="form-control" name="lokasi_id">
                                            <option value=""></option>
                                            @foreach($lokasis as $lokasi)
                                            <option value="{{ $lokasi->id }}">
                                            {{ $lokasi->alamat }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tanggal">Tanggal:</label>
                                        <input type="date" class="form-control" name="tanggal" id="tanggal" rows="2">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="jam">Jam:</label>
                                        <input type="time" class="form-control" name="jam" id="jam" rows="2">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="no_kartu">Nomor Kartu:</label>
                                        <input type="number" class="form-control" name="no_kartu" id="no_kartu" rows="2">
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