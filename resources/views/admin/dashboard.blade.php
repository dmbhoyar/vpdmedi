@extends('admin.layout')
@section('title', 'Dashboard')
@section('page_title', 'Dashboard')

@section('content')

<!-- Quick links -->
<div class="row g-4">
    <div class="col-lg-6">
        <div class="bg-white rounded-3 p-4 shadow-sm">
            <h6 class="fw-700 mb-3">Quick Actions</h6>
            <div class="d-grid gap-2">
                <a href="{{ route('admin.catalog') }}" class="btn btn-outline-success text-start">
                    <i class="bi bi-upload me-2"></i> Upload Product Catalog
                </a>
                <a href="{{ route('home') }}" target="_blank" class="btn btn-outline-secondary text-start">
                    <i class="bi bi-globe me-2"></i> View Website
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="bg-white rounded-3 p-4 shadow-sm">
            <h6 class="fw-700 mb-3">Active Product Catalog</h6>
            @if($catalog)
            <div class="d-flex align-items-center gap-3 p-3 rounded-3" style="background:#f4f8ff;">
                <div style="font-size:32px;">📊</div>
                <div>
                    <div class="fw-600">{{ $catalog->original_name }}</div>
                    <div class="text-muted small">{{ $catalog->file_size_human }} &nbsp;·&nbsp; {{ $catalog->download_count }} downloads</div>
                    <div class="text-muted small">Uploaded: {{ $catalog->created_at->format('d M Y, h:i A') }}</div>
                </div>
            </div>
            @else
            <div class="text-center py-4 text-muted">
                <i class="bi bi-file-earmark-x" style="font-size:36px;opacity:.4;"></i>
                <p class="mt-2 mb-2">No catalog uploaded yet</p>
                <a href="{{ route('admin.catalog') }}" class="btn btn-sm btn-primary">Upload Now</a>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection
