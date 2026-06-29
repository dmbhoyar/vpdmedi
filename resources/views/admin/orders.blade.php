@extends('admin.layout')
@section('title', 'Orders')
@section('page_title', 'Orders')

@section('content')

<!-- Filter bar -->
<div class="bg-white rounded-3 p-3 shadow-sm mb-4">
    <form method="GET" class="row g-2 align-items-end">
        <div class="col-md-5">
            <input type="text" name="search" class="form-control form-control-sm"
                placeholder="Search by name, phone or order no..." value="{{ request('search') }}">
        </div>
        <div class="col-md-3">
            <select name="status" class="form-select form-select-sm">
                <option value="">All Statuses</option>
                @foreach(['pending','confirmed','processing','dispatched','delivered','cancelled'] as $s)
                <option value="{{ $s }}" {{ request('status') == $s ? 'selected' : '' }}>
                    {{ ucfirst($s) }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary btn-sm w-100">Filter</button>
        </div>
        <div class="col-md-2">
            <a href="{{ route('admin.orders') }}" class="btn btn-outline-secondary btn-sm w-100">Reset</a>
        </div>
    </form>
</div>

<!-- Orders table -->
<div class="bg-white rounded-3 shadow-sm overflow-hidden">
    <table class="table table-hover mb-0">
        <thead class="table-light">
            <tr>
                <th>Order No.</th>
                <th>Customer</th>
                <th>Phone</th>
                <th>City</th>
                <th>Products</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($orders as $order)
            <tr>
                <td><span class="fw-600 text-primary">{{ $order->order_number }}</span></td>
                <td>{{ $order->name }}<br><small class="text-muted">{{ $order->business_type }}</small></td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->city }}</td>
                <td style="max-width:220px;">
                    <span class="small text-muted" style="white-space:pre-wrap;word-break:break-word;">{{ Str::limit($order->products, 80) }}</span>
                </td>
                <td>
                    <span class="badge bg-{{ $order->status_badge }}">{{ ucfirst($order->status) }}</span>
                </td>
                <td class="small text-muted">{{ $order->created_at->format('d M Y') }}<br>{{ $order->created_at->format('h:i A') }}</td>
                <td>
                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#orderModal{{ $order->id }}">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                </td>
            </tr>

            <!-- Edit modal -->
            <div class="modal fade" id="orderModal{{ $order->id }}" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title fw-700">Update Order – {{ $order->order_number }}</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3 p-3 rounded-3" style="background:#f4f8ff;font-size:13px;">
                                <strong>Customer:</strong> {{ $order->name }}<br>
                                <strong>Phone:</strong> {{ $order->phone }}<br>
                                <strong>City:</strong> {{ $order->city }}<br>
                                <strong>Business:</strong> {{ $order->business_type }}<br>
                                <strong>Products:</strong><br>
                                <span style="white-space:pre-wrap;">{{ $order->products }}</span>
                            </div>
                            <form method="POST" action="{{ route('admin.orders.status', $order) }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label fw-600 small">Order Status</label>
                                    <select name="status" class="form-select">
                                        @foreach(['pending','confirmed','processing','dispatched','delivered','cancelled'] as $s)
                                        <option value="{{ $s }}" {{ $order->status == $s ? 'selected' : '' }}>
                                            {{ ucfirst($s) }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-600 small">Admin Notes (optional)</label>
                                    <textarea name="admin_notes" class="form-control" rows="2"
                                        placeholder="Internal note about this order...">{{ $order->admin_notes }}</textarea>
                                </div>
                                <button class="btn btn-primary w-100">Update Order</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <tr>
                <td colspan="8" class="text-center py-5 text-muted">
                    <i class="bi bi-inbox" style="font-size:36px;opacity:.3;"></i>
                    <p class="mt-2 mb-0">No orders found</p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Pagination -->
<div class="mt-3 d-flex justify-content-end">
    {{ $orders->links() }}
</div>

@endsection
