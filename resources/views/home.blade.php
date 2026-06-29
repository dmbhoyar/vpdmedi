@extends('layouts.app')

@section('title', 'MedCare Distributors India Pvt Ltd – Pharmaceutical Distributor & Wholesaler')
@section('meta_desc', 'MedCare Distributors – Leading pharmaceutical distributor serving 10,000+ clients across 500+ cities. Same day dispatch. Order via WhatsApp.')

@section('content')

<!-- ===== Hero Slider ===== -->
<section class="hero-slider p-0">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4500">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="hero-slide hero-slide-1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 hero-content">
                                <span class="hero-badge"><i class="bi bi-patch-check-fill me-1"></i> Trusted Since 2019</span>
                                <h1>Your Reliable Pharma<br>Distribution Partner</h1>
                                <p>Connecting pharmaceutical companies with retailers, hospitals, and pharmacies across India with speed, quality, and trust.</p>
                                <div class="d-flex gap-3 flex-wrap">
                                    <a href="{{ route('order') }}" class="btn-whatsapp">
                                        <i class="bi bi-bag-plus"></i> Place an Order
                                    </a>
                                    <a href="{{ route('about') }}" class="btn btn-outline-light px-4 py-3 rounded-pill fw-semibold">
                                        Learn More
                                    </a>
                                </div>
                                <div class="hero-pills">
                                    <span class="hero-pill"><i class="bi bi-lightning-charge me-1"></i>Same Day Dispatch</span>
                                    <span class="hero-pill"><i class="bi bi-truck me-1"></i>Free Delivery</span>
                                    <span class="hero-pill"><i class="bi bi-building me-1"></i>500+ Cities</span>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex hero-img-wrap">
                                <div class="hero-icon-box">💊</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="hero-slide hero-slide-2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 hero-content">
                                <span class="hero-badge"><i class="bi bi-building me-1"></i> 250+ Pharma Companies</span>
                                <h1>Wide Range of Quality<br>Pharmaceutical Products</h1>
                                <p>Ethical, Generic, and Specialty medicines from 250+ top pharmaceutical companies available at competitive prices.</p>
                                <div class="d-flex gap-3 flex-wrap">
                                    <a href="{{ route('order') }}" class="btn-whatsapp">
                                        <i class="bi bi-bag-plus"></i> Place Your Order
                                    </a>
                                    <a href="{{ route('contact') }}" class="btn btn-outline-light px-4 py-3 rounded-pill fw-semibold">
                                        Contact Us
                                    </a>
                                </div>
                                <div class="hero-pills">
                                    <span class="hero-pill"><i class="bi bi-capsule me-1"></i>Ethical Medicines</span>
                                    <span class="hero-pill"><i class="bi bi-capsule-pill me-1"></i>Generic Medicines</span>
                                    <span class="hero-pill"><i class="bi bi-heart-pulse me-1"></i>Specialty Products</span>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex hero-img-wrap">
                                <div class="hero-icon-box">🏥</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="hero-slide hero-slide-3">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 hero-content">
                                <span class="hero-badge"><i class="bi bi-people-fill me-1"></i> 10,000+ Happy Clients</span>
                                <h1>Grow Your Business<br>with Our Franchise</h1>
                                <p>Join our growing network of pharmaceutical distributors across India. Attractive margins, full support, and training provided.</p>
                                <div class="d-flex gap-3 flex-wrap">
                                    <a href="{{ route('franchise') }}" class="btn-whatsapp">
                                        <i class="bi bi-handshake"></i> Enquire Now
                                    </a>
                                    <a href="{{ route('franchise') }}" class="btn btn-outline-light px-4 py-3 rounded-pill fw-semibold">
                                        Know More
                                    </a>
                                </div>
                                <div class="hero-pills">
                                    <span class="hero-pill"><i class="bi bi-graph-up me-1"></i>High Margins</span>
                                    <span class="hero-pill"><i class="bi bi-headset me-1"></i>Full Support</span>
                                    <span class="hero-pill"><i class="bi bi-shield-check me-1"></i>Trusted Brand</span>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex hero-img-wrap">
                                <div class="hero-icon-box">🤝</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.carousel-inner -->

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

<!-- ===== Stats Strip ===== -->
<div class="stats-strip">
    <div class="container">
        <div class="row align-items-center text-center gy-4">
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <div class="num">10+</div>
                    <div class="label">Years of Experience</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <div class="num">140+</div>
                    <div class="label">Team Members</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <div class="num">10,000+</div>
                    <div class="label">Happy Clients</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <div class="num">500+</div>
                    <div class="label">Cities Covered</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===== About Snapshot ===== -->
<section>
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-tag">About Us</span>
                <h2 class="section-title text-start">Pune's Leading Pharma Distributor</h2>
                <div class="divider-line" style="margin:0 0 20px;"></div>
                <p class="text-muted mb-4" style="line-height:1.8;">
                    MedCare Distributors India Pvt Ltd is a distinguished pharmaceutical distributor and wholesaler
                    based in Pune, Maharashtra. Established in 2019, we have rapidly grown to become one of the most
                    trusted names in pharmaceutical distribution, serving clients across 500+ cities.
                </p>
                <p class="text-muted mb-4" style="line-height:1.8;">
                    We partner with 250+ leading pharmaceutical companies and offer a comprehensive range of Ethical,
                    Generic, and Specialty medicines. Our commitment is to provide high-quality products at the most
                    competitive rates with same-day dispatch.
                </p>
                <div class="d-flex gap-4 flex-wrap mb-4">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-check-circle-fill text-success fs-5"></i>
                        <span class="fw-semibold">ISO Certified</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-check-circle-fill text-success fs-5"></i>
                        <span class="fw-semibold">GST Compliant</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-check-circle-fill text-success fs-5"></i>
                        <span class="fw-semibold">Licensed Distributor</span>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="btn-primary-custom">Read More About Us</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="service-card text-center p-4" style="background:var(--light-bg);">
                            <div style="font-size:40px;margin-bottom:12px;">💊</div>
                            <h6 class="fw-700">250+</h6>
                            <p class="text-muted small mb-0">Pharma Companies</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="service-card text-center p-4" style="background:var(--primary);color:#fff;">
                            <div style="font-size:40px;margin-bottom:12px;">🚚</div>
                            <h6 style="color:#fff;">Same Day</h6>
                            <p class="small mb-0" style="color:rgba(255,255,255,.8);">Dispatch Available</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="service-card text-center p-4" style="background:var(--primary);color:#fff;">
                            <div style="font-size:40px;margin-bottom:12px;">🏙️</div>
                            <h6 style="color:#fff;">500+</h6>
                            <p class="small mb-0" style="color:rgba(255,255,255,.8);">Cities Covered</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="service-card text-center p-4" style="background:var(--light-bg);">
                            <div style="font-size:40px;margin-bottom:12px;">⭐</div>
                            <h6 class="fw-700">10,000+</h6>
                            <p class="text-muted small mb-0">Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Services ===== -->
<section class="bg-light-blue">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-tag">What We Offer</span>
            <h2 class="section-title">Our Services</h2>
            <div class="divider-line"></div>
            <p class="section-sub">End-to-end pharmaceutical distribution services designed to meet your business needs efficiently.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon"><i class="bi bi-box-seam"></i></div>
                    <h5>Market Running Products</h5>
                    <p>Fast-moving medicines always in stock. We maintain large inventory of market-running pharmaceutical products for immediate availability.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon"><i class="bi bi-lightning-charge"></i></div>
                    <h5>Same Day Dispatch</h5>
                    <p>Orders placed before cut-off time are dispatched the same day, ensuring your business never runs out of critical medicines.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon"><i class="bi bi-building-check"></i></div>
                    <h5>250+ Pharma Companies</h5>
                    <p>We are authorised distributors for 250+ leading pharmaceutical companies, giving you access to a vast product catalogue.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon"><i class="bi bi-percent"></i></div>
                    <h5>Competitive Discounts</h5>
                    <p>Attractive trade discounts and margins that help you grow your business profitably while offering value to your customers.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon"><i class="bi bi-truck"></i></div>
                    <h5>Free Door Delivery</h5>
                    <p>Free delivery to your doorstep on qualifying orders. Same-day delivery available in select areas within Pune.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon"><i class="bi bi-headset"></i></div>
                    <h5>Dedicated Support</h5>
                    <p>Our team is available on WhatsApp for order assistance, product enquiries, complaints, and after-sales support.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Products ===== -->
<section>
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-tag">Product Range</span>
            <h2 class="section-title">Our Product Categories</h2>
            <div class="divider-line"></div>
            <p class="section-sub">Comprehensive pharmaceutical products sourced from top manufacturers with quality assurance.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card product-card h-100">
                    <div class="product-img-placeholder" style="background:linear-gradient(135deg,#e8f0fb,#cde0ff);">💊</div>
                    <div class="card-body">
                        <span class="product-badge">Prescription</span>
                        <h5 class="card-title">Ethical Medicines</h5>
                        <p class="text-muted small">Prescription drugs from top pharmaceutical brands. Cardiology, diabetology, oncology, neurology and more specialties covered.</p>
                        <a href="{{ route('order') }}" class="btn-primary-custom mt-3" style="padding:8px 20px;font-size:13px;">
                            Order Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card product-card h-100">
                    <div class="product-img-placeholder" style="background:linear-gradient(135deg,#e8fbef,#b8f0d0);">🧬</div>
                    <div class="card-body">
                        <span class="product-badge" style="background:#e8fbef;color:#00A651;">Generic</span>
                        <h5 class="card-title">Generic Medicines</h5>
                        <p class="text-muted small">High quality, affordable generic medicines. Same efficacy as branded products at a fraction of the cost for patients.</p>
                        <a href="{{ route('order') }}" class="btn-primary-custom mt-3" style="padding:8px 20px;font-size:13px;">
                            Order Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card product-card h-100">
                    <div class="product-img-placeholder" style="background:linear-gradient(135deg,#fff0e8,#ffd4b8);">🔬</div>
                    <div class="card-body">
                        <span class="product-badge" style="background:#fff0e8;color:#FF6B00;">Specialty</span>
                        <h5 class="card-title">Specialty Products</h5>
                        <p class="text-muted small">Advanced specialty pharmaceuticals including biologics, injectables, and high-value specialty drugs for hospital & clinic segments.</p>
                        <a href="{{ route('order') }}" class="btn-primary-custom mt-3" style="padding:8px 20px;font-size:13px;">
                            Order Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Why Choose Us ===== -->
<section class="why-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-tag">Why Us</span>
                <h2 class="section-title text-start">Why Choose MedCare Distributors?</h2>
                <div class="divider-line" style="margin:0 0 32px;"></div>

                <div class="why-item">
                    <div class="why-icon"><i class="bi bi-shield-check"></i></div>
                    <div>
                        <h6>Quality Assurance</h6>
                        <p>All medicines sourced directly from manufacturers with proper cold chain and storage compliance.</p>
                    </div>
                </div>
                <div class="why-item">
                    <div class="why-icon"><i class="bi bi-lightning-charge"></i></div>
                    <div>
                        <h6>Fast Delivery</h6>
                        <p>Same day dispatch and express delivery options to minimize stockouts for your business.</p>
                    </div>
                </div>
                <div class="why-item">
                    <div class="why-icon"><i class="bi bi-cash-coin"></i></div>
                    <div>
                        <h6>Best Pricing</h6>
                        <p>Competitive trade pricing with attractive margins and seasonal discount schemes.</p>
                    </div>
                </div>
                <div class="why-item">
                    <div class="why-icon"><i class="bi bi-headset"></i></div>
                    <div>
                        <h6>Dedicated Support</h6>
                        <p>Our team is always available to assist with orders, track deliveries, and resolve any queries quickly.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div style="background:var(--primary);border-radius:20px;padding:48px 40px;color:#fff;">
                    <h3 style="font-size:26px;font-weight:800;margin-bottom:24px;">Place an Order Now</h3>
                    <p style="color:rgba(255,255,255,.8);margin-bottom:28px;font-size:15px;">
                        Submit your requirement using our simple order form. Our team reviews and processes it promptly.
                    </p>
                    <div style="background:rgba(255,255,255,.1);border-radius:12px;padding:20px;margin-bottom:24px;">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <i class="bi bi-1-circle-fill" style="font-size:22px;color:rgba(255,255,255,.7);"></i>
                            <span>Submit your medicine list via order form</span>
                        </div>
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <i class="bi bi-2-circle-fill" style="font-size:22px;color:rgba(255,255,255,.7);"></i>
                            <span>Our team confirms availability &amp; pricing</span>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <i class="bi bi-3-circle-fill" style="font-size:22px;color:rgba(255,255,255,.7);"></i>
                            <span>Same day dispatch &amp; free delivery</span>
                        </div>
                    </div>
                    <a href="{{ route('order') }}"
                       style="display:flex;align-items:center;justify-content:center;gap:10px;background:#fff;color:var(--primary);padding:14px 28px;border-radius:50px;font-weight:700;font-size:16px;text-decoration:none;transition:opacity .2s;">
                        <i class="bi bi-bag-plus fs-5"></i> Place Your Order
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Testimonials ===== -->
<section>
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-tag">Testimonials</span>
            <h2 class="section-title">What Our Clients Say</h2>
            <div class="divider-line"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <p>"MedCare Distributors has been our pharma partner for 3 years. Excellent product availability, fast delivery and very easy ordering process. Highly recommended."</p>
                    <div class="client-name">Ramesh Patel</div>
                    <div class="client-loc">Pharmacy Owner, Surat</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <p>"Best pharmaceutical distributor in Pune! Same day dispatch is a game changer. I never face stockout issues. Pricing is also very competitive."</p>
                    <div class="client-name">Dr. Priya Shah</div>
                    <div class="client-loc">Clinic Owner, Pune</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="stars">★★★★☆</div>
                    <p>"Joined their franchise 2 years ago. The support team is very responsive and helpful. Business has been growing consistently with their guidance and support."</p>
                    <div class="client-name">Suresh Mehta</div>
                    <div class="client-loc">Franchise Partner, Vadodara</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ===== Order CTA ===== -->
<div class="order-cta">
    <div class="container">
        <h2>Ready to Order Medicines?</h2>
        <p>Use our simple order form. Our team processes every order quickly and dispatches same day.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ route('order') }}"
               style="background:#fff;color:#0057B8;padding:16px 40px;border-radius:50px;font-size:17px;font-weight:700;display:inline-flex;align-items:center;gap:10px;text-decoration:none;">
                <i class="bi bi-bag-plus fs-5"></i> Place an Order
            </a>
            <a href="{{ route('contact') }}" class="btn btn-outline-light py-3 px-5 rounded-pill fw-semibold fs-6">
                Contact Us
            </a>
        </div>
        <p class="mt-4 mb-0" style="font-size:14px;color:rgba(255,255,255,.6);">
            <i class="bi bi-telephone me-1"></i> +91 96013 81302 &nbsp;|&nbsp;
            <i class="bi bi-telephone me-1"></i> +91 97262 81302
        </p>
    </div>
</div>

@endsection
