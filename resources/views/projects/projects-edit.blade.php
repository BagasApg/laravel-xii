@extends('templates.index')

@section('title', 'Edit Project')

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
            <h4>Edit Project</h4>
            <form action="{{ route('projects.update', ['project' => $project->id]) }}" enctype="multipart/form-data"
                method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label for="project_name" class="form-label">Project Name</label>
                        <input type="text" class="form-control @error('project_name') is-invalid @enderror"
                            id="project_name" value="{{ $project->project_name }}" aria-describedby="defaultFormControlHelp"
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
                            name="project_date" id="project_date" value="{{ $project->project_date }}">
                        @error('project_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <label for="project_photo" class="form-label">Project Image</label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo"
                            id="project_photo" aria-describedby="defaultFormControlHelp">
                        @error('photo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div id="defaultFormControlHelp" class="formFile"></div>
                    </div>
                </div>
                <img class="mt-2 w-25" src="/storage/{{ $project->photo }}" alt="{{ $project->photo }}">
                <div class="mt-3 add-button">
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>

        </div>

    </div>
@endsection
