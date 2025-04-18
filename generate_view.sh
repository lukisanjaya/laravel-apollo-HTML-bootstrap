#!/bin/bash

# Parsing parameter
while getopts t: flag
do
    case "${flag}" in
        t) TITLE=${OPTARG};;
    esac
done

# Validasi TITLE
if [ -z "$TITLE" ]; then
    echo "❌ Judul tidak boleh kosong. Gunakan -t \"Judul Halaman\""
    exit 1
fi

# Convert TITLE ke slug
NAME=$(echo "$TITLE" | tr '[:upper:]' '[:lower:]' | sed 's/ /-/g' | tr -cd '[:alnum:]-')

# Prompt pilih layout
echo "Pilih layout:"
select LAYOUT in "app" "guest"; do
    case $LAYOUT in
        app|guest ) break;;
        * ) echo "Pilihan tidak valid. Pilih 1 (app) atau 2 (guest).";;
    esac
done

# Path target berdasarkan layout
if [ "$LAYOUT" = "guest" ]; then
    TARGET_DIR="resources/views/pages/auth"
    VIEW_PATH="pages.auth.${NAME}"
    ROUTE_PATH="/auth/${NAME}"
else
    TARGET_DIR="resources/views/pages"
    VIEW_PATH="pages.${NAME}"
    ROUTE_PATH="/${NAME}"
fi

TARGET_FILE="${TARGET_DIR}/${NAME}.blade.php"

# Cek folder target
if [ ! -d "$TARGET_DIR" ]; then
    mkdir -p "$TARGET_DIR"
fi

# Generate isi template berdasarkan layout
if [ "$LAYOUT" = "app" ]; then
cat <<EOF > "$TARGET_FILE"
@extends('layouts.app')

@section('title', '${TITLE}')

@push('style')
    <!-- CSS Libraries -->
@endpush

@push('breadcrumbs')
    <!-- Breadcrumbs-->
    <div class="bg-white border-bottom py-3 mb-5">
        <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">${TITLE}</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                <a class="btn btn-sm btn-primary" href="#"><i class="ri-add-circle-line align-bottom"></i> New Project</a>
                <a class="btn btn-sm btn-primary-faded ms-2" href="#"><i class="ri-settings-3-line align-bottom"></i> Settings</a>
                <a class="btn btn-sm btn-secondary-faded ms-2 text-body" href="#"><i class="ri-question-line align-bottom"></i> Help</a>
            </div>
        </div>
    </div>
    <!-- / Breadcrumbs-->
@endpush

@section('main')

@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
EOF

else # layout guest
cat <<EOF > "$TARGET_FILE"
@extends('layouts.guest')

@section('title', '${TITLE}')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')

@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
EOF
fi

echo "✅ File generated: $TARGET_FILE"

# Append ke routes/web.php
ROUTE_FILE="routes/web.php"
ROUTE_ENTRY="// ${TITLE} Page
Route::view('${ROUTE_PATH}', '${VIEW_PATH}');"

# Tambah route jika belum ada
if ! grep -q "Route::view('${ROUTE_PATH}'" "$ROUTE_FILE"; then
    echo -e "\n${ROUTE_ENTRY}" >> "$ROUTE_FILE"
    echo "📌 Route appended to $ROUTE_FILE"
else
    echo "⚠️ Route already exists in $ROUTE_FILE"
fi
