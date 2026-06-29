@extends('layouts.app')
@section('title', 'Order Now – MedCare Distributors India Pvt Ltd')
@section('meta_desc', 'Place your medicine order with MedCare Distributors. Fast processing, same-day dispatch.')

@section('content')

<div class="page-header">
    <div class="container">
        <h1>Place an Order</h1>
        <p>Fill in your details and we will process your order promptly</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Order Now</li>
            </ol>
        </nav>
    </div>
</div>

<section>
    <div class="container">
        <div class="row g-5 justify-content-center">

            <!-- Order Form -->
            <div class="col-lg-7">
                <div class="contact-card">
                    <h4 class="fw-700 mb-1">Order Details</h4>
                    <p class="text-muted small mb-4">Please fill all required fields. Our team will contact you to confirm availability and pricing.</p>

                    @if($errors->any())
                    <div class="alert alert-danger rounded-3 mb-4">
                        <ul class="mb-0 small">
                            @foreach($errors->all() as $err)
                            <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('order.submit') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Full Name *</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" placeholder="Your full name" required>
                                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone') }}" placeholder="+91 98765 43210" required>
                                @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">City *</label>
                                <input type="text" name="city"
                                    class="form-control @error('city') is-invalid @enderror"
                                    value="{{ old('city') }}" placeholder="Pune" required>
                                @error('city')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Business Type</label>
                                <select name="business_type" class="form-select">
                                    <option value="">Select type</option>
                                    <option value="Pharmacy"    {{ old('business_type')=='Pharmacy'   ?'selected':'' }}>Pharmacy</option>
                                    <option value="Hospital"    {{ old('business_type')=='Hospital'   ?'selected':'' }}>Hospital / Clinic</option>
                                    <option value="Distributor" {{ old('business_type')=='Distributor'?'selected':'' }}>Distributor</option>
                                    <option value="Retailer"    {{ old('business_type')=='Retailer'   ?'selected':'' }}>Retailer</option>
                                    <option value="Individual"  {{ old('business_type')=='Individual' ?'selected':'' }}>Individual</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Medicine / Product Details *</label>
                                <textarea name="products"
                                    class="form-control @error('products') is-invalid @enderror"
                                    rows="5"
                                    placeholder="List the medicines you need&#10;Example:&#10;- Paracetamol 500mg – 10 strips&#10;- Amoxicillin 250mg – 5 strips" required>{{ old('products', request('product')) }}</textarea>
                                @error('products')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-primary-custom w-100" style="padding:14px;font-size:16px;">
                                    <i class="bi bi-send me-2"></i>Submit Order
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">

                {{-- Download catalog --}}
                @if($activeCatalog)
                <div class="mb-4 p-4 text-center" style="background:var(--light-bg);border-radius:14px;border:1.5px dashed var(--primary);">
                    <div style="font-size:40px;margin-bottom:10px;">📋</div>
                    <h6 class="fw-700 mb-1">Not sure what to order?</h6>
                    <p class="text-muted small mb-3">Download our product list to check available medicines and prices.</p>
                    <a href="{{ route('catalog.download') }}" class="btn-primary-custom d-inline-flex align-items-center gap-2">
                        <i class="bi bi-download"></i> Download Product List
                    </a>
                </div>
                @endif

                <div class="mb-4 p-4" style="background:var(--light-bg);border-radius:14px;">
                    <h6 class="fw-700 mb-3">How It Works</h6>
                    @foreach([
                        ['1','Submit your order using this form'],
                        ['2','Our team reviews your requirement'],
                        ['3','We confirm availability & pricing'],
                        ['4','Order dispatched same day'],
                        ['5','Free delivery to your doorstep'],
                    ] as [$n,$step])
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div style="width:30px;height:30px;min-width:30px;background:var(--primary);color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;">{{ $n }}</div>
                        <span class="small">{{ $step }}</span>
                    </div>
                    @endforeach
                </div>

                <div class="p-4" style="border:1.5px solid var(--border);border-radius:14px;">
                    <h6 class="fw-700 mb-3">Need to Talk to Us?</h6>
                    <a href="tel:+919601381302" class="d-flex align-items-center gap-2 mb-2 text-decoration-none" style="color:var(--primary);">
                        <i class="bi bi-telephone-fill"></i> +91 96013 81302
                    </a>
                    <a href="tel:+919726281302" class="d-flex align-items-center gap-2 text-decoration-none" style="color:var(--primary);">
                        <i class="bi bi-telephone-fill"></i> +91 97262 81302
                    </a>
                    <p class="text-muted small mt-2 mb-0">Mon–Sat: 9 AM – 7 PM</p>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
