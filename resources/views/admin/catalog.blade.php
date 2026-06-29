@extends('admin.layout')
@section('title', 'Product Catalog')
@section('page_title', 'Product Catalog')

@section('content')

<div class="row g-4">
    <!-- Upload form -->
    <div class="col-lg-5">
        <div class="bg-white rounded-3 p-4 shadow-sm">
            <h6 class="fw-700 mb-1">Upload New Catalog</h6>
            <p class="text-muted small mb-4">Upload an Excel (.xlsx / .xls), CSV, or PDF file. The uploaded file will be available for users to download from the website.</p>

            @if($errors->any())
            <div class="alert alert-danger rounded-3 mb-3 py-2 small">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('admin.catalog.upload') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-600 small">Select File</label>
                    <input type="file" name="catalog" class="form-control" accept=".xlsx,.xls,.csv,.pdf" required>
                    <div class="form-text">Max size: 20 MB. Accepted: .xlsx, .xls, .csv, .pdf</div>
                </div>
                <button type="submit" class="btn btn-success w-100">
                    <i class="bi bi-upload me-2"></i>Upload Catalog
                </button>
            </form>
        </div>
    </div>

    <!-- Catalog list -->
    <div class="col-lg-7">
        <div class="bg-white rounded-3 shadow-sm overflow-hidden">
            <div class="p-3 border-bottom d-flex justify-content-between align-items-center">
                <h6 class="fw-700 mb-0">Uploaded Catalogs</h6>
                <span class="badge bg-primary rounded-pill">{{ $catalogs->count() }}</span>
            </div>

            @forelse($catalogs as $catalog)
            <div class="p-3 border-bottom d-flex align-items-center gap-3">
                <div style="font-size:28px;">
                    @if(in_array(pathinfo($catalog->original_name, PATHINFO_EXTENSION), ['xlsx','xls','csv']))
                        📊
                    @else
                        📄
                    @endif
                </div>
                <div class="flex-grow-1">
                    <div class="fw-600 small">{{ $catalog->original_name }}</div>
                    <div class="text-muted" style="font-size:12px;">
                        {{ $catalog->file_size_human }} &nbsp;·&nbsp;
                        {{ $catalog->download_count }} downloads &nbsp;·&nbsp;
                        {{ $catalog->created_at->format('d M Y, h:i A') }}
                    </div>
                </div>
                <div class="d-flex gap-2 align-items-center flex-shrink-0">
                    @if($catalog->is_active)
                        <span class="badge bg-success">Active</span>
                    @else
                        <form method="POST" action="{{ route('admin.catalog.activate', $catalog) }}">
                            @csrf
                            <button class="btn btn-sm btn-outline-success">Set Active</button>
                        </form>
                    @endif
                    <form method="POST" action="{{ route('admin.catalog.delete', $catalog) }}"
                          onsubmit="return confirm('Delete this catalog?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </form>
                </div>
            </div>
            @empty
            <div class="text-center py-5 text-muted">
                <i class="bi bi-file-earmark-x" style="font-size:36px;opacity:.3;"></i>
                <p class="mt-2 mb-0 small">No catalogs uploaded yet</p>
            </div>
            @endforelse
        </div>

        <div class="mt-3 p-3 rounded-3" style="background:#e8f0fb;font-size:13px;">
            <i class="bi bi-info-circle me-1 text-primary"></i>
            Only the <strong>Active</strong> catalog is shown on the website download button. Uploading a new file automatically sets it as active.
        </div>
    </div>
</div>

@endsection
