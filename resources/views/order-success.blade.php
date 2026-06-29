@extends('layouts.app')
@section('title', 'Order Placed – MedCare Distributors')

@section('content')
<section style="min-height:70vh;display:flex;align-items:center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div style="width:90px;height:90px;background:#e8fbef;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 24px;font-size:44px;">
                    ✅
                </div>
                <h2 class="fw-800 mb-2">Order Received!</h2>
                <p class="text-muted mb-4">Thank you, <strong>{{ $name }}</strong>. Your order has been successfully submitted and our team will contact you shortly.</p>

                <div class="p-4 rounded-3 mb-4 text-start" style="background:#f4f8ff;border:1.5px solid #dce6f5;">
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="small text-muted">Reference No.</div>
                            <div class="fw-700" style="color:var(--primary,#0057B8);">{{ $ref }}</div>
                        </div>
                        <div class="col-6">
                            <div class="small text-muted">Status</div>
                            <div><span class="badge bg-warning text-dark">Received</span></div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="small text-muted">Name</div>
                            <div class="fw-600">{{ $name }}</div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="small text-muted">Phone</div>
                            <div class="fw-600">{{ $phone }}</div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="small text-muted">Products Ordered</div>
                            <div style="white-space:pre-wrap;font-size:14px;">{{ $products }}</div>
                        </div>
                    </div>
                </div>

                <p class="text-muted small mb-4">Our team will contact you on <strong>{{ $phone }}</strong> to confirm availability and delivery details.</p>

                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="{{ route('order') }}" class="btn-primary-custom">Place Another Order</a>
                    <a href="{{ route('home') }}" class="btn btn-outline-secondary px-4">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
