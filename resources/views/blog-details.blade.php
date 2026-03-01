<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }} | ঝাউগড়া কল্যাণ সংগঠন</title>
    <!-- Google Fonts for Bengali -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    @php
    // Helper to convert Bengali digits to English
    if (!function_exists('bn2en')) {
    function bn2en($number) {
    $bn = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
    $en = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    return str_replace($bn, $en, $number);
    }
    }
    @endphp

    <style>
    /* ===== Global Styles ===== */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #0b0f19;
        color: #e5e7eb;
        font-family: 'Segoe UI', 'Hind Siliguri', sans-serif;
        line-height: 1.6;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    section {
        padding: 100px 0;
    }

    h1,
    h2,
    h3,
    h4 {
        color: #ffffff;
        font-weight: 700;
    }

    p {
        color: #d1d5db;
        line-height: 1.7;
    }

    /* ===== Page Header ===== */
    .page-header {
        background: #0f172a;
        text-align: center;
        padding: 80px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .page-title {
        font-size: 2.5rem;
        margin-bottom: 10px;
        color: #fff;
    }

    .breadcrumb a {
        color: #10b981;
        text-decoration: none;
        transition: color 0.3s;
    }

    .breadcrumb a:hover {
        color: #f59e0b;
        text-decoration: underline;
    }

    /* ===== Blog Details (Main) ===== */
    .blog-details {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: start;
        background: #1f2937;
        border-radius: 30px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
    }

    .blog-details .blog-image {
        height: 450px;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 40px -10px #00000080;
    }

    .blog-details .blog-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s;
    }

    .blog-details .blog-image:hover img {
        transform: scale(1.02);
    }

    .blog-info {
        display: flex;
        flex-direction: column;
    }

    .blog-info h2 {
        font-size: 2.2rem;
        margin-bottom: 20px;
        color: #fff;
        line-height: 1.3;
    }

    .blog-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 25px;
        margin-bottom: 30px;
        background: #0f172a;
        padding: 15px 25px;
        border-radius: 50px;
        border: 1px solid #2d3748;
    }

    .blog-meta span {
        color: #cbd5e1;
        font-size: 1rem;
    }

    .blog-meta i {
        color: #10b981;
        margin-right: 8px;
        font-size: 1.1rem;
    }

    .blog-description {
        background: #111827;
        padding: 30px;
        border-radius: 20px;
        margin-bottom: 30px;
        border-left: 4px solid #10b981;
    }

    .blog-description p {
        font-size: 1.1rem;
        color: #e2e8f0;
        margin-bottom: 20px;
    }

    .back-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 35px;
        background: transparent;
        border: 2px solid #10b981;
        color: #ffffff;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.4s;
        width: fit-content;
    }

    .back-btn:hover {
        background: #10b981;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
    }

    /* ===== Extra Sections ===== */
    .section-divider {
        width: 100px;
        height: 3px;
        background: linear-gradient(90deg, #10b981, #f59e0b);
        margin: 0 auto 20px;
        border-radius: 2px;
    }

    .section-title {
        text-align: center;
        font-size: 2.2rem;
        margin-bottom: 20px;
        color: #fff;
    }

    .section-subtitle {
        text-align: center;
        color: #94a3b8;
        margin-bottom: 60px;
        font-size: 1.2rem;
    }

    /* Author Card */
    .author-card {
        background: #1f2937;
        border-radius: 20px;
        padding: 40px;
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        align-items: center;
        border: 1px solid rgba(255, 255, 255, 0.05);
        box-shadow: 0 20px 40px -12px #00000080;
        transition: transform 0.4s, border-color 0.4s;
    }

    .author-card:hover {
        transform: translateY(-8px);
        border-color: #10b981;
    }

    .author-img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background: linear-gradient(135deg, #10b981, #059669);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3.5rem;
        color: white;
        flex-shrink: 0;
        transition: transform 0.4s;
    }

    .author-card:hover .author-img {
        transform: scale(1.05);
    }

    .author-info h3 {
        font-size: 1.8rem;
        margin-bottom: 10px;
        color: #fff;
    }

    .author-info p {
        margin-bottom: 8px;
        color: #cbd5e1;
    }

    .author-info i {
        color: #10b981;
        width: 25px;
    }

    .contact-details {
        display: flex;
        gap: 30px;
        margin-top: 15px;
        flex-wrap: wrap;
    }

    /* Share Buttons */
    .share-buttons {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .share-btn {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        background: #1f2937;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.8rem;
        transition: all 0.3s;
        border: 1px solid #374151;
        text-decoration: none;
    }

    .share-btn:hover {
        transform: translateY(-8px) scale(1.1);
        background: #10b981;
        border-color: #10b981;
        box-shadow: 0 10px 25px #10b98140;
    }

    /* Comments Section */
    .comments-section {
        background: #1f2937;
        border-radius: 20px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        box-shadow: 0 20px 40px -12px #00000080;
    }

    .comment-form textarea {
        width: 100%;
        padding: 15px;
        border-radius: 12px;
        background: #0f172a;
        border: 1px solid #2d3748;
        color: #fff;
        margin-bottom: 15px;
        resize: vertical;
        font-family: inherit;
    }

    .comment-form button {
        padding: 12px 30px;
        background: transparent;
        border: 2px solid #10b981;
        color: #ffffff;
        border-radius: 50px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.4s;
    }

    .comment-form button:hover {
        background: #10b981;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
    }

    /* Related Blogs Grid */
    .related-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-top: 50px;
    }

    .related-card {
        background: #1f2937;
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.4s ease;
        border: 1px solid rgba(255, 255, 255, 0.05);
        box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.5);
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .related-card:hover {
        transform: translateY(-10px);
        border-color: #10b981;
        box-shadow: 0 30px 60px -12px rgba(16, 185, 129, 0.15);
    }

    .related-card .card-img {
        height: 220px;
        overflow: hidden;
        flex-shrink: 0;
    }

    .related-card .card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s;
    }

    .related-card:hover .card-img img {
        transform: scale(1.05);
    }

    .related-card .card-content {
        padding: 25px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .related-card .card-content h3 {
        font-size: 1.3rem;
        margin-bottom: 12px;
        color: #ffffff;
        line-height: 1.4;
    }

    .related-card .card-content p {
        color: #cbd5e1;
        font-size: 0.95rem;
        margin-bottom: 20px;
        flex: 1;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }

    .card-link {
        display: inline-block;
        padding: 10px 25px;
        background: transparent;
        border: 2px solid #10b981;
        color: #ffffff;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.4s;
        text-align: center;
        margin-top: auto;
        align-self: flex-start;
        font-size: 0.9rem;
    }

    .card-link:hover {
        background: #10b981;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
    }

    .card-link i {
        margin-left: 5px;
        transition: transform 0.3s;
    }

    .card-link:hover i {
        transform: translateX(5px);
    }

    /* ===== Scroll Reveal ===== */
    .reveal,
    .reveal-left,
    .reveal-right,
    .reveal-up {
        opacity: 0;
        transition: all 1s ease;
    }

    .reveal {
        transform: translateY(40px);
    }

    .reveal-left {
        transform: translateX(-60px);
    }

    .reveal-right {
        transform: translateX(60px);
    }

    .reveal-up {
        transform: translateY(60px);
    }

    .active {
        opacity: 1;
        transform: translateX(0) translateY(0);
    }

    .delay-1 {
        transition-delay: 0.2s;
    }

    .delay-2 {
        transition-delay: 0.4s;
    }

    .delay-3 {
        transition-delay: 0.6s;
    }

    /* ===== Responsive ===== */
    @media (max-width: 991px) {
        .blog-details {
            grid-template-columns: 1fr;
            gap: 30px;
            padding: 30px;
        }

        .blog-details .blog-image {
            height: 350px;
        }

        .related-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .author-card {
            flex-direction: column;
            text-align: center;
        }

        .contact-details {
            justify-content: center;
        }
    }

    @media (max-width: 767px) {
        .page-title {
            font-size: 2rem;
        }

        .blog-info h2 {
            font-size: 1.8rem;
        }

        .related-grid {
            grid-template-columns: 1fr;
        }

        .author-img {
            margin: 0 auto;
        }
    }

    /* ===== Footer ===== */
    .footer {
        background: #0f172a;
        padding: 80px 8% 30px;
        color: #cbd5e1;
        position: relative;
        overflow: hidden;
    }

    .footer-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 50px;
        margin-bottom: 50px;
    }

    .footer-col h3 {
        color: #22c55e;
        margin-bottom: 20px;
    }

    .footer-col h4 {
        color: #ffffff;
        margin-bottom: 20px;
    }

    .footer-col p {
        margin-bottom: 15px;
        font-size: 15px;
    }

    .footer-col ul {
        list-style: none;
    }

    .footer-col ul li {
        margin-bottom: 10px;
    }

    .footer-col ul li a {
        color: #cbd5e1;
        text-decoration: none;
        position: relative;
        transition: 0.3s;
    }

    .footer-col ul li a::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -3px;
        width: 0;
        height: 2px;
        background: #22c55e;
        transition: 0.3s;
    }

    .footer-col ul li a:hover {
        color: #22c55e;
    }

    .footer-col ul li a:hover::after {
        width: 100%;
    }

    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: #1e293b;
        margin-right: 10px;
        color: #fff;
        transition: 0.3s;
    }

    .social-links a:hover {
        background: #22c55e;
        transform: translateY(-5px);
    }

    .newsletter {
        display: flex;
        margin-top: 15px;
    }

    .newsletter input {
        flex: 1;
        padding: 12px;
        border: none;
        outline: none;
        border-radius: 6px 0 0 6px;
        background: #1e293b;
        color: #fff;
    }

    .newsletter button {
        padding: 12px 20px;
        border: none;
        background: #22c55e;
        color: #fff;
        cursor: pointer;
        border-radius: 0 6px 6px 0;
        transition: 0.3s;
    }

    .newsletter button:hover {
        background: #16a34a;
    }

    .footer-bottom {
        border-top: 1px solid #1e293b;
        padding-top: 20px;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        font-size: 14px;
    }

    .footer-bottom a:hover {
        text-decoration: none;
        color: #22c55e;
    }

    .footer-policy a {
        color: #cbd5e1;
        margin-left: 20px;
        text-decoration: none;
        transition: 0.3s;
    }

    .footer-policy a:hover {
        color: #22c55e;
    }

    @media(max-width:992px) {
        .footer-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media(max-width:576px) {
        .footer-container {
            grid-template-columns: 1fr;
        }

        .footer-bottom {
            flex-direction: column;
            gap: 10px;
            text-align: center;
        }

        .footer-policy a {
            margin-left: 10px;
            margin-right: 10px;
        }
    }


    /* testimonials grid */
    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        margin-top: 40px;
    }

    .testimonial-card {
        background: #1f2937;
        padding: 30px;
        border-radius: 20px;
        border-left: 4px solid #10b981;
        transition: transform 0.4s, border-color 0.4s;
    }

    .testimonial-card:hover {
        transform: translateY(-8px);
        border-color: #f59e0b;
    }

    .testimonial-card i {
        font-size: 2rem;
        opacity: 0.3;
        margin-bottom: 10px;
        color: #10b981;
    }

    .testimonial-card p {
        font-style: italic;
    }

    .testimonial-card .author {
        margin-top: 15px;
        color: #f59e0b;
    }

    /* ===== Scroll Reveal Animation ===== */
    .reveal,
    .reveal-left,
    .reveal-right,
    .reveal-up {
        opacity: 0;
        transition: all 1s ease;
    }

    .reveal {
        transform: translateY(40px);
    }

    .reveal-left {
        transform: translateX(-60px);
    }

    .reveal-right {
        transform: translateX(60px);
    }

    .reveal-up {
        transform: translateY(60px);
    }

    .active {
        opacity: 1;
        transform: translateX(0) translateY(0);
    }

    .delay-1 {
        transition-delay: 0.2s;
    }

    .delay-2 {
        transition-delay: 0.4s;
    }

    .delay-3 {
        transition-delay: 0.6s;
    }

    /* ===== Responsive ===== */
    @media (max-width: 991px) {
        .event-details {
            grid-template-columns: 1fr;
            gap: 30px;
            padding: 30px;
        }

        .event-details .event-image {
            height: 350px;
        }

        .events-grid,
        .testimonials-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .organizer-card {
            flex-direction: column;
            text-align: center;
        }

        .contact-details {
            justify-content: center;
        }
    }

    @media (max-width: 767px) {
        .page-title {
            font-size: 2rem;
        }

        .event-info h2 {
            font-size: 1.8rem;
        }

        .events-grid,
        .testimonials-grid {
            grid-template-columns: 1fr;
        }

        .organizer-img {
            margin: 0 auto;
        }
    }
    </style>
</head>

<body>
    <main>
        <!-- Page Header -->
        <section class="page-header reveal">
            <div class="container">
                <h1 class="page-title">ব্লগ বিস্তারিত</h1>
                <div class="breadcrumb reveal delay-1">
                    <a href="{{ url('/') }}">হোম</a> / <a href="{{ url('/#ব্লগ') }}">ব্লগ</a> /
                    <span>{{ $blog->title }}</span>
                </div>
            </div>
        </section>

        <!-- Blog Details (Main) -->
        <section class="section-dark" style="padding-bottom: 50px;">
            <div class="container">
                <div class="blog-details reveal-up">
                    <div class="blog-image">
                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                    </div>
                    <div class="blog-info">
                        <h2>{{ $blog->title }}</h2>
                        <div class="blog-meta">
                            <span><i class="far fa-calendar-alt"></i>
                                @if($blog->event_date)
                                @php
                                $englishDate = bn2en($blog->event_date);
                                $formatted = \Carbon\Carbon::parse($englishDate)->format('d F Y');
                                @endphp
                                {{ $formatted }}
                                @else
                                {{ $blog->created_at->format('d F Y') }}
                                @endif
                            </span>
                            <span><i class="fas fa-user"></i> প্রশান্ত সরকার</span>
                            <span><i class="far fa-comments"></i> ৩ মন্তব্য</span>
                        </div>
                        <div class="blog-description">
                            <p>{{ $blog->description }}</p>
                        </div>
                        <a href="{{ url('/#ব্লগ') }}" class="back-btn"><i class="fas fa-arrow-left"></i> ব্লগ পাতায়
                            ফিরুন</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========== PROFESSIONAL EXTRA SECTIONS ========== -->

        <!-- 1. সম্পর্কিত ব্লগ (Related Blogs) -->
        @if(isset($relatedBlogs) && $relatedBlogs->count() > 0)
        <section class="section-dark" style="padding-top: 0;">
            <div class="container">
                <div class="section-divider reveal"></div>
                <h2 class="section-title reveal">আরও ব্লগ</h2>
                <p class="section-subtitle reveal delay-1">আপনার জন্য অন্যান্য লেখা</p>

                <div class="related-grid">
                    @foreach($relatedBlogs as $related)
                    <div class="related-card reveal-up">
                        <div class="card-img">
                            <img src="{{ asset($related->image) }}" alt="{{ $related->title }}">
                        </div>
                        <div class="card-content">
                            <h3>{{ $related->title }}</h3>
                            <p>{{ Str::limit($related->description, 80) }}</p>
                            <a href="{{ route('blog-details', $related->id) }}" class="card-link">
                                আরও পড়ুন <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif


        <!-- 2. অংশগ্রহণকারীদের মতামত (Static Testimonials) -->
        <section class="section-dark section-pt0">
            <div class="container">
                <div class="section-divider reveal"></div>
                <h2 class="section-title reveal">অংশগ্রহণকারীদের মতামত</h2>
                <p class="section-subtitle reveal delay-1">পূর্ববর্তী ইভেন্টের কিছু অনুভূতি</p>

                <div class="testimonials-grid">
                    <div class="testimonial-card reveal-up">
                        <i class="fas fa-quote-right"></i>
                        <p>"অসাধারণ আয়োজন! এমন উদ্যোগ সত্যিই প্রশংসনীয়। সংগঠনের প্রতিটি মানুষ আন্তরিক।"</p>
                        <p class="author">- মোঃ জাবেদ, স্থানীয় বাসিন্দা</p>
                    </div>
                    <div class="testimonial-card reveal-up delay-1">
                        <i class="fas fa-quote-right"></i>
                        <p>"ইভেন্টের প্রতিটি অংশ ছিল পেশাদার ও সুন্দর। আশা করি ভবিষ্যতে আরও বড় পরিসরে হবে।"</p>
                        <p class="author">- শাহীনুর রহমান, শিক্ষক</p>
                    </div>
                    <div class="testimonial-card reveal-up delay-2">
                        <i class="fas fa-quote-right"></i>
                        <p>"পরিষ্কার-পরিচ্ছন্নতা, ব্যবস্থাপনা, খাবার সবকিছু ছিল চোখে পড়ার মতো। ধন্যবাদ সবাইকে।"</p>
                        <p class="author">- নাজমা বেগম, সদস্য</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-col reveal">
                    <h3>ঝাউগড়া কল্যাণ সংগঠন</h3>
                    <p>আমরা সমাজের উন্নয়ন এবং সেবার কাজে নিয়োজিত একটি সংগঠন।</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/share/1NPqATstmz/"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="footer-col reveal">
                    <h4>দ্রুত লিংক</h4>
                    <ul>
                        <li><a href="{{ url('/') }}#হোম">হোম</a></li>
                        <li><a href="{{ url('/about') }}">আমাদের সম্পর্কে</a></li>
                        <li><a href="{{ url('/') }}#কার্যক্রম">কার্যক্রম</a></li>
                        <li><a href="{{ url('/events') }}">ইভেন্ট</a></li>
                        <li><a href="{{ url('/') }}#গ্যালারি">গ্যালারি</a></li>
                        <li><a href="{{ url('/#ব্লগ') }}">ব্লগ</a></li>
                        <li><a href="{{ url('/') }}#যোগাযোগ">যোগাযোগ</a></li>
                    </ul>
                </div>
                <div class="footer-col reveal">
                    <h4>যোগাযোগ</h4>
                    <p><i class="fas fa-envelope"></i> sheikh15-3700@diu.edu.bd</p>
                    <p><i class="fas fa-phone"></i> +8801706940942</p>
                    <p><i class="fas fa-map-marker-alt"></i> ঝাউগড়া কল্যাণ সংগঠন, জামালপুর, বাংলাদেশ</p>
                </div>
                <div class="footer-col reveal">
                    <h4>নিউজলেটার</h4>
                    <p>আমাদের সর্বশেষ আপডেট পান</p>
                    <div class="newsletter">
                        <input type="email" placeholder="আপনার ইমেইল">
                        <button>সাবস্ক্রাইব</button>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy;2026 ঝাউগড়া কল্যাণ সংগঠন সর্বস্বত্ব সংরক্ষিত। This website design & developed by
                    <a href="https://sfashanto.netlify.app/" target="_blank"><b style="color: #ffbd39;"> SFA
                            Shanto</b></a>
                </p>
                <div class="footer-policy">
                    <a href="#">গোপনীয়তা নীতি</a>
                    <a href="#">শর্তাবলী</a>
                </div>
            </div>
        </footer>
    </main>

    <!-- Scroll reveal script -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const reveals = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-up');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, {
            threshold: 0.1
        });

        reveals.forEach(el => revealObserver.observe(el));
    });

    function revealOnScroll() {
        const reveals = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-up');
        for (let i = 0; i < reveals.length; i++) {
            let windowHeight = window.innerHeight;
            let elementTop = reveals[i].getBoundingClientRect().top;
            let elementVisible = 100;
            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            }
        }
    }
    window.addEventListener("scroll", revealOnScroll);
    window.addEventListener("load", revealOnScroll);
    </script>
</body>

</html>