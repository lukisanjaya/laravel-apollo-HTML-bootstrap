<?php

use Illuminate\Support\Facades\Route;
Route::fallback(function () {
    return view('pages.errors.404');
});

Route::get('/', function () {
    return view('pages.dashboard');
});

// Dashboard Page
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

// Tables Page
Route::get('/tables', function () {
    return view('pages.ui.tables');
});

// Tooltip Page
Route::get('/tooltip', function () {
    return view('pages.ui.tooltip');
});

// Blank Page
Route::get('/blank', function () {
    return view('pages.blank');
});

// 404 Page
Route::get('/404', function () {
    return view('pages.errors.404');
});

// Accordion Page
Route::get('/accordion', function () {
    return view('pages.ui.accordion');
});

// Alert Page
Route::get('/alert', function () {
    return view('pages.ui.alert');
});

// Badge Page
Route::get('/badge', function () {
    return view('pages.ui.badge');
});

// Button Page
Route::get('/button', function () {
    return view('pages.ui.button');
});

// Card Page
Route::get('/card', function () {
    return view('pages.ui.card');
});

// Charts Page
Route::get('/charts', function () {
    return view('pages.ui.charts');
});

// Collapse Page
Route::get('/collapse', function () {
    return view('pages.ui.collapse');
});

// Dropdown Page
Route::get('/dropdown', function () {
    return view('pages.ui.dropdown');
});

// Forgot Password Page
Route::get('/forgot-password', function () {
    return view('pages.auth.forgot-password');
});

// Forms Page
Route::get('/forms', function () {
    return view('pages.ui.forms');
});

// Login Page
Route::get('/login', function () {
    return view('pages.auth.login');
});

// Modal Page
Route::get('/modal', function () {
    return view('pages.ui.modal');
});

// Offcanvas Page
Route::get('/offcanvas', function () {
    return view('pages.ui.offcanvas');
});

// Pagination Page
Route::get('/pagination', function () {
    return view('pages.ui.pagination');
});

// Popover Page
Route::get('/popover', function () {
    return view('pages.ui.popover');
});

// progress Page
Route::get('/progress', function () {
    return view('pages.ui.progress');
});

// Register Page
Route::get('/register', function () {
    return view('pages.auth.register');
});

// Profile Page
Route::get('/profile', function () {
    return view('pages.profile.profile');
});

// User Listing Page
Route::view('/user-listing', 'pages.user-listing');
