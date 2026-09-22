{{-- resources/views/Pages/Contact.blade.php --}}
@extends('Layout.app')

@section('title', 'Contact Us - Apexbooks')

@section('styles')
    {{-- Contact page styles --}}
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')

{{-- ============================================
     HERO
     ============================================ --}}
<section class="contact-hero">
    <div class="hero-scene" aria-hidden="true">
        <div class="cube c1"></div>
        <div class="cube c2"></div>
        <div class="cube c3"></div>
        <div class="cube c4"></div>
    </div>

    <div class="hero-inner">
        <span class="hero-eyebrow">
            <i class="fa-solid fa-paper-plane"></i>
            Contact Us
        </span>
        <h1 class="hero-title">
            Let's talk about <span class="accent">your books.</span>
        </h1>
        <p class="hero-subtitle">
            Questions about pricing, onboarding, or integrations? Our team typically
            replies within one business day. Choose whichever channel works best for you.
        </p>
    </div>
</section>

{{-- ============================================
     CONTACT SECTION (Info + Form)
     ============================================ --}}
<section class="contact-section">

    {{-- LEFT: Info cards --}}
    <div class="info-column">

        <div class="info-card">
            <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
            <div class="info-body">
                <h4>Email Us</h4>
                <p>For general inquiries and support requests.</p>
                <a href="mailto:hello@apexbooks.com">hello@apexbooks.com</a>
            </div>
        </div>

        <div class="info-card">
            <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
            <div class="info-body">
                <h4>Call Us</h4>
                <p>Mon–Fri, 9:00 AM – 6:00 PM (GMT).</p>
                <a href="tel:+15551234567">+1 (555) 123-4567</a>
            </div>
        </div>

        <div class="info-card">
            <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
            <div class="info-body">
                <h4>Visit Us</h4>
                <p>128 Financial District, Suite 400<br>New York, NY 10005</p>
                <a href="#">Get directions <i class="fa-solid fa-arrow-right" style="font-size:10px;"></i></a>
            </div>
        </div>

        <div class="info-card">
            <div class="info-icon"><i class="fa-solid fa-headset"></i></div>
            <div class="info-body">
                <h4>Priority Support</h4>
                <p>Already a customer? Get faster help from your account dashboard.</p>
                <a href="/login">Sign in to your portal <i class="fa-solid fa-arrow-right" style="font-size:10px;"></i></a>
            </div>
        </div>

    </div>

    {{-- RIGHT: Contact form --}}
    <div class="form-card">
        <h2 class="form-title">Send us a message</h2>
        <p class="form-subtitle">
            Fill out the form below and our team will get back to you as soon as possible.
        </p>

        <form action="#" method="POST" id="contactForm">
            @csrf

            <div class="form-row">
                <div class="form-group" style="margin-bottom:0;">
                    <label for="first_name">First Name <span class="required">*</span></label>
                    <input type="text" id="first_name" name="first_name"
                           class="form-control" placeholder="Jane" required>
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <label for="last_name">Last Name <span class="required">*</span></label>
                    <input type="text" id="last_name" name="last_name"
                           class="form-control" placeholder="Doe" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group" style="margin-bottom:0;">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" id="email" name="email"
                           class="form-control" placeholder="jane@company.com" required>
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone"
                           class="form-control" placeholder="+1 (555) 000-0000">
                </div>
            </div>

            <div class="form-group">
                <label for="subject">Subject <span class="required">*</span></label>
                <div class="select-wrap">
                    <select id="subject" name="subject" class="form-control" required>
                        <option value="" disabled selected>Choose a topic…</option>
                        <option value="sales">Sales & Pricing</option>
                        <option value="onboarding">Onboarding & Setup</option>
                        <option value="integrations">Integrations & API</option>
                        <option value="support">Technical Support</option>
                        <option value="other">Something Else</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="message">Message <span class="required">*</span></label>
                <textarea id="message" name="message" class="form-control"
                          placeholder="Tell us a bit about what you need…" required></textarea>
            </div>

            <button type="submit" class="btn-submit">
                Send Message
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </form>
    </div>

</section>

{{-- ============================================
     FAQ / QUICK LINKS
     ============================================ --}}
<section class="bottom-section">
    <div class="section-head">
        <span class="section-eyebrow">Other ways to reach us</span>
        <h2 class="section-title">Find answers faster.</h2>
        <p class="section-subtitle">
            Many questions are already answered in our docs and community. Take a look before reaching out.
        </p>
    </div>

    <div class="faq-grid">
        <div class="faq-card">
            <i class="fa-solid fa-book-open"></i>
            <h4>Documentation</h4>
            <p>Guides, tutorials, and API references to get you set up quickly.</p>
            <a href="#">Browse docs <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="faq-card">
            <i class="fa-solid fa-circle-question"></i>
            <h4>Help Center</h4>
            <p>Answers to the most common questions from customers and prospects.</p>
            <a href="#">Visit help center <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="faq-card">
            <i class="fa-solid fa-comments"></i>
            <h4>Community</h4>
            <p>Join other finance teams and accountants sharing tips and best practices.</p>
            <a href="#">Join community <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="faq-card">
            <i class="fa-solid fa-calendar-check"></i>
            <h4>Book a Demo</h4>
            <p>See Apexbooks in action with a guided walkthrough from our team.</p>
            <a href="/register">Request a demo <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</section>

@endsection

@section('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endsection