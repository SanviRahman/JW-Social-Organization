<header>
    <nav class="navbar">
        <div class="logo">
            <div class="logo-icon">
                <img src="{{ asset('image/logo.jpg') }}" alt="ঝাউগড়া কল্যাণ সংগঠনের লোগো" height="110" width="90" style="border-radius: 30%;">
            </div>
            <div class="logo-text">
                <h1>ঝাউগড়া কল্যাণ সংগঠন</h1>
                <p>সামাজিক কল্যাণ সংস্থা</p>
            </div>
        </div>

        <button class="menu-toggle" id="menu-toggle" aria-label="মেনু">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="nav-center" id="nav-center">
            <ul class="nav-links">
                <li><a href="#হোম" class="nav-link">হোম</a></li>
                <li><a href="#আমাদের-সম্পর্কে" class="nav-link">আমাদের সম্পর্কে</a></li>
                <li><a href="#কার্যক্রম" class="nav-link">কার্যক্রম</a></li>
                <li><a href="#গ্যালারি" class="nav-link">গ্যালারি</a></li>
                <li><a href="#ব্লগ" class="nav-link">ব্লগ</a></li>
                <li><a href="#স্বেচ্ছাসেবক-হন" class="nav-link">যোগ দিন</a></li>
                <li><a href="#যোগাযোগ" class="nav-link">যোগাযোগ</a></li>
            </ul>
            <div class="mobile-donate">
                <a href="#সহায়তা-করুন" class="donate-btn" style="text-decoration: none;">সহায়তা করুন</a>
            </div>
        </div>

        <div class="nav-actions desktop-only">
            <a href="#সহায়তা-করুন" class="donate-btn" style="text-decoration: none;">সহায়তা করুন</a>
        </div>
    </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById("menu-toggle");
    const navCenter = document.getElementById("nav-center");
    const navLinks = document.querySelectorAll(".nav-link");
    const body = document.body;

    // Toggle Menu
    menuToggle.addEventListener("click", (e) => {
        e.stopPropagation();
        navCenter.classList.toggle("active");
        menuToggle.classList.toggle("open");

        if (navCenter.classList.contains("active")) {
            body.style.overflow = "hidden";
        } else {
            body.style.overflow = "";
        }
    });

    // Close menu when clicking outside
    document.addEventListener("click", (e) => {
        if (!navCenter.contains(e.target) && !menuToggle.contains(e.target) && navCenter.classList.contains("active")) {
            navCenter.classList.remove("active");
            menuToggle.classList.remove("open");
            body.style.overflow = "";
        }
    });

    // বিশেষ করে ডোনেট বাটনের জন্য আলাদা ইভেন্ট লিসেনার
    const donateBtn = document.querySelector('a[href="#সহায়তা-করুন"]');
    if (donateBtn) {
        donateBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                // মেনু বন্ধ করুন
                if (navCenter.classList.contains("active")) {
                    navCenter.classList.remove("active");
                    menuToggle.classList.remove("open");
                    body.style.overflow = "";
                }
                
                // স্মুথ স্ক্রল
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                console.log('ডোনেট বাটন কাজ করছে!'); // কনসোল চেক করুন
            } else {
                console.log('Target element পাওয়া যায়নি: ' + targetId);
            }
        });
    }

    // অন্যান্য নেভ লিংকের জন্য
    navLinks.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();

            const targetId = this.getAttribute("href");
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                navLinks.forEach(nav => nav.classList.remove("active-link"));
                this.classList.add("active-link");

                navCenter.classList.remove("active");
                menuToggle.classList.remove("open");
                body.style.overflow = "";

                targetSection.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }
        });
    });

    // Highlight active link on scroll
    window.addEventListener("scroll", () => {
        const sections = document.querySelectorAll("section[id]");
        const scrollPosition = window.scrollY + 100;

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionBottom = sectionTop + section.offsetHeight;
            const sectionId = section.getAttribute("id");

            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                navLinks.forEach(link => {
                    link.classList.remove("active-link");
                    if (link.getAttribute("href") === `#${sectionId}`) {
                        link.classList.add("active-link");
                    }
                });
            }
        });
    });

    // Navbar scroll effect
    let lastScroll = 0;
    window.addEventListener("scroll", () => {
        const navbar = document.querySelector(".navbar");
        const currentScroll = window.pageYOffset;

        if (currentScroll <= 0) {
            navbar.classList.remove("scroll-up");
            return;
        }

        if (currentScroll > lastScroll && !navbar.classList.contains("scroll-down")) {
            navbar.classList.remove("scroll-up");
            navbar.classList.add("scroll-down");
        } else if (currentScroll < lastScroll && navbar.classList.contains("scroll-down")) {
            navbar.classList.remove("scroll-down");
            navbar.classList.add("scroll-up");
        }
        lastScroll = currentScroll;
    });
});
</script>
<style>
:root {
    --primary-color: #10b981;
    --secondary-color: #f59e0b;
    --dark-bg: #0f172a;
    --text-white: #ffffff;
    --text-muted: #cbd5e1;
    --nav-bg: rgba(15, 23, 42, 0.98);
    --nav-bg-scrolled: rgba(15, 23, 42, 0.95);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Hind Siliguri', sans-serif;
    padding-top: 90px;
    overflow-x: hidden; /* Prevent horizontal scroll */
}

/* ================= NAVBAR ================= */

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 5%;
    background: var(--nav-bg);
    position: fixed;
    width: 100%;
    max-width: 100vw; /* Ensure it doesn't exceed viewport */
    left: 0;
    right: 0;
    top: 0;
    z-index: 1000;
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    transition: all 0.4s ease;
    margin: 0 auto;
}

/* Container for inner content to match index.blade.php */
.navbar > * {
    max-width: 1200px; /* Match container width from index */
    margin: 0 auto;
}

/* Individual sections within navbar */
.logo {
    max-width: 300px;
}

.nav-center {
    max-width: 600px;
}

.nav-actions {
    max-width: 300px;
}

/* Scroll effect */
.navbar.scroll-down {
    transform: translateY(-100%);
}

.navbar.scroll-up {
    transform: translateY(0);
    background: var(--nav-bg-scrolled);
    box-shadow: 0 4px 25px rgba(0, 0, 0, 0.4);
}

/* Logo */
.logo {
    display: flex;
    align-items: center;
    gap: 15px;
    flex-shrink: 0;
}

.logo-icon img {
    width: 65px;
    height: 65px;
    object-fit: cover;
    border-radius: 30%;
    transition: transform 0.3s ease;
}

.logo:hover .logo-icon img {
    transform: scale(1.05);
}

.logo-text h1 {
    color: var(--text-white);
    font-size: 1.4rem;
    font-weight: 700;
    line-height: 1.2;
    transition: color 0.3s;
}

.logo-text p {
    color: var(--text-muted);
    font-size: 0.9rem;
    margin-top: 2px;
}

/* Center Menu */
.nav-center {
    flex: 1;
    display: flex;
    justify-content: center;
}

.nav-links {
    display: flex;
    list-style: none;
    gap: 2rem;
    margin: 0;
    padding: 0;
}

.nav-links li a {
    text-decoration: none;
    color: var(--text-white);
    font-weight: 600;
    font-size: 1.05rem;
    transition: all 0.3s ease;
    position: relative;
    padding: 5px 0;
    white-space: nowrap;
}

.nav-links li a::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background: var(--primary-color);
    transition: width 0.3s ease;
}

.nav-links li a:hover {
    color: var(--primary-color);
}

.nav-links li a:hover::after {
    width: 100%;
}

/* Active Link */
.nav-links li a.active-link {
    color: var(--primary-color);
}

.nav-links li a.active-link::after {
    width: 100%;
}

/* Right Side */
.nav-actions {
    display: flex;
    align-items: center;
    gap: 1.2rem;
    flex-shrink: 0;
}

.icon-btn {
    background: none;
    border: none;
    color: var(--text-white);
    font-size: 1.3rem;
    cursor: pointer;
    transition: all 0.3s ease;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.icon-btn:hover {
    background: rgba(255, 255, 255, 0.1);
    color: var(--primary-color);
    transform: translateY(-2px);
}

/* Donate Button */
.donate-btn {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: white;
    border: none;
    padding: 0.8rem 1.8rem;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    white-space: nowrap;
    box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
}

.donate-btn:hover {
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4);
}

.donate-btn:active {
    transform: translateY(-1px) scale(0.98);
}

/* Mobile donate button (hidden on desktop) */
.mobile-donate {
    display: none;
    padding: 1rem 5% 2rem;
    text-align: center;
}

.mobile-donate .donate-btn {
    width: 100%;
    max-width: 300px;
    margin: 0 auto;
}

/* ============ HAMBURGER MENU ============ */

.menu-toggle {
    display: none;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 6px;
    background: none;
    border: none;
    cursor: pointer;
    width: 40px;
    height: 40px;
    padding: 8px;
    border-radius: 8px;
    transition: all 0.3s ease;
    z-index: 1001;
}

.menu-toggle:hover {
    background: rgba(255, 255, 255, 0.1);
}

.menu-toggle span {
    width: 100%;
    height: 3px;
    background: var(--text-white);
    border-radius: 3px;
    transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    transform-origin: center;
}

/* Hamburger 360 + X Effect */
.menu-toggle.open {
    transform: rotate(180deg);
}

.menu-toggle.open span:nth-child(1) {
    transform: rotate(45deg) translate(6px, 6px);
    width: 70%;
}

.menu-toggle.open span:nth-child(2) {
    opacity: 0;
    transform: scale(0);
}

.menu-toggle.open span:nth-child(3) {
    transform: rotate(-45deg) translate(6px, -6px);
    width: 70%;
}

/* ============ RESPONSIVE BREAKPOINTS ============ */

/* Large Desktop (1200px and up) */
@media (min-width: 1200px) {
    .navbar {
        padding: 1.2rem calc((100% - 1200px) / 2); /* Center content with 1200px width */
    }
    
    .nav-links {
        gap: 2.5rem;
    }
    
    .nav-links li a {
        font-size: 1.1rem;
        text-decoration: none;
    }
}

/* Desktop (992px to 1199px) */
@media (min-width: 992px) and (max-width: 1199px) {
    .navbar {
        padding: 1rem 4%;
    }
    
    .nav-links {
        gap: 1.5rem;
    }

    .nav-links li a {
        text-decoration: none;
    }
    
    .logo-text h1 {
        font-size: 1.2rem;
    }
}

/* Tablet Landscape (768px to 991px) */
@media (min-width: 768px) and (max-width: 991px) {
    .navbar {
        padding: 0.8rem 4%;
    }

    .nav-center {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: var(--nav-bg);
        backdrop-filter: blur(10px);
        flex-direction: column;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s ease;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        width: 100%;
    }

    .nav-center.active {
        max-height: 500px;
    }

    .nav-links {
        flex-direction: column;
        gap: 0;
        width: 100%;
        padding: 1rem 0;
    }

    .nav-links li {
        width: 100%;
    }

    .nav-links li a {
        display: block;
        padding: 1rem 5%;
        font-size: 1.1rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        width: 100%;
        text-decoration: none;
    }

    .nav-links li:last-child a {
        border-bottom: none;
    }

    .nav-links li a::after {
        display: none;
    }

    .nav-links li a:hover {
        background: rgba(16, 185, 129, 0.1);
        padding-left: 7%;
    }

    .menu-toggle {
        display: flex;
        order: 3;
    }

    .nav-actions {
        order: 2;
        margin-right: 1rem;
    }

    .desktop-only {
        display: flex;
    }

    .mobile-donate {
        display: block;
    }

    .logo-text h1 {
        font-size: 1.1rem;
    }
    
    .logo-text p {
        font-size: 0.8rem;
    }
    
    .logo-icon img {
        width: 55px;
        height: 55px;
    }
}

/* Mobile (up to 767px) */
@media (max-width: 767px) {
    body {
        padding-top: 80px;
    }
    
    .navbar {
        padding: 0.7rem 4%;
    }

    .logo {
        gap: 10px;
    }

    .logo-icon img {
        width: 50px;
        height: 50px;
    }

    .logo-text h1 {
        font-size: 1rem;
        line-height: 1.3;
    }

    .logo-text p {
        font-size: 0.7rem;
    }

    .nav-center {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: var(--nav-bg);
        backdrop-filter: blur(10px);
        flex-direction: column;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s ease;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        width: 100%;
    }

    .nav-center.active {
        max-height: 80vh;
        overflow-y: auto;
    }

    .nav-links {
        flex-direction: column;
        gap: 0;
        width: 100%;
        padding: 0.5rem 0;
    }

    .nav-links li {
        width: 100%;
    }

    .nav-links li a {
        display: block;
        padding: 1rem 5%;
        font-size: 1rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        width: 100%;
        text-decoration: none;
    }

    .nav-links li a:hover {
        background: rgba(16, 185, 129, 0.1);
        padding-left: 7%;
    }

    .nav-links li a::after {
        display: none;
    }

    .menu-toggle {
        display: flex;
        order: 3;
    }

    .nav-actions {
        display: none !important;
    }

    .mobile-donate {
        display: block;
        padding: 1.5rem 5% 2rem;
    }

    .nav-links li a.active-link {
        background: rgba(16, 185, 129, 0.15);
        color: var(--primary-color);
        border-left: 4px solid var(--primary-color);
    }
}

/* Small Mobile (up to 480px) */
@media (max-width: 480px) {
    .navbar {
        padding: 0.6rem 3%;
    }

    .logo-icon img {
        width: 45px;
        height: 45px;
    }

    .logo-text h1 {
        font-size: 0.9rem;
    }

    .logo-text p {
        font-size: 0.65rem;
    }

    .menu-toggle {
        width: 35px;
        height: 35px;
    }

    .nav-links li a {
        font-size: 0.95rem;
        padding: 0.9rem 4%;
        text-decoration: none;
    }
}

/* Extra Small Mobile (up to 360px) */
@media (max-width: 360px) {
    .logo-text h1 {
        font-size: 0.8rem;
    }

    .logo-text p {
        font-size: 0.6rem;
    }

    .logo-icon img {
        width: 40px;
        height: 40px;
    }

    .nav-links li a {
        font-size: 0.9rem;
        padding: 0.8rem 4%;
        text-decoration: none;
    }
}

/* Landscape Mode */
@media (max-height: 500px) and (orientation: landscape) {
    .nav-center.active {
        max-height: 90vh;
    }

    .nav-links {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }

    .mobile-donate {
        padding: 1rem 5%;
    }
}

/* High Resolution Screens */
@media (min-width: 1600px) {
    .navbar {
        padding: 1.5rem calc((100% - 1400px) / 2); /* Even larger max-width for big screens */
    }

    .logo-icon img {
        width: 75px;
        height: 75px;
    }

    .logo-text h1 {
        font-size: 1.8rem;
    }

    .logo-text p {
        font-size: 1rem;
    }

    .nav-links li a {
        font-size: 1.2rem;
        text-decoration: none;
    }

    .donate-btn {
        padding: 1rem 2.2rem;
        font-size: 1.1rem;
    }
}

/* Print Styles */
@media print {
    .navbar {
        position: relative;
        background: white;
        box-shadow: none;
    }

    .nav-links,
    .nav-actions,
    .menu-toggle,
    .mobile-donate {
        display: none;
    }
}

/* Accessibility */
@media (prefers-reduced-motion: reduce) {
    .navbar,
    .nav-center,
    .menu-toggle span,
    .donate-btn {
        transition: none;
    }
}

/* Dark mode support */
@media (prefers-color-scheme: dark) {
    :root {
        --nav-bg: rgba(10, 15, 30, 0.98);
    }
}

/* Focus styles for accessibility */
.nav-links li a:focus-visible,
.icon-btn:focus-visible,
.donate-btn:focus-visible,
.menu-toggle:focus-visible {
    outline: 2px solid var(--primary-color);
    outline-offset: 2px;
}

/* Custom scrollbar for mobile menu */
.nav-center.active::-webkit-scrollbar {
    width: 4px;
}

.nav-center.active::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.05);
}

.nav-center.active::-webkit-scrollbar-thumb {
    background: var(--primary-color);
    border-radius: 4px;
}

/* Fix for body overflow */
body {
    overflow-x: hidden;
    width: 100%;
    position: relative;
}

/* Ensure all sections have same max-width */
section {
    width: 100%;
    overflow-x: hidden;
}






/* ================== PRO NAVBAR OVERRIDES ================== */

/* Fix: remove per-child centering (this breaks layout) */
.navbar > *{
  max-width: unset !important;
  margin: 0 !important;
}

/* Navbar base */
.navbar{
  height: 86px;
  padding: 0 5%;
  display: flex;
  align-items: center;
  gap: 18px;

  background: rgba(15, 23, 42, 0.72);
  border-bottom: 1px solid rgba(255,255,255,0.06);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);

  transition: transform .35s ease, background .35s ease, height .35s ease, box-shadow .35s ease;
}

/* Better max width alignment like your container */
@media (min-width: 1200px){
  .navbar{
    padding-left: calc((100% - 1200px) / 2);
    padding-right: calc((100% - 1200px) / 2);
  }
}

/* Scroll-up state: slightly darker + compact */
.navbar.scroll-up{
  background: rgba(15, 23, 42, 0.92);
  height: 78px;
  box-shadow: 0 12px 30px rgba(0,0,0,.45);
}

/* Logo */
.logo{
  display:flex;
  align-items:center;
  gap: 12px;
  flex-shrink: 0;
}
.logo-icon img{
  width: 58px;
  height: 58px;
  border-radius: 18%;
  border: 1px solid rgba(255,255,255,0.08);
  box-shadow: 0 10px 25px rgba(0,0,0,0.35);
}
.logo-text h1{
  font-size: 1.25rem;
  letter-spacing: .2px;
}
.logo-text p{
  opacity: .9;
}

/* Desktop nav links: premium pill underline */
.nav-center{
  flex: 1;
  display:flex;
  justify-content:center;
}

.nav-links{
  display:flex;
  align-items:center;
  gap: 14px;
  padding: 8px;
  border-radius: 999px;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.06);
}

.nav-links li a{
  font-size: 1rem;
  font-weight: 600;
  padding: 10px 14px;
  border-radius: 999px;
  color: rgba(255,255,255,0.92);
  transition: background .25s ease, color .25s ease, transform .25s ease;
}

/* disable old underline */
.nav-links li a::after{ display:none !important; }

.nav-links li a:hover{
  background: rgba(16,185,129,0.14);
  color: var(--primary-color);
  transform: translateY(-1px);
}

/* Active link = filled pill */
.nav-links li a.active-link{
  background: rgba(16,185,129,0.20);
  border: 1px solid rgba(16,185,129,0.35);
  color: #d1fae5;
}

/* Right donate button more premium */
.donate-btn{
  border-radius: 999px;
  padding: 12px 18px;
  background: linear-gradient(90deg, #10b981, #059669, #f59e0b);
  background-size: 200% 100%;
  border: 1px solid rgba(255,255,255,0.12);
}
.donate-btn:hover{
  background-position: 100% 0;
  transform: translateY(-2px);
}

/* ================== MOBILE / TABLET DRAWER ================== */

/* Make burger look cleaner */
.menu-toggle{
  border: 1px solid rgba(255,255,255,0.10);
  background: rgba(255,255,255,0.04);
  backdrop-filter: blur(10px);
}
.menu-toggle span{
  height: 2px;
}

/* Drawer container */
@media (max-width: 991px){
  .nav-center{
    position: fixed;
    top: 86px; /* same as navbar height */
    left: 0;
    right: 0;

    max-width: 100%;
    width: 100%;

    background: rgba(15, 23, 42, 0.92);
    border-top: 1px solid rgba(255,255,255,0.06);
    backdrop-filter: blur(16px);

    transform: translateY(-10px);
    opacity: 0;
    pointer-events: none;

    max-height: calc(100vh - 86px);
    overflow-y: auto;

    transition: opacity .25s ease, transform .25s ease;
  }

  .nav-center.active{
    opacity: 1;
    transform: translateY(0);
    pointer-events: auto;
  }

  .nav-links{
    width: 100%;
    flex-direction: column;
    align-items: stretch;
    gap: 0;
    padding: 10px 0;
    border-radius: 0;
    background: transparent;
    border: none;
  }

  .nav-links li a{
    border-radius: 0;
    padding: 14px 18px;
    border-bottom: 1px solid rgba(255,255,255,0.06);
    transform: none;
  }

  .nav-links li a:hover{
    background: rgba(16,185,129,0.10);
  }

  .nav-links li a.active-link{
    background: rgba(16,185,129,0.14);
    border-left: 4px solid var(--primary-color);
    border-bottom: 1px solid rgba(255,255,255,0.06);
  }

  .mobile-donate{
    display:block;
    padding: 14px 18px 22px;
  }

  .mobile-donate .donate-btn{
    width: 100%;
    max-width: 360px;
    display: inline-flex;
    justify-content: center;
  }
}

/* Mobile sizing polish */
@media (max-width: 767px){
  body{ padding-top: 82px; }
  .navbar{ height: 82px; }
  .nav-center{ top: 82px; max-height: calc(100vh - 82px); }

  .logo-icon img{ width: 50px; height: 50px; }
  .logo-text h1{ font-size: 1rem; }
  .logo-text p{ font-size: .72rem; }
}

/* Ultra small */
@media (max-width: 480px){
  .navbar{ padding: 0 14px; }
}

/* ================== END ================== */
</style>