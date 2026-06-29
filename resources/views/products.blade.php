@extends('layouts.app')

@section('title', 'Product List – MedCare Distributors India Pvt Ltd')
@section('meta_desc', 'Browse our complete pharmaceutical product catalogue. Search medicines by name, category or company.')

@section('content')

<div class="page-header">
    <div class="container d-flex justify-content-between align-items-end flex-wrap gap-3">
        <div>
            <h1>Product Catalogue</h1>
            <p class="mb-0">Browse our full range of available pharmaceutical products</p>
            <nav aria-label="breadcrumb" class="mt-2">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </nav>
        </div>
        @if($catalog)
        <a href="{{ route('catalog.download') }}"
           class="btn btn-light d-inline-flex align-items-center gap-2 fw-semibold px-4 py-2 rounded-pill">
            <i class="bi bi-download"></i> Download Excel
        </a>
        @endif
    </div>
</div>

<section>
    <div class="container">

        @if(!$catalog)
        {{-- No catalog uploaded yet --}}
        <div class="text-center py-5">
            <div style="font-size:72px;opacity:.3;">📋</div>
            <h4 class="fw-700 mt-3">Product list coming soon</h4>
            <p class="text-muted">Our team is preparing the product catalogue. Please check back shortly or contact us for availability.</p>
            <a href="{{ route('contact') }}" class="btn-primary-custom mt-2">Contact Us</a>
        </div>

        @elseif($error)
        {{-- File exists but can't be parsed --}}
        <div class="text-center py-5">
            <div style="font-size:72px;opacity:.3;">📄</div>
            <h4 class="fw-700 mt-3">Preview not available</h4>
            <p class="text-muted">{{ $error }}</p>
            <a href="{{ route('catalog.download') }}" class="btn-primary-custom mt-2">
                <i class="bi bi-download me-2"></i>Download File Instead
            </a>
        </div>

        @else
        {{-- Product table --}}
        <div class="mb-4 d-flex flex-wrap gap-3 align-items-center justify-content-between">
            <div>
                <span class="section-tag" style="margin-bottom:0;">
                    {{ number_format(count($rows)) }} Products
                </span>
                <span class="text-muted small ms-2">
                    from {{ $catalog->original_name }}
                </span>
            </div>
            <div class="d-flex gap-2 flex-wrap">
                <input type="text" id="tableSearch" class="form-control"
                       placeholder="&#128269;  Search by name, company, category..."
                       style="width:320px;max-width:100%;">
                <a href="{{ route('order') }}" class="btn-primary-custom d-inline-flex align-items-center gap-2">
                    <i class="bi bi-bag-plus"></i> Place Order
                </a>
            </div>
        </div>

        <div style="border-radius:14px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.07);">
            <div style="overflow-x:auto;">
                <table class="table table-hover mb-0" id="productTable">
                    <thead style="background:var(--primary);color:#fff;position:sticky;top:0;">
                        <tr>
                            <th style="color:#fff;padding:14px 16px;font-size:12px;text-transform:uppercase;letter-spacing:.5px;white-space:nowrap;font-weight:600;">#</th>
                            @foreach($headers as $h)
                            <th style="color:#fff;padding:14px 16px;font-size:12px;text-transform:uppercase;letter-spacing:.5px;white-space:nowrap;font-weight:600;cursor:pointer;"
                                onclick="sortTable({{ $loop->index + 1 }}, this)">
                                {{ $h ?: 'Column '.($loop->index+1) }}
                                <i class="bi bi-arrow-down-up ms-1" style="opacity:.5;font-size:10px;"></i>
                            </th>
                            @endforeach
                            <th style="color:#fff;padding:14px 16px;font-size:12px;text-transform:uppercase;letter-spacing:.5px;white-space:nowrap;font-weight:600;">Order</th>
                        </tr>
                    </thead>
                    <tbody id="productBody">
                        @foreach($rows as $i => $row)
                        <tr class="product-row" style="background:{{ $i % 2 === 0 ? '#fff' : '#fafbff' }};">
                            <td style="padding:12px 16px;font-size:13px;color:#a0aec0;white-space:nowrap;">{{ $i + 1 }}</td>
                            @foreach($headers as $j => $_)
                            <td style="padding:12px 16px;font-size:13px;white-space:nowrap;max-width:250px;overflow:hidden;text-overflow:ellipsis;"
                                title="{{ $row[$j] ?? '' }}">
                                {{ $row[$j] ?? '—' }}
                            </td>
                            @endforeach
                            <td style="padding:12px 16px;">
                                @php
                                    $productName = collect($row)->first(fn($v) => trim((string)$v) !== '') ?? 'Product';
                                @endphp
                                <a href="{{ route('order') }}?product={{ urlencode($productName) }}"
                                   class="btn btn-sm btn-outline-primary rounded-pill px-3"
                                   style="font-size:12px;white-space:nowrap;">
                                    Order
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div id="noResults" class="text-center py-5 d-none">
            <div style="font-size:48px;opacity:.3;">🔍</div>
            <p class="text-muted mt-2">No products match your search.</p>
        </div>

        <div class="mt-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
            <span class="text-muted small" id="resultCount">Showing all {{ number_format(count($rows)) }} products</span>
            <a href="{{ route('catalog.download') }}" class="btn btn-outline-secondary btn-sm rounded-pill">
                <i class="bi bi-download me-1"></i> Download Full List
            </a>
        </div>
        @endif

    </div>
</section>

@endsection

@push('scripts')
<script>
// Live search
document.getElementById('tableSearch')?.addEventListener('input', function () {
    const q     = this.value.toLowerCase().trim();
    const rows  = document.querySelectorAll('.product-row');
    let visible = 0;

    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        const show = !q || text.includes(q);
        row.style.display = show ? '' : 'none';
        if (show) visible++;
    });

    document.getElementById('noResults').classList.toggle('d-none', visible > 0);
    document.getElementById('resultCount').textContent =
        q ? `Showing ${visible} of {{ count($rows) }} products` : `Showing all {{ count($rows) }} products`;
});

// Column sort
let sortDir = {};
function sortTable(colIndex, th) {
    const tbody = document.getElementById('productBody');
    const rows  = Array.from(tbody.querySelectorAll('tr'));
    const asc   = !sortDir[colIndex];
    sortDir     = {};
    sortDir[colIndex] = asc;

    rows.sort((a, b) => {
        const aVal = a.cells[colIndex]?.textContent.trim() || '';
        const bVal = b.cells[colIndex]?.textContent.trim() || '';
        const num  = n => parseFloat(n.replace(/[^0-9.-]/g, ''));
        if (!isNaN(num(aVal)) && !isNaN(num(bVal))) {
            return asc ? num(aVal) - num(bVal) : num(bVal) - num(aVal);
        }
        return asc ? aVal.localeCompare(bVal) : bVal.localeCompare(aVal);
    });

    rows.forEach(r => tbody.appendChild(r));

    // Update sort icons
    document.querySelectorAll('thead th i').forEach(i => {
        i.className = 'bi bi-arrow-down-up ms-1';
        i.style.opacity = '.5';
    });
    const icon = th.querySelector('i');
    icon.className = asc ? 'bi bi-sort-down ms-1' : 'bi bi-sort-up ms-1';
    icon.style.opacity = '1';
}
</script>
@endpush
