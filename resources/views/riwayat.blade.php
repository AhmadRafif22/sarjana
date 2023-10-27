@extends('Layout.master-layout')


@section('content')
    <div class="container py-10">

        <div class="d-flex justify-content-between mb-5">

            <div>
                <h1 class="mb-2">Halo !</h1>
                <h1 class="name m-0 mb-1 text-primary">
                    Ahmad Surenaldi
                </h1>
                <h5 class="id mb-2 text-danger">
                    3004 4002 8871 8890
                </h5>
                <h5 class="mb-5 text-black-50">
                    085 8876 7789
                </h5>
                <div class="d-flex align-items-center">
                    <div class="point rounded-pill me-3">
                        <h1 class="point-text p-4 text-white m-0">
                            40
                        </h1>
                    </div>
                    <h5 class="">Poin <br> terkumpul</h5>
                </div>
            </div>

            <div class="poin-form-container d-flex flex-column">
                <img src="{{ URL::asset('assets/img/sarjana-logo.png') }}" alt="" class="img-fluid mb-5 ms-auto"
                    width="220">
                <input class="form-control py-2 mb-2" type="text" placeholder="No. nota">
                <input class="form-control py-2 mb-2" type="text" placeholder="Total Belanja">
                <div class="input-group mb-4">
                    <input type="text" class="form-control py-2" placeholder="Poin masuk (otomatis)">
                    <button class="btn btn-primary py-2 px-3" type="button" id="button-addon2">
                        <img src="{{ URL::asset('assets/img/right-arrow.svg') }}" alt="" class="img-fluid">
                    </button>
                </div>
                <div class="d-flex align-items-center ms-auto">
                    <p class="m-0 me-3">atau</p>
                    <a href="" class="btn btn-danger">Tukar Poin</a>
                </div>
            </div>

        </div>

        <div>
            <!--begin::Table widget 9-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">
                            Riwayat Anda
                        </span>
                    </h3>
                    <!--end::Title-->
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <div class="table-responsive  rounded-3">
                        <table class="table table-hover table-rounded table-striped border gy-5 gs-7">
                            <thead>
                                <tr class="fw-semibold fs-6 bg-secondary text-gray-800 border-bottom-2 border-gray-200">
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>No. Nota</th>
                                    <th>Total Belanja</th>
                                    <th>Poin</th>
                                    <th>Cabang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12/1/2023</td>
                                    <td>09:41:06</td>
                                    <td>00099876163</td>
                                    <td>25000</td>
                                    <td>1</td>
                                    <td>Ringan</td>
                                </tr>
                                <tr>
                                    <td>12/1/2023</td>
                                    <td>09:41:06</td>
                                    <td>00099876163</td>
                                    <td>25000</td>
                                    <td>1</td>
                                    <td>Ringan</td>
                                </tr>
                                <tr>
                                    <td>12/1/2023</td>
                                    <td>09:41:06</td>
                                    <td>
                                        <span class="badge badge-light-warning fw-bold px-4 py-3">
                                            Redeem
                                        </span>
                                    </td>
                                    <td>-</td>
                                    <td>-1</td>
                                    <td>Sarjana TA</td>
                                </tr>
                                <tr>
                                    <td>12/1/2023</td>
                                    <td>09:41:06</td>
                                    <td>00099876163</td>
                                    <td>25000</td>
                                    <td>1</td>
                                    <td>Ringan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table container-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Table Widget 9-->
        </div>

    </div>
@endsection
