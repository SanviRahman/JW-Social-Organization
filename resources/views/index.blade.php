@extends('home.layout')

@section('title', 'ঝাউগড়া কল্যাণ সংগঠন - হোম')


@section('content')
<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span class="established-badge">প্রতিষ্ঠিত ২০১৭</span>
            <h1 class="hero-title">ঝাউগড়া কল্যাণ সংগঠন</h1>
            <p class="hero-tagline">"ঐক্যই আমাদের শক্তি, উন্নয়নই আমাদের লক্ষ্য"</p>
            <div class="hero-btns">
                <button class="btn btn-primary">আমাদের কাজ জানুন</button>
                <button class="btn btn-secondary">সহায়তা করুন</button>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon"><i class="far fa-clock"></i></div>
                    <h2 class="stat-number" data-target="2017">০</h2>
                    <p class="stat-label">প্রতিষ্ঠিত</p>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fas fa-users"></i></div>
                    <h2 class="stat-number" data-target="500">০</h2>
                    <p class="stat-label">সদস্য</p>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fas fa-project-diagram"></i></div>
                    <h2 class="stat-number" data-target="25">০</h2>
                    <p class="stat-label">প্রকল্প</p>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fas fa-home"></i></div>
                    <h2 class="stat-number" data-target="1000">০</h2>
                    <p class="stat-label">উপকৃত পরিবার</p>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section (3rd Section) -->
    <section class="about-section" id="আমাদের সম্পর্কে">
        <div class="container about-grid">
            <div class="about-content reveal-left">
                <span class="section-tag">আমাদের সম্পর্কে</span>
                <h2 class="about-title">মানবতার সেবায় <br> <span>নিবেদিত প্রাণ</span></h2>
                <p class="about-desc">
                    ঝাউগড়া কল্যাণ সংগঠন একটি অলাভজনক সামাজিক সংগঠন যা ২০১৭ সাল থেকে সমাজের সুবিধাবঞ্চিত মানুষের জীবনমান
                    উন্নয়নে কাজ করে যাচ্ছে। আমাদের মূল লক্ষ্য হলো একটি শিক্ষিত, স্বাস্থ্যসম্মত এবং স্বাবলম্বী সমাজ গড়ে
                    তোলা।
                </p>
                <p class="about-desc">
                    আমরা বিশ্বাস করি, সম্মিলিত প্রচেষ্টায় যেকোনো অসাধ্য সাধন করা সম্ভব। আমাদের স্বেচ্ছাসেবকদের অক্লান্ত
                    পরিশ্রম এবং দাতাদের উদার সহযোগিতায় আমরা এগিয়ে চলেছি।
                </p>

                <div class="founder-card">
                    <div class="founder-img">
                        <img src="https://img.freepik.com/free-photo/portrait-white-man-isolated_53876-40306.jpg"
                            alt="Founder">
                    </div>
                    <div class="founder-info">
                        <h4>মোঃ রফিকুল ইসলাম</h4>
                        <p>প্রতিষ্ঠাতা ও সভাপতি</p>
                    </div>
                </div>

                <a href="#" class="learn-more-btn">আরও জানুন <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="mission-vision reveal-right">
                <div class="info-card mission-card">
                    <div class="info-icon"><i class="fas fa-globe"></i></div>
                    <h3>আমাদের মিশন</h3>
                    <p>দরিদ্র ও অসহায় মানুষের মৌলিক চাহিদা পূরণ এবং তাদের স্বাবলম্বী করে গড়ে তোলার মাধ্যমে একটি
                        বৈষম্যহীন সমাজ প্রতিষ্ঠা করা।</p>
                </div>
                <div class="info-card vision-card">
                    <div class="info-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>আমাদের ভিশন</h3>
                    <p>এমন একটি সমাজ যেখানে প্রতিটি মানুষ শিক্ষা, স্বাস্থ্য ও অর্থনৈতিক নিরাপত্তার নিশ্চয়তা পাবে এবং
                        সম্মানের সাথে বাঁচবে।</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Activities Section (4th Section) -->
    <section class="activities-section" id="কার্যক্রম">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">আমাদের কার্যক্রম</h2>
                <p class="section-subtitle">সমাজের উন্নয়নে আমাদের নিরলস প্রচেষ্টা</p>
                <div class="title-underline"></div>
            </div>

            <div class="activities-slider-container">
                <div class="activities-slider">
                    <!-- Card 1: Education -->
                    <div class="activity-card">
                        <div class="card-img">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Education">
                            <span class="card-tag tag-education">Education</span>
                        </div>
                        <div class="card-body">
                            <h3>শিক্ষা সহায়তা কর্মসূচি</h3>
                            <p>দরিদ্র শিক্ষার্থীদের শিক্ষা উপকরণ বিতরণ।</p>
                            <a href="#" class="card-link">বিস্তারিত <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 2: Health -->
                    <div class="activity-card">
                        <div class="card-img">
                            <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Health">
                            <span class="card-tag tag-health">Health</span>
                        </div>
                        <div class="card-body">
                            <h3>বিনামূল্যে স্বাস্থ্য ক্যাম্প</h3>
                            <p>বিনামূল্যে চিকিৎসা সেবা ও ঔষধ প্রদান।</p>
                            <a href="#" class="card-link">বিস্তারিত <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 3: Empowerment -->
                    <div class="activity-card">
                        <div class="card-img">
                            <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Empowerment">
                            <span class="card-tag tag-empowerment">Empowerment</span>
                        </div>
                        <div class="card-body">
                            <h3>নারী স্বাবলম্বীকরণ</h3>
                            <p>নারীদের দক্ষতা উন্নয়ন ও কর্মসংস্থান।</p>
                            <a href="#" class="card-link">বিস্তারিত <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 4: Environment -->
                    <div class="activity-card">
                        <div class="card-img">
                            <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Environment">
                            <span class="card-tag tag-environment">Environment</span>
                        </div>
                        <div class="card-body">
                            <h3>পরিবেশ সুরক্ষা</h3>
                            <p>বৃক্ষরোপণ ও পরিবেশ সচেতনতা।</p>
                            <a href="#" class="card-link">বিস্তারিত <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 4: Environment -->
                    <div class="activity-card">
                        <div class="card-img">
                            <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Environment">
                            <span class="card-tag tag-environment">Environment</span>
                        </div>
                        <div class="card-body">
                            <h3>পরিবেশ সুরক্ষা</h3>
                            <p>বৃক্ষরোপণ ও পরিবেশ সচেতনতা।</p>
                            <a href="#" class="card-link">বিস্তারিত <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 4: Environment -->
                    <div class="activity-card">
                        <div class="card-img">
                            <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Environment">
                            <span class="card-tag tag-environment">Environment</span>
                        </div>
                        <div class="card-body">
                            <h3>পরিবেশ সুরক্ষা</h3>
                            <p>বৃক্ষরোপণ ও পরিবেশ সচেতনতা।</p>
                            <a href="#" class="card-link">বিস্তারিত <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 3: Empowerment -->
                    <div class="activity-card">
                        <div class="card-img">
                            <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Empowerment">
                            <span class="card-tag tag-empowerment">Empowerment</span>
                        </div>
                        <div class="card-body">
                            <h3>নারী স্বাবলম্বীকরণ</h3>
                            <p>নারীদের দক্ষতা উন্নয়ন ও কর্মসংস্থান।</p>
                            <a href="#" class="card-link">বিস্তারিত <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 3: Empowerment -->
                    <div class="activity-card">
                        <div class="card-img">
                            <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Empowerment">
                            <span class="card-tag tag-empowerment">Empowerment</span>
                        </div>
                        <div class="card-body">
                            <h3>নারী স্বাবলম্বীকরণ</h3>
                            <p>নারীদের দক্ষতা উন্নয়ন ও কর্মসংস্থান।</p>
                            <a href="#" class="card-link">বিস্তারিত <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Add more cards for scrolling effect -->
                    <div class="activity-card">
                        <div class="card-img">
                            <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Food">
                            <span class="card-tag tag-food">Food Aid</span>
                        </div>
                        <div class="card-body">
                            <h3>খাদ্য সহায়তা</h3>
                            <p>দুস্থ পরিবারের মাঝে খাদ্য সামগ্রী বিতরণ।</p>
                            <a href="#" class="card-link">বিস্তারিত <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Pagination Dots -->
                <div class="slider-dots">
                    <!-- Dots will be generated by JS -->
                </div>
            </div>
        </div>
    </section>



    <!-- Success Stories Section (5th Section) -->
    <section class="success-stories" id="সাফল্যের-গল্প">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">সাফল্যের গল্প</h2>
                <p class="section-subtitle">যাদের জীবন বদলে গেছে আমাদের প্রচেষ্টায়</p>
                <div class="title-underline"></div>
            </div>

            <div class="success-carousel-container">
                <div class="success-carousel">
                    <!-- Story 1 -->
                    <div class="story-card">
                        <div class="story-images">
                            <div class="image-box before">
                                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                                    alt="Before">
                                <span class="img-tag">আগে</span>
                            </div>
                            <div class="image-box after">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                                    alt="After">
                                <span class="img-tag">পরে</span>
                            </div>
                        </div>
                        <div class="story-content">
                            <h3 class="story-name">রাহিমা বেগম</h3>
                            <span class="story-date">১২/১১/২০২৪</span>
                            <p class="story-text">
                                "সেলাই মেশিন পেয়ে এখন তিনি নিজের পায়ে দাঁড়িয়েছেন। তার পরিবারের স্বচ্ছলতা ফিরে এসেছে।"
                            </p>
                            <div class="story-status">
                                <i class="far fa-check-circle"></i> সফলভাবে পুনর্বাসিত
                            </div>
                        </div>
                    </div>

                    <!-- Story 2 -->
                    <div class="story-card">
                        <div class="story-images">
                            <div class="image-box before">
                                <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                                    alt="Before">
                                <span class="img-tag">আগে</span>
                            </div>
                            <div class="image-box after">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                                    alt="After">
                                <span class="img-tag">পরে</span>
                            </div>
                        </div>
                        <div class="story-content">
                            <h3 class="story-name">করিম মিয়া</h3>
                            <span class="story-date">৫/১০/২০২৪</span>
                            <p class="story-text">
                                "আমাদের কৃষি প্রকল্পের মাধ্যমে তিনি একজন সফল খামারি হতে পেরেছেন।"
                            </p>
                            <div class="story-status">
                                <i class="far fa-check-circle"></i> স্বাবলম্বী খামারি
                            </div>
                        </div>
                    </div>

                    <!-- Story 3 -->
                    <div class="story-card">
                        <div class="story-images">
                            <div class="image-box before">
                                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                                    alt="Before">
                                <span class="img-tag">আগে</span>
                            </div>
                            <div class="image-box after">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                                    alt="After">
                                <span class="img-tag">পরে</span>
                            </div>
                        </div>
                        <div class="story-content">
                            <h3 class="story-name">রাহিমা বেগম</h3>
                            <span class="story-date">১২/১১/২০২৪</span>
                            <p class="story-text">
                                "সেলাই মেশিন পেয়ে এখন তিনি নিজের পায়ে দাঁড়িয়েছেন। তার পরিবারের স্বচ্ছলতা ফিরে এসেছে।"
                            </p>
                            <div class="story-status">
                                <i class="far fa-check-circle"></i> সফলভাবে পুনর্বাসিত
                            </div>
                        </div>
                    </div>

                    <!-- Story 4 -->
                    <div class="story-card">
                        <div class="story-images">
                            <div class="image-box before">
                                <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                                    alt="Before">
                                <span class="img-tag">আগে</span>
                            </div>
                            <div class="image-box after">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                                    alt="After">
                                <span class="img-tag">পরে</span>
                            </div>
                        </div>
                        <div class="story-content">
                            <h3 class="story-name">করিম মিয়া</h3>
                            <span class="story-date">৫/১০/২০২৪</span>
                            <p class="story-text">
                                "আমাদের কৃষি প্রকল্পের মাধ্যমে তিনি একজন সফল খামারি হতে পেরেছেন।"
                            </p>
                            <div class="story-status">
                                <i class="far fa-check-circle"></i> স্বাবলম্বী খামারি
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls: Left & Right Arrows -->
                <div class="carousel-nav">
                    <button class="nav-btn prev-btn"><i class="fas fa-chevron-left"></i></button>
                    <button class="nav-btn next-btn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </section>




    <!-- Events/Gallery Section (6th Section) -->
    <section class="events-gallery" id="গ্যালারি">
        <div class="container">
            <div class="section-header" style="text-align: left;">
                <h2 class="section-title">আসন্ন ইভেন্ট</h2>
                <p class="section-subtitle">আমাদের পরবর্তী কার্যক্রমে অংশগ্রহণ করুন</p>
            </div>

            <div class="gallery-grid">
                <a href="#" class="gallery-item reveal-up">
                    <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=1200&q=80"
                        alt="বার্ষিক সাধারণ সভা">
                    <div class="gallery-overlay">
                        <span class="gallery-badge">MAR 15</span>
                        <h3 class="gallery-title">বার্ষিক সাধারণ সভা ২০২৫</h3>
                    </div>
                </a>
                <a href="#" class="gallery-item reveal-up">
                    <img src="https://images.unsplash.com/photo-1543357530-d91dab30fa40?auto=format&fit=crop&w=1200&q=80"
                        alt="ঈদ সামগ্রী বিতরণ">
                    <div class="gallery-overlay">
                        <span class="gallery-badge">APR 10</span>
                        <h3 class="gallery-title">ঈদ সামগ্রী বিতরণ</h3>
                    </div>
                </a>
                <a href="#" class="gallery-item reveal-up">
                    <img src="https://images.unsplash.com/photo-1507537297725-24a1c029d3ca?auto=format&fit=crop&w=1200&q=80"
                        alt="ফ্রি মেডিকেল ক্যাম্প">
                    <div class="gallery-overlay">
                        <span class="gallery-badge">MAY 20</span>
                        <h3 class="gallery-title">ফ্রি মেডিকেল ক্যাম্প</h3>
                    </div>
                </a>
                <a href="#" class="gallery-item reveal-up">
                    <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1200&q=80"
                        alt="শিক্ষা বৃত্তি প্রদান">
                    <div class="gallery-overlay">
                        <span class="gallery-badge">JUN 05</span>
                        <h3 class="gallery-title">শিক্ষা বৃত্তি প্রদান</h3>
                    </div>
                </a>
                <a href="#" class="gallery-item reveal-up">
                    <img src="https://images.unsplash.com/photo-1459755486867-b55449bb39ff?auto=format&fit=crop&w=1200&q=80"
                        alt="পরিবেশ সচেতনতা">
                    <div class="gallery-overlay">
                        <span class="gallery-badge">JUL 18</span>
                        <h3 class="gallery-title">পরিবেশ সচেতনতা</h3>
                    </div>
                </a>
                <a href="#" class="gallery-item reveal-up">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=1200&q=80"
                        alt="স্বেচ্ছাসেবক সম্মাননা">
                    <div class="gallery-overlay">
                        <span class="gallery-badge">AUG 02</span>
                        <h3 class="gallery-title">স্বেচ্ছাসেবক সম্মাননা</h3>
                    </div>
                </a>
            </div>

            <div class="gallery-actions" style="text-align:center; margin-top: 2rem;">
                <a href="#" class="learn-more-btn">সব ইভেন্ট দেখুন</a>
            </div>
        </div>
    </section>

    <!-- Scroll to Top Button -->
    <button id="scrollToTop" class="scroll-to-top-btn">
        <i class="fas fa-arrow-up"></i>
    </button>
</main>

<script>
// Statistics Counter Animation
const stats = document.querySelectorAll('.stat-number');
const convertToBengali = (num) => {
    const bengaliDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
    return num.toString().split('').map(digit => {
        return !isNaN(digit) ? bengaliDigits[digit] : digit;
    }).join('');
};

const animateCounter = (el) => {
    const target = +el.getAttribute('data-target');
    const duration = 2000; // 2 seconds
    const stepTime = 20;
    const totalSteps = duration / stepTime;
    const increment = target / totalSteps;
    let current = 0;

    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            current = target;
            clearInterval(timer);
        }

        let displayValue = Math.floor(current);
        let formattedValue = convertToBengali(displayValue);

        // Add + sign if needed
        if (target === 500 || target === 25 || target === 1000) {
            formattedValue += '+';
        }

        el.innerText = formattedValue;
    }, stepTime);
};

// Intersection Observer for stats
const statsSection = document.querySelector('.stats');
const observerOptions = {
    threshold: 0.5
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            stats.forEach(stat => animateCounter(stat));
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

if (statsSection) {
    observer.observe(statsSection);
}


// Scroll Reveal Animation for About/Other Sections
const reveals = document.querySelectorAll('.reveal-left, .reveal-right, .reveal-up');

const revealOnScroll = () => {
    const windowHeight = window.innerHeight;
    reveals.forEach(el => {
        const elementTop = el.getBoundingClientRect().top;
        const elementVisible = 150;
        if (elementTop < windowHeight - elementVisible) {
            el.classList.add('reveal-active');
        }
    });
};

window.addEventListener('scroll', revealOnScroll);
revealOnScroll(); // Run once on load






// Activities Slider Logic
const slider = document.querySelector('.activities-slider');
const cards = document.querySelectorAll('.activity-card');
const dotsContainer = document.querySelector('.slider-dots');
let currentIndex = 0;
let cardWidth = cards[0].offsetWidth + 32; // card width + gap
let isAutoScrolling = true;

// Generate Dots
cards.forEach((_, index) => {
    const dot = document.createElement('div');
    dot.classList.add('dot');
    if (index === 0) dot.classList.add('active');
    dot.addEventListener('click', () => {
        goToSlide(index);
        isAutoScrolling = false;
        setTimeout(() => isAutoScrolling = true, 5000); // Resume auto-scroll after 5s
    });
    dotsContainer.appendChild(dot);
});

const dots = document.querySelectorAll('.dot');

const updateActiveClasses = (index) => {
    cards.forEach((card, i) => {
        card.classList.remove('active');
        if (i === index) card.classList.add('active');
    });
    dots.forEach((dot, i) => {
        dot.classList.remove('active');
        if (i === index) dot.classList.add('active');
    });
};

const goToSlide = (index) => {
    currentIndex = index;
    const offset = -currentIndex * cardWidth;
    slider.style.transform = `translateX(${offset}px)`;
    updateActiveClasses(currentIndex);
};

const nextSlide = () => {
    currentIndex = (currentIndex + 1) % cards.length;
    goToSlide(currentIndex);
};

// Auto Scroll from right to left (looping)
setInterval(() => {
    if (isAutoScrolling) {
        nextSlide();
    }
}, 3000);

// Responsive card width update
window.addEventListener('resize', () => {
    cardWidth = cards[0].offsetWidth + 32;
    goToSlide(currentIndex);
});

// Initial state
updateActiveClasses(0);

// Scroll to Top Button Functionality
const scrollToTopBtn = document.getElementById('scrollToTop');

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        scrollToTopBtn.classList.add('show');
    } else {
        scrollToTopBtn.classList.remove('show');
    }
});

scrollToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Hero Button Click Events
const heroButtons = document.querySelectorAll('.hero-btns .btn');
if (heroButtons.length > 0) {
    // First button: "আমাদের কাজ জানুন" - scroll to Success Stories
    heroButtons[0].addEventListener('click', () => {
        const successSection = document.getElementById('সাফল্যের-গল্প');
        if (successSection) {
            successSection.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });

    // Second button: "সহায়তা করুন" - can be used for donation link
    heroButtons[1].addEventListener('click', () => {
        alert('ধন্যবাদ আমাদের সাহায্য করার জন্য আগ্রহ প্রকাশের জন্য!');
    });
}






// Success Stories Carousel Logic
const successSlider = document.querySelector('.success-carousel');
const successCards = document.querySelectorAll('.story-card');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
let successIndex = 0;

const updateSuccessCarousel = () => {
    // For desktop: use transform for carousel effect
    if (window.innerWidth >= 768) {
        const cardWidth = successCards[0].offsetWidth + 40; // card width + gap
        const offset = -successIndex * cardWidth;
        successSlider.style.transform = `translateX(${offset}px)`;
        return;
    }

    // For mobile: scroll horizontally using scrollLeft
    if (successSlider && successCards.length > 0) {
        const cardWidth = successCards[0].offsetWidth + 16; // card width + gap
        const scrollAmount = cardWidth * successIndex;
        successSlider.scrollLeft = scrollAmount;
    }
};

// Click events for arrows
if (prevBtn && nextBtn) {
    prevBtn.addEventListener('click', () => {
        if (successIndex > 0) {
            successIndex--;
            updateSuccessCarousel();
        }
    });

    nextBtn.addEventListener('click', () => {
        if (successIndex < successCards.length - 1) {
            successIndex++;
            updateSuccessCarousel();
        }
    });
}

// Handle resize
window.addEventListener('resize', updateSuccessCarousel);

// Initial update
if (successCards.length > 0) {
    updateSuccessCarousel();
}
</script>
@endsection

@push('styles')
<style>
/* Hero Section */
.hero {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('https://scontent.fdac7-1.fna.fbcdn.net/v/t39.30808-6/540337865_3507613556041612_9101768104763696279_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=c7cdda&_nc_eui2=AeFM_EavUZrXbGtsj-onM9T4AkFxXIX1np8CQXFchfWenxozymaKhW6QyZwksdDVG9IeoKrh7xR87o0cg8W11u2Z&_nc_ohc=cjFeeg1-6sYQ7kNvwEqtNCl&_nc_oc=AdkDoFMlres1jTD5_TXfanoKio26ResaxpxxpyH1-FL-QzUDUyY1wegOcZoB6q-e2NQ&_nc_zt=23&_nc_ht=scontent.fdac7-1.fna&_nc_gid=zLM6HlWelpSRrRsohKUEQg&oh=00_AfsbgLkrqDtPDxzTKrPrVef6nAoua5fiVEzD58X42lENBw&oe=69A785DA');
    /* Better community placeholder */
    background-size: cover;
    background-position: center;
    position: relative;
    text-align: center;
    overflow: hidden;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.9));
}

.hero-content {
    position: relative;
    z-index: 10;
    color: white;
    max-width: 800px;
    padding: 0 20px;
    animation: fadeInUp 1.2s ease-out;
}

.established-badge {
    display: inline-block;
    background-color: transparent;
    color: var(--secondary-color);
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 1rem;
    border: 1px solid var(--secondary-color);
    margin-bottom: 1.5rem;
    font-weight: 600;
    box-shadow: 0 0 10px rgba(245, 158, 11, 0.3);
}

@keyframes shine {
    0% {
        background-position: -200% center;
    }

    100% {
        background-position: 200% center;
    }
}

.hero-title {
    font-size: 6rem;
    font-weight: 800;
    margin-bottom: 0.5rem;
    background: linear-gradient(to right, #ffffff 20%, #10b981 50%, #f59e0b 80%, #ffffff 100%);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    filter: drop-shadow(0 2px 2px rgba(0, 0, 0, 0.5));
    letter-spacing: -1px;
    animation: shine 4s linear infinite;
}

.hero-tagline {
    font-size: 2.2rem;
    margin-bottom: 3rem;
    color: var(--text-white);
    font-weight: 500;
    opacity: 0.9;
    letter-spacing: 0.5px;
}

.hero-btns {
    display: flex;
    justify-content: center;
    gap: 1.5rem;
}

.btn {
    padding: 0.8rem 2rem;
    border-radius: 30px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-primary {
    background-color: #166534;
    /* Darker green */
    color: white;
    border: none;
    padding: 0.8rem 2.5rem;
}

.btn-primary:hover {
    background-color: #14532d;
    transform: scale(1.05);
}

.btn-secondary {
    background: transparent;
    color: #f59e0b;
    border: 2px solid #f59e0b;
    padding: 0.8rem 2.5rem;
}

.btn-secondary:hover {
    background-color: #f59e0b;
    color: white;
    transform: scale(1.05);
}

/* Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.05);
    }

    100% {
        transform: scale(1);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .nav-links {
        display: none;
        /* Add a mobile menu later if needed */
    }

    .hero-title {
        font-size: 3rem;
    }

    .hero-tagline {
        font-size: 1.2rem;
    }

    .hero-btns {
        flex-direction: column;
        align-items: center;
    }
}








/* Statistics Section Styles */
.stats {
    background-color: #1a1a1a;
    padding: 100px 5%;
    color: white;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
    cursor: pointer;
}

.stat-card {
    background-color: #222;
    padding: 2.5rem 1.5rem;
    border-radius: 12px;
    text-align: center;
    border: 1px solid #333;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: var(--primary-color);
    transform: scaleX(0);
    transition: transform 0.4s ease;
    transform-origin: left;
}

.stat-card:hover {
    transform: translateY(-10px);
    border-color: var(--primary-color);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
}

.stat-card:hover::before {
    transform: scaleX(1);
}

.stat-icon {
    width: 50px;
    height: 50px;
    background-color: rgba(16, 185, 129, 0.1);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto 1.5rem;
    color: var(--primary-color);
    font-size: 1.5rem;
    transition: all 0.3s ease;
}

.stat-card:hover .stat-icon {
    background-color: var(--primary-color);
    color: white;
    transform: rotateY(360deg);
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    font-family: 'Hind Siliguri', sans-serif;
}

.stat-label {
    color: var(--text-muted);
    font-size: 1rem;
    font-weight: 500;
}

@media (max-width: 1024px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .stats-grid {
        grid-template-columns: 1fr;
    }

    .stats {
        padding: 60px 5%;
    }
}









/* About Section (3rd Section) Styles */
.about-section {
    background-color: #121212;
    padding: 100px 5%;
    color: white;
    overflow: hidden;
}

.about-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 4rem;
    align-items: center;
}

.section-tag {
    background-color: rgba(16, 185, 129, 0.1);
    color: var(--primary-color);
    padding: 6px 15px;
    border-radius: 4px;
    font-size: 0.85rem;
    font-weight: 600;
    display: inline-block;
    margin-bottom: 1.5rem;
    border: 1px solid rgba(16, 185, 129, 0.2);
}

.about-title {
    font-size: 3rem;
    line-height: 1.2;
    margin-bottom: 2rem;
    font-weight: 700;
}

.about-title span {
    color: var(--secondary-color);
}

.about-desc {
    color: var(--text-muted);
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
    line-height: 1.8;
}

.founder-card {
    background-color: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    padding: 1rem;
    border-radius: 12px;
    display: flex;
    align-items: center;
    gap: 1.5rem;
    margin: 2.5rem 0;
    max-width: 400px;
}

.founder-img img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid var(--primary-color);
}

.founder-info h4 {
    font-size: 1.1rem;
    margin-bottom: 2px;
}

.founder-info p {
    color: var(--secondary-color);
    font-size: 0.85rem;
    font-weight: 500;
}

.learn-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    border: 1px solid var(--primary-color);
    padding: 10px 25px;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.learn-more-btn:hover {
    background-color: var(--primary-color);
    color: white;
}

/* Mission & Vision Cards */
.mission-vision {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.info-card {
    padding: 2.5rem;
    border-radius: 12px;
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

.mission-card {
    background-color: rgba(16, 185, 129, 0.05);
}

.mission-card:hover {
    background-color: rgba(16, 185, 129, 0.08);
    border-color: rgba(16, 185, 129, 0.2);
    transform: translateX(-10px);
}

.mission-card .info-icon {
    color: var(--primary-color);
    background-color: rgba(16, 185, 129, 0.1);
}

.vision-card {
    background-color: rgba(245, 158, 11, 0.05);
}

.vision-card:hover {
    background-color: rgba(245, 158, 11, 0.08);
    border-color: rgba(245, 158, 11, 0.2);
    transform: translateX(-10px);
}

.vision-card .info-icon {
    color: var(--secondary-color);
    background-color: rgba(245, 158, 11, 0.1);
}

.info-icon {
    width: 45px;
    height: 45px;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.2rem;
    margin-bottom: 1.5rem;
}

.info-card h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.mission-card h3 {
    color: var(--primary-color);
}

.vision-card h3 {
    color: var(--secondary-color);
}

.info-card p {
    color: var(--text-muted);
    line-height: 1.7;
}

/* Scroll Animations */
.reveal-left {
    opacity: 0;
    transform: translateX(-50px);
    transition: all 1s ease-out;
}

.reveal-right {
    opacity: 0;
    transform: translateX(50px);
    transition: all 1s ease-out;
}

.reveal-active {
    opacity: 1;
    transform: translateX(0);
}

@media (max-width: 992px) {
    .about-grid {
        grid-template-columns: 1fr;
        gap: 3rem;
    }

    .about-title {
        font-size: 2.5rem;
    }

    .mission-vision {
        flex-direction: row;
    }
}

@media (max-width: 768px) {
    .about-section {
        padding: 60px 5%;
    }

    .about-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .about-title {
        font-size: 2rem;
    }

    .about-desc {
        font-size: 1rem;
    }

    .mission-vision {
        flex-direction: column;
        gap: 2rem;
    }

    .info-card {
        padding: 2rem;
    }

    .info-card h3 {
        font-size: 1.3rem;
    }

    .founder-card {
        max-width: 100%;
    }
}

@media (max-width: 480px) {
    .about-section {
        padding: 40px 4%;
    }

    .about-grid {
        gap: 1.5rem;
    }

    .about-title {
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .about-desc {
        font-size: 0.95rem;
        margin-bottom: 1.2rem;
    }

    .section-tag {
        padding: 4px 12px;
        font-size: 0.75rem;
    }

    .founder-card {
        padding: 0.8rem;
        gap: 1rem;
        margin: 1.5rem 0;
    }

    .founder-img img {
        width: 50px;
        height: 50px;
    }

    .founder-info h4 {
        font-size: 1rem;
    }

    .founder-info p {
        font-size: 0.75rem;
    }

    .learn-more-btn {
        padding: 8px 20px;
        font-size: 0.9rem;
    }

    .info-card {
        padding: 1.5rem;
    }

    .info-card h3 {
        font-size: 1.1rem;
        margin-bottom: 0.8rem;
    }

    .info-card p {
        font-size: 0.9rem;
    }
}







/* Activities Section (4th Section) Styles */
.activities-section {
    background-color: #0f172a;
    padding: 100px 5%;
    color: white;
}

.section-header {
    text-align: center;
    margin-bottom: 4rem;
}

.section-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    font-family: 'Hind Siliguri', sans-serif;
}

.section-subtitle {
    color: var(--text-muted);
    font-size: 1.2rem;
}

.title-underline {
    width: 80px;
    height: 4px;
    background-color: var(--secondary-color);
    margin: 1.5rem auto 0;
    border-radius: 2px;
}

.activities-slider-container {
    position: relative;
    overflow: hidden;
    padding: 20px 0 60px;
}

.activities-slider {
    display: flex;
    gap: 2rem;
    transition: transform 0.5s ease;
    cursor: grab;
}

.activities-slider:active {
    cursor: grabbing;
}

.activity-card {
    min-width: 350px;
    background-color: #1e293b;
    border-radius: 15px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.05);
    transition: all 0.4s ease;
    flex-shrink: 0;
}

.activity-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
    border-color: rgba(16, 185, 129, 0.2);
}

.activity-card.active {
    transform: scale(1.05);
    border-color: var(--primary-color);
    box-shadow: 0 20px 40px rgba(16, 185, 129, 0.15);
}

.card-img {
    position: relative;
    height: 220px;
}

.card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card-tag {
    position: absolute;
    bottom: 15px;
    left: 15px;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    color: white;
}

.tag-education {
    background-color: #f59e0b;
}

.tag-health {
    background-color: #f59e0b;
}

.tag-empowerment {
    background-color: #f59e0b;
}

.tag-environment {
    background-color: #f59e0b;
}

.tag-food {
    background-color: #f59e0b;
}

.card-body {
    padding: 2rem;
}

.card-body h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: white;
}

.card-body p {
    color: var(--text-muted);
    font-size: 0.95rem;
    margin-bottom: 2rem;
    line-height: 1.6;
}

.card-link {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--text-muted);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s;
}

.card-link:hover {
    color: var(--primary-color);
}

.card-link i {
    font-size: 0.8rem;
    transition: transform 0.3s;
}

.card-link:hover i {
    transform: translateX(5px);
}

/* Slider Dots */
.slider-dots {
    display: flex;
    justify-content: center;
    gap: 12px;
    margin-top: 3rem;
}

.dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #334155;
    cursor: pointer;
    transition: all 0.3s ease;
}

.dot.active {
    background-color: var(--secondary-color);
    width: 30px;
    border-radius: 10px;
}

/* Scroll to Top Button */
.scroll-to-top-btn {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
    border: none;
    border-radius: 50%;
    font-size: 24px;
    cursor: pointer;
    display: none;
    justify-content: center;
    align-items: center;
    box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);
    transition: all 0.3s ease;
    z-index: 999;
}

.scroll-to-top-btn.show {
    display: flex;
    animation: slideUp 0.4s ease;
}

.scroll-to-top-btn:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(16, 185, 129, 0.6);
    background: linear-gradient(135deg, #059669 0%, #047857 100%);
}

.scroll-to-top-btn:active {
    transform: translateY(-2px);
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .scroll-to-top-btn {
        width: 45px;
        height: 45px;
        bottom: 20px;
        right: 20px;
        font-size: 20px;
    }
}

@media (max-width: 768px) {
    .activity-card {
        min-width: 280px;
    }

    .activities-section {
        padding: 60px 5%;
    }

    .section-title {
        font-size: 2.5rem;
    }

    .section-subtitle {
        font-size: 1rem;
    }
}

@media (max-width: 600px) {
    .activity-card {
        min-width: 250px;
    }

    .card-img {
        height: 180px;
    }

    .card-body {
        padding: 1.5rem;
    }

    .card-body h3 {
        font-size: 1.2rem;
    }

    .activities-section {
        padding: 40px 3%;
    }

    .section-title {
        font-size: 2rem;
    }

    .slider-dots {
        margin-top: 2rem;
        gap: 8px;
    }

    .dot {
        width: 8px;
        height: 8px;
    }

    .dot.active {
        width: 24px;
    }
}




/* Success Stories Section (5th Section) Styles */
.success-stories {
    background-color: #1a1a1a;
    padding: 100px 5%;
    color: white;
}

.success-carousel-container {
    position: relative;
    padding: 20px 0;
    overflow: hidden;
    width: 100%;
}

.success-carousel {
    display: flex;
    gap: 2.5rem;
    transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    scroll-behavior: smooth;
    flex-wrap: nowrap;
    width: 100%;
}

.story-card {
    min-width: 100%;
    max-width: 100%;
    background-color: #222;
    border-radius: 15px;
    display: flex;
    overflow: hidden;
    border: 1px solid #333;
    transition: all 0.4s ease;
    flex-shrink: 0;
}

.story-card:hover {
    border-color: var(--primary-color);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
}

.story-images {
    display: flex;
    width: 45%;
    position: relative;
}

.image-box {
    width: 50%;
    position: relative;
    height: 350px;
}

.image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.image-box.before img {
    filter: grayscale(100%);
}

.img-tag {
    position: absolute;
    top: 15px;
    padding: 4px 12px;
    border-radius: 4px;
    font-size: 0.75rem;
    font-weight: 600;
    color: white;
    z-index: 5;
}

.before .img-tag {
    background-color: rgba(0, 0, 0, 0.6);
    left: 15px;
}

.after .img-tag {
    background-color: var(--primary-color);
    right: 15px;
}

.story-content {
    width: 55%;
    padding: 2.5rem;
    display: flex;
    flex-direction: column;
}

.story-name {
    color: var(--primary-color);
    font-size: 1.8rem;
    margin-bottom: 0.5rem;
    font-family: 'Hind Siliguri', sans-serif;
}

.story-date {
    color: #64748b;
    font-size: 0.9rem;
    margin-bottom: 1.5rem;
}

.story-text {
    font-size: 1.15rem;
    line-height: 1.8;
    color: #cbd5e1;
    font-style: italic;
    margin-bottom: 2rem;
    flex-grow: 1;
}

.story-status {
    display: flex;
    align-items: center;
    gap: 10px;
    color: var(--secondary-color);
    font-weight: 600;
    font-size: 1rem;
}

.story-status i {
    font-size: 1.2rem;
}

/* Carousel Navigation Arrows */
.carousel-nav {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 3rem;
}

.nav-btn {
    background-color: #222;
    border: 1px solid #333;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 1.2rem;
}

.nav-btn:hover {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
    transform: scale(1.1);
}

.nav-btn:active {
    transform: scale(0.95);
}

@media (max-width: 992px) {
    .story-card {
        min-width: 100%;
    }
}

@media (max-width: 768px) {
    .success-stories {
        padding: 60px 5%;
    }

    .success-carousel-container {
        padding: 15px 0 10px 0;
        overflow-x: auto;
        overflow-y: hidden;
        width: 100%;
    }

    .success-carousel {
        gap: 1.5rem;
        flex-wrap: nowrap;
        transform: none !important;
        width: 100%;
        overflow-x: auto;
        overflow-y: hidden;
        padding-bottom: 10px;
    }

    .story-card {
        min-width: 85vw;
        flex-direction: column;
        width: 85vw;
        flex-shrink: 0;
    }

    .story-images {
        width: 100%;
        height: 300px;
    }

    .image-box {
        width: 50%;
        height: 300px;
    }

    .story-content {
        width: 100%;
        padding: 2rem;
    }

    .story-name {
        font-size: 1.5rem;
    }

    .story-text {
        font-size: 1rem;
        margin-bottom: 1.5rem;
    }

    .carousel-nav {
        gap: 15px;
        margin-top: 1rem;
        margin-bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        position: relative;
    }

    .nav-btn {
        width: 45px;
        height: 45px;
        font-size: 1rem;
    }

    .section-title {
        font-size: 2.5rem;
    }
}

@media (max-width: 600px) {
    .success-stories {
        padding: 40px 4%;
    }

    .success-carousel-container {
        padding: 10px 0 8px 0;
        overflow-x: auto;
        overflow-y: hidden;
        width: 100%;
    }

    .success-carousel {
        gap: 1rem;
        margin-bottom: 0;
        flex-wrap: nowrap;
        transform: none !important;
        width: 100%;
        overflow-x: auto;
        overflow-y: hidden;
        padding-bottom: 8px;
    }

    .story-card {
        min-width: 90vw;
        flex-direction: column;
        border-radius: 12px;
        width: 90vw;
        flex-shrink: 0;
    }

    .carousel-nav {
        gap: 12px;
        margin-top: 0.8rem;
        margin-bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        position: relative;
    }

    .nav-btn {
        width: 38px;
        height: 38px;
        font-size: 0.85rem;
    }

    .story-images {
        width: 100%;
        height: 220px;
    }

    .image-box {
        width: 50%;
        height: 220px;
    }

    .image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .img-tag {
        top: 10px;
        padding: 3px 8px;
        font-size: 0.65rem;
    }

    .before .img-tag {
        left: 10px;
    }

    .after .img-tag {
        right: 10px;
    }

    .story-content {
        width: 100%;
        padding: 1.5rem;
    }

    .story-name {
        font-size: 1.3rem;
        margin-bottom: 0.3rem;
    }

    .story-date {
        font-size: 0.8rem;
        margin-bottom: 1rem;
    }

    .story-text {
        font-size: 0.9rem;
        line-height: 1.6;
        margin-bottom: 1.2rem;
    }

    .story-status {
        font-size: 0.9rem;
        gap: 8px;
    }

    .story-status i {
        font-size: 1rem;
    }

    .carousel-nav {
        gap: 12px;
        margin-top: 1.5rem;
        display: flex;
        justify-content: center;
    }

    .nav-btn {
        width: 40px;
        height: 40px;
        font-size: 0.9rem;
    }

    .section-title {
        font-size: 1.8rem;
    }

    .section-subtitle {
        font-size: 0.95rem;
    }
}

@media (max-width: 480px) {
    .success-stories {
        padding: 30px 3%;
    }

    .success-carousel-container {
        padding: 8px 0 5px 0;
        overflow-x: auto;
        overflow-y: hidden;
        width: 100%;
    }

    .success-carousel {
        gap: 0.8rem;
        flex-wrap: nowrap;
        transform: none !important;
        width: 100%;
        overflow-x: auto;
        overflow-y: hidden;
        padding-bottom: 5px;
    }

    .story-card {
        border-radius: 10px;
        min-width: 90vw;
        width: 90vw;
        flex-shrink: 0;
    }

    .carousel-nav {
        gap: 8px;
        margin-top: 0.6rem;
        margin-bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        position: relative;
    }

    .nav-btn {
        width: 32px;
        height: 32px;
        font-size: 0.75rem;
    }

    .story-images {
        height: 180px;
    }

    .image-box {
        height: 180px;
    }

    .story-content {
        padding: 1.2rem;
    }

    .story-name {
        font-size: 1.1rem;
    }

    .story-date {
        font-size: 0.75rem;
    }

    .story-text {
        font-size: 0.85rem;
        margin-bottom: 1rem;
    }

    .carousel-nav {
        gap: 10px;
        margin-top: 1rem;
        display: flex;
        justify-content: center;
    }

    .nav-btn {
        width: 35px;
        height: 35px;
        font-size: 0.8rem;
    }

    .section-title {
        font-size: 1.5rem;
    }
}








/* Events/Gallery Section (6th Section) */
.events-gallery {
    background-color: #111213;
    padding: 100px 5%;
    color: white;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
}

.gallery-item {
    position: relative;
    display: block;
    overflow: hidden;
    border-radius: 14px;
    border: 1px solid #2a2f3a;
}

.gallery-item img {
    width: 100%;
    height: 260px;
    object-fit: cover;
    transition: transform 0.6s ease;
    display: block;
}

.gallery-overlay {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    padding: 1.2rem 1rem;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.0));
    color: white;
    transform: translateY(20px);
    opacity: 0;
    transition: all 0.35s ease;
}

.gallery-badge {
    position: absolute;
    top: 12px;
    right: 12px;
    background-color: #e2e8f0;
    color: #0f172a;
    font-weight: 700;
    font-size: 0.8rem;
    padding: 6px 10px;
    border-radius: 6px;
}

.gallery-title {
    font-size: 1.25rem;
    font-weight: 700;
    line-height: 1.35;
}

.gallery-item:hover img {
    transform: scale(1.08);
}

.gallery-item:hover .gallery-overlay {
    transform: translateY(0);
    opacity: 1;
}

/* Reveal Up Animation */
.reveal-up {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease;
}

.reveal-up.reveal-active {
    opacity: 1;
    transform: translateY(0);
}

@media (max-width: 1024px) {
    .gallery-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 640px) {
    .gallery-grid {
        grid-template-columns: 1fr;
    }

    .gallery-item img {
        height: 220px;
    }
}
</style>
@endpush