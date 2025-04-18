@extends('layouts.app')

@section('title', 'User Listing')

@push('style')
    <!-- CSS Libraries -->
    <!-- DataTables Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
        integrity="sha512-XcIsjKMcuVe0Ucj/xgIXQnytNwBttJbNjltBV18IOnru2lDPe9KRRyvCXw6Y5H415vbBLRm8+q6fmLUU7DfO6Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@push('breadcrumbs')
    <div class="bg-white border-bottom py-3 mb-5">
        <div
            class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Listing</li>
                </ol>
            </nav>

            <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                <a class="btn btn-sm btn-primary" href="#"><i class="ri-add-circle-line align-bottom"></i> New
                    User</a>
            </div>
        </div>
    </div>
@endpush

@section('main')
    <!-- Page Title-->
    <h2 class="fs-4 mb-2">User Listing</h2>
    <p class="text-muted mb-4">Manage and view registered users.</p>
    <!-- / Page Title-->

    <div class="row g-4">
        <div class="col-12">
            <!-- User Table -->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <!-- Custom Search Input with Icon and Clear Button -->
                    <div class="search-wrapper position-relative w-auto">
                        <i class="ri-search-line search-icon"></i>
                        <input type="text" id="customSearch" class="form-control search-input" data-table-filter="search"
                            placeholder="Search by name, email, or role...">
                        <button type="button" class="btn-clear search-clear" style="display: none;">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>

                    <div class="d-flex justify-content-end align-items-center gap-2">
                        <!-- Filter Button -->
                        <div class="d-flex gap-2 flex-wrap">
                            <button class="btn btn-outline-primary btn-sm gap-1 filter-btn" data-bs-toggle="offcanvas"
                                href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                <i class="ri-filter-3-line me-1" aria-hidden="true"></i> Filters
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Status</th> <!-- Added Status Column -->
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011-04-25</td>
                                    <td>$320,800</td>
                                    <td><span class="badge bg-success">Active</span></td> <!-- Added Status Value -->
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-2 mb-1"
                                                        href="/profile"><i class="ri-eye-line"></i> View</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-2"
                                                        href="/profile"><i class="ri-pencil-line"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                        href="#"><i class="ri-delete-bin-line"></i> Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011-04-25</td>
                                    <td>$320,800</td>
                                    <td><span class="badge bg-success">Active</span></td> <!-- Added Status Value -->
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-2 mb-1"
                                                        href="/profile"><i class="ri-eye-line"></i> View</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-2"
                                                        href="/profile"><i class="ri-pencil-line"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                        href="#"><i class="ri-delete-bin-line"></i> Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011-04-25</td>
                                    <td>$320,800</td>
                                    <td><span class="badge bg-success">Active</span></td> <!-- Added Status Value -->
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-2 mb-1"
                                                        href="/profile"><i class="ri-eye-line"></i> View</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-2"
                                                        href="/profile"><i class="ri-pencil-line"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                        href="#"><i class="ri-delete-bin-line"></i> Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011-04-25</td>
                                    <td>$320,800</td>
                                    <td><span class="badge bg-success">Active</span></td> <!-- Added Status Value -->
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-2 mb-1"
                                                        href="/profile"><i class="ri-eye-line"></i> View</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-2"
                                                        href="/profile"><i class="ri-pencil-line"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                        href="#"><i class="ri-delete-bin-line"></i> Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011-04-25</td>
                                    <td>$320,800</td>
                                    <td><span class="badge bg-success">Active</span></td> <!-- Added Status Value -->
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-2 mb-1"
                                                        href="/profile"><i class="ri-eye-line"></i> View</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-2"
                                                        href="/profile"><i class="ri-pencil-line"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                        href="#"><i class="ri-delete-bin-line"></i> Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011-07-25</td>
                                    <td>$170,750</td>
                                    <td><span class="badge bg-warning">Inactive</span></td> <!-- Added Status Value -->
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-2 mb-1"
                                                        href="/profile"><i class="ri-eye-line"></i> View</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-2"
                                                        href="/profile"><i class="ri-pencil-line"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                                        href="#"><i class="ri-delete-bin-line"></i> Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /User Table -->
        </div>
    </div>
@endsection

@push('offcanvas')
    <!-- Filter Offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="filterDrawerLabel">
                <i class="ri-filter-3-line me-1" aria-hidden="true"></i> Filter Options
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close filters"></button>
        </div>
        <div class="offcanvas-body p-0">
            <form class="filter-form h-100 d-flex flex-column" aria-label="Order filters">
                <!-- Role Filter -->
                <div class="filter-form-fields p-4">
                    <div class="mb-4">
                        <label class="form-label fw-medium" for="roleFilter">Role</label>
                        <select class="form-select" id="roleFilter" aria-label="Filter by role">
                            <option value="">All Roles</option>
                            <option value="admin">Admin</option>
                            <option value="manager">Manager</option>
                            <option value="staff">Staff</option>
                            <option value="developer">Developer</option>
                            <!-- Tambahkan role lainnya sesuai dengan data pengguna -->
                        </select>
                    </div>

                    <!-- Status Filter -->
                    <div class="mb-4">
                        <label class="form-label fw-medium">Status</label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="active" id="statusActive">
                            <label class="form-check-label" for="statusActive">
                                <span class="badge bg-success-faded text-success">
                                    <i class="ri-checkbox-circle-line me-1" aria-hidden="true"></i>Active
                                </span>
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="inactive" id="statusInactive">
                            <label class="form-check-label" for="statusInactive">
                                <span class="badge bg-danger-faded text-danger">
                                    <i class="ri-close-circle-line me-1" aria-hidden="true"></i>Inactive
                                </span>
                            </label>
                        </div>
                    </div>

                    <!-- Office Filter -->
                    <div class="mb-4">
                        <label class="form-label fw-medium" for="officeFilter">Office</label>
                        <select class="form-select" id="officeFilter" aria-label="Filter by office">
                            <option value="">All Offices</option>
                            <option value="Tokyo">Tokyo</option>
                            <option value="Edinburgh">Edinburgh</option>
                            <!-- Tambahkan office lainnya sesuai dengan data pengguna -->
                        </select>
                    </div>

                    <!-- Date Range Filter -->
                    <div class="mb-4">
                        <label class="form-label fw-medium">Date Range</label>
                        <div class="row g-2">
                            <div class="col-6">
                                <input type="date" class="form-control" id="startDate" aria-label="Start date">
                            </div>
                            <div class="col-6">
                                <input type="date" class="form-control" id="endDate" aria-label="End date">
                            </div>
                        </div>
                    </div>

                    <!-- Price Range Filter -->
                    <div class="mb-4">
                        <label class="form-label fw-medium">Salary Range</label>
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="input-group">
                                    <span class="input-group-text" aria-hidden="true">$</span>
                                    <input type="number" class="form-control" id="minSalary" placeholder="Min"
                                        aria-label="Minimum salary">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <span class="input-group-text" aria-hidden="true">$</span>
                                    <input type="number" class="form-control" id="maxSalary" placeholder="Max"
                                        aria-label="Maximum salary">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filter Actions -->
                <div class="border-top p-3 mt-auto">
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary flex-grow-1">
                            <i class="ri-filter-3-line me-1" aria-hidden="true"></i> Apply Filters
                        </button>
                        <button type="reset" class="btn btn-light">
                            <i class="ri-refresh-line me-1" aria-hidden="true"></i> Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endpush

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function() {
            const table = $('#example').DataTable({
                searching: false // Disable default search box
            });

            $('#customSearch').on('keyup', function() {
                table.search(this.value).draw();
            });
        });
    </script>
@endpush
