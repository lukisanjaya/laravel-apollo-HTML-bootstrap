@extends('layouts.app')

@section('title', 'Popover')

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
                    <li class="breadcrumb-item active" aria-current="page">Popover</li>
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
    <h2 class="fs-4 mb-2">Popovers</h2>
    <p class="text-muted mb-4">Documentation and examples for adding Bootstrap popovers, like those found in
        iOS, to any element on your site..</p>
    <!-- / Page Title-->

    <div class="row g-4">
        <div class="col-12 col-md-6">

            <!-- Example-->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title">Default examples</h6>

                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary mb-2" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="top" data-bs-content="Top popover">
                        Popover on top
                    </button>
                    <button type="button" class="btn btn-primary mb-2" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="right" data-bs-content="Right popover">
                        Popover on right
                    </button>
                    <button type="button" class="btn btn-primary mb-2" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="bottom" data-bs-content="Bottom popover">
                        Popover on bottom
                    </button>
                    <button type="button" class="btn btn-primary mb-2" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="left" data-bs-content="Left popover">
                        Popover on left
                    </button>
                </div>
            </div>
            <!-- /Example-->

        </div>

    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
