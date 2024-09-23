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
                    <h2>Pengguna</h2>
                    <p><a class="btn btn-secondary" href="{{ route('pengguna.create') }}">Add Pengguna</a></p>
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
                                            <th>Alamat Pengguna</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pengguna as $u)
                                            <tr>
                                                <td>{{ $u->id }}</td>
                                                <td>{{ $u->nama }}</td>
                                                <td>{{ $u->alamat_pengguna }}</td>
                                                <td>{{ $u->username }}</td>
                                                <td>{{ $u->password }}</td>
                                                <td>{{ $u->email }}</td>
                                                <td>{{ $u->jenis_kelamin }}</td>
                                                <td><a a class="btn btn-warning" href="{{ route('pengguna.edit', $u->id) }}">Edit</a> </td>
                                                <td>
                                                    <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('pengguna.destroy', $u->id) }}" method="POST">
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