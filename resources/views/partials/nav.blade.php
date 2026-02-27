<header>
    <nav class="navbar">
        <div class="logo">
            <div class="logo-icon">
                <img src="https://scontent.fdac7-1.fna.fbcdn.net/v/t39.30808-6/475054914_628267503061184_6035807701151321212_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=2a1932&_nc_eui2=AeHLxd5zRIQu5L0EbwXmmq54RzXRE4KOiMVHNdETgo6IxV3kT5ESVhIOlCyKa8ptV4infLRXHsMu4OvZDuKHcUV_&_nc_ohc=S4sdqTmbmy4Q7kNvwGNQpAv&_nc_oc=AdlbXo4jHMXlhI7mrq9G4DWSQBaiL1qpCF9izl_gKZEPaXohGojOblDhrV7iiIolOqU&_nc_zt=23&_nc_ht=scontent.fdac7-1.fna&_nc_gid=XzBmsmKUlPL8cOk608cJGQ&oh=00_AftfSneNraOHOfA2pr9FiX5HoEtc1OYHRVeSPyZa_nnj4w&oe=69A794CF"
                    alt="" height="120" width="80" style="border-radius: 30%;">
            </div>
            <div class="logo-text">
                <h1>ঝাউগড়া কল্যাণ সংগঠন</h1>
                <p>সামাজিক কল্যাণ সংস্থা</p>
            </div>
        </div>

        <button class="menu-toggle" id="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="nav-center">
            <ul class="nav-links">
                <li><a href="#হোম">হোম</a></li>
                <li><a href="#আমাদের সম্পর্কে">আমাদের সম্পর্কে</a></li>
                <li><a href="#কার্যক্রম">কার্যক্রম</a></li>
                <li><a href="#ইভেন্ট">ইভেন্ট</a></li>
                <li><a href="#গ্যালারি">গ্যালারি</a></li>
                <li><a href="#ব্লগ">ব্লগ</a></li>
                <li><a href="#যোগাযোগ">যোগাযোগ</a></li>
            </ul>
        </div>
    </nav>
</header>
<script>
const menuToggle = document.getElementById("menu-toggle");
const navCenter = document.querySelector(".nav-center");
const navLinks = document.querySelectorAll(".nav-links a");

// Toggle Menu
menuToggle.addEventListener("click", () => {
    navCenter.classList.toggle("active");
    menuToggle.classList.toggle("open");
});

// Active link highlight
navLinks.forEach(link => {
    link.addEventListener("click", function () {
        navLinks.forEach(nav => nav.classList.remove("active-link"));
        this.classList.add("active-link");

        // Mobile এ click করলে menu বন্ধ হবে
        navCenter.classList.remove("active");
        menuToggle.classList.remove("open");
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
    --nav-bg: rgba(15, 23, 42, 0.95);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Hind Siliguri', sans-serif;
}

/* ================= NAVBAR ================= */

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.4rem 5%;
    /* 🔥 Height Increased */
    background: var(--nav-bg);
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25);
    transition: 0.3s;
}

/* Logo */
.logo {
    display: flex;
    align-items: center;
    gap: 15px;
}

.logo-icon img {
    width: 65px;
    height: 65px;
}

.logo-text h1 {
    color: var(--text-white);
    font-size: 1.4rem;
    /* 🔥 Bigger */
    font-weight: 700;
}

.logo-text p {
    color: var(--text-muted);
    font-size: 0.85rem;
    /* 🔥 Bigger */
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
    /* 🔥 More spacing */
}

.nav-links li a {
    text-decoration: none;
    color: var(--text-white);
    font-weight: 600;
    font-size: 1.05rem;
    /* 🔥 Bigger text */
    transition: 0.3s;
    position: relative;
}

.nav-links li a::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 0;
    height: 2px;
    background: var(--primary-color);
    transition: 0.3s;
}

.nav-links li a:hover {
    color: var(--primary-color);
}

.nav-links li a:hover::after {
    width: 100%;
}

/* Right Side */
.nav-actions {
    display: flex;
    align-items: center;
    gap: 1.2rem;
}

.icon-btn {
    background: none;
    border: none;
    color: white;
    font-size: 1.4rem;
    /* 🔥 Bigger */
    cursor: pointer;
}

/* Donate Button */
.donate-btn {
    background: linear-gradient(to right, #72a20a, #d97706);
    color: white;
    border: none;
    padding: 0.8rem 1.6rem;
    /* 🔥 Bigger button */
    border-radius: 8px;
    font-size: 1rem;
    /* 🔥 Bigger */
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}

.donate-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(217, 119, 6, 0.4);
}

/* ============ MOBILE ============ */

.menu-toggle {
    display: none;
    flex-direction: column;
    gap: 6px;
    background: none;
    border: none;
    cursor: pointer;
}

.menu-toggle span {
    width: 28px;
    height: 3px;
    background: white;
}

@media(max-width:768px) {

    .navbar {
        padding: 1rem 4%;
    }

    .nav-center {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: var(--nav-bg);
        flex-direction: column;

        /* Animation */
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease;
    }

    .nav-center.active {
        max-height: 500px;
    }

    .nav-links {
        flex-direction: column;
        gap: 0;
    }

    .nav-links li a {
        display: block;
        padding: 1rem 4%;
    }

    .menu-toggle {
        display: flex;
    }

    .logo-text h1 {
        font-size: 1rem;
    }

    .donate-btn {
        padding: 0.6rem 1rem;
        font-size: 0.85rem;
    }
}









/* ========================= */
/* Hamburger 360 + X Effect */
/* ========================= */

.menu-toggle {
    transition: transform 0.6s ease;
}

.menu-toggle.open {
    transform: rotate(360deg);
}

/* Lines animation */
.menu-toggle span {
    transition: 0.4s ease;
}

.menu-toggle.open span:nth-child(1) {
    transform: rotate(45deg) translate(6px, 6px);
}

.menu-toggle.open span:nth-child(2) {
    opacity: 0;
}

.menu-toggle.open span:nth-child(3) {
    transform: rotate(-45deg) translate(6px, -6px);
}

/* ========================= */
/* Active Menu Highlight */
/* ========================= */

.nav-links a.active-link {
    color: var(--primary-color);
}

.nav-links a.active-link::after {
    width: 30%;
}

/* Smooth menu animation */
@media(max-width:768px){
    .nav-center {
        transition: max-height 0.4s ease, opacity 0.4s ease;
        opacity: 0;
    }

    .nav-center.active {
        opacity: 1;
    }
}
</style>