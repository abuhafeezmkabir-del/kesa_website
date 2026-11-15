<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KESA — Alumni Network</title>

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

        /* ===== ALUMNI CARD ===== */
        .alumni-card {
            background: var(--bg-card);
            border-radius: 20px;
            border: 1px solid var(--border-color);
            overflow: hidden;
            transition: all 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            text-align: center;
            padding: 28px 24px 24px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .alumni-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
            border-color: var(--accent);
        }
        .alumni-card .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: var(--bg-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: var(--text-muted);
            margin-bottom: 16px;
            border: 3px solid var(--border-color);
            transition: border-color 0.3s;
            overflow: hidden;
            flex-shrink: 0;
        }
        .alumni-card:hover .avatar {
            border-color: var(--accent);
        }
        .alumni-card .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .alumni-card h3 {
            font-size: 18px;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 4px;
        }
        .alumni-card .role {
            font-size: 14px;
            color: var(--accent);
            font-weight: 600;
            margin-bottom: 6px;
        }
        .alumni-card .year {
            font-size: 13px;
            color: var(--text-muted);
            margin-bottom: 12px;
        }
        .alumni-card .quote {
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.6;
            font-style: italic;
            margin-bottom: 16px;
            flex: 1;
        }
        .alumni-card .social-links {
            display: flex;
            gap: 12px;
            margin-top: 4px;
        }
        .alumni-card .social-links a {
            color: var(--text-muted);
            transition: all 0.3s;
            font-size: 16px;
            text-decoration: none;
        }
        .alumni-card .social-links a:hover {
            color: var(--accent);
            transform: translateY(-2px);
        }

        /* ===== FILTER BUTTONS ===== */
        .filter-btn {
            padding: 8px 22px;
            border-radius: 40px;
            border: 1px solid var(--border-color);
            background: transparent;
            color: var(--text-secondary);
            font-weight: 600;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Poppins', sans-serif;
            white-space: nowrap;
        }
        .filter-btn:hover {
            border-color: var(--accent);
            color: var(--text-primary);
            background: var(--accent-bg);
        }
        .filter-btn.active {
            background: var(--accent);
            color: #fff;
            border-color: var(--accent);
            box-shadow: 0 4px 20px rgba(15, 118, 110, 0.25);
        }
        .filter-btn.active:hover {
            box-shadow: 0 6px 28px rgba(15, 118, 110, 0.40);
        }
        .dark .filter-btn {
            border-color: #334155;
        }
        .dark .filter-btn:hover {
            background: rgba(15, 118, 110, 0.20);
        }

        /* ===== NO RESULTS ===== */
        #no-results {
            display: none;
            text-align: center;
            padding: 50px 20px;
            grid-column: 1 / -1;
        }
        #no-results i {
            font-size: 3.5rem;
            color: var(--text-muted);
            opacity: 0.30;
            margin-bottom: 12px;
        }
        #no-results h3 {
            font-size: 1.3rem;
            color: var(--text-secondary);
            font-weight: 600;
        }
        #no-results p {
            color: var(--text-muted);
            font-size: 14px;
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

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .alumni-card .avatar {
                width: 80px;
                height: 80px;
                font-size: 2.5rem;
            }
            .filter-btn {
                padding: 6px 16px;
                font-size: 12px;
            }
        }
        @media (max-width: 480px) {
            .alumni-card {
                padding: 20px 16px;
            }
            .alumni-card h3 {
                font-size: 16px;
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

    <!-- ===== ANNOUNCEMENT BAR ===== -->
    <div id="announcement-bar" role="alert">
      
        <button class="close-btn" id="close-announcement" aria-label="Close announcement">
            <i class="fas fa-times"></i>
        </button>
    </div>

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
                    <li><a href="alumni.php" class="nav-link active">Alumni</a></li>
                    <li><a href="contact.php" class="nav-link">Contact</a></li>
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
            <a href="alumni.php" class="nav-link active text-lg">Alumni</a>
            <a href="contact.php" class="nav-link text-lg">Contact</a>
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
                <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white">Search Alumni</h4>
                <button id="search-close" class="w-8 h-8 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 flex items-center justify-center text-slate-500 dark:text-slate-400 transition-colors">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <input type="text" placeholder="Search by name, year, field..." />
            <p class="text-xs text-slate-400 dark:text-slate-500 mt-3">Try searching for "engineer", "2015", or "medicine"</p>
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
                            <i class="fas fa-users"></i> Alumni Network
                        </div>
                        <h1 class="font-poppins font-bold text-4xl sm:text-5xl text-[#0f172a] dark:text-white leading-tight mb-4">
                            Our <span class="text-gradient">Global Alumni</span> Community
                        </h1>
                        <p class="text-base text-[#475569] dark:text-[#94a3b8] max-w-lg leading-relaxed">
                            Meet the distinguished graduates of Keffi who are making an impact across industries,
                            continents, and communities. Their legacy inspires our current students.
                        </p>
                        <div class="flex flex-wrap gap-4 mt-6">
                            <a href="#alumni-grid" class="btn-primary">
                                <i class="fas fa-user-graduate"></i> Explore Alumni
                            </a>
                            <a href="#" class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-300 font-medium text-sm hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                                <i class="fas fa-pen"></i> Update Profile
                            </a>
                        </div>
                    </div>
                    <!-- Right: Stats -->
                    <div class="flex-1 grid grid-cols-2 gap-4" data-aos="fade-left">
                        <div class="glass rounded-2xl p-6 text-center border border-slate-200/60 dark:border-slate-800/60">
                            <div class="text-3xl font-bold text-[#0f766e] dark:text-[#2dd4bf]">350+</div>
                            <p class="text-xs font-medium text-slate-500 dark:text-slate-400 mt-1">Registered Alumni</p>
                        </div>
                        <div class="glass rounded-2xl p-6 text-center border border-slate-200/60 dark:border-slate-800/60">
                            <div class="text-3xl font-bold text-[#0f766e] dark:text-[#2dd4bf]">15</div>
                            <p class="text-xs font-medium text-slate-500 dark:text-slate-400 mt-1">Countries</p>
                        </div>
                        <div class="glass rounded-2xl p-6 text-center border border-slate-200/60 dark:border-slate-800/60">
                            <div class="text-3xl font-bold text-[#0f766e] dark:text-[#2dd4bf]">42%</div>
                            <p class="text-xs font-medium text-slate-500 dark:text-slate-400 mt-1">In Leadership Roles</p>
                        </div>
                        <div class="glass rounded-2xl p-6 text-center border border-slate-200/60 dark:border-slate-800/60">
                            <div class="text-3xl font-bold text-[#0f766e] dark:text-[#2dd4bf]">10+</div>
                            <p class="text-xs font-medium text-slate-500 dark:text-slate-400 mt-1">Mentorship Programs</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== ALUMNI GRID ===== -->
        <section id="alumni-grid" class="py-16 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-12" data-aos="fade-up">
                    <span class="text-sm font-semibold text-gradient uppercase tracking-wider">Notable Members</span>
                    <h2 class="font-poppins font-bold text-3xl sm:text-4xl text-[#0f172a] dark:text-white mt-2">
                        Where Are They <span class="text-gradient">Now?</span>
                    </h2>
                    <p class="text-[#64748b] dark:text-[#94a3b8] mt-4">
                        Our alumni are spread across the globe, contributing to diverse fields and
                        carrying the KESA spirit with them.
                    </p>
                </div>

                <!-- Filter Bar -->
                <div class="flex flex-wrap items-center justify-center gap-2 mb-10" data-aos="fade-up" data-aos-delay="100">
                    <button class="filter-btn active" data-filter="all">
                        <i class="fas fa-th"></i> All
                    </button>
                    <button class="filter-btn" data-filter="engineering">
                        <i class="fas fa-microchip"></i> Engineering
                    </button>
                    <button class="filter-btn" data-filter="medicine">
                        <i class="fas fa-heartbeat"></i> Medicine
                    </button>
                    <button class="filter-btn" data-filter="business">
                        <i class="fas fa-chart-line"></i> Business
                    </button>
                    <button class="filter-btn" data-filter="education">
                        <i class="fas fa-graduation-cap"></i> Education
                    </button>
                    <button class="filter-btn" data-filter="public-service">
                        <i class="fas fa-landmark"></i> Public Service
                    </button>
                </div>

                <!-- Grid -->
                <div id="alumni-grid-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    <!-- Alumni 1 -->
                    <div class="alumni-card" data-category="engineering" data-aos="fade-up" data-aos-delay="0">
                        <div class="avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='48' fill='%23e2e8f0'/%3E%3Ctext x='28' y='62' font-family='Poppins' font-size='36' fill='%2364758b'%3E👩‍💻%3C/text%3E%3C/svg%3E" alt="Alumni" />
                        </div>
                        <h3>Dr. Amina Bello</h3>
                        <div class="role">AI Research Scientist</div>
                        <div class="year">Class of 2015</div>
                        <p class="quote">"KESA gave me the foundation to dream big and the network to turn those dreams into reality."</p>
                        <div class="social-links">
                            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
                        </div>
                    </div>

                    <!-- Alumni 2 -->
                    <div class="alumni-card" data-category="medicine" data-aos="fade-up" data-aos-delay="50">
                        <div class="avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='48' fill='%23e2e8f0'/%3E%3Ctext x='28' y='62' font-family='Poppins' font-size='36' fill='%2364758b'%3E👨‍⚕️%3C/text%3E%3C/svg%3E" alt="Alumni" />
                        </div>
                        <h3>Dr. Ibrahim Suleiman</h3>
                        <div class="role">Cardiothoracic Surgeon</div>
                        <div class="year">Class of 2012</div>
                        <p class="quote">"The values of service and excellence I learned at KESA guide me every day in the operating room."</p>
                        <div class="social-links">
                            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>

                    <!-- Alumni 3 -->
                    <div class="alumni-card" data-category="business" data-aos="fade-up" data-aos-delay="100">
                        <div class="avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='48' fill='%23e2e8f0'/%3E%3Ctext x='28' y='62' font-family='Poppins' font-size='36' fill='%2364758b'%3E👩‍💼%3C/text%3E%3C/svg%3E" alt="Alumni" />
                        </div>
                        <h3>Fatima Usman</h3>
                        <div class="role">CEO, TechBridge Africa</div>
                        <div class="year">Class of 2010</div>
                        <p class="quote">"KESA taught me that leadership is about lifting others as you climb. That's the ethos of my company."</p>
                        <div class="social-links">
                            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                    <!-- Alumni 4 -->
                    <div class="alumni-card" data-category="education" data-aos="fade-up" data-aos-delay="150">
                        <div class="avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='48' fill='%23e2e8f0'/%3E%3Ctext x='28' y='62' font-family='Poppins' font-size='36' fill='%2364758b'%3E👨‍🏫%3C/text%3E%3C/svg%3E" alt="Alumni" />
                        </div>
                        <h3>Prof. Musa Abdullahi</h3>
                        <div class="role">Dean, Faculty of Arts, UNILAG</div>
                        <div class="year">Class of 2008</div>
                        <p class="quote">"I return to KESA every year to mentor students — it's my way of paying forward the support I received."</p>
                        <div class="social-links">
                            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>

                    <!-- Alumni 5 -->
                    <div class="alumni-card" data-category="public-service" data-aos="fade-up" data-aos-delay="200">
                        <div class="avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='48' fill='%23e2e8f0'/%3E%3Ctext x='28' y='62' font-family='Poppins' font-size='36' fill='%2364758b'%3E👩‍⚖️%3C/text%3E%3C/svg%3E" alt="Alumni" />
                        </div>
                        <h3>Hon. Aisha Mohammed</h3>
                        <div class="role">Commissioner for Education, Nasarawa</div>
                        <div class="year">Class of 2006</div>
                        <p class="quote">"My time in KESA shaped my policy priorities — education and youth empowerment remain my core agenda."</p>
                        <div class="social-links">
                            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>

                    <!-- Alumni 6 -->
                    <div class="alumni-card" data-category="engineering" data-aos="fade-up" data-aos-delay="250">
                        <div class="avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='48' fill='%23e2e8f0'/%3E%3Ctext x='28' y='62' font-family='Poppins' font-size='36' fill='%2364758b'%3E🧑‍🔧%3C/text%3E%3C/svg%3E" alt="Alumni" />
                        </div>
                        <h3>Engr. Samuel Okafor</h3>
                        <div class="role">Director, Renewable Energy Agency</div>
                        <div class="year">Class of 2011</div>
                        <p class="quote">"KESA ignited my passion for sustainable development. Now I'm building solar grids across West Africa."</p>
                        <div class="social-links">
                            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
                        </div>
                    </div>

                    <!-- Alumni 7 -->
                    <div class="alumni-card" data-category="business" data-aos="fade-up" data-aos-delay="300">
                        <div class="avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='48' fill='%23e2e8f0'/%3E%3Ctext x='28' y='62' font-family='Poppins' font-size='36' fill='%2364758b'%3E👨‍💼%3C/text%3E%3C/svg%3E" alt="Alumni" />
                        </div>
                        <h3>Malam Abubakar Danjuma</h3>
                        <div class="role">Founder, Halal Logistics</div>
                        <div class="year">Class of 2014</div>
                        <p class="quote">"The entrepreneurial spirit at KESA is unmatched. I started my first business as a student here."</p>
                        <div class="social-links">
                            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>

                    <!-- Alumni 8 -->
                    <div class="alumni-card" data-category="medicine" data-aos="fade-up" data-aos-delay="350">
                        <div class="avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='48' fill='%23e2e8f0'/%3E%3Ctext x='28' y='62' font-family='Poppins' font-size='36' fill='%2364758b'%3E👩‍🔬%3C/text%3E%3C/svg%3E" alt="Alumni" />
                        </div>
                        <h3>Dr. Zainab Nuhu</h3>
                        <div class="role">Public Health Specialist, WHO</div>
                        <div class="year">Class of 2013</div>
                        <p class="quote">"KESA connected me with mentors who guided me into global health. Now I work on vaccine equity."</p>
                        <div class="social-links">
                            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>

                    <!-- No Results -->
                    <div id="no-results">
                        <i class="fas fa-user-slash"></i>
                        <h3>No alumni found</h3>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Try selecting a different category</p>
                    </div>

                </div>

                <!-- CTA Section -->
                <div class="mt-16 text-center" data-aos="fade-up">
                    <div class="glass rounded-3xl p-10 border border-slate-200/60 dark:border-slate-800/60 max-w-3xl mx-auto">
                        <h3 class="font-poppins font-bold text-2xl text-[#0f172a] dark:text-white mb-3">
                            Join the Alumni Network
                        </h3>
                        <p class="text-[#64748b] dark:text-[#94a3b8] mb-6 text-sm">
                            Are you a KESA graduate? Update your profile, connect with fellow alumni, and
                            be part of our growing community of changemakers.
                        </p>
                        <div class="flex flex-wrap justify-center gap-4">
                            <a href="#" class="btn-primary">
                                <i class="fas fa-user-plus"></i> Register Now
                            </a>
                            <a href="#" class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-300 font-medium text-sm hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                                <i class="fas fa-arrow-right"></i> Learn More
                            </a>
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

        // ===== ALUMNI FILTER =====
        const filterBtns = document.querySelectorAll('.filter-btn');
        const alumniCards = document.querySelectorAll('.alumni-card');
        const noResults = document.getElementById('no-results');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const filter = this.dataset.filter;
                let visible = 0;

                alumniCards.forEach(card => {
                    const cat = card.dataset.category;
                    if (filter === 'all' || cat === filter) {
                        card.style.display = 'flex';
                        visible++;
                        card.style.opacity = '0';
                        requestAnimationFrame(() => {
                            card.style.opacity = '1';
                        });
                    } else {
                        card.style.display = 'none';
                    }
                });

                noResults.style.display = visible === 0 ? 'block' : 'none';
            });
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