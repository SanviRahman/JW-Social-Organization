@extends('home.layout')

@section('title', 'ঝাউগড়া কল্যাণ সংগঠন - হোম')


@section('content')
<main>
    <!-- Hero Section -->
    <section class="hero" id="হোম">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span class="established-badge">প্রতিষ্ঠিত ২০১৭</span>
            <h1 class="hero-title">ঝাউগড়া কল্যাণ সংগঠন</h1>
            <p class="hero-tagline">"ঐক্যই আমাদের শক্তি, উন্নয়নই আমাদের লক্ষ্য"</p>
            <div class="hero-btns">
                <a href="#ইভেন্ট" class="btn btn-primary">আমাদের কাজ জানুন</a>
                <a href="#সহায়তা-করুন" class="btn btn-secondary">সহায়তা করুন</a>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle-tag">আমাদের অর্জন</span>
                <pre></pre>
                <h2 class="section-main-title">পরিসংখ্যান</h2>
                <p class="section-description">এক নজরে আমাদের কার্যক্রমের চিত্র</p>
            </div>
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

    <!-- About Section -->
    <section class="about-section" id="আমাদের-সম্পর্কে">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle-tag">আমাদের পরিচয়</span>
                <pre></pre>
                <h2 class="section-main-title">আমাদের সম্পর্কে</h2>
                <p class="section-description">মানবতার সেবায় আমাদের অঙ্গীকার</p>
            </div>
            <div class="about-grid">
                <div class="about-content reveal-left">
                    <h2 class="about-title">মানবতার সেবায় <br> <span>নিবেদিত প্রাণ</span></h2>
                    <p class="about-desc">
                        ঝাউগড়া কল্যাণ সংগঠন একটি অলাভজনক সামাজিক সংগঠন যা ২০১৭ সাল থেকে সমাজের সুবিধাবঞ্চিত মানুষের
                        জীবনমান উন্নয়নে কাজ করে যাচ্ছে। আমাদের মূল লক্ষ্য হলো একটি শিক্ষিত, স্বাস্থ্যসম্মত এবং
                        স্বাবলম্বী সমাজ গড়ে তোলা।
                    </p>
                    <p class="about-desc">
                        আমরা বিশ্বাস করি, সম্মিলিত প্রচেষ্টায় যেকোনো অসাধ্য সাধন করা সম্ভব। আমাদের স্বেচ্ছাসেবকদের
                        অক্লান্ত পরিশ্রম এবং দাতাদের উদার সহযোগিতায় আমরা এগিয়ে চলেছি।
                    </p>

                    <div class="founder-card">
                        <div class="founder-img">
                            <img
                                src="https://scontent.fdac7-1.fna.fbcdn.net/v/t39.30808-6/561659522_3695781134051775_8011078114531792308_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=1d70fc&_nc_eui2=AeGYC4gW1qbwgKfqDICD1r1MaeCP85FCpQBp4I_zkUKlAIu0DnP9rHy2DHyttjVTuO6SDNkPbGYywrLmWdxpks4n&_nc_ohc=3eg5nxRfRQEQ7kNvwHefF49&_nc_oc=AdkjqK_fHa3NkIAcI5oNzPkYrbjccRk6mByxh6GYTa8uA9cjarqYgHvNgmdgJMLQ5Hk&_nc_zt=23&_nc_ht=scontent.fdac7-1.fna&_nc_gid=4pF3YU73CzGC4rR4cyNPfw&_nc_ss=8&oh=00_AfuicoI9EDNRauFgCNK665hkSYXYsue4OFZXwz2E4YWgDA&oe=69A83C37">
                        </div>
                        <div class="founder-info">
                            <h4>শেখ ফরিদ আহমেদ শান্ত</h4>
                            <p>প্রতিষ্ঠাতা ও সভাপতি</p>
                        </div>
                    </div>

                    <a href="https://sfashanto.netlify.app/" class="learn-more-btn" target="_blank">আরও জানুন <i
                            class="fas fa-arrow-right"></i></a>
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
        </div>
    </section>

    <!-- Activities Section -->
    <section class="activities-section" id="কার্যক্রম">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle-tag">আমাদের কাজ</span>
                <pre></pre>
                <h2 class="section-main-title">আমাদের কার্যক্রম</h2>
                <p class="section-description">সমাজের উন্নয়নে আমাদের নিরলস প্রচেষ্টা</p>
            </div>

            <div class="activities-slider-container">
                <div class="activities-slider">
                    <!-- Card 1: Education -->
                    <div class="activity-card">
                        <div class="card-img">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Education">
                            <span class="card-tag tag-education">শিক্ষা</span>
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
                            <span class="card-tag tag-health">স্বাস্থ্য</span>
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
                            <span class="card-tag tag-empowerment">নারী উন্নয়ন</span>
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
                            <span class="card-tag tag-environment">পরিবেশ</span>
                        </div>
                        <div class="card-body">
                            <h3>পরিবেশ সুরক্ষা</h3>
                            <p>বৃক্ষরোপণ ও পরিবেশ সচেতনতা।</p>
                            <a href="#" class="card-link">বিস্তারিত <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 5: Food Aid -->
                    <div class="activity-card">
                        <div class="card-img">
                            <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Food">
                            <span class="card-tag tag-food">খাদ্য সহায়তা</span>
                        </div>
                        <div class="card-body">
                            <h3>খাদ্য সহায়তা</h3>
                            <p>দুস্থ পরিবারের মাঝে খাদ্য সামগ্রী বিতরণ।</p>
                            <a href="#" class="card-link">বিস্তারিত <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Pagination Dots -->
                <div class="slider-dots"></div>
            </div>
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="success-stories" id="ইভেন্ট">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle-tag">সাফল্যের গল্প</span>
                <pre></pre>
                <h2 class="section-main-title">সাফল্যের গল্প</h2>
                <p class="section-description">যাদের জীবন বদলে গেছে আমাদের প্রচেষ্টায়</p>
            </div>

            <div class="success-carousel-container">
                <div class="success-carousel" id="successCarousel">
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
                            <h3 class="story-name">আমিনা খাতুন</h3>
                            <span class="story-date">২০/০৯/২০২৪</span>
                            <p class="story-text">
                                "আমাদের প্রশিক্ষণ কেন্দ্র থেকে সেলাই শিখে এখন তিনি নিজের একটি দোকান দিয়েছেন।"
                            </p>
                            <div class="story-status">
                                <i class="far fa-check-circle"></i> স্বাবলম্বী উদ্যোক্তা
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
                            <h3 class="story-name">জামাল উদ্দিন</h3>
                            <span class="story-date">১৫/০৮/২০২৪</span>
                            <p class="story-text">
                                "ক্ষুদ্র ব্যবসার জন্য পুঁজি পেয়ে এখন তিনি সফলভাবে তার ব্যবসা পরিচালনা করছেন।"
                            </p>
                            <div class="story-status">
                                <i class="far fa-check-circle"></i> সফল ব্যবসায়ী
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <div class="carousel-nav">
                    <button class="nav-btn prev-btn" id="prevBtn"><i class="fas fa-chevron-left"></i></button>
                    <button class="nav-btn next-btn" id="nextBtn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Events/Gallery Section -->
    <section class="events-gallery" id="গ্যালারি">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle-tag">আসন্ন আয়োজন</span>
                <pre></pre>
                <h2 class="section-main-title">আসন্ন ইভেন্ট</h2>
                <p class="section-description">আমাদের পরবর্তী কার্যক্রমে অংশগ্রহণ করুন</p>
            </div>

            <div class="gallery-grid">
                <div class="gallery-item reveal-up">
                    <img src="{{ asset('image/Barshik-sova.jpg') }}" alt="বার্ষিক সাধারণ সভা">
                    <div class="gallery-overlay">
                        <span class="gallery-badge">MAR 15</span>
                        <h3 class="gallery-title">বার্ষিক সাধারণ সভা ২০২৫</h3>
                    </div>
                </div>
                <div class="gallery-item reveal-up">
                    <img src="{{ asset('image/ponno.jpg') }}" alt="ঈদ সামগ্রী বিতরণ">
                    <div class="gallery-overlay">
                        <span class="gallery-badge">APR 10</span>
                        <h3 class="gallery-title">ঈদ সামগ্রী বিতরণ</h3>
                    </div>
                </div>
                <div class="gallery-item reveal-up">
                    <img src="{{ asset('image/Treatment.jpg') }}" alt="ফ্রি মেডিকেল ক্যাম্প">
                    <div class="gallery-overlay">
                        <span class="gallery-badge">MAY 20</span>
                        <h3 class="gallery-title">ফ্রি মেডিকেল ক্যাম্প</h3>
                    </div>
                </div>
                <div class="gallery-item reveal-up">
                    <img src="{{ asset('image/britti.jpg') }}" alt="শিক্ষা বৃত্তি প্রদান">
                    <div class="gallery-overlay">
                        <span class="gallery-badge">JUN 05</span>
                        <h3 class="gallery-title">শিক্ষা বৃত্তি প্রদান</h3>
                    </div>
                </div>
                <div class="gallery-item reveal-up">
                    <img src="{{ asset('image/Tree.jpg') }}" alt="পরিবেশ সচেতনতা">
                    <div class="gallery-overlay">
                        <span class="gallery-badge">JUL 18</span>
                        <h3 class="gallery-title">পরিবেশ সচেতনতা</h3>
                    </div>
                </div>
                <div class="gallery-item reveal-up">
                    <img src="{{ asset('image/Barshik-sova.jpg') }}" alt="স্বেচ্ছাসেবক সম্মাননা">
                    <div class="gallery-overlay">
                        <span class="gallery-badge">AUG 02</span>
                        <h3 class="gallery-title">স্বেচ্ছাসেবক সম্মাননা</h3>
                    </div>
                </div>
            </div>

            <div class="gallery-actions">
                <a href="#" class="learn-more-btn">সব ইভেন্ট দেখুন <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="timeline-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle-tag">আমাদের গল্প</span>
                <pre></pre>
                <h2 class="section-main-title">আমাদের পথচলা</h2>
                <p class="section-description">২০১৭ সালে যাত্রা শুরু করে আমরা আজ অবধি নিরলসভাবে কাজ করে যাচ্ছি।</p>
            </div>

            <div class="timeline">
                <div class="timeline-item right">
                    <div class="content">
                        <h2>2017</h2>
                        <h3>যাত্রা শুরু</h3>
                        <p>প্রথম স্বাস্থ্য ক্যাম্পের মাধ্যমে যাত্রা শুরু। ৫০০+ মানুষের বিনামূল্যে চিকিৎসা সেবা প্রদান।
                        </p>
                    </div>
                </div>
                <div class="timeline-item left">
                    <div class="content">
                        <h2>2019</h2>
                        <h3>শিক্ষা প্রকল্প</h3>
                        <p>মেধাবী কিন্তু দরিদ্র শিক্ষার্থীদের জন্য বৃত্তি কর্মসূচি চালু।</p>
                    </div>
                </div>
                <div class="timeline-item right">
                    <div class="content">
                        <h2>2021</h2>
                        <h3>কোভিড-১৯ সহায়তা</h3>
                        <p>মহামারির সময় ২০০০+ অসহায় পরিবারের মাঝে খাদ্য সহায়তা পৌঁছে দেওয়া।</p>
                    </div>
                </div>
                <div class="timeline-item left">
                    <div class="content">
                        <h2>2023</h2>
                        <h3>কারিগরি প্রশিক্ষণ</h3>
                        <p>বেকার যুবক-যুবতীদের জন্য কম্পিউটার ও কারিগরি প্রশিক্ষণ কেন্দ্র স্থাপন।</p>
                    </div>
                </div>
                <div class="timeline-item right">
                    <div class="content">
                        <h2>2025</h2>
                        <h3>ডিজিটাল রূপান্তর</h3>
                        <p>সম্পূর্ণ ডিজিটাল কার্যক্রম ও স্মার্ট সেবা চালু।</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Volunteer Section -->
    <section class="section-8">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle-tag">যোগ দিন আমাদের সাথে</span>
                <pre></pre>
                <h2 class="section-main-title">স্বেচ্ছাসেবক হন</h2>
                <p class="section-description">আপনার সময় এবং মেধা দিয়ে সমাজের উন্নয়নে অবদান রাখুন</p>
            </div>

            <div class="section-8-container">
                <!-- Left Side -->
                <div class="section-8-left">
                    <h2>স্বেচ্ছাসেবক হন</h2>
                    <p>
                        আপনার সময় এবং মেধা দিয়ে সমাজের উন্নয়নে অবদান রাখুন।
                        আমাদের টিমে যোগ দিন এবং পরিবর্তনের অংশীদার হন।
                    </p>

                    <ul class="benefits">
                        <li><i class="fas fa-check-circle"></i> সামাজিক নেটওয়ার্কিং</li>
                        <li><i class="fas fa-check-circle"></i> নেতৃত্বের দক্ষতা উন্নয়ন</li>
                        <li><i class="fas fa-check-circle"></i> সার্টিফিকেট ও স্বীকৃতি</li>
                        <li><i class="fas fa-check-circle"></i> মানসিক প্রশান্তি</li>
                    </ul>
                </div>

                <!-- Right Side -->
                <div class="section-8-right">
                    <div class="form-box">
                        <h3>নিবন্ধন ফর্ম</h3>
                        <p class="form-subtitle">আপনার তথ্য দিন, আমরা যোগাযোগ করব</p>

                        <form>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>নাম</label>
                                    <input type="text" placeholder="আপনার নাম">
                                </div>

                                <div class="form-group">
                                    <label>ফোন</label>
                                    <input type="text" placeholder="01XXXXXXXXX">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>ইমেইল</label>
                                <input type="email" placeholder="example@mail.com">
                            </div>

                            <div class="form-group">
                                <label>আগ্রহের ক্ষেত্র</label>
                                <select>
                                    <option>শিক্ষা</option>
                                    <option>স্বাস্থ্য</option>
                                    <option>পরিবেশ</option>
                                    <option>প্রযুক্তি</option>
                                </select>
                            </div>

                            <button type="submit" class="submit-btn">
                                স্বেচ্ছাসেবক হন <i class="fas fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog section -->
    <section class="news-section" id="ব্লগ">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle-tag">সাম্প্রতিক আপডেট</span>
                <pre></pre>
                <h2 class="section-main-title">ব্লগ ও খবর</h2>
                <p class="section-description">আমাদের সাম্প্রতিক কর্মকাণ্ড ও আপডেট</p>
            </div>

            <div class="card-wrapper">
                <!-- Card 1 -->
                <div class="news-card">
                    <img src="https://scontent.fdac7-1.fna.fbcdn.net/v/t39.30808-6/558812590_3549518041851163_3899106297584745642_n.jpg?stp=cp6_dst-jpg_tt6&_nc_cat=110&ccb=1-7&_nc_sid=7b2446&_nc_eui2=AeEVFOyBGx1kW4Vf97uaYgvtD1Jl9w15fKcPUmX3DXl8pyinJ8qQwS_eP-aI3wWqVjKhEAbwmcYKt6xn06mBS9Hk&_nc_ohc=amsv5JwgEEwQ7kNvwFGclcI&_nc_oc=AdnldJsDZyGRjD-0FgsGA2uP8gJ5iCpaFaeHJ4wLrPW8POpkxlDLgEVSSyVLOugoaZQ&_nc_zt=23&_nc_ht=scontent.fdac7-1.fna&_nc_gid=eVVF7FcHldiKtLyiPfS6Kw&oh=00_AfuRMHUShPSgpYBCLOObVLI843siRGNlTDx_mBSLQWWS2w&oe=69A7ABCD"
                        alt="News Image">
                    <div class="card-content">
                        <span class="date"><i class="far fa-calendar-alt"></i> ২০/১২/২০২৪</span>
                        <h3>শীতবস্ত্র বিতরণ কর্মসূচি ২০২৪</h3>
                        <p>এবারের শীতে আমরা ৫০০টি পরিবারের মাঝে কম্বল বিতরণ করেছি।</p>
                        <a href="#">আরও পড়ুন <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="news-card">
                    <img src="https://scontent.fdac7-1.fna.fbcdn.net/v/t39.30808-6/558812590_3549518041851163_3899106297584745642_n.jpg?stp=cp6_dst-jpg_tt6&_nc_cat=110&ccb=1-7&_nc_sid=7b2446&_nc_eui2=AeEVFOyBGx1kW4Vf97uaYgvtD1Jl9w15fKcPUmX3DXl8pyinJ8qQwS_eP-aI3wWqVjKhEAbwmcYKt6xn06mBS9Hk&_nc_ohc=amsv5JwgEEwQ7kNvwFGclcI&_nc_oc=AdnldJsDZyGRjD-0FgsGA2uP8gJ5iCpaFaeHJ4wLrPW8POpkxlDLgEVSSyVLOugoaZQ&_nc_zt=23&_nc_ht=scontent.fdac7-1.fna&_nc_gid=eVVF7FcHldiKtLyiPfS6Kw&oh=00_AfuRMHUShPSgpYBCLOObVLI843siRGNlTDx_mBSLQWWS2w&oe=69A7ABCD"
                        alt="News Image">
                    <div class="card-content">
                        <span class="date"><i class="far fa-calendar-alt"></i> ১৫/১২/২০২৪</span>
                        <h3>পরিবেশ রক্ষায় আমাদের করণীয়</h3>
                        <p>গাছ লাগান, পরিবেশ বাঁচান। আমাদের নতুন ক্যাম্পেইন সম্পর্কে জানুন।</p>
                        <a href="#">আরও পড়ুন <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="news-card">
                    <img src="https://scontent.fdac7-1.fna.fbcdn.net/v/t39.30808-6/558812590_3549518041851163_3899106297584745642_n.jpg?stp=cp6_dst-jpg_tt6&_nc_cat=110&ccb=1-7&_nc_sid=7b2446&_nc_eui2=AeEVFOyBGx1kW4Vf97uaYgvtD1Jl9w15fKcPUmX3DXl8pyinJ8qQwS_eP-aI3wWqVjKhEAbwmcYKt6xn06mBS9Hk&_nc_ohc=amsv5JwgEEwQ7kNvwFGclcI&_nc_oc=AdnldJsDZyGRjD-0FgsGA2uP8gJ5iCpaFaeHJ4wLrPW8POpkxlDLgEVSSyVLOugoaZQ&_nc_zt=23&_nc_ht=scontent.fdac7-1.fna&_nc_gid=eVVF7FcHldiKtLyiPfS6Kw&oh=00_AfuRMHUShPSgpYBCLOObVLI843siRGNlTDx_mBSLQWWS2w&oe=69A7ABCD"
                        alt="News Image">
                    <div class="card-content">
                        <span class="date"><i class="far fa-calendar-alt"></i> ১০/১২/২০২৪</span>
                        <h3>শিক্ষা বৃত্তি প্রদান</h3>
                        <p>৫০ জন মেধাবী ছাত্র-ছাত্রীদের মাঝে বৃত্তি প্রদান করা হয়েছে।</p>
                        <a href="#">আরও পড়ুন <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="view-all">
                <a href="#" class="btn btn-animate">সব খবর দেখুন <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle-tag">সাম্প্রতিক মতামত</span>
                <pre></pre>
                <h2 class="section-main-title">মতামত</h2>
                <p class="section-description">আমাদের সেবাগ্রহীতাদের কথা</p>
            </div>

            <div class="testimonial-wrapper">
                <!-- Card 1 -->
                <div class="testimonial-card">
                    <div class="quote-icon">“</div>
                    <div class="profile">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                        <div>
                            <h4>আব্দুল মালেক</h4>
                            <span>বাউড়িয়া</span>
                        </div>
                    </div>
                    <div class="rating">★★★★★</div>
                    <p>তাদের সহযোগিতায় আমার মেয়ের বিয়ে দিতে পেরেছি। আল্লাহ তাদের ভালো করুন।</p>
                </div>

                <!-- Card 2 -->
                <div class="testimonial-card">
                    <div class="quote-icon">“</div>
                    <div class="profile">
                        <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="">
                        <div>
                            <h4>সালমা খাতুন</h4>
                            <span>নালডাঙা</span>
                        </div>
                    </div>
                    <div class="rating">★★★★★</div>
                    <p>সেলাই মেশিন পেয়ে আমি এখন নিজের উপার্জন করছি।</p>
                </div>

                <!-- Card 3 -->
                <div class="testimonial-card">
                    <div class="quote-icon">“</div>
                    <div class="profile">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="">
                        <div>
                            <h4>রফিক উদ্দিন</h4>
                            <span>মধুপুর</span>
                        </div>
                    </div>
                    <div class="rating">★★★★☆</div>
                    <p>তাদের স্বাস্থ্য ক্যাম্পের সেবা খুবই মানবিক।</p>
                </div>
            </div>
            <div class="section-divider"></div>
        </div>
    </section>

    <!-- Donation Section -->
    <section class="donation-section" id="সহায়তা-করুন">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle-tag">আপনার সহযোগিতা</span>
                <pre></pre>
                <h2 class="section-main-title">দান করুন</h2>
                <p class="section-description">আপনার সামান্য সহযোগিতায় বদলে যেতে পারে একটি জীবন</p>
            </div>

            <div class="donation-container">
                <!-- Left Side -->
                <div class="donation-left">
                    <h2>আপনার দান <span>জীবন বাঁচাতে পারে</span></h2>
                    <p>
                        আপনার সামান্য সহযোগিতায় একজন শিক্ষার্থীর পড়াশোনা, একজন রোগীর চিকিৎসা
                        বা একটি পরিবারের মুখে হাসি ফোটাতে পারে।
                    </p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> যাকাত</li>
                        <li><i class="fas fa-check-circle"></i> সদকা</li>
                        <li><i class="fas fa-check-circle"></i> সাধারণ দান</li>
                        <li><i class="fas fa-check-circle"></i> কর্পোরেট অনুদান</li>
                    </ul>
                </div>

                <!-- Right Side -->
                <div class="donation-right">
                    <h3>ডোনেশন ডিটেইলস</h3>
                    <div class="payment-box">
                        <div class="payment-item">
                            <h4><i class="fas fa-mobile-alt"></i> Bkash</h4>
                            <p>01706940942</p>
                        </div>
                        <div class="payment-item">
                            <h4><i class="fas fa-rocket"></i> Rocket</h4>
                            <p>01706940942</p>
                        </div>
                        <div class="payment-item">
                            <h4><i class="fas fa-credit-card"></i> Nagad</h4>
                            <p>01706940942</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle-tag">সচরাচর জিজ্ঞাসা</span>
                <pre></pre>
                <h2 class="section-main-title">জিজ্ঞাসা ও উত্তর</h2>
                <p class="section-description">আপনার মনে প্রশ্ন? উত্তর নিচে দেওয়া হলো</p>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>আমি কিভাবে সদস্য হতে পারি?</span>
                    <span class="arrow">&#9660;</span>
                </div>
                <div class="faq-answer">
                    আমাদের অফিসে এসে অথবা অনলাইনে ফর্ম পূরণ করে সদস্য হওয়া যায়।
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>আপনারা কি যাকাত গ্রহণ করেন?</span>
                    <span class="arrow">&#9660;</span>
                </div>
                <div class="faq-answer">
                    হ্যাঁ, আমরা যাকাত গ্রহণ করি এবং নির্ধারিত খাতে বিতরণ করি।
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>স্বেচ্ছাসেবক হিসেবে কাজ করতে চাই, কী করব?</span>
                    <span class="arrow">&#9660;</span>
                </div>
                <div class="faq-answer">
                    স্বেচ্ছাসেবক হিসেবে যুক্ত হতে আমাদের ওয়েবসাইটে রেজিস্ট্রেশন করুন।
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>আপনাদের কার্যক্রম কোন এলাকায় সীমাবদ্ধ?</span>
                    <span class="arrow">&#9660;</span>
                </div>
                <div class="faq-answer">
                    আমাদের কার্যক্রম সারা বাংলাদেশ জুড়ে পরিচালিত হয়।
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>ডোনেশন কি ট্যাক্স মুক্ত?</span>
                    <span class="arrow">&#9660;</span>
                </div>
                <div class="faq-answer">
                    হ্যাঁ, নির্দিষ্ট শর্ত পূরণ সাপেক্ষে ডোনেশন ট্যাক্স মুক্ত।
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>আমি কি নির্দিষ্ট কোনো প্রজেক্টে দান করতে পারি?</span>
                    <span class="arrow">&#9660;</span>
                </div>
                <div class="faq-answer">
                    হ্যাঁ, আপনি চাইলে নির্দিষ্ট কোনো প্রজেক্ট বেছে নিয়ে দান করতে পারবেন।
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section-13" id="যোগাযোগ">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle-tag">যোগাযোগের তথ্য</span>
                <pre></pre>
                <h2 class="section-main-title">যোগাযোগ</h2>
                <p class="section-description">যেকোনো প্রয়োজনে আমাদের সাথে যোগাযোগ করুন</p>
            </div>

            <div class="contact-wrapper">
                <!-- Left -->
                <div class="glass-card contact-info">
                    <h3>যোগাযোগের তথ্য</h3>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>ঝাউগড়া কল্যাণ সংগঠন, জামালপুর, বাংলাদেশ</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>+880 1706-940942</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <span>sheikh15-3700@diu.edu.bd</span>
                    </div>
                </div>

                <!-- Right -->
                <div class="glass-card contact-form">
                    <h3>বার্তা পাঠান</h3>
                    <form>
                        <div class="input-group">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="আপনার নাম" required>
                        </div>
                        <div class="input-group">
                            <i class="fas fa-phone"></i>
                            <input type="tel" placeholder="ফোন নম্বর" required>
                        </div>
                        <div class="input-group">
                            <i class="fas fa-envelope"></i>
                            <input type="email" placeholder="ইমেইল ঠিকানা" required>
                        </div>
                        <div class="input-group">
                            <i class="fas fa-comment"></i>
                            <textarea placeholder="আপনার বার্তা লিখুন..." required></textarea>
                        </div>
                        <button type="submit">বার্তা পাঠান <i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>

            <!-- Google Map -->
            <div class="map">
                <iframe src="https://www.google.com/maps?q=23.8103,90.4125&hl=bn&z=14&output=embed" allowfullscreen
                    loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- Developer/Designer Identity Section -->
    <section class="developer-identity-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle-tag">ডেভেলপার ও ডিজাইনার</span>
                <pre></pre>
                <h2 class="section-main-title">প্রযুক্তি সহযোগিতায়</h2>
                <p class="section-description">ওয়েব অ্যাপ্লিকেশন ডিজাইন ও ডেভেলপমেন্ট</p>
            </div>

            <div class="developer-identity-wrapper">
                <!-- Left Side - Image Card -->
                <div class="developer-image-card reveal-left">
                    <div class="developer-image-wrapper">
                        <img src="https://scontent.fdac7-1.fna.fbcdn.net/v/t39.30808-6/561659522_3695781134051775_8011078114531792308_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=1d70fc&_nc_eui2=AeGYC4gW1qbwgKfqDICD1r1MaeCP85FCpQBp4I_zkUKlAIu0DnP9rHy2DHyttjVTuO6SDNkPbGYywrLmWdxpks4n&_nc_ohc=3eg5nxRfRQEQ7kNvwHefF49&_nc_oc=AdkjqK_fHa3NkIAcI5oNzPkYrbjccRk6mByxh6GYTa8uA9cjarqYgHvNgmdgJMLQ5Hk&_nc_zt=23&_nc_ht=scontent.fdac7-1.fna&_nc_gid=4pF3YU73CzGC4rR4cyNPfw&_nc_ss=8&oh=00_AfuicoI9EDNRauFgCNK665hkSYXYsue4OFZXwz2E4YWgDA&oe=69A83C37"
                            alt="শেখ ফরিদ আহমেদ শান্ত" class="developer-image">
                        <div class="developer-image-overlay">
                            <div class="developer-social-links">
                                <a href="https://github.com/SanviRahman" class="social-link"><i
                                        class="fab fa-github"></i></a>
                                <a href="https://www.linkedin.com/in/sheikh-forid-ahmed-shanto-03919424a/"
                                    class="social-link"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.facebook.com/sheikhshanto.201/" class="social-link"><i
                                        class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="developer-quote">
                        <i class="fas fa-quote-left"></i>
                        <p>প্রযুক্তির মাধ্যমে সমাজের সেবা করা আমার লক্ষ্য। প্রতিটি লাইন কোড যেন বদলে দিতে পারে একটি
                            জীবন।</p>
                    </div>
                </div>

                <!-- Right Side - Identity Details -->
                <div class="developer-details-card reveal-right">
                    <h2 class="developer-name">শেখ ফরিদ আহমেদ শান্ত</h2>
                    <p class="developer-title">Software Engineer</p>
                    <p class="developer-company">SOFT-ITBD</p>

                    <div class="developer-bio">
                        <p>
                            শেখ ফরিদ আহমেদ শান্ত একজন পেশাদার সফটওয়্যার ইঞ্জিনিয়ার ও ওয়েব ডেভেলপার।
                            তিনি ড্যাফোডিল ইন্টারন্যাশনাল ইউনিভার্সিটি থেকে কম্পিউটার সায়েন্স অ্যান্ড ইঞ্জিনিয়ারিং-এ
                            স্নাতক ডিগ্রি অর্জন করেছেন। বর্তমানে তিনি SOFT-ITBD-তে সফটওয়্যার ইঞ্জিনিয়ার হিসেবে
                            কর্মরত আছেন।
                        </p>
                        <p>
                            তার বিশেষ দক্ষতার মধ্যে রয়েছে ওয়েব অ্যাপ্লিকেশন ডেভেলপমেন্ট, UI/UX ডিজাইন,
                            এবং ফুল-স্ট্যাক ডেভেলপমেন্ট। তিনি বিশ্বাস করেন, প্রযুক্তির মাধ্যমে সমাজের
                            বিভিন্ন সমস্যার সমাধান সম্ভব।
                        </p>
                    </div>

                    <div class="developer-info-grid">
                        <!-- Education -->
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="info-content">
                                <h4>শিক্ষা</h4>
                                <p>BSc in CSE</p>
                                <p style="font-size: 0.9rem; color: #10b981;">Daffodil International University</p>
                            </div>
                        </div>

                        <!-- Permanent Address -->
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <h4>স্থায়ী ঠিকানা</h4>
                                <p>ঝাউগড়া, জামালপুর</p>
                                <p style="font-size: 0.9rem; color: #f59e0b;">বাংলাদেশ</p>
                            </div>
                        </div>

                        <!-- Present Address -->
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="info-content">
                                <h4>বর্তমান ঠিকানা</h4>
                                <p>ঢাকা, বাংলাদেশ</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h4>ইমেইল</h4>
                                <p>sheikh15-3700@diu.edu.bd</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="info-content">
                                <h4>মোবাইল</h4>
                                <p>+880 1706-940942</p>
                            </div>
                        </div>

                        <!-- Company -->
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div class="info-content">
                                <h4>বর্তমান কর্মস্থল</h4>
                                <p>SOFT-ITBD</p>
                            </div>
                        </div>
                    </div>

                    <!-- Technical Skills -->
                    <div class="developer-skills">
                        <h3>প্রযুক্তিগত দক্ষতা</h3>
                        <div class="skills-tags">
                            <span class="skill-tag">HTML5/CSS3</span>
                            <span class="skill-tag">C & C++</span>
                            <span class="skill-tag">JavaScript</span>
                            <span class="skill-tag">Python</span>
                            <span class="skill-tag">Django</span>
                            <span class="skill-tag">PHP</span>
                            <span class="skill-tag">Laravel</span>
                            <span class="skill-tag">MySQL</span>
                            <span class="skill-tag">Git & GitHub</span>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="developer-cta">
                        <a href="Message SFA Shanto on WhatsApp. https://wa.me/message/ABMBRACOIP5WL1"
                            class="developer-contact-btn">
                            <i class="fas fa-envelope"></i>
                            যোগাযোগ করুন
                        </a>
                        <a href="https://sfashanto.netlify.app/" class="developer-portfolio-btn">
                            <i class="fas fa-globe"></i>
                            পোর্টফোলিও
                        </a>
                    </div>
                </div>
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
    const duration = 2000;
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

// Scroll Reveal Animation
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
revealOnScroll();

// Activities Slider Logic
const slider = document.querySelector('.activities-slider');
const cards = document.querySelectorAll('.activity-card');
const dotsContainer = document.querySelector('.slider-dots');
let currentIndex = 0;
let cardWidth = cards[0]?.offsetWidth + 32 || 0;
let isAutoScrolling = true;

// Generate Dots
if (cards.length > 0 && dotsContainer) {
    cards.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => {
            goToSlide(index);
            isAutoScrolling = false;
            setTimeout(() => isAutoScrolling = true, 5000);
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

    setInterval(() => {
        if (isAutoScrolling) {
            nextSlide();
        }
    }, 3000);

    window.addEventListener('resize', () => {
        cardWidth = cards[0].offsetWidth + 32;
        goToSlide(currentIndex);
    });

    updateActiveClasses(0);
}

// Scroll to Top Button
const scrollBtn = document.getElementById("scrollToTop");
window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
        scrollBtn.classList.add("show");
    } else {
        scrollBtn.classList.remove("show");
    }
});

scrollBtn.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

// Success Stories Carousel
// Success Stories Carousel Logic - ফিক্সড ভার্সন
document.addEventListener('DOMContentLoaded', function() {
    const successCarousel = document.getElementById('successCarousel');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const successCards = document.querySelectorAll('.story-card');

    if (!successCarousel || !prevBtn || !nextBtn || successCards.length === 0) {
        console.log('Carousel elements not found');
        return;
    }

    let currentIndex = 0;
    const totalCards = successCards.length;

    // কার্ডের width ক্যালকুলেট করার ফাংশন
    const getCardWidth = () => {
        if (window.innerWidth < 768) {
            // মোবাইলে
            return successCards[0].offsetWidth + 16; // gap 16px
        } else {
            // ডেস্কটপে
            return successCards[0].offsetWidth + 40; // gap 40px
        }
    };

    // ক্যারোসেল আপডেট করার ফাংশন
    const updateCarousel = () => {
        const cardWidth = getCardWidth();

        if (window.innerWidth < 768) {
            // মোবাইলে scrollLeft ব্যবহার
            successCarousel.scrollTo({
                left: currentIndex * cardWidth,
                behavior: 'smooth'
            });
        } else {
            // ডেস্কটপে transform ব্যবহার
            successCarousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
        }

        console.log('Current Index:', currentIndex); // ডিবাগging
    };

    // নেক্সট বাটন ক্লিক
    nextBtn.addEventListener('click', () => {
        if (currentIndex < totalCards - 1) {
            currentIndex++;
            updateCarousel();
        } else {
            // লুপ করতে চাইলে (শেষ থেকে শুরুতে)
            // currentIndex = 0;
            // updateCarousel();

            // অথবা alert দেখাতে
            console.log('Last card reached');
        }
    });

    // প্রিভ বাটন ক্লিক
    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        } else {
            console.log('First card reached');
        }
    });

    // রেসাইজ ইভেন্ট
    window.addEventListener('resize', () => {
        // রেসাইজের পর current index রিসেট করা
        if (window.innerWidth >= 768) {
            // ডেস্কটপে transform ব্যবহার
            const cardWidth = getCardWidth();
            successCarousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
            successCarousel.style.scrollBehavior = 'auto';
        } else {
            // মোবাইলে scroll behavior
            successCarousel.style.transform = 'none';
            successCarousel.style.scrollBehavior = 'smooth';
            const cardWidth = getCardWidth();
            successCarousel.scrollLeft = currentIndex * cardWidth;
        }
    });

    // টাচ ইভেন্টের জন্য (মোবাইল)
    let touchStartX = 0;
    let touchEndX = 0;

    successCarousel.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, {
        passive: true
    });

    successCarousel.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, {
        passive: true
    });

    const handleSwipe = () => {
        const swipeThreshold = 50;
        if (touchEndX < touchStartX - swipeThreshold) {
            // সোয়াইপ Left - Next
            if (currentIndex < totalCards - 1) {
                currentIndex++;
                updateCarousel();
            }
        }
        if (touchEndX > touchStartX + swipeThreshold) {
            // সোয়াইপ Right - Prev
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        }
    };

    // স্ক্রলের পর current index আপডেট করা (মোবাইলের জন্য)
    let scrollTimeout;
    successCarousel.addEventListener('scroll', () => {
        if (window.innerWidth < 768) {
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(() => {
                const cardWidth = getCardWidth();
                const newIndex = Math.round(successCarousel.scrollLeft / cardWidth);
                if (newIndex !== currentIndex && newIndex >= 0 && newIndex < totalCards) {
                    currentIndex = newIndex;
                    console.log('Scroll updated index:', currentIndex);
                }
            }, 100);
        }
    });

    // ইনিশিয়াল আপডেট
    updateCarousel();
});
// Timeline Animation
const timelineItems = document.querySelectorAll('.timeline-item');

function showTimelineOnScroll() {
    const triggerBottom = window.innerHeight * 0.85;
    timelineItems.forEach(item => {
        const boxTop = item.getBoundingClientRect().top;
        if (boxTop < triggerBottom) {
            item.classList.add('show');
        }
    });
}
window.addEventListener('scroll', showTimelineOnScroll);
showTimelineOnScroll();

// FAQ Accordion
const faqItems = document.querySelectorAll(".faq-item");
faqItems.forEach(item => {
    item.addEventListener("click", () => {
        faqItems.forEach(i => {
            if (i !== item) i.classList.remove("active");
        });
        item.classList.toggle("active");
    });
});

// Glass Card Animation
const glassCards = document.querySelectorAll('.glass-card, .map');
window.addEventListener('scroll', () => {
    glassCards.forEach(el => {
        const position = el.getBoundingClientRect().top;
        const screen = window.innerHeight;
        if (position < screen - 100) {
            el.classList.add('active');
        }
    });
});
</script>
<!-- Animation Script -->
<script>
window.addEventListener('DOMContentLoaded', function() {
    const reveals = document.querySelectorAll('.reveal-left, .reveal-right');

    function checkReveal() {
        const windowHeight = window.innerHeight;
        const revealPoint = 150;

        reveals.forEach(element => {
            const revealTop = element.getBoundingClientRect().top;

            if (revealTop < windowHeight - revealPoint) {
                element.classList.add('reveal-active');
            }
        });
    }

    checkReveal();
    window.addEventListener('scroll', checkReveal);
});
</script>
@endsection

@push('styles')
<style>
/* ============== GLOBAL STYLES ============== */
:root {
    --primary-color: #10b981;
    --secondary-color: #f59e0b;
    --dark-bg: #0f172a;
    --text-white: #ffffff;
    --text-muted: #cbd5e1;
    --nav-bg: rgba(15, 23, 42, 0.98);
    --nav-bg-scrolled: rgba(15, 23, 42, 0.95);
    --gradient-1: linear-gradient(135deg, #10b981, #f59e0b);
    --gradient-2: linear-gradient(90deg, #166534, #10b981, #166534);
    --shadow-sm: 0 4px 15px rgba(0, 0, 0, 0.3);
    --shadow-md: 0 8px 25px rgba(0, 0, 0, 0.4);
    --shadow-lg: 0 15px 40px rgba(0, 0, 0, 0.5);
    --shadow-hover: 0 20px 45px rgba(16, 185, 129, 0.2);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Hind Siliguri', sans-serif;
    overflow-x: hidden;
    background: #0d0d0d;
    color: var(--text-white);
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    width: 100%;
}

/* ============== SECTION HEADERS ============== */
.section-header {
    text-align: center;
    margin: 0 auto 60px;
    max-width: 800px;
    padding: 0 20px;
}

.section-subtitle-tag {
    display: inline-block;
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary-color);
    background: rgba(16, 185, 129, 0.1);
    padding: 8px 20px;
    border-radius: 40px;
    margin-bottom: 20px;
    border: 1px solid rgba(16, 185, 129, 0.3);
    text-transform: uppercase;
    letter-spacing: 1px;
}

.section-main-title {
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 700;
    margin-bottom: 20px;
    color: var(--text-white);
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
    background: var(--secondary-color);
    border-radius: 2px;
}

.section-description {
    font-size: clamp(1rem, 2vw, 1.2rem);
    color: var(--text-muted);
    max-width: 600px;
    margin: 25px auto 0;
    line-height: 1.6;
}

/* ============== BUTTONS ============== */
.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.8rem 2rem;
    border-radius: 40px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    border: none;
    position: relative;
    overflow: hidden;
    min-width: 160px;
}

.btn::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.btn:hover::before {
    width: 300px;
    height: 300px;
}

.btn-primary {
    background: var(--gradient-2);
    color: var(--text-white);
    box-shadow: 0 4px 15px rgba(22, 101, 52, 0.3);
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
}

.btn-secondary {
    background: transparent;
    color: var(--secondary-color);
    border: 2px solid var(--secondary-color);
}

.btn-secondary:hover {
    background: var(--secondary-color);
    color: var(--text-white);
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(245, 158, 11, 0.3);
}

.learn-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    padding: 12px 30px;
    border: 2px solid var(--primary-color);
    border-radius: 40px;
    transition: all 0.3s ease;
}

.learn-more-btn:hover {
    background: var(--primary-color);
    color: var(--text-white);
    transform: translateX(5px);
}

.learn-more-btn i {
    transition: transform 0.3s ease;
}

.learn-more-btn:hover i {
    transform: translateX(8px);
}

/* ============== HERO SECTION ============== */
.hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url('https://scontent.fdac7-1.fna.fbcdn.net/v/t39.30808-6/540337865_3507613556041612_9101768104763696279_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=c7cdda&_nc_eui2=AeFM_EavUZrXbGtsj-onM9T4AkFxXIX1np8CQXFchfWenxozymaKhW6QyZwksdDVG9IeoKrh7xR87o0cg8W11u2Z&_nc_ohc=cjFeeg1-6sYQ7kNvwEqtNCl&_nc_oc=AdkDoFMlres1jTD5_TXfanoKio26ResaxpxxpyH1-FL-QzUDUyY1wegOcZoB6q-e2NQ&_nc_zt=23&_nc_ht=scontent.fdac7-1.fna&_nc_gid=zLM6HlWelpSRrRsohKUEQg&oh=00_AfsbgLkrqDtPDxzTKrPrVef6nAoua5fiVEzD58X42lENBw&oe=69A785DA');
    background-size: cover;
    background-position: center;
    position: relative;
    text-align: center;
    padding: 100px 20px;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.95));
}

.hero-content {
    position: relative;
    z-index: 2;
    max-width: 900px;
    margin: 0 auto;
    animation: fadeInUp 1s ease;
}

.established-badge {
    display: inline-block;
    background: transparent;
    color: var(--secondary-color);
    padding: 8px 24px;
    border-radius: 40px;
    font-size: 1rem;
    border: 2px solid var(--secondary-color);
    margin-bottom: 30px;
    font-weight: 600;
}

.hero-title {
    font-size: clamp(2.5rem, 8vw, 6rem);
    font-weight: 800;
    margin-bottom: 20px;
    background: linear-gradient(135deg, #fff, var(--primary-color), var(--secondary-color));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: shine 4s linear infinite;
}

.hero-tagline {
    font-size: clamp(1.2rem, 3vw, 2.2rem);
    margin-bottom: 40px;
    color: var(--text-muted);
    font-weight: 500;
}

.hero-btns {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

/* ============== STATISTICS SECTION ============== */
.stats {
    background: #1a1a1a;
    padding: 80px 0;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin-top: 40px;
}

.stat-card {
    background: #222;
    padding: 40px 20px;
    border-radius: 16px;
    text-align: center;
    border: 1px solid #333;
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-10px);
    border-color: var(--primary-color);
    box-shadow: var(--shadow-lg);
}

.stat-icon {
    width: 70px;
    height: 70px;
    background: rgba(16, 185, 129, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    color: var(--primary-color);
    font-size: 2rem;
    transition: all 0.3s ease;
}

.stat-card:hover .stat-icon {
    background: var(--primary-color);
    color: var(--text-white);
    transform: rotateY(360deg);
}

.stat-number {
    font-size: clamp(2rem, 4vw, 2.5rem);
    font-weight: 700;
    margin-bottom: 10px;
    color: var(--text-white);
}

.stat-label {
    color: var(--text-muted);
    font-size: 1rem;
}

/* ============== ABOUT SECTION ============== */
.about-section {
    background: #121212;
    padding: 80px 0;
}

.about-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 50px;
    align-items: center;
}

.about-title {
    font-size: clamp(2rem, 4vw, 3rem);
    margin-bottom: 30px;
}

.about-title span {
    color: var(--secondary-color);
}

.about-desc {
    color: var(--text-muted);
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 20px;
}

.founder-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    padding: 20px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    gap: 20px;
    margin: 30px 0;
    max-width: 400px;
}

.founder-img img {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--primary-color);
}

.founder-info h4 {
    font-size: 1.2rem;
    margin-bottom: 5px;
}

.founder-info p {
    color: var(--secondary-color);
    font-size: 0.9rem;
}

.mission-vision {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.info-card {
    padding: 40px;
    border-radius: 16px;
    transition: all 0.3s ease;
}

.mission-card {
    background: rgba(16, 185, 129, 0.05);
}

.mission-card:hover {
    background: rgba(16, 185, 129, 0.08);
    transform: translateX(-10px);
}

.vision-card {
    background: rgba(245, 158, 11, 0.05);
}

.vision-card:hover {
    background: rgba(245, 158, 11, 0.08);
    transform: translateX(-10px);
}

.info-icon {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 20px;
}

.mission-card .info-icon {
    background: rgba(16, 185, 129, 0.1);
    color: var(--primary-color);
}

.vision-card .info-icon {
    background: rgba(245, 158, 11, 0.1);
    color: var(--secondary-color);
}

.info-card h3 {
    font-size: 1.8rem;
    margin-bottom: 15px;
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

/* ============== ACTIVITIES SECTION ============== */
.activities-section {
    background: #0f172a;
    padding: 80px 0;
}

.activities-slider-container {
    position: relative;
    overflow: hidden;
    padding: 20px 0 60px;
}

.activities-slider {
    display: flex;
    gap: 30px;
    transition: transform 0.5s ease;
}

.activity-card {
    min-width: 350px;
    background: #1e293b;
    border-radius: 16px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.05);
    transition: all 0.3s ease;
}

.activity-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-lg);
    border-color: rgba(16, 185, 129, 0.3);
}

.card-img {
    position: relative;
    height: 220px;
    overflow: hidden;
}

.card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.activity-card:hover .card-img img {
    transform: scale(1.1);
}

.card-tag {
    position: absolute;
    bottom: 15px;
    left: 15px;
    padding: 6px 16px;
    border-radius: 30px;
    font-size: 0.8rem;
    font-weight: 600;
    background: var(--secondary-color);
    color: var(--text-white);
    z-index: 2;
}

.card-body {
    padding: 25px;
}

.card-body h3 {
    font-size: 1.4rem;
    margin-bottom: 12px;
    color: var(--text-white);
}

.card-body p {
    color: var(--text-muted);
    font-size: 0.95rem;
    margin-bottom: 20px;
    line-height: 1.6;
}

.card-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--text-muted);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.card-link:hover {
    color: var(--primary-color);
}

.card-link i {
    transition: transform 0.3s ease;
}

.card-link:hover i {
    transform: translateX(5px);
}

.slider-dots {
    display: flex;
    justify-content: center;
    gap: 12px;
    margin-top: 30px;
}

.dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #334155;
    cursor: pointer;
    transition: all 0.3s ease;
}

.dot.active {
    background: var(--secondary-color);
    width: 30px;
    border-radius: 10px;
}

/* ============== SUCCESS STORIES ============== */
/* .success-stories {
    background: #1a1a1a;
    padding: 80px 0;
}

.success-carousel-container {
    position: relative;
    overflow: hidden;
    padding: 20px 0;
}

.success-carousel {
    display: flex;
    gap: 30px;
    transition: transform 0.6s ease;
} */

/* Success Stories Section (5th Section) Styles */
.success-stories {
    background-color: #1a1a1a;
    padding: 80px 0;
    color: white;
    overflow: hidden;
}

.success-carousel-container {
    position: relative;
    width: 100%;
    margin-top: 40px;
    padding: 20px 0;
}

.success-carousel {
    display: flex;
    gap: 2.5rem;
    transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    scroll-behavior: smooth;
    will-change: transform;
}

/* ডেস্কটপে transform ব্যবহার */
@media (min-width: 768px) {
    .success-carousel {
        transform: translateX(0);
    }
}

/* মোবাইলে scroll ব্যবহার */
@media (max-width: 767px) {
    .success-carousel {
        gap: 1.5rem;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        /* Firefox */
        -ms-overflow-style: none;
        /* IE/Edge */
        transform: none !important;
        /* transform বন্ধ */
    }

    .success-carousel::-webkit-scrollbar {
        display: none;
        /* Chrome/Safari */
    }

    .story-card {
        scroll-snap-align: start;
        flex-shrink: 0;
        width: calc(100vw - 60px);
        /* মোবাইলে পুরো width */
    }
}

.story-card {
    min-width: calc(100% - 0px);
    background-color: #222;
    border-radius: 15px;
    display: flex;
    overflow: hidden;
    border: 1px solid #333;
    transition: all 0.4s ease;
    flex-shrink: 0;
}

/* ডেস্কটপে hover effect */
@media (min-width: 768px) {
    .story-card {
        min-width: 100%;
    }

    .story-card:hover {
        border-color: var(--primary-color);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    }
}

.story-images {
    display: flex;
    width: 45%;
    position: relative;
}

@media (max-width: 767px) {
    .story-images {
        width: 100%;
        height: 250px;
    }

    .image-box {
        height: 250px;
    }
}

.image-box {
    width: 50%;
    position: relative;
    height: 350px;
    overflow: hidden;
}

.image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.story-card:hover .image-box img {
    transform: scale(1.1);
}

.image-box.before img {
    filter: grayscale(100%);
}

.img-tag {
    position: absolute;
    top: 15px;
    padding: 6px 16px;
    border-radius: 6px;
    font-size: 0.85rem;
    font-weight: 600;
    color: white;
    z-index: 5;
}

.before .img-tag {
    background-color: rgba(0, 0, 0, 0.7);
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

@media (max-width: 767px) {
    .story-content {
        width: 100%;
        padding: 1.8rem;
    }
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
    display: flex;
    align-items: center;
    gap: 8px;
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
    gap: 12px;
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
    margin-top: 40px;
}

.nav-btn {
    background-color: #222;
    border: 2px solid #333;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    font-size: 1.2rem;
    position: relative;
    overflow: hidden;
    z-index: 10;
}

.nav-btn:hover {
    border-color: var(--primary-color);
    color: var(--primary-color);
    transform: scale(1.1);
    box-shadow: 0 0 20px rgba(16, 185, 129, 0.3);
}

.nav-btn:active {
    transform: scale(0.95);
}

/* মোবাইলে বাটন ছোট */
@media (max-width: 480px) {
    .nav-btn {
        width: 45px;
        height: 45px;
        font-size: 1rem;
    }
}

/* ডট ইন্ডিকেটর (অপশনাল) */
.carousel-dots {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 20px;
}

.carousel-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #334155;
    cursor: pointer;
    transition: all 0.3s ease;
}

.carousel-dot.active {
    background: var(--secondary-color);
    width: 25px;
    border-radius: 12px;
}


.story-card {
    min-width: 100%;
    background: #222;
    border-radius: 20px;
    display: flex;
    overflow: hidden;
    border: 1px solid #333;
    transition: all 0.3s ease;
}

.story-card:hover {
    border-color: var(--primary-color);
    box-shadow: var(--shadow-lg);
}

.story-images {
    display: flex;
    width: 45%;
}

.image-box {
    width: 50%;
    position: relative;
    height: 350px;
    overflow: hidden;
}

.image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.story-card:hover .image-box img {
    transform: scale(1.1);
}

.image-box.before img {
    filter: grayscale(100%);
}

.img-tag {
    position: absolute;
    top: 15px;
    padding: 6px 16px;
    border-radius: 6px;
    font-size: 0.8rem;
    font-weight: 600;
    z-index: 2;
}

.before .img-tag {
    background: rgba(0, 0, 0, 0.7);
    left: 15px;
    color: var(--text-white);
}

.after .img-tag {
    background: var(--primary-color);
    right: 15px;
    color: var(--text-white);
}

.story-content {
    width: 55%;
    padding: 40px;
    display: flex;
    flex-direction: column;
}

.story-name {
    color: var(--primary-color);
    font-size: clamp(1.5rem, 3vw, 1.8rem);
    margin-bottom: 10px;
}

.story-date {
    color: #64748b;
    font-size: 0.9rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.story-text {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #cbd5e1;
    font-style: italic;
    margin-bottom: 25px;
    flex-grow: 1;
}

.story-status {
    display: flex;
    align-items: center;
    gap: 12px;
    color: var(--secondary-color);
    font-weight: 600;
    font-size: 1rem;
}

.carousel-nav {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 30px;
}

.nav-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: #222;
    border: 2px solid #333;
    color: var(--text-white);
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.nav-btn:hover {
    border-color: var(--primary-color);
    color: var(--primary-color);
    transform: scale(1.1);
}

/* ============== GALLERY SECTION ============== */
.events-gallery {
    background: #111213;
    padding: 80px 0;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-top: 40px;
}

.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 16px;
    aspect-ratio: 4/3;
    cursor: pointer;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.gallery-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 20px;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
    color: var(--text-white);
    transform: translateY(100%);
    transition: transform 0.4s ease;
}

.gallery-item:hover .gallery-overlay {
    transform: translateY(0);
}

.gallery-badge {
    display: inline-block;
    padding: 4px 12px;
    background: var(--secondary-color);
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    margin-bottom: 10px;
}

.gallery-title {
    font-size: 1.2rem;
    font-weight: 600;
}

.gallery-actions {
    text-align: center;
    margin-top: 40px;
}

/* ============== TIMELINE SECTION ============== */
.timeline-section {
    background: #0d0d0d;
    padding: 80px 0;
}

.timeline {
    position: relative;
    max-width: 1000px;
    margin: 40px auto 0;
    padding: 20px 0;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 4px;
    height: 100%;
    background: linear-gradient(to bottom, var(--primary-color), var(--secondary-color));
    border-radius: 2px;
}

.timeline-item {
    position: relative;
    width: 50%;
    padding: 20px 40px;
    opacity: 0;
    transform: translateY(60px);
    transition: all 0.8s ease;
}

.timeline-item.show {
    opacity: 1;
    transform: translateY(0);
}

.timeline-item.left {
    left: 0;
    text-align: right;
}

.timeline-item.right {
    left: 50%;
    text-align: left;
}

.timeline-item::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    background: var(--secondary-color);
    border: 4px solid #0d0d0d;
    border-radius: 50%;
    top: 30px;
    box-shadow: 0 0 20px var(--secondary-color);
    z-index: 2;
}

.timeline-item.left::after {
    right: -10px;
}

.timeline-item.right::after {
    left: -10px;
}

.content {
    background: #111827;
    padding: 25px;
    border-radius: 12px;
    border: 1px solid #1f2937;
    transition: all 0.3s ease;
}

.content:hover {
    transform: scale(1.02);
    border-color: var(--primary-color);
    box-shadow: 0 0 30px rgba(16, 185, 129, 0.2);
}

.content h2 {
    color: var(--primary-color);
    font-size: 2rem;
    margin-bottom: 8px;
}

.content h3 {
    font-size: 1.3rem;
    margin-bottom: 10px;
}

.content p {
    color: #9ca3af;
    line-height: 1.6;
}

/* ============== VOLUNTEER SECTION ============== */
.section-8 {
    background: #000;
    padding: 80px 0;
}

.section-8-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    max-width: 1200px;
    margin: 40px auto 0;
}

.section-8-left {
    padding: 40px;
    background: linear-gradient(135deg, #111, #1a1a1a);
    border-radius: 20px;
}

.section-8-left h2 {
    font-size: clamp(2rem, 4vw, 2.5rem);
    margin-bottom: 20px;
    color: var(--text-white);
}

.section-8-left p {
    color: var(--text-muted);
    margin-bottom: 30px;
    line-height: 1.8;
}

.benefits {
    list-style: none;
}

.benefits li {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 15px;
    color: var(--text-white);
    font-size: 1.1rem;
}

.benefits li i {
    color: var(--primary-color);
}

.section-8-right {
    padding: 40px;
    background: #111;
    border-radius: 20px;
    border: 1px solid #222;
}

.form-box h3 {
    font-size: 1.8rem;
    margin-bottom: 10px;
}

.form-subtitle {
    color: var(--text-muted);
    margin-bottom: 30px;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: var(--text-white);
    font-weight: 500;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 12px 16px;
    background: #1a1a1a;
    border: 1px solid #333;
    border-radius: 8px;
    color: var(--text-white);
    font-size: 1rem;
    transition: all 0.3s ease;
}

.form-group input:focus,
.form-group select:focus {
    border-color: var(--primary-color);
    outline: none;
    box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
}

.submit-btn {
    width: 100%;
    padding: 14px;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    border: none;
    border-radius: 8px;
    color: var(--text-white);
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.submit-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(16, 185, 129, 0.3);
}

/* ============== BLOG SECTION ============== */
.news-section {
    background: linear-gradient(135deg, #0f0f0f, #1a1a1a);
    padding: 80px 0;
}

.card-wrapper {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 40px;
}

.news-card {
    background: #1b1b1b;
    border-radius: 16px;
    overflow: hidden;
    border: 1px solid #222;
    transition: all 0.3s ease;
}

.news-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(34, 197, 94, 0.2);
    border-color: var(--primary-color);
}

.news-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.news-card:hover img {
    transform: scale(1.05);
}

.card-content {
    padding: 25px;
}

.date {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--secondary-color);
    font-size: 0.9rem;
    margin-bottom: 12px;
}

.news-card h3 {
    font-size: 1.3rem;
    margin-bottom: 12px;
    transition: color 0.3s ease;
}

.news-card:hover h3 {
    color: var(--primary-color);
}

.news-card p {
    color: var(--text-muted);
    font-size: 0.95rem;
    line-height: 1.7;
    margin-bottom: 20px;
}

.news-card a {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    transition: gap 0.3s ease;
}

.news-card a:hover {
    gap: 12px;
}

.view-all {
    text-align: center;
    margin-top: 50px;
}

.btn-animate {
    padding: 14px 35px;
    background: transparent;
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
    text-decoration: none;
    border-radius: 40px;
    font-size: 1rem;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.btn-animate:hover {
    background: var(--primary-color);
    color: var(--text-white);
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(16, 185, 129, 0.3);
}

/* ============== TESTIMONIAL SECTION ============== */
.testimonial-section {
    background: #0f1117;
    padding: 80px 0;
}

.testimonial-wrapper {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 40px;
}

.testimonial-card {
    background: #111827;
    border-radius: 20px;
    padding: 35px;
    position: relative;
    border: 1px solid #1f2937;
    transition: all 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(249, 115, 22, 0.2);
}

.quote-icon {
    position: absolute;
    top: 20px;
    right: 25px;
    font-size: 5rem;
    color: rgba(34, 197, 94, 0.1);
    font-family: serif;
    line-height: 1;
}

.profile {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
}

.profile img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--primary-color);
}

.profile h4 {
    font-size: 1.2rem;
    margin-bottom: 5px;
}

.profile span {
    font-size: 0.9rem;
    color: var(--text-muted);
}

.rating {
    color: #facc15;
    font-size: 1.2rem;
    margin-bottom: 15px;
}

.testimonial-card p {
    color: #ddd;
    font-size: 1rem;
    line-height: 1.7;
    position: relative;
    z-index: 2;
}

.section-divider {
    width: 100%;
    max-width: 600px;
    height: 4px;
    margin: 60px auto 0;
    background: linear-gradient(to right, transparent, var(--secondary-color), transparent);
    border-radius: 2px;
    position: relative;
}

.section-divider::after {
    content: '';
    position: absolute;
    top: -8px;
    left: 50%;
    transform: translateX(-50%);
    width: 120px;
    height: 20px;
    background: var(--secondary-color);
    filter: blur(15px);
    opacity: 0.5;
}

/* ============== DONATION SECTION ============== */
.donation-section {
    background: #0f1117;
    padding: 80px 0;
}

.donation-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    background: #111827;
    border-radius: 20px;
    overflow: hidden;
    margin-top: 40px;
}

.donation-left {
    padding: 50px;
    background: linear-gradient(135deg, #3a2208, #1a1a1a);
}

.donation-left h2 {
    font-size: clamp(2rem, 4vw, 2.5rem);
    margin-bottom: 20px;
}

.donation-left h2 span {
    color: var(--secondary-color);
    display: block;
    font-size: 1.8rem;
}

.donation-left p {
    color: #ddd;
    margin-bottom: 25px;
    line-height: 1.7;
}

.donation-left ul {
    list-style: none;
}

.donation-left ul li {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
    color: var(--text-white);
}

.donation-left ul li i {
    color: var(--primary-color);
}

.donation-right {
    padding: 50px;
    background: #1f2937;
}

.donation-right h3 {
    font-size: 1.8rem;
    margin-bottom: 30px;
}

.payment-box {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.payment-item {
    background: #111827;
    padding: 20px 25px;
    border-radius: 12px;
    border: 1px solid #2d3748;
    transition: all 0.3s ease;
}

.payment-item:hover {
    border-color: var(--secondary-color);
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(249, 115, 22, 0.2);
}

.payment-item h4 {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
    color: #facc15;
}

.payment-item p {
    font-size: 1.3rem;
    font-weight: 600;
    letter-spacing: 1px;
}

/* ============== FAQ SECTION ============== */
.faq-section {
    background: #000;
    padding: 80px 0;
}

.faq-item {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.faq-item:hover {
    background: rgba(255, 255, 255, 0.02);
}

.faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 1.2rem;
    font-weight: 500;
}

.arrow {
    font-size: 1rem;
    transition: transform 0.3s ease;
}

.faq-item.active .arrow {
    transform: rotate(180deg);
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: all 0.5s ease;
    color: #9ca3af;
    line-height: 1.7;
    padding-right: 30px;
}

.faq-item.active .faq-answer {
    max-height: 200px;
    margin-top: 20px;
}

/* ============== CONTACT SECTION ============== */
.section-13 {
    background: radial-gradient(circle at top left, #111827, #0b1120);
    padding: 80px 0;
}

.contact-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    margin-top: 40px;
}

.glass-card {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    padding: 40px;
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.6s ease;
}

.glass-card.active {
    opacity: 1;
    transform: translateY(0);
}

.glass-card h3 {
    font-size: 1.8rem;
    margin-bottom: 30px;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
    font-size: 1.1rem;
}

.info-item i {
    width: 45px;
    height: 45px;
    background: linear-gradient(135deg, var(--primary-color), #3b82f6);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}

.input-group {
    position: relative;
    margin-bottom: 20px;
}

.input-group i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--primary-color);
    font-size: 1rem;
}

.input-group input,
.input-group textarea {
    width: 100%;
    padding: 15px 15px 15px 45px;
    background: rgba(255, 255, 255, 0.07);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    color: var(--text-white);
    font-size: 1rem;
    transition: all 0.3s ease;
}

.input-group textarea {
    height: 120px;
    resize: none;
    padding-top: 15px;
}

.input-group input:focus,
.input-group textarea:focus {
    border-color: var(--primary-color);
    outline: none;
    box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
}

.contact-form button {
    width: 100%;
    padding: 15px;
    background: linear-gradient(90deg, var(--primary-color), #3b82f6);
    border: none;
    border-radius: 10px;
    color: var(--text-white);
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.contact-form button:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(34, 197, 94, 0.3);
}

.map {
    margin-top: 50px;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.1);
    opacity: 0;
    transform: scale(0.95);
    transition: all 0.6s ease;
}

.map.active {
    opacity: 1;
    transform: scale(1);
}

.map iframe {
    width: 100%;
    height: 400px;
    border: 0;
}

/* ============== SCROLL TO TOP ============== */
.scroll-to-top-btn {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    border: none;
    color: var(--text-white);
    font-size: 1.2rem;
    cursor: pointer;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: all 0.3s ease;
    z-index: 999;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: var(--shadow-md);
}

.scroll-to-top-btn.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.scroll-to-top-btn:hover {
    transform: translateY(-5px) scale(1.1);
    box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4);
}

/* ============== ANIMATIONS ============== */
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

@keyframes shine {
    0% {
        background-position: -200% center;
    }

    100% {
        background-position: 200% center;
    }
}

@keyframes pulseGlow {

    0%,
    100% {
        box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.6);
    }

    70% {
        box-shadow: 0 0 0 15px rgba(16, 185, 129, 0);
    }
}

/* ============== REVEAL ANIMATIONS ============== */
.reveal-left {
    opacity: 0;
    transform: translateX(-50px);
    transition: all 1s ease;
}

.reveal-right {
    opacity: 0;
    transform: translateX(50px);
    transition: all 1s ease;
}

.reveal-up {
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.8s ease;
}

.reveal-active {
    opacity: 1;
    transform: translateX(0) translateY(0);
}

/* ============== RESPONSIVE DESIGN ============== */

/* Extra Large Devices (1200px and up) */
@media (min-width: 1200px) {
    .container {
        max-width: 1200px;
    }
}

/* Large Devices (992px to 1199px) */
@media (max-width: 1199px) {
    .container {
        max-width: 960px;
    }

    .about-grid {
        gap: 30px;
    }
}

/* Medium Devices (768px to 991px) */
@media (max-width: 991px) {
    .container {
        max-width: 720px;
    }

    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .about-grid {
        grid-template-columns: 1fr;
    }

    .gallery-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .card-wrapper {
        grid-template-columns: repeat(2, 1fr);
    }

    .testimonial-wrapper {
        grid-template-columns: repeat(2, 1fr);
    }

    .contact-wrapper {
        grid-template-columns: 1fr;
    }

    .timeline::before {
        left: 30px;
    }

    .timeline-item {
        width: 100%;
        padding-left: 70px;
        padding-right: 20px;
    }

    .timeline-item.left,
    .timeline-item.right {
        left: 0;
        text-align: left;
    }

    .timeline-item::after {
        left: 20px !important;
        right: auto !important;
    }

    .story-card {
        flex-direction: column;
    }

    .story-images,
    .story-content {
        width: 100%;
    }

    .story-images {
        height: 300px;
    }
}

/* Small Devices (576px to 767px) */
@media (max-width: 767px) {
    .container {
        max-width: 540px;
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

    .btn {
        width: 100%;
        max-width: 300px;
    }

    .stats-grid {
        grid-template-columns: 1fr;
    }

    .mission-vision {
        flex-direction: column;
    }

    .activity-card {
        min-width: 280px;
    }

    .gallery-grid {
        grid-template-columns: 1fr;
    }

    .card-wrapper {
        grid-template-columns: 1fr;
    }

    .testimonial-wrapper {
        grid-template-columns: 1fr;
    }

    .donation-container {
        grid-template-columns: 1fr;
    }

    .section-8-container {
        grid-template-columns: 1fr;
    }

    .form-row {
        grid-template-columns: 1fr;
    }

    .story-images {
        height: 250px;
    }

    .story-content {
        padding: 25px;
    }

    .story-name {
        font-size: 1.5rem;
    }

    .story-text {
        font-size: 1rem;
    }
}

/* Extra Small Devices (up to 575px) */
@media (max-width: 575px) {
    .hero-title {
        font-size: 2.2rem;
    }

    .hero-tagline {
        font-size: 1rem;
    }

    .established-badge {
        font-size: 0.9rem;
        padding: 6px 18px;
    }

    .section-main-title {
        font-size: 2rem;
    }

    .section-main-title::after {
        width: 60px;
    }

    .section-description {
        font-size: 1rem;
    }

    .stat-card {
        padding: 30px 15px;
    }

    .about-title {
        font-size: 1.8rem;
    }

    .about-desc {
        font-size: 1rem;
    }

    .founder-card {
        flex-direction: column;
        text-align: center;
    }

    .info-card {
        padding: 25px;
    }

    .info-card h3 {
        font-size: 1.5rem;
    }

    .timeline-item {
        padding-left: 60px;
    }

    .content {
        padding: 20px;
    }

    .content h2 {
        font-size: 1.5rem;
    }

    .content h3 {
        font-size: 1.1rem;
    }

    .content p {
        font-size: 0.95rem;
    }

    .gallery-item {
        aspect-ratio: 16/9;
    }

    .gallery-overlay {
        padding: 15px;
    }

    .gallery-title {
        font-size: 1rem;
    }

    .news-card img {
        height: 180px;
    }

    .card-content {
        padding: 20px;
    }

    .news-card h3 {
        font-size: 1.2rem;
    }

    .testimonial-card {
        padding: 25px;
    }

    .profile {
        flex-direction: column;
        text-align: center;
    }

    .profile h4 {
        font-size: 1.1rem;
    }

    .donation-left,
    .donation-right {
        padding: 30px;
    }

    .donation-left h2 {
        font-size: 1.8rem;
    }

    .donation-left h2 span {
        font-size: 1.4rem;
    }

    .payment-item p {
        font-size: 1.1rem;
    }

    .faq-question {
        font-size: 1rem;
    }

    .glass-card {
        padding: 25px;
    }

    .glass-card h3 {
        font-size: 1.5rem;
    }

    .info-item {
        font-size: 0.95rem;
    }

    .info-item i {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }

    .map iframe {
        height: 250px;
    }

    .scroll-to-top-btn {
        width: 40px;
        height: 40px;
        font-size: 1rem;
        bottom: 20px;
        right: 20px;
    }
}

/* Landscape Mode */
@media (max-height: 500px) and (orientation: landscape) {
    .hero {
        min-height: 120vh;
    }

    .hero-title {
        font-size: 2.5rem;
    }

    .hero-tagline {
        font-size: 1rem;
    }

    .hero-btns {
        flex-direction: row;
    }
}

/* High Resolution Screens */
@media (min-width: 1600px) {
    .container {
        max-width: 1400px;
    }

    .hero-title {
        font-size: 7rem;
    }

    .hero-tagline {
        font-size: 2.5rem;
    }

    .section-main-title {
        font-size: 4rem;
    }

    .about-title {
        font-size: 3.5rem;
    }

    .stat-number {
        font-size: 3rem;
    }

    .activity-card {
        min-width: 400px;
    }
}

/* Print Styles */
@media print {

    .navbar,
    .hero-btns,
    .scroll-to-top-btn,
    .carousel-nav,
    .slider-dots,
    .view-all,
    .gallery-actions,
    .submit-btn,
    .contact-form button,
    .map iframe {
        display: none;
    }

    body {
        background: white;
        color: black;
    }

    .section-main-title {
        color: black;
    }

    .content {
        break-inside: avoid;
    }
}

/* Accessibility */
@media (prefers-reduced-motion: reduce) {
    * {
        animation: none !important;
        transition: none !important;
    }
}

/* Dark Mode Support */
@media (prefers-color-scheme: dark) {
    :root {
        --nav-bg: rgba(10, 15, 30, 0.98);
    }
}

/* Focus Styles */
a:focus-visible,
button:focus-visible,
input:focus-visible,
textarea:focus-visible,
select:focus-visible {
    outline: 2px solid var(--primary-color);
    outline-offset: 2px;
}

/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: #1a1a1a;
}

::-webkit-scrollbar-thumb {
    background: var(--primary-color);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: var(--secondary-color);
}





/* ============== DEVELOPER IDENTITY SECTION ============== */
.developer-identity-section {
    background: linear-gradient(135deg, #0a0c14, #0f1117);
    padding: 100px 0;
    color: white;
    position: relative;
    overflow: hidden;
}

/* Decorative Elements */
.developer-identity-section::before {
    content: '';
    position: absolute;
    top: -100px;
    right: -100px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(16, 185, 129, 0.1), transparent);
    border-radius: 50%;
    z-index: 1;
}

.developer-identity-section::after {
    content: '';
    position: absolute;
    bottom: -100px;
    left: -100px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(245, 158, 11, 0.1), transparent);
    border-radius: 50%;
    z-index: 1;
}

.developer-identity-wrapper {
    display: grid;
    grid-template-columns: 0.6fr 1.4fr;
    /* Changed from 0.9fr 1.1fr to 0.6fr 1.4fr (left side 50% smaller) */
    gap: 50px;
    position: relative;
    z-index: 2;
    margin-top: 40px;
    align-items: start;
    /* Align items to top */
}

/* ===== Left Side - Image Card (Now 50% smaller) ===== */
.developer-image-card {
    background: #111827;
    border-radius: 30px;
    padding: 25px;
    /* Slightly reduced padding */
    border: 1px solid rgba(255, 255, 255, 0.05);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
    transition: all 0.3s ease;
    max-width: 100%;
}

.developer-image-card:hover {
    transform: translateY(-10px);
    border-color: rgba(16, 185, 129, 0.3);
    box-shadow: 0 30px 60px rgba(16, 185, 129, 0.1);
}

.developer-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    margin-bottom: 20px;
    /* Reduced margin */
    aspect-ratio: 1/1.2;
}

.developer-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}

.developer-image-card:hover .developer-image {
    transform: scale(1.05);
}

.developer-image-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
    padding: 15px;
    /* Reduced padding */
    transform: translateY(100%);
    transition: transform 0.4s ease;
}

.developer-image-card:hover .developer-image-overlay {
    transform: translateY(0);
}

.developer-social-links {
    display: flex;
    justify-content: center;
    gap: 12px;
    /* Reduced gap */
}

.container {
    line-height: 1.6;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* ============== SECTION HEADER ============== */
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
    font-size: 3rem;
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



.social-link {
    width: 35px;
    /* Smaller icons */
    height: 35px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1rem;
    /* Smaller font */
    transition: all 0.3s ease;
    text-decoration: none;
    backdrop-filter: blur(5px);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.social-link:hover {
    background: #10b981;
    transform: translateY(-5px) rotate(360deg);
    border-color: transparent;
}

.developer-quote {
    background: rgba(16, 185, 129, 0.05);
    padding: 20px;
    /* Reduced padding */
    border-radius: 15px;
    border-left: 4px solid #10b981;
    position: relative;
}

.developer-quote i {
    color: #10b981;
    font-size: 1.3rem;
    /* Smaller icon */
    opacity: 0.3;
    position: absolute;
    top: 12px;
    left: 12px;
}

.developer-quote p {
    font-size: 0.95rem;
    /* Slightly smaller text */
    line-height: 1.7;
    color: #cbd5e1;
    font-style: italic;
    margin-left: 20px;
    position: relative;
    z-index: 2;
}

/* ===== Right Side - Details Card ===== */
.developer-details-card {
    background: #111827;
    border-radius: 30px;
    padding: 40px;
    border: 1px solid rgba(255, 255, 255, 0.05);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
}

.developer-name {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 10px;
    background: linear-gradient(135deg, #fff, #10b981);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1.2;
}

.developer-title {
    color: #f59e0b;
    font-size: 1.2rem;
    margin-bottom: 10px;
}

.developer-company {
    color: #10b981;
    font-size: 1.1rem;
    margin-bottom: 25px;
    padding-bottom: 25px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    position: relative;
}

.developer-company::after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 80px;
    height: 3px;
    background: #f59e0b;
    border-radius: 2px;
}

.developer-bio {
    margin-bottom: 30px;
}

.developer-bio p {
    color: #cbd5e1;
    line-height: 1.8;
    margin-bottom: 15px;
    font-size: 1rem;
}

/* Info Grid */
.developer-info-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-bottom: 30px;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px;
    background: rgba(255, 255, 255, 0.02);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.05);
    transition: all 0.3s ease;
}

.info-item:hover {
    background: rgba(16, 185, 129, 0.05);
    border-color: rgba(16, 185, 129, 0.2);
    transform: translateX(5px);
}

.info-icon {
    width: 45px;
    height: 45px;
    background: rgba(16, 185, 129, 0.1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.2rem;
    transition: all 0.3s ease;
    flex-shrink: 0;
}

.info-item:hover .info-icon {
    background: #10b981;
    color: white;
    transform: rotate(360deg);
}

.info-content h4 {
    font-size: 0.9rem;
    color: #cbd5e1;
    margin-bottom: 5px;
}

.info-content p {
    font-size: 1rem;
    color: white;
    font-weight: 500;
}

/* Skills Section */
.developer-skills {
    margin-bottom: 30px;
}

.developer-skills h3 {
    font-size: 1.3rem;
    margin-bottom: 15px;
    color: white;
}

.skills-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.skill-tag {
    padding: 8px 18px;
    background: rgba(16, 185, 129, 0.1);
    border: 1px solid rgba(16, 185, 129, 0.2);
    border-radius: 30px;
    font-size: 0.85rem;
    color: #cbd5e1;
    transition: all 0.3s ease;
    cursor: default;
}

.skill-tag:hover {
    background: #10b981;
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
}

/* Call to Action Buttons */
.developer-cta {
    display: flex;
    gap: 15px;
    margin-top: 30px;
}

.developer-contact-btn,
.developer-portfolio-btn {
    flex: 1;
    padding: 14px 20px;
    border-radius: 12px;
    font-size: 1rem;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    cursor: pointer;
}

.developer-contact-btn {
    background: linear-gradient(135deg, #10b981, #f59e0b);
    color: white;
    border: none;
    box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
}

.developer-contact-btn:hover {
    transform: translateY(-5px) scale(1.02);
    box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4);
}

.developer-portfolio-btn {
    background: transparent;
    color: white;
    border: 2px solid #10b981;
}

.developer-portfolio-btn:hover {
    background: #10b981;
    color: white;
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(16, 185, 129, 0.3);
}

/* Animation for reveal */
.reveal-left {
    opacity: 0;
    transform: translateX(-50px);
    transition: all 1s ease;
}

.reveal-right {
    opacity: 0;
    transform: translateX(50px);
    transition: all 1s ease;
}

.reveal-active {
    opacity: 1;
    transform: translateX(0);
}

/* ===== Responsive Design ===== */

@media (max-width: 1199px) {
    .developer-name {
        font-size: 2.2rem;
    }

    .developer-info-grid {
        gap: 15px;
    }
}

@media (max-width: 991px) {
    .developer-identity-wrapper {
        grid-template-columns: 1fr;
        /* Stack on tablet */
        gap: 40px;
    }

    .developer-image-card {
        max-width: 400px;
        /* Smaller max-width on tablet */
        margin: 0 auto;
    }

    .developer-name {
        font-size: 2rem;
        text-align: center;
    }

    .developer-title,
    .developer-company {
        text-align: center;
    }

    .developer-company::after {
        left: 50%;
        transform: translateX(-50%);
    }

    .developer-bio {
        text-align: center;
    }

    .developer-info-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .section-main-title {
        font-size: 2.5rem;
    }
}

@media (max-width: 767px) {
    .developer-identity-section {
        padding: 70px 0;
    }

    .developer-image-card {
        max-width: 350px;
        /* Even smaller on mobile */
    }

    .developer-details-card {
        padding: 30px;
    }

    .developer-name {
        font-size: 1.8rem;
    }

    .developer-info-grid {
        grid-template-columns: 1fr;
        gap: 12px;
    }

    .info-item {
        padding: 12px;
    }

    .skills-tags {
        justify-content: center;
    }

    .developer-cta {
        flex-direction: column;
    }

    .developer-contact-btn,
    .developer-portfolio-btn {
        width: 100%;
    }

    .section-main-title {
        font-size: 2rem;
    }

    .section-description {
        font-size: 1rem;
    }
}

@media (max-width: 575px) {
    .developer-identity-section {
        padding: 50px 0;
    }

    .developer-image-card {
        max-width: 300px;
        /* Even smaller on extra small devices */
    }

    .developer-image-card,
    .developer-details-card {
        padding: 20px;
        border-radius: 20px;
    }

    .developer-name {
        font-size: 1.5rem;
    }

    .developer-title {
        font-size: 1rem;
    }

    .developer-company {
        font-size: 0.95rem;
    }

    .developer-bio p {
        font-size: 0.95rem;
    }

    .info-content h4 {
        font-size: 0.85rem;
    }

    .info-content p {
        font-size: 0.95rem;
    }

    .skill-tag {
        font-size: 0.8rem;
        padding: 6px 14px;
    }

    .developer-quote p {
        font-size: 0.95rem;
    }

    .section-subtitle-tag {
        font-size: 0.9rem;
        padding: 6px 16px;
    }

    .section-main-title {
        font-size: 1.8rem;
    }
}

@media (max-height: 600px) and (orientation: landscape) {
    .developer-identity-wrapper {
        gap: 30px;
    }

    .developer-image-wrapper {
        max-height: 250px;
    }
}

.reveal-left.reveal-active,
.reveal-right.reveal-active {
    opacity: 1;
    transform: translateX(0);
}
</style>
@endpush