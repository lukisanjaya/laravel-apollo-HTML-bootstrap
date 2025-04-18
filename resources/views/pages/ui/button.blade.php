@extends('layouts.app')

@section('title', 'Button')

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
                    <li class="breadcrumb-item active" aria-current="page">Button</li>
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
    <h2 class="fs-4 mb-2">Button</h2>
    <p class="text-muted mb-4">Bootstrap includes several predefined button styles, each serving its own
        semantic purpose, with a few extras thrown in for more control.</p>
    <!-- / Page Title-->

    <div class="row g-4">
        <div class="col-12 col-md-6">

            <!-- Example-->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title">Default examples</h6>
                </div>
                <div class="card-body">
                    <button type="button" class="btn mb-2 btn-primary">Primary</button>
                    <button type="button" class="btn mb-2 btn-secondary">Secondary</button>
                    <button type="button" class="btn mb-2 btn-success">Success</button>
                    <button type="button" class="btn mb-2 btn-danger">Danger</button>
                    <button type="button" class="btn mb-2 btn-warning">Warning</button>
                    <button type="button" class="btn mb-2 btn-info">Info</button>
                    <button type="button" class="btn mb-2 btn-light">Light</button>
                    <button type="button" class="btn mb-2 btn-dark">Dark</button>

                    <button type="button" class="btn mb-2 btn-link">Link</button>
                </div>
            </div>
            <!-- / Example-->

            <!-- Example-->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title">Sizes</h6>
                    <p class="text-muted m-0 small">Fancy larger or smaller buttons? Add .btn-lg or
                        .btn-sm for additional sizes.</p>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary btn-lg mb-2">Large button</button>
                    <button type="button" class="btn btn-primary btn-sm mb-2">Small button</button>
                </div>
            </div>
            <!-- / Example-->

        </div>

        <div class="col-12 col-md-6">

            <!-- Example-->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title">Outline examples</h6>
                </div>
                <div class="card-body">
                    <button type="button" class="btn mb-2 btn-outline-primary">Primary</button>
                    <button type="button" class="btn mb-2 btn-outline-secondary">Secondary</button>
                    <button type="button" class="btn mb-2 btn-outline-success">Success</button>
                    <button type="button" class="btn mb-2 btn-outline-danger">Danger</button>
                    <button type="button" class="btn mb-2 btn-outline-warning">Warning</button>
                    <button type="button" class="btn mb-2 btn-outline-info">Info</button>
                    <button type="button" class="btn mb-2 btn-outline-light">Light</button>
                    <button type="button" class="btn mb-2 btn-outline-dark">Dark</button>
                </div>
            </div>
            <!-- / Example-->

            <!-- Example-->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title">Faded examples <span
                            class="ms-1 badge rounded-pill bg-success-faded text-success">Custom</span></h6>
                    <p class="small text-muted mb-0">Custom faded button variants</p>
                </div>
                <div class="card-body">
                    <button type="button" class="btn mb-2 btn-primary-faded">Primary</button>
                    <button type="button" class="btn mb-2 btn-secondary-faded">Secondary</button>
                    <button type="button" class="btn mb-2 btn-success-faded">Success</button>
                    <button type="button" class="btn mb-2 btn-danger-faded">Danger</button>
                    <button type="button" class="btn mb-2 btn-warning-faded">Warning</button>
                    <button type="button" class="btn mb-2 btn-info-faded">Info</button>
                    <button type="button" class="btn mb-2 btn-dark-faded">Dark</button>
                </div>
            </div>
            <!-- / Example-->
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
