@extends('layouts.app')

@section('title', 'About Us – MedCare Distributors India Pvt Ltd')
@section('meta_desc', 'Learn about MedCare Distributors – our mission, vision, and commitment to quality pharmaceutical distribution across India.')

@section('content')

<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <h1>About Us</h1>
        <p>Know who we are and what drives us</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Company Overview -->
<section>
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-tag">Our Story</span>
                <h2 class="section-title text-start">MedCare Distributors India Pvt Ltd</h2>
                <div class="divider-line" style="margin:0 0 24px;"></div>
                <p class="text-muted" style="line-height:1.9;">
                    MedCare Distributors India Pvt Ltd is a distinguished pharmaceutical distributor and wholesaler
                    based in Pune, Maharashtra. Established in 2019, we have built a reputation for reliability,
                    speed, and quality in pharmaceutical distribution.
                </p>
                <p class="text-muted" style="line-height:1.9;">
                    We are committed to providing high-quality pharmaceutical products at the most competitive rates,
                    ensuring that pharmacies, hospitals, and clinics across India have seamless access to the medicines
                    their patients need.
                </p>
                <p class="text-muted" style="line-height:1.9;">
                    Our team of 140+ professionals works tirelessly to maintain our promise of same-day dispatch,
                    free delivery, and unmatched customer support — now made even more accessible through WhatsApp ordering.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    @foreach([
                        ['2019','Year Established','bi-calendar-check','var(--primary)'],
                        ['140+','Team Members','bi-people-fill','#00A651'],
                        ['10,000+','Happy Clients','bi-emoji-smile','var(--accent)'],
                        ['500+','Cities Covered','bi-map','var(--primary)'],
                    ] as [$num,$lbl,$icon,$clr])
                    <div class="col-6">
                        <div class="service-card text-center">
                            <div class="service-icon" style="background:{{ $clr }}20;">
                                <i class="bi {{ $icon }}" style="color:{{ $clr }};"></i>
                            </div>
                            <h4 class="fw-800 mb-1" style="color:{{ $clr }};">{{ $num }}</h4>
                            <p class="text-muted small mb-0">{{ $lbl }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="bg-light-blue">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-tag">Our Purpose</span>
            <h2 class="section-title">Mission & Vision</h2>
            <div class="divider-line"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="contact-card h-100" style="border-left:4px solid var(--primary);">
                    <div style="font-size:48px;margin-bottom:20px;">🎯</div>
                    <h4 class="fw-700 mb-3">Our Mission</h4>
                    <p class="text-muted" style="line-height:1.8;">
                        To be the most trusted pharmaceutical distributor in India by providing
                        high-quality medicines at competitive prices, with fast and reliable delivery,
                        ensuring healthcare accessibility for every corner of the country.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-card h-100" style="border-left:4px solid #00A651;">
                    <div style="font-size:48px;margin-bottom:20px;">🌟</div>
                    <h4 class="fw-700 mb-3">Our Vision</h4>
                    <p class="text-muted" style="line-height:1.8;">
                        To expand our reach to every city and town in India, building a network of
                        franchise partners who share our commitment to quality, affordability, and
                        healthcare excellence — powered by technology and WhatsApp-first ordering.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section>
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-tag">Our Values</span>
            <h2 class="section-title">What We Stand For</h2>
            <div class="divider-line"></div>
        </div>
        <div class="row g-4">
            @foreach([
                ['bi-shield-check','Quality First','Every product we distribute meets the highest quality standards with proper licensing and cold chain compliance.'],
                ['bi-people-fill','Client Focus','Our clients are at the heart of everything we do. Their success is our success.'],
                ['bi-lightning-charge','Speed & Efficiency','Same day dispatch and fast delivery are not just promises – they are our standard.'],
                ['bi-hand-thumbs-up','Integrity','Transparent pricing, honest dealings, and ethical business practices always.'],
                ['bi-graph-up-arrow','Growth Partnership','We help our clients and franchise partners grow their businesses with full support.'],
                ['bi-whatsapp','Digital Convenience','WhatsApp ordering makes it easy for clients to connect with us anytime, anywhere.'],
            ] as [$icon,$title,$desc])
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon"><i class="bi {{ $icon }}"></i></div>
                    <h5>{{ $title }}</h5>
                    <p>{{ $desc }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Office Info -->
<section class="bg-light-blue">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-tag">Find Us</span>
            <h2 class="section-title">Our Office</h2>
            <div class="divider-line"></div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-8">
                <div class="contact-card text-center">
                    <div style="font-size:64px;margin-bottom:20px;">📍</div>
                    <h4 class="fw-700 mb-2">Pune Head Office</h4>
                    <p class="text-muted mb-4">Office No. 12, Ganesh Plaza, FC Road,<br>Shivaji Nagar, Pune, Maharashtra – 411004, India</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="tel:+919601381302" class="btn-primary-custom">
                            <i class="bi bi-telephone me-2"></i>+91 96013 81302
                        </a>
                        <a href="https://wa.me/919601381302" target="_blank" class="btn-whatsapp">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
