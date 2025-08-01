<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GapTrade</title>
    <style>
        @font-face {
            font-family: 'IRANSans';
            src: url('https://cdn.jsdelivr.net/gh/rastikerdar/iran-sans-font@master/dist/IRANSansWeb.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'IRANSans', sans-serif;
        }

        body {
            background-color: #021118;
            color: white;
            width: 100%;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* ============= BACKGROUND IMAGE ============= */
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .hero-background img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            object-position: left center;
        }

        /* ============= HEADER STYLES ============= */
        .header {
            height: 98px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 3.5rem;
            position: relative;
            z-index: 10;
            background: transparent;
        }

        .header-right {
            display: flex;
            align-items: center;
        }

        .logo-container {
            display: flex;
            align-items: center;
            margin-left: 2rem;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .logo-img {
            display: inline-block;
            width: 204px;
        }

        .nav-container {
            display: flex;
            align-items: center;
            margin-right: -17px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-item {
            margin: 0 1rem;
        }

        .nav-link {
            display: flex;
            align-items: center;
            color: rgba(255, 255, 255, 0.5);
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            transition: color 0.3s ease;
            padding: 0.5rem 0;
            position: relative;
        }

        .nav-link:hover {
            color: rgba(255, 255, 255, 0.8);
        }

        .nav-link.active {
            color: white;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            right: 0;
            width: 100%;
            height: 2px;
            background-color: #ef8303;
            border-radius: 1px;
            transform-origin: right;
            transition: transform 0.3s ease;
        }

        .nav-link svg {
            margin-left: 5px;
        }

        .header-left {
            display: flex;
            align-items: center;
        }

        .auth-btn {
            padding: 0.5rem 1.2rem;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            background-color: #ef8303;
            border: 1px solid #ef8303;
            color: white;
        }

        .auth-btn:hover {
            background-color: #ff9419;
            border-color: #ff9419;
        }

        @keyframes activateLink {
            0% {
                transform: scaleX(0);
            }
            100% {
                transform: scaleX(1);
            }
        }

        .nav-link.animate::after {
            animation: activateLink 0.3s ease forwards;
        }

        /* ============= HERO SECTION STYLES ============= */
        .hero-section {
            position: relative;
            width: 100%;
            min-height: calc(100vh - 98px);
            z-index: 5;
            display: flex;
            align-items: center;
        }

        .hero-content {
            width: 100%;
            margin: 0 auto;
            padding: 0 99px;
            justify-content: flex-end;
            align-items: center;
        }

        .hero-text {
            max-width: 600px;
            text-align: right;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero-title span {
            color: #ef8303;
        }

        .hero-subtitle {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: rgba(255, 255, 255, 0.9);
        }

        .hero-description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 2rem;
        }

        .hero-stats {
            display: flex;
            margin-bottom: 2.5rem;
        }

        .stat-item {
            margin-left: 3rem;
        }

        .stat-number {
            display: block;
            font-size: 2.2rem;
            font-weight: 700;
            color: #ef8303;
            margin-bottom: 0.3rem;
        }

        .stat-text {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }

        .hero-cta {
            display: flex;
            gap: 1rem;
        }

        .cta-button {
            padding: 0.8rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .cta-button.primary {
            background-color: #ef8303;
            border: 1px solid #ef8303;
            color: white;
        }

        .cta-button.primary:hover {
            background-color: #ff9419;
            border-color: #ff9419;
        }

        .cta-button.secondary {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
        }

        .cta-button.secondary:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
        }

        /* ============= RESPONSIVE STYLES ============= */
        @media (max-width: 1200px) {
            .hero-title {
                font-size: 3rem;
            }

            .hero-subtitle {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 992px) {
            .header {
                padding: 0 2rem;
            }

            .hero-content {
                justify-content: center;
                padding: 30px;
            }

            .hero-text {
                max-width: 100%;
                text-align: center;
            }

            .hero-stats {
                justify-content: center;
            }

            .hero-cta {
                justify-content: center;
            }

            .hero-background img {
                object-position: center center;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 0 1rem;
                height: 80px;
            }

            .logo-img {
                width: 150px;
            }

            .nav-item {
                margin: 0 0.5rem;
            }

            .nav-link {
                font-size: 14px;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.3rem;
            }

            .hero-description {
                font-size: 1rem;
            }

            .stat-number {
                font-size: 1.8rem;
            }

            .stat-item {
                margin-left: 1.5rem;
            }

            .cta-button {
                padding: 0.7rem 1.2rem;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .hero-stats {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }

            .stat-item {
                margin-left: 0;
            }

            .hero-cta {
                flex-direction: column;
                width: 100%;
            }

            .cta-button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<!-- Background Image -->
<div class="hero-background">
    <img src="header.png" alt="هوش مصنوعی اربیتراژ">
</div>

<!-- Header Section -->
<header class="header">
    <div class="header-right">
        <div class="logo-container">
            <a href="#" class="logo">
                <img src="logo3.png" class="logo-img" alt="GapTrade Logo">
            </a>
        </div>

        <nav class="nav-container">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-nav="arbitrage">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                        آربیتراژ
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-nav="prices">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                        ارزها
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-nav="exchanges">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                        صرافی‌ها
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-nav="blog">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                        </svg>
                        پلن‌ها
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="header-left">
        <button class="auth-btn">ورود / ثبت‌نام</button>
    </div>
</header>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content">
        <div class="hero-text">
            <h1 class="hero-title">هوش مصنوعی <span>اربیتراژ</span></h1>
            <h2 class="hero-subtitle">کشف هوشمند فرصت‌های سودآوری</h2>
            <p class="hero-description">
                سیستم هوشمند GapTrade با تحلیل لحظه‌ای بازار ارزهای دیجیتال، اختلاف قیمت بین صرافی‌های مختلف را شناسایی می‌کند و فرصت‌های سودآوری را به شما نشان می‌دهد.
            </p>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">۶۸۵+</span>
                    <span class="stat-text">فرصت شناسایی شده امروز</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">۱۲٪</span>
                    <span class="stat-text">میانگین سود آربیتراژ</span>
                </div>
            </div>
            <div class="hero-cta">
                <button class="cta-button primary">شروع رایگان</button>
                <button class="cta-button secondary">نمایش فرصت‌های امروز</button>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Menu item active state with animation
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();

                // Remove active class from all links
                navLinks.forEach(item => {
                    item.classList.remove('active');
                    item.classList.remove('animate');
                });

                // Add active class to clicked link
                link.classList.add('active');
                link.classList.add('animate');

                // Remove animation class after animation completes
                setTimeout(() => {
                    link.classList.remove('animate');
                }, 300);
            });
        });

        // Check if any link is already active
        if (!document.querySelector('.nav-link.active')) {
            navLinks[0].classList.add('active');
        }
    });
</script>


<!-- بخش فرصت‌های آربیتراژ -->
<section class="arbitrage-opportunities">
    <div class="section-header">
        <h2 class="section-title">فرصت‌های برتر آربیتراژ</h2>
        <p class="section-subtitle">فرصت‌های سودآور امروز</p>
    </div>

    <div class="opportunities-grid">
        <!-- کارت فرصت اول -->
        <div class="opportunity-card">
            <div class="card-header">
                <div class="card-date">۱۸ اردیبهشت ۱۴۰۴</div>
                <div class="card-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="5" r="1"></circle>
                        <circle cx="12" cy="19" r="1"></circle>
                    </svg>
                </div>
            </div>

            <div class="card-content">
                <h3 class="opportunity-title">تتر (USDT)</h3>
                <p class="opportunity-subtitle">خرید و فروش استیبل‌کوین</p>

                <div class="progress-labels">
                    <span class="risk-label">درصد ریسک</span>
                    <span class="risk-value">۵٪</span>
                </div>
                <div class="progress-container">
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 5%;"></div>
                    </div>
                </div>

                <div class="opportunity-details">
                    <div class="detail-item">
                        <span class="detail-label">خرید از:</span>
                        <span class="detail-value">نوبیتکس</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">فروش به:</span>
                        <span class="detail-value">والکس</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">اختلاف:</span>
                        <span class="detail-value highlight">۴٪</span>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <div class="discovery-time">
                    <span>۲ ساعت پیش کشف شده</span>
                </div>
            </div>
        </div>

        <!-- کارت فرصت دوم -->
        <div class="opportunity-card">
            <div class="card-header">
                <div class="card-date">۱۸ اردیبهشت ۱۴۰۴</div>
                <div class="card-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="5" r="1"></circle>
                        <circle cx="12" cy="19" r="1"></circle>
                    </svg>
                </div>
            </div>

            <div class="card-content">
                <h3 class="opportunity-title">بیت‌کوین (BTC)</h3>
                <p class="opportunity-subtitle">ارز دیجیتال مادر</p>

                <div class="progress-labels">
                    <span class="risk-label">درصد ریسک</span>
                    <span class="risk-value">۱۵٪</span>
                </div>
                <div class="progress-container">
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 15%;"></div>
                    </div>
                </div>

                <div class="opportunity-details">
                    <div class="detail-item">
                        <span class="detail-label">خرید از:</span>
                        <span class="detail-value">والکس</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">فروش به:</span>
                        <span class="detail-value">اکسیر</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">اختلاف:</span>
                        <span class="detail-value highlight">۲.۵٪</span>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <div class="discovery-time">
                    <span>۱ ساعت پیش کشف شده</span>
                </div>
            </div>
        </div>

        <!-- کارت فرصت سوم -->
        <div class="opportunity-card">
            <div class="card-header">
                <div class="card-date">۱۸ اردیبهشت ۱۴۰۴</div>
                <div class="card-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="5" r="1"></circle>
                        <circle cx="12" cy="19" r="1"></circle>
                    </svg>
                </div>
            </div>

            <div class="card-content">
                <h3 class="opportunity-title">اتریوم (ETH)</h3>
                <p class="opportunity-subtitle">پلتفرم قراردادهای هوشمند</p>

                <div class="progress-labels">
                    <span class="risk-label">درصد ریسک</span>
                    <span class="risk-value">۳۵٪</span>
                </div>
                <div class="progress-container">
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 35%;"></div>
                    </div>
                </div>

                <div class="opportunity-details">
                    <div class="detail-item">
                        <span class="detail-label">خرید از:</span>
                        <span class="detail-value">رمزینکس</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">فروش به:</span>
                        <span class="detail-value">نوبیتکس</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">اختلاف:</span>
                        <span class="detail-value highlight">۳.۲٪</span>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <div class="discovery-time">
                    <span>۳ ساعت پیش کشف شده</span>
                </div>
            </div>
        </div>

        <!-- کارت فرصت چهارم -->
        <div class="opportunity-card">
            <div class="card-header">
                <div class="card-date">۱۸ اردیبهشت ۱۴۰۴</div>
                <div class="card-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="5" r="1"></circle>
                        <circle cx="12" cy="19" r="1"></circle>
                    </svg>
                </div>
            </div>

            <div class="card-content">
                <h3 class="opportunity-title">بایننس کوین (BNB)</h3>
                <p class="opportunity-subtitle">ارز اختصاصی صرافی بایننس</p>

                <div class="progress-labels">
                    <span class="risk-label">درصد ریسک</span>
                    <span class="risk-value">۶۰٪</span>
                </div>
                <div class="progress-container">
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 60%;"></div>
                    </div>
                </div>

                <div class="opportunity-details">
                    <div class="detail-item">
                        <span class="detail-label">خرید از:</span>
                        <span class="detail-value">بیت‌پین</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">فروش به:</span>
                        <span class="detail-value">رمزینکس</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">اختلاف:</span>
                        <span class="detail-value highlight">۱.۸٪</span>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <div class="discovery-time">
                    <span>۴ ساعت پیش کشف شده</span>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    /* استایل‌های بخش فرصت‌های آربیتراژ */
    .arbitrage-opportunities {
        padding: 4rem 0;
        background-color: #0a121c;
        position: relative;
        z-index: 10;
    }

    .section-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #fff;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.6);
    }

    .opportunities-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .opportunity-card {
        position: relative;
        background: #1a2432; /* رنگ پایه */
        border-radius: 18px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* سایه قوی‌تر برای عمق بیشتر */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: radial-gradient(ellipse at right top, rgba(239, 131, 3, 0.93) 0%, #1a2432 47%, #1a2432 100%);

    }

    /* بردر گرادیانت */
    .opportunity-card::before {
        position: absolute;
        content: "";
        top: 0;
        width: 100%;
        height: 100%;
        border-radius: 18px;
        z-index: -1;
        border: 2px solid transparent;
        background: linear-gradient(45deg, #1a2432, #1a2432, #1a2432, #1a2432, #ef8303) border-box;
        -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: destination-out;
        mask-composite: exclude;
    }
    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.2rem 1.5rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        position: relative;
        z-index: 2;
    }

    .card-date {
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.7);
    }

    .card-menu {
        width: 24px;
        height: 24px;
        color: rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: color 0.2s ease;
    }

    .card-menu:hover {
        color: rgba(255, 255, 255, 0.8);
    }

    .card-content {
        padding: 1.5rem;
        flex-grow: 1;
        position: relative;
        z-index: 2;
    }

    .opportunity-title {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 0.3rem;
        color: #fff;
    }

    .opportunity-subtitle {
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.5);
        margin-bottom: 1.5rem;
    }

    .progress-labels {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.5rem;
    }

    .risk-label {
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.6);
    }

    .risk-value {
        font-size: 0.85rem;
        font-weight: 700;
        color: #fff;
    }

    .progress-container {
        margin-bottom: 1.8rem;
    }

    .progress-bar {
        height: 6px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 3px;
        overflow: hidden;
    }

    /* Styling progress fill based on risk percentage */
    .progress-fill {
        height: 100%;
        border-radius: 3px;
        transition: width 0.5s ease;
    }

    /* Less than 10% - Safe (Green) */
    .progress-fill[style*="width: 5%"],
    .progress-fill[style*="width: 6%"],
    .progress-fill[style*="width: 7%"],
    .progress-fill[style*="width: 8%"],
    .progress-fill[style*="width: 9%"] {
        background: linear-gradient(90deg, #0be881, #2ecc71);
    }

    /* 10% to 25% - Low Risk (Blue) */
    .progress-fill[style*="width: 10%"],
    .progress-fill[style*="width: 11%"],
    .progress-fill[style*="width: 12%"],
    .progress-fill[style*="width: 13%"],
    .progress-fill[style*="width: 14%"],
    .progress-fill[style*="width: 15%"],
    .progress-fill[style*="width: 16%"],
    .progress-fill[style*="width: 17%"],
    .progress-fill[style*="width: 18%"],
    .progress-fill[style*="width: 19%"],
    .progress-fill[style*="width: 20%"],
    .progress-fill[style*="width: 21%"],
    .progress-fill[style*="width: 22%"],
    .progress-fill[style*="width: 23%"],
    .progress-fill[style*="width: 24%"],
    .progress-fill[style*="width: 25%"] {
        background: linear-gradient(90deg, #0fbcf9, #4a69bd);
    }

    /* 25% to 50% - Medium Risk (Orange) */
    .progress-fill[style*="width: 26%"],
    .progress-fill[style*="width: 27%"],
    .progress-fill[style*="width: 28%"],
    .progress-fill[style*="width: 29%"],
    .progress-fill[style*="width: 30%"],
    .progress-fill[style*="width: 31%"],
    .progress-fill[style*="width: 32%"],
    .progress-fill[style*="width: 33%"],
    .progress-fill[style*="width: 34%"],
    .progress-fill[style*="width: 35%"],
    .progress-fill[style*="width: 36%"],
    .progress-fill[style*="width: 37%"],
    .progress-fill[style*="width: 38%"],
    .progress-fill[style*="width: 39%"],
    .progress-fill[style*="width: 40%"],
    .progress-fill[style*="width: 41%"],
    .progress-fill[style*="width: 42%"],
    .progress-fill[style*="width: 43%"],
    .progress-fill[style*="width: 44%"],
    .progress-fill[style*="width: 45%"],
    .progress-fill[style*="width: 46%"],
    .progress-fill[style*="width: 47%"],
    .progress-fill[style*="width: 48%"],
    .progress-fill[style*="width: 49%"],
    .progress-fill[style*="width: 50%"] {
        background: linear-gradient(90deg, #ef8303, #ff9f1a);
    }

    /* More than 50% - High Risk (Red) */
    .progress-fill[style*="width: 5"] {
        background: linear-gradient(90deg, #eb3b5a, #f53b57);
    }
    .progress-fill[style*="width: 6"],
    .progress-fill[style*="width: 7"],
    .progress-fill[style*="width: 8"],
    .progress-fill[style*="width: 9"] {
        background: linear-gradient(90deg, #eb3b5a, #f53b57);
    }

    .opportunity-details {
        margin-bottom: 1.5rem;
    }

    .detail-item {
        display: flex;
        justify-content: space-between;
        padding: 0.6rem 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .detail-item:last-child {
        border-bottom: none;
    }

    .detail-label {
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.9rem;
    }

    .detail-value {
        font-weight: 500;
        color: #fff;
        font-size: 0.9rem;
    }

    .detail-value.highlight {
        color: #0be881;
        font-weight: 700;
    }

    .card-footer {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 1.2rem 1.5rem;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        background-color: rgba(0, 0, 0, 0.2);
        position: relative;
        z-index: 2;
    }

    .discovery-time {
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.7);
        background-color: rgba(255, 255, 255, 0.1);
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        text-align: center;
    }

    /* رسپانسیو */
    @media (max-width: 992px) {
        .opportunities-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .opportunities-grid {
            grid-template-columns: 1fr;
            max-width: 450px;
        }

        .section-title {
            font-size: 2rem;
        }
    }
</style>

<!-- بخش مقایسه قیمت ارزها -->
<section class="price-comparison-section">
    <div class="section-header">
        <h2 class="section-title">مقایسه قیمت ارزهای دیجیتال</h2>
        <p class="section-subtitle">قیمت‌های لحظه‌ای در صرافی‌های مختلف</p>
    </div>

    <div class="crypto-tabs">
        <button class="tab-btn active" data-crypto="tether">تتر (USDT)</button>
        <button class="tab-btn" data-crypto="bitcoin">بیت‌کوین (BTC)</button>
        <button class="tab-btn" data-crypto="ethereum">اتریوم (ETH)</button>
        <button class="tab-btn" data-crypto="bnb">بایننس کوین (BNB)</button>
        <button class="tab-btn" data-crypto="more">سایر ارزها</button>
    </div>

    <div class="table-container">
        <table class="price-table">
            <thead>
            <tr>
                <th>صرافی</th>
                <th>قیمت خرید (تومان)</th>
                <th>قیمت فروش (تومان)</th>
                <th>اختلاف قیمت</th>
                <th>حجم معاملات (24h)</th>
            </tr>
            </thead>
            <tbody>
            <tr class="best-buy">
                <td>
                    <div class="exchange-info">
                        <div class="exchange-logo">
                            <img src="nobitex.png" alt="نوبیتکس">
                        </div>
                        <div class="exchange-name">نوبیتکس</div>
                    </div>
                </td>
                <td class="price-cell best">
                    <span class="price-value">59,120,000</span>
                    <span class="price-tag best-tag">بهترین خرید</span>
                </td>
                <td class="price-cell">60,390,000</td>
                <td class="diff-cell">
                    <span class="diff-value">2.1%</span>
                </td>
                <td>
                    <div class="volume-bar">
                        <div class="volume-fill" style="width: 85%;"></div>
                        <span>1.2 میلیارد</span>
                    </div>
                </td>

            </tr>
            <tr>
                <td>
                    <div class="exchange-info">
                        <div class="exchange-logo">
                            <img src="nobitex.png" alt="والکس">
                        </div>
                        <div class="exchange-name">والکس</div>
                    </div>
                </td>
                <td class="price-cell">59,450,000</td>
                <td class="price-cell best">
                    <span class="price-value">58,870,000</span>
                    <span class="price-tag best-tag">بهترین فروش</span>
                </td>
                <td class="diff-cell">
                    <span class="diff-value">1.0%</span>
                </td>
                <td>
                    <div class="volume-bar">
                        <div class="volume-fill" style="width: 65%;"></div>
                        <span>820 میلیون</span>
                    </div>
                </td>

            </tr>
            <tr>
                <td>
                    <div class="exchange-info">
                        <div class="exchange-logo">
                            <img src="nobitex.png" alt="رمزینکس">
                        </div>
                        <div class="exchange-name">رمزینکس</div>
                    </div>
                </td>
                <td class="price-cell">59,780,000</td>
                <td class="price-cell">59,100,000</td>
                <td class="diff-cell">
                    <span class="diff-value">1.1%</span>
                </td>
                <td>
                    <div class="volume-bar">
                        <div class="volume-fill" style="width: 45%;"></div>
                        <span>650 میلیون</span>
                    </div>
                </td>

            </tr>
            <tr>
                <td>
                    <div class="exchange-info">
                        <div class="exchange-logo">
                            <img src="nobitex.png" alt="اکسیر">
                        </div>
                        <div class="exchange-name">اکسیر</div>
                    </div>
                </td>
                <td class="price-cell">60,100,000</td>
                <td class="price-cell">59,450,000</td>
                <td class="diff-cell">
                    <span class="diff-value">1.1%</span>
                </td>
                <td>
                    <div class="volume-bar">
                        <div class="volume-fill" style="width: 35%;"></div>
                        <span>420 میلیون</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="exchange-info">
                        <div class="exchange-logo">
                            <img src="nobitex.png" alt="بیت‌پین">
                        </div>
                        <div class="exchange-name">بیت‌پین</div>
                    </div>
                </td>
                <td class="price-cell">60,250,000</td>
                <td class="price-cell">59,570,000</td>
                <td class="diff-cell">
                    <span class="diff-value">1.1%</span>
                </td>
                <td>
                    <div class="volume-bar">
                        <div class="volume-fill" style="width: 25%;"></div>
                        <span>310 میلیون</span>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="price-cards-mobile">
        <!-- کارت‌های موبایل با همان اطلاعات ولی با ساختار عمودی -->
        <div class="price-card best-buy">
            <div class="card-header">
                <div class="exchange-info">
                    <div class="exchange-logo">
                        <img src="nobitex.png" alt="نوبیتکس">
                    </div>
                    <div class="exchange-name">نوبیتکس</div>
                </div>
                <div class="best-tag">بهترین خرید</div>
            </div>
            <div class="card-body">
                <div class="price-row">
                    <div class="price-label">قیمت خرید:</div>
                    <div class="price-value best">59,120,000 تومان</div>
                </div>
                <div class="price-row">
                    <div class="price-label">قیمت فروش:</div>
                    <div class="price-value">60,390,000 تومان</div>
                </div>
                <div class="price-row">
                    <div class="price-label">اختلاف قیمت:</div>
                    <div class="diff-value">2.1%</div>
                </div>
                <div class="price-row">
                    <div class="price-label">حجم معاملات (24h):</div>
                    <div class="volume-bar">
                        <div class="volume-fill" style="width: 85%;"></div>
                        <span>1.2 میلیارد</span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="action-btn full-width">خرید</button>
            </div>
        </div>

        <!-- کارت‌های دیگر به همین صورت -->
    </div>

    <div class="update-time">
        <span class="time-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
            </svg>
        </span>
        <span class="time-text">آخرین به‌روزرسانی: ۲ دقیقه پیش</span>
    </div>
</section>
<style>
    /* استایل‌های بخش مقایسه قیمت */
    .price-comparison-section {
        padding: 4rem 0;
        background-color: #0a121c;
        position: relative;
        z-index: 10;
    }

    .section-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #fff;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.6);
    }

    /* تب‌ها */
    .crypto-tabs {
        display: flex;
        justify-content: center;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        gap: 0.5rem;
    }

    .tab-btn {
        background-color: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        color: rgba(255, 255, 255, 0.7);
        padding: 0.8rem 1.5rem;
        font-size: 0.95rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .tab-btn:hover {
        background-color: rgba(255, 255, 255, 0.1);
        color: rgba(255, 255, 255, 0.9);
    }

    .tab-btn.active {
        background-color: rgba(239, 131, 3, 0.15);
        border-color: #ef8303;
        color: #ef8303;
    }

    /* جدول قیمت‌ها */
    .table-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
        overflow-x: auto;
        border-radius: 12px;
        background: rgba(26, 36, 50, 0.6);
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
    }

    .price-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        color: #fff;
    }

    .price-table thead th {
        padding: 1.2rem 1rem;
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.7);
        font-weight: 600;
        text-align: right;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        position: sticky;
        top: 0;
        background: rgba(26, 36, 50, 0.95);
        z-index: 10;
    }

    .price-table tbody tr {
        transition: background-color 0.3s ease;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .price-table tbody tr:hover {
        background-color: rgba(239, 131, 3, 0.05);
    }

    .price-table tbody tr.best-buy {
        background: radial-gradient(ellipse at right top, rgba(239, 131, 3, 0.15) 0%, rgba(26, 36, 50, 0.6) 70%);
    }

    .price-table tbody td {
        padding: 1.2rem 1rem;
        font-size: 0.95rem;
        vertical-align: middle;
    }

    /* ستون صرافی */
    .exchange-info {
        display: flex;
        align-items: center;
    }

    .exchange-logo {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        overflow: hidden;
        margin-left: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #ffffff;
    }

    .exchange-logo img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .exchange-name {
        font-weight: 600;
    }

    /* ستون قیمت */
    .price-cell {
        position: relative;
    }

    .price-cell.best {
        color: #0be881;
        font-weight: 700;
    }

    .price-tag {
        display: inline-block;
        font-size: 0.65rem;
        padding: 1px 8px;
        border-radius: 10px;
        background-color: rgba(11, 232, 129, 0.15);
        color: #0be881;
        font-weight: 700;
        vertical-align: middle;
        margin-bottom: 3px;
        margin-right: 3px;
    }

    /* ستون اختلاف قیمت */
    .diff-cell {
        text-align: center;
    }

    .diff-value {
        display: inline-block;
        font-weight: 700;
        color: #0be881;
    }

    /* ستون حجم معاملات */
    .volume-bar {
        height: 6px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 3px;
        overflow: hidden;
        position: relative;
    }

    .volume-fill {
        height: 100%;
        background: linear-gradient(90deg, #ef8303, #ff9419);
        border-radius: 3px;
    }

    .volume-bar span {
        position: absolute;
        right: 0;
        top: 9px;
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.7);
    }

    /* ستون عملیات */
    .action-btn {
        padding: 0.5rem 1.2rem;
        border-radius: 8px;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        background-color: #ef8303;
        border: 1px solid #ef8303;
        color: white;
        transition: all 0.3s ease;
    }

    .action-btn:hover {
        background-color: #ff9419;
        border-color: #ff9419;
    }

    .action-btn.full-width {
        width: 100%;
    }

    /* نمایش زمان به‌روزرسانی */
    .update-time {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 1.5rem;
        color: rgba(255, 255, 255, 0.5);
        font-size: 0.9rem;
    }

    .time-icon {
        margin-left: 0.5rem;
    }

    /* کارت‌های موبایل */
    .price-cards-mobile {
        display: none;
        max-width: 600px;
        margin: 0 auto;
        padding: 0 20px;
        gap: 1.5rem;
    }

    .price-card {
        background: rgba(26, 36, 50, 0.6);
        backdrop-filter: blur(10px);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .price-card.best-buy {
        background: radial-gradient(ellipse at right top, rgba(239, 131, 3, 0.3) 0%, rgba(26, 36, 50, 0.6) 70%);
    }

    .price-card .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.2rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .price-card .card-body {
        padding: 1.2rem;
    }

    .price-row {
        display: flex;
        justify-content: space-between;
        padding: 0.6rem 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .price-row:last-child {
        border-bottom: none;
    }

    .price-label {
        color: rgba(255, 255, 255, 0.6);
    }

    .price-card .card-footer {
        padding: 1.2rem;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    /* رسپانسیو */
    @media (max-width: 1200px) {
        .section-title {
            font-size: 2.2rem;
        }

        .tab-btn {
            padding: 0.7rem 1.2rem;
            font-size: 0.9rem;
        }
    }

    @media (max-width: 992px) {
        .table-container {
            padding: 0 10px;
        }

        .price-table thead th,
        .price-table tbody td {
            padding: 1rem 0.7rem;
            font-size: 0.85rem;
        }

        .exchange-logo {
            width: 30px;
            height: 30px;
        }
    }

    @media (max-width: 768px) {
        .table-container {
            display: none;
        }

        .price-cards-mobile {
            display: flex;
            flex-direction: column;
        }

        .section-title {
            font-size: 1.8rem;
        }

        .section-subtitle {
            font-size: 1rem;
        }

        .crypto-tabs {
            gap: 0.5rem;
            justify-content: flex-start;
            overflow-x: auto;
            padding-bottom: 0.5rem;
            margin-right: 20px;
            margin-left: 20px;
            flex-wrap: nowrap;
        }

        .tab-btn {
            padding: 0.6rem 1rem;
            font-size: 0.85rem;
            white-space: nowrap;
        }
    }

    @media (max-width: 480px) {
        .section-title {
            font-size: 1.5rem;
        }

        .tab-btn {
            padding: 0.5rem 0.8rem;
            font-size: 0.8rem;
        }
    }
</style>
<script>
    // کد جاوااسکریپت برای تعامل با جدول
    document.addEventListener('DOMContentLoaded', function() {
    // انتخاب تب‌ها
    const tabButtons = document.querySelectorAll('.tab-btn');

    tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
    // حذف کلاس فعال از همه تب‌ها
    tabButtons.forEach(b => b.classList.remove('active'));

    // اضافه کردن کلاس فعال به تب کلیک شده
    btn.classList.add('active');

    // در اینجا می‌توان کد جاوااسکریپت اضافی برای بارگذاری داده‌های ارز انتخاب شده نوشت
    // مثال: loadCryptoData(btn.dataset.crypto);
    console.log(`نمایش داده‌های ${btn.textContent}`);
    });
    });

    // مثال: تابع بارگذاری داده‌ها
    function loadCryptoData(cryptoId) {
    // در اینجا می‌توان با API تعامل کرد
    // fetch(`/api/prices/${cryptoId}`)
    //     .then(response => response.json())
    //     .then(data => updateTable(data));
    }

    // مثال: به‌روزرسانی جدول
    function updateTable(data) {
    // کد به‌روزرسانی جدول و کارت‌های موبایل
    }
    });
</script>

<!-- بخش خذمات -->
<section class="services-section">
    <div class="section-header">
        <h2 class="section-title">خدمات هوشمند <span>GapTrade</span></h2>
        <p class="section-subtitle">تمام ابزارهای مورد نیاز برای موفقیت در بازار ارز دیجیتال</p>
    </div>

    <div class="services-container">
        <!-- کارت خدمات 1: آربیتراژ هوشمند -->
        <div class="service-card">
            <div class="service-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
            </div>
            <div class="service-glow"></div>
            <h3 class="service-title">آربیتراژ هوشمند</h3>
            <p class="service-description">کشف خودکار فرصت‌های آربیتراژ بین تمام صرافی‌های معتبر ایرانی با دقت بالا و به‌روزرسانی لحظه‌ای</p>
        </div>

        <!-- کارت خدمات 2: هشدار قیمت -->
        <div class="service-card">
            <div class="service-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
            </div>
            <div class="service-glow"></div>
            <h3 class="service-title">هشدار قیمت</h3>
            <p class="service-description">دریافت نوتیفیکیشن فوری برای تغییرات قیمت و فرصت‌های آربیتراژ در تلگرام، ایمیل یا اپلیکیشن موبایل</p>
        </div>

        <!-- کارت خدمات 3: تحلیل هوشمند -->
        <div class="service-card">
            <div class="service-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                    <line x1="8" y1="21" x2="16" y2="21"></line>
                    <line x1="12" y1="17" x2="12" y2="21"></line>
                </svg>
            </div>
            <div class="service-glow"></div>
            <h3 class="service-title">تحلیل هوشمند</h3>
            <p class="service-description">بررسی روند قیمت‌ها و پیش‌بینی فرصت‌های آینده با استفاده از هوش مصنوعی و الگوریتم‌های پیشرفته</p>
        </div>

        <!-- کارت خدمات 4: API اختصاصی -->
        <div class="service-card">
            <div class="service-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="16 18 22 12 16 6"></polyline>
                    <polyline points="8 6 2 12 8 18"></polyline>
                </svg>
            </div>
            <div class="service-glow"></div>
            <h3 class="service-title">API اختصاصی</h3>
            <p class="service-description">دسترسی به داده‌های لحظه‌ای قیمت و فرصت‌های آربیتراژ از طریق API برای استفاده در نرم‌افزارهای اختصاصی</p>
        </div>
    </div>
</section>
<style>
    /* استایل‌های بخش خدمات */
    .services-section {
        padding: 6rem 0;
        background-color: #0a121c;
        position: relative;
        z-index: 10;
    }

    .section-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #fff;
    }

    .section-title span {
        color: #ef8303;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.6);
        max-width: 700px;
        margin: 0 auto;
    }

    .services-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2.5rem;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .service-card {
        background: linear-gradient(145deg, rgba(26, 36, 50, 0.95), rgba(16, 23, 34, 0.8));
        border-radius: 20px;
        padding: 2.5rem 2rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        position: relative;
        overflow: hidden;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.05);
        height: 100%;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at top right, rgba(239, 131, 3, 0.15), transparent 70%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .service-card:hover::before {
        opacity: 1;
    }

    .service-icon {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background: linear-gradient(135deg, rgba(239, 131, 3, 0.15), rgba(255, 148, 25, 0.05));
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        position: relative;
        color: #ef8303;
        border: 1px solid rgba(239, 131, 3, 0.2);
        transition: all 0.3s ease;
    }

    .service-card:hover .service-icon {
        background: linear-gradient(135deg, rgba(239, 131, 3, 0.25), rgba(255, 148, 25, 0.1));
        transform: scale(1.05);
        box-shadow: 0 0 20px rgba(239, 131, 3, 0.3);
    }

    .service-glow {
        position: absolute;
        top: -50px;
        right: -50px;
        width: 100px;
        height: 100px;
        background: radial-gradient(circle, rgba(239, 131, 3, 0.4) 0%, transparent 70%);
        border-radius: 50%;
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
    }

    .service-card:hover .service-glow {
        opacity: 0.6;
    }

    .service-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 1.2rem;
        position: relative;
    }

    .service-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 40px;
        height: 3px;
        background: linear-gradient(to right, #ef8303, transparent);
        border-radius: 2px;
    }

    .service-description {
        color: rgba(255, 255, 255, 0.6);
        margin-bottom: 1.5rem;
        font-size: 0.95rem;
        line-height: 1.7;
        flex-grow: 1;
    }

    .service-link {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ef8303;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
        transition: color 0.3s ease;
        margin-top: auto;
    }

    .service-link svg {
        margin-right: 0.5rem;
        transition: transform 0.3s ease;
    }

    .service-link:hover {
        color: #ff9419;
    }

    .service-link:hover svg {
        transform: translateX(5px);
    }

    /* رسپانسیو */
    @media (max-width: 1200px) {
        .services-container {
            grid-template-columns: repeat(2, 1fr);
        }

        .section-title {
            font-size: 2.2rem;
        }

        .service-card {
            padding: 2rem 1.5rem;
        }

        .service-icon {
            width: 80px;
            height: 80px;
        }
    }

    @media (max-width: 768px) {
        .services-container {
            grid-template-columns: 1fr;
            max-width: 500px;
        }

        .section-title {
            font-size: 1.8rem;
        }

        .section-subtitle {
            font-size: 1rem;
        }

        .service-card {
            padding: 2rem;
        }

        .service-title {
            font-size: 1.3rem;
        }
    }

    @media (max-width: 480px) {
        .services-section {
            padding: 4rem 0;
        }

        .section-title {
            font-size: 1.5rem;
        }

        .service-card {
            padding: 1.8rem 1.5rem;
        }

        .service-icon {
            width: 70px;
            height: 70px;
        }
    }
</style>


<!-- بخش پلن ها -->
<section class="pricing-section">
    <div class="pricing-bg-divider"></div>

    <div class="section-header">
        <h2 class="section-title">پلن‌های اشتراکی <span>GapTrade</span></h2>
        <p class="section-subtitle">انتخاب کنید و به دنیای آربیتراژ هوشمند وارد شوید</p>
    </div>

    <div class="pricing-container">
        <!-- پلن رایگان -->
        <div class="pricing-card free">
            <div class="pricing-badge">شروع رایگان</div>
            <h3 class="pricing-title">اشتراک پایه</h3>

            <div class="pricing-price">
                <span class="price">۰</span>
                <span class="period">رایگان</span>
            </div>

            <div class="pricing-features">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>۵ فرصت آربیتراژ روزانه</span>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>قیمت ارزهای پایه</span>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>به‌روزرسانی هر 60 دقیقه</span>
                    </li>
                    <li class="disabled">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                        <span>هشدار تلگرامی و ایمیلی</span>
                    </li>
                    <li class="disabled">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                        <span>فیلتر بر اساس صرافی و ارز</span>
                    </li>
                    <li class="disabled">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                        <span>دسترسی به API</span>
                    </li>
                </ul>
            </div>

            <button class="pricing-btn">شروع رایگان</button>
        </div>

        <!-- پلن ماهانه -->
        <div class="pricing-card monthly popular">
            <div class="pricing-badge">پیشنهاد ویژه</div>
            <h3 class="pricing-title">اشتراک حرفه‌ای</h3>

            <div class="pricing-price">
                <span class="price">۳۹۹,۰۰۰</span>
                <span class="period">تومان / ماهانه</span>
            </div>

            <div class="pricing-features">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>فرصت‌های آربیتراژ نامحدود</span>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>قیمت تمام ارزهای دیجیتال</span>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>به‌روزرسانی لحظه‌ای</span>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>هشدار تلگرامی و ایمیلی</span>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>فیلتر بر اساس صرافی و ارز</span>
                    </li>
                    <li class="disabled">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                        <span>دسترسی به API</span>
                    </li>
                </ul>
            </div>

            <button class="pricing-btn">انتخاب پلن</button>
        </div>

        <!-- پلن سه ماهه -->
        <div class="pricing-card quarterly">
            <div class="pricing-badge">۲۰٪ تخفیف</div>
            <h3 class="pricing-title">اشتراک تجاری</h3>

            <div class="pricing-price">
                <span class="price">۹۵۹,۰۰۰</span>
                <span class="period">تومان / سه ماهه</span>
            </div>

            <div class="pricing-features">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>تمامی امکانات پلن حرفه‌ای</span>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>دسترسی به API اختصاصی</span>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>پشتیبانی اختصاصی VIP</span>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>دسترسی به گزارش‌های تحلیلی</span>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>۱۰ آدرس نوتیفیکیشن</span>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>گارانتی بازگشت وجه ۷ روزه</span>
                    </li>
                </ul>
            </div>

            <button class="pricing-btn">انتخاب پلن</button>
        </div>
    </div>

    <div class="pricing-note">
        <div class="note-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="12"></line>
                <line x1="12" y1="16" x2="12.01" y2="16"></line>
            </svg>
        </div>
        <p>تمامی قیمت‌ها شامل ۹٪ مالیات بر ارزش افزوده می‌باشند. پشتیبانی ۲۴/۷ برای تمامی پلن‌ها در دسترس است.</p>
    </div>
</section>
<style>
    /* استایل‌های بخش پلن‌های قیمتی */
    .pricing-section {
        padding: 7rem 0;
        background-color: #0a121c;
        position: relative;
        z-index: 10;
        overflow: hidden;
    }

    /* خط مرز کج برای تغییر رنگ بکگراند */
    .pricing-bg-divider {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 100%;
        background: linear-gradient(135deg, #0d1623 0%, #0d1623 50%, #0a121c 50%, #0a121c 100%);
        z-index: -1;
        transform: skewY(-6deg);
        transform-origin: top right;
    }

    .section-header {
        text-align: center;
        margin-bottom: 5rem;
        position: relative;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #fff;
    }

    .section-title span {
        color: #ef8303;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.6);
        max-width: 700px;
        margin: 0 auto;
    }

    .pricing-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 2rem;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
    }

    .pricing-card {
        background: rgba(26, 36, 50, 0.6);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 3rem 2.5rem;
        width: 100%;
        max-width: 380px;
        position: relative;
        overflow: hidden;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        display: flex;
        flex-direction: column;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .pricing-card::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        opacity: 0.4;
        transition: opacity 0.4s ease;
    }

    .pricing-card.free::before {
        background: radial-gradient(ellipse at right top, rgba(100, 100, 255, 0.3) 0%, transparent 70%);
    }

    .pricing-card.monthly::before {
        background: radial-gradient(ellipse at right top, rgba(239, 131, 3, 0.3) 0%, transparent 70%);
    }

    .pricing-card.quarterly::before {
        background: radial-gradient(ellipse at right top, rgba(0, 200, 150, 0.3) 0%, transparent 70%);
    }

    .pricing-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    .pricing-card:hover::before {
        opacity: 0.8;
    }

    .pricing-card.popular {
        transform: scale(1.05);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
        border: 1px solid rgba(239, 131, 3, 0.2);
        z-index: 1;
        background: rgba(30, 40, 55, 0.7);
    }

    .pricing-card.popular:hover {
        transform: scale(1.05) translateY(-10px);
    }

    .pricing-badge {
        position: absolute;
        top: 1.5rem;
        right: -3rem;
        background: linear-gradient(90deg, transparent, rgba(239, 131, 3, 0.9));
        color: white;
        padding: 0.5rem 3rem;
        font-size: 0.85rem;
        font-weight: 600;
        transform: rotate(45deg);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .pricing-title {
        font-size: 1.6rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .pricing-price {
        text-align: center;
        margin-bottom: 2rem;
        position: relative;
    }

    .pricing-price::after {
        content: '';
        position: absolute;
        bottom: -1rem;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 3px;
        background: linear-gradient(to right, transparent, #ef8303, transparent);
        border-radius: 2px;
    }

    .pricing-price .price {
        font-size: 2.8rem;
        font-weight: 700;
        color: #fff;
        display: block;
        margin-bottom: 0.5rem;
    }

    .pricing-price .period {
        font-size: 0.95rem;
        color: rgba(255, 255, 255, 0.6);
    }

    .pricing-features {
        margin-bottom: 2rem;
        flex-grow: 1;
    }

    .pricing-features ul {
        list-style: none;
        padding: 0;
    }

    .pricing-features li {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.95rem;
    }

    .pricing-features li svg {
        margin-left: 0.8rem;
        flex-shrink: 0;
        color: #0be881;
    }

    .pricing-features li.disabled {
        color: rgba(255, 255, 255, 0.4);
    }

    .pricing-features li.disabled svg {
        color: rgba(255, 0, 0, 0.5);
    }

    .pricing-btn {
        padding: 1rem 1.5rem;
        border-radius: 10px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        background: linear-gradient(135deg, #ef8303, #ff9419);
        border: none;
        color: white;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(239, 131, 3, 0.2);
    }

    .pricing-btn:hover {
        box-shadow: 0 10px 20px rgba(239, 131, 3, 0.3);
        transform: translateY(-2px);
    }

    .pricing-note {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 4rem;
        padding: 1.5rem;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 15px;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }

    .note-icon {
        color: rgba(255, 255, 255, 0.6);
        margin-left: 1rem;
        flex-shrink: 0;
    }

    .pricing-note p {
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.9rem;
        margin: 0;
    }

    /* رسپانسیو */
    @media (max-width: 1200px) {
        .pricing-card {
            padding: 2.5rem 2rem;
            max-width: 350px;
        }

        .section-title {
            font-size: 2.2rem;
        }

        .pricing-price .price {
            font-size: 2.5rem;
        }
    }

    @media (max-width: 992px) {
        .pricing-container {
            flex-direction: column;
            align-items: center;
            gap: 3rem;
        }

        .pricing-card {
            max-width: 500px;
        }

        .pricing-card.popular {
            transform: scale(1);
            order: -1;
        }

        .pricing-card.popular:hover {
            transform: translateY(-10px);
        }
    }

    @media (max-width: 480px) {
        .pricing-section {
            padding: 5rem 0;
        }

        .section-title {
            font-size: 1.8rem;
        }

        .pricing-card {
            padding: 2rem 1.5rem;
        }

        .pricing-price .price {
            font-size: 2.2rem;
        }

        .pricing-badge {
            font-size: 0.75rem;
            padding: 0.4rem 2.5rem;
        }

        .pricing-title {
            font-size: 1.4rem;
        }

        .pricing-btn {
            padding: 0.8rem 1.2rem;
        }
    }
</style>


<!-- بخش صرافی ها -->
<section class="exchanges-section">
    <div class="exchanges-pattern-bg"></div>

    <div class="section-header">
        <h2 class="section-title">صرافی‌های <span>پشتیبانی شده</span></h2>
        <p class="section-subtitle">ما با معتبرترین صرافی‌های ارز دیجیتال داخلی و خارجی همکاری می‌کنیم</p>
    </div>

    <div class="exchanges-container">
        <!-- صرافی نوبیتکس -->
        <a href="#" class="exchange-card">
            <div class="exchange-logo">
                <img src="nobitex.png" alt="نوبیتکس">
            </div>
            <div class="exchange-overlay">
                <div class="exchange-info">
                    <h3 class="exchange-name">نوبیتکس</h3>
                    <span class="exchange-btn">مشاهده جزئیات</span>
                </div>
            </div>
        </a>

        <!-- صرافی والکس -->
        <a href="#" class="exchange-card">
            <div class="exchange-logo">
                <img src="nobitex.png" alt="والکس">
            </div>
            <div class="exchange-overlay">
                <div class="exchange-info">
                    <h3 class="exchange-name">والکس</h3>
                    <span class="exchange-btn">مشاهده جزئیات</span>
                </div>
            </div>
        </a>

        <!-- صرافی رمزینکس -->
        <a href="#" class="exchange-card">
            <div class="exchange-logo">
                <img src="nobitex.png" alt="رمزینکس">
            </div>
            <div class="exchange-overlay">
                <div class="exchange-info">
                    <h3 class="exchange-name">رمزینکس</h3>
                    <span class="exchange-btn">مشاهده جزئیات</span>
                </div>
            </div>
        </a>

        <!-- صرافی اکسیر -->
        <a href="#" class="exchange-card">
            <div class="exchange-logo">
                <img src="nobitex.png" alt="اکسیر">
            </div>
            <div class="exchange-overlay">
                <div class="exchange-info">
                    <h3 class="exchange-name">اکسیر</h3>
                    <span class="exchange-btn">مشاهده جزئیات</span>
                </div>
            </div>
        </a>

        <!-- صرافی بیت‌پین -->
        <a href="#" class="exchange-card">
            <div class="exchange-logo">
                <img src="nobitex.png" alt="بیت‌پین">
            </div>
            <div class="exchange-overlay">
                <div class="exchange-info">
                    <h3 class="exchange-name">بیت‌پین</h3>
                    <span class="exchange-btn">مشاهده جزئیات</span>
                </div>
            </div>
        </a>

        <!-- صرافی بیت‌مکس -->
        <a href="#" class="exchange-card">
            <div class="exchange-logo">
                <img src="nobitex.png" alt="بیت‌مکس">
            </div>
            <div class="exchange-overlay">
                <div class="exchange-info">
                    <h3 class="exchange-name">بیت‌مکس</h3>
                    <span class="exchange-btn">مشاهده جزئیات</span>
                </div>
            </div>
        </a>

        <!-- صرافی رمزارز -->
        <a href="#" class="exchange-card">
            <div class="exchange-logo">
                <img src="nobitex.png" alt="رمزارز">
            </div>
            <div class="exchange-overlay">
                <div class="exchange-info">
                    <h3 class="exchange-name">رمزارز</h3>
                    <span class="exchange-btn">مشاهده جزئیات</span>
                </div>
            </div>
        </a>

        <!-- صرافی تتر ایران -->
        <a href="#" class="exchange-card">
            <div class="exchange-logo">
                <img src="nobitex.png" alt="تتر ایران">
            </div>
            <div class="exchange-overlay">
                <div class="exchange-info">
                    <h3 class="exchange-name">تتر ایران</h3>
                    <span class="exchange-btn">مشاهده جزئیات</span>
                </div>
            </div>
        </a>

        <!-- صرافی فینکس -->
        <a href="#" class="exchange-card">
            <div class="exchange-logo">
                <img src="nobitex.png" alt="فینکس">
            </div>
            <div class="exchange-overlay">
                <div class="exchange-info">
                    <h3 class="exchange-name">فینکس</h3>
                    <span class="exchange-btn">مشاهده جزئیات</span>
                </div>
            </div>
        </a>

        <!-- صرافی آبان تتر -->
        <a href="#" class="exchange-card">
            <div class="exchange-logo">
                <img src="nobitex.png" alt="آبان تتر">
            </div>
            <div class="exchange-overlay">
                <div class="exchange-info">
                    <h3 class="exchange-name">آبان تتر</h3>
                    <span class="exchange-btn">مشاهده جزئیات</span>
                </div>
            </div>
        </a>
    </div>

    <div class="exchanges-more">
        <button class="more-btn">
            <span>مشاهده تمام صرافی‌ها</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
        </button>
    </div>
</section>
<style>
    /* استایل‌های بخش صرافی‌های پشتیبانی شده */
    .exchanges-section {
        padding: 6rem 0;
        background-color: #0a121c;
        position: relative;
        z-index: 10;
        overflow: hidden;
    }

    /* پترن پس‌زمینه */
    .exchanges-pattern-bg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #0a121c;
        background-image:
                radial-gradient(rgba(239, 131, 3, 0.05) 2px, transparent 2px),
                radial-gradient(rgba(255, 255, 255, 0.03) 2px, transparent 2px);
        background-size: 40px 40px;
        background-position: 0 0, 20px 20px;
        opacity: 0.7;
        z-index: -1;
    }

    .section-header {
        text-align: center;
        margin-bottom: 4rem;
        position: relative;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #fff;
    }

    .section-title span {
        color: #ef8303;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.6);
        max-width: 700px;
        margin: 0 auto;
    }

    .exchanges-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 2rem;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .exchange-card {
        background: rgba(26, 36, 50, 0.4);
        backdrop-filter: blur(5px);
        border-radius: 15px;
        overflow: hidden;
        position: relative;
        aspect-ratio: 1/1;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .exchange-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        border-color: rgba(239, 131, 3, 0.3);
    }

    .exchange-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
    }

    .exchange-logo img {
        width: 50px;
        object-fit: contain;
        filter: grayscale(20%) brightness(0.9);
        transition: filter 0.3s ease;
    }

    .exchange-card:hover .exchange-logo {
        transform: scale(0.85);
    }

    .exchange-card:hover .exchange-logo img {
        filter: grayscale(0%) brightness(1);
    }

    .exchange-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to top, rgba(26, 36, 50, 0.9) 0%, transparent 100%);
        display: flex;
        align-items: flex-end;
        padding: 1.5rem;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .exchange-card:hover .exchange-overlay {
        opacity: 1;
        transform: translateY(0);
    }

    .exchange-info {
        width: 100%;
        text-align: center;
    }

    .exchange-name {
        color: #fff;
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .exchange-btn {
        color: #ef8303;
        font-size: 0.85rem;
        position: relative;
        transition: color 0.3s ease;
    }

    .exchange-btn::after {
        content: '';
        position: absolute;
        bottom: -5px;
        right: 0;
        width: 0;
        height: 1px;
        background-color: #ef8303;
        transition: width 0.3s ease;
    }

    .exchange-card:hover .exchange-btn::after {
        width: 100%;
    }

    .exchanges-more {
        text-align: center;
        margin-top: 3rem;
    }

    .more-btn {
        display: inline-flex;
        align-items: center;
        background-color: transparent;
        border: 1px solid rgba(239, 131, 3, 0.3);
        border-radius: 12px;
        color: #ef8303;
        padding: 0.8rem 2rem;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .more-btn svg {
        margin-right: 0.8rem;
        transition: transform 0.3s ease;
    }

    .more-btn:hover {
        background-color: rgba(239, 131, 3, 0.1);
        border-color: rgba(239, 131, 3, 0.5);
    }

    .more-btn:hover svg {
        transform: translateX(5px);
    }

    /* رسپانسیو */
    @media (max-width: 1200px) {
        .exchanges-container {
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 1.5rem;
        }

        .section-title {
            font-size: 2.2rem;
        }
    }

    @media (max-width: 768px) {
        .exchanges-container {
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
            gap: 1.2rem;
        }

        .section-title {
            font-size: 1.8rem;
        }

        .section-subtitle {
            font-size: 1rem;
        }

        .exchange-name {
            font-size: 1rem;
        }

        .exchange-btn {
            font-size: 0.8rem;
        }

        .more-btn {
            padding: 0.7rem 1.5rem;
            font-size: 0.9rem;
        }
    }

    @media (max-width: 576px) {
        .exchanges-container {
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 1rem;
        }

        .exchange-overlay {
            padding: 1rem;
        }

        .exchange-name {
            font-size: 0.9rem;
            margin-bottom: 0.3rem;
        }

        .exchange-btn {
            font-size: 0.75rem;
        }
    }
</style>


<!-- بخش ارزهای پیشتیبانی شده -->
<section class="cryptocurrencies-section">
    <div class="crypto-particles"></div>

    <div class="section-header">
        <h2 class="section-title">ارزهای <span>پشتیبانی شده</span></h2>
        <p class="section-subtitle">آربیتراژ هوشمند روی بیش از ۳۵ ارز دیجیتال محبوب و پرکاربرد</p>
    </div>

    <div class="crypto-carousel-container">
        <button class="carousel-nav prev">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
        </button>

        <div class="crypto-carousel">
            <div class="crypto-list">
                <!-- بیت‌کوین -->
                <a href="#" class="crypto-card">
                    <div class="crypto-icon">
                        <img src="https://cryptologos.cc/logos/bitcoin-btc-logo.png" alt="Bitcoin">
                    </div>
                    <div class="crypto-info">
                        <h3 class="crypto-name">بیت‌کوین</h3>
                        <span class="crypto-symbol">BTC</span>
                    </div>
                    <div class="crypto-price up">
                        <span class="price-value">۱,۸۹۵,۴۰۰,۰۰۰</span>
                        <span class="price-change">+۲.۴٪</span>
                    </div>
                </a>

                <!-- اتریوم -->
                <a href="#" class="crypto-card">
                    <div class="crypto-icon">
                        <img src="https://cryptologos.cc/logos/ethereum-eth-logo.png" alt="Ethereum">
                    </div>
                    <div class="crypto-info">
                        <h3 class="crypto-name">اتریوم</h3>
                        <span class="crypto-symbol">ETH</span>
                    </div>
                    <div class="crypto-price up">
                        <span class="price-value">۱۲۲,۵۰۰,۰۰۰</span>
                        <span class="price-change">+۳.۱٪</span>
                    </div>
                </a>

                <!-- تتر -->
                <a href="#" class="crypto-card">
                    <div class="crypto-icon">
                        <img src="https://cryptologos.cc/logos/tether-usdt-logo.png" alt="Tether">
                    </div>
                    <div class="crypto-info">
                        <h3 class="crypto-name">تتر</h3>
                        <span class="crypto-symbol">USDT</span>
                    </div>
                    <div class="crypto-price stable">
                        <span class="price-value">۵۹,۸۰۰,۰۰۰</span>
                        <span class="price-change">۰.۰٪</span>
                    </div>
                </a>

                <!-- بایننس کوین -->
                <a href="#" class="crypto-card">
                    <div class="crypto-icon">
                        <img src="https://cryptologos.cc/logos/bnb-bnb-logo.png" alt="Binance Coin">
                    </div>
                    <div class="crypto-info">
                        <h3 class="crypto-name">بایننس کوین</h3>
                        <span class="crypto-symbol">BNB</span>
                    </div>
                    <div class="crypto-price down">
                        <span class="price-value">۲۴,۵۰۰,۰۰۰</span>
                        <span class="price-change">-۱.۲٪</span>
                    </div>
                </a>

                <!-- سولانا -->
                <a href="#" class="crypto-card">
                    <div class="crypto-icon">
                        <img src="https://cryptologos.cc/logos/solana-sol-logo.png" alt="Solana">
                    </div>
                    <div class="crypto-info">
                        <h3 class="crypto-name">سولانا</h3>
                        <span class="crypto-symbol">SOL</span>
                    </div>
                    <div class="crypto-price up">
                        <span class="price-value">۷,۲۵۰,۰۰۰</span>
                        <span class="price-change">+۵.۷٪</span>
                    </div>
                </a>

                <!-- کاردانو -->
                <a href="#" class="crypto-card">
                    <div class="crypto-icon">
                        <img src="https://cryptologos.cc/logos/cardano-ada-logo.png" alt="Cardano">
                    </div>
                    <div class="crypto-info">
                        <h3 class="crypto-name">کاردانو</h3>
                        <span class="crypto-symbol">ADA</span>
                    </div>
                    <div class="crypto-price down">
                        <span class="price-value">۳۲۰,۰۰۰</span>
                        <span class="price-change">-۰.۸٪</span>
                    </div>
                </a>

                <!-- دوج‌کوین -->
                <a href="#" class="crypto-card">
                    <div class="crypto-icon">
                        <img src="https://cryptologos.cc/logos/dogecoin-doge-logo.png" alt="Dogecoin">
                    </div>
                    <div class="crypto-info">
                        <h3 class="crypto-name">دوج‌کوین</h3>
                        <span class="crypto-symbol">DOGE</span>
                    </div>
                    <div class="crypto-price up">
                        <span class="price-value">۸۵,۰۰۰</span>
                        <span class="price-change">+۲.۳٪</span>
                    </div>
                </a>

                <!-- شیبا اینو -->
                <a href="#" class="crypto-card">
                    <div class="crypto-icon">
                        <img src="https://cryptologos.cc/logos/shiba-inu-shib-logo.png" alt="Shiba Inu">
                    </div>
                    <div class="crypto-info">
                        <h3 class="crypto-name">شیبا اینو</h3>
                        <span class="crypto-symbol">SHIB</span>
                    </div>
                    <div class="crypto-price up">
                        <span class="price-value">۱,۲۰۰</span>
                        <span class="price-change">+۱۲.۵٪</span>
                    </div>
                </a>
            </div>
        </div>

        <button class="carousel-nav next">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </button>
    </div>

    <div class="crypto-tags">
        <div class="crypto-tag">BTC</div>
        <div class="crypto-tag">ETH</div>
        <div class="crypto-tag">USDT</div>
        <div class="crypto-tag">BNB</div>
        <div class="crypto-tag">SOL</div>
        <div class="crypto-tag">ADA</div>
        <div class="crypto-tag">XRP</div>
        <div class="crypto-tag">DOGE</div>
        <div class="crypto-tag">DOT</div>
        <div class="crypto-tag">SHIB</div>
        <div class="crypto-tag">AVAX</div>
        <div class="crypto-tag">MATIC</div>
        <div class="crypto-tag more-tag">+۲۳ ارز دیگر</div>
    </div>

    <div class="crypto-action">
        <a href="#" class="crypto-btn">
            <span>مشاهده تمام ارزها</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
        </a>
    </div>
</section>
<style>
    /* استایل‌های بخش ارزهای پشتیبانی شده */
    .cryptocurrencies-section {
        padding: 6rem 0;
        background-color: #0a121c;
        position: relative;
        z-index: 10;
        overflow: hidden;
    }

    /* پس‌زمینه ذرات انیمیشنی */
    .crypto-particles {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image:
                radial-gradient(circle at 25% 25%, rgba(239, 131, 3, 0.03) 1px, transparent 1px),
                radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
        background-size: 50px 50px;
        background-position: 0 0;
        z-index: -1;
        animation: particlesFloat 20s infinite linear;
    }

    @keyframes particlesFloat {
        0% {
            background-position: 0 0;
        }
        100% {
            background-position: 50px 50px;
        }
    }

    .section-header {
        text-align: center;
        margin-bottom: 4rem;
        position: relative;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #fff;
    }

    .section-title span {
        color: #ef8303;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.6);
        max-width: 700px;
        margin: 0 auto;
    }

    /* کاروسل ارزها */
    .crypto-carousel-container {
        position: relative;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 60px;
    }

    .crypto-carousel {
        width: 100%;
        overflow: hidden;
        position: relative;
        padding: 1rem 0;
    }

    .crypto-list {
        display: flex;
        gap: 1.5rem;
        padding: 0.5rem 0;
        transition: transform 0.5s ease;
    }

    .carousel-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(26, 36, 50, 0.6);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: rgba(255, 255, 255, 0.7);
        cursor: pointer;
        transition: all 0.3s ease;
        z-index: 2;
    }

    .carousel-nav.prev {
        left: 0;
    }

    .carousel-nav.next {
        right: 0;
    }

    .carousel-nav:hover {
        background: rgba(239, 131, 3, 0.2);
        color: #ef8303;
        border-color: #ef8303;
    }

    .carousel-nav:active {
        transform: translateY(-50%) scale(0.95);
    }

    .carousel-nav svg {
        width: 24px;
        height: 24px;
    }

    /* کارت‌های ارز */
    .crypto-card {
        background: linear-gradient(135deg, rgba(26, 36, 50, 0.7) 0%, rgba(16, 23, 34, 0.8) 100%);
        border-radius: 15px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        padding: 1.5rem;
        min-width: 250px;
        width: 250px;
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        text-decoration: none;
    }

    .crypto-card::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(to right, transparent, #ef8303, transparent);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .crypto-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        border-color: rgba(239, 131, 3, 0.2);
    }

    .crypto-card:hover::before {
        opacity: 1;
    }

    .crypto-icon {
        width: 60px;
        height: 60px;
        margin-bottom: 1.2rem;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0.5rem;
    }

    .crypto-icon img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .crypto-info {
        margin-bottom: 1rem;
    }

    .crypto-name {
        font-size: 1.2rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 0.3rem;
    }

    .crypto-symbol {
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.5);
        display: block;
    }

    .crypto-price {
        display: flex;
        flex-direction: column;
        margin-top: auto;
    }

    .price-value {
        font-size: 1.1rem;
        font-weight: 600;
        color: #fff;
        margin-bottom: 0.5rem;
    }

    .price-change {
        font-size: 0.9rem;
        font-weight: 600;
        padding: 0.3rem 0.7rem;
        border-radius: 20px;
        display: inline-block;
        width: fit-content;
    }

    .crypto-price.up .price-change {
        background-color: rgba(11, 232, 129, 0.1);
        color: #0be881;
    }

    .crypto-price.down .price-change {
        background-color: rgba(255, 71, 87, 0.1);
        color: #ff4757;
    }

    .crypto-price.stable .price-change {
        background-color: rgba(255, 255, 255, 0.1);
        color: rgba(255, 255, 255, 0.7);
    }

    /* تگ‌های ارزها */
    .crypto-tags {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.8rem;
        max-width: 900px;
        margin: 3rem auto 0;
        padding: 0 20px;
    }

    .crypto-tag {
        background: rgba(26, 36, 50, 0.5);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.7);
        transition: all 0.3s ease;
    }

    .crypto-tag:hover {
        background: rgba(239, 131, 3, 0.1);
        border-color: rgba(239, 131, 3, 0.3);
        color: #ef8303;
        transform: translateY(-3px);
    }

    .more-tag {
        background: rgba(239, 131, 3, 0.1);
        border-color: rgba(239, 131, 3, 0.3);
        color: #ef8303;
    }

    /* دکمه مشاهده تمام ارزها */
    .crypto-action {
        text-align: center;
        margin-top: 3rem;
    }

    .crypto-btn {
        display: inline-flex;
        align-items: center;
        background-color: rgba(239, 131, 3, 0.1);
        border: 1px solid rgba(239, 131, 3, 0.3);
        border-radius: 12px;
        color: #ef8303;
        padding: 0.8rem 2rem;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .crypto-btn svg {
        margin-right: 0.8rem;
        transition: transform 0.3s ease;
    }

    .crypto-btn:hover {
        background-color: rgba(239, 131, 3, 0.2);
        border-color: rgba(239, 131, 3, 0.5);
    }

    .crypto-btn:hover svg {
        transform: translateX(5px);
    }

    /* رسپانسیو */
    @media (max-width: 1200px) {
        .section-title {
            font-size: 2.2rem;
        }

        .crypto-carousel-container {
            padding: 0 50px;
        }

        .crypto-card {
            min-width: 230px;
            width: 230px;
        }
    }

    @media (max-width: 768px) {
        .section-title {
            font-size: 1.8rem;
        }

        .section-subtitle {
            font-size: 1rem;
        }

        .crypto-carousel-container {
            padding: 0 40px;
        }

        .carousel-nav {
            width: 40px;
            height: 40px;
        }

        .carousel-nav svg {
            width: 20px;
            height: 20px;
        }

        .crypto-card {
            min-width: 200px;
            width: 200px;
            padding: 1.2rem;
        }

        .crypto-icon {
            width: 50px;
            height: 50px;
        }

        .crypto-name {
            font-size: 1.1rem;
        }

        .price-value {
            font-size: 1rem;
        }
    }

    @media (max-width: 576px) {
        .crypto-carousel-container {
            padding: 0 30px;
        }

        .carousel-nav {
            width: 35px;
            height: 35px;
        }

        .crypto-card {
            min-width: 180px;
            width: 180px;
            padding: 1rem;
        }

        .crypto-icon {
            width: 45px;
            height: 45px;
            margin-bottom: 1rem;
        }

        .crypto-name {
            font-size: 1rem;
        }

        .crypto-tag {
            padding: 0.4rem 0.8rem;
            font-size: 0.8rem;
        }

        .crypto-btn {
            padding: 0.7rem 1.5rem;
            font-size: 0.9rem;
        }
    }
</style>
<script>
    // کد جاوااسکریپت برای اسلایدر
    document.addEventListener('DOMContentLoaded', function() {
        const cryptoList = document.querySelector('.crypto-list');
        const prevBtn = document.querySelector('.carousel-nav.prev');
        const nextBtn = document.querySelector('.carousel-nav.next');

        let cardWidth = document.querySelector('.crypto-card').offsetWidth + 24; // عرض کارت + فاصله
        let position = 0;
        let maxScroll = cryptoList.scrollWidth - cryptoList.clientWidth;
        let visibleCards = Math.floor(cryptoList.clientWidth / cardWidth);

        // بروزرسانی پارامترهای اسلایدر با تغییر اندازه پنجره
        window.addEventListener('resize', () => {
            cardWidth = document.querySelector('.crypto-card').offsetWidth + 24;
            maxScroll = cryptoList.scrollWidth - cryptoList.clientWidth;
            visibleCards = Math.floor(cryptoList.clientWidth / cardWidth);
        });

        // دکمه بعدی
        nextBtn.addEventListener('click', () => {
            if (position > -maxScroll) {
                position -= cardWidth * Math.min(visibleCards, 3);
                position = Math.max(position, -maxScroll);
                cryptoList.style.transform = `translateX(${position}px)`;
            }
        });

        // دکمه قبلی
        prevBtn.addEventListener('click', () => {
            if (position < 0) {
                position += cardWidth * Math.min(visibleCards, 3);
                position = Math.min(position, 0);
                cryptoList.style.transform = `translateX(${position}px)`;
            }
        });
    });
</script>



<!-- بخش فوتر -->
<footer class="footer-section">
    <div class="footer-wave">
        <svg viewBox="0 0 1440 100" xmlns="http://www.w3.org/2000/svg">
            <path fill="#0a121c" fill-opacity="1" d="M0,50L60,48.3C120,47,240,43,360,45C480,47,600,53,720,56.7C840,60,960,60,1080,56.7C1200,53,1320,47,1380,43.3L1440,40L1440,100L1380,100C1320,100,1200,100,1080,100C960,100,840,100,720,100C600,100,480,100,360,100C240,100,120,100,60,100L0,100Z"></path>
        </svg>
    </div>

    <div class="footer-content">
        <div class="footer-container">
            <div class="footer-column">
                <h3 class="footer-title">لینک‌های مفید</h3>
                <ul class="footer-links">
                    <li><a href="#">آموزش استفاده از پلتفرم</a></li>
                    <li><a href="#">راهنمای آربیتراژ</a></li>
                    <li><a href="#">درباره ما</a></li>
                    <li><a href="#">ارتباط با پشتیبانی</a></li>
                    <li><a href="#">قوانین و مقررات</a></li>
                    <li><a href="#">سوالات متداول</a></li>
                    <li><a href="#">راهنمای امنیتی</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3 class="footer-title">صرافی‌های همکار</h3>
                <ul class="footer-links">
                    <li><a href="#">نوبیتکس</a></li>
                    <li><a href="#">والکس</a></li>
                    <li><a href="#">رمزینکس</a></li>
                    <li><a href="#">اکسیر</a></li>
                    <li><a href="#">بیت‌پین</a></li>
                    <li><a href="#">فینکس</a></li>
                    <li><a href="#">رمزارز</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3 class="footer-title">ارزهای دیجیتال</h3>
                <ul class="footer-links currency-links">
                    <li><a href="#"><span class="currency-icon">₿</span> بیت‌کوین (BTC)</a></li>
                    <li><a href="#"><span class="currency-icon">Ξ</span> اتریوم (ETH)</a></li>
                    <li><a href="#"><span class="currency-icon">₮</span> تتر (USDT)</a></li>
                    <li><a href="#"><span class="currency-icon">⓷</span> بایننس کوین (BNB)</a></li>
                    <li><a href="#"><span class="currency-icon">◎</span> سولانا (SOL)</a></li>
                    <li><a href="#"><span class="currency-icon">₳</span> کاردانو (ADA)</a></li>
                    <li><a href="#" class="more-link">نمایش همه ارزها</a></li>
                </ul>
            </div>

            <div class="footer-column brand-column">
                <div class="footer-logo">
                    <img src="logo3.png" alt="GapTrade Logo">
                </div>
                <p class="brand-description">
                    سیستم هوشمند کشف آربیتراژ در بازار ارز دیجیتال ایران
                </p>
                <div class="telegram-links">
                    <a href="https://t.me/GapTradeBot" class="telegram-link bot" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.2 8.14C21.6046 7.26001 21.5578 6.21661 21.0394 5.38428C20.521 4.55194 19.6029 4.08545 18.65 4.14998C18.0712 4.14821 17.5118 4.42451 17.1 4.92998C16.6026 4.29051 15.8288 3.90208 15 3.89998C12.45 3.89998 8.40997 8.90998 8.40997 12.2C8.40874 12.5311 8.45153 12.8605 8.53703 13.1783C8.62252 13.4961 8.74966 13.7983 8.91597 14.075C7.65685 14.5414 6.59059 15.4145 5.89936 16.5558C5.20813 17.6971 4.93464 19.0421 5.12996 20.36C5.19963 20.7442 5.43828 21.0788 5.78353 21.2707C6.12878 21.4626 6.54791 21.4921 6.91996 21.35C7.58224 21.1082 8.19347 20.7458 8.71996 20.28C9.11426 20.7083 9.67825 20.9553 10.27 20.96C11.8074 20.9512 13.2962 20.3488 14.4275 19.2804C15.5588 18.212 16.2433 16.7621 16.335 15.225C17.337 15.5173 18.4088 15.4881 19.3913 15.1414C20.3739 14.7947 21.2173 14.1477 21.8 13.3C22.3339 12.4517 22.4816 11.3911 22.2 10.4C21.9439 9.58719 21.6695 8.83899 21.2 8.14Z"></path>
                            <circle cx="15" cy="10" r="1"></circle>
                        </svg>
                        ربات تلگرام GapTrade
                    </a>
                    <a href="https://t.me/GapTradeChannel" class="telegram-link channel" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        کانال تلگرام GapTrade
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="copyright">
                <p>تمامی حقوق این سایت متعلق به GapTrade می‌باشد. &copy; ۱۴۰۴</p>
            </div>
            <div class="footer-disclaimer">
                <p>معامله ارزهای دیجیتال دارای ریسک است. لطفاً پیش از هرگونه سرمایه‌گذاری تحقیق کنید.</p>
            </div>
        </div>
    </div>
</footer>
<style>
    /* استایل‌های بخش فوتر */
    .footer-section {
        background-color: #121820;
        position: relative;
        color: #fff;
    }

    /* موج بالای فوتر */
    .footer-wave {
        position: absolute;
        top: -99px;
        left: 0;
        width: 100%;
        height: 100px;
        overflow: hidden;
        line-height: 0;
    }

    .footer-wave svg {
        position: relative;
        display: block;
        width: 100%;
        height: 100px;
    }

    .footer-content {
        padding-top: 4rem;
        position: relative;
    }

    .footer-container {
        display: flex;
        flex-wrap: wrap;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
        gap: 3rem;
    }

    .footer-column {
        flex: 1;
        min-width: 250px;
    }

    .footer-column.brand-column {
        flex: 1.5;
    }

    .footer-title {
        color: #fff;
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
        position: relative;
        padding-right: 1rem;
    }

    .footer-title::before {
        content: '';
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        width: 3px;
        height: 1.2rem;
        background-color: #ef8303;
        border-radius: 2px;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 0.8rem;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.6);
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
        position: relative;
        padding-right: 0.2rem;
    }

    .footer-links a::before {
        content: '';
        position: absolute;
        bottom: -2px;
        right: 0;
        width: 0;
        height: 1px;
        background-color: #ef8303;
        transition: width 0.3s ease;
    }

    .footer-links a:hover {
        color: #ef8303;
    }

    .footer-links a:hover::before {
        width: 100%;
    }

    /* ارزهای دیجیتال */
    .currency-links a {
        display: flex;
        align-items: center;
    }

    .currency-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 22px;
        height: 22px;
        background: rgba(239, 131, 3, 0.1);
        border-radius: 50%;
        margin-left: 0.5rem;
        font-size: 0.8rem;
        color: #ef8303;
    }

    .more-link {
        color: #ef8303 !important;
        font-weight: 600;
        margin-top: 0.5rem;
    }

    /* ستون برند */
    .footer-logo {
        margin-bottom: 1.2rem;
    }

    .footer-logo img {
        max-width: 180px;
        height: auto;
    }

    .brand-description {
        color: rgba(255, 255, 255, 0.6);
        margin-bottom: 1.5rem;
        line-height: 1.6;
    }

    .telegram-links {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .telegram-link {
        display: flex;
        align-items: center;
        color: #fff;
        text-decoration: none;
        padding: 0.8rem 1.2rem;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .telegram-link svg {
        margin-left: 0.8rem;
    }

    .telegram-link.bot {
        background: linear-gradient(135deg, #0088cc, #00a2ff);
    }

    .telegram-link.channel {
        background: linear-gradient(135deg, #ef8303, #ff9419);
    }

    .telegram-link:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* بخش پایینی فوتر */
    .footer-bottom {
        margin-top: 4rem;
        padding: 1.5rem 0;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        text-align: center;
    }

    .copyright {
        margin-bottom: 0.5rem;
    }

    .copyright p {
        color: rgba(255, 255, 255, 0.5);
        font-size: 0.9rem;
    }

    .footer-disclaimer p {
        color: rgba(255, 255, 255, 0.4);
        font-size: 0.8rem;
    }

    /* رسپانسیو */
    @media (max-width: 1200px) {
        .footer-container {
            gap: 2rem;
        }

        .footer-column {
            min-width: 200px;
        }
    }

    @media (max-width: 992px) {
        .footer-container {
            flex-wrap: wrap;
        }

        .footer-column {
            flex: 1 0 calc(50% - 2rem);
        }

        .footer-column.brand-column {
            flex: 1 0 100%;
            order: -1;
            margin-bottom: 2rem;
        }

        .telegram-links {
            flex-direction: row;
            gap: 1rem;
        }

        .telegram-link {
            flex: 1;
        }
    }

    @media (max-width: 768px) {
        .footer-column {
            flex: 1 0 100%;
        }

        .telegram-links {
            flex-direction: column;
        }
    }

    @media (max-width: 576px) {
        .footer-title {
            font-size: 1.2rem;
        }

        .footer-bottom {
            margin-top: 3rem;
        }
    }
</style>




</body>
</html>