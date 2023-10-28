@extends('templates.index')

@section('title', 'Siswa')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="">siswa
            </h3>

            <a href="/siswa/tambah">
                <div class="btn btn-success">Tambah</div>
            </a>

        </div>
        <div class="card-body">

            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>About</th>
                    <th>Photo</th>
                    <th class="text-center">Aksi</th>
                </tr>
                @foreach ($siswa as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->about }}</td>
                        <td><img style="width:150px" src="storage/{{ $data->photo }}" alt=""></td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="/siswa/edit/{{ $data->id }}">
                                    <button class="btn btn-primary">Edit</button>
                                </a>
                                <form action="/siswa/delete/{{ $data->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection
