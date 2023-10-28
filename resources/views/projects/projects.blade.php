@extends('templates.index')

@section('title', 'Projects')

@section('content')
    <div class="row">
        <div class="col-5">
            <div class="card sticky-top">
                <div class="card-header">
                    <h4>

                        Data Siswa
                    </h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($siswas as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td><a title="Show Project" onclick="show({{ $item->id }})" class="btn btn-primary text-white"><i
                                            class="bx bx-folder-open"></i></a>
                                    <a title="Add Project" href="{{ route('projects.add', ['id' => $item->id])}}" class="btn btn-success"><i class="bx bx-plus"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="card">
                <div class="card-header">
                    <h4>
                        List Project
                    </h4>
                    @if (Session::has('project'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                        {{ session('project') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                </div>
                <div class="card-body" id="project">
                    <h5>Pilih siswa untuk melihat project!</h5>
                </div>
            </div>
        </div>
    </div>
    <script>
        function show(id) {
            $.get("projects/" + id,
                function(data) {
                    console.log(data);
                    $('#project').html(data);
                }
            );
        }
    </script>

    {{-- <div class="card">
        <div class="card-header">
            <h3 class="">Projects</h3>



            <a href="/projects/tambah">
                <div class="btn btn-success">Tambah</div>
            </a>
            <a href="/projects/edit">
                <div class="btn btn-primary ms-2">Edit</div>
            </a>

        </div>
        <div class="card-body p-2">
            <div class="d-flex flex-column gap-3 p-2" style="height:20rem; overflow-y: auto">

                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Trinity</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Operation Crossroads</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Operation Greenhouse</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
