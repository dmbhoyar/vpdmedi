@extends('layouts.app')

@section('title', 'Contact Us – MedCare Distributors India Pvt Ltd')
@section('meta_desc', 'Contact MedCare Distributors – WhatsApp us or call for product enquiries, orders, and partnership opportunities.')

@section('content')

<div class="page-header">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch – we'd love to hear from you</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
        </nav>
    </div>
</div>

<section>
    <div class="container">
        <div class="row g-5">

            <!-- Contact Info -->
            <div class="col-lg-5">
                <span class="section-tag">Get In Touch</span>
                <h2 class="section-title text-start" style="font-size:28px;">We're Here to Help</h2>
                <div class="divider-line" style="margin:0 0 28px;"></div>

                <div class="info-box">
                    <div class="info-icon" style="background:#25D366;">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <div>
                        <h6>WhatsApp (Preferred)</h6>
                        <p><a href="https://wa.me/919022281139" target="_blank" style="color:#25D366;font-weight:600;">+91 90222 81139</a></p>
                        <p style="font-size:12px;color:var(--text-muted);">Fastest response – chat, order, support</p>
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-icon"><i class="bi bi-telephone-fill"></i></div>
                    <div>
                        <h6>Phone Numbers</h6>
                        <a href="tel:+919022281139" style="color:var(--primary);font-weight:600;display:block;">+91 90222 81139</a>
                        <a href="tel:+919022281139" style="color:var(--primary);font-weight:600;display:block;">+91 90222 81139</a>
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <div>
                        <h6>Office Address</h6>
                        <p>Office No. 12, Ganesh Plaza,<br>FC Road, Shivaji Nagar,<br>Pune, Maharashtra – 411004</p>
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-icon"><i class="bi bi-clock-fill"></i></div>
                    <div>
                        <h6>Business Hours</h6>
                        <p>Mon – Sat: 9:00 AM – 7:00 PM<br>Sunday: WhatsApp only</p>
                    </div>
                </div>

                <!-- Social -->
                <div class="mt-4">
                    <h6 class="fw-700 mb-3">Follow Us</h6>
                    <div class="d-flex gap-2">
                        <a href="https://wa.me/919022281139" target="_blank"
                           style="width:40px;height:40px;border-radius:50%;background:#25D366;display:flex;align-items:center;justify-content:center;color:#fff;font-size:18px;">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="#" style="width:40px;height:40px;border-radius:50%;background:#1877F2;display:flex;align-items:center;justify-content:center;color:#fff;font-size:18px;">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" style="width:40px;height:40px;border-radius:50%;background:linear-gradient(45deg,#f09433,#e6683c,#dc2743,#cc2366,#bc1888);display:flex;align-items:center;justify-content:center;color:#fff;font-size:18px;">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" style="width:40px;height:40px;border-radius:50%;background:#0077B5;display:flex;align-items:center;justify-content:center;color:#fff;font-size:18px;">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form / Order Form -->
            <div class="col-lg-7">
                <div class="contact-card">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div style="width:48px;height:48px;background:var(--primary);border-radius:12px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:22px;">
                            <i class="bi bi-envelope-check"></i>
                        </div>
                        <div>
                            <h4 class="fw-700 mb-0">Send Us an Enquiry</h4>
                            <p class="text-muted small mb-0">Fill the form below – our team will get back to you shortly</p>
                        </div>
                    </div>

                    @if(session('success'))
                    <div class="alert alert-success rounded-3 mb-4">
                        <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                    </div>
                    @endif

                    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Your Name *</label>
                                <input type="text" name="name" class="form-control" placeholder="Ramesh Patel" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+91 98765 43210" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">City *</label>
                                <input type="text" name="city" class="form-control" placeholder="Pune" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Enquiry Type</label>
                                <select name="product" class="form-select" required>
                                    <option value="">Select type</option>
                                    <option value="Product Enquiry">Product Enquiry</option>
                                    <option value="Place an Order">Place an Order</option>
                                    <option value="Franchise Enquiry">Franchise Enquiry</option>
                                    <option value="Career Enquiry">Career Enquiry</option>
                                    <option value="General Query">General Query</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Message / Details</label>
                                <textarea name="qty" class="form-control" rows="4"
                                    placeholder="Tell us about your requirement, product name, quantity, etc."></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-primary-custom w-100" style="padding:14px;font-size:15px;">
                                    <i class="bi bi-send me-2"></i> Send Enquiry
                                </button>
                            </div>
                        </div>
                    </form>

                    <p class="text-muted text-center mt-3 mb-0" style="font-size:12px;">
                        <i class="bi bi-lock-fill me-1"></i> Your information is safe and will only be used to respond to your enquiry.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map placeholder -->
<section class="section-sm bg-light-blue">
    <div class="container">
        <div class="text-center mb-4">
            <h4 class="fw-700">Find Us in Pune</h4>
            <p class="text-muted">FC Road, Shivaji Nagar, Pune, Maharashtra</p>
        </div>
        <div style="border-radius:16px;overflow:hidden;box-shadow:0 8px 32px rgba(0,0,0,.1);">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.9!2d73.8446!3d18.5196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c07f4b5f1a1d%3A0x4f1f34e3f6e5e5e5!2sShivaji%20Nagar%2C%20Pune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

@endsection
