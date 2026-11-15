<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery - KESA</title>
    <meta name="description" content="Explore the photo gallery of the Keffi Students Association. View images from events, leadership activities, community projects, and more." />
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🎓</text></svg>" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <style>
        /* ── Base ── */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; background: #ffffff; color: #0f172a; overflow-x: hidden; }
        h1,h2,h3,h4,h5,h6 { font-family: 'Poppins', sans-serif; }

        /* ── Scrollbar ── */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #0f766e; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #0d6b63; }

        /* ── Scroll Progress ── */
        #scroll-progress { position: fixed; top: 0; left: 0; height: 4px; background: linear-gradient(90deg, #0f766e, #2563eb, #f59e0b); z-index: 9999; width: 0%; transition: width 0.1s; }

        /* ── Navbar ── */
        .navbar { transition: all 0.3s ease; background: rgba(255,255,255,0.92); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border-bottom: 1px solid rgba(15,23,42,0.06); }
        .navbar-scrolled { box-shadow: 0 8px 32px rgba(0,0,0,0.08); }
        .nav-link { position: relative; font-weight: 500; font-size: 0.875rem; color: #334155; transition: color 0.2s; padding: 0.5rem 0; }
        .nav-link::after { content: ''; position: absolute; bottom: 0; left: 0; width: 0; height: 2.5px; background: linear-gradient(90deg, #0f766e, #2563eb); transition: width 0.3s ease; border-radius: 4px; }
        .nav-link:hover::after, .nav-link.active::after { width: 100%; }
        .nav-link:hover { color: #0f172a; }
        .nav-link.active { color: #0f172a; font-weight: 600; }

        /* ── Mobile Menu ── */
        #mobile-menu { transition: all 0.4s cubic-bezier(0.4,0,0.2,1); transform: translateX(100%); opacity: 0; visibility: hidden; }
        #mobile-menu.open { transform: translateX(0); opacity: 1; visibility: visible; }
        #mobile-menu .nav-link { font-size: 1rem; padding: 0.75rem 0; border-bottom: 1px solid rgba(15,23,42,0.06); }

        /* ── Buttons ── */
        .btn-primary { background: linear-gradient(135deg, #0f766e, #2563eb); color: #fff; padding: 0.75rem 2rem; border-radius: 9999px; font-weight: 600; font-size: 0.875rem; transition: all 0.3s ease; box-shadow: 0 4px 16px rgba(15,118,110,0.3); display: inline-flex; align-items: center; gap: 0.5rem; border: none; cursor: pointer; }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 28px rgba(15,118,110,0.4); }
        .btn-secondary { background: transparent; color: #0f172a; padding: 0.75rem 2rem; border-radius: 9999px; font-weight: 600; font-size: 0.875rem; border: 2px solid #e2e8f0; transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 0.5rem; cursor: pointer; }
        .btn-secondary:hover { border-color: #0f766e; color: #0f766e; transform: translateY(-2px); }
        .btn-accent { background: linear-gradient(135deg, #f59e0b, #d97706); color: #fff; padding: 0.75rem 2rem; border-radius: 9999px; font-weight: 600; font-size: 0.875rem; transition: all 0.3s ease; box-shadow: 0 4px 16px rgba(245,158,11,0.3); display: inline-flex; align-items: center; gap: 0.5rem; border: none; cursor: pointer; }
        .btn-accent:hover { transform: translateY(-2px); box-shadow: 0 8px 28px rgba(245,158,11,0.4); }

        /* ── Glassmorphism ── */
        .glass { background: rgba(255,255,255,0.7); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.25); }
        .glass-dark { background: rgba(15,23,42,0.6); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.08); }
        .card-hover { transition: all 0.4s cubic-bezier(0.4,0,0.2,1); }
        .card-hover:hover { transform: translateY(-8px); box-shadow: 0 20px 60px rgba(0,0,0,0.08); }

        /* ── Section Background ── */
        .section-bg { background: #f8fafc; }
        html.dark .section-bg { background: #1e293b; }
        .text-gradient { background: linear-gradient(135deg, #0f766e, #2563eb); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }

        /* ── Announcement Bar ── */
        #announcement-bar { background: linear-gradient(135deg, #0f766e, #2563eb); color: #fff; padding: 0.5rem 1rem; font-size: 0.875rem; font-weight: 500; display: flex; align-items: center; justify-content: center; gap: 1rem; flex-wrap: wrap; position: relative; z-index: 50; }
        #announcement-bar .close-btn { background: rgba(255,255,255,0.2); border: none; color: #fff; width: 28px; height: 28px; border-radius: 50%; cursor: pointer; font-size: 0.75rem; transition: background 0.2s; display: flex; align-items: center; justify-content: center; }
        #announcement-bar .close-btn:hover { background: rgba(255,255,255,0.3); }

        /* ── Floating Buttons ── */
        #whatsapp-float { position: fixed; bottom: 28px; right: 28px; z-index: 999; background: #25d366; color: #fff; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; box-shadow: 0 8px 32px rgba(37,211,102,0.4); transition: all 0.3s ease; text-decoration: none; border: none; cursor: pointer; }
        #whatsapp-float:hover { transform: scale(1.1); box-shadow: 0 12px 48px rgba(37,211,102,0.5); }
        #back-to-top { position: fixed; bottom: 100px; right: 28px; z-index: 998; background: #0f172a; color: #fff; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px; box-shadow: 0 4px 20px rgba(0,0,0,0.15); transition: all 0.3s ease; border: none; cursor: pointer; opacity: 0; visibility: hidden; transform: translateY(20px); }
        #back-to-top.visible { opacity: 1; visibility: visible; transform: translateY(0); }
        #back-to-top:hover { background: #0f766e; transform: translateY(-4px); }

        /* ── Dark Mode Toggle ── */
        #dark-toggle { background: none; border: none; font-size: 1.25rem; color: #334155; cursor: pointer; transition: color 0.2s; padding: 0.25rem 0.5rem; }
        #dark-toggle:hover { color: #0f172a; }

        /* ── Dark Mode ── */
        html.dark body { background: #0f172a; color: #f1f5f9; }
        html.dark .navbar { background: rgba(15,23,42,0.92); border-bottom-color: rgba(255,255,255,0.06); }
        html.dark .nav-link { color: #94a3b8; }
        html.dark .nav-link:hover, html.dark .nav-link.active { color: #f1f5f9; }
        html.dark .glass { background: rgba(30,41,59,0.7); border-color: rgba(255,255,255,0.06); }
        html.dark .btn-secondary { color: #f1f5f9; border-color: #334155; }
        html.dark .btn-secondary:hover { border-color: #0f766e; color: #0f766e; }
        html.dark #dark-toggle { color: #94a3b8; }
        html.dark #dark-toggle:hover { color: #f1f5f9; }
        html.dark .card-hover:hover { box-shadow: 0 20px 60px rgba(0,0,0,0.3); }
        html.dark #mobile-menu { background: #0f172a; }
        html.dark #mobile-menu .nav-link { border-bottom-color: rgba(255,255,255,0.06); }

        /* ── Search Modal ── */
        #search-modal { position: fixed; inset: 0; z-index: 9999; background: rgba(0,0,0,0.6); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); display: flex; align-items: center; justify-content: center; opacity: 0; visibility: hidden; transition: all 0.3s ease; }
        #search-modal.open { opacity: 1; visibility: visible; }
        #search-modal .modal-content { background: #fff; border-radius: 2rem; padding: 2rem; max-width: 600px; width: 90%; transform: scale(0.9); transition: transform 0.3s ease; }
        #search-modal.open .modal-content { transform: scale(1); }
        html.dark #search-modal .modal-content { background: #1e293b; }
        #search-modal input { width: 100%; padding: 1rem 1.5rem; border-radius: 9999px; border: 2px solid #e2e8f0; font-size: 1rem; outline: none; transition: border-color 0.2s; background: transparent; }
        #search-modal input:focus { border-color: #0f766e; }
        html.dark #search-modal input { border-color: #334155; color: #f1f5f9; }
        html.dark #search-modal input::placeholder { color: #64748b; }

        /* ── Form ── */
        .form-input { width: 100%; padding: 0.75rem 1rem; border-radius: 0.75rem; border: 2px solid #e2e8f0; font-size: 0.875rem; transition: border-color 0.2s; outline: none; background: #fff; }
        .form-input:focus { border-color: #0f766e; box-shadow: 0 0 0 4px rgba(15,118,110,0.1); }
        html.dark .form-input { background: #1e293b; border-color: #334155; color: #f1f5f9; }
        .form-label { font-weight: 600; font-size: 0.875rem; color: #0f172a; margin-bottom: 0.25rem; display: block; }
        html.dark .form-label { color: #f1f5f9; }
        .form-error { color: #ef4444; font-size: 0.75rem; margin-top: 0.25rem; display: none; }
        .form-input.error { border-color: #ef4444; }
        .form-input.error+.form-error { display: block; }

        /* ── Toast ── */
        #toast { position: fixed; bottom: 100px; left: 50%; transform: translateX(-50%) translateY(20px); background: #0f766e; color: #fff; padding: 0.75rem 2rem; border-radius: 9999px; font-weight: 600; font-size: 0.875rem; box-shadow: 0 8px 32px rgba(15,118,110,0.3); z-index: 9999; opacity: 0; visibility: hidden; transition: all 0.4s ease; }
        #toast.show { opacity: 1; visibility: visible; transform: translateX(-50%) translateY(0); }
        #toast.error { background: #ef4444; box-shadow: 0 8px 32px rgba(239,68,68,0.3); }
        #toast.success { background: #22c55e; box-shadow: 0 8px 32px rgba(34,197,94,0.3); }

        /* ── Masonry Gallery ── */
        .masonry-grid {
            column-count: 1;
            column-gap: 1.25rem;
        }
        @media (min-width: 640px) {
            .masonry-grid { column-count: 2; }
        }
        @media (min-width: 1024px) {
            .masonry-grid { column-count: 3; }
        }
        .masonry-item {
            break-inside: avoid;
            margin-bottom: 1.25rem;
            position: relative;
            overflow: hidden;
            border-radius: 1.25rem;
            transition: all 0.4s cubic-bezier(0.4,0,0.2,1);
            cursor: pointer;
        }
        .masonry-item img {
            width: 100%;
            display: block;
            transition: transform 0.6s cubic-bezier(0.4,0,0.2,1);
        }
        .masonry-item:hover img {
            transform: scale(1.05);
        }
        .masonry-item .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(15,23,42,0.7) 0%, transparent 60%);
            opacity: 0;
            transition: opacity 0.4s ease;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 1.5rem;
        }
        .masonry-item:hover .overlay {
            opacity: 1;
        }
        .masonry-item .overlay .category-badge {
            font-size: 0.6rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(4px);
            color: #fff;
            display: inline-block;
            width: fit-content;
            margin-bottom: 0.5rem;
        }
        .masonry-item .overlay .title {
            color: #fff;
            font-weight: 600;
            font-size: 0.9rem;
            line-height: 1.3;
            font-family: 'Poppins', sans-serif;
        }
        .masonry-item .overlay .expand-icon {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(4px);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            opacity: 0;
            transform: scale(0.8);
        }
        .masonry-item:hover .overlay .expand-icon {
            opacity: 1;
            transform: scale(1);
        }

        /* ── Filter Buttons ── */
        .filter-btn { padding: 0.5rem 1.25rem; border-radius: 9999px; font-weight: 500; font-size: 0.8rem; transition: all 0.3s ease; border: 2px solid #e2e8f0; background: transparent; color: #64748b; cursor: pointer; }
        .filter-btn:hover { border-color: #0f766e; color: #0f766e; }
        .filter-btn.active { background: #0f766e; color: #fff; border-color: #0f766e; }
        html.dark .filter-btn { border-color: #334155; color: #94a3b8; }
        html.dark .filter-btn.active { background: #0f766e; color: #fff; border-color: #0f766e; }

        /* ── Lightbox ── */
        #lightbox {
            position: fixed;
            inset: 0;
            z-index: 10000;
            background: rgba(0,0,0,0.92);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s cubic-bezier(0.4,0,0.2,1);
            padding: 2rem;
        }
        #lightbox.open {
            opacity: 1;
            visibility: visible;
        }
        #lightbox .lightbox-content {
            max-width: 90vw;
            max-height: 85vh;
            position: relative;
            transform: scale(0.9) translateY(20px);
            transition: transform 0.4s cubic-bezier(0.4,0,0.2,1);
        }
        #lightbox.open .lightbox-content {
            transform: scale(1) translateY(0);
        }
        #lightbox .lightbox-content img {
            max-width: 100%;
            max-height: 85vh;
            border-radius: 1.25rem;
            box-shadow: 0 30px 80px rgba(0,0,0,0.5);
            object-fit: contain;
        }
        #lightbox .lightbox-close {
            position: fixed;
            top: 1.5rem;
            right: 1.5rem;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,0.1);
            color: #fff;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10001;
        }
        #lightbox .lightbox-close:hover {
            background: rgba(255,255,255,0.2);
            transform: rotate(90deg);
        }
        #lightbox .lightbox-nav {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,0.1);
            color: #fff;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.125rem;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10001;
        }
        #lightbox .lightbox-nav:hover {
            background: rgba(255,255,255,0.2);
        }
        #lightbox .lightbox-nav.prev { left: 1.5rem; }
        #lightbox .lightbox-nav.next { right: 1.5rem; }
        #lightbox .lightbox-caption {
            position: fixed;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            color: #fff;
            text-align: center;
            font-size: 0.9rem;
            max-width: 80%;
            background: rgba(0,0,0,0.4);
            backdrop-filter: blur(8px);
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            border: 1px solid rgba(255,255,255,0.1);
            z-index: 10001;
        }
        #lightbox .lightbox-counter {
            position: fixed;
            top: 1.5rem;
            left: 1.5rem;
            color: #fff;
            font-size: 0.8rem;
            background: rgba(0,0,0,0.4);
            backdrop-filter: blur(8px);
            padding: 0.4rem 1rem;
            border-radius: 9999px;
            border: 1px solid rgba(255,255,255,0.1);
            z-index: 10001;
        }

        /* ── Responsive ── */
        @media (max-width: 640px) {
            #whatsapp-float { width: 52px; height: 52px; font-size: 24px; bottom: 20px; right: 20px; }
            #back-to-top { width: 42px; height: 42px; font-size: 16px; bottom: 80px; right: 20px; }
            #lightbox .lightbox-nav { width: 40px; height: 40px; font-size: 0.875rem; }
            #lightbox .lightbox-nav.prev { left: 0.75rem; }
            #lightbox .lightbox-nav.next { right: 0.75rem; }
            #lightbox .lightbox-close { width: 40px; height: 40px; font-size: 1rem; top: 1rem; right: 1rem; }
            #lightbox .lightbox-counter { top: 1rem; left: 1rem; font-size: 0.7rem; padding: 0.3rem 0.8rem; }
            #lightbox .lightbox-caption { font-size: 0.75rem; padding: 0.5rem 1rem; bottom: 1rem; }
            .masonry-item .overlay .title { font-size: 0.8rem; }
        }
    </style>
</head>
<body>

    <!-- ===== SCROLL PROGRESS ===== -->
    <div id="scroll-progress"></div>

    <!-- ===== ANNOUNCEMENT BAR ===== -->
    <div id="announcement-bar" role="alert">
        <span>📢 <strong>Scholarship Opportunities</strong> — Apply now for the 2026 KESA Education Grant &bull; <strong>Membership Registration</strong> is open &bull; <strong>Leadership Summit</strong> coming soon</span>
        <button class="close-btn" id="close-announcement" aria-label="Close announcement">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar fixed top-0 left-0 w-full z-50" id="navbar" role="navigation" aria-label="Main navigation">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <a href="index.php" class="flex items-center gap-3 shrink-0" aria-label="KESA Home">
                    <div class="w-12 h-12 flex items-center justify-center">
                        <img src="img/KSA logo.jpeg" alt="KESA Logo" class="w-full h-full object-contain">
                    </div>
                </a>
                <ul class="hidden lg:flex items-center gap-1 xl:gap-2" id="desktop-menu">
                    <li><a href="index.php" class="nav-link">Home</a></li>
                    <li><a href="about.php" class="nav-link">About</a></li>
                    <li><a href="leadership.php" class="nav-link">Leadership</a></li>
                    <li><a href="membership.php" class="nav-link">Membership</a></li>
                    <li><a href="events.php" class="nav-link">Events</a></li>
                    <li><a href="scholarships.php" class="nav-link">Scholarships</a></li>
                    <li><a href="news.php" class="nav-link">News</a></li>
                    <li><a href="gallery.php" class="nav-link active">Gallery</a></li>
                    <li><a href="projects.php" class="nav-link">Projects</a></li>
                    <li><a href="alumni.php" class="nav-link">Alumni</a></li>
                    <li><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
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
    <div id="mobile-menu" class="fixed inset-0 z-40 bg-white dark:bg-[#0f172a] pt-20 px-6 overflow-y-auto lg:hidden" role="dialog" aria-modal="true" aria-label="Mobile navigation">
        <div class="flex flex-col gap-1 pb-8">
            <a href="index.php" class="nav-link text-lg">Home</a>
            <a href="about.php" class="nav-link text-lg">About</a>
            <a href="leadership.php" class="nav-link text-lg">Leadership</a>
            <a href="membership.php" class="nav-link text-lg">Membership</a>
            <a href="events.php" class="nav-link text-lg">Events</a>
            <a href="scholarships.php" class="nav-link text-lg">Scholarships</a>
            <a href="news.php" class="nav-link text-lg">News</a>
            <a href="gallery.php" class="nav-link active text-lg">Gallery</a>
            <a href="projects.php" class="nav-link text-lg">Projects</a>
            <a href="alumni.php" class="nav-link text-lg">Alumni</a>
            <a href="contact.php" class="nav-link text-lg">Contact</a>
            <div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-800">
                <a href="membership.php" class="btn-primary w-full justify-center text-center">
                    <i class="fas fa-user-plus"></i> Join KESA
                </a>
            </div>
        </div>
    </div>

    <!-- ===== SEARCH MODAL ===== -->
    <div id="search-modal" role="dialog" aria-modal="true" aria-label="Search">
        <div class="modal-content">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-poppins font-bold text-xl text-[#0f172a] dark:text-white">Search</h3>
                <button id="search-close" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" aria-label="Close search">
                    <i class="fas fa-times text-[#334155] dark:text-[#94a3b8] text-xl"></i>
                </button>
            </div>
            <form id="search-form" onsubmit="return false;">
                <input type="text" placeholder="Search gallery images..." aria-label="Search query" />
                <div class="mt-4 flex justify-end">
                    <button type="submit" class="btn-primary text-sm px-6 py-2.5">
                        <i class="fas fa-search"></i> Search
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- ===== LIGHTBOX ===== -->
    <div id="lightbox" role="dialog" aria-modal="true" aria-label="Image lightbox">
        <button class="lightbox-close" aria-label="Close lightbox"><i class="fas fa-times"></i></button>
        <button class="lightbox-nav prev" aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>
        <button class="lightbox-nav next" aria-label="Next image"><i class="fas fa-chevron-right"></i></button>
        <div class="lightbox-counter" id="lightbox-counter">1 / 1</div>
        <div class="lightbox-content">
            <img id="lightbox-image" src="" alt="Gallery image" />
        </div>
        <div class="lightbox-caption" id="lightbox-caption">Image title</div>
    </div>

    <!-- ===== MAIN CONTENT ===== -->
    <main>

        <!-- ===== PAGE HERO ===== -->
        <section class="pt-32 pb-16 section-bg relative overflow-hidden">
            <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%230f172a\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <div class="inline-flex items-center gap-2 bg-white/70 dark:bg-[#1e293b]/70 backdrop-blur-sm px-5 py-2 rounded-full text-sm font-medium text-[#0f766e] dark:text-[#0f766e] border border-[#0f766e]/10 mb-4 shadow-sm">
                    <i class="fas fa-images text-sm"></i>
                    <span>Moments Captured</span>
                </div>
                <h1 class="font-poppins font-bold text-4xl sm:text-5xl lg:text-6xl text-[#0f172a] dark:text-white mt-2">
                    <span class="text-gradient">Gallery</span>
                </h1>
                <p class="text-[#475569] dark:text-[#94a3b8] mt-4 max-w-2xl mx-auto leading-relaxed text-lg">
                    Explore our collection of photos capturing the vibrant spirit, events, and achievements of the KESA community.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4 mt-6 text-sm text-[#64748b] dark:text-[#94a3b8]">
                    <span class="flex items-center gap-1.5"><i class="fas fa-images text-[#0f766e]"></i> 24 Photos</span>
                    <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                    <span class="flex items-center gap-1.5"><i class="fas fa-tags text-[#0f766e]"></i> 5 Categories</span>
                    <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                    <span class="flex items-center gap-1.5"><i class="fas fa-arrow-right text-[#0f766e]"></i> Click to enlarge</span>
                </div>
            </div>
        </section>

        <!-- ===== FILTERS ===== -->
        <section class="py-6 border-b border-[#e2e8f0] dark:border-[#334155] bg-white/50 dark:bg-[#0f172a]/50 backdrop-blur-sm sticky top-16 lg:top-20 z-30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-center gap-2">
                    <button class="filter-btn active" data-filter="all">All Photos</button>
                    <button class="filter-btn" data-filter="events">🎉 Events</button>
                    <button class="filter-btn" data-filter="leadership">⭐ Leadership</button>
                    <button class="filter-btn" data-filter="projects">🛠️ Projects</button>
                    <button class="filter-btn" data-filter="awards">🏆 Awards</button>
                    <button class="filter-btn" data-filter="community">🤝 Community</button>
                </div>
            </div>
        </section>

        <!-- ===== GALLERY MASONRY ===== -->
        <section class="py-12 lg:py-16 section-bg" data-aos="fade-up">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="masonry-grid" id="gallery-grid">

                    <!-- Item 1: Events - Leadership Summit -->
                    <div class="masonry-item" data-category="events" data-title="Annual Leadership Summit 2026" data-index="0">
                        <img src="./img/gallery.jpeg" alt="Annual Leadership Summit 2026" loading="lazy" />
                        <div class="overlay">
                            <span class="category-badge">⭐ Visiting</span>
                            <span class="title">National President of KESA during a courtesy visit to Commanding officer of 177 Battalion Guard, 
                                                Shittu Alao Barrack, Keffi.</span>
                            <span class="expand-icon"><i class="fas fa-expand"></i></span>
                        </div>
                    </div>

                    <!-- Item 2: Leadership - President Speaking -->
                    <div class="masonry-item" data-category="leadership" data-title="President Dr. Amina Yusuf Speaking" data-index="1">
                        <img src="./img/gallery2.jpeg" alt="President Dr. Amina Yusuf Speaking" loading="lazy" />
                        <div class="overlay">
                            <span class="category-badge">⭐ Visiting</span>
                            <span class="title">KESA delegation comprising of the President, Financial Secretary- Amb. Deenislam Abdullahi, Director of Health- Comr. 
                                               Shakira Ibrahim Jimoh payed a courtesy visit to the Commanding officer of 177 battalion guard, Shittu Alao Barrack, Keffi.</span>
                            <span class="expand-icon"><i class="fas fa-expand"></i></span>
                        </div>
                    </div>

                    <!-- Item 3: Community - Cleanup Drive -->
                    <div class="masonry-item" data-category="community" data-title="Community Cleanup Drive 2026" data-index="2">
                        <img src="./img/gallery4.jpeg" alt="Community Cleanup Drive 2026" loading="lazy" />
                        <div class="overlay">
                            <span class="category-badge">🛠️ Training</span>
                            <span class="title">KESA Train 100 members on technical data driven digital skill.</span>
                            <span class="expand-icon"><i class="fas fa-expand"></i></span>
                        </div>
                    </div>

                    <!-- Item 4: Projects - Educational Support -->
                    <!-- <div class="masonry-item" data-category="projects" data-title="Educational Support Program" data-index="3">
                        <img src="./img/" alt="Educational Support Program" loading="lazy" />
                        <div class="overlay">
                            <span class="category-badge">🛠️ Projects</span>
                            <span class="title">Educational Support Program</span>
                            <span class="expand-icon"><i class="fas fa-expand"></i></span>
                        </div>
                    </div> -->

                    <!-- Item 5: Awards - Scholarship Ceremony -->
                    <!-- <div class="masonry-item" data-category="awards" data-title="Scholarship Award Ceremony" data-index="4">
                        <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=600&q=80" alt="Scholarship Award Ceremony" loading="lazy" />
                        <div class="overlay">
                            <span class="category-badge">🏆 Awards</span>
                            <span class="title">Scholarship Award Ceremony</span>
                            <span class="expand-icon"><i class="fas fa-expand"></i></span>
                        </div>
                    </div> -->

                    <!-- Item 6: Events - Global Scholarship Fair -->
                    <!-- <div class="masonry-item" data-category="events" data-title="Global Scholarship Fair 2026" data-index="5">
                        <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=600&q=80" alt="Global Scholarship Fair 2026" loading="lazy" />
                        <div class="overlay">
                            <span class="category-badge">🎉 Events</span>
                            <span class="title">Global Scholarship Fair 2026</span>
                            <span class="expand-icon"><i class="fas fa-expand"></i></span>
                        </div>
                    </div> -->

                    <!-- Item 7: Leadership - Executive Council -->
                    <!-- <div class="masonry-item" data-category="leadership" data-title="Executive Council Meeting" data-index="6">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&q=80" alt="Executive Council Meeting" loading="lazy" />
                        <div class="overlay">
                            <span class="category-badge">⭐ Leadership</span>
                            <span class="title">Executive Council Meeting</span>
                            <span class="expand-icon"><i class="fas fa-expand"></i></span>
                        </div>
                    </div> -->

                    <!-- Item 8: Community - Youth Empowerment -->
                    <!-- <div class="masonry-item" data-category="community" data-title="Youth Empowerment Workshop" data-index="7">
                        <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=600&q=80" alt="Youth Empowerment Workshop" loading="lazy" />
                        <div class="overlay">
                            <span class="category-badge">🤝 Community</span>
                            <span class="title">Youth Empowerment Workshop</span>
                            <span class="expand-icon"><i class="fas fa-expand"></i></span>
                        </div>
                    </div> -->

                    <!-- Item 9: Projects - Environmental Initiative -->
                    <!-- <div class="masonry-item" data-category="projects" data-title="Environmental Awareness Initiative" data-index="8">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=600&q=80" alt="Environmental Awareness Initiative" loading="lazy" />
                        <div class="overlay">
                            <span class="category-badge">🛠️ Projects</span>
                            <span class="title">Environmental Awareness Initiative</span>
                            <span class="expand-icon"><i class="fas fa-expand"></i></span>
                        </div>
                    </div> -->

                    <!-- Item 10: Awards - Recognition Event -->
                    <!-- <div class="masonry-item" data-category="awards" data-title="Student Recognition Event" data-index="9">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=600&q=80" alt="Student Recognition Event" loading="lazy" />
                        <div class="overlay">
                            <span class="category-badge">🏆 Awards</span>
                            <span class="title">Student Recognition Event</span>
                            <span class="expand-icon"><i class="fas fa-expand"></i></span>
                        </div>
                    </div> -->

                    <!-- Item 11: Events - Mentorship Workshop -->
                    <!-- <div class="masonry-item" data-category="events" data-title="Mentorship Workshop Session" data-index="10">
                        <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=600&q=80" alt="Mentorship Workshop Session" loading="lazy" />
                        <div class="overlay">
                            <span class="category-badge">🎉 Events</span>
                            <span class="title">Mentorship Workshop Session</span>
                            <span class="expand-icon"><i class="fas fa-expand"></i></span>
                        </div>
                    </div> -->

                    <!-- Item 12: Community - Outreach Program -->
                    <!-- <div class="masonry-item" data-category="community" data-title="Community Outreach Program" data-index="11">
                        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=600&q=80" alt="Community Outreach Program" loading="lazy" />
                        <div class="overlay">
                            <span class="category-badge">🤝 Community</span>
                            <span class="title">Community Outreach Program</span>
                            <span class="expand-icon"><i class="fas fa-expand"></i></span>
                        </div>
                    </div> -->
    
                    <!-- Item 13: Leadership - Team Photo -->
                    <!-- <div class="masonry-item" data-category="leadership" data-title="KESA Leadership Team 2026" data-index="12">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600&q=80" alt="KESA Leadership Team 2026" loading="lazy" />
                        <div class="overlay">
                            <span class="category-badge">⭐ Leadership</span>
                            <span class="title">KESA Leadership Team 2026</span>
                            <span class="expand-icon"><i class="fas fa-expand"></i></span>
                        </div>
                    </div> -->

                    <!-- Item 14: Projects - Infrastructure -->
                    <!-- <div class="masonry-item" data-category="projects" data-title="Campus Infrastructure Project" data-index="13">
                        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&q=80" alt="Campus Infrastructure Project" loading="lazy" />
                        <div class="overlay">
                            <span class="category-badge">🛠️ Projects</span>
                            <span class="title">Campus Infrastructure Project</span>
                            <span class="expand-icon"><i class="fas fa-expand"></i></span>
                        </div>
                    </div> -->

                    <!-- Item 15: Awards - Graduation -->
                    <!-- <div class="masonry-item" data-category="awards" data-title="Graduation Celebration" data-index="14">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c7f1?w=600&q=80" alt="Graduation Celebration" loading="lazy" />
                        <div class="overlay">
                            <span class="category-badge">🏆 Awards</span>
                            <span class="title">Graduation Celebration</span>
                            <span class="expand-icon"><i class="fas fa-expand"></i></span>
                        </div>
                    </div> -->

                    <!-- Item 16: Events - Cultural Day -->
                    <!-- <div class="masonry-item" data-category="events" data-title="Cultural Day Celebration" data-index="15">
                        <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=600&q=80" alt="Cultural Day Celebration" loading="lazy" />
                        <div class="overlay">
                            <span class="category-badge">🎉 Events</span>
                            <span class="title">Cultural Day Celebration</span>
                            <span class="expand-icon"><i class="fas fa-expand"></i></span>
                        </div>
                    </div> -->

                </div>
            </div>
        </section>

        <!-- ===== STATS ===== -->
        <section class="py-12" data-aos="fade-up">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                    <div class="glass rounded-2xl p-6 card-hover" data-aos="zoom-in" data-aos-delay="0">
                        <div class="text-3xl font-bold text-[#0f766e] dark:text-[#0f766e]">24+</div>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mt-1">Photos in Gallery</p>
                    </div>
                    <div class="glass rounded-2xl p-6 card-hover" data-aos="zoom-in" data-aos-delay="100">
                        <div class="text-3xl font-bold text-[#2563eb] dark:text-[#2563eb]">5</div>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mt-1">Categories</p>
                    </div>
                    <div class="glass rounded-2xl p-6 card-hover" data-aos="zoom-in" data-aos-delay="200">
                        <div class="text-3xl font-bold text-[#f59e0b] dark:text-[#f59e0b]">8</div>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mt-1">Events Covered</p>
                    </div>
                    <div class="glass rounded-2xl p-6 card-hover" data-aos="zoom-in" data-aos-delay="300">
                        <div class="text-3xl font-bold text-[#0f766e] dark:text-[#0f766e]">500+</div>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mt-1">Moments Shared</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CTA ===== -->
        <section class="py-20 relative overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);" data-aos="fade-up">
            <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-white/80 px-4 py-1.5 rounded-full text-sm font-medium border border-white/10 mb-4">
                    <i class="fas fa-camera text-[#f59e0b]"></i>
                    <span>Share Your Photos</span>
                </div>
                <h2 class="font-poppins font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white leading-tight">
                    Have <span class="text-[#f59e0b]">Photos</span> to Share?
                </h2>
                <p class="text-white/80 text-lg sm:text-xl mt-4 max-w-2xl mx-auto">
                    We'd love to feature your photos from KESA events, activities, and community moments in our gallery.
                </p>
                <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <a href="contact.php" class="btn-accent text-base px-10 py-3.5">
                        <i class="fas fa-upload"></i> Submit Photos
                    </a>
                    <a href="contact.php" class="bg-white/10 backdrop-blur-sm text-white border border-white/20 px-10 py-3.5 rounded-full font-semibold text-base hover:bg-white/20 transition-all inline-flex items-center gap-2">
                        <i class="fas fa-envelope"></i> Contact Us
                    </a>
                </div>
            </div>
        </section>

    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="bg-[#0f172a] text-[#94a3b8] pt-20 pb-8" role="contentinfo">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-12 pb-12 border-b border-[#1e293b]">
                <div>
                    <a href="index.php" class="flex items-center gap-2.5 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#0f766e] to-[#2563eb] flex items-center justify-center text-white font-bold text-lg">K</div>
                        <span class="font-poppins font-bold text-xl text-white tracking-tight">KESA<span class="text-[#0f766e]">.</span></span>
                    </a>
                    <p class="text-sm leading-relaxed max-w-xs">Educate, Enlighten and Unite Its Citizens. Building the future leaders of Keffi.</p>
                    <div class="flex gap-4 mt-4">
                        <a href="#" class="text-[#64748b] hover:text-[#0f766e] transition-colors" aria-label="Facebook"><i class="fab fa-facebook-f text-lg"></i></a>
                        <a href="#" class="text-[#64748b] hover:text-[#0f766e] transition-colors" aria-label="Twitter"><i class="fab fa-twitter text-lg"></i></a>
                        <a href="#" class="text-[#64748b] hover:text-[#0f766e] transition-colors" aria-label="Instagram"><i class="fab fa-instagram text-lg"></i></a>
                        <a href="#" class="text-[#64748b] hover:text-[#0f766e] transition-colors" aria-label="LinkedIn"><i class="fab fa-linkedin-in text-lg"></i></a>
                        <a href="#" class="text-[#64748b] hover:text-[#0f766e] transition-colors" aria-label="YouTube"><i class="fab fa-youtube text-lg"></i></a>
                    </div>
                </div>
                <div>
                    <h5 class="font-poppins font-semibold text-white text-sm mb-4">Quick Links</h5>
                    <ul class="space-y-2 text-sm">
                        <li><a href="about.php" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="leadership.php" class="hover:text-white transition-colors">Leadership</a></li>
                        <li><a href="membership.php" class="hover:text-white transition-colors">Membership</a></li>
                        <li><a href="events.php" class="hover:text-white transition-colors">Events</a></li>
                        <li><a href="scholarships.php" class="hover:text-white transition-colors">Scholarships</a></li>
                        <li><a href="news.php" class="hover:text-white transition-colors">News</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-poppins font-semibold text-white text-sm mb-4">Resources</h5>
                    <ul class="space-y-2 text-sm">
                        <li><a href="gallery.php" class="hover:text-white transition-colors">Gallery</a></li>
                        <li><a href="projects.php" class="hover:text-white transition-colors">Projects</a></li>
                        <li><a href="alumni.php" class="hover:text-white transition-colors">Alumni</a></li>
                        <li><a href="contact.php" class="hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-poppins font-semibold text-white text-sm mb-4">Get in Touch</h5>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start gap-3"><i class="fas fa-map-marker-alt text-[#0f766e] mt-1"></i><span>Keffi, Nasarawa State, Nigeria</span></li>
                        <li class="flex items-center gap-3"><i class="fas fa-phone text-[#0f766e]"></i><span>+234 800 KESA 123</span></li>
                        <li class="flex items-center gap-3"><i class="fas fa-envelope text-[#0f766e]"></i><span>info@kesa.org.ng</span></li>
                    </ul>
                    <div class="mt-4">
                        <form id="newsletter-form" onsubmit="return false;" class="flex gap-2">
                            <input type="email" placeholder="Your email" class="form-input text-sm rounded-full px-4 py-2.5 bg-[#1e293b] border-[#334155] text-white placeholder-[#64748b] focus:border-[#0f766e]" required />
                            <button type="submit" class="btn-primary text-sm px-5 py-2.5 rounded-full"><i class="fas fa-paper-plane"></i></button>
                        </form>
                        <p id="newsletter-success" class="text-xs text-[#0f766e] mt-2 hidden">✅ Subscribed successfully!</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-between items-center gap-4 pt-8 text-sm">
                <p>&copy; 2026 <span class="text-white font-medium">KESA</span> — Keffi Students Association. All rights reserved. Designed by <a href="https://qafamstech.com.ng" target="_blank" rel="noopener noreferrer" class="text-[#0f766e] hover:underline">Qafam Software Technology</a></p>
                <!--<p class="text-[#64748b]">Made with <i class="fas fa-heart text-[#f59e0b]"></i> in Keffi</p>-->
            </div>
        </div>
    </footer>

    <!-- ===== FLOATING WHATSAPP ===== -->
    <a id="whatsapp-float" href="https://wa.me/2348001234567" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- ===== BACK TO TOP ===== -->
    <button id="back-to-top" aria-label="Back to top">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- ===== TOAST ===== -->
    <div id="toast"></div>

    <!-- ===== SCRIPTS ===== -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // ──────────────────────────────────────────────────────────────
        // AOS INIT
        // ──────────────────────────────────────────────────────────────
        AOS.init({ duration: 800, once: true, offset: 60, easing: 'ease-out-cubic' });

        // ──────────────────────────────────────────────────────────────
        // DARK MODE
        // ──────────────────────────────────────────────────────────────
        const darkToggle = document.getElementById('dark-toggle');
        const htmlEl = document.documentElement;
        const icon = darkToggle.querySelector('i');
        if (localStorage.getItem('theme') === 'dark') { htmlEl.classList.add('dark');
            icon.className = 'fas fa-sun'; }
        darkToggle.addEventListener('click', () => {
            htmlEl.classList.toggle('dark');
            if (htmlEl.classList.contains('dark')) { localStorage.setItem('theme', 'dark');
                icon.className = 'fas fa-sun'; } else { localStorage.setItem('theme', 'light');
                icon.className = 'fas fa-moon'; }
        });

        // ──────────────────────────────────────────────────────────────
        // MOBILE MENU
        // ──────────────────────────────────────────────────────────────
        const mobileToggle = document.getElementById('mobile-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = mobileMenu.querySelectorAll('a');
        let menuOpen = false;
        mobileToggle.addEventListener('click', () => {
            menuOpen = !menuOpen;
            mobileMenu.classList.toggle('open', menuOpen);
            mobileToggle.setAttribute('aria-expanded', menuOpen);
            const icn = mobileToggle.querySelector('i');
            if (menuOpen) { icn.className = 'fas fa-times';
                document.body.style.overflow = 'hidden'; } else { icn.className = 'fas fa-bars';
                document.body.style.overflow = ''; }
        });
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                menuOpen = false;
                mobileMenu.classList.remove('open');
                mobileToggle.setAttribute('aria-expanded', 'false');
                mobileToggle.querySelector('i').className = 'fas fa-bars';
                document.body.style.overflow = '';
            });
        });

        // ──────────────────────────────────────────────────────────────
        // ANNOUNCEMENT BAR
        // ──────────────────────────────────────────────────────────────
        const announcement = document.getElementById('announcement-bar');
        const closeAnnounce = document.getElementById('close-announcement');
        if (localStorage.getItem('announcement-closed') === 'true') { announcement.style.display = 'none'; }
        closeAnnounce.addEventListener('click', () => {
            announcement.style.display = 'none';
            localStorage.setItem('announcement-closed', 'true');
        });

        // ──────────────────────────────────────────────────────────────
        // NAVBAR + SCROLL PROGRESS + BACK TO TOP
        // ──────────────────────────────────────────────────────────────
        const navbar = document.getElementById('navbar');
        const progress = document.getElementById('scroll-progress');
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            const height = document.documentElement.scrollHeight - window.innerHeight;
            if (scrollY > 40) { navbar.classList.add('navbar-scrolled'); } else { navbar.classList.remove(
                'navbar-scrolled'); }
            const percent = height > 0 ? (scrollY / height) * 100 : 0;
            progress.style.width = percent + '%';
            const backBtn = document.getElementById('back-to-top');
            if (scrollY > 400) { backBtn.classList.add('visible'); } else { backBtn.classList.remove('visible'); }
        });
        document.getElementById('back-to-top').addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // ──────────────────────────────────────────────────────────────
        // SEARCH MODAL
        // ──────────────────────────────────────────────────────────────
        const searchToggle = document.getElementById('search-toggle');
        const searchModal = document.getElementById('search-modal');
        const searchClose = document.getElementById('search-close');

        function openSearch() { searchModal.classList.add('open');
            document.body.style.overflow = 'hidden';
            searchModal.querySelector('input').focus(); }

        function closeSearch() { searchModal.classList.remove('open');
            document.body.style.overflow = ''; }
        searchToggle.addEventListener('click', openSearch);
        searchClose.addEventListener('click', closeSearch);
        searchModal.addEventListener('click', (e) => { if (e.target === searchModal) closeSearch(); });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeSearch();
            if ((e.ctrlKey || e.metaKey) && e.key === 'k') { e.preventDefault();
                openSearch(); }
        });

        // ──────────────────────────────────────────────────────────────
        // GALLERY FILTER
        // ──────────────────────────────────────────────────────────────
        const filterBtns = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.masonry-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                const filter = this.dataset.filter;

                galleryItems.forEach(item => {
                    const category = item.dataset.category;
                    if (filter === 'all' || category === filter) {
                        item.style.display = 'block';
                        setTimeout(() => { item.style.opacity = '1'; }, 50);
                    } else {
                        item.style.opacity = '0';
                        setTimeout(() => { item.style.display = 'none'; }, 300);
                    }
                });
            });
        });

        // ──────────────────────────────────────────────────────────────
        // LIGHTBOX
        // ──────────────────────────────────────────────────────────────
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightbox-image');
        const lightboxCaption = document.getElementById('lightbox-caption');
        const lightboxCounter = document.getElementById('lightbox-counter');
        const lightboxClose = document.querySelector('.lightbox-close');
        const lightboxPrev = document.querySelector('.lightbox-nav.prev');
        const lightboxNext = document.querySelector('.lightbox-nav.next');

        let currentIndex = 0;
        let galleryData = [];

        // Build gallery data from masonry items
        function buildGalleryData() {
            galleryData = [];
            document.querySelectorAll('.masonry-item').forEach(item => {
                const img = item.querySelector('img');
                const title = item.dataset.title || 'Gallery Image';
                const category = item.dataset.category || 'general';
                galleryData.push({
                    src: img.src,
                    title: title,
                    category: category,
                    element: item
                });
            });
        }
        buildGalleryData();

        // Open lightbox
        function openLightbox(index) {
            if (index < 0 || index >= galleryData.length) return;
            currentIndex = index;
            const data = galleryData[currentIndex];
            lightboxImage.src = data.src;
            lightboxImage.alt = data.title;
            lightboxCaption.textContent = data.title + ' — ' + data.category.charAt(0).toUpperCase() + data.category.slice(
            1);
            lightboxCounter.textContent = (currentIndex + 1) + ' / ' + galleryData.length;
            lightbox.classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightbox.classList.remove('open');
            document.body.style.overflow = '';
        }

        function navigateLightbox(direction) {
            const newIndex = currentIndex + direction;
            if (newIndex >= 0 && newIndex < galleryData.length) {
                openLightbox(newIndex);
            }
        }

        // Click on masonry item to open lightbox
        galleryItems.forEach((item, index) => {
            item.addEventListener('click', function() {
                // Find the correct index in galleryData
                const imgSrc = this.querySelector('img').src;
                const dataIndex = galleryData.findIndex(d => d.src === imgSrc);
                if (dataIndex !== -1) {
                    openLightbox(dataIndex);
                } else {
                    openLightbox(index);
                }
            });
        });

        // Lightbox controls
        lightboxClose.addEventListener('click', closeLightbox);
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) closeLightbox();
        });
        lightboxPrev.addEventListener('click', (e) => { e.stopPropagation();
            navigateLightbox(-1); });
        lightboxNext.addEventListener('click', (e) => { e.stopPropagation();
            navigateLightbox(1); });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('open')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') navigateLightbox(-1);
            if (e.key === 'ArrowRight') navigateLightbox(1);
        });

        // ──────────────────────────────────────────────────────────────
        // NEWSLETTER
        // ──────────────────────────────────────────────────────────────
        document.getElementById('newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const input = this.querySelector('input');
            if (input.value.trim()) {
                const success = document.getElementById('newsletter-success');
                success.classList.remove('hidden');
                input.value = '';
                setTimeout(() => success.classList.add('hidden'), 4000);
                showToast('✅ Subscribed to newsletter!', 'success');
            }
        });

        // ──────────────────────────────────────────────────────────────
        // TOAST
        // ──────────────────────────────────────────────────────────────
        function showToast(message, type = '') {
            const toast = document.getElementById('toast');
            toast.textContent = message;
            toast.className = 'show';
            if (type) toast.classList.add(type);
            clearTimeout(toast._timeout);
            toast._timeout = setTimeout(() => { toast.className = ''; }, 3500);
        }

        // ──────────────────────────────────────────────────────────────
        // ACTIVE NAV LINK
        // ──────────────────────────────────────────────────────────────
        const currentPath = window.location.pathname.split('/').pop() || 'gallery.php';
        document.querySelectorAll('.nav-link').forEach(link => {
            const href = link.getAttribute('href');
            if (href === currentPath) { link.classList.add('active'); } else { link.classList.remove('active'); }
        });

        console.log('🚀 Gallery page loaded successfully!');
    </script>
</body>
</html>