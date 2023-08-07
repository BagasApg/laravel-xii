@extends('templates.index')

@section('title', 'Contact')

@section('content')
    <div class="m-1 mb-3">
        <div class="d-flex align-items-center">
            <a href="/contact" class="text-decoration-none text-black ">
                <div class="d-flex align-items-center back">


                    <i class="back-icon" data-feather="chevron-left"></i>
                    <p class="m-0 fs-5">Back</p>
                </div>
            </a>
        </div>

    </div>
    <div class="card">
        <div class="m-4">
            <h4>Tambah Kontak</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="">
                        <label for="defaultFormControlInput" class="form-label">Username</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Bagas Arianto"
                            aria-describedby="defaultFormControlHelp" />
                        <div id="defaultFormControlHelp" class="form-text">
                        </div>

                    </div>

                </div>
                <div class="col-md">
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="defaultFormControlInput"
                            placeholder="bagas.arianto@eveger.com" aria-describedby="defaultFormControlHelp" />
                        <div id="defaultFormControlHelp" class="form-text">
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
                <div>
                    <label for="defaultFormControlInput" class="form-label">Link</label>
                    <input type="email" class="form-control" id="defaultFormControlInput" placeholder="https://instagram.com"
                        aria-describedby="defaultFormControlHelp" />
                    <div id="defaultFormControlHelp" class="form-text">
                    </div>
                </div>
            </div>
            <div class="mt-3 add-button">
                <div class="btn btn-success">Tambah</div>
            </div>
        </div>

    </div>
@endsection
