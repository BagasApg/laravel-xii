@extends('templates.index')

@section('title', 'Projects')

@section('content')
    <div class="card">
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
    </div>
@endsection
