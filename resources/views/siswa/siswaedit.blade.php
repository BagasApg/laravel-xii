@extends('templates.index')

@section('title', 'Tambah Siswa')


@section('content')

    <div class="card">
        <div class="m-3 mb-0">
                <div class="d-flex align-items-center">
                    <a href="/siswa" class="text-decoration-none text-black ">
                        <div class="d-flex align-items-center back">
                            
                            
                            <i data-feather="chevron-left"></i>
                            <p class="m-0">Back</p>
                        </div>
                    </a>
                </div>

        </div>
        <div class="m-4">
            <h4>Edit Siswa</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="">
                        <label for="defaultFormControlInput" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" value="Bagas Arianto" placeholder="Bagas Arianto"
                            aria-describedby="defaultFormControlHelp" />
                        <div id="defaultFormControlHelp" class="form-text">
                        </div>

                    </div>
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" value="12 RPL 1" placeholder="12 RPL 1"
                            aria-describedby="defaultFormControlHelp" />

                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="defaultFormControlInput"
                            placeholder="bagas.arianto@eveger.com" value="bagas.arianto@eveger.com" aria-describedby="defaultFormControlHelp" />
                        <div id="defaultFormControlHelp" class="form-text">
                        </div>
                    </div>
                    <div>
                        <label for="defaultFormControlInput" class="form-label">No. Telpon</label>
                        <input type="email" class="form-control" id="defaultFormControlInput" placeholder="XXX2397182"
                            aria-describedby="defaultFormControlHelp" value="085156810924" />
                        <div id="defaultFormControlHelp" class="form-text">
                        </div>
                    </div>
                </div>

            </div>
            <div class="mt-3 add-button">
                <div class="btn btn-success">Edit</div>
            </div>
        </div>
    </div>
@endsection
