<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KESA — Contact Us</title>

    <!-- Tailwind + Fonts + Icons -->
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

    <style>
        /* ===== DARK MODE VARIABLES ===== */
        :root {
            --bg-primary: #f8fafc;
            --bg-secondary: #ffffff;
            --bg-card: #ffffff;
            --text-primary: #0f172a;
            --text-secondary: #475569;
            --text-muted: #94a3b8;
            --border-color: #e2e8f0;
            --shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
            --shadow-hover: 0 20px 50px rgba(15, 23, 42, 0.12);
            --accent: #0f766e;
            --accent-light: #14b8a6;
            --accent-bg: rgba(15, 118, 110, 0.10);
            --glass-bg: rgba(255, 255, 255, 0.70);
            --glass-border: rgba(255, 255, 255, 0.20);
            --nav-bg: rgba(255, 255, 255, 0.80);
            --input-bg: #ffffff;
            --input-border: #e2e8f0;
        }

        .dark {
            --bg-primary: #0f172a;
            --bg-secondary: #1e293b;
            --bg-card: #1e293b;
            --text-primary: #f1f5f9;
            --text-secondary: #94a3b8;
            --text-muted: #64748b;
            --border-color: #1e293b;
            --shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
            --shadow-hover: 0 20px 50px rgba(0, 0, 0, 0.6);
            --accent: #2dd4bf;
            --accent-light: #14b8a6;
            --accent-bg: rgba(15, 118, 110, 0.20);
            --glass-bg: rgba(30, 41, 59, 0.70);
            --glass-border: rgba(255, 255, 255, 0.06);
            --nav-bg: rgba(15, 23, 42, 0.90);
            --input-bg: #1e293b;
            --input-border: #334155;
        }

        /* ===== BASE ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-primary);
            color: var(--text-primary);
            transition: background-color 0.3s, color 0.3s;
            overflow-x: hidden;
            padding-top: 44px;
        }

        @media (max-width: 640px) {
            body {
                padding-top: 38px;
            }
        }

        /* ===== SCROLLBAR ===== */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: var(--bg-primary);
        }
        ::-webkit-scrollbar-thumb {
            background: var(--accent);
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--accent-light);
        }

        /* ===== SCROLL PROGRESS ===== */
        #scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--accent), var(--accent-light));
            z-index: 9999;
            width: 0%;
            transition: width 0.08s ease-out;
        }

        /* ===== ANNOUNCEMENT BAR ===== */
        #announcement-bar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9998;
            background: linear-gradient(135deg, #0f766e, #0d5e57);
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            font-size: 13px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
            letter-spacing: 0.2px;
            backdrop-filter: blur(4px);
        }
        #announcement-bar .close-btn {
            background: none;
            border: none;
            color: rgba(255, 255, 255, 0.7);
            cursor: pointer;
            font-size: 16px;
            padding: 4px 8px;
            border-radius: 6px;
            transition: all 0.2s;
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
        }
        #announcement-bar .close-btn:hover {
            color: #fff;
            background: rgba(255, 255, 255, 0.15);
        }
        #announcement-bar strong {
            font-weight: 700;
            color: #fff;
        }
        #announcement-bar span {
            padding: 0 4px;
        }
        @media (max-width: 640px) {
            #announcement-bar {
                font-size: 11px;
                padding: 8px 16px;
            }
            #announcement-bar .close-btn {
                right: 8px;
                position: static;
                transform: none;
            }
        }

        /* ===== NAVBAR ===== */
        .navbar {
            position: fixed;
            top: 44px;
            left: 0;
            width: 100%;
            z-index: 50;
            transition: all 0.3s ease;
            background: var(--nav-bg);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid transparent;
        }
        .navbar-scrolled {
            border-bottom: 1px solid var(--border-color);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.06);
        }
        .dark .navbar-scrolled {
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.4);
        }
        @media (max-width: 640px) {
            .navbar {
                top: 38px;
            }
        }

        .nav-link {
            padding: 8px 16px;
            border-radius: 40px;
            font-weight: 500;
            font-size: 14px;
            color: var(--text-secondary);
            transition: all 0.25s ease;
            text-decoration: none;
            display: inline-block;
            position: relative;
        }
        .nav-link:hover {
            color: var(--text-primary);
            background: rgba(15, 118, 110, 0.08);
        }
        .nav-link.active {
            color: #fff;
            background: var(--accent);
            box-shadow: 0 4px 20px rgba(15, 118, 110, 0.30);
        }
        .nav-link.active:hover {
            background: var(--accent);
            box-shadow: 0 6px 28px rgba(15, 118, 110, 0.45);
        }
        .dark .nav-link:hover {
            background: rgba(255, 255, 255, 0.06);
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 24px;
            border-radius: 40px;
            font-weight: 600;
            font-size: 14px;
            background: var(--accent);
            color: #fff;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .btn-primary:hover {
            background: #0d5e57;
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(15, 118, 110, 0.30);
            color: #fff;
        }
        .dark .btn-primary:hover {
            box-shadow: 0 8px 30px rgba(15, 118, 110, 0.50);
        }

        #dark-toggle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: none;
            background: transparent;
            color: var(--text-secondary);
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }
        #dark-toggle:hover {
            background: var(--border-color);
            color: var(--text-primary);
        }

        /* ===== MOBILE MENU ===== */
        #mobile-menu {
            transform: translateX(100%);
            transition: transform 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            visibility: hidden;
        }
        #mobile-menu.open {
            transform: translateX(0);
            visibility: visible;
        }
        #mobile-menu .nav-link {
            display: block;
            padding: 14px 20px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 500;
            color: var(--text-secondary);
            transition: all 0.2s;
            text-decoration: none;
        }
        #mobile-menu .nav-link:hover {
            background: var(--accent-bg);
            color: var(--text-primary);
        }
        #mobile-menu .nav-link.active {
            background: var(--accent);
            color: #fff;
        }

        /* ===== SEARCH MODAL ===== */
        #search-modal {
            position: fixed;
            inset: 0;
            z-index: 60;
            background: rgba(0, 0, 0, 0.60);
            backdrop-filter: blur(12px);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }
        #search-modal.open {
            opacity: 1;
            pointer-events: auto;
        }
        #search-modal .modal-box {
            background: var(--bg-secondary);
            border-radius: 24px;
            padding: 32px;
            max-width: 560px;
            width: 90%;
            transform: scale(0.95);
            transition: transform 0.3s ease;
            border: 1px solid var(--border-color);
        }
        #search-modal.open .modal-box {
            transform: scale(1);
        }
        #search-modal input {
            width: 100%;
            padding: 16px 20px;
            border-radius: 14px;
            border: 2px solid var(--border-color);
            background: var(--bg-primary);
            color: var(--text-primary);
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            transition: border-color 0.3s;
            outline: none;
        }
        #search-modal input:focus {
            border-color: var(--accent);
        }
        #search-modal input::placeholder {
            color: var(--text-muted);
        }

        /* ===== GLASS UTILITY ===== */
        .glass {
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
        }

        .text-gradient {
            background: linear-gradient(135deg, var(--accent), var(--accent-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ===== CONTACT FORM ===== */
        .form-input {
            width: 100%;
            padding: 14px 18px;
            border-radius: 14px;
            border: 2px solid var(--input-border);
            background: var(--input-bg);
            color: var(--text-primary);
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            transition: border-color 0.3s, box-shadow 0.3s;
            outline: none;
        }
        .form-input:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 4px var(--accent-bg);
        }
        .form-input::placeholder {
            color: var(--text-muted);
        }
        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: var(--text-secondary);
            margin-bottom: 6px;
        }
        .form-textarea {
            resize: vertical;
            min-height: 130px;
        }

        /* ===== BACK TO TOP ===== */
        #back-to-top {
            position: fixed;
            bottom: 24px;
            right: 24px;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--accent);
            color: #fff;
            border: none;
            font-size: 18px;
            cursor: pointer;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(15, 118, 110, 0.30);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #back-to-top.visible {
            opacity: 1;
            pointer-events: auto;
        }
        #back-to-top:hover {
            transform: translateY(-4px);
            background: #0d5e57;
            box-shadow: 0 6px 30px rgba(15, 118, 110, 0.45);
        }

        /* ===== WHATSAPP FLOAT ===== */
        #whatsapp-float {
            position: fixed;
            bottom: 84px;
            right: 24px;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: #25d366;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            z-index: 999;
            box-shadow: 0 4px 20px rgba(37, 211, 102, 0.35);
            transition: all 0.3s ease;
            text-decoration: none;
        }
        #whatsapp-float:hover {
            transform: scale(1.08);
            box-shadow: 0 6px 30px rgba(37, 211, 102, 0.50);
        }

        /* ===== FOOTER ===== */
        .footer-link {
            color: #94a3b8;
            transition: color 0.2s;
            text-decoration: none;
        }
        .footer-link:hover {
            color: #fff;
        }

        /* ===== MAP PLACEHOLDER ===== */
        .map-placeholder {
            background: var(--bg-secondary);
            border-radius: 20px;
            border: 1px solid var(--border-color);
            min-height: 280px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: var(--text-muted);
            font-size: 14px;
            gap: 12px;
        }
        .map-placeholder i {
            font-size: 3rem;
            opacity: 0.3;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .map-placeholder {
                min-height: 200px;
            }
        }
        @media (max-width: 480px) {
            .map-placeholder {
                min-height: 160px;
            }
            .map-placeholder i {
                font-size: 2.5rem;
            }
            #search-modal .modal-box {
                padding: 20px;
            }
        }

        [data-aos] {
            pointer-events: none;
        }
        [data-aos].aos-animate {
            pointer-events: auto;
        }
    </style>
</head>
<body>

    <!-- ===== SCROLL PROGRESS ===== -->
    <div id="scroll-progress"></div>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar fixed top-0 left-0 w-full z-50" id="navbar" role="navigation" aria-label="Main navigation">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <!-- Logo -->
<a href="index.php" class="flex items-center gap-3 shrink-0" aria-label="KESA Home">
    <div class="w-12 h-12 flex items-center justify-center">
        <img src="img/KSA logo.jpeg"
             alt="KESA Logo"
             class="w-full h-full object-contain">
    </div>
</a>

                <!-- Desktop Menu -->
                <ul class="hidden lg:flex items-center gap-1 xl:gap-2" id="desktop-menu">
                    <li><a href="index.php" class="nav-link">Home</a></li>
                    <li><a href="about.php" class="nav-link">About</a></li>
                    <li><a href="leadership.php" class="nav-link">Leadership</a></li>
                    <li><a href="membership.php" class="nav-link">Membership</a></li>
                    <li><a href="events.php" class="nav-link">Events</a></li>
                    <li><a href="scholarships.php" class="nav-link">Scholarships</a></li>
                    <li><a href="news.php" class="nav-link">News</a></li>
                    <li><a href="gallery.php" class="nav-link">Gallery</a></li>
                    <li><a href="projects.php" class="nav-link">Projects</a></li>
                    <li><a href="alumni.php" class="nav-link">Alumni</a></li>
                    <li><a href="contact.php" class="nav-link active">Contact</a></li>
                </ul>

                <!-- Right Actions -->
                <div class="flex items-center gap-2">
                    <button id="search-toggle" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" aria-label="Search">
                        <i class="fas fa-search text-[#334155] dark:text-[#94a3b8] text-lg"></i>
                    </button>
                    <button id="dark-toggle" aria-label="Toggle dark mode">
                        <i class="fas fa-moon"></i>
                    </button>
                    <a href="membership.php" class="hidden sm:inline-flex btn-primary text-sm px-5 py-2.5">
                        <i class="fas fa-user-plus"></i> Join
                    </a>
                    <button id="mobile-toggle" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" aria-label="Toggle mobile menu" aria-expanded="false">
                        <i class="fas fa-bars text-[#334155] dark:text-[#94a3b8] text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- ===== MOBILE MENU ===== -->
    <div id="mobile-menu" class="fixed inset-0 z-40 bg-white dark:bg-[#0f172a] pt-24 px-6 overflow-y-auto lg:hidden" role="dialog" aria-modal="true" aria-label="Mobile navigation">
        <div class="flex flex-col gap-1 pb-8">
            <a href="index.php" class="nav-link text-lg">Home</a>
            <a href="about.php" class="nav-link text-lg">About</a>
            <a href="leadership.php" class="nav-link text-lg">Leadership</a>
            <a href="membership.php" class="nav-link text-lg">Membership</a>
            <a href="events.php" class="nav-link text-lg">Events</a>
            <a href="scholarships.php" class="nav-link text-lg">Scholarships</a>
            <a href="news.php" class="nav-link text-lg">News</a>
            <a href="gallery.php" class="nav-link text-lg">Gallery</a>
            <a href="projects.php" class="nav-link text-lg">Projects</a>
            <a href="alumni.php" class="nav-link text-lg">Alumni</a>
            <a href="contact.php" class="nav-link active text-lg">Contact</a>
            <div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-800">
                <a href="membership.php" class="btn-primary w-full justify-center text-center">
                    <i class="fas fa-user-plus"></i> Join KESA
                </a>
            </div>
        </div>
    </div>

    <!-- ===== SEARCH MODAL ===== -->
    <div id="search-modal">
        <div class="modal-box">
            <div class="flex items-center justify-between mb-4">
                <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white">Search</h4>
                <button id="search-close" class="w-8 h-8 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 flex items-center justify-center text-slate-500 dark:text-slate-400 transition-colors">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <input type="text" placeholder="Search for information, contacts, resources..." />
            <p class="text-xs text-slate-400 dark:text-slate-500 mt-3">Try searching for "scholarship", "membership", or "office"</p>
        </div>
    </div>

    <!-- ===== MAIN CONTENT ===== -->
    <main>

        <!-- ===== HERO ===== -->
        <section class="py-16 lg:py-24 bg-gradient-to-br from-slate-50 to-white dark:from-slate-900 dark:to-slate-800/50 border-b border-slate-200/60 dark:border-slate-800/60">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-center gap-12">
                    <!-- Left -->
                    <div class="flex-1" data-aos="fade-right">
                        <div class="inline-flex items-center gap-2 bg-[#0f766e]/10 text-[#0f766e] dark:bg-[#0f766e]/20 dark:text-[#2dd4bf] px-4 py-1.5 rounded-full text-xs font-semibold mb-4 w-fit">
                            <i class="fas fa-envelope"></i> Get in Touch
                        </div>
                        <h1 class="font-poppins font-bold text-4xl sm:text-5xl text-[#0f172a] dark:text-white leading-tight mb-4">
                            Let's <span class="text-gradient">Connect</span>
                        </h1>
                        <p class="text-base text-[#475569] dark:text-[#94a3b8] max-w-lg leading-relaxed">
                            Have questions, partnership ideas, or want to get involved? Reach out to us
                            through any of the channels below, and we'll get back to you promptly.
                        </p>
                        <div class="flex flex-wrap gap-4 mt-6">
                            <a href="#contact-form" class="btn-primary">
                                <i class="fas fa-paper-plane"></i> Send a Message
                            </a>
                            <a href="tel:+2348001234567" class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-300 font-medium text-sm hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                                <i class="fas fa-phone"></i> Call Us
                            </a>
                        </div>
                    </div>
                    <!-- Right: Quick Contact Cards -->
                    <div class="flex-1 grid grid-cols-2 gap-4" data-aos="fade-left">
                        <div class="glass rounded-2xl p-6 text-center border border-slate-200/60 dark:border-slate-800/60">
                            <div class="text-3xl mb-3">📍</div>
                            <p class="text-xs font-medium text-slate-500 dark:text-slate-400">Visit Us</p>
                            <p class="text-sm font-semibold text-[#0f172a] dark:text-white">Keffi, Nasarawa</p>
                        </div>
                        <div class="glass rounded-2xl p-6 text-center border border-slate-200/60 dark:border-slate-800/60">
                            <div class="text-3xl mb-3">📧</div>
                            <p class="text-xs font-medium text-slate-500 dark:text-slate-400">Email</p>
                            <p class="text-sm font-semibold text-[#0f172a] dark:text-white">contact@kesa.org.ng</p>
                        </div>
                        <div class="glass rounded-2xl p-6 text-center border border-slate-200/60 dark:border-slate-800/60">
                            <div class="text-3xl mb-3">📞</div>
                            <p class="text-xs font-medium text-slate-500 dark:text-slate-400">Phone</p>
                            <p class="text-sm font-semibold text-[#0f172a] dark:text-white">+234 800 123 4567</p>
                        </div>
                        <div class="glass rounded-2xl p-6 text-center border border-slate-200/60 dark:border-slate-800/60">
                            <div class="text-3xl mb-3">🕒</div>
                            <p class="text-xs font-medium text-slate-500 dark:text-slate-400">Office Hours</p>
                            <p class="text-sm font-semibold text-[#0f172a] dark:text-white">Mon–Fri, 10am–4pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CONTACT FORM + INFO ===== -->
        <section id="contact-form" class="py-16 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">

                    <!-- Left: Form -->
                    <div class="lg:col-span-3" data-aos="fade-right">
                        <div class="glass rounded-3xl p-8 lg:p-10 border border-slate-200/60 dark:border-slate-800/60">
                            <h2 class="font-poppins font-bold text-2xl text-[#0f172a] dark:text-white mb-2">
                                Send a Message
                            </h2>
                            <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mb-8">
                                Fill in the form below and we'll respond within 24 hours.
                            </p>
                            <form id="contactForm" action="#" method="POST">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <div>
                                        <label for="fullName" class="form-label">Full Name</label>
                                        <input type="text" id="fullName" class="form-input" placeholder="Your full name" required />
                                    </div>
                                    <div>
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" id="email" class="form-input" placeholder="you@example.com" required />
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" id="subject" class="form-input" placeholder="What is this regarding?" required />
                                </div>
                                <div class="mt-5">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea id="message" class="form-input form-textarea" placeholder="Write your message here..." required></textarea>
                                </div>
                                <div class="mt-6 flex items-center gap-3">
                                    <button type="submit" class="btn-primary w-full sm:w-auto justify-center">
                                        <i class="fas fa-paper-plane"></i> Send Message
                                    </button>
                                    <span class="text-xs text-[#64748b] dark:text-[#94a3b8]">We respect your privacy.</span>
                                </div>
                            </form>
                            <!-- Success message (hidden by default) -->
                            <div id="form-success" class="mt-6 hidden p-4 rounded-xl bg-[#0f766e]/10 text-[#0f766e] dark:bg-[#0f766e]/20 dark:text-[#2dd4bf] border border-[#0f766e]/20 text-sm flex items-center gap-3">
                                <i class="fas fa-check-circle text-lg"></i>
                                <span>Your message has been sent successfully! We'll get back to you shortly.</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Contact Info -->
                    <div class="lg:col-span-2 space-y-6" data-aos="fade-left">
                        <!-- Address Card -->
                        <div class="glass rounded-2xl p-6 border border-slate-200/60 dark:border-slate-800/60">
                            <h3 class="font-poppins font-semibold text-[#0f172a] dark:text-white text-lg mb-4">
                                <i class="fas fa-map-pin text-[#0f766e] dark:text-[#2dd4bf] mr-2"></i> Our Office
                            </h3>
                            <address class="not-italic text-sm text-[#64748b] dark:text-[#94a3b8] leading-relaxed">
                                <p>Keffi Students Association Secretariat,</p>
                                <p>Along Keffi – Abuja Expressway,</p>
                                <p>Keffi, Nasarawa State, Nigeria.</p>
                            </address>
                        </div>

                        <!-- Contact Details -->
                        <div class="glass rounded-2xl p-6 border border-slate-200/60 dark:border-slate-800/60">
                            <h3 class="font-poppins font-semibold text-[#0f172a] dark:text-white text-lg mb-4">
                                <i class="fas fa-phone-alt text-[#0f766e] dark:text-[#2dd4bf] mr-2"></i> Direct Contacts
                            </h3>
                            <div class="space-y-3 text-sm">
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-envelope text-[#0f766e] dark:text-[#2dd4bf] w-5 mt-1"></i>
                                    <div>
                                        <p class="font-medium text-[#0f172a] dark:text-white">General Inquiries</p>
                                        <a href="mailto:contact@kesa.org.ng" class="text-[#64748b] dark:text-[#94a3b8] hover:text-[#0f766e] dark:hover:text-[#2dd4bf] transition-colors">contact@kesa.org.ng</a>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-user-tie text-[#0f766e] dark:text-[#2dd4bf] w-5 mt-1"></i>
                                    <div>
                                        <p class="font-medium text-[#0f172a] dark:text-white">President's Office</p>
                                        <a href="mailto:president@kesa.org.ng" class="text-[#64748b] dark:text-[#94a3b8] hover:text-[#0f766e] dark:hover:text-[#2dd4bf] transition-colors">president@kesa.org.ng</a>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-handshake text-[#0f766e] dark:text-[#2dd4bf] w-5 mt-1"></i>
                                    <div>
                                        <p class="font-medium text-[#0f172a] dark:text-white">Partnerships & Sponsorships</p>
                                        <a href="mailto:partners@kesa.org.ng" class="text-[#64748b] dark:text-[#94a3b8] hover:text-[#0f766e] dark:hover:text-[#2dd4bf] transition-colors">partners@kesa.org.ng</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="glass rounded-2xl p-6 border border-slate-200/60 dark:border-slate-800/60">
                            <h3 class="font-poppins font-semibold text-[#0f172a] dark:text-white text-lg mb-4">
                                <i class="fas fa-share-alt text-[#0f766e] dark:text-[#2dd4bf] mr-2"></i> Connect With Us
                            </h3>
                            <div class="flex gap-4">
                                <a href="#" class="w-10 h-10 rounded-full bg-[#0f766e]/10 dark:bg-[#0f766e]/20 text-[#0f766e] dark:text-[#2dd4bf] flex items-center justify-center hover:bg-[#0f766e] hover:text-white transition-colors"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="w-10 h-10 rounded-full bg-[#0f766e]/10 dark:bg-[#0f766e]/20 text-[#0f766e] dark:text-[#2dd4bf] flex items-center justify-center hover:bg-[#0f766e] hover:text-white transition-colors"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="w-10 h-10 rounded-full bg-[#0f766e]/10 dark:bg-[#0f766e]/20 text-[#0f766e] dark:text-[#2dd4bf] flex items-center justify-center hover:bg-[#0f766e] hover:text-white transition-colors"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="w-10 h-10 rounded-full bg-[#0f766e]/10 dark:bg-[#0f766e]/20 text-[#0f766e] dark:text-[#2dd4bf] flex items-center justify-center hover:bg-[#0f766e] hover:text-white transition-colors"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="w-10 h-10 rounded-full bg-[#0f766e]/10 dark:bg-[#0f766e]/20 text-[#0f766e] dark:text-[#2dd4bf] flex items-center justify-center hover:bg-[#0f766e] hover:text-white transition-colors"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ===== MAP SECTION ===== -->
        <section class="pb-16 lg:pb-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div data-aos="fade-up">
                    <div class="map-placeholder">
                        <i class="fas fa-map-marked-alt"></i>
                        <div class="text-center">
                            <p class="font-semibold text-[#0f172a] dark:text-white">KESA Secretariat, Keffi</p>
                            <p class="text-sm text-[#64748b] dark:text-[#94a3b8]">Interactive map coming soon — we're located along the Keffi–Abuja Expressway.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="bg-[#0f172a] text-slate-400 pt-16 pb-8 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' viewBox='0 0 40 40'%3E%3Crect width='40' height='40' rx='10' fill='%230f766e'/%3E%3Ctext x='10' y='28' font-family='Poppins' font-weight='900' font-size='22' fill='white'%3EK%3C/text%3E%3C/svg%3E" alt="KESA Logo" class="w-10 h-10 object-contain rounded-xl" />
                    <span class="font-poppins font-bold text-white text-lg tracking-tight">KESA</span>
                </div>
                <p class="text-sm leading-relaxed mb-6">
                    The premier student organization dedicated to fostering human capital development,
                    educational parity, and sustainable social growth within Keffi.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-9 h-9 rounded-full bg-slate-800 hover:bg-[#0f766e] text-white flex items-center justify-center transition-colors"><i class="fab fa-facebook-f text-sm"></i></a>
                    <a href="#" class="w-9 h-9 rounded-full bg-slate-800 hover:bg-[#0f766e] text-white flex items-center justify-center transition-colors"><i class="fab fa-twitter text-sm"></i></a>
                    <a href="#" class="w-9 h-9 rounded-full bg-slate-800 hover:bg-[#0f766e] text-white flex items-center justify-center transition-colors"><i class="fab fa-instagram text-sm"></i></a>
                    <a href="#" class="w-9 h-9 rounded-full bg-slate-800 hover:bg-[#0f766e] text-white flex items-center justify-center transition-colors"><i class="fab fa-linkedin-in text-sm"></i></a>
                </div>
            </div>
            <div>
                <h4 class="font-poppins font-semibold text-white text-sm uppercase tracking-wider mb-6">Quick Links</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="about.php" class="footer-link">About Us</a></li>
                    <li><a href="leadership.php" class="footer-link">Executive Team</a></li>
                    <li><a href="membership.php" class="footer-link">Portal Registration</a></li>
                    <li><a href="scholarships.php" class="footer-link">Education Grants</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-poppins font-semibold text-white text-sm uppercase tracking-wider mb-6">Resources</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="news.php" class="footer-link">Press & News</a></li>
                    <li><a href="events.php" class="footer-link">Upcoming Events</a></li>
                    <li><a href="projects.php" class="footer-link">Community Projects</a></li>
                    <li><a href="gallery.php" class="footer-link">Media Gallery</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-poppins font-semibold text-white text-sm uppercase tracking-wider mb-6">Contact Support</h4>
                <p class="text-sm leading-relaxed mb-4">
                    Have questions about registration or current sponsorship packages? Reach out directly.
                </p>
                <span class="text-white font-semibold text-sm">📧 contact@kesa.com.ng</span>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 border-t border-slate-800 text-center text-xs text-slate-500">
            <p>&copy; 2026 Keffi Students Association. All rights reserved. Designed by <a href="https://qafamstech.com.ng" target="_blank" rel="noopener noreferrer" class="text-[#0f766e] hover:underline">Qafam Software Technology</a></p>
        </div>
    </footer>

    <!-- ===== FLOATING ELEMENTS ===== -->
    <a href="https://wa.me/234XXXXXXXXXX" id="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <button id="back-to-top" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- ===== SCRIPTS ===== -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
    </script>
    <script>
        // ===== INIT AOS =====
        AOS.init({ once: true, duration: 700, easing: 'ease-out-cubic' });

        // ===== SCROLL PROGRESS + NAVBAR =====
        const navbar = document.getElementById('navbar');
        const progressBar = document.getElementById('scroll-progress');
        const backToTopBtn = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            const scrollPos = window.scrollY;
            const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
            if (totalHeight > 0) {
                progressBar.style.width = (scrollPos / totalHeight) * 100 + '%';
            }
            if (scrollPos > 40) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
            if (scrollPos > 400) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // ===== ANNOUNCEMENT BAR =====
        const annBar = document.getElementById('announcement-bar');
        const closeAnn = document.getElementById('close-announcement');
        closeAnn.addEventListener('click', () => {
            annBar.style.display = 'none';
            document.body.style.paddingTop = '0';
            navbar.style.top = '0';
        });

        // ===== MOBILE MENU =====
        const mobileToggle = document.getElementById('mobile-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileToggle.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.toggle('open');
            mobileToggle.setAttribute('aria-expanded', isOpen);
            const icon = mobileToggle.querySelector('i');
            icon.classList.toggle('fa-bars', !isOpen);
            icon.classList.toggle('fa-times', isOpen);
        });
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                mobileToggle.setAttribute('aria-expanded', 'false');
                const icon = mobileToggle.querySelector('i');
                icon.classList.add('fa-bars');
                icon.classList.remove('fa-times');
            });
        });

        // ===== SEARCH MODAL =====
        const searchToggle = document.getElementById('search-toggle');
        const searchClose = document.getElementById('search-close');
        const searchModal = document.getElementById('search-modal');
        const searchInput = searchModal.querySelector('input');

        function openSearch() {
            searchModal.classList.add('open');
            setTimeout(() => searchInput.focus(), 300);
        }

        function closeSearch() {
            searchModal.classList.remove('open');
            searchInput.blur();
        }

        searchToggle.addEventListener('click', openSearch);
        searchClose.addEventListener('click', closeSearch);
        searchModal.addEventListener('click', (e) => {
            if (e.target === searchModal) closeSearch();
        });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeSearch();
            if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
                e.preventDefault();
                openSearch();
            }
        });

        // ===== DARK MODE =====
        const darkToggle = document.getElementById('dark-toggle');
        darkToggle.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            const icon = darkToggle.querySelector('i');
            icon.classList.toggle('fa-moon');
            icon.classList.toggle('fa-sun');
            localStorage.setItem('darkMode', document.documentElement.classList.contains('dark') ? 'true' : 'false');
        });

        if (localStorage.getItem('darkMode') === 'true') {
            document.documentElement.classList.add('dark');
            const icon = darkToggle.querySelector('i');
            icon.classList.remove('fa-moon');
            icon.classList.add('fa-sun');
        }

        // ===== FORM HANDLING =====
        const form = document.getElementById('contactForm');
        const successDiv = document.getElementById('form-success');

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            // Simulate sending
            const btn = form.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            btn.disabled = true;

            setTimeout(() => {
                successDiv.classList.remove('hidden');
                form.reset();
                btn.innerHTML = originalText;
                btn.disabled = false;
                // Auto-hide success after 6 seconds
                setTimeout(() => {
                    successDiv.classList.add('hidden');
                }, 6000);
            }, 1500);
        });

        // ===== SMOOTH SCROLL FOR ANCHOR LINKS =====
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }
            });
        });
    </script>
</body>
</html>