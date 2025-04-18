@extends('layouts.app')

@section('title', 'Collapse')

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
                    <li class="breadcrumb-item active" aria-current="page">Collapse</li>
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
    <h2 class="fs-4 mb-2">Collapse</h2>
    <p class="text-muted mb-4">Toggle the visibility of content.</p>
    <!-- / Page Title-->

    <div class="row g-4">
        <div class="col-12 col-md-6">

            <!-- Example-->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title">Default example</h6>

                </div>
                <div class="card-body">
                    <p>
                        <a class="btn btn-primary mb-2" data-bs-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            Link with href
                        </a>
                        <button class="btn btn-primary mb-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Button with data-bs-target
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            Some placeholder content for the collapse component. This panel is hidden by default but
                            revealed when
                            the user activates the relevant trigger.
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Example-->

        </div>

        <div class="col-12 col-md-6">

            <!--  Example-->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title">Multiple targets example</h6>
                </div>
                <div class="card-body">
                    <p>
                        <a class="btn btn-primary mb-2" data-bs-toggle="collapse" href="#multiCollapseExample1"
                            role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first
                            element</a>
                        <button class="btn btn-primary mb-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#multiCollapseExample2" aria-expanded="false"
                            aria-controls="multiCollapseExample2">Toggle second element</button>
                        <button class="btn btn-primary mb-2" type="button" data-bs-toggle="collapse"
                            data-bs-target=".multi-collapse" aria-expanded="false"
                            aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both
                            elements</button>
                    </p>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <div class="card card-body">
                                    Some placeholder content for the first collapse component of this multi-collapse
                                    example. This
                                    panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                <div class="card card-body">
                                    Some placeholder content for the second collapse component of this multi-collapse
                                    example. This
                                    panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                        </div>
                    </div>
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
