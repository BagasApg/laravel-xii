@extends('templates.index')

@section('title', 'Tambah Project')

@section('content')
    <div class="m-1 mb-3">
        <div class="d-flex align-items-center">
            <a href="/projects" class="text-decoration-none text-black ">
                <div class="d-flex align-items-center back">


                    <i class="back-icon" data-feather="chevron-left"></i>
                    <p class="m-0 fs-5">Back</p>
                </div>
            </a>
        </div>

    </div>
    <div class="card">
        <div class="m-4">
            <h4>Tambah Project</h4>
            {{-- <div class="row">
                <div class="col-md-6">
                    <div class="">
                        <label for="defaultFormControlInput" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="The Litle Boy"
                            aria-describedby="defaultFormControlHelp" />
                        <div id="defaultFormControlHelp" class="form-text">
                        </div>

                    </div>
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="12 RPL 1"
                            aria-describedby="defaultFormControlHelp" />

                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="defaultFormControlInput"
                            placeholder="bagas.arianto@eveger.com" aria-describedby="defaultFormControlHelp" />
                        <div id="defaultFormControlHelp" class="form-text">
                        </div>
                    </div>
                    <div>
                        <label for="defaultFormControlInput" class="form-label">No. Telpon</label>
                        <input type="email" class="form-control" id="defaultFormControlInput" placeholder="XXX2397182"
                            aria-describedby="defaultFormControlHelp" />
                        <div id="defaultFormControlHelp" class="form-text">
                        </div>
                    </div>
                </div>

            </div> --}}
            <div class="row">
                    <div class="">
                        <label for="defaultFormControlInput" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Trinity"
                            aria-describedby="defaultFormControlHelp" />
                        <div id="defaultFormControlHelp" class="form-text">

                        </div>

                    </div>
            </div>
            <div class="row">
                <div class="">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="The start of the end"></textarea>
                </div>
            </div>
            <div class="mt-3 add-button">
                <div class="btn btn-success">Tambah</div>
            </div>
        </div>

    </div>
@endsection
