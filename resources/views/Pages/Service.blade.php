{{-- resources/views/Pages/Service.blade.php --}}
@extends('Layout.app')

@section('title', 'Our Services - Apexbooks')

@section('styles')
    {{-- Service page styles --}}
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
@endsection

@section('content')

{{-- ============================================
     HERO
     ============================================ --}}
<section class="service-hero">
    {{-- 3D floating cubes --}}
    <div class="hero-scene" aria-hidden="true">
        <div class="cube c1"></div>
        <div class="cube c2"></div>
        <div class="cube c3"></div>
        <div class="cube c4"></div>
        <div class="cube c5"></div>
    </div>

    <div class="hero-inner">
        <span class="hero-eyebrow">
            <i class="fa-solid fa-layer-group"></i>
            Our Services
        </span>
        <h1 class="hero-title">
            Financial tools built for <br>
            <span class="accent">every role in your business.</span>
        </h1>
        <p class="hero-subtitle">
            From automated bookkeeping to real-time analytics, Apexbooks gives your team
            the clarity to make confident decisions — without the spreadsheets.
        </p>
    </div>
</section>

{{-- ============================================
     SERVICES GRID
     ============================================ --}}
<section class="services-section">
    <div class="services-grid">

        {{-- Card 1 --}}
        <article class="service-card">
            <div class="service-icon">
                <i class="fa-solid fa-calculator"></i>
            </div>
            <h3 class="service-title">Automated Bookkeeping</h3>
            <p class="service-desc">
                Every transaction categorized, reconciled, and posted to your ledger — automatically, in real time.
            </p>
            <ul class="service-features">
                <li><i class="fa-solid fa-check"></i> Bank feed sync</li>
                <li><i class="fa-solid fa-check"></i> Smart categorization</li>
                <li><i class="fa-solid fa-check"></i> Month-end close in hours</li>
            </ul>
            <a href="#" class="service-link">
                Learn more <i class="fa-solid fa-arrow-right"></i>
            </a>
        </article>

        {{-- Card 2 --}}
        <article class="service-card">
            <div class="service-icon">
                <i class="fa-solid fa-chart-line"></i>
            </div>
            <h3 class="service-title">Real-Time Analytics</h3>
            <p class="service-desc">
                Live dashboards that turn raw numbers into the story of your business — cash flow, margins, and growth.
            </p>
            <ul class="service-features">
                <li><i class="fa-solid fa-check"></i> Custom KPI dashboards</li>
                <li><i class="fa-solid fa-check"></i> Cash flow forecasting</li>
                <li><i class="fa-solid fa-check"></i> Exportable reports</li>
            </ul>
            <a href="#" class="service-link">
                Learn more <i class="fa-solid fa-arrow-right"></i>
            </a>
        </article>

        {{-- Card 3 --}}
        <article class="service-card">
            <div class="service-icon">
                <i class="fa-solid fa-file-invoice-dollar"></i>
            </div>
            <h3 class="service-title">Invoicing & Payments</h3>
            <p class="service-desc">
                Send branded invoices, accept online payments, and get paid faster — with automatic reminders.
            </p>
            <ul class="service-features">
                <li><i class="fa-solid fa-check"></i> Recurring invoices</li>
                <li><i class="fa-solid fa-check"></i> Multi-currency support</li>
                <li><i class="fa-solid fa-check"></i> Payment gateway sync</li>
            </ul>
            <a href="#" class="service-link">
                Learn more <i class="fa-solid fa-arrow-right"></i>
            </a>
        </article>

        {{-- Card 4 --}}
        <article class="service-card">
            <div class="service-icon">
                <i class="fa-solid fa-shield-halved"></i>
            </div>
            <h3 class="service-title">Compliance & Tax</h3>
            <p class="service-desc">
                Stay audit-ready with built-in tax rules, VAT/GST handling, and secure document storage.
            </p>
            <ul class="service-features">
                <li><i class="fa-solid fa-check"></i> Tax rule automation</li>
                <li><i class="fa-solid fa-check"></i> Audit trail</li>
                <li><i class="fa-solid fa-check"></i> Encrypted records</li>
            </ul>
            <a href="#" class="service-link">
                Learn more <i class="fa-solid fa-arrow-right"></i>
            </a>
        </article>

        {{-- Card 5 --}}
        <article class="service-card">
            <div class="service-icon">
                <i class="fa-solid fa-users-gear"></i>
            </div>
            <h3 class="service-title">Team Collaboration</h3>
            <p class="service-desc">
                Give accountants, managers, and owners the right access — with role-based permissions and approvals.
            </p>
            <ul class="service-features">
                <li><i class="fa-solid fa-check"></i> Role-based access</li>
                <li><i class="fa-solid fa-check"></i> Approval workflows</li>
                <li><i class="fa-solid fa-check"></i> Comment threads</li>
            </ul>
            <a href="#" class="service-link">
                Learn more <i class="fa-solid fa-arrow-right"></i>
            </a>
        </article>

        {{-- Card 6 --}}
        <article class="service-card">
            <div class="service-icon">
                <i class="fa-solid fa-plug-circle-bolt"></i>
            </div>
            <h3 class="service-title">Integrations</h3>
            <p class="service-desc">
                Connect the tools you already use — payroll, CRM, e-commerce, and banking — in a few clicks.
            </p>
            <ul class="service-features">
                <li><i class="fa-solid fa-check"></i> REST API & webhooks</li>
                <li><i class="fa-solid fa-check"></i> 40+ native connectors</li>
                <li><i class="fa-solid fa-check"></i> Zapier & Make support</li>
            </ul>
            <a href="#" class="service-link">
                Learn more <i class="fa-solid fa-arrow-right"></i>
            </a>
        </article>

    </div>
</section>

{{-- ============================================
     FEATURED SHOWCASE BANNER (3D)
     ============================================ --}}
<section class="showcase">
    <div class="showcase-inner">
        <div class="showcase-content">
            <div class="showcase-text">
                <span class="section-eyebrow" style="color: rgba(255,255,255,0.85);">Why teams choose Apexbooks</span>
                <h2>One platform. Every financial workflow.</h2>
                <p>
                    Stop stitching together spreadsheets, inboxes, and disconnected tools.
                    Apexbooks unifies your entire finance stack so your team can focus on
                    decisions — not data entry.
                </p>
                <div class="showcase-actions">
                    <a href="/register" class="btn-white">
                        Get Started <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="/Contact" class="btn-ghost">
                        Talk to Sales <i class="fa-solid fa-headset"></i>
                    </a>
                </div>
            </div>

            <div class="showcase-visual" aria-hidden="true">
                <div class="stat-card s1" style="--rot:-4deg;">
                    <div class="stat-label">Monthly Revenue</div>
                    <div class="stat-value">$124,500</div>
                    <div class="stat-trend"><i class="fa-solid fa-arrow-up"></i> 14.2%</div>
                </div>
                <div class="stat-card s2" style="--rot:3deg;">
                    <div class="stat-label">Invoices Processed</div>
                    <div class="stat-value accent">12,450</div>
                    <div class="stat-trend"><i class="fa-solid fa-arrow-up"></i> 8.7%</div>
                </div>
                <div class="stat-card s3" style="--rot:-2deg;">
                    <div class="stat-label">Hours Saved / Mo</div>
                    <div class="stat-value">386</div>
                    <div class="stat-trend"><i class="fa-solid fa-arrow-up"></i> 22.1%</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================
     PROCESS / STEPS
     ============================================ --}}
<section class="process">
    <span class="section-eyebrow">How it works</span>
    <h2 class="section-title">Up and running in days, not months.</h2>
    <p class="section-subtitle">
        A guided onboarding process that gets your books clean and your team productive — fast.
    </p>

    <div class="steps">
        <div class="step">
            <div class="step-number">01</div>
            <h3 class="step-title">Connect your accounts</h3>
            <p class="step-desc">
                Link your bank, payment gateways, and existing tools in a few clicks. We'll import your history automatically.
            </p>
        </div>
        <div class="step">
            <div class="step-number">02</div>
            <h3 class="step-title">Automate the work</h3>
            <p class="step-desc">
                Transactions get categorized, reconciled, and posted to your ledger without anyone touching a spreadsheet.
            </p>
        </div>
        <div class="step">
            <div class="step-number">03</div>
            <h3 class="step-title">Invite your team</h3>
            <p class="step-desc">
                Give accountants, managers, and stakeholders the access they need — with the permissions you control.
            </p>
        </div>
        <div class="step">
            <div class="step-number">04</div>
            <h3 class="step-title">Make confident decisions</h3>
            <p class="step-desc">
                Real-time dashboards and forecasts keep everyone aligned on the numbers that matter most.
            </p>
        </div>
    </div>
</section>

@endsection

@section('scripts')
    <script src="{{ asset('js/service.js') }}"></script>
@endsection