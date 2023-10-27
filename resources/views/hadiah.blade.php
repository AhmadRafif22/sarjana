@extends('Layout.master-layout')


@section('content')
    <div class="container py-16">
        <div class="d-flex justify-content-between mb-16">
            <div class="d-inline-flex align-items-start">

                <div class="point rounded-pill me-5">
                    <h1 class="point-text p-4 text-white m-0">
                        40
                    </h1>
                </div>
                <div>
                    <h1 class="name m-0 mb-1 text-primary">
                        Ahmad Surenaldi
                    </h1>
                    <h5 class="id mb-2 text-danger">
                        3004 4002 8871 8890
                    </h5>
                    <h5 class="mb-5 text-black-50">
                        085 8876 7789
                    </h5>
                </div>


            </div>
            <span>
                <img src="{{ URL::asset('assets/img/sarjana-logo.png') }}" alt="" class="img-fluid mb-5 ms-auto"
                    width="220">
            </span>
        </div>

        <div>

            <div class="card card-flush h-xl-100">
                <div class="card-header pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800 fs-2">
                            Daftar Hadiah
                        </span>
                    </h3>
                </div>

                <a href="" class="card-body py-2">
                    <div
                        class="notice d-flex bg-dark-subtle rounded border-secondary border border-dashed min-w-lg-600px flex-shrink-0 p-6">

                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                            <div class="mb-3 mb-md-0 fw-semibold">
                                <h3 class="text-white fw-bold">
                                    Boneka Penguin (1003046)
                                </h3>

                                <div class="fs-6 text-gray-100 pe-7">
                                    40.000
                                </div>
                            </div>

                            <span class="btn btn-dark bg-opacity-75 bg-dark px-6 align-self-center text-nowrap fs-3">
                                20
                            </span>
                        </div>
                    </div>
                </a>

                <a href="" class="card-body py-2">
                    <div
                        class="notice d-flex bg-dark-subtle rounded border-secondary border border-dashed min-w-lg-600px flex-shrink-0 p-6">

                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                            <div class="mb-3 mb-md-0 fw-semibold">
                                <h3 class="text-white fw-bold">
                                    Boneka Penguin (1003046)
                                </h3>

                                <div class="fs-6 text-gray-100 pe-7">
                                    40.000
                                </div>
                            </div>

                            <span class="btn btn-dark bg-opacity-75 bg-dark px-6 align-self-center text-nowrap fs-3">
                                20
                            </span>
                        </div>
                    </div>
                </a>

                <a href="" class="card-body py-2">
                    <div
                        class="notice d-flex bg-dark-subtle rounded border-secondary border border-dashed min-w-lg-600px flex-shrink-0 p-6">

                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                            <div class="mb-3 mb-md-0 fw-semibold">
                                <h3 class="text-white fw-bold">
                                    Boneka Penguin (1003046)
                                </h3>

                                <div class="fs-6 text-gray-100 pe-7">
                                    40.000
                                </div>
                            </div>

                            <span class="btn btn-dark bg-opacity-75 bg-dark px-6 align-self-center text-nowrap fs-3">
                                20
                            </span>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
@endsection
