{{-- resources/views/Pages/About.blade.php --}}
@extends('Layout.app')

@section('title', 'About Us - Apexbooks')

@section('styles')
    {{-- About page styles --}}
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')

{{-- ============================================
     HERO
     ============================================ --}}
<section class="about-hero">
    <div class="hero-scene" aria-hidden="true">
        <div class="cube c1"></div>
        <div class="cube c2"></div>
        <div class="cube c3"></div>
        <div class="cube c4"></div>
    </div>

    <div class="hero-inner">
        <span class="hero-eyebrow">
            <i class="fa-solid fa-users"></i>
            About Apexbooks
        </span>
        <h1 class="hero-title">
            Financial clarity, <span class="accent">built by people who care.</span>
        </h1>
        <p class="hero-subtitle">
            We're on a mission to give every business — from solo founders to
            enterprise finance teams — the tools and insight they need to make
            confident decisions, without the spreadsheets.
        </p>
    </div>
</section>

{{-- ============================================
     MISSION / STORY
     ============================================ --}}
<section class="mission-section">

    <div class="mission-text">
        <span class="section-eyebrow">Our Story</span>
        <h2>We started Apexbooks because <span class="accent">accounting deserved better.</span></h2>
        <p>
            In 2018, our founders — a group of accountants, engineers, and finance
            leaders — grew tired of stitching together spreadsheets, disconnected
            tools, and slow month-end closes. They believed that modern businesses
            deserved a finance platform that felt as intuitive as the apps they
            used every day.
        </p>
        <p>
            Today, Apexbooks powers the books of thousands of companies across
            40+ countries. Our platform automates the busywork, surfaces the
            insights that matter, and gives teams back the hours they used to
            spend on data entry.
        </p>
        <p>
            We're still the same team at heart — obsessed with precision,
            transparency, and building tools that make finance feel effortless.
        </p>
    </div>

    <div class="mission-visual" aria-hidden="true">
        <div class="mission-card mc1">
            <div class="mc-label">Founded</div>
            <div class="mc-value">2018</div>
            <div class="mc-desc">Built by accountants &amp; engineers.</div>
        </div>
        <div class="mission-card mc2">
            <div class="mc-label">Trusted by</div>
            <div class="mc-value accent">12,000+</div>
            <div class="mc-desc">Businesses in 40+ countries.</div>
        </div>
        <div class="mission-card mc3">
            <div class="mc-label">Mission</div>
            <div class="mc-value">Clarity</div>
            <div class="mc-desc">For every finance team.</div>
        </div>
    </div>

</section>

{{-- ============================================
     STATS STRIP
     ============================================ --}}
<section class="stats-strip">
    <div class="stats-inner">
        <div class="stat-item">
            <div class="stat-value">12k+</div>
            <div class="stat-label">Businesses served</div>
        </div>
        <div class="stat-item">
            <div class="stat-value">$4.2B</div>
            <div class="stat-label">Transactions processed</div>
        </div>
        <div class="stat-item">
            <div class="stat-value">40+</div>
            <div class="stat-label">Countries supported</div>
        </div>
        <div class="stat-item">
            <div class="stat-value">99.98%</div>
            <div class="stat-label">Platform uptime</div>
        </div>
    </div>
</section>

{{-- ============================================
     VALUES
     ============================================ --}}
<section class="values-section">
    <div class="section-head">
        <span class="section-eyebrow">What we believe</span>
        <h2 class="section-title">The principles behind every decision.</h2>
        <p class="section-subtitle">
            These are the values that shape how we build, how we hire, and how we
            serve the businesses that trust us with their books.
        </p>
    </div>

    <div class="values-grid">

        <div class="value-card">
            <div class="value-icon"><i class="fa-solid fa-bullseye"></i></div>
            <h3 class="value-title">Precision first</h3>
            <p class="value-desc">
                Numbers have to be right. Every feature we ship is designed
                around accuracy, auditability, and trust.
            </p>
        </div>

        <div class="value-card">
            <div class="value-icon"><i class="fa-solid fa-bolt"></i></div>
            <h3 class="value-title">Automate the boring</h3>
            <p class="value-desc">
                If a task can be automated, it should be. We free finance teams
                to focus on the decisions only humans can make.
            </p>
        </div>

        <div class="value-card">
            <div class="value-icon"><i class="fa-solid fa-eye"></i></div>
            <h3 class="value-title">Radical transparency</h3>
            <p class="value-desc">
                Clear pricing, honest roadmaps, and open communication. No
                hidden fees, no surprise lock-ins.
            </p>
        </div>

        <div class="value-card">
            <div class="value-icon"><i class="fa-solid fa-shield-halved"></i></div>
            <h3 class="value-title">Security by default</h3>
            <p class="value-desc">
                Your financial data is sacred. End-to-end encryption,
                role-based access, and full audit trails — standard on every plan.
            </p>
        </div>

        <div class="value-card">
            <div class="value-icon"><i class="fa-solid fa-handshake"></i></div>
            <h3 class="value-title">Customer obsession</h3>
            <p class="value-desc">
                We succeed when our customers do. Every team member — from
                engineering to support — talks to customers weekly.
            </p>
        </div>

        <div class="value-card">
            <div class="value-icon"><i class="fa-solid fa-rocket"></i></div>
            <h3 class="value-title">Always improving</h3>
            <p class="value-desc">
                We ship every week, learn from every release, and never stop
                refining the platform our customers rely on.
            </p>
        </div>

    </div>
</section>

{{-- ============================================
     TEAM
     ============================================ --}}
<section class="team-section">
    <div class="section-head">
        <span class="section-eyebrow">Our leadership</span>
        <h2 class="section-title">The people steering the ship.</h2>
        <p class="section-subtitle">
            A small, senior team with deep experience in accounting, fintech,
            and building products people love.
        </p>
    </div>

    <div class="team-grid">

        <div class="team-card">
            <div class="team-avatar">AM</div>
            <div class="team-name">Amelia Mercer</div>
            <div class="team-role">Co-Founder &amp; CEO</div>
            <p class="team-bio">
                Former CFO with 15 years in SaaS finance. Obsessed with making
                accounting feel invisible.
            </p>
        </div>

        <div class="team-card">
            <div class="team-avatar">DK</div>
            <div class="team-name">Daniel Kim</div>
            <div class="team-role">Co-Founder &amp; CTO</div>
            <p class="team-bio">
                Built financial infrastructure at two unicorns. Leads our
                engineering and security teams.
            </p>
        </div>

        <div class="team-card">
            <div class="team-avatar">SP</div>
            <div class="team-name">Sofia Patel</div>
            <div class="team-role">Chief Product Officer</div>
            <p class="team-bio">
                Product leader with a decade in fintech. Champions the voice of
                the customer in every release.
            </p>
        </div>

        <div class="team-card">
            <div class="team-avatar">JR</div>
            <div class="team-name">James Rivera</div>
            <div class="team-role">Head of Customer Success</div>
            <p class="team-bio">
                CPA and former auditor. Makes sure every customer gets real
                value from day one.
            </p>
        </div>

    </div>
</section>

{{-- ============================================
     CTA
     ============================================ --}}
<section class="cta-section">
    <div class="cta-card">
        <h2>Ready to see Apexbooks in action?</h2>
        <p>
            Join thousands of finance teams who've replaced spreadsheets with
            a platform built for the way modern businesses work.
        </p>
        <div class="cta-actions">
            <a href="/register" class="btn-primary-lg">
                Get Started Free <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="/Contact" class="btn-outline-lg">
                Talk to Sales <i class="fa-solid fa-headset"></i>
            </a>
        </div>
    </div>
</section>

@endsection

@section('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endsection