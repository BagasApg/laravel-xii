@extends('templates.index')

@section('title', 'Tambah Siswa')


@section('content')
    <div class="m-1 mb-3">
        <div class="d-flex align-items-center">
            <a href="/siswa" class="text-decoration-none text-black ">
                <div class="d-flex align-items-center back">


                    <i class="back-icon" data-feather="chevron-left"></i>
                    <p class="m-0 fs-5">Back</p>
                </div>
            </a>
        </div>

    </div>
    <div class="card">
        <div class="m-4">
            <h4>Tambah Siswa</h4>
            <form action="{{ route('siswa_tambah_store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md">
                        <div class="">
                            <label for="defaultFormControlInput" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="defaultFormControlInput"
                                placeholder="Bagas Arianto" name="nama" aria-describedby="defaultFormControlHelp" />
                            <div id="defaultFormControlHelp" class="form-text">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="">
                            <label for="defaultFormControlInput" class="form-label">About</label>
                            <input type="text" class="form-control" id="defaultFormControlInput"
                                placeholder="Lorem Ipsum Hilman" name="about" aria-describedby="defaultFormControlHelp" />
                            <div id="defaultFormControlHelp" class="form-text">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="">
                            <label for="defaultFormControlInput" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="defaultFormControlInput"
                                placeholder="bagas.jpegg" name="photo" aria-describedby="defaultFormControlHelp" />
                            <div id="defaultFormControlHelp" class="form-text">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mt-3 add-button">
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>

        </div>

    </div>
@endsection
