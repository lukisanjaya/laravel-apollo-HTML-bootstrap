@extends('layouts.guest')

@section('title', '404')

@push('style')
    <!-- CSS Libraries -->
@endpush

@push('breadcrumbs')
@endpush

@section('main')
    <!-- Main Section-->
    <section class="d-flex justify-content-center align-items-start vh-100 py-5 px-3 px-md-0">

        <div class="d-flex flex-column w-100 align-items-center">
            <div class="p-4 p-sm-5 col-lg-7 col-md-10 col-12 text-center px-4">
                <i class="ri-file-damage-fill ri-5x mb-3"></i>
                <h1 class="mb-4 display-5 fw-bold">404 page not found</h1>
                <p class="lead text-muted">Looks like you've entered an incorrect page URL, or the page you are looking for
                    no longer exists.</p>
                <a class="btn btn-primary mt-4" href="./dashboard">Back to home</a>
            </div>
        </div>

    </section>
    <!-- / Main Section-->
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
