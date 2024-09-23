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
                    <h2>Lokasi</h2>
                    <p><a class="btn btn-secondary" href="{{ route('lokasi.create') }}">Add lokasi</a></p>
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
                                            <th>Tanggal</th>
                                            <th>Alamat</th>
                                            <th>Jenis Vaksin</th>
                                            <th>Kapasitas</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lokasi as $lks)
                                            <tr>
                                                <td>{{ $lks->id }}</td>
                                                <td>{{ $lks->tanggal }}</td>
                                                <td>{{ $lks->alamat }}</td>
                                                <td>{{ $lks->jenis_vaksin }}</td>
                                                <td>{{ $lks->kapasitas }}</td>
                                                <td><a class="btn btn-warning" href="{{ route('lokasi.edit', $lks->id) }}">Edit</a> </td>
                                                <td>
                                                    <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('lokasi.destroy', $lks->id) }}" method="POST">
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