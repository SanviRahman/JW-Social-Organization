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
            <a href="https://sfashanto.netlify.app/" target="_blank"><b style="color: #ffbd39;"> SFA Shanto</b></a></p>
        <div class="footer-policy">
            <a href="#">গোপনীয়তা নীতি</a>
            <a href="#">শর্তাবলী</a>
        </div>
    </div>

</footer>

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
<style>
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