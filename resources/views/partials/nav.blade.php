<header>
    <nav class="navbar">
        <div class="logo">
            <div class="logo-icon">
                <img src="https://scontent.fdac7-1.fna.fbcdn.net/v/t39.30808-6/475054914_628267503061184_6035807701151321212_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=2a1932&_nc_eui2=AeHLxd5zRIQu5L0EbwXmmq54RzXRE4KOiMVHNdETgo6IxV3kT5ESVhIOlCyKa8ptV4infLRXHsMu4OvZDuKHcUV_&_nc_ohc=S4sdqTmbmy4Q7kNvwGNQpAv&_nc_oc=AdlbXo4jHMXlhI7mrq9G4DWSQBaiL1qpCF9izl_gKZEPaXohGojOblDhrV7iiIolOqU&_nc_zt=23&_nc_ht=scontent.fdac7-1.fna&_nc_gid=g7vpRiV0sCI_jOOCw8bXDA&oh=00_AfuKkQ5ZNgIHLKAHqQ0XuoSvfFGV0EKxuS_4IY0ZNqG-gg&oe=69A7244F"
                    alt="" height="60" width="60" style="border-radius: 30%;">
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
                <li><a href="#" class="{{ request()->routeIs('home') ? 'active' : '' }}">হোম</a></li>
                <li><a href="#আমাদের সম্পর্কে">আমাদের সম্পর্কে</a></li>
                <li><a href="#কার্যক্রম">কার্যক্রম</a></li>
                <li><a href="#সাফল্যের-গল্প">ইভেন্ট</a></li>
                <li><a href="#গ্যালারি">গ্যালারি</a></li>
                <li><a href="#">ব্লগ</a></li>
                <li><a href="#">যোগাযোগ</a></li>
            </ul>
        </div>

        <div class="nav-actions">
            <button class="icon-btn"><i class="fas fa-globe"></i></button>
            <button class="donate-btn">দান করুন</button>
        </div>
    </nav>
</header>
<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.body;
    const menuToggle = document.getElementById('menu-toggle');
    const navCenter = document.querySelector('.nav-center');
    const navLinks = document.querySelectorAll('.nav-links a');

    // Menu toggle
    if (menuToggle) {
        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            navCenter.classList.toggle('active');
        });
    }

    // Close menu when link is clicked
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (menuToggle) {
                menuToggle.classList.remove('active');
            }
            navCenter.classList.remove('active');
            navLinks.forEach(l => l.classList.remove('active'));
            link.classList.add('active');
        });
    });

    // Theme toggle functionality
    if (themeToggle) {
        const icon = themeToggle.querySelector('i');
        
        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-theme');

            if (body.classList.contains('dark-theme')) {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            } else {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            }
        });
    }

    // Scroll effect for navbar
    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.style.padding = '0.5rem 5%';
            navbar.style.background = 'rgba(15, 23, 42, 1)';
        } else {
            navbar.style.padding = '1rem 5%';
            navbar.style.background = 'rgba(15, 23, 42, 0.9)';
        }
    });
});
</script>

<!-- Custom CSS -->
<style>
:root {
    --primary-color: #10b981;
    --secondary-color: #f59e0b;
    --dark-bg: #0f172a;
    --text-white: #ffffff;
    --text-muted: #cbd5e1;
    --nav-bg: rgba(15, 23, 42, 0.9);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Hind Siliguri', sans-serif;
    background-color: #f8fafc;
    color: #334155;
    line-height: 1.6;
    overflow-x: hidden;
    scroll-behavior: smooth;
}

/* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 5%;
    background-color: var(--nav-bg);
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    gap: 1rem;
}

.logo {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-shrink: 0;
}

.logo-icon {
    background-color: #72a20a;
    color: white;
    width: 32px;
    height: 32px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    font-weight: bold;
    border-radius: 4px;
    flex-shrink: 0;
}

.logo-icon img {
    width: 100%;
    height: 100%;
    border-radius: 4px;
}

.logo-text h1 {
    color: var(--text-white);
    font-size: 1.1rem;
    font-weight: 700;
    line-height: 1.2;
}

.logo-text p {
    color: var(--text-muted);
    font-size: 0.7rem;
    margin-top: -2px;
}

.nav-center {
    display: flex;
    flex: 1;
    justify-content: center;
}

.nav-links {
    display: flex;
    list-style: none;
    gap: 1.5rem;
}

.nav-links li a {
    text-decoration: none;
    color: var(--text-white);
    font-weight: 500;
    font-size: 0.95rem;
    transition: color 0.3s;
}

.nav-links li a:hover,
.nav-links li a.active {
    color: var(--primary-color);
}

.nav-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-shrink: 0;
}

.icon-btn {
    background: none;
    border: none;
    color: var(--text-white);
    font-size: 1.2rem;
    cursor: pointer;
    transition: transform 0.3s;
    padding: 0.5rem;
}

.icon-btn:hover {
    transform: scale(1.1);
}

.donate-btn {
    background: linear-gradient(to right, #72a20a, #d97706);
    color: white;
    border: none;
    padding: 0.6rem 1.2rem;
    border-radius: 6px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}

.donate-btn:hover {
    filter: brightness(1.1);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(217, 119, 6, 0.3);
}

/* Three-Line Menu */
.menu-toggle {
    display: none;
    flex-direction: column;
    background: none;
    border: none;
    cursor: pointer;
    gap: 6px;
    padding: 0.5rem;
    justify-content: center;
    align-items: center;
    transition: all 0.3s ease;
}

.menu-toggle:hover {
    opacity: 0.8;
    transform: scale(1.05);
}

.menu-toggle span {
    width: 28px;
    height: 3px;
    background-color: var(--text-white);
    border-radius: 2px;
    transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    display: block;
}

@keyframes rotateMenu {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

.menu-toggle.active {
    animation: rotateMenu 0.6s ease-in-out;
}

.menu-toggle.active span:nth-child(1) {
    transform: translateY(9px) rotate(45deg);
}

.menu-toggle.active span:nth-child(2) {
    opacity: 0;
}

.menu-toggle.active span:nth-child(3) {
    transform: translateY(-9px) rotate(-45deg);
}

/* Tablet (768px - 1024px) */
@media (max-width: 1024px) {
    .navbar {
        padding: 0.75rem 4%;
    }

    .logo-text h1 {
        font-size: 1rem;
    }

    .logo-text p {
        font-size: 0.65rem;
    }

    .nav-links {
        gap: 1rem;
    }

    .nav-links li a {
        font-size: 0.85rem;
    }

    .donate-btn {
        padding: 0.5rem 1rem;
        font-size: 0.8rem;
    }
}

/* Mobile (max 768px) */
@media (max-width: 768px) {
    .navbar {
        flex-wrap: wrap;
        padding: 0.75rem 3%;
        background-color: var(--nav-bg);
    }

    .logo {
        gap: 8px;
    }

    .logo-icon {
        width: 28px;
        height: 28px;
        font-size: 14px;
    }

    .logo-text h1 {
        font-size: 0.9rem;
        font-weight: 600;
    }

    .logo-text p {
        font-size: 0.6rem;
    }

    .menu-toggle {
        display: flex;
    }

    .menu-toggle span {
        width: 22px;
        height: 2.5px;
    }

    .nav-center {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background-color: var(--nav-bg);
        flex-direction: column;
        display: none;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .nav-center.active {
        display: flex;
    }

    .nav-links {
        flex-direction: column;
        gap: 0;
        width: 100%;
        padding: 1rem 0;
    }

    .nav-links li {
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .nav-links li a {
        display: block;
        padding: 1rem 3%;
        font-size: 0.95rem;
    }

    .nav-actions {
        gap: 0.5rem;
        order: -1;
    }

    .icon-btn {
        font-size: 1rem;
        padding: 0.4rem;
    }

    .donate-btn {
        padding: 0.5rem 0.8rem;
        font-size: 0.75rem;
    }
}

/* Small Mobile (max 480px) */
@media (max-width: 480px) {
    .navbar {
        padding: 0.6rem 3%;
    }

    .logo {
        gap: 6px;
    }

    .logo-icon {
        width: 24px;
        height: 24px;
        font-size: 12px;
    }

    .logo-text h1 {
        font-size: 0.75rem;
        font-weight: 600;
    }

    .logo-text p {
        font-size: 0.5rem;
        display: none;
    }

    .menu-toggle span {
        width: 20px;
        height: 2px;
    }

    .nav-links li a {
        padding: 0.75rem 3%;
        font-size: 0.85rem;
    }

    .icon-btn {
        font-size: 0.9rem;
        padding: 0.3rem;
    }

    .donate-btn {
        padding: 0.4rem 0.6rem;
        font-size: 0.65rem;
    }
}

body.dark-theme {
    background-color: #1a1a2e;
    color: #e0e0e0;
}
</style>