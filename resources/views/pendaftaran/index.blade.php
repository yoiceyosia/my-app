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
                    <h2>Pendaftaran</h2>
                    <p><a class="btn btn-secondary" href="{{ route('pendaftaran.create') }}">Add pendaftaran</a></p>
                    <div class="mx-auto">
                        <div class="card">
                            <div class="card-header text-black">Data Yang Telah Terdaftar</div>
                                <div class="card-body">
                                 @if(session()->get('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Nomor Kartu</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pendaftaran as $daftar)
                                            <tr>
                                                <td>{{ $daftar->id }}</td>
                                                <td>{{ $daftar->pengguna_id }}</td>
                                                <td>{{ $daftar->lokasi_id }}</td>
                                                <td>{{ $daftar->tanggal }}</td>
                                                <td>{{ $daftar->jam }}</td>
                                                <td>{{ $daftar->no_kartu }}</td>
                                                <td><a class="btn btn-warning"  href="{{ route('pendaftaran.edit', $daftar->id) }}">Edit</a> </td>
                                                <td>
                                                    <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('pendaftaran.destroy', $daftar->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>
</html>