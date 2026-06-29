@extends('layouts.app')

@section('title', 'Customer Support – MedCare Distributors India Pvt Ltd')
@section('meta_desc', 'Get help from MedCare Distributors customer support team. Track orders, raise complaints, and get quick assistance on WhatsApp.')

@section('content')

<div class="page-header">
    <div class="container">
        <h1>Customer Support</h1>
        <p>We're here to help you – fast and on WhatsApp</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Customer Support</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Support Options -->
<section>
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-tag">Get Help</span>
            <h2 class="section-title">How Can We Help You?</h2>
            <div class="divider-line"></div>
            <p class="section-sub">Reach us instantly on WhatsApp for any support queries. Our team responds within minutes.</p>
        </div>
        <div class="row g-4">
            @foreach([
                ['bi-whatsapp','#25D366','WhatsApp Support','Fastest way to get help. Chat with our support team directly on WhatsApp for instant assistance.','https://wa.me/919601381302?text=Hello!%20I%20need%20customer%20support.','Chat Now','#25D366'],
                ['bi-telephone-fill','var(--primary)','Call Us','Speak directly with our support executives. Available Monday to Saturday, 9 AM – 7 PM.','tel:+919601381302','Call Now','var(--primary)'],
                ['bi-box-seam','var(--accent)','Track Your Order','WhatsApp your order number to track real-time status and expected delivery time.','https://wa.me/919601381302?text=Hello!%20I%20want%20to%20track%20my%20order.%20Order%20No:%20','Track Order','var(--accent)'],
            ] as [$icon,$clr,$title,$desc,$link,$btn,$btnClr])
            <div class="col-md-4">
                <div class="service-card text-center" style="border-top: 4px solid {{ $clr }};">
                    <div class="service-icon" style="background:{{ $clr }}20;color:{{ $clr }};font-size:32px;">
                        <i class="bi {{ $icon }}"></i>
                    </div>
                    <h5>{{ $title }}</h5>
                    <p>{{ $desc }}</p>
                    <a href="{{ $link }}" target="_blank"
                       class="d-inline-block mt-2 px-4 py-2 rounded-pill fw-semibold text-white"
                       style="background:{{ $btnClr }};font-size:14px;">{{ $btn }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact Info + Hours -->
<section class="bg-light-blue">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <span class="section-tag">Contact Info</span>
                <h3 class="fw-700 mb-4">Reach Us</h3>
                <div class="info-box">
                    <div class="info-icon"><i class="bi bi-whatsapp"></i></div>
                    <div>
                        <h6>WhatsApp (Primary)</h6>
                        <p><a href="https://wa.me/919601381302" target="_blank" style="color:var(--primary);">+91 96013 81302</a></p>
                    </div>
                </div>
                <div class="info-box">
                    <div class="info-icon"><i class="bi bi-telephone-fill"></i></div>
                    <div>
                        <h6>Phone Numbers</h6>
                        <p>
                            <a href="tel:+919601381302" style="color:var(--primary);display:block;">+91 96013 81302</a>
                            <a href="tel:+919726281302" style="color:var(--primary);display:block;">+91 97262 81302</a>
                        </p>
                    </div>
                </div>
                <div class="info-box">
                    <div class="info-icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <div>
                        <h6>Address</h6>
                        <p>Office No. 12, Ganesh Plaza, FC Road, Shivaji Nagar, Pune, Maharashtra – 411004</p>
                    </div>
                </div>
                <div class="info-box">
                    <div class="info-icon"><i class="bi bi-clock-fill"></i></div>
                    <div>
                        <h6>Support Hours</h6>
                        <p>Monday – Saturday: 9:00 AM – 7:00 PM<br>Sunday: WhatsApp support only</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <span class="section-tag">FAQ</span>
                <h3 class="fw-700 mb-4">Frequently Asked Questions</h3>

                @foreach([
                    ['How do I place an order?','Simply WhatsApp us on +91 96013 81302 with the medicine name, quantity, and your delivery address. You can also use our website Order Form.'],
                    ['What is the minimum order quantity?','We have no minimum order quantity. You can order as little as one strip.'],
                    ['Do you offer same-day delivery?','Yes! Same-day delivery is available in select areas of Pune. For other locations, we dispatch same-day via courier.'],
                    ['How can I track my order?','Send your order number on WhatsApp and we will share real-time status immediately.'],
                    ['What are your payment options?','We accept UPI, NEFT, RTGS, and cash on delivery (for select clients). All transactions are GST compliant.'],
                    ['How do I raise a complaint?','WhatsApp us with your order number and complaint details. We resolve all complaints within 24 hours.'],
                ] as [$q,$a])
                <div class="faq-item">
                    <div class="faq-q">
                        {{ $q }}
                        <i class="bi bi-plus faq-icon"></i>
                    </div>
                    <div class="faq-a">{{ $a }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<div class="order-cta">
    <div class="container">
        <h2>Need Immediate Help?</h2>
        <p>Our WhatsApp support team is available right now to assist you.</p>
        <a href="https://wa.me/919601381302?text=Hello!%20I%20need%20help%20with%20my%20order."
           target="_blank" class="btn-whatsapp" style="font-size:18px;padding:16px 40px;">
            <i class="bi bi-whatsapp fs-4"></i> Chat with Support on WhatsApp
        </a>
    </div>
</div>

@endsection
