@extends('layouts.app')

@section('title', 'Charts')

@push('style')
    <!-- CSS Libraries -->
@endpush

@push('breadcrumbs')
    <!-- Breadcrumbs-->
    <div class="bg-white border-bottom py-3 mb-5">
        <div
            class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Charts</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                <a class="btn btn-sm btn-primary" href="#"><i class="ri-add-circle-line align-bottom"></i> New
                    Project</a>
                <a class="btn btn-sm btn-primary-faded ms-2" href="#"><i class="ri-settings-3-line align-bottom"></i>
                    Settings</a>
                <a class="btn btn-sm btn-secondary-faded ms-2 text-body" href="#"><i
                        class="ri-question-line align-bottom"></i> Help</a>
            </div>
        </div>
    </div>
    <!-- / Breadcrumbs-->
@endpush

@section('main')
    <!-- Page Title-->
    <h2 class="fs-4 mb-2">Chart Examples</h2>
    <p class="text-muted mb-4">Our template uses Chart.js for data display. Below are a few common chart
        examples.</p>
    <!-- / Page Title-->

    <div class="row g-4">

        <!-- Chart Vertical Bar-->
        <div class="col-12 col-md-6">
            <div class="card mb-4 h-100">
                <div class="card-header justify-content-between align-items-center d-flex">
                    <h6 class="card-title m-0">Vertical Bar Chart</h6>
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                            id="chartExampleVerticalBar" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-line"></i>
                        </button>
                        <ul class="dropdown-menu dropdown" aria-labelledby="chartExampleVerticalBar">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart chart-lg mt-4">
                        <canvas id="chartBar"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Chart Vertical Bar-->

        <!-- Chart Stacked Bar-->
        <div class="col-12 col-md-6">
            <div class="card mb-4 h-100">
                <div class="card-header justify-content-between align-items-center d-flex">
                    <h6 class="card-title m-0">Stacked Bar Chart</h6>
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                            id="chartExampleStackedBar" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-line"></i>
                        </button>
                        <ul class="dropdown-menu dropdown" aria-labelledby="chartExampleStackedBar">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart chart-lg mt-4">
                        <canvas id="chartBarStacked"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Chart Stacked Bar-->

        <!-- Chart Doughnut-->
        <div class="col-12 col-md-6">
            <div class="card mb-4 h-100">
                <div class="card-header justify-content-between align-items-center d-flex">
                    <h6 class="card-title m-0">Doughnut Chart</h6>
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                            id="chartExampleDoughnut" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-line"></i>
                        </button>
                        <ul class="dropdown-menu dropdown" aria-labelledby="chartExampleDoughnut">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart chart-lg">
                        <canvas id="chartDoughnut"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Chart Doughnut-->

        <!-- Chart Line-->
        <div class="col-12 col-md-6">
            <div class="card mb-4 h-100">
                <div class="card-header justify-content-between align-items-center d-flex">
                    <h6 class="card-title m-0">Line Chart</h6>
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                            id="chartExampleLine" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-line"></i>
                        </button>
                        <ul class="dropdown-menu dropdown" aria-labelledby="chartExampleLine">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart chart-lg mt-4">
                        <canvas id="chartLine"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Chart Line-->

        <!-- Chart Pie-->
        <div class="col-12 col-md-6">
            <div class="card mb-4 h-100">
                <div class="card-header justify-content-between align-items-center d-flex">
                    <h6 class="card-title m-0">Pie Chart</h6>
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                            id="chartExamplePie" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-line"></i>
                        </button>
                        <ul class="dropdown-menu dropdown" aria-labelledby="chartExamplePie">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart chart-lg">
                        <canvas id="chartPie"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Chart Pie-->

    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
