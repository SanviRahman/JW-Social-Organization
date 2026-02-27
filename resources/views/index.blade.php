@extends('home.layout')

@section('title', 'ঝাউগড়া কল্যাণ সংগঠন - হোম')


@section('content')
<main>
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
</main>
@endsection

@push('styles')
<style>
/* Hero Section */
.hero {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('https://images.unsplash.com/photo-1541976844346-f18aeac57b06?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');
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
</style>
@endpush