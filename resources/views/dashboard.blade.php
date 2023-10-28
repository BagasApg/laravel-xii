@extends('templates.index')

@section('title', 'Dashboard')

@section('content')
    <div class="d-flex justify-content-center align-items-center flex-column">
        <div class="d-flex flex-row justify-content-evenly">

            <img height="95px" src="{{ asset('assets/1.gif') }}" alt="">
            <img height="95px" src="{{ asset('assets/2.gif') }}" alt="">
            <img height="95px" src="{{ asset('assets/3.gif') }}" alt="">
            <img height="95px" src="{{ asset('assets/4.gif') }}" alt="">
        </div>
        <h1 class="mt-3">Hi</h1>
    </div>
@endsection
