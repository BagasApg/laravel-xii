@extends('templates.index')

@section('title', 'Tambah Siswa')


@section('content')
    <div class="card">
        <div class="m-4 mb-3 inline-demo-spacing">

            <h3>Tambah Siswa</h3>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe"
                            aria-describedby="defaultFormControlHelp" />

                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe"
                            aria-describedby="defaultFormControlHelp" />
                        <div id="defaultFormControlHelp" class="form-text">
                            We'll never share your details with anyone else.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
