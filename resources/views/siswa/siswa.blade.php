@extends('templates.index')

@section('title', 'Siswa')


@section('content')
    <div class="card">

        <div class="m-4 mb-1 inline-demo-spacing">

            <a href="/siswa/tambah">
                <div class="btn btn-success">Tambah</div>
            </a>
            <a href="/siswa/edit">
                <div class="btn btn-primary ms-2">Edit</div>
            </a>
        </div>
        <div class="card-header">
            <h3 class="mt-0 mb-0">Siswa</h3>
        </div>
        <div class="card-body">

            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Bagas</td>
                </tr>
            </table>
        </div>
    </div>
@endsection