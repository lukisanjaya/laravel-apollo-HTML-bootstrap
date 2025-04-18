@extends('layouts.app')

@section('title', 'Card')

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
                    <li class="breadcrumb-item active" aria-current="page">Card</li>
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
    <h2 class="fs-4 mb-2">Card</h2>
    <p class="text-muted mb-4">Bootstrap’s cards provide a flexible and extensible content container with
        multiple variants and options.</p>
    <!-- / Page Title-->

    <div class="row g-4">
        <div class="col-12 col-md-6">

            <!-- Example-->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title">Default example</h6>
                    <p class="text-muted m-0 small">Cards are built with as little markup and styles
                        as possible, but still manage to deliver a ton of control.</p>
                </div>
                <div class="card-body">
                    <p>Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                </div>
            </div>
            <!-- /Example-->

            <!-- Image Example-->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1533630217389-3a5e4dff5683?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&h=500&q=80"
                    class="card-img-top" alt="HTML Bootstrap Admin Template by Pixel Rocket">
                <div class="card-body">
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <!-- / Image Example-->

        </div>

        <div class="col-12 col-md-6">

            <!--  Example-->
            <div class="card mb-4">
                <div class="card-header justify-content-between align-items-center d-flex">
                    <h6 class="card-title m-0">Dropdown menu example</h6>
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-line"></i>
                        </button>
                        <ul class="dropdown-menu dropdown" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <p>Click on the ellipse icon in the top right corner of this card to see a dropdown example
                        integrated with the card header title.</p>
                </div>
            </div>
            <!-- / Example-->

            <!-- Collapse Example-->
            <div class="card">
                <a class="card-header text-decoration-none text-body" data-bs-toggle="collapse" href="#collapseExample"
                    role="button" aria-expanded="true" aria-controls="collapseExample">
                    <h6 class="card-title m-0">Dropdown card example</h6>
                </a>
                <div class="collapse show" id="collapseExample">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <!-- / Collapse Example-->

        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
