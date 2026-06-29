@extends('layouts.app')

@section('title', 'Franchise Opportunity – MedCare Distributors India Pvt Ltd')
@section('meta_desc', 'Join MedCare Distributors franchise network. High margins, full support, and training. Enquire via WhatsApp today.')

@section('content')

<div class="page-header">
    <div class="container">
        <h1>Franchise Opportunity</h1>
        <p>Join our growing pharmaceutical distribution network across India</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Franchise</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Intro -->
<section>
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-tag">Business Opportunity</span>
                <h2 class="section-title text-start">Become a MedCare Franchise Partner</h2>
                <div class="divider-line" style="margin:0 0 24px;"></div>
                <p class="text-muted" style="line-height:1.9;">
                    MedCare Distributors is expanding its network across India and inviting ambitious entrepreneurs to
                    join our franchise program. As a franchise partner, you get the power of an established brand,
                    robust supply chain, and a proven business model.
                </p>
                <p class="text-muted" style="line-height:1.9;">
                    Whether you are a pharmacist, a healthcare professional, or a business person looking to enter the
                    pharmaceutical distribution sector — our franchise model offers a low-risk, high-reward opportunity.
                </p>
                <a href="https://wa.me/919601381302?text=Hello!%20I%20am%20interested%20in%20the%20MedCare%20Distributors%20Franchise%20Opportunity.%20Please%20share%20details."
                   target="_blank" class="btn-whatsapp mt-2">
                    <i class="bi bi-whatsapp"></i> Enquire via WhatsApp
                </a>
            </div>
            <div class="col-lg-6">
                <div class="contact-card" style="background:var(--primary);color:#fff;">
                    <h4 style="color:#fff;font-weight:800;margin-bottom:24px;">Franchise Highlights</h4>
                    @foreach([
                        ['bi-check2-circle','Authorised distributor for 250+ pharma companies'],
                        ['bi-check2-circle','Attractive trade margins & incentive schemes'],
                        ['bi-check2-circle','Complete setup assistance & training'],
                        ['bi-check2-circle','Marketing & promotional support'],
                        ['bi-check2-circle','Dedicated relationship manager'],
                        ['bi-check2-circle','WhatsApp-based ordering system'],
                        ['bi-check2-circle','Regular product & industry updates'],
                        ['bi-check2-circle','Low investment, high return model'],
                    ] as [$icon,$text])
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <i class="bi {{ $icon }}" style="font-size:20px;color:#90d4ff;min-width:22px;"></i>
                        <span style="color:rgba(255,255,255,.9);">{{ $text }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Steps -->
<section class="bg-light-blue">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-tag">Simple Process</span>
            <h2 class="section-title">How to Become a Partner</h2>
            <div class="divider-line"></div>
        </div>
        <div class="row g-4">
            @foreach([
                ['1','Enquire on WhatsApp','Send us a message on WhatsApp expressing your interest. Our team will respond within 2 hours.'],
                ['2','Initial Discussion','Our franchise team will call you to understand your location, investment capacity, and business goals.'],
                ['3','Document Verification','Submit required documents: Drug license, GST registration, and ID proof for verification.'],
                ['4','Agreement & Setup','Sign the franchise agreement and complete the initial setup with our full support team.'],
                ['5','Training','Attend our comprehensive 2-day training on products, ordering system, and business processes.'],
                ['6','Launch & Grow','Start operations with full marketing support. We guide you every step of the way to grow your business.'],
            ] as [$num,$title,$desc])
            <div class="col-md-6 col-lg-4">
                <div class="step-card">
                    <div class="step-number">{{ $num }}</div>
                    <h5>{{ $title }}</h5>
                    <p>{{ $desc }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Benefits -->
<section>
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-tag">Why Partner With Us</span>
            <h2 class="section-title">Franchise Benefits</h2>
            <div class="divider-line"></div>
        </div>
        <div class="row g-4">
            @foreach([
                ['💰','High Profit Margins','Earn attractive margins on every order. Additional incentives on monthly and quarterly targets.'],
                ['🏪','Established Brand','Leverage the trust and reputation of MedCare Distributors built over 5+ years.'],
                ['📦','Huge Product Range','Access to 5000+ products from 250+ pharmaceutical companies under one roof.'],
                ['🚚','Logistics Support','We handle delivery logistics so you can focus on growing your customer base.'],
                ['📱','WhatsApp Ordering','Modern ordering system via WhatsApp – no complex software required.'],
                ['🎓','Training & Support','Complete onboarding, product training, and ongoing business development support.'],
            ] as [$emoji,$title,$desc])
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div style="font-size:44px;margin-bottom:16px;">{{ $emoji }}</div>
                    <h5>{{ $title }}</h5>
                    <p>{{ $desc }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Enquiry CTA -->
<div class="order-cta">
    <div class="container">
        <h2>Interested in Our Franchise?</h2>
        <p>WhatsApp us now and our franchise team will guide you through the entire process.</p>
        <a href="https://wa.me/919601381302?text=Hello!%20I%20want%20to%20know%20more%20about%20MedCare%20Franchise%20Opportunity.%20Please%20guide%20me."
           target="_blank" class="btn-whatsapp" style="font-size:18px;padding:16px 40px;">
            <i class="bi bi-whatsapp fs-4"></i> Chat with Franchise Team
        </a>
        <p class="mt-3 mb-0" style="color:rgba(255,255,255,.6);font-size:14px;">
            We respond within 2 business hours
        </p>
    </div>
</div>

@endsection
