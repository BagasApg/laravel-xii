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
            <h4>Tambah Project<span class="h5"> / {{ $siswa->nama }}</span></h4>
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $siswa->id }}">
                <div class="row">
                    <div class="col-md-6">
                        <label for="project_name" class="form-label">Project Name</label>
                        <input type="text" class="form-control @error('project_name') is-invalid @enderror"
                            id="project_name" placeholder="Trinity" aria-describedby="defaultFormControlHelp"
                            name="project_name" />
                        @error('project_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div id="defaultFormControlHelp" class="form-text">

                        </div>

                    </div>
                    <div class="col-md-6">
                        <label for="project_date" class="form-label">Project Date</label>
                        <input type="date" class="form-control @error('project_date') is-invalid @enderror"
                            id="project_date" placeholder="Trinity" aria-describedby="defaultFormControlHelp"
                            name="project_date" />
                        @error('project_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div id="defaultFormControlHelp" class="html5-date-input">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <label for="project_photo" class="form-label">Project Image</label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="project_photo"
                            aria-describedby="defaultFormControlHelp">
                        @error('photo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div id="defaultFormControlHelp" class="formFile"></div>
                    </div>
                </div>
                <div class="mt-3 add-button">
                    <button class="btn btn-success" type="submit">Tambah</button>
                </div>
            </form>

        </div>

    </div>
@endsection
