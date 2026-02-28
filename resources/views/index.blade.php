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
                <button class="btn btn-primary" style="color: white;"><a href="#ইভেন্ট"
                        style="text-decoration: none; color: white;">আমাদের কাজ জানুন</a>
                </button>

                <button class="btn btn-secondary">
                    <a href="#সহায়তা-করুন" style="text-decoration: none;color: white;">সহায়তা করুন</a>
                </button>
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


    <!-- About Section (3rd Section) -->
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
                        জীবনমান
                        উন্নয়নে কাজ করে যাচ্ছে। আমাদের মূল লক্ষ্য হলো একটি শিক্ষিত, স্বাস্থ্যসম্মত এবং স্বাবলম্বী সমাজ
                        গড়ে
                        তোলা।
                    </p>
                    <p class="about-desc">
                        আমরা বিশ্বাস করি, সম্মিলিত প্রচেষ্টায় যেকোনো অসাধ্য সাধন করা সম্ভব। আমাদের স্বেচ্ছাসেবকদের
                        অক্লান্ত
                        পরিশ্রম এবং দাতাদের উদার সহযোগিতায় আমরা এগিয়ে চলেছি।
                    </p>

                    <div class="founder-card">
                        <div class="founder-img">
                            <img src="https://scontent.fdac7-1.fna.fbcdn.net/v/t39.30808-6/472784840_3609891402635161_2251782403261547896_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=53a332&_nc_eui2=AeEcqa7Y3QGjRS8R2TWwpOVfOLrXNMOqlFQ4utc0w6qUVFtK7-h3fDEo4MOjERO0tyKSqomb0Vdeld19RDI6Hgsk&_nc_ohc=MGJEpZFvaCsQ7kNvwEs5dI6&_nc_oc=AdnZb3tfiNgpGOvM-P1M0XsjoW3e-tEFosYguTAhzFrOCT_OLe8QrcvEv3iWGvecoOE&_nc_zt=23&_nc_ht=scontent.fdac7-1.fna&_nc_gid=ECvn_dTMf2PQi9P-Mm0A_g&_nc_ss=8&oh=00_AfvNYlNVq1ZNoo3XOyRoo4VDGeidwth1R0ev7fz29o-6dw&oe=69A80B30"
                                alt="Founder">
                        </div>
                        <div class="founder-info">
                            <h4>মোঃ ইউসুফ আলী</h4>
                            <p>প্রতিষ্ঠাতা ও সভাপতি</p>
                        </div>
                    </div>

                    <a href="#" class="learn-more-btn">আরও জানুন <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="mission-vision reveal-right" style="cursor: pointer;">
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


    <!-- Activities Section (4th Section) -->
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

                    <!-- Card 5: Food Aid -->
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
    <section class="success-stories" id="ইভেন্ট">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle-tag">সাফল্যের গল্প</span>
                <pre></pre>
                <h2 class="section-main-title">সাফল্যের গল্প</h2>
                <p class="section-description">যাদের জীবন বদলে গেছে আমাদের প্রচেষ্টায়</p>
            </div>

            <div class="success-carousel-container" style="cursor: pointer;">
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
            <div class="section-header">
                <span class="section-subtitle-tag">আসন্ন আয়োজন</span>
                <pre></pre>
                <h2 class="section-main-title">আসন্ন ইভেন্ট</h2>
                <p class="section-description">আমাদের পরবর্তী কার্যক্রমে অংশগ্রহণ করুন</p>
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





    <!--Amader Poth Chola  -->
    <section class="timeline-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle-tag">আমাদের গল্প</span>
                <pre></pre>
                <h2 class="section-main-title">আমাদের পথচলা</h2>
                <p class="section-description">২০১৭ সালে যাত্রা শুরু করে আমরা আজ অবধি নিরলসভাবে কাজ করে যাচ্ছি। নিচে
                    আমাদের যাত্রাপথের কিছু গুরুত্বপূর্ণ মাইলফলক তুলে ধরা হলো।</p>
            </div>

            <div class="timeline">
                <div class="timeline-item right">
                    <div class="content">
                        <h2>2017</h2>
                        <h3>যাত্রা শুরু - প্রথম স্বাস্থ্য ক্যাম্প</h3>
                        <p>সংগঠনের আনুষ্ঠানিক যাত্রা শুরু। ৫০০ জনের বেশি মানুষের বিনামূল্যে চিকিৎসা সেবা প্রদান।</p>
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
                        <p>মহামারির সময় ২০০০ এরও বেশি অসহায় পরিবারের মাঝে খাদ্য সহায়তা পৌঁছে দেওয়া।</p>
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
                        <p>সম্পূর্ণ ডিজিটাল কার্যক্রম ও স্মার্ট সেবা চালুর মাধ্যমে আধুনিক সমাজ গঠনে অবদান।</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Nibondon Form Section-->
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
                    <h1>স্বেচ্ছাসেবক হন</h1>
                    <p>
                        আপনার সময় এবং মেধা দিয়ে সমাজের উন্নয়নে অবদান রাখুন।
                        আমাদের টিমে যোগ দিন এবং পরিবর্তনের অংশীদার হন।
                    </p>

                    <ul class="benefits">
                        <li>সামাজিক নেটওয়ার্কিং</li>
                        <li>নেতৃত্বের দক্ষতা উন্নয়ন</li>
                        <li>সার্টিফিকেট ও স্বীকৃতি</li>
                        <li>মানসিক প্রশান্তি</li>
                    </ul>
                </div>

                <!-- Right Side -->
                <div class="section-8-right">
                    <div class="form-box">
                        <h2>নিবন্ধন ফর্ম</h2>
                        <small>আপনার তথ্য দিন, আমরা যোগাযোগ করব</small>

                        <div style="cursor: pointer;">
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
                                    স্বেচ্ছাসেবক হন
                                </button>
                            </form>
                        </div>

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
                        <span class="date">২০/১২/২০২৪</span>
                        <h3>শীতবস্ত্র বিতরণ কর্মসূচি ২০২৪</h3>
                        <p>এবারের শীতে আমরা ৫০০টি পরিবারের মাঝে কম্বল বিতরণ করেছি।</p>
                        <a href="#">আরও পড়ুন</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="news-card">
                    <img src="https://scontent.fdac7-1.fna.fbcdn.net/v/t39.30808-6/558812590_3549518041851163_3899106297584745642_n.jpg?stp=cp6_dst-jpg_tt6&_nc_cat=110&ccb=1-7&_nc_sid=7b2446&_nc_eui2=AeEVFOyBGx1kW4Vf97uaYgvtD1Jl9w15fKcPUmX3DXl8pyinJ8qQwS_eP-aI3wWqVjKhEAbwmcYKt6xn06mBS9Hk&_nc_ohc=amsv5JwgEEwQ7kNvwFGclcI&_nc_oc=AdnldJsDZyGRjD-0FgsGA2uP8gJ5iCpaFaeHJ4wLrPW8POpkxlDLgEVSSyVLOugoaZQ&_nc_zt=23&_nc_ht=scontent.fdac7-1.fna&_nc_gid=eVVF7FcHldiKtLyiPfS6Kw&oh=00_AfuRMHUShPSgpYBCLOObVLI843siRGNlTDx_mBSLQWWS2w&oe=69A7ABCD"
                        alt="News Image">
                    <div class="card-content">
                        <span class="date">১৫/১২/২০২৪</span>
                        <h3>পরিবেশ রক্ষায় আমাদের করণীয়</h3>
                        <p>গাছ লাগান, পরিবেশ বাঁচান। আমাদের নতুন ক্যাম্পেইন সম্পর্কে জানুন।</p>
                        <a href="#">আরও পড়ুন</a>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="news-card">
                    <img src="https://scontent.fdac7-1.fna.fbcdn.net/v/t39.30808-6/558812590_3549518041851163_3899106297584745642_n.jpg?stp=cp6_dst-jpg_tt6&_nc_cat=110&ccb=1-7&_nc_sid=7b2446&_nc_eui2=AeEVFOyBGx1kW4Vf97uaYgvtD1Jl9w15fKcPUmX3DXl8pyinJ8qQwS_eP-aI3wWqVjKhEAbwmcYKt6xn06mBS9Hk&_nc_ohc=amsv5JwgEEwQ7kNvwFGclcI&_nc_oc=AdnldJsDZyGRjD-0FgsGA2uP8gJ5iCpaFaeHJ4wLrPW8POpkxlDLgEVSSyVLOugoaZQ&_nc_zt=23&_nc_ht=scontent.fdac7-1.fna&_nc_gid=eVVF7FcHldiKtLyiPfS6Kw&oh=00_AfuRMHUShPSgpYBCLOObVLI843siRGNlTDx_mBSLQWWS2w&oe=69A7ABCD"
                        alt="News Image">
                    <div class="card-content">
                        <span class="date">১০/১২/২০২৪</span>
                        <h3>শিক্ষা বৃত্তি প্রদান</h3>
                        <p>৫০ জন মেধাবী ছাত্র-ছাত্রীদের মাঝে বৃত্তি প্রদান করা হয়েছে।</p>
                        <a href="#">আরও পড়ুন</a>
                    </div>
                </div>
            </div>

            <div class="view-all">
                <a href="#" class="btn btn-animate">সব খবর দেখুন</a>
            </div>
        </div>
    </section>



    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <span class="section-subtitle-tag">সাম্প্রতিক মতামত</span>
            <pre></pre>
            <h2 class="section-title">মতামত</h2>
            <p class="section-subtitle">আমাদের সেবাগ্রহীতাদের কথা</p>

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
                    <p>
                        তাদের সহযোগিতায় আমার মেয়ের বিয়ে দিতে পেরেছি। আল্লাহ তাদের ভালো করুন।
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="testimonial-card">
                    <div class="quote-icon">“</div>
                    <div class="profile">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="">
                        <div>
                            <h4>সালমা খাতুন</h4>
                            <span>নালডাঙা</span>
                        </div>
                    </div>

                    <div class="rating">★★★★★</div>
                    <p>
                        সেলাই মেশিন পেয়ে আমি এখন নিজের উপার্জন করছি।
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="testimonial-card">
                    <div class="quote-icon">“</div>
                    <div class="profile">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="">
                        <div>
                            <h4>রফিক উদ্দিন</h4>
                            <span>মধুপুর</span>
                        </div>
                    </div>

                    <div class="rating">★★★★☆</div>
                    <p>
                        তাদের স্বাস্থ্য ক্যাম্পের সেবা খুবই মানবিক।
                    </p>
                </div>

                <br><br>
                <div class="section-divider"></div>
            </div>
        </div>
    </section>


    <!-- Donation Section -->
    <section class="donation-section" id="সহায়তা-করুন">
        <div class="donation-container">

            <!-- Left Side -->
            <div class="donation-left">
                <h2>আপনার দান <br><span>জীবন বাঁচাতে পারে</span></h2>

                <p>
                    আপনার সামান্য সহযোগিতায় একজন শিক্ষার্থীর পড়াশোনা, একজন রোগীর চিকিৎসা
                    বা একটি পরিবারের মুখে হাসি ফোটাতে পারে।
                </p>

                <ul>
                    <li>যাকাত</li>
                    <li>সদকা</li>
                    <li>সাধারণ দান</li>
                    <li>কর্পোরেট অনুদান</li>
                </ul>
            </div>

            <!-- Right Side -->
            <div class="donation-right">
                <h3>ডোনেশন ডিটেইলস</h3>

                <div class="payment-box" style="cursor: pointer;">
                    <div class="payment-item">
                        <h4>📱 Bkash</h4>
                        <p>01706940942</p>
                    </div>

                    <div class="payment-item">
                        <h4>🚀 Rocket</h4>
                        <p>01706940942</p>
                    </div>

                    <div class="payment-item">
                        <h4>💳 Nagad</h4>
                        <p>01706940942</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div style="text-align:center;">
                <span class="section-subtitle-tag">সচরাচর জিজ্ঞাসা</span>
            </div>
            <pre></pre>
            <h2 class="faq-title">সচরাচর জিজ্ঞাসা</h2>

            <div class="faq-item">
                <div class="faq-question">
                    আমি কিভাবে সদস্য হতে পারি?
                    <span class="arrow">&#9660;</span>
                </div>
                <div class="faq-answer">
                    আমাদের অফিসে এসে অথবা অনলাইনে ফর্ম পূরণ করে সদস্য হওয়া যায়।
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    আপনারা কি যাকাত গ্রহণ করেন?
                    <span class="arrow">&#9660;</span>
                </div>
                <div class="faq-answer">
                    হ্যাঁ, আমরা যাকাত গ্রহণ করি এবং নির্ধারিত খাতে বিতরণ করি।
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    স্বেচ্ছাসেবক হিসেবে কাজ করতে চাই, কী করব?
                    <span class="arrow">&#9660;</span>
                </div>
                <div class="faq-answer">
                    স্বেচ্ছাসেবক হিসেবে যুক্ত হতে আমাদের ওয়েবসাইটে রেজিস্ট্রেশন করুন।
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    আপনাদের কার্যক্রম কোন এলাকায় সীমাবদ্ধ?
                    <span class="arrow">&#9660;</span>
                </div>
                <div class="faq-answer">
                    আমাদের কার্যক্রম সারা বাংলাদেশ জুড়ে পরিচালিত হয়।
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    ডোনেশন কি ট্যাক্স মুক্ত?
                    <span class="arrow">&#9660;</span>
                </div>
                <div class="faq-answer">
                    হ্যাঁ, নির্দিষ্ট শর্ত পূরণ সাপেক্ষে ডোনেশন ট্যাক্স মুক্ত।
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    আমি কি নির্দিষ্ট কোনো প্রজেক্টে দান করতে পারি?
                    <span class="arrow">&#9660;</span>
                </div>
                <div class="faq-answer">
                    হ্যাঁ, আপনি চাইলে নির্দিষ্ট কোনো প্রজেক্ট বেছে নিয়ে দান করতে পারবেন।
                </div>
            </div>

        </div>
    </section>


    <!-- Contact -->
    <section class="section-13" id="যোগাযোগ">

        <div class="section-title">
            <span class="section-subtitle-tag">যোগাযোগের তথ্য</span>
            <pre></pre>
            <h2>যোগাযোগ</h2>
            <p>যেকোনো প্রয়োজনে আমাদের সাথে যোগাযোগ করুন</p>
        </div>

        <div class="contact-wrapper">

            <!-- Left -->
            <div class="glass-card contact-info">
                <h3>যোগাযোগের তথ্য</h3>

                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>ঝাউগড়া কল্যাণ সংগঠন,জামালপুর, বাংলাদেশ</span>
                </div>

                <div class="info-item">
                    <i class="fas fa-phone-alt"></i>
                    <span>+8801706940942</span>
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

                    <button type="submit">বার্তা পাঠান</button>
                </form>
            </div>

        </div>

        <!-- Google Map -->
        <div class="map">
            <iframe src="https://www.google.com/maps?q=23.8103,90.4125&hl=bn&z=14&output=embed" allowfullscreen=""
                loading="lazy">
            </iframe>
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

// Hero Button Click Events
// const heroButtons = document.querySelectorAll('.hero-btns .btn');
// if (heroButtons.length > 0) {
//     heroButtons[0].addEventListener('click', () => {
//         const successSection = document.getElementById('সাফল্যের-গল্প');
//         if (successSection) {
//             successSection.scrollIntoView({
//                 behavior: 'smooth',
//                 block: 'start'
//             });
//         }
//     });

// Second button: "সহায়তা করুন" - can be used for donation link
// heroButtons[1].addEventListener('click', () => {
//     alert('ধন্যবাদ আমাদের সাহায্য করার জন্য আগ্রহ প্রকাশের জন্য!');
// });
//}






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



/* Scroll Animation Amader poth chola*/
const items = document.querySelectorAll('.timeline-item');

function showOnScroll() {
    const triggerBottom = window.innerHeight * 0.85;

    items.forEach(item => {
        const boxTop = item.getBoundingClientRect().top;

        if (boxTop < triggerBottom) {
            item.classList.add('show');
        }
    });
}

window.addEventListener('scroll', showOnScroll);
showOnScroll();


// FAQ Accordion Logic
const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach(item => {
    item.addEventListener("click", () => {

        // Close others
        faqItems.forEach(i => {
            if (i !== item) {
                i.classList.remove("active");
            }
        });

        // Toggle current
        item.classList.toggle("active");
    });
});

/* Scroll Animation */
const elements = document.querySelectorAll('.glass-card, .map');

window.addEventListener('scroll', () => {
    elements.forEach(el => {
        const position = el.getBoundingClientRect().top;
        const screen = window.innerHeight;

        if (position < screen - 100) {
            el.classList.add('active');
        }
    });
});
</script>
@endsection

@push('styles')
<style>
/* ============== BLOG BUTTON ANIMATIONS ============== */
@keyframes slideInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes glow-pulse {
    0% {
        box-shadow: 0 0 5px rgba(34, 197, 94, 0.5);
    }

    50% {
        box-shadow: 0 0 20px rgba(34, 197, 94, 0.8);
    }

    100% {
        box-shadow: 0 0 5px rgba(34, 197, 94, 0.5);
    }
}

.btn-animate {
    animation: slideInUp 0.6s ease-out;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.btn-animate::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.5s ease;
    z-index: 1;
}

.btn-animate:hover::before {
    left: 100%;
}

.btn-animate:hover {
    background-color: #22c55e !important;
    color: #fff !important;
    transform: translateY(-5px) scale(1.05);
    box-shadow: 0 12px 28px rgba(34, 197, 94, 0.4);
    animation: glow-pulse 1.5s ease-in-out infinite;
}

.btn-animate:active {
    transform: translateY(-2px) scale(1.02);
}

/* Hero Section */
.hero {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('https://scontent.fdac7-1.fna.fbcdn.net/v/t39.30808-6/540337865_3507613556041612_9101768104763696279_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=c7cdda&_nc_eui2=AeFM_EavUZrXbGtsj-onM9T4AkFxXIX1np8CQXFchfWenxozymaKhW6QyZwksdDVG9IeoKrh7xR87o0cg8W11u2Z&_nc_ohc=cjFeeg1-6sYQ7kNvwEqtNCl&_nc_oc=AdkDoFMlres1jTD5_TXfanoKio26ResaxpxxpyH1-FL-QzUDUyY1wegOcZoB6q-e2NQ&_nc_zt=23&_nc_ht=scontent.fdac7-1.fna&_nc_gid=zLM6HlWelpSRrRsohKUEQg&oh=00_AfsbgLkrqDtPDxzTKrPrVef6nAoua5fiVEzD58X42lENBw&oe=69A785DA');
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

@keyframes buttonShine {
    0% {
        background-position: -200% center;
    }

    100% {
        background-position: 200% center;
    }
}

@keyframes buttonPulse {

    0%,
    100% {
        box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);
    }

    50% {
        box-shadow: 0 0 0 8px rgba(16, 185, 129, 0);
    }
}

.btn {
    padding: 0.8rem 2rem;
    border-radius: 30px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
}

.btn::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.btn:active::before {
    width: 300px;
    height: 300px;
}

.btn-primary {
    background-color: #166534;
    background: linear-gradient(90deg, #166534, #10b981, #166534);
    background-size: 200% auto;
    color: white;
    border: none;
    padding: 0.8rem 2.5rem;
    box-shadow: 0 4px 15px rgba(22, 101, 52, 0.3);
}

.btn-primary:hover {
    background-color: #14532d;
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
    animation: buttonShine 1.5s linear;
}

.btn-primary:focus {
    animation: buttonPulse 1.5s infinite;
}

.btn-primary:active {
    transform: translateY(-1px) scale(0.98);
}

.btn-secondary {
    background: transparent;
    color: #f59e0b;
    border: 2px solid #f59e0b;
    padding: 0.8rem 2.5rem;
    position: relative;
    overflow: hidden;
    box-shadow: 0 0 0 0 rgba(245, 158, 11, 0.4);
}

.btn-secondary::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background-color: #f59e0b;
    transition: left 0.4s ease;
    z-index: -1;
}

.btn-secondary:hover {
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(245, 158, 11, 0.3);
}

.btn-secondary:hover::after {
    left: 0;
}

.btn-secondary:focus {
    animation: buttonPulse 1.5s infinite;
}

.btn-secondary:active {
    transform: translateY(-1px) scale(0.98);
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

/* Global Section Header Styles - ইউনিফাইড ডিজাইন */
.section-header {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 60px auto;
    padding: 0 15px;
}

.section-subtitle-tag {
    display: inline-block;
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--primary-color, #10b981);
    background-color: rgba(16, 185, 129, 0.1);
    padding: 6px 18px;
    border-radius: 30px;
    letter-spacing: 1px;
    margin-bottom: 15px;
    border: 1px solid rgba(16, 185, 129, 0.3);
}

.section-main-title {
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 15px;
    color: #fff;
    font-family: 'Hind Siliguri', sans-serif;
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
    background-color: var(--secondary-color, #f59e0b);
    border-radius: 2px;
}

.section-description {
    font-size: 1.2rem;
    color: var(--text-muted, #cbd5e1);
    line-height: 1.7;
    max-width: 600px;
    margin: 25px auto 0;
}

/* Statistics Section Styles */
.stats {
    background-color: #1a1a1a;
    padding: 100px 5%;
    color: white;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
    cursor: pointer;
    margin-top: 40px;
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
    margin-top: 40px;
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
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
}

.learn-more-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background-color: var(--primary-color);
    transition: left 0.4s ease;
    z-index: -1;
}

.learn-more-btn:hover {
    color: white;
    transform: translateX(5px);
    box-shadow: 0 5px 20px rgba(16, 185, 129, 0.3);
}

.learn-more-btn:hover::before {
    left: 0;
}

.learn-more-btn i {
    transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.learn-more-btn:hover i {
    transform: translateX(8px);
}

.learn-more-btn:active {
    transform: translateX(3px) scale(0.98);
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

.reveal-up {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease;
}

.reveal-active {
    opacity: 1;
    transform: translateX(0) translateY(0);
}

/* Activities Section (4th Section) Styles */
.activities-section {
    background-color: #0f172a;
    padding: 100px 5%;
    color: white;
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

.tag-education,
.tag-health,
.tag-empowerment,
.tag-environment,
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

/* Scroll To Top Button */
.scroll-to-top-btn {
    position: fixed;
    bottom: 40px;
    right: 40px;
    width: 55px;
    height: 55px;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    color: #fff;
    background: linear-gradient(135deg, #10b981, #f59e0b);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: all 0.4s ease;
    z-index: 999;
}

.scroll-to-top-btn.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
    animation: pulseGlow 2s infinite;
}

.scroll-to-top-btn:hover {
    transform: translateY(-6px) scale(1.1);
    box-shadow: 0 12px 30px rgba(245, 158, 11, 0.6);
}

.scroll-to-top-btn i {
    transition: 0.3s;
}

.scroll-to-top-btn:hover i {
    transform: translateY(-3px);
}

@keyframes pulseGlow {
    0% {
        box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.6);
    }

    70% {
        box-shadow: 0 0 0 15px rgba(16, 185, 129, 0);
    }

    100% {
        box-shadow: 0 0 0 0 rgba(16, 185, 129, 0);
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
    border: 2px solid #333;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    font-size: 1.2rem;
    position: relative;
    overflow: hidden;
}

.nav-btn::before {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: var(--primary-color);
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
    z-index: -1;
}

.nav-btn:hover::before {
    width: 100px;
    height: 100px;
}

.nav-btn:hover {
    color: white;
    border-color: var(--primary-color);
    transform: scale(1.15) rotate(10deg);
    box-shadow: 0 8px 20px rgba(16, 185, 129, 0.4);
}

.nav-btn:active {
    transform: scale(0.92) rotate(0deg);
}

.nav-btn i {
    transition: transform 0.4s ease;
}

.nav-btn:hover i {
    transform: scale(1.2);
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
    margin-top: 40px;
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


/* ================= Timeline Section ================= */
.timeline-section {
    background-color: black;
    padding: 100px 5%;
    color: white;

}
.timeline-section .section-header {
    margin-bottom: 80px;
}

.timeline {
    position: relative;
    max-width: 1100px;
    margin: 50px auto;
}

/* Center Line Desktop */
.timeline::before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;   /* full height fix */
    left: 50%;
    width: 8px;
    background: linear-gradient(to bottom, #00ff7f, #ff8c00);
    transform: translateX(-50%);
    border-radius: 4px;
}

/* ================= Timeline Item ================= */
.timeline-item {
    position: relative;
    width: 50%;
    padding: 20px 40px;
    opacity: 0;
    transform: translateY(60px);
    transition: 0.8s ease;
}

.timeline-item.show {
    opacity: 1;
    transform: translateY(0);
}

/* Left Side */
.timeline-item.left {
    left: 0;
    text-align: right;
}

/* Right Side */
.timeline-item.right {
    left: 50%;
}

/* ================= Dot ================= */

.timeline-item::after {
    content: '';
    position: absolute;
    width: 18px;
    height: 18px;
    background: #ff8c00;
    border: 4px solid #0d0d0d;
    top: 25px;
    border-radius: 50%;
    box-shadow: 0 0 10px #ff8c00;
}

/* Dot Left */
.timeline-item.left::after {
    right: -9px;
}

/* Dot Right */
.timeline-item.right::after {
    left: -9px;
}

/* ================= Content ================= */

.content {
    background: #111827;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.4);
}

.content h2 {
    color: #00ff7f;
    font-size: 2rem;
}

.content h3 {
    font-size: 1.3rem;
    margin: 8px 0;
}

.content p {
    color: #ccc;
}

/* ================= Responsive ================= */
@media (max-width: 992px) {

    .timeline::before {
        left: 6px;
        transform: none;
    }

    .timeline-item {
        width: 100%;
        padding-left: 70px;
        padding-right: 20px;
        text-align: left !important;
        left: 0 !important;
    }

    /* PERFECT CENTER ALIGNMENT */
    .timeline-item::after {
        left: 11px;   /* exact center match */
        right: auto;
    }
}


/* Section 8 Form Nibondon*/
.section-8 {
    padding: 100px 20px;
    background: #000;
    font-family: 'Segoe UI', sans-serif;
    color: #fff;
    overflow: hidden;
}

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(60px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.section-8-container {
    max-width: 1200px;
    margin: 40px auto 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 60px;
}

.section-8-left {
    flex: 1;
    animation: fadeUp 1s ease forwards;
}

.section-8-left h1 {
    font-size: 48px;
    margin-bottom: 20px;
}

.section-8-left p {
    font-size: 18px;
    color: #ddd;
    margin-bottom: 30px;
    line-height: 1.7;
}

.benefits {
    list-style: none;
}

.benefits li {
    margin-bottom: 15px;
    font-size: 16px;
    display: flex;
    align-items: center;
    opacity: 0;
    transform: translateX(-30px);
    animation: fadeUp 0.8s ease forwards;
}

.benefits li:nth-child(1) {
    animation-delay: 0.3s;
}

.benefits li:nth-child(2) {
    animation-delay: 0.5s;
}

.benefits li:nth-child(3) {
    animation-delay: 0.7s;
}

.benefits li:nth-child(4) {
    animation-delay: 0.9s;
}

.benefits li::before {
    content: "✔";
    color: #e6b800;
    font-weight: bold;
    margin-right: 10px;
}

.section-8-right {
    flex: 1;
    animation: fadeUp 1.2s ease forwards;
}

.form-box {
    background: #111;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
    transition: 0.4s;
}

.form-box:hover {
    box-shadow: 0 15px 40px rgba(184, 134, 11, 0.3);
    transform: translateY(-5px);
}

.form-box h2 {
    margin-bottom: 10px;
}

.form-box small {
    color: #aaa;
    display: block;
    margin-bottom: 25px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 6px;
    font-size: 14px;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 12px;
    border-radius: 6px;
    border: 1px solid transparent;
    outline: none;
    background: #222;
    color: #fff;
    font-size: 14px;
    transition: 0.3s;
}

.form-group input:focus,
.form-group select:focus {
    border-color: #b8860b;
    box-shadow: 0 0 10px rgba(184, 134, 11, 0.4);
}

.form-row {
    display: flex;
    gap: 15px;
}

.form-row .form-group {
    flex: 1;
}

@keyframes submitButtonShine {
    0% {
        background-position: -200% center;
    }

    100% {
        background-position: 200% center;
    }
}

@keyframes shimmer {
    0% {
        left: -100%;
    }

    100% {
        left: 100%;
    }
}

.submit-btn {
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 6px;
    background: linear-gradient(90deg, #b8860b, #d4a017, #b8860b);
    background-size: 200% auto;
    color: #000;
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(184, 134, 11, 0.3);
}

.submit-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    animation: shimmer 2s infinite;
}

.submit-btn:hover {
    background: linear-gradient(90deg, #d4a017, #f0d000, #d4a017);
    background-size: 200% auto;
    transform: translateY(-4px) scale(1.02);
    box-shadow: 0 12px 35px rgba(212, 160, 23, 0.5);
    animation: submitButtonShine 1.5s linear;
}

.submit-btn:focus {
    box-shadow: 0 0 0 4px rgba(212, 160, 23, 0.3), 0 12px 35px rgba(212, 160, 23, 0.5);
}

.submit-btn:active {
    transform: translateY(-2px) scale(0.98);
}

/* Blog section */
.news-section {
    padding: 100px 20px;
    text-align: center;
    animation: fadeIn 1s ease-in-out;
    margin: 0;
    font-family: 'Hind Siliguri', sans-serif;
    background: linear-gradient(135deg, #0f0f0f, #1a1a1a);
    color: #fff;
}

.card-wrapper {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 40px;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    padding: 0 20px;
}

.news-card {
    background: #1b1b1b;
    border-radius: 15px;
    overflow: hidden;
    text-align: left;
    transition: all 0.4s ease;
    border: 1px solid #222;
    cursor: pointer;
    animation: slideUp 0.8s ease forwards;
}

.news-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 15px 35px rgba(34, 197, 94, 0.2);
    border-color: #22c55e;
}

.news-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.news-card:hover img {
    transform: scale(1.08);
}

.card-content {
    padding: 22px;
}

.date {
    font-size: 14px;
    color: #f39c12;
    display: block;
    margin-bottom: 10px;
}

.news-card h3 {
    font-size: 20px;
    margin-bottom: 10px;
    transition: color 0.3s ease;
}

.news-card:hover h3 {
    color: #22c55e;
}

.news-card p {
    color: #bbb;
    font-size: 15px;
    margin-bottom: 15px;
    line-height: 1.6;
}

.news-card a {
    color: #22c55e;
    text-decoration: none;
    font-weight: 600;
    position: relative;
    transition: 0.3s;
}

.news-card a::after {
    content: " →";
    transition: margin-left 0.3s ease;
}

.news-card a:hover::after {
    margin-left: 6px;
}

.view-all {
    margin-top: 60px;
}

.btn {
    padding: 14px 35px;
    border: 1px solid #22c55e;
    color: #22c55e;
    text-decoration: none;
    border-radius: 8px;
    transition: all 0.4s ease;
    display: inline-block;
    position: relative;
    overflow: hidden;
}

.btn::before {
    content: "";
    position: absolute;
    width: 0%;
    height: 100%;
    background: #22c55e;
    left: 0;
    top: 0;
    transition: 0.4s ease;
    z-index: -1;
}

.btn:hover::before {
    width: 100%;
}

.btn:hover {
    color: #111;
}

/* Responsive Design */
@media (max-width: 1200px) {
    .section-main-title {
        font-size: 3rem;
    }
}
}

@media (max-width: 1024px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .gallery-grid {
        grid-template-columns: repeat(2, 1fr);
    }
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

    .section-main-title {
        font-size: 2.5rem;
    }

    .section-description {
        font-size: 1rem;
    }

    .section-8-left h1 {
        font-size: 36px;
    }

    .form-row {
        flex-direction: column;
    }

    .timeline-main-title {
        font-size: 3rem;
    }
}

@media (max-width: 768px) {
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

    .stats {
        padding: 60px 5%;
    }

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

    .mission-vision {
        flex-direction: column;
        gap: 2rem;
    }

    .activity-card {
        min-width: 280px;
    }

    .activities-section {
        padding: 60px 5%;
    }

    .section-title {
        font-size: 2.5rem;
    }

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

    .gallery-grid {
        grid-template-columns: 1fr;
    }

    .section-8-container {
        flex-direction: column;
    }

    /* Timeline Responsive */
    .timeline::after {
        left: 30px;
        transform: none;
    }

    .timeline-item {
        width: 100%;
        padding-left: 80px;
        padding-right: 30px;
        left: 0 !important;
        text-align: left !important;
    }

    .timeline-item::after {
        left: 30px;
        transform: translateX(-50%);
    }

    .timeline-item.left,
    .timeline-item.right {
        left: 0;
    }

    .section-main-title {
        font-size: 2.2rem;
    }
}

@media (max-width: 600px) {
    .stats-grid {
        grid-template-columns: 1fr;
    }

    .activity-card {
        min-width: 250px;
    }

    .card-img {
        height: 180px;
    }

    .card-body {
        padding: 1.5rem;
    }

    .activities-section {
        padding: 40px 3%;
    }

    .success-stories {
        padding: 40px 4%;
    }

    .section-main-title {
        font-size: 2rem;
    }

    .section-subtitle-tag {
        font-size: 0.9rem;
        padding: 4px 14px;
    }
}

@media (max-width: 480px) {
    .hero-title {
        font-size: 2.2rem;
    }

    .about-section {
        padding: 40px 4%;
    }

    .about-title {
        font-size: 1.5rem;
    }

    .section-main-title {
        font-size: 1.8rem;
    }

    .section-main-title::after {
        width: 50px;
        height: 3px;
        bottom: -8px;
    }

    .founder-card {
        padding: 0.8rem;
        gap: 1rem;
    }

    .news-card {
        width: 100%;
    }

    .news-card img {
        height: 200px;
    }

    .btn {
        padding: 12px 25px;
        font-size: 14px;
    }

    .scroll-to-top-btn {
        width: 45px;
        height: 45px;
        font-size: 18px;
        bottom: 25px;
        right: 25px;
    }
}

/* Keyframe Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Container */
.container {
    max-width: 1200px;
    margin: 0 auto;
}






/* ========================= */
/* TESTIMONIAL SECTION */
/* ========================= */

.testimonial-section {
    background: #0f1117;
    padding: 100px 20px;
    text-align: center;
    color: #fff;
}

.section-title {
    font-size: 42px;
    margin-bottom: 10px;
    font-weight: 700;
}

.section-subtitle {
    color: #aaa;
    margin-bottom: 60px;
    position: relative;
    display: inline-block;
}

/* Orange underline */
.section-subtitle::after {
    content: "";
    display: block;
    width: 60px;
    height: 3px;
    background: #f97316;
    margin: 12px auto 0;
}

/* Wrapper */
.testimonial-wrapper {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    padding: 0 20px;
}

/* Card */
.testimonial-card {
    background: #111827;
    border-radius: 15px;
    padding: 30px;
    text-align: left;
    position: relative;
    transition: 0.4s ease;
    border: 1px solid #1f2937;
}

/* Hover Effect */
.testimonial-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(249, 115, 22, 0.2);
}

/* Quote Icon */
.quote-icon {
    position: absolute;
    top: 15px;
    left: 20px;
    font-size: 60px;
    color: rgba(34, 197, 94, 0.15);
    font-weight: bold;
}

/* Profile */
.profile {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
}

.profile img {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    object-fit: cover;
}

.profile h4 {
    margin: 0;
    font-size: 18px;
}

.profile span {
    font-size: 14px;
    color: #aaa;
}

/* Rating */
.rating {
    color: #facc15;
    margin-bottom: 15px;
    font-size: 18px;
}

/* Text */
.testimonial-card p {
    color: #ddd;
    font-size: 15px;
    line-height: 1.6;
}

/* ========================= */
/* Responsive */
/* ========================= */

@media (max-width: 1024px) {
    .card-wrapper {
        grid-template-columns: repeat(2, 1fr);
    }

    .testimonial-wrapper {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .section-title {
        font-size: 30px;
    }

    .card-wrapper {
        grid-template-columns: 1fr;
    }

    .testimonial-wrapper {
        grid-template-columns: 1fr;
    }
}

/* .section-divider {
    width: 200%;
    height: 4px;
    margin: 80px auto;
    background: linear-gradient(to right, transparent, #facc15, transparent);
    border-radius: 50px;
    position: relative;
    overflow: hidden;
    
} */

.section-divider {
    width: 100%;
    max-width: 600px;
    height: 4px;
    margin: 80px auto;
    background: linear-gradient(to right, transparent, #facc15, transparent);
    border-radius: 50px;
    position: relative;
    overflow: hidden;
    left: 0;
    right: 0;
}

.section-divider::after {
    content: "";
    position: absolute;
    left: 50%;
    top: -3px;
    transform: translateX(-50%);
    width: 120px;
    height: 10px;
    background: #facc15;
    filter: blur(12px);
    opacity: 0.6;
}




/* ============================ */
/* Donation Section */
/* ============================ */

.donation-section {
    background: #0f1117;
    padding: 100px 20px;
    display: flex;
    justify-content: center;
}

.donation-container {
    display: flex;
    max-width: 1100px;
    width: 100%;
    background: #111827;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
}

/* Left */
.donation-left {
    flex: 1;
    padding: 50px;
    background: linear-gradient(135deg, #3a2208, #1a1a1a);
    color: white;
}

.donation-left h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.donation-left h2 span {
    color: #f97316;
}

.donation-left p {
    color: #ddd;
    margin-bottom: 25px;
    line-height: 1.6;
}

.donation-left ul {
    list-style: none;
    padding: 0;
}

.donation-left ul li {
    margin-bottom: 10px;
    position: relative;
    padding-left: 20px;
}

.donation-left ul li::before {
    content: "●";
    color: #22c55e;
    position: absolute;
    left: 0;
}

/* Right */
.donation-right {
    flex: 1;
    padding: 50px;
    background: #1f2937;
    color: white;
}

.donation-right h3 {
    margin-bottom: 30px;
}

.payment-box {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-bottom: 30px;
}

.payment-item {
    background: #111827;
    padding: 15px 20px;
    border-radius: 10px;
    border: 1px solid #2d3748;
    transition: 0.3s ease;
}

.payment-item:hover {
    border-color: #f97316;
    transform: translateY(-3px);
}

.payment-item h4 {
    margin-bottom: 5px;
    color: #facc15;
}

.payment-item p {
    font-size: 18px;
    font-weight: 600;
}

/* Donate Button */
.donate-btn {
    background: #f97316;
    border: none;
    padding: 14px 25px;
    border-radius: 8px;
    font-size: 16px;
    color: white;
    cursor: pointer;
    transition: 0.3s;
}

.donate-btn:hover {
    background: #ea580c;
    transform: translateY(-3px);
}

/* ============================ */
/* Responsive */
/* ============================ */

@media (max-width: 992px) {
    .donation-container {
        flex-direction: column;
    }

    .donation-left,
    .donation-right {
        padding: 40px;
    }
}

@media (max-width: 576px) {
    .donation-left h2 {
        font-size: 28px;
    }

    .donation-left,
    .donation-right {
        padding: 30px 20px;
    }
}



/* FAQ Section */

/* Section */
.faq-section {
    background: black;
    padding: 100px 20px;
    color: #fff;
}

.container {
    max-width: 900px;
    margin: auto;
}

/* Title */
.faq-title {
    text-align: center;
    font-size: 42px;
    margin-bottom: 60px;
    position: relative;
}

.faq-title::after {
    content: '';
    width: 80px;
    height: 3px;
    background: orange;
    position: absolute;
    left: 50%;
    bottom: -15px;
    transform: translateX(-50%);
}

/* FAQ Item */
.faq-item {
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    padding: 18px 10px;
    cursor: pointer;
    transition: 0.4s ease;
}

.faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 18px;
    transition: 0.3s;
}

.faq-question:hover {
    color: #00ffcc;
}

.arrow {
    font-size: 14px;
    transition: 0.4s ease;
}

/* Answer Animation */
.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease, opacity 0.4s ease;
    opacity: 0;
    font-size: 15px;
    margin-top: 10px;
    line-height: 1.6;
    color: #ccc;
}

/* Active State */
.faq-item.active .faq-answer {
    max-height: 200px;
    opacity: 1;
}

.faq-item.active .arrow {
    transform: rotate(180deg);
}

/* Responsive */
@media(max-width:768px) {
    .faq-title {
        font-size: 30px;
    }

    .faq-question {
        font-size: 16px;
    }

    .faq-answer {
        font-size: 14px;
    }
}




/* Section */
.section-13 {
    background: #0b1120;
    color: #fff;
    padding: 120px 8%;
    background: radial-gradient(circle at top left, #111827, #0b1120);
    position: relative;
    overflow: hidden;
}

.section-title {
    text-align: center;
    margin-bottom: 80px;
}

.section-title h2 {
    font-size: 52px;
    font-weight: 700;
    color: #ffffff;
}

.section-title p {
    color: #94a3b8;
    margin-top: 10px;
    font-size: 18px;
}

/* Grid */
.contact-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
}

/* Glass Card */
.glass-card {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    padding: 45px;
    transition: 0.4s;
    opacity: 0;
    transform: translateY(60px);
}

.glass-card.active {
    opacity: 1;
    transform: translateY(0);
}

.glass-card:hover {
    box-shadow: 0 0 30px rgba(34, 197, 94, 0.3);
}

/* Contact Info */
.contact-info h3,
.contact-form h3 {
    margin-bottom: 30px;
    font-size: 24px;
}

.info-item {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    font-size: 16px;
}

.info-item i {
    width: 45px;
    height: 45px;
    background: linear-gradient(135deg, #22c55e, #3b82f6);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    margin-right: 15px;
    flex-shrink: 0;
}

/* Form */
.input-group {
    position: relative;
    margin-bottom: 25px;
}

.input-group input,
.input-group textarea {
    width: 100%;
    padding: 15px 15px 15px 45px;
    border: none;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.07);
    color: #fff;
    outline: none;
    font-size: 15px;
}

.input-group i {
    position: absolute;
    left: 15px;
    top: 16px;
    color: #22c55e;
}

textarea {
    resize: none;
    height: 120px;
}

.contact-form button {
    width: 100%;
    padding: 15px;
    border: none;
    border-radius: 12px;
    background: linear-gradient(90deg, #22c55e, #3b82f6);
    color: #fff;
    font-weight: 600;
    font-size: 16px;
    cursor: pointer;
    transition: 0.4s;
}

.contact-form button:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);
}

/* Map */
.map {
    margin-top: 80px;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.1);
    opacity: 0;
    transform: scale(0.8);
    transition: 0.6s;
}

.map.active {
    opacity: 1;
    transform: scale(1);
}

iframe {
    width: 100%;
    height: 400px;
    border: 0;
}

/* ========================= */
/* ===== RESPONSIVE ======== */
/* ========================= */

/* Large Laptop */
@media(max-width:1200px) {
    .section-13 {
        padding: 100px 6%;
    }

    .section-title h2 {
        font-size: 44px;
    }
}

/* Tablet */
@media(max-width:992px) {
    .contact-wrapper {
        grid-template-columns: 1fr;
        gap: 40px;
    }

    .glass-card {
        padding: 35px;
    }

    iframe {
        height: 350px;
    }
}

/* Small Tablet */
@media(max-width:768px) {
    .section-13 {
        padding: 80px 5%;
    }

    .section-title {
        margin-bottom: 60px;
    }

    .section-title h2 {
        font-size: 36px;
    }

    .section-title p {
        font-size: 16px;
    }

    .glass-card {
        padding: 30px;
        border-radius: 16px;
    }

    .contact-info h3,
    .contact-form h3 {
        font-size: 20px;
    }

    iframe {
        height: 300px;
    }
}

/* Mobile */
@media(max-width:576px) {
    .section-13 {
        padding: 60px 4%;
    }

    .section-title h2 {
        font-size: 28px;
    }

    .section-title p {
        font-size: 14px;
    }

    .info-item {
        font-size: 14px;
        flex-direction: row;
        align-items: flex-start;
    }

    .info-item i {
        width: 38px;
        height: 38px;
        font-size: 14px;
    }

    .input-group input,
    .input-group textarea {
        font-size: 14px;
        padding: 14px 14px 14px 40px;
    }

    .contact-form button {
        font-size: 14px;
        padding: 14px;
    }

    iframe {
        height: 250px;
    }
}

/* Small Mobile */
@media(max-width:400px) {
    .section-title h2 {
        font-size: 24px;
    }

    .glass-card {
        padding: 22px;
    }

    iframe {
        height: 220px;
    }
}
</style>
@endpush