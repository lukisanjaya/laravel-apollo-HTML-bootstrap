@extends('layouts.app')

@section('title', 'Alert')

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
                    <li class="breadcrumb-item active" aria-current="page">Alert</li>
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
    <h2 class="fs-4 mb-2">Alert</h2>
    <p class="text-muted mb-4">Provide contextual feedback messages for typical user actions with the handful of
        available and flexible alert messages.</p>
    <!-- / Page Title-->

    <div class="row g-4">
        <div class="col-12 col-md-6">

            <!-- Basic Alert Examples-->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title">Basic examples</h6>
                    <p class="text-muted m-0 small">Alerts are available for any length of text, as
                        well as an optional close button.</p>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        A simple primary alert—check it out!
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        A simple secondary alert—check it out!
                    </div>
                    <div class="alert alert-success" role="alert">
                        A simple success alert—check it out!
                    </div>
                    <div class="alert alert-danger" role="alert">
                        A simple danger alert—check it out!
                    </div>
                    <div class="alert alert-warning" role="alert">
                        A simple warning alert—check it out!
                    </div>
                    <div class="alert alert-info" role="alert">
                        A simple info alert—check it out!
                    </div>
                    <div class="alert alert-light" role="alert">
                        A simple light alert—check it out!
                    </div>
                    <div class="alert alert-dark" role="alert">
                        A simple dark alert—check it out!
                    </div>
                </div>
            </div>
            <!-- / Basic Alert Examples-->

            <!-- Faded Alert Examples-->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title">Faded background examples <span
                            class="ms-1 badge rounded-pill bg-success-faded text-success">Custom</span></h6>
                    <p class="text-muted m-0 small">Custom styling for a faded alert variant.</p>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary-faded" role="alert">
                        A simple primary alert—check it out!
                    </div>
                    <div class="alert alert-secondary-faded" role="alert">
                        A simple secondary alert—check it out!
                    </div>
                    <div class="alert alert-success-faded" role="alert">
                        A simple success alert—check it out!
                    </div>
                    <div class="alert alert-danger-faded" role="alert">
                        A simple danger alert—check it out!
                    </div>
                    <div class="alert alert-warning-faded" role="alert">
                        A simple warning alert—check it out!
                    </div>
                    <div class="alert alert-info-faded" role="alert">
                        A simple info alert—check it out!
                    </div>
                    <div class="alert alert-dark-faded" role="alert">
                        A simple dark alert—check it out!
                    </div>
                </div>
            </div>
            <!-- / Faded Alert Examples-->

        </div>

        <div class="col-12 col-md-6">

            <!-- Additional Content Example-->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title">Additional content example</h6>
                    <p class="text-muted m-0 small">Alerts can also contain additional HTML elements like
                        headings, paragraphs and dividers.</p>
                </div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is
                            going to run a bit longer so that you can see how spacing within an alert works with
                            this kind of content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things
                            nice and tidy.</p>
                    </div>
                </div>
            </div>
            <!-- / Additional Content Example-->

            <!-- Icon Example-->
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Icon examples</h6>
                    <p class="text-muted m-0 small">Similarly, you can use flexbox utilities and Bootstrap Icons
                        to create alerts with icons. Depending on your icons and content, you may want to add
                        more utilities or custom styles.</p>
                </div>
                <div class="card-body">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </symbol>
                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </symbol>
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </symbol>
                    </svg>

                    <div class="alert alert-primary d-flex align-items-center mb-4" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                        </svg>
                        <div>
                            An example alert with an icon
                        </div>
                    </div>
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                            aria-label="Success:">
                            <use xlink:href="#check-circle-fill" />
                        </svg>
                        <div>
                            An example success alert with an icon
                        </div>
                    </div>
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                            aria-label="Warning:">
                            <use xlink:href="#exclamation-triangle-fill" />
                        </svg>
                        <div>
                            An example warning alert with an icon
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Icon Example-->

        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
