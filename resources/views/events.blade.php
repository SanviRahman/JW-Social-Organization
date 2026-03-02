<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>সকল ইভেন্ট | ঝাউগড়া কল্যাণ সংগঠন</title>
    <!-- Google Fonts for Bengali -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Modal CSS (শুধু প্রয়োজন হলেই লোড হবে) -->
    @if(session('success') || session('error') || $errors->any())
    <style>
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        backdrop-filter: blur(5px);
        z-index: 9998;
        animation: fadeIn 0.3s ease;
    }

    .custom-modal {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: linear-gradient(135deg, #1f2937, #111827);
        padding: 0;
        border-radius: 20px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        z-index: 9999;
        width: 90%;
        max-width: 400px;
        animation: slideUp 0.4s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .modal-header-custom {
        padding: 20px 25px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-radius: 20px 20px 0 0;
    }

    .modal-header-custom h5 {
        margin: 0;
        font-size: 1.3rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .modal-header-custom h5 i {
        font-size: 1.5rem;
    }

    .close-btn-custom {
        background: rgba(255, 255, 255, 0.1);
        border: none;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        color: white;
        font-size: 1.2rem;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .close-btn-custom:hover {
        background: #ef4444;
        transform: rotate(90deg);
        border-color: transparent;
    }

    .modal-body-custom {
        padding: 30px 25px;
        text-align: center;
    }

    .modal-body-custom p {
        color: #d1d5db;
        font-size: 1.2rem;
        line-height: 1.6;
        margin: 0;
    }

    .icon-circle {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 2.5rem;
        animation: pulse 2s infinite;
    }

    .modal-footer-custom {
        padding: 20px 25px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        justify-content: center;
    }

    .modal-btn-custom {
        color: white;
        border: none;
        padding: 12px 35px;
        border-radius: 40px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .modal-btn-custom i {
        font-size: 0.9rem;
        transition: transform 0.3s ease;
    }

    .modal-btn-custom:hover i {
        transform: translateX(5px);
    }

    /* সাকসেস মডেল */
    .success-modal .modal-header-custom {
        background: rgba(16, 185, 129, 0.1);
    }

    .success-modal .modal-header-custom h5 {
        color: #10b981;
    }

    .success-modal .icon-circle {
        background: rgba(16, 185, 129, 0.2);
        color: #10b981;
    }

    .success-modal .modal-btn-custom {
        background: linear-gradient(135deg, #10b981, #059669);
    }

    .success-modal .modal-btn-custom:hover {
        box-shadow: 0 10px 25px -5px rgba(16, 185, 129, 0.5);
    }

    /* এরর মডেল (সেশন এরর ও ভ্যালিডেশন এরর) */
    .error-modal .modal-header-custom {
        background: rgba(239, 68, 68, 0.1);
    }

    .error-modal .modal-header-custom h5 {
        color: #ef4444;
    }

    .error-modal .icon-circle {
        background: rgba(239, 68, 68, 0.2);
        color: #ef4444;
    }

    .error-modal .modal-btn-custom {
        background: linear-gradient(135deg, #ef4444, #b91c1c);
    }

    .error-modal .modal-btn-custom:hover {
        box-shadow: 0 10px 25px -5px rgba(239, 68, 68, 0.5);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translate(-50%, -30%);
        }

        to {
            opacity: 1;
            transform: translate(-50%, -50%);
        }
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 currentColor;
        }

        70% {
            box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
        }
    }

    @media (max-width: 480px) {
        .custom-modal {
            width: 95%;
        }

        .modal-header-custom h5 {
            font-size: 1.1rem;
        }

        .modal-body-custom p {
            font-size: 1rem;
        }

        .icon-circle {
            width: 60px;
            height: 60px;
            font-size: 2rem;
        }
    }
    </style>

    <!-- ========== সাকসেস মডেল ========== -->
    @if(session('success'))
    <div id="successModal" style="display: none;">
        <div class="modal-overlay" onclick="closeModal('successModal')"></div>
        <div class="custom-modal success-modal">
            <div class="modal-header-custom">
                <h5><i class="fas fa-check-circle"></i> সফল হয়েছে!</h5>
                <button class="close-btn-custom" onclick="closeModal('successModal')"><i
                        class="fas fa-times"></i></button>
            </div>
            <div class="modal-body-custom">
                <div class="icon-circle"><i class="fas fa-check-circle"></i></div>
                <p>{{ session('success') }}</p>
            </div>
            <div class="modal-footer-custom">
                <button class="modal-btn-custom" onclick="closeModal('successModal')">ঠিক আছে <i
                        class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
    @endif

    <!-- ========== সেশন এরর মডেল (যখন কন্ট্রোলার থেকে with('error', '...') পাঠানো হয়) ========== -->
    @if(session('error'))
    <div id="sessionErrorModal" style="display: none;">
        <div class="modal-overlay" onclick="closeModal('sessionErrorModal')"></div>
        <div class="custom-modal error-modal">
            <div class="modal-header-custom">
                <h5><i class="fas fa-exclamation-triangle"></i> ত্রুটি!</h5>
                <button class="close-btn-custom" onclick="closeModal('sessionErrorModal')"><i
                        class="fas fa-times"></i></button>
            </div>
            <div class="modal-body-custom">
                <div class="icon-circle"><i class="fas fa-exclamation-triangle"></i></div>
                <p>{{ session('error') }}</p>
            </div>
            <div class="modal-footer-custom">
                <button class="modal-btn-custom" onclick="closeModal('sessionErrorModal')">ঠিক আছে <i
                        class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
    @endif

    <!-- ========== ভ্যালিডেশন এরর মডেল (যখন ফর্ম ভ্যালিডেশন ফেল করে) ========== -->
    @if($errors->any())
    <div id="validationErrorModal" style="display: none;">
        <div class="modal-overlay" onclick="closeModal('validationErrorModal')"></div>
        <div class="custom-modal error-modal">
            <div class="modal-header-custom">
                <h5><i class="fas fa-exclamation-triangle"></i> ত্রুটি!</h5>
                <button class="close-btn-custom" onclick="closeModal('validationErrorModal')"><i
                        class="fas fa-times"></i></button>
            </div>
            <div class="modal-body-custom">
                <div class="icon-circle"><i class="fas fa-exclamation-triangle"></i></div>
                <div style="text-align: left; color: #d1d5db;">
                    <ul style="margin: 0; padding-left: 20px;">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="modal-footer-custom">
                <button class="modal-btn-custom" onclick="closeModal('validationErrorModal')">ঠিক আছে <i
                        class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
    @endif

    <!-- ========== জাভাস্ক্রিপ্ট ========== -->
    <script>
    function showModal(modalId) {
        var modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }
    }

    function closeModal(modalId) {
        var modal = document.getElementById(modalId);
        if (modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    }

    window.onload = function() {
        @if(session('success'))
        showModal('successModal');
        @elseif(session('error'))
        showModal('sessionErrorModal');
        @elseif($errors->any())
        showModal('validationErrorModal');
        @endif
    };

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            @if(session('success'))
            closeModal('successModal');
            @elseif(session('error'))
            closeModal('sessionErrorModal');
            @elseif($errors->any())
            closeModal('validationErrorModal');
            @endif
        }
    });
    </script>
    @endif
    <style>
    /* ===== Global Styles (same as about.blade.php) ===== */
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

    /* ===== Section Headers ===== */
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

    /* ===== Event Card Styles ===== */
    .events-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-top: 50px;
        cursor: pointer;
    }

    .event-card {
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

    .event-card:hover {
        transform: translateY(-10px);
        border-color: #10b981;
        box-shadow: 0 30px 60px -12px rgba(16, 185, 129, 0.15);
    }

    .event-image {
        position: relative;
        height: 220px;
        overflow: hidden;
    }

    .event-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s;
    }

    .event-card:hover .event-image img {
        transform: scale(1.05);
    }

    /* ----- New overlay on hover ----- */
    .event-image .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 20px;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 2;
    }

    .event-card:hover .event-image .overlay {
        opacity: 1;
    }

    .overlay-title {
        color: #fff;
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 5px;
        transform: translateY(10px);
        transition: transform 0.3s ease;
    }

    .overlay-date {
        color: #f59e0b;
        font-size: 0.9rem;
        transform: translateY(10px);
        transition: transform 0.3s ease 0.1s;
    }

    .event-card:hover .overlay-title,
    .event-card:hover .overlay-date {
        transform: translateY(0);
    }

    /* --------------------------------- */

    .event-date-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: #f59e0b;
        color: #0b0f19;
        font-weight: 700;
        padding: 8px 15px;
        border-radius: 40px;
        font-size: 0.9rem;
        box-shadow: 0 5px 15px rgba(245, 158, 11, 0.3);
        z-index: 3;
        /* above overlay */
    }

    .event-content {
        padding: 25px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .event-title {
        font-size: 1.4rem;
        margin-bottom: 12px;
        color: #ffffff;
        line-height: 1.4;
    }

    .event-description {
        color: #cbd5e1;
        font-size: 0.95rem;
        margin-bottom: 20px;
        flex: 1;
    }

    .event-meta {
        display: flex;
        gap: 20px;
        margin-bottom: 20px;
        font-size: 0.9rem;
        color: #9ca3af;
    }

    .event-meta i {
        color: #10b981;
        margin-right: 5px;
    }

    .event-btn {
        display: inline-block;
        padding: 12px 30px;
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
    }

    .event-btn:hover {
        background: #10b981;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
    }

    /* ===== Pagination ===== */
    .pagination {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 60px;
    }

    .page-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        background: #1f2937;
        border-radius: 50%;
        color: #e5e7eb;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .page-link:hover,
    .page-link.active {
        background: #10b981;
        color: #0b0f19;
        border-color: #10b981;
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
        .events-grid {
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

        .events-grid {
            grid-template-columns: 1fr;
        }

        .page-title {
            font-size: 2rem;
        }

        .event-image {
            height: 200px;
        }
    }

    @media (max-width: 480px) {
        .section-main-title {
            font-size: 1.8rem;
        }

        .event-title {
            font-size: 1.2rem;
        }

        .event-btn {
            padding: 10px 25px;
            font-size: 0.9rem;
        }
    }

    /* ===== Footer (exactly as in about.blade.php) ===== */
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

    /* ===== Pagination ===== */
    .pagination {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 60px;
    }

    .pagination .page-item .page-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        background: #1f2937;
        border-radius: 50%;
        color: #e5e7eb;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .pagination .page-item .page-link:hover {
        background: #10b981;
        color: #0b0f19;
        border-color: #10b981;
    }

    .pagination .page-item.active .page-link {
        background: #10b981;
        color: #0b0f19;
        border-color: #10b981;
    }

    .pagination .page-item.disabled .page-link {
        background: #1f2937;
        color: #6c757d;
        border-color: rgba(255, 255, 255, 0.05);
        pointer-events: none;
    }
    </style>
</head>

<body>
    <main>
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <h1 class="page-title reveal">সকল ইভেন্ট</h1>
                <div class="breadcrumb reveal delay-1">
                    <a href="{{ url('/') }}">হোম</a> / <span>ইভেন্ট সমূহ</span>
                </div>
            </div>
        </section>

        <!-- All Events Grid -->
        <section class="section-dark">
            <div class="container">
                <div class="section-header">
                    <span class="section-subtitle-tag">আমাদের আয়োজন</span>
                    <pre></pre>
                    <h2 class="section-main-title">সকল ইভেন্ট</h2>
                    <p class="section-description">আমাদের সকল বর্তমান ও আসন্ন ইভেন্টের তালিকা</p>
                </div>

                <!-- ইভেন্ট গ্রিড শুরু -->
                <div class="events-grid">
                    @foreach($events as $event)
                    <div class="event-card reveal-up">
                        <div class="event-image">
                            <img src="{{ asset($event->image) }}" alt="{{ $event->title }}">
                            <div class="overlay">
                                <h4 class="overlay-title">{{ $event->title }}</h4>
                                <span
                                    class="overlay-date">{{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3 class="event-title">{{ $event->title }}</h3>
                            <p class="event-description">{{ $event->description }}</p>
                            <div class="event-meta">
                                <span><i class="far fa-clock"></i>
                                    {{ \Carbon\Carbon::parse($event->event_time)->format('h:i A') }}</span>
                                <span><i class="fas fa-map-marker-alt"></i> {{ $event->location }}</span>
                            </div>
                            <a href="{{ route('event.details', $event->id) }}" class="event-btn">বিস্তারিত</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- ইভেন্ট গ্রিড শেষ -->

                <!-- প্যাজিনেশন -->
                <div class="pagination">
                    {{ $events->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </section>
        <!-- Footer (exactly as in about.blade.php) -->
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
                        <li><a href="{{ url('/') }}#আমাদের-সম্পর্কে">আমাদের সম্পর্কে</a></li>
                        <li><a href="{{ url('/') }}#কার্যক্রম">কার্যক্রম</a></li>
                        <li><a href="{{ url('/') }}#ইভেন্ট">ইভেন্ট</a></li>
                        <li><a href="{{ url('/') }}#গ্যালারি">গ্যালারি</a></li>
                        <li><a href="{{ url('/') }}#ব্লগ">ব্লগ</a></li>
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
                <form action="{{ route('newsletter.subscribe') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="আপনার ইমেইল" required>
                    <button type="submit">সাবস্ক্রাইব</button>
                </form>
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

    <!-- Scroll reveal scripts (same as about.blade.php) -->
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