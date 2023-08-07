@extends('templates.index')

@section('title', 'Contact')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Contacts</h3>

            <a href="/contact/tambah">
                <div class="btn btn-success">Tambah</div>
            </a>
            <a href="/contact/edit">
                <div class="btn btn-primary ms-2">Edit</div>
            </a>

        </div>
        <div class="card-body d-flex flex-column gap-3">

            <div class="card btn contact-cards">
                <div class="btn card-body text-start p-3">
                    <a href="http://instagram.com">
                        <div class="d-flex flex-row gap-3 align-items-center">

                            <i style="width: 32px; height: 32px" data-feather="instagram"></i>
                            <div class="col">
                                <p class="m-0">Bagas Arianto</p>
                                <p class="m-0 form-text">Instagram</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card btn contact-cards">
                <div class="btn card-body text-start p-3">
                    <a href="http://instagram.com">
                        <div class="d-flex flex-row gap-3 align-items-center">

                            <i style="width: 32px; height: 32px" data-feather="youtube"></i>
                            <div class="col">
                                <p class="m-0">Reddssss</p>
                                <p class="m-0 form-text">Youtube</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card btn contact-cards">
                <div class="btn card-body text-start p-3">
                    <a href="http://twitch.com">
                        <div class="d-flex flex-row gap-3 align-items-center">

                            <i style="width: 32px; height: 32px" data-feather="twitch"></i>
                            <div class="col">
                                <p class="m-0">Redddsss</p>
                                <p class="m-0 form-text">Twitch</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
