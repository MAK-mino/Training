{{-- resources/views/Component/Hero.blade.php --}}
{{--
    Reusable Full-Screen Hero Slider Component
    -------------------------------------------
    Usage:
        @include('Component.Hero')

    With custom options:
        @include('Component.Hero', [
            'sliderId' => 'hero-home',
            'images'   => ['Assets/img1.jpeg', 'Assets/img2.jpg'],
            'altTexts' => ['First', 'Second'],
            'heroContent' => '<h1>Welcome</h1>',
        ])
--}}

@php
    $sliderId = $sliderId ?? 'heroSlider';

    // ✅ FIXED: forward slashes for web paths
    $defaultImages = [
        'Assets/img4.jpeg',
        'Assets/img5.jpg',
        'Assets/img3.jpeg',
    ];

    $defaultAlts = [
        'Mountain landscape at sunrise',
        'Forest with golden light',
        'Lake surrounded by mountains',
    ];

    $images   = $images   ?? $defaultImages;
    $altTexts = $altTexts ?? $defaultAlts;

    if (count($images) !== count($altTexts)) {
        $altTexts = array_pad($altTexts, count($images), 'Hero image');
    }

    // ✅ FIXED: safe optional overlay content
    $heroContent = $heroContent ?? null;
@endphp

{{-- ==================== STYLES ==================== --}}
@once
@push('styles')
<style>
    /* Prevent horizontal scrollbar from full-width elements */
    html, body { overflow-x: hidden; }

    .hero-slider {
        position: relative;
        width: 100%;
        height: 100vh;
        height: 100dvh;          /* better on mobile browsers */
        overflow: hidden;
        background: #111;
        isolation: isolate;
    }

    .hero-slider .hero-slide {
        position: absolute;
        inset: 0;
        opacity: 0;
        transition: opacity 1s ease-in-out;
        z-index: 0;
        will-change: opacity;
    }

    .hero-slider .hero-slide.active {
        opacity: 1;
        z-index: 2;
    }

    .hero-slider .hero-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        pointer-events: none;
        user-select: none;
        -webkit-user-drag: none;
    }

    .hero-slider .hero-slide::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0.15) 0%,
            rgba(0, 0, 0, 0.05) 40%,
            rgba(0, 0, 0, 0.35) 100%
        );
        pointer-events: none;
    }

    /* ---------- Arrows ---------- */
    .hero-slider .hero-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 20;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.4);
        color: #fff;
        width: 3.25rem;
        height: 3.25rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 1.35rem;
        transition: all 0.25s ease;
        box-shadow: 0 8px 20px -6px rgba(0, 0, 0, 0.4);
        padding: 0;
        line-height: 1;
    }

    .hero-slider .hero-arrow:hover,
    .hero-slider .hero-arrow:focus-visible {
        background: rgba(255, 255, 255, 0.35);
        transform: translateY(-50%) scale(1.06);
        border-color: #fff;
        outline: none;
    }

    .hero-slider .hero-arrow.prev { left: 1.5rem; }
    .hero-slider .hero-arrow.next { right: 1.5rem; }

    /* ---------- Dots ---------- */
    .hero-slider .hero-dots {
        position: absolute;
        bottom: 2rem;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 0.8rem;
        z-index: 20;
        background: rgba(0, 0, 0, 0.25);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        padding: 0.6rem 1.3rem;
        border-radius: 40px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .hero-slider .hero-dots .hero-dot {
        width: 11px;
        height: 11px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.55);
        cursor: pointer;
        transition: all 0.25s ease;
        border: 1px solid transparent;
        padding: 0;
    }

    .hero-slider .hero-dots .hero-dot:hover,
    .hero-slider .hero-dots .hero-dot:focus-visible {
        background: rgba(255, 255, 255, 0.9);
        transform: scale(1.15);
        outline: none;
    }

    .hero-slider .hero-dots .hero-dot.active {
        background: #fff;
        width: 28px;
        border-radius: 10px;
        box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.7);
    }

    /* ---------- Optional Content Overlay ---------- */
    .hero-slider .hero-content {
        position: absolute;
        inset: 0;
        z-index: 15;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 0 1.5rem;
        pointer-events: none;
        color: #fff;
    }

    .hero-slider .hero-content > * {
        pointer-events: auto;
    }

    /* ---------- Responsive ---------- */
    @media (max-width: 640px) {
        .hero-slider .hero-arrow {
            width: 2.6rem;
            height: 2.6rem;
            font-size: 1.1rem;
        }
        .hero-slider .hero-arrow.prev { left: 0.8rem; }
        .hero-slider .hero-arrow.next { right: 0.8rem; }
        .hero-slider .hero-dots {
            bottom: 1.25rem;
            padding: 0.5rem 1rem;
            gap: 0.6rem;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .hero-slider .hero-slide { transition: none; }
    }
</style>
@endpush
@endonce

{{-- ==================== MARKUP ==================== --}}
<section
    id="{{ $sliderId }}"
    class="hero-slider"
    data-hero-slider
    aria-label="Hero image slider"
    aria-roledescription="carousel"
>
    {{-- Slides --}}
    @foreach ($images as $index => $image)
        <div
            class="hero-slide {{ $index === 0 ? 'active' : '' }}"
            data-slide-index="{{ $index }}"
            role="group"
            aria-roledescription="slide"
            aria-label="Slide {{ $index + 1 }} of {{ count($images) }}"
        >
            <img
                src="{{ asset($image) }}"
                alt="{{ $altTexts[$index] ?? 'Hero image' }}"
                loading="{{ $index === 0 ? 'eager' : 'lazy' }}"
                fetchpriority="{{ $index === 0 ? 'high' : 'auto' }}"
                decoding="async"
                draggable="false"
            >
        </div>
    @endforeach

    {{-- Optional overlay content (pass via $heroContent variable) --}}
    @if (!empty($heroContent))
        <div class="hero-content">
            {!! $heroContent !!}
        </div>
    @endif

    {{-- Arrows --}}
    <button type="button" class="hero-arrow prev" data-hero-prev aria-label="Previous slide">
        <i class="fas fa-chevron-left" aria-hidden="true"></i>
    </button>
    <button type="button" class="hero-arrow next" data-hero-next aria-label="Next slide">
        <i class="fas fa-chevron-right" aria-hidden="true"></i>
    </button>

    {{-- Dots --}}
    <div class="hero-dots" role="tablist" aria-label="Slide navigation">
        @foreach ($images as $index => $image)
            <button
                type="button"
                class="hero-dot {{ $index === 0 ? 'active' : '' }}"
                data-hero-dot
                data-index="{{ $index }}"
                role="tab"
                aria-selected="{{ $index === 0 ? 'true' : 'false' }}"
                aria-label="Go to slide {{ $index + 1 }}"
            ></button>
        @endforeach
    </div>
</section>

{{-- ==================== SCRIPT ==================== --}}
@once
@push('scripts')
<script>
    (function () {
        function initHeroSlider(sliderEl) {
            if (!sliderEl || sliderEl.dataset.heroInitialized === 'true') return;

            const slides  = sliderEl.querySelectorAll('.hero-slide');
            const dots    = sliderEl.querySelectorAll('[data-hero-dot]');
            const prevBtn = sliderEl.querySelector('[data-hero-prev]');
            const nextBtn = sliderEl.querySelector('[data-hero-next]');

            if (slides.length === 0) return;

            let current = 0;
            let timer = null;
            const INTERVAL = 5500;

            function showSlide(index) {
                if (index < 0) index = slides.length - 1;
                if (index >= slides.length) index = 0;
                current = index;

                slides.forEach((slide, i) => {
                    const isActive = i === current;
                    slide.classList.toggle('active', isActive);
                    if (isActive) {
                        slide.removeAttribute('aria-hidden');
                    } else {
                        slide.setAttribute('aria-hidden', 'true');
                    }
                });

                dots.forEach((dot, i) => {
                    const isActive = i === current;
                    dot.classList.toggle('active', isActive);
                    dot.setAttribute('aria-selected', isActive ? 'true' : 'false');
                });
            }

            function next() { showSlide(current + 1); }
            function prev() { showSlide(current - 1); }

            function restartAutoplay() {
                if (timer) clearInterval(timer);
                timer = setInterval(next, INTERVAL);
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', function () {
                    next();
                    restartAutoplay();
                });
            }
            if (prevBtn) {
                prevBtn.addEventListener('click', function () {
                    prev();
                    restartAutoplay();
                });
            }

            dots.forEach((dot) => {
                dot.addEventListener('click', function () {
                    const idx = parseInt(this.dataset.index, 10) || 0;
                    showSlide(idx);
                    restartAutoplay();
                });
            });

            // Keyboard navigation (buttons are focusable; no tabindex needed on the section)
            sliderEl.addEventListener('keydown', function (e) {
                if (e.key === 'ArrowLeft') {
                    prev();
                    restartAutoplay();
                } else if (e.key === 'ArrowRight') {
                    next();
                    restartAutoplay();
                }
            });

            // Pause on hover
            sliderEl.addEventListener('mouseenter', function () {
                if (timer) clearInterval(timer);
            });
            sliderEl.addEventListener('mouseleave', function () {
                restartAutoplay();
            });

            // Touch swipe
            let touchStartX = 0;
            sliderEl.addEventListener('touchstart', function (e) {
                touchStartX = e.changedTouches[0].screenX;
            }, { passive: true });
            sliderEl.addEventListener('touchend', function (e) {
                const diff = touchStartX - e.changedTouches[0].screenX;
                if (Math.abs(diff) > 50) {
                    diff > 0 ? next() : prev();
                    restartAutoplay();
                }
            }, { passive: true });

            // Initial ARIA state
            slides.forEach((slide, i) => {
                if (i === 0) slide.removeAttribute('aria-hidden');
                else slide.setAttribute('aria-hidden', 'true');
            });

            restartAutoplay();
            sliderEl.dataset.heroInitialized = 'true';
        }

        function initAllHeroSliders() {
            document.querySelectorAll('[data-hero-slider]').forEach(initHeroSlider);
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initAllHeroSliders);
        } else {
            initAllHeroSliders();
        }

        window.initHeroSliders = initAllHeroSliders;
    })();
</script>
@endpush
@endonce