<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KESA Leadership | National Executive Council</title>

    <!-- ===== Google Fonts ===== -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- ===== Tailwind CSS ===== -->
    <script src="https://cdn.tailwindcss.com">
    </script>

    <!-- ===== AOS ===== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- ===== Swiper.js ===== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- ===== Font Awesome ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        /* ===== ROOT VARIABLES ===== */
        :root {
            --primary: #0F766E;
            --primary-dark: #0D6B63;
            --primary-light: #14A196;
            --secondary: #2563EB;
            --accent: #F59E0B;
            --bg-light: #F8FAFC;
            --bg-dark: #0F172A;
            --text-light: #1E293B;
            --text-dark: #F1F5F9;
            --card-light: rgba(255, 255, 255, 0.8);
            --card-dark: rgba(30, 41, 59, 0.85);
            --glass-light: rgba(255, 255, 255, 0.15);
            --glass-dark: rgba(15, 23, 42, 0.25);
            --shadow-light: 0 20px 60px -15px rgba(15, 23, 42, 0.15);
            --shadow-dark: 0 20px 60px -15px rgba(0, 0, 0, 0.5);
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
            font-family: 'Inter', sans-serif;
            transition: background-color 0.4s ease, color 0.4s ease;
            overflow-x: hidden;
        }

        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        .font-inter {
            font-family: 'Inter', sans-serif;
        }

        /* ===== DARK MODE ===== */
        body.dark-mode {
            background-color: var(--bg-dark);
            color: var(--text-dark);
        }

        body.dark-mode .section-title {
            color: #FFFFFF;
        }

        body.dark-mode .section-subtitle {
            color: #94A3B8;
        }

        body.dark-mode .bg-white {
            background-color: var(--card-dark) !important;
        }

        body.dark-mode .text-gray-600 {
            color: #CBD5E1 !important;
        }

        body.dark-mode .text-gray-700 {
            color: #E2E8F0 !important;
        }

        body.dark-mode .border-gray-200 {
            border-color: #334155 !important;
        }

        body.dark-mode .bg-gray-50 {
            background-color: #1E293B !important;
        }

        body.dark-mode .bg-gray-100 {
            background-color: #1E293B !important;
        }

        body.dark-mode .shadow-lg {
            box-shadow: var(--shadow-dark) !important;
        }

        body.dark-mode .shadow-xl {
            box-shadow: var(--shadow-dark) !important;
        }

        body.dark-mode .shadow-2xl {
            box-shadow: var(--shadow-dark) !important;
        }

        body.dark-mode .glass-card {
            background: var(--card-dark) !important;
            border-color: rgba(255, 255, 255, 0.08) !important;
        }

        body.dark-mode .glass-card-light {
            background: var(--glass-dark) !important;
            border-color: rgba(255, 255, 255, 0.06) !important;
        }

        body.dark-mode .text-gray-800 {
            color: #F1F5F9 !important;
        }

        body.dark-mode .text-gray-900 {
            color: #FFFFFF !important;
        }

        body.dark-mode .hover\:text-primary:hover {
            color: var(--primary-light) !important;
        }

        body.dark-mode .bg-opacity-90 {
            --tw-bg-opacity: 0.95;
        }

        body.dark-mode .navbar {
            background: rgba(15, 23, 42, 0.92) !important;
            border-bottom-color: rgba(255, 255, 255, 0.06) !important;
        }

        body.dark-mode .footer {
            background: #0B1120 !important;
            border-top-color: rgba(255, 255, 255, 0.06) !important;
        }

        body.dark-mode .hierarchy-line {
            border-left-color: #334155 !important;
        }

        body.dark-mode .hierarchy-dot {
            background: #1E293B !important;
            border-color: var(--primary) !important;
        }

        body.dark-mode .hierarchy-connector {
            background: #334155 !important;
        }

        body.dark-mode .gradient-callout {
            background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%) !important;
        }

        /* ===== GLASSMORPHISM ===== */
        .glass-card {
            background: var(--card-light);
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.25);
            box-shadow: var(--shadow-light);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .glass-card:hover {
            transform: translateY(-8px) scale(1.01);
            box-shadow: 0 30px 80px -20px rgba(15, 23, 42, 0.25);
            border-color: rgba(15, 118, 110, 0.3);
        }

        body.dark-mode .glass-card:hover {
            box-shadow: 0 30px 80px -20px rgba(0, 0, 0, 0.6);
            border-color: rgba(15, 118, 110, 0.4);
        }

        .glass-card-light {
            background: var(--glass-light);
            backdrop-filter: blur(12px) saturate(160%);
            -webkit-backdrop-filter: blur(12px) saturate(160%);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        /* ===== SECTION TITLES ===== */
        .section-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: 2.5rem;
            line-height: 1.15;
            color: var(--text-light);
            letter-spacing: -0.02em;
        }

        .section-title .highlight {
            color: var(--primary);
        }

        .section-subtitle {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1.1rem;
            color: #64748B;
            max-width: 640px;
            line-height: 1.7;
        }

        @media (max-width: 640px) {
            .section-title {
                font-size: 1.8rem;
            }
            .section-subtitle {
                font-size: 0.95rem;
            }
        }

        /* ===== EXECUTIVE CARDS ===== */
        .exec-card {
            background: var(--card-light);
            backdrop-filter: blur(12px) saturate(170%);
            -webkit-backdrop-filter: blur(12px) saturate(170%);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 1.25rem;
            padding: 1.75rem 1.5rem;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            box-shadow: 0 8px 30px -10px rgba(15, 23, 42, 0.08);
            text-align: center;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .exec-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 60px -15px rgba(15, 118, 110, 0.2);
            border-color: rgba(15, 118, 110, 0.3);
        }

        body.dark-mode .exec-card {
            background: var(--card-dark);
            border-color: rgba(255, 255, 255, 0.06);
            box-shadow: 0 8px 30px -10px rgba(0, 0, 0, 0.3);
        }

        body.dark-mode .exec-card:hover {
            box-shadow: 0 25px 60px -15px rgba(15, 118, 110, 0.25);
            border-color: rgba(15, 118, 110, 0.4);
        }

        .exec-avatar {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: linear-gradient(135deg, #E2E8F0, #CBD5E1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.75rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1rem;
            flex-shrink: 0;
            border: 4px solid rgba(15, 118, 110, 0.15);
            transition: all 0.4s ease;
            overflow: hidden;
        }

        .exec-card:hover .exec-avatar {
            border-color: var(--primary);
            transform: scale(1.04);
            box-shadow: 0 0 0 8px rgba(15, 118, 110, 0.08);
        }

        body.dark-mode .exec-avatar {
            background: linear-gradient(135deg, #1E293B, #334155);
            border-color: rgba(15, 118, 110, 0.25);
            color: var(--primary-light);
        }

        .exec-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .exec-name {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 0.25rem;
            line-height: 1.3;
        }

        body.dark-mode .exec-name {
            color: #FFFFFF;
        }

        .exec-position {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-size: 0.82rem;
            color: var(--primary);
            letter-spacing: 0.02em;
            margin-bottom: 0.6rem;
            padding: 0.2rem 0.8rem;
            background: rgba(15, 118, 110, 0.08);
            border-radius: 50px;
            display: inline-block;
        }

        body.dark-mode .exec-position {
            background: rgba(15, 118, 110, 0.2);
            color: var(--primary-light);
        }

        .exec-desc {
            font-family: 'Inter', sans-serif;
            font-size: 0.85rem;
            color: #64748B;
            line-height: 1.6;
            flex-grow: 1;
            margin-bottom: 0.75rem;
        }

        body.dark-mode .exec-desc {
            color: #94A3B8;
        }

        .exec-socials {
            display: flex;
            gap: 0.6rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: auto;
            padding-top: 0.5rem;
        }

        .exec-socials a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(15, 118, 110, 0.06);
            color: var(--primary);
            transition: all 0.3s ease;
            font-size: 0.9rem;
            text-decoration: none;
        }

        .exec-socials a:hover {
            background: var(--primary);
            color: #FFFFFF;
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 20px -8px rgba(15, 118, 110, 0.3);
        }

        body.dark-mode .exec-socials a {
            background: rgba(15, 118, 110, 0.15);
            color: var(--primary-light);
        }

        body.dark-mode .exec-socials a:hover {
            background: var(--primary);
            color: #FFFFFF;
        }

        /* ===== HIERARCHY ===== */
        .hierarchy-container {
            position: relative;
            padding-left: 2.5rem;
        }

        .hierarchy-container::before {
            content: '';
            position: absolute;
            left: 0.75rem;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(to bottom, var(--primary), var(--secondary), var(--accent));
            border-radius: 4px;
            opacity: 0.5;
        }

        .hierarchy-item {
            position: relative;
            padding: 0.6rem 0 0.6rem 2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .hierarchy-item::before {
            content: '';
            position: absolute;
            left: -1.65rem;
            top: 50%;
            width: 1.25rem;
            height: 2px;
            background: #CBD5E1;
            transform: translateY(-50%);
        }

        body.dark-mode .hierarchy-item::before {
            background: #334155;
        }

        .hierarchy-dot {
            position: absolute;
            left: -1.9rem;
            top: 50%;
            transform: translateY(-50%);
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #FFFFFF;
            border: 3px solid var(--primary);
            z-index: 2;
            transition: all 0.3s ease;
        }

        .hierarchy-item:hover .hierarchy-dot {
            transform: translateY(-50%) scale(1.2);
            border-color: var(--accent);
            box-shadow: 0 0 0 6px rgba(15, 118, 110, 0.12);
        }

        body.dark-mode .hierarchy-dot {
            background: #1E293B;
            border-color: var(--primary-light);
        }

        body.dark-mode .hierarchy-item:hover .hierarchy-dot {
            border-color: var(--accent);
            box-shadow: 0 0 0 6px rgba(15, 118, 110, 0.2);
        }

        .hierarchy-rank {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--text-light);
            flex: 1;
        }

        body.dark-mode .hierarchy-rank {
            color: #F1F5F9;
        }

        .hierarchy-badge {
            font-family: 'Inter', sans-serif;
            font-size: 0.7rem;
            font-weight: 500;
            padding: 0.2rem 0.8rem;
            border-radius: 50px;
            background: rgba(15, 118, 110, 0.08);
            color: var(--primary);
            letter-spacing: 0.02em;
            white-space: nowrap;
            flex-shrink: 0;
        }

        body.dark-mode .hierarchy-badge {
            background: rgba(15, 118, 110, 0.18);
            color: var(--primary-light);
        }

        .hierarchy-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(15, 118, 110, 0.06);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 0.85rem;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }

        .hierarchy-item:hover .hierarchy-icon {
            background: var(--primary);
            color: #FFFFFF;
            transform: scale(1.05);
        }

        body.dark-mode .hierarchy-icon {
            background: rgba(15, 118, 110, 0.15);
            color: var(--primary-light);
        }

        body.dark-mode .hierarchy-item:hover .hierarchy-icon {
            background: var(--primary);
            color: #FFFFFF;
        }

        /* ===== GRADIENT CALLOUT ===== */
        .gradient-callout {
            background: linear-gradient(135deg, #0F766E 0%, #2563EB 100%);
            border-radius: 1.5rem;
            padding: 2.5rem 3rem;
            color: #FFFFFF;
            position: relative;
            overflow: hidden;
        }

        .gradient-callout::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -30%;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.04);
            pointer-events: none;
        }

        .gradient-callout::after {
            content: '';
            position: absolute;
            bottom: -40%;
            left: -20%;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.03);
            pointer-events: none;
        }

        .gradient-callout>* {
            position: relative;
            z-index: 1;
        }

        body.dark-mode .gradient-callout {
            background: linear-gradient(135deg, #0F766E 0%, #1E40AF 100%);
        }

        /* ===== NAVBAR ===== */
        .navbar {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            transition: all 0.3s ease;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        body.dark-mode .navbar {
            background: rgba(15, 23, 42, 0.92);
            border-bottom-color: rgba(255, 255, 255, 0.06);
        }

        .navbar.scrolled {
            box-shadow: 0 8px 30px -10px rgba(15, 23, 42, 0.08);
        }

        body.dark-mode .navbar.scrolled {
            box-shadow: 0 8px 30px -10px rgba(0, 0, 0, 0.4);
        }

        /* ===== DARK MODE TOGGLE ===== */
        .theme-toggle {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            border: 1px solid rgba(15, 118, 110, 0.15);
            background: rgba(15, 118, 110, 0.04);
            color: var(--text-light);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        .theme-toggle:hover {
            background: rgba(15, 118, 110, 0.1);
            border-color: var(--primary);
            transform: rotate(15deg);
        }

        body.dark-mode .theme-toggle {
            border-color: rgba(255, 255, 255, 0.1);
            background: rgba(255, 255, 255, 0.04);
            color: #F1F5F9;
        }

        body.dark-mode .theme-toggle:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--primary-light);
        }

        /* ===== MOBILE MENU ===== */
        .mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            z-index: 1000;
            padding: 2rem 1.5rem;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1.5rem;
        }

        .mobile-menu.open {
            display: flex;
        }

        body.dark-mode .mobile-menu {
            background: rgba(15, 23, 42, 0.97);
        }

        .mobile-menu a {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 1.2rem;
            color: var(--text-light);
            text-decoration: none;
            transition: color 0.3s ease;
            padding: 0.5rem 0;
        }

        .mobile-menu a:hover,
        .mobile-menu a.active {
            color: var(--primary);
        }

        body.dark-mode .mobile-menu a {
            color: #F1F5F9;
        }

        body.dark-mode .mobile-menu a:hover,
        body.dark-mode .mobile-menu a.active {
            color: var(--primary-light);
        }

        .mobile-close {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            font-size: 1.8rem;
            cursor: pointer;
            color: var(--text-light);
            transition: color 0.3s ease;
        }

        body.dark-mode .mobile-close {
            color: #F1F5F9;
        }

        /* ===== FOOTER ===== */
        .footer {
            background: #FFFFFF;
            border-top: 1px solid rgba(15, 23, 42, 0.05);
            transition: background 0.4s ease, border-color 0.4s ease;
        }

        body.dark-mode .footer {
            background: #0B1120;
            border-top-color: rgba(255, 255, 255, 0.04);
        }

        .footer a {
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: var(--primary);
        }

        body.dark-mode .footer a:hover {
            color: var(--primary-light);
        }

        /* ===== SCROLLBAR ===== */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #F1F5F9;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }

        body.dark-mode ::-webkit-scrollbar-track {
            background: #1E293B;
        }

        /* ===== UTILITY ===== */
        .text-primary {
            color: var(--primary);
        }
        .text-secondary {
            color: var(--secondary);
        }
        .text-accent {
            color: var(--accent);
        }
        .bg-primary {
            background-color: var(--primary);
        }
        .border-primary {
            border-color: var(--primary);
        }

        .hover\:text-primary:hover {
            color: var(--primary);
        }
        .hover\:bg-primary:hover {
            background-color: var(--primary);
        }

        .transition-smooth {
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .shadow-glow {
            box-shadow: 0 0 40px -8px rgba(15, 118, 110, 0.15);
        }

        body.dark-mode .shadow-glow {
            box-shadow: 0 0 40px -8px rgba(15, 118, 110, 0.08);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .gradient-callout {
                padding: 1.75rem 1.5rem;
            }
            .hierarchy-container {
                padding-left: 1.8rem;
            }
            .hierarchy-item {
                padding: 0.5rem 0 0.5rem 1.2rem;
                gap: 0.6rem;
                flex-wrap: wrap;
            }
            .hierarchy-item::before {
                left: -1.1rem;
                width: 0.8rem;
            }
            .hierarchy-dot {
                left: -1.3rem;
                width: 12px;
                height: 12px;
                border-width: 2px;
            }
            .hierarchy-rank {
                font-size: 0.85rem;
                min-width: 120px;
            }
            .hierarchy-badge {
                font-size: 0.6rem;
                padding: 0.1rem 0.6rem;
            }
            .exec-avatar {
                width: 80px;
                height: 80px;
                font-size: 2rem;
            }
            .exec-name {
                font-size: 0.95rem;
            }
            .exec-position {
                font-size: 0.7rem;
            }
            .exec-desc {
                font-size: 0.78rem;
            }
            .exec-socials a {
                width: 30px;
                height: 30px;
                font-size: 0.75rem;
            }
            .exec-card {
                padding: 1.25rem 1rem;
            }
        }

        @media (max-width: 480px) {
            .section-title {
                font-size: 1.5rem;
            }
            .gradient-callout {
                padding: 1.25rem 1rem;
            }
            .gradient-callout h3 {
                font-size: 1.1rem !important;
            }
            .gradient-callout p {
                font-size: 0.85rem !important;
            }
            .hierarchy-rank {
                font-size: 0.78rem;
                min-width: 100px;
            }
            .hierarchy-badge {
                font-size: 0.55rem;
            }
            .hierarchy-icon {
                width: 26px;
                height: 26px;
                font-size: 0.7rem;
            }
        }
    </style>
</head>

<body>

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

    <!-- ============================================================ -->
    <!-- ===== MAIN CONTENT ===== -->
    <!-- ============================================================ -->
    <main class="pt-8 pb-16 px-4 md:px-8 lg:px-16 max-w-7xl mx-auto">

        <!-- ========================================================== -->
        <!-- SECTION 1: ORGANIZATIONAL STRUCTURE                         -->
        <!-- ========================================================== -->
        <!-- Organizational Structure Start -->
        <section id="structure" class="mb-20" data-aos="fade-up" data-aos-duration="800">
            <div class="text-center mb-12">
                <span class="inline-block text-xs font-semibold tracking-[0.2em] uppercase text-primary bg-primary/10 px-4 py-1.5 rounded-full mb-4">
                    <i class="fas fa-sitemap mr-2"></i> Organizational Framework
                </span>
                <h2 class="section-title">
                    Structure of the <span class="highlight">National Body</span>
                </h2>
                <p class="section-subtitle mx-auto mt-3">
                    The National Body is headed by elected executives who oversee the affairs of the association at the national level. These leaders coordinate the activities of institutional chapters and local branches, ensuring that all members work together toward shared goals of education, leadership development, community service, student welfare, innovation, and youth empowerment.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <!-- Card 1 -->
                <div class="glass-card rounded-2xl p-6 text-center">
                    <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4 text-2xl text-primary">
                        <i class="fas fa-flag"></i>
                    </div>
                    <h4 class="font-poppins font-bold text-lg text-gray-800 dark:text-white mb-2">Strategic Leadership</h4>
                    <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                        Elected executives provide visionary direction, ensuring KESA remains focused on its core mission of education and youth empowerment.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="glass-card rounded-2xl p-6 text-center">
                    <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4 text-2xl text-primary">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h4 class="font-poppins font-bold text-lg text-gray-800 dark:text-white mb-2">Chapter Coordination</h4>
                    <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                        The National Body coordinates institutional chapters and local branches, fostering unity and collaboration across all regions.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="glass-card rounded-2xl p-6 text-center">
                    <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4 text-2xl text-primary">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4 class="font-poppins font-bold text-lg text-gray-800 dark:text-white mb-2">Shared Goals</h4>
                    <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                        Members work toward common objectives in education, community service, student welfare, innovation, and youth development.
                    </p>
                </div>
            </div>
        </section>
        <!-- Organizational Structure End -->


        <!-- ========================================================== -->
        <!-- SECTION 2: NATIONAL EXECUTIVE COUNCIL                       -->
        <!-- ========================================================== -->
        <!-- National Executive Council Start -->
        <section id="executive-council" class="mb-20">
            <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="800">
                <span class="inline-block text-xs font-semibold tracking-[0.2em] uppercase text-primary bg-primary/10 px-4 py-1.5 rounded-full mb-4">
                    <i class="fas fa-users mr-2"></i> Executive Leadership
                </span>
                <h2 class="section-title">
                    National <span class="highlight">Executive Council</span>
                </h2>
                <p class="section-subtitle mx-auto mt-3">
                    Meet the dedicated leaders responsible for guiding KESA's vision, programs, and national operations.
                </p>
            </div>

            <!-- Grid: 4 cols desktop, 2 tablet, 1 mobile -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Executive Card -->
                <!-- Executive Card -->
                <div class="exec-card" data-aos="fade-up" data-aos-delay="0" data-aos-duration="600">
                   <div class="exec-avatar">
                     <img src="assets/images/yusuf-nasir.jpg" alt="Sen. Yusuf Nasir">
                    </div>
                    <h4 class="exec-name">Sen. Yusuf Nasir</h4>
                    <span class="exec-position">National President</span>
                    <p class="exec-desc">Visionary leader steering KESA's national agenda and strategic growth.</p>
                    <div class="exec-socials">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Executive Card -->
                <div class="exec-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="600">
                    <div class="exec-avatar">
                   <img src="assets/images/yusuf-nasir.jpg" alt="Sen. Yusuf Nasir">
                     </div>
                    <h4 class="exec-name">Comr. Aisha Adam Yahaya</h4>
                    <span class="exec-position">Vice President Internal Affairs</span>
                    <p class="exec-desc">Oversees internal operations, member engagement, and institutional harmony.</p>
                    <div class="exec-socials">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Executive Card -->
                <div class="exec-card" data-aos="fade-up" data-aos-delay="160" data-aos-duration="600">
                    <div class="exec-avatar">
                  <img src="assets/images/yusuf-nasir.jpg" alt="Sen. Yusuf Nasir">
                 </div>
                    <h4 class="exec-name">Comr. Ismail Ibrahim Dasabo</h4>
                    <span class="exec-position">Vice President External Affairs</span>
                    <p class="exec-desc">Manages external relations, partnerships, and inter-association networking.</p>
                    <div class="exec-socials">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Executive Card -->
                <div class="exec-card" data-aos="fade-up" data-aos-delay="240" data-aos-duration="600">
                <div class="exec-avatar">
                 <img src="assets/images/yusuf-nasir.jpg" alt="Sen. Yusuf Nasir">
                </div>
                    <h4 class="exec-name">Comr. Suleiman Abubakar Umar</h4>
                    <span class="exec-position">Secretary-General</span>
                    <p class="exec-desc">Chief administrative officer ensuring smooth documentation and communication.</p>
                    <div class="exec-socials">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Executive Card -->
                <div class="exec-card" data-aos="fade-up" data-aos-delay="40" data-aos-duration="600">
                    <div class="exec-avatar">
                 <img src="assets/images/yusuf-nasir.jpg" alt="Sen. Yusuf Nasir">
                </div>
                    <h4 class="exec-name">Ahmad Kasim</h4>
                    <span class="exec-position">Assistant Secretary-General</span>
                    <p class="exec-desc">Supports the Secretary-General in administrative and record-keeping duties.</p>
                    <div class="exec-socials">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Executive Card -->
                <div class="exec-card" data-aos="fade-up" data-aos-delay="120" data-aos-duration="600">
                    <div class="exec-avatar">
                    <img src="assets/images/yusuf-nasir.jpg" alt="Sen. Yusuf Nasir">
                  </div>
                    <h4 class="exec-name">Comr. Deenislam Abdullahi</h4>
                    <span class="exec-position">Financial Secretary</span>
                    <p class="exec-desc">Manages financial records, budgeting, and fiscal accountability.</p>
                    <div class="exec-socials">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Executive Card -->
                <div class="exec-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                    <div class="exec-avatar">
                 <img src="assets/images/yusuf-nasir.jpg" alt="Sen. Yusuf Nasir">
                </div>
                    <h4 class="exec-name">Comr. Zinat Bello Ramalan</h4>
                    <span class="exec-position">Treasurer</span>
                    <p class="exec-desc">Oversees funds management, financial planning, and resource allocation.</p>
                    <div class="exec-socials">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Executive Card -->
                <div class="exec-card" data-aos="fade-up" data-aos-delay="280" data-aos-duration="600">
                    <div class="exec-avatar">
                       <img src="assets/images/yusuf-nasir.jpg" alt="Sen. Yusuf Nasir">
                       </div>
                    <h4 class="exec-name">Idris Said</h4>
                    <span class="exec-position">Public Relations Officer (PRO)</span>
                    <p class="exec-desc">Manages media relations, brand communication, and public image.</p>
                    <div class="exec-socials">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Executive Card -->
                <div class="exec-card" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600">
                    <div class="exec-avatar">
                    <img src="assets/images/yusuf-nasir.jpg" alt="Sen. Yusuf Nasir">
                  </div>
                    <h4 class="exec-name">Comr. Abdulgafar Salisu</h4>
                    <span class="exec-position">Auditor</span>
                    <p class="exec-desc">Ensures financial transparency, compliance, and internal oversight.</p>
                    <div class="exec-socials">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Executive Card -->
                <div class="exec-card" data-aos="fade-up" data-aos-delay="140" data-aos-duration="600">
                    <div class="exec-avatar">
                      <img src="assets/images/yusuf-nasir.jpg" alt="Sen. Yusuf Nasir">
                   </div>
                    <h4 class="exec-name">Comr. Aliyu Usman Danyaya</h4>
                    <span class="exec-position">Chief Librarian</span>
                    <p class="exec-desc">Oversees resource management, archives, and knowledge preservation.</p>
                    <div class="exec-socials">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Executive Card -->
                <div class="exec-card" data-aos="fade-up" data-aos-delay="220" data-aos-duration="600">
                    <div class="exec-avatar">
                   <img src="assets/images/yusuf-nasir.jpg" alt="Sen. Yusuf Nasir">
                    </div>
                    <h4 class="exec-name">Aisha Ishaq</h4>
                    <span class="exec-position">Director of Welfare</span>
                    <p class="exec-desc">Champions student welfare, support programs, and member well-being.</p>
                    <div class="exec-socials">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Executive Card -->
                <div class="exec-card" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
                    <div class="exec-avatar">
                     <img src="assets/images/yusuf-nasir.jpg" alt="Sen. Yusuf Nasir">
                   </div>
                    <h4 class="exec-name">Comr. Shakira Jimoh</h4>
                    <span class="exec-position">Director of Health</span>
                    <p class="exec-desc">Leads health initiatives, wellness campaigns, and medical outreach.</p>
                    <div class="exec-socials">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Executive Card -->
                <div class="exec-card" data-aos="fade-up" data-aos-delay="100" data-aos-duration="600">
                    <div class="exec-avatar">
                    <img src="assets/images/yusuf-nasir.jpg" alt="Sen. Yusuf Nasir">
                   </div>
                    <h4 class="exec-name">Comr. Cyril Joshua</h4>
                    <span class="exec-position">Director of Business</span>
                    <p class="exec-desc">Drives entrepreneurial initiatives, partnerships, and economic empowerment.</p>
                    <div class="exec-socials">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Executive Card -->
                <div class="exec-card" data-aos="fade-up" data-aos-delay="180" data-aos-duration="600">
                    <div class="exec-avatar">
                  <img src="assets/images/yusuf-nasir.jpg" alt="Sen. Yusuf Nasir">
                </div>
                    <h4 class="exec-name">Muhammad Bello</h4>
                    <span class="exec-position">Director of Academics</span>
                    <p class="exec-desc">Oversees academic programs, tutoring, and educational excellence.</p>
                    <div class="exec-socials">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Executive Card -->
                <div class="exec-card" data-aos="fade-up" data-aos-delay="260" data-aos-duration="600">
                    <div class="exec-avatar">
                    <img src="assets/images/yusuf-nasir.jpg" alt="Sen. Yusuf Nasir">
                    </div>
                    <h4 class="exec-name">Comr. Baba Benjamin Adaboh</h4>
                    <span class="exec-position">Director of ICT</span>
                    <p class="exec-desc">Leads technology infrastructure, digital innovation, and IT strategy.</p>
                    <div class="exec-socials">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Executive Card -->
                <div class="exec-card" data-aos="fade-up" data-aos-delay="340" data-aos-duration="600">
                    <div class="exec-avatar">
                  <img src="assets/images/yusuf-nasir.jpg" alt="Sen. Yusuf Nasir">
                  </div>
                    <h4 class="exec-name">Comr. Bilyamin Babaye</h4>
                    <span class="exec-position">Provost Marshall</span>
                    <p class="exec-desc">Ensures order, discipline, and security across all KESA activities.</p>
                    <div class="exec-socials">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

            </div>
            <!-- /grid -->
        </section>
        <!-- National Executive Council End -->


        <!-- ========================================================== -->
        <!-- SECTION 3: ORGANIZATIONAL HIERARCHY                         -->
        <!-- ========================================================== -->
        <!-- Leadership Hierarchy Start -->
        <section id="hierarchy" class="mb-20">
            <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="800">
                <span class="inline-block text-xs font-semibold tracking-[0.2em] uppercase text-primary bg-primary/10 px-4 py-1.5 rounded-full mb-4">
                    <i class="fas fa-diagram-project mr-2"></i> Chain of Command
                </span>
                <h2 class="section-title">
                    KESA <span class="highlight">Leadership Structure</span>
                </h2>
                <p class="section-subtitle mx-auto mt-3">
                    The organizational hierarchy ensures clear roles, accountability, and effective coordination across all levels of the association.
                </p>
            </div>

            <div class="max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <div class="glass-card rounded-2xl p-6 md:p-8">

                    <!-- Hierarchy Container -->
                    <div class="hierarchy-container">

                        <!-- Item -->
                        <div class="hierarchy-item">
                            <span class="hierarchy-dot"></span>
                            <span class="hierarchy-icon"><i class="fas fa-crown"></i></span>
                            <span class="hierarchy-rank">National President</span>
                            <span class="hierarchy-badge">Sen. Yusuf Nasir</span>
                        </div>

                        <!-- Item -->
                        <div class="hierarchy-item">
                            <span class="hierarchy-dot"></span>
                            <span class="hierarchy-icon"><i class="fas fa-user-tie"></i></span>
                            <span class="hierarchy-rank">Vice President Internal Affairs</span>
                            <span class="hierarchy-badge">Comr. Aisha Adam Yahaya</span>
                        </div>

                        <!-- Item -->
                        <div class="hierarchy-item">
                            <span class="hierarchy-dot"></span>
                            <span class="hierarchy-icon"><i class="fas fa-user-tie"></i></span>
                            <span class="hierarchy-rank">Vice President External Affairs</span>
                            <span class="hierarchy-badge">Comr. Ismail Ibrahim Dasabo</span>
                        </div>

                        <!-- Item -->
                        <div class="hierarchy-item">
                            <span class="hierarchy-dot"></span>
                            <span class="hierarchy-icon"><i class="fas fa-file-signature"></i></span>
                            <span class="hierarchy-rank">Secretary-General</span>
                            <span class="hierarchy-badge">Comr. Suleiman Abubakar Umar</span>
                        </div>

                        <!-- Item -->
                        <div class="hierarchy-item">
                            <span class="hierarchy-dot"></span>
                            <span class="hierarchy-icon"><i class="fas fa-file-alt"></i></span>
                            <span class="hierarchy-rank">Assistant Secretary-General</span>
                            <span class="hierarchy-badge">Ahmad Kasim</span>
                        </div>

                        <!-- Item -->
                        <div class="hierarchy-item">
                            <span class="hierarchy-dot"></span>
                            <span class="hierarchy-icon"><i class="fas fa-coins"></i></span>
                            <span class="hierarchy-rank">Financial Secretary</span>
                            <span class="hierarchy-badge">Comr. Deenislam Abdullahi</span>
                        </div>

                        <!-- Item -->
                        <div class="hierarchy-item">
                            <span class="hierarchy-dot"></span>
                            <span class="hierarchy-icon"><i class="fas fa-wallet"></i></span>
                            <span class="hierarchy-rank">Treasurer</span>
                            <span class="hierarchy-badge">Comr. Zinat Bello Ramalan</span>
                        </div>

                        <!-- Item -->
                        <div class="hierarchy-item">
                            <span class="hierarchy-dot"></span>
                            <span class="hierarchy-icon"><i class="fas fa-check-double"></i></span>
                            <span class="hierarchy-rank">Auditor</span>
                            <span class="hierarchy-badge">Comr. Abdulgafar Salisu</span>
                        </div>

                        <!-- Item -->
                        <div class="hierarchy-item">
                            <span class="hierarchy-dot"></span>
                            <span class="hierarchy-icon"><i class="fas fa-bullhorn"></i></span>
                            <span class="hierarchy-rank">Public Relations Officer</span>
                            <span class="hierarchy-badge">Idris Said</span>
                        </div>

                        <!-- Item -->
                        <div class="hierarchy-item">
                            <span class="hierarchy-dot"></span>
                            <span class="hierarchy-icon"><i class="fas fa-book"></i></span>
                            <span class="hierarchy-rank">Chief Librarian</span>
                            <span class="hierarchy-badge">Comr. Aliyu Usman Danyaya</span>
                        </div>

                        <!-- Item -->
                        <div class="hierarchy-item">
                            <span class="hierarchy-dot"></span>
                            <span class="hierarchy-icon"><i class="fas fa-hands-helping"></i></span>
                            <span class="hierarchy-rank">Director of Welfare</span>
                            <span class="hierarchy-badge">Aisha Ishaq</span>
                        </div>

                        <!-- Item -->
                        <div class="hierarchy-item">
                            <span class="hierarchy-dot"></span>
                            <span class="hierarchy-icon"><i class="fas fa-heartbeat"></i></span>
                            <span class="hierarchy-rank">Director of Health</span>
                            <span class="hierarchy-badge">Comr. Shakira Jimoh</span>
                        </div>

                        <!-- Item -->
                        <div class="hierarchy-item">
                            <span class="hierarchy-dot"></span>
                            <span class="hierarchy-icon"><i class="fas fa-chart-line"></i></span>
                            <span class="hierarchy-rank">Director of Business</span>
                            <span class="hierarchy-badge">Comr. Cyril Joshua</span>
                        </div>

                        <!-- Item -->
                        <div class="hierarchy-item">
                            <span class="hierarchy-dot"></span>
                            <span class="hierarchy-icon"><i class="fas fa-graduation-cap"></i></span>
                            <span class="hierarchy-rank">Director of Academics</span>
                            <span class="hierarchy-badge">Muhammad Bello</span>
                        </div>

                        <!-- Item -->
                        <div class="hierarchy-item">
                            <span class="hierarchy-dot"></span>
                            <span class="hierarchy-icon"><i class="fas fa-laptop-code"></i></span>
                            <span class="hierarchy-rank">Director of ICT</span>
                            <span class="hierarchy-badge">Comr. Baba Benjamin Adaboh</span>
                        </div>

                        <!-- Item -->
                        <div class="hierarchy-item">
                            <span class="hierarchy-dot"></span>
                            <span class="hierarchy-icon"><i class="fas fa-shield-alt"></i></span>
                            <span class="hierarchy-rank">Provost Marshall</span>
                            <span class="hierarchy-badge">Comr. Bilyamin Babaye</span>
                        </div>

                    </div>
                    <!-- /hierarchy-container -->

                </div>
                <!-- /glass-card -->
            </div>
        </section>
        <!-- Leadership Hierarchy End -->


        <!-- ========================================================== -->
        <!-- SECTION 4: ROLE OF THE NATIONAL BODY                        -->
        <!-- ========================================================== -->
        <!-- Role of National Body Start -->
        <section id="role" class="mb-0" data-aos="fade-up" data-aos-duration="800">
            <div class="gradient-callout shadow-2xl">
                <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 md:w-20 md:h-20 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center text-3xl md:text-4xl text-white">
                            <i class="fas fa-flag-checkered"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-poppins font-bold text-2xl md:text-3xl text-white mb-2">
                            Role of the National Body
                        </h3>
                        <p class="text-white/90 text-base md:text-lg leading-relaxed max-w-3xl">
                            The National Body coordinates the activities of institutional chapters and local branches, ensuring that all members work toward common goals. Through strategic leadership and collaboration, the National Executive Council promotes education, student welfare, leadership development, community service, innovation, and youth empowerment across all KESA chapters.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Role of National Body End -->

    </main>


    <!-- ============================================================ -->
    <!-- ===== FOOTER ===== -->
    <!-- ============================================================ -->
    <footer class="footer w-full py-10 px-4 md:px-8 lg:px-16">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                <!-- Brand -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-9 h-9 rounded-xl bg-primary flex items-center justify-center text-white font-poppins font-bold text-xs shadow-md">
                            K
                        </div>
                        <span class="font-poppins font-bold text-lg text-gray-800 dark:text-white">
                            KESA
                            <span class="font-normal text-sm text-primary dark:text-primary-light">Leadership</span>
                        </span>
                    </div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed max-w-xs">
                        Keffi Students Association — empowering students through leadership, education, and community service.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h5 class="font-poppins font-semibold text-gray-800 dark:text-white text-sm mb-3">Quick Links</h5>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-primary-light transition-colors">Home</a></li>
                        <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-primary-light transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-primary-light transition-colors">Leadership</a></li>
                        <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-primary-light transition-colors">Chapters</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div>
                    <h5 class="font-poppins font-semibold text-gray-800 dark:text-white text-sm mb-3">Resources</h5>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-primary-light transition-colors">Constitution</a></li>
                        <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-primary-light transition-colors">Events</a></li>
                        <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-primary-light transition-colors">Gallery</a></li>
                        <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-primary-light transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Social -->
                <div>
                    <h5 class="font-poppins font-semibold text-gray-800 dark:text-white text-sm mb-3">Connect</h5>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-primary hover:text-white dark:hover:bg-primary transition-all duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-primary hover:text-white dark:hover:bg-primary transition-all duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-primary hover:text-white dark:hover:bg-primary transition-all duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:bg-primary hover:text-white dark:hover:bg-primary transition-all duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <p class="text-xs text-gray-400 dark:text-gray-500 mt-4">
                        &copy; 2026 KESA. All rights reserved. Designed by <a href="https://qafamstech.com.ng" target="_blank" rel="noopener noreferrer" class="text-[#0f766e] hover:underline">Qafam Software Technology</a>.
                    </p>
                </div>

            </div>
            <!-- /grid -->

            <div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-800 text-center text-xs text-gray-400 dark:text-gray-500">
                Built with <i class="fas fa-heart text-red-500 mx-1"></i> by Qafam Software Technology. For inquiries, contact us at <a href="mailto:info@qafamstech.com.ng" class="text-[#0f766e] hover:underline">info@qafamstech.com.ng</a>
            </div>
        </div>
    </footer>


    <!-- ============================================================ -->
    <!-- ===== SCRIPTS ===== -->
    <!-- ============================================================ -->

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
    </script>

    <!-- Swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
    </script>

    <script>
        // =============================================================
        // 1. AOS INIT
        // =============================================================
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 60,
            delay: 0,
        });

        // =============================================================
        // 2. DARK MODE
        // =============================================================
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');

        // Check saved preference
        let isDark = localStorage.getItem('kesa-theme') === 'dark';

        function applyTheme(dark) {
            if (dark) {
                document.body.classList.add('dark-mode');
                themeIcon.className = 'fas fa-sun';
                localStorage.setItem('kesa-theme', 'dark');
            } else {
                document.body.classList.remove('dark-mode');
                themeIcon.className = 'fas fa-moon';
                localStorage.setItem('kesa-theme', 'light');
            }
            isDark = dark;
        }

        // Apply saved or system preference
        if (localStorage.getItem('kesa-theme') === null) {
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            applyTheme(prefersDark);
        } else {
            applyTheme(isDark);
        }

        themeToggle.addEventListener('click', () => {
            applyTheme(!isDark);
        });

        // =============================================================
        // 3. NAVBAR SCROLL SHADOW
        // =============================================================
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // =============================================================
        // 4. MOBILE MENU
        // =============================================================
        const menuToggle = document.getElementById('menuToggle');
        const menuClose = document.getElementById('menuClose');
        const mobileMenu = document.getElementById('mobileMenu');

        function openMenu() {
            mobileMenu.classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            mobileMenu.classList.remove('open');
            document.body.style.overflow = '';
        }

        menuToggle.addEventListener('click', openMenu);
        menuClose.addEventListener('click', closeMenu);

        // Close on link click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // Close on Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
                closeMenu();
            }
        });

        // =============================================================
        // 5. SMOOTH SCROLL FOR INTERNAL LINKS (if any)
        // =============================================================
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                const target = document.querySelector(targetId);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        console.log('✅ KESA Leadership Page enhanced with National Executive Council & Organizational Structure.');
    </script>

</body>
</html>