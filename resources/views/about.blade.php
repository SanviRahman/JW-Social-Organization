<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ঝাউগড়া কল্যাণ সংগঠন - বিস্তারিত</title>
    <!-- Google Fonts for Bengali -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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

    ul {
        list-style: none;
        padding: 0;
        margin-top: 15px;
    }

    li {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        color: #d1d5db;
    }

    /* ===== Section Headers (Matched with home design) ===== */
    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .section-subtitle-tag {
        display: inline-block;
        background: rgba(16, 185, 129, 0.1);
        color: #10b981;
        padding: 8px 20px;
        border-radius: 40px;
        font-size: 1rem;
        font-weight: 600;
        border: 1px solid rgba(16, 185, 129, 0.3);
        margin-bottom: 20px;
    }

    .section-main-title {
        font-size: clamp(2rem, 5vw, 3rem);
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 20px;
        position: relative;
        display: inline-block;
    }

    .section-main-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #f59e0b;
        border-radius: 2px;
    }

    .section-description {
        font-size: 1.2rem;
        color: #cbd5e1;
        max-width: 600px;
        margin: 25px auto 0;
    }

    /* ===== Backgrounds ===== */
    .section-dark {
        background: #111827;
    }

    .section-darker {
        background: #0f172a;
    }

    /* ===== Layout Grids ===== */
    .grid-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    .grid-3 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-top: 50px;
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

    /* ===== Image Box ===== */
    .image-box {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: transform 0.3s, border-color 0.3s;
    }

    .image-box:hover {
        border-color: #10b981;
        transform: translateY(-5px);
    }

    .image-box img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.5s;
    }

    .image-box:hover img {
        transform: scale(1.02);
    }

    /* ===== Founder Details ===== */
    .founder-name {
        font-size: 2.2rem;
        background: linear-gradient(135deg, #fff, #10b981);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 10px;
    }

    .founder-title {
        color: #f59e0b;
        font-size: 1.2rem;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .founder-bio p {
        margin-bottom: 15px;
    }

    .achievement-list h4 {
        color: #10b981;
        margin: 25px 0 15px;
        font-size: 1.2rem;
    }

    .achievement-list i {
        color: #f59e0b;
        font-size: 1.2rem;
    }

    /* ===== Cards ===== */
    .card {
        background: #1f2937;
        padding: 40px;
        border-radius: 20px;
        transition: all 0.4s ease;
        border: 1px solid rgba(255, 255, 255, 0.05);
        box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.5);
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .card:hover {
        transform: translateY(-10px);
        border-color: #10b981;
        box-shadow: 0 30px 60px -12px rgba(16, 185, 129, 0.15);
    }

    .card-icon {
        width: 70px;
        height: 70px;
        background: rgba(16, 185, 129, 0.1);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
        font-size: 2rem;
        color: #10b981;
        transition: all 0.4s;
    }

    .card:hover .card-icon {
        background: #10b981;
        color: white;
        transform: rotate(5deg) scale(1.1);
    }

    /* Mission/Vision specific */
    .mission-card h3,
    .vision-card h3 {
        font-size: 1.8rem;
        margin-bottom: 20px;
    }

    .mission-points i,
    .vision-points i {
        color: #10b981;
    }

    /* Volunteer cards */
    .volunteer-card {
        text-align: center;
        padding: 30px 20px;
    }

    .volunteer-icon {
        border-radius: 50%;
        width: 80px;
        height: 80px;
        margin: 0 auto 20px;
        font-size: 2rem;
    }

    .volunteer-card h4 {
        font-size: 1.3rem;
        margin-bottom: 10px;
    }

    .volunteer-card p {
        font-size: 0.95rem;
    }

    /* ===== Buttons ===== */
    .btn {
        display: inline-block;
        padding: 14px 40px;
        border-radius: 50px;
        font-size: 1rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        cursor: pointer;
        border: none;
    }

    .btn-primary {
        background: linear-gradient(135deg, #10b981, #f59e0b);
        color: #fff;
        box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4);
    }

    .btn-secondary {
        background: transparent;
        color: #fff;
        border: 2px solid #10b981;
    }

    .btn-secondary:hover {
        background: #10b981;
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
    }

    /* ===== CTA Section ===== */
    .cta-section {
        background: linear-gradient(135deg, #0a0c14, #1a1a1a);
        text-align: center;
        padding: 100px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    .cta-content h2 {
        font-size: clamp(2rem, 5vw, 3rem);
        margin-bottom: 20px;
    }

    .cta-content p {
        font-size: 1.2rem;
        margin-bottom: 30px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    /* ===== Utility ===== */
    .center {
        text-align: center;
    }

    .mt-50 {
        margin-top: 50px;
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

    /* Delays */
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
    @media (max-width: 1199px) {
        .container {
            max-width: 960px;
        }
    }

    @media (max-width: 991px) {
        .grid-2 {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .image-box {
            max-width: 500px;
            margin: 0 auto;
        }

        .achievement-list ul {
            display: inline-block;
            text-align: left;
        }

        .grid-3 {
            grid-template-columns: repeat(2, 1fr);
        }

        .section-main-title {
            font-size: 2.5rem;
        }
    }

    @media (max-width: 767px) {
        section {
            padding: 70px 0;
        }

        .grid-3 {
            grid-template-columns: 1fr;
        }

        .card {
            padding: 30px;
        }

        .page-title {
            font-size: 2rem;
        }

        .founder-name {
            font-size: 1.8rem;
        }

        .cta-content h2 {
            font-size: 2rem;
        }
    }

    @media (max-width: 480px) {
        .card {
            padding: 25px;
        }

        .btn {
            padding: 12px 30px;
            font-size: 0.95rem;
        }

        .section-main-title {
            font-size: 1.8rem;
        }

        .founder-name {
            font-size: 1.5rem;
        }

        .founder-title {
            font-size: 1rem;
        }
    }

    /* ================= FOOTER ================= */
    .reveal {
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.8s ease;
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

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

    /* Social */
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

    /* Newsletter */
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

    /* Bottom */
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

    /* Scroll Reveal Animation */
    .reveal {
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.8s ease;
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    /* Responsive */
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
    </style>

</head>

<body>
    <!-- Main Content -->
    <main>
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <h1 class="page-title reveal">আমাদের সম্পর্কে বিস্তারিত</h1>
                <div class="breadcrumb reveal delay-1">
                    <a href="{{ url('/') }}">হোম ফিরে যান</a> / <span>বিস্তারিত</span>
                </div>
            </div>
        </section>

        <!-- Founder & President - Extended -->
        <section class="section-dark">
            <div class="container">
                <div class="section-header">
                    <span class="section-subtitle-tag">প্রতিষ্ঠাতা ও সভাপতি</span>
                    <pre></pre>
                    <h2 class="section-main-title">শেখ ফরিদ আহমেদ শান্ত</h2>
                    <p class="section-description">সংগঠনের প্রতিষ্ঠাতা ও অনুপ্রেরণার উৎস</p>
                </div>

                <div class="grid-2">
                    <!-- Left Column - Image -->
                    <div class="image-box reveal-left">
                        <img src="https://scontent.fdac7-1.fna.fbcdn.net/v/t39.30808-6/561659522_3695781134051775_8011078114531792308_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=1d70fc&_nc_eui2=AeGYC4gW1qbwgKfqDICD1r1MaeCP85FCpQBp4I_zkUKlAIu0DnP9rHy2DHyttjVTuO6SDNkPbGYywrLmWdxpks4n&_nc_ohc=3eg5nxRfRQEQ7kNvwHefF49&_nc_oc=AdkjqK_fHa3NkIAcI5oNzPkYrbjccRk6mByxh6GYTa8uA9cjarqYgHvNgmdgJMLQ5Hk&_nc_zt=23&_nc_ht=scontent.fdac7-1.fna&_nc_gid=4pF3YU73CzGC4rR4cyNPfw&_nc_ss=8&oh=00_AfuicoI9EDNRauFgCNK665hkSYXYsue4OFZXwz2E4YWgDA&oe=69A83C37"
                            alt="শেখ ফরিদ আহমেদ শান্ত" class="founder-img">
                    </div>

                    <!-- Right Column - Details -->
                    <div class="content-box reveal-right">
                        <h2 class="founder-name">শেখ ফরিদ আহমেদ শান্ত</h2>
                        <h4 class="founder-title">প্রতিষ্ঠাতা ও সভাপতি, ঝাউগড়া কল্যাণ সংগঠন</h4>

                        <div class="founder-bio" style="text-align: justify;">
                            <p>
                                শেখ ফরিদ আহমেদ শান্ত একজন সমাজসেবক, উদ্যোক্তা এবং মানবাধিকার কর্মী। ২০১৭ সালে তিনি
                                ঝাউগড়া কল্যাণ সংগঠন প্রতিষ্ঠা করেন যার মূল লক্ষ্য ছিল সমাজের সুবিধাবঞ্চিত মানুষের
                                জীবনমান উন্নয়ন। তার নেতৃত্বে সংগঠনটি শিক্ষা, স্বাস্থ্য, নারী উন্নয়ন ও পরিবেশ সুরক্ষায়
                                গুরুত্বপূর্ণ ভূমিকা রাখছে।
                            </p>
                            <p>
                                তিনি বিশ্বাস করেন, "প্রত্যেক মানুষের মাঝেই পরিবর্তন আনার ক্ষমতা আছে, শুধু প্রয়োজন সঠিক
                                দিকনির্দেশনা ও সহযোগিতা।" তার এই দর্শনই সংগঠনের কার্যক্রমের মূল চালিকাশক্তি।
                            </p>
                            <p>
                                তিনি ড্যাফোডিল ইন্টারন্যাশনাল ইউনিভার্সিটি থেকে কম্পিউটার সায়েন্স অ্যান্ড
                                ইঞ্জিনিয়ারিং-এ
                                স্নাতক ডিগ্রি অর্জন করেছেন এবং পেশাগত জীবনে একজন সফটওয়্যার ইঞ্জিনিয়ার হিসেবে কাজ
                                করছেন।
                                তার সমাজসেবামূলক কর্মকাণ্ডের স্বীকৃতিস্বরূপ তিনি বেশ কয়েকটি পুরস্কার ও সম্মাননায় ভূষিত
                                হয়েছেন।
                            </p>
                        </div>

                        <div class="achievement-list">
                            <h4>অর্জন ও স্বীকৃতি</h4>
                            <ul>
                                <li><i class="fas fa-trophy"></i> জাতীয় যুব পুরস্কার ২০২২</li>
                                <li><i class="fas fa-trophy"></i> সমাজসেবায় বিশেষ অবদান - জামালপুর জেলা প্রশাসক
                                    পুরস্কার</li>
                                <li><i class="fas fa-trophy"></i> শিক্ষা বৃত্তি প্রদান কর্মসূচির জন্য আইডিয়াল
                                    অ্যাওয়ার্ড</li>
                                <li><i class="fas fa-trophy"></i> পরিবেশ বন্ধু পুরস্কার ২০২৩</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Vision - Extended -->
        <section class="section-darker">
            <div class="container">
                <div class="section-header">
                    <span class="section-subtitle-tag">আমাদের লক্ষ্য</span>
                    <pre></pre>
                    <h2 class="section-main-title">মিশন ও ভিশন</h2>
                    <p class="section-description">আমরা যা করতে চাই এবং কেন করতে চাই</p>
                </div>

                <div class="grid-2 mission-vision-grid">
                    <!-- Mission Card -->
                    <div class="card mission-card reveal-up">
                        <div class="card-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>আমাদের মিশন</h3>
                        <p style="text-align: justify;">
                            দরিদ্র ও অসহায় মানুষের মৌলিক চাহিদা পূরণ এবং তাদের স্বাবলম্বী করে গড়ে তোলার মাধ্যমে একটি
                            বৈষম্যহীন সমাজ প্রতিষ্ঠা করা। আমরা বিশ্বাস করি, প্রতিটি মানুষেরই উন্নয়নের সমান সুযোগ পাওয়া
                            উচিত।
                        </p>
                        <ul class="mission-points">
                            <li><i class="fas fa-check-circle"></i> শিক্ষার আলো পৌঁছে দেওয়া সুবিধাবঞ্চিত শিশুদের মাঝে
                            </li>
                            <li><i class="fas fa-check-circle"></i> বিনামূল্যে স্বাস্থ্যসেবা ও চিকিৎসা সহায়তা প্রদান
                            </li>
                            <li><i class="fas fa-check-circle"></i> নারী ও যুবকদের দক্ষতা উন্নয়ন ও কর্মসংস্থান সৃষ্টি
                            </li>
                            <li><i class="fas fa-check-circle"></i> দুর্যোগকালীন ত্রাণ ও পুনর্বাসন কার্যক্রম পরিচালনা
                            </li>
                        </ul>
                    </div>

                    <!-- Vision Card -->
                    <div class="card vision-card reveal-up delay-2">
                        <div class="card-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>আমাদের ভিশন</h3>
                        <p style="text-align: justify;">
                            এমন একটি সমাজ গড়ে তোলা যেখানে প্রতিটি মানুষ শিক্ষা, স্বাস্থ্য ও অর্থনৈতিক নিরাপত্তার
                            নিশ্চয়তা পাবে
                            এবং সম্মানের সাথে বাঁচবে। আমরা একটি বাংলাদেশের স্বপ্ন দেখি যেখানে:
                        </p>
                        <ul class="vision-points">
                            <li><i class="fas fa-check-circle"></i> কোনো শিশুই ক্ষুধার্ত থাকবে না</li>
                            <li><i class="fas fa-check-circle"></i> প্রতিটি নারী আত্মনির্ভরশীল হবে</li>
                            <li><i class="fas fa-check-circle"></i> পরিবেশ সুরক্ষিত থাকবে</li>
                            <li><i class="fas fa-check-circle"></i> অসহায় মানুষের পাশে সবাই দাঁড়াবে</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Volunteering Benefits - 7 Points -->
        <section class="section-dark">
            <div class="container">
                <div class="section-header">
                    <span class="section-subtitle-tag">স্বেচ্ছাসেবক হোন</span>
                    <pre></pre>
                    <h2 class="section-main-title">আমাদের সাথে যুক্ত হোন</h2>
                    <p class="section-description">আপনার সময় ও মেধা দিয়ে সমাজ বদলের অংশীদার হোন</p>
                </div>

                <div class="grid-3 volunteer-grid">
                    <!-- 1 -->
                    <div class="card volunteer-card reveal-up">
                        <div class="card-icon volunteer-icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h4>মানবসেবার সুযোগ</h4>
                        <p>আপনার হাতের ছোঁয়ায় কোনো অসহায়ের মুখে হাসি ফুটবে। সরাসরি মানুষের পাশে দাঁড়ানোর অভিজ্ঞতা নিন।
                        </p>
                    </div>
                    <!-- 2 -->
                    <div class="card volunteer-card reveal-up delay-1">
                        <div class="card-icon volunteer-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>সামাজিক নেটওয়ার্কিং</h4>
                        <p>সমাজের বিভিন্ন স্তরের মানুষের সাথে পরিচিত হওয়ার সুযোগ। নতুন বন্ধু ও সহকর্মী তৈরি করুন।</p>
                    </div>
                    <!-- 3 -->
                    <div class="card volunteer-card reveal-up delay-2">
                        <div class="card-icon volunteer-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>নেতৃত্বের দক্ষতা উন্নয়ন</h4>
                        <p>বিভিন্ন প্রকল্প ও কার্যক্রম পরিচালনার মাধ্যমে আপনার নেতৃত্বের গুণাবলী বিকশিত হবে।</p>
                    </div>
                    <!-- 4 -->
                    <div class="card volunteer-card reveal-up">
                        <div class="card-icon volunteer-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4>সার্টিফিকেট ও স্বীকৃতি</h4>
                        <p>আপনার স্বেচ্ছাসেবী কাজের স্বীকৃতি হিসেবে সনদ ও সম্মাননা প্রদান করা হয়।</p>
                    </div>
                    <!-- 5 -->
                    <div class="card volunteer-card reveal-up delay-1">
                        <div class="card-icon volunteer-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h4>মানসিক প্রশান্তি</h4>
                        <p>অপরের জন্য ভালো কিছু করার মাধ্যমে মনে শান্তি ও তৃপ্তি লাভ করুন।</p>
                    </div>
                    <!-- 6 -->
                    <div class="card volunteer-card reveal-up delay-2">
                        <div class="card-icon volunteer-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h4>পেশাগত দক্ষতা অর্জন</h4>
                        <p>বাস্তব জীবনের কাজের অভিজ্ঞতা আপনার ক্যারিয়ারে যোগ করে নতুন মাত্রা।</p>
                    </div>
                    <!-- 7 -->
                    <div class="card volunteer-card reveal-up delay-3">
                        <div class="card-icon volunteer-icon">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <h4>সমাজ পরিবর্তনের অংশীদার</h4>
                        <p>আপনার কাজ সরাসরি সমাজে ইতিবাচক প্রভাব ফেলবে। পরিবর্তনের সাক্ষী হোন।</p>
                    </div>
                     <!-- 8 -->
                    <div class="card volunteer-card reveal-up">
                        <div class="card-icon volunteer-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4>সার্টিফিকেট ও স্বীকৃতি</h4>
                        <p>আপনার স্বেচ্ছাসেবী কাজের স্বীকৃতি হিসেবে সনদ ও সম্মাননা প্রদান করা হয়।</p>
                    </div>
                    <!-- 9 -->
                    <div class="card volunteer-card reveal-up delay-1">
                        <div class="card-icon volunteer-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h4>মানসিক প্রশান্তি</h4>
                        <p>অপরের জন্য ভালো কিছু করার মাধ্যমে মনে শান্তি ও তৃপ্তি লাভ করুন।</p>
                    </div>
                </div>

                <div class="center mt-50">
                    <a href="{{ url('/') }}#স্বেচ্ছাসেবক-হন" class="btn btn-primary">এখনই স্বেচ্ছাসেবক হোন</a>
                </div>
            </div>
        </section>



        <!-- Call to Action -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2 class="reveal-up">আপনিও হতে পারেন পরিবর্তনের অংশ</h2>
                    <p class="reveal-up delay-1">আজই আমাদের সাথে যুক্ত হোন এবং সমাজ গঠনে ভূমিকা রাখুন</p>
                    <a href="{{ url('/') }}#যোগাযোগ" class="btn btn-secondary reveal-up delay-2">যোগাযোগ করুন</a>
                </div>
            </div>
        </section>

        <!-- footer -->
        <footer class="footer">
            <div class="footer-container">
                <!-- Column 1 -->
                <div class="footer-col reveal">
                    <h3>ঝাউগড়া কল্যাণ সংগঠন</h3>
                    <p>আমরা সমাজের উন্নয়ন এবং সেবার কাজে নিয়োজিত একটি সংগঠন।</p>

                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="footer-col reveal">
                    <h4>দ্রুত লিংক</h4>
                    <ul>
                        <li><a href="#হোম">হোম</a></li>
                        <li><a href="#আমাদের-সম্পর্কে">আমাদের সম্পর্কে</a></li>
                        <li><a href="#কার্যক্রম">কার্যক্রম</a></li>
                        <li><a href="#ইভেন্ট">ইভেন্ট</a></li>
                        <li><a href="#গ্যালারি">গ্যালারি</a></li>
                        <li><a href="#ব্লগ">ব্লগ</a></li>
                        <li><a href="#যোগাযোগ">যোগাযোগ</a></li>
                    </ul>
                </div>

                <!-- Column 3 -->
                <div class="footer-col reveal">
                    <h4>যোগাযোগ</h4>
                    <p><i class="fas fa-envelope"></i> sheikh15-3700@diu.edu.bd</p>
                    <p><i class="fas fa-phone"></i> +8801706940942</p>
                    <p><i class="fas fa-map-marker-alt"></i> ঝাউগড়া কল্যাণ সংগঠন,জামালপুর, বাংলাদেশ</p>
                </div>

                <!-- Column 4 -->
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
    <!-- footer JS -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {

        const reveals = document.querySelectorAll('.reveal');

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, {
            threshold: 0.1
        });

        reveals.forEach(el => {
            revealObserver.observe(el);
        });

    });
    </script>
    <!-- about js -->
    <script>
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