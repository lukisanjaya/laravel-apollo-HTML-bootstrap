@extends('layouts.app')

@section('title', 'Badge')

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
                    <li class="breadcrumb-item active" aria-current="page">Badge</li>
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
    <h2 class="fs-4 mb-2">Badge</h2>
    <p class="text-muted mb-4">Small count and labeling component.</p>
    <!-- / Page Title-->

    <div class="row g-4">
        <div class="col-12 col-md-6">

            <!-- Basic Examples-->
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Basic example</h6>
                    <p class="text-muted m-0 small">Badges scale to match the size of the immediate
                        parent element by using relative font sizing and em units.</p>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary mb-4">
                        Notifications <span class="badge bg-white text-primary rounded ms-2">4</span>
                    </button>
                    <h1>Example heading <span class="badge bg-warning">New</span></h1>
                    <h2>Example heading <span class="badge bg-danger">New</span></h2>
                    <h3>Example heading <span class="badge bg-info">New</span></h3>
                    <h4>Example heading <span class="badge bg-secondary">New</span></h4>
                    <h5>Example heading <span class="badge bg-primary">New</span></h5>
                    <h6>Example heading <span class="badge bg-dark">New</span></h6>
                </div>
            </div>
            <!-- / Basic Examples-->

        </div>

        <div class="col-12 col-md-6">

            <!-- Positioned Example-->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title">Positioned example</h6>
                    <p class="text-muted m-0 small">Use utilities to modify a .badge and position it in the
                        corner of a link or button.</p>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-dark position-relative me-4">
                        Inbox
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            99+
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </button>

                    <button type="button" class="btn btn-success position-relative">
                        Profile
                        <span
                            class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </button>
                </div>
            </div>
            <!-- / Positioned Example-->

            <!-- Pill Example-->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title">Pill examples</h6>
                    <p class="text-muted m-0 small">Use the .rounded-pill utility class to make badges more
                        rounded with a larger border-radius.</p>
                </div>
                <div class="card-body">
                    <span class="badge rounded-pill bg-primary">Primary</span>
                    <span class="badge rounded-pill bg-secondary">Secondary</span>
                    <span class="badge rounded-pill bg-success">Success</span>
                    <span class="badge rounded-pill bg-danger">Danger</span>
                    <span class="badge rounded-pill bg-warning text-dark">Warning</span>
                    <span class="badge rounded-pill bg-info text-dark">Info</span>
                    <span class="badge rounded-pill bg-light text-dark">Light</span>
                    <span class="badge rounded-pill bg-dark">Dark</span>
                </div>
            </div>
            <!-- / Pill Example-->

            <!-- Faded Example-->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title">Faded examples <span
                            class="ms-1 badge rounded-pill bg-success-faded text-success">Custom</span></h6>
                    <p class="text-muted m-0 small">Use the .bg-${color}-faded class for a faded badge variant
                    </p>
                </div>
                <div class="card-body">
                    <span class="badge rounded-pill bg-primary-faded text-primary">Primary</span>
                    <span class="badge rounded-pill bg-secondary-faded text-secondary">Secondary</span>
                    <span class="badge rounded-pill bg-success-faded text-success">Success</span>
                    <span class="badge rounded-pill bg-danger-faded text-danger">Danger</span>
                    <span class="badge rounded-pill bg-warning-faded text-warning">Warning</span>
                    <span class="badge rounded-pill bg-info-faded text-info">Info</span>
                    <span class="badge rounded-pill bg-dark-faded text-dark">Dark</span>
                </div>
            </div>
            <!-- / Faded Example-->

        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
