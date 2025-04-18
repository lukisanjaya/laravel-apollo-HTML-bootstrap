@extends('layouts.app')

@section('title', 'Profile')

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
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
    <h2 class="fs-4 mb-2">My Profile</h2>
    <p class="text-muted mb-4">Update your personal information and account settings.</p>
    <!-- / Page Title-->

    <div class="row g-4">

        <div class="col-12 col-md-8">

            <!-- Profile Info Card -->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="card-title m-0">Personal Information</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="nameInput" placeholder="Enter your full name">
                        </div>
                        <div class="mb-3">
                            <label for="emailInput" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="phoneInput" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phoneInput" placeholder="Your phone number">
                        </div>
                        <div class="mb-3">
                            <label for="bioTextarea" class="form-label">Bio</label>
                            <textarea class="form-control" id="bioTextarea" rows="3" placeholder="Tell us something about you..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
            <!-- / Profile Info Card -->

            <!-- Password Update -->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="card-title m-0">Change Password</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="currentPassword" class="form-label">Current Password</label>
                            <input type="password" class="form-control" id="currentPassword" placeholder="••••••••">
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="newPassword" placeholder="••••••••">
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="••••••••">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </form>
                </div>
            </div>
            <!-- / Password Update -->

        </div>

        <div class="col-12 col-md-4">

            <!-- Profile Picture -->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="card-title m-0">Profile Picture</h6>
                </div>
                <div class="card-body text-center">
                    <img src="{{ asset('assets/images/profile-small-7.jpeg')}}" class="rounded-circle mb-3" width="120" height="120"
                        alt="Avatar">
                    <div class="mb-3">
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <button class="btn btn-sm btn-primary">Upload</button>
                </div>
            </div>
            <!-- / Profile Picture -->

        </div>

    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
