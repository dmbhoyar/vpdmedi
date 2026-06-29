<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'MedCare Distributors India Pvt Ltd')</title>
    <meta name="description" content="@yield('meta_desc', 'MedCare Distributors – Leading pharmaceutical distributor & wholesaler. 10,000+ clients, 500+ cities, same-day dispatch. Order via WhatsApp.')">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>

<!-- ===== Top Bar ===== -->
<div class="top-bar d-none d-md-block">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex gap-4">
            <span><i class="bi bi-telephone-fill me-1"></i>
                <a href="tel:+919022281139">+91 90222 81139</a> &nbsp;|&nbsp;
                <a href="tel:+919022281139">+91 90222 81139</a>
            </span>
            <span><i class="bi bi-geo-alt-fill me-1"></i> Pune, Maharashtra</span>
        </div>
        <div class="d-flex gap-3">
            <a href="https://wa.me/919022281139" target="_blank"><i class="bi bi-whatsapp me-1"></i>WhatsApp Us</a>
            <a href="{{ route('order') }}" class="text-warning fw-semibold"><i class="bi bi-bag-check me-1"></i>Quick Order</a>

        </div>
    </div>
</div>

<!-- ===== Navbar ===== -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
            <div style="width:44px;height:44px;background:var(--primary);border-radius:10px;display:flex;align-items:center;justify-content:center;">
                <i class="bi bi-capsule-pill" style="font-size:22px;color:#fff;"></i>
            </div>
            <span>
                MedCare Distributors
                <small>INDIA PVT LTD</small>
            </span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('franchise') ? 'active' : '' }}" href="{{ route('franchise') }}">Franchise</a>
                </li>
                @if($activeCatalog)
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}" href="{{ route('products') }}">Products</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('career') ? 'active' : '' }}" href="{{ route('career') }}">Career</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('support') ? 'active' : '' }}" href="{{ route('support') }}">Customer Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-order" href="{{ route('order') }}">
                        <i class="bi bi-bag-plus me-1"></i> Order Now
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- ===== Page Content ===== -->
@yield('content')

<!-- ===== Footer ===== -->
<footer>
    <div class="container">
        <div class="row g-5">
            <!-- Brand -->
            <div class="col-lg-4">
                <div class="footer-logo-text mb-3">
                    <i class="bi bi-capsule-pill me-2" style="color:var(--primary)"></i>MedCare Distributors
                    <small>INDIA PVT LTD</small>
                </div>
                <p>A distinguished pharmaceutical distributor and wholesaler providing high-quality medicines at the most competitive rates across India since 2019.</p>
                <div class="social-links">
                    <a href="https://wa.me/919022281139" target="_blank" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                    <a href="#" title="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" title="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-6">
                <h5>Quick Links</h5>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About Us</a>
                <a href="{{ route('franchise') }}">Franchise</a>
                <a href="{{ route('career') }}">Career</a>
                <a href="{{ route('contact') }}">Contact Us</a>
            </div>

            <!-- Products -->
            <div class="col-lg-2 col-6">
                <h5>Our Products</h5>
                <a href="#">Ethical Medicines</a>
                <a href="#">Generic Medicines</a>
                <a href="#">Specialty Products</a>
                <a href="#">OTC Products</a>
                <a href="#">Surgical Items</a>
            </div>

            <!-- Contact -->
            <div class="col-lg-4">
                <h5>Contact Us</h5>
                <div class="info-box mb-3">
                    <div class="info-icon" style="background:rgba(255,255,255,.1);">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div>
                        <p style="color:#a8b9d8;margin:0;">Office No. 12, Ganesh Plaza, FC Road, Shivaji Nagar, Pune, Maharashtra – 411004</p>
                    </div>
                </div>
                <div class="info-box mb-3">
                    <div class="info-icon" style="background:rgba(255,255,255,.1);">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div>
                        <a href="tel:+919022281139" style="display:block;">+91 90222 81139</a>
                        <a href="tel:+919022281139" style="display:block;">+91 90222 81139</a>
                    </div>
                </div>
                <div class="info-box">
                    <div class="info-icon" style="background:#25D366;">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <div>
                        <a href="https://wa.me/919022281139" target="_blank">Chat on WhatsApp</a>
                        <p style="color:#a8b9d8;margin:0;font-size:12px;">Orders, Enquiries & Support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <span>&copy; {{ date('Y') }} MedCare Distributors India Pvt Ltd. All rights reserved.</span>
            <span>Designed for Demo | WhatsApp: <a href="https://wa.me/919022281139" style="color:var(--primary);">+91 90222 81139</a></span>
        </div>
    </div>
</footer>

<!-- ===== WhatsApp Float Button ===== -->
<a href="https://wa.me/919022281139?text=Hello%20MedCare%20Distributors!%20I%20would%20like%20to%20enquire%20about%20your%20products."
   target="_blank"
   style="position:fixed;bottom:28px;right:28px;z-index:9999;width:56px;height:56px;background:#25D366;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 6px 24px rgba(37,211,102,.4);transition:transform .2s;"
   onmouseover="this.style.transform='scale(1.12)'"
   onmouseout="this.style.transform='scale(1)'"
   title="Chat on WhatsApp">
    <i class="bi bi-whatsapp" style="font-size:26px;color:#fff;"></i>
</a>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- FAQ Toggle -->
<script>
document.querySelectorAll('.faq-q').forEach(q => {
    q.addEventListener('click', () => {
        const ans = q.nextElementSibling;
        const icon = q.querySelector('.faq-icon');
        const isOpen = ans.classList.contains('open');
        document.querySelectorAll('.faq-a').forEach(a => a.classList.remove('open'));
        document.querySelectorAll('.faq-icon').forEach(i => i.classList.replace('bi-dash', 'bi-plus'));
        if (!isOpen) {
            ans.classList.add('open');
            if (icon) icon.classList.replace('bi-plus', 'bi-dash');
        }
    });
});
</script>

@stack('scripts')
</body>
</html>
