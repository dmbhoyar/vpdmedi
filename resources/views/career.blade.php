@extends('layouts.app')

@section('title', 'Career – MedCare Distributors India Pvt Ltd')
@section('meta_desc', 'Join the MedCare Distributors team. Exciting career opportunities in pharmaceutical distribution. Apply via WhatsApp.')

@section('content')

<div class="page-header">
    <div class="container">
        <h1>Career</h1>
        <p>Build your career with a fast-growing pharmaceutical company</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Career</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Intro -->
<section>
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-tag">Join Our Team</span>
                <h2 class="section-title text-start">Grow With MedCare</h2>
                <div class="divider-line" style="margin:0 0 24px;"></div>
                <p class="text-muted" style="line-height:1.9;">
                    At MedCare Distributors, we believe our people are our greatest asset. We are a team of 140+
                    passionate professionals dedicated to making quality medicines accessible across India.
                </p>
                <p class="text-muted" style="line-height:1.9;">
                    We offer a dynamic work environment, competitive compensation, growth opportunities, and the
                    satisfaction of contributing to India's healthcare ecosystem.
                </p>
                <div class="row g-3 mt-2">
                    @foreach([
                        ['bi-graph-up','Career Growth'],
                        ['bi-currency-rupee','Competitive Pay'],
                        ['bi-heart','Health Benefits'],
                        ['bi-award','Recognition'],
                    ] as [$icon,$text])
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <div style="width:36px;height:36px;background:var(--light-bg);border-radius:8px;display:flex;align-items:center;justify-content:center;color:var(--primary);">
                                <i class="bi {{ $icon }}"></i>
                            </div>
                            <span class="fw-semibold small">{{ $text }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    @foreach([
                        ['🏢','Great Workplace','Modern office environment in Pune'],
                        ['📈','Fast Growth','Growing company with rapid expansion'],
                        ['🤝','Team Spirit','Collaborative and supportive culture'],
                        ['🎯','Impact','Your work directly impacts healthcare'],
                    ] as [$e,$t,$d])
                    <div class="col-6">
                        <div class="service-card text-center p-4">
                            <div style="font-size:36px;margin-bottom:10px;">{{ $e }}</div>
                            <h6 class="fw-700">{{ $t }}</h6>
                            <p class="text-muted small mb-0">{{ $d }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Job Openings -->
<section class="bg-light-blue">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-tag">Open Positions</span>
            <h2 class="section-title">Current Openings</h2>
            <div class="divider-line"></div>
            <p class="section-sub">Apply via WhatsApp – send your name, position, and resume to get started.</p>
        </div>
        <div class="row g-4">
            @foreach([
                ['Sales Executive','Pune / Maharashtra','Full Time','2+ years pharma sales experience. Must have own vehicle and smartphone.','bi-briefcase'],
                ['Delivery Associate','Pune','Full Time','Experience in delivery. Must know Pune roads well. Two-wheeler required.','bi-truck'],
                ['Warehouse Supervisor','Pune','Full Time','3+ years in warehouse management. Knowledge of pharmaceutical storage standards.','bi-building'],
                ['Customer Support Executive','Pune','Full Time','Good communication. Experience with WhatsApp Business. Fluent Hindi/Marathi.','bi-headset'],
                ['Medical Representative','Multiple Locations','Full Time','B.Pharma/D.Pharma preferred. Field sales experience in pharma industry.','bi-person-badge'],
                ['Accounts Executive','Pune','Full Time','Commerce graduate with Tally ERP experience. GST knowledge required.','bi-calculator'],
            ] as [$title,$loc,$type,$req,$icon])
            <div class="col-md-6">
                <div class="job-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h5 class="fw-700 mb-1">{{ $title }}</h5>
                            <div class="d-flex gap-2 flex-wrap">
                                <span class="job-tag"><i class="bi bi-geo-alt me-1"></i>{{ $loc }}</span>
                                <span class="job-tag" style="background:#e8fbef;color:#00A651;">{{ $type }}</span>
                            </div>
                        </div>
                        <div style="font-size:28px;color:var(--primary);"><i class="bi {{ $icon }}"></i></div>
                    </div>
                    <p class="text-muted small mb-3">{{ $req }}</p>
                    <a href="https://wa.me/919022281139?text=Hello!%20I%20am%20interested%20in%20the%20{{ urlencode($title) }}%20position%20at%20MedCare%20Distributors.%20Please%20guide%20me."
                       target="_blank" class="btn-whatsapp-sm">
                        <i class="bi bi-whatsapp"></i> Apply on WhatsApp
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- General Application -->
<div class="order-cta">
    <div class="container">
        <h2>Don't See Your Role?</h2>
        <p>We are always looking for talented people. Send your resume on WhatsApp with the position you're interested in.</p>
        <a href="https://wa.me/919022281139?text=Hello!%20I%20would%20like%20to%20apply%20for%20a%20position%20at%20MedCare%20Distributors.%20Please%20guide%20me."
           target="_blank" class="btn-whatsapp" style="font-size:18px;padding:16px 40px;">
            <i class="bi bi-whatsapp fs-4"></i> Send Resume on WhatsApp
        </a>
    </div>
</div>

@endsection
