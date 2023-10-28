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
            <form action="{{ route('siswa_update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md">
                        <div class="">
                            <label for="defaultFormControlInput" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="defaultFormControlInput"
                                value="{{ $siswa->nama }}" name="nama" aria-describedby="defaultFormControlHelp" />
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
                                value="{{ $siswa->about }}" name="about" aria-describedby="defaultFormControlHelp" />
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
                                 name="photo" aria-describedby="defaultFormControlHelp" />
                            <div id="defaultFormControlHelp" class="form-text">
                            </div>
                            <img style="width: 250px" src="{{ asset('storage') }}/{{ $siswa->photo }}" alt="">

                        </div>
                    </div>
                </div>
                <div class="mt-3 add-button">
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </form>

        </div>
    </div>
@endsection
