@extends('templates.index')

@section('title', 'Siswa')


@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="">Siswa</h3>



            <a href="/siswa/tambah">
                <div class="btn btn-success">Tambah</div>
            </a>
            <a href="/siswa/edit">
                <div class="btn btn-primary ms-2">Edit</div>
            </a>

        </div>
        <div class="card-body">

            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>No Telp.</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Bagas Arianto</td>
                    <td>12 RPL 1</td>
                    <td>085156810924</td>
                    <td>bagas.arianto@eveger.com</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bagas Arianto</td>
                    <td>12 RPL 1</td>
                    <td>085156810924</td>
                    <td>bagas.arianto@eveger.com</td>

                </tr>
                <tr>
                    <td>3</td>
                    <td>Bagas Arianto</td>
                    <td>12 RPL 1</td>
                    <td>085156810924</td>
                    <td>bagas.arianto@eveger.com</td>

                </tr>
            </table>
        </div>
    </div>
@endsection
