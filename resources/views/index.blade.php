@extends('Layout.master-layout')


@section('content')
    <div class="container login d-flex align-items-center">
        <div class="mx-auto login-container">
            <div class="d-flex align-items-end mb-5">
                <img src="{{ URL::asset('assets/img/sarjana-logo.png') }}" alt="" class="img-fluid sarjana-logo"
                    width="220">
                <h5 class="text-black-50">(Nama Cabang)</h5>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control py-3" placeholder="ID Member / no. hp"
                    aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" id="button-addon2">
                    <img src="{{ URL::asset('assets/img/right-arrow.svg') }}" alt="" class="img-fluid">
                </button>
            </div>
        </div>
    </div>
@endsection
