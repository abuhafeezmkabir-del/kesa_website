<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>News - KESA</title>
    <meta name="description" content="Latest news, announcements, and updates from the Keffi Students Association. Stay informed about our activities and impact." />
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

        /* ── News Card ── */
        .news-card .category-tag { position: absolute; top: 1rem; left: 1rem; z-index: 10; font-size: 0.65rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; padding: 0.3rem 0.8rem; border-radius: 9999px; }
        .news-card .news-image { transition: transform 0.6s ease; }
        .news-card:hover .news-image { transform: scale(1.05); }
        .news-card .read-more { position: relative; display: inline-flex; align-items: center; gap: 0.4rem; font-weight: 600; font-size: 0.875rem; transition: all 0.3s ease; }
        .news-card .read-more::after { content: ''; position: absolute; bottom: -2px; left: 0; width: 0; height: 2px; background: #0f766e; transition: width 0.3s ease; }
        .news-card:hover .read-more::after { width: 100%; }

        /* ── Featured News ── */
        .featured-news .featured-image { transition: transform 0.7s ease; }
        .featured-news:hover .featured-image { transform: scale(1.04); }

        /* ── Category Filter ── */
        .category-btn { padding: 0.4rem 1rem; border-radius: 9999px; font-weight: 500; font-size: 0.8rem; transition: all 0.3s ease; border: 2px solid #e2e8f0; background: transparent; color: #64748b; cursor: pointer; }
        .category-btn:hover { border-color: #0f766e; color: #0f766e; }
        .category-btn.active { background: #0f766e; color: #fff; border-color: #0f766e; }
        html.dark .category-btn { border-color: #334155; color: #94a3b8; }
        html.dark .category-btn.active { background: #0f766e; color: #fff; border-color: #0f766e; }

        /* ── Pagination ── */
        .pagination-btn { width: 40px; height: 40px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; font-size: 0.875rem; transition: all 0.3s ease; border: 2px solid #e2e8f0; background: transparent; color: #64748b; cursor: pointer; }
        .pagination-btn:hover { border-color: #0f766e; color: #0f766e; }
        .pagination-btn.active { background: #0f766e; color: #fff; border-color: #0f766e; }
        html.dark .pagination-btn { border-color: #334155; color: #94a3b8; }
        html.dark .pagination-btn.active { background: #0f766e; color: #fff; border-color: #0f766e; }

        /* ── Sidebar ── */
        .sidebar-card { transition: all 0.3s ease; }
        .sidebar-card:hover { transform: translateX(4px); }

        /* ── Responsive ── */
        @media (max-width: 640px) {
            #whatsapp-float { width: 52px; height: 52px; font-size: 24px; bottom: 20px; right: 20px; }
            #back-to-top { width: 42px; height: 42px; font-size: 16px; bottom: 80px; right: 20px; }
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
                    <li><a href="news.php" class="nav-link active">News</a></li>
                    <li><a href="gallery.php" class="nav-link">Gallery</a></li>
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
            <a href="news.php" class="nav-link active text-lg">News</a>
            <a href="gallery.php" class="nav-link text-lg">Gallery</a>
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
                <input type="text" placeholder="Search for news, announcements, stories..." aria-label="Search query" />
                <div class="mt-4 flex justify-end">
                    <button type="submit" class="btn-primary text-sm px-6 py-2.5">
                        <i class="fas fa-search"></i> Search
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- ===== MAIN CONTENT ===== -->
    <main>

        <!-- ===== PAGE HERO ===== -->
        <section class="pt-32 pb-16 section-bg relative overflow-hidden">
            <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%230f172a\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <div class="inline-flex items-center gap-2 bg-white/70 dark:bg-[#1e293b]/70 backdrop-blur-sm px-5 py-2 rounded-full text-sm font-medium text-[#0f766e] dark:text-[#0f766e] border border-[#0f766e]/10 mb-4 shadow-sm">
                    <i class="fas fa-newspaper text-sm"></i>
                    <span>Latest Updates</span>
                </div>
                <h1 class="font-poppins font-bold text-4xl sm:text-5xl lg:text-6xl text-[#0f172a] dark:text-white mt-2">
                    <span class="text-gradient">News</span> &amp; Announcements
                </h1>
                <p class="text-[#475569] dark:text-[#94a3b8] mt-4 max-w-2xl mx-auto leading-relaxed text-lg">
                    Stay informed about the latest news, updates, and stories from the Keffi Students Association community.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4 mt-6 text-sm text-[#64748b] dark:text-[#94a3b8]">
                    <span class="flex items-center gap-1.5"><i class="fas fa-calendar-alt text-[#0f766e]"></i> 12 Articles</span>
                    <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                    <span class="flex items-center gap-1.5"><i class="fas fa-tags text-[#0f766e]"></i> 6 Categories</span>
                    <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                    <span class="flex items-center gap-1.5"><i class="fas fa-eye text-[#0f766e]"></i> 5K+ Readers</span>
                </div>
            </div>
        </section>

        <!-- ===== FEATURED STORY ===== -->
        <section class="py-12" data-aos="fade-up">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="glass rounded-3xl overflow-hidden card-hover featured-news">
                    <div class="grid lg:grid-cols-2 gap-0">
                        <div class="relative overflow-hidden h-64 lg:h-auto">
                            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&q=80" alt="Featured News" class="featured-image w-full h-full object-cover" loading="lazy" />
                            <div class="absolute top-4 left-4">
                                <span class="bg-[#f59e0b] text-white text-xs font-bold px-3 py-1.5 rounded-full">⭐ Featured</span>
                            </div>
                        </div>
                        <div class="p-8 lg:p-10 flex flex-col justify-center">
                            <div class="flex items-center gap-3 text-xs text-[#64748b] dark:text-[#94a3b8] mb-3">
                                <span class="bg-[#0f766e]/10 text-[#0f766e] px-3 py-1 rounded-full font-semibold">Leadership</span>
                                <span><i class="far fa-calendar-alt mr-1"></i> June 10, 2026</span>
                                <span><i class="far fa-clock mr-1"></i> 5 min read</span>
                            </div>
                            <h2 class="font-poppins font-bold text-2xl sm:text-3xl text-[#0f172a] dark:text-white leading-tight">
                                KESA Announces Annual Leadership Summit 2026 — Register Now!
                            </h2>
                            <p class="text-[#475569] dark:text-[#94a3b8] mt-3 leading-relaxed">
                                The Keffi Students Association is proud to announce the 2026 Annual Leadership Summit, bringing together student leaders, professionals, and community stakeholders for a transformative day of learning and networking.
                            </p>
                            <div class="flex items-center gap-4 mt-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full overflow-hidden">
                                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=200&q=80" alt="Author" class="w-full h-full object-cover" loading="lazy" />
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-[#0f172a] dark:text-white">Dr. Amina Yusuf</p>
                                        <p class="text-xs text-[#64748b] dark:text-[#94a3b8]">President, KESA</p>
                                    </div>
                                </div>
                                <a href="#" class="btn-primary text-sm px-5 py-2.5 ml-auto">Read Full Story →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== NEWS GRID WITH SIDEBAR ===== -->
        <section class="py-12 lg:py-16 section-bg" data-aos="fade-up">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row gap-8">

                    <!-- ===== MAIN CONTENT ===== -->
                    <div class="lg:w-2/3">

                        <!-- Categories -->
                        <div class="flex flex-wrap items-center gap-2 mb-6">
                            <span class="text-sm font-semibold text-[#0f172a] dark:text-white mr-2">Categories:</span>
                            <button class="category-btn active" data-category="all">All</button>
                            <button class="category-btn" data-category="leadership">Leadership</button>
                            <button class="category-btn" data-category="education">Education</button>
                            <button class="category-btn" data-category="community">Community</button>
                            <button class="category-btn" data-category="events">Events</button>
                            <button class="category-btn" data-category="scholarships">Scholarships</button>
                            <button class="category-btn" data-category="alumni">Alumni</button>
                        </div>

                        <!-- Search Bar -->
                        <div class="relative mb-6">
                            <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-[#64748b] dark:text-[#94a3b8]"></i>
                            <input type="text" id="news-search" placeholder="Search news articles..." class="form-input rounded-full pl-11 pr-4 py-3 w-full" />
                        </div>

                        <!-- News Grid -->
                        <div class="space-y-6" id="news-grid">

                            <!-- News Item 1 -->
                            <div class="glass rounded-2xl overflow-hidden card-hover news-card" data-category="education">
                                <div class="grid sm:grid-cols-3 gap-0">
                                    <div class="relative overflow-hidden h-48 sm:h-auto">
                                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c7f1?w=400&q=80" alt="News" class="news-image w-full h-full object-cover" loading="lazy" />
                                        <span class="category-tag bg-[#0f766e] text-white">Education</span>
                                    </div>
                                    <div class="sm:col-span-2 p-5 flex flex-col justify-between">
                                        <div>
                                            <div class="flex items-center gap-2 text-xs text-[#64748b] dark:text-[#94a3b8] mb-2">
                                                <span><i class="far fa-calendar-alt mr-1"></i> June 8, 2026</span>
                                                <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                                                <span><i class="far fa-clock mr-1"></i> 3 min read</span>
                                            </div>
                                            <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white">KESA Launches New Mentorship Program for Freshmen</h4>
                                            <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed">A new initiative pairing incoming students with experienced mentors to ease their transition into university life and foster academic success.</p>
                                        </div>
                                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155]">
                                            <span class="text-xs text-[#64748b] dark:text-[#94a3b8]">By <span class="font-medium">Admin</span></span>
                                            <a href="#" class="read-more text-[#0f766e]">Read More <i class="fas fa-arrow-right text-xs"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- News Item 2 -->
                            <div class="glass rounded-2xl overflow-hidden card-hover news-card" data-category="community">
                                <div class="grid sm:grid-cols-3 gap-0">
                                    <div class="relative overflow-hidden h-48 sm:h-auto">
                                        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=400&q=80" alt="News" class="news-image w-full h-full object-cover" loading="lazy" />
                                        <span class="category-tag bg-[#2563eb] text-white">Community</span>
                                    </div>
                                    <div class="sm:col-span-2 p-5 flex flex-col justify-between">
                                        <div>
                                            <div class="flex items-center gap-2 text-xs text-[#64748b] dark:text-[#94a3b8] mb-2">
                                                <span><i class="far fa-calendar-alt mr-1"></i> June 5, 2026</span>
                                                <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                                                <span><i class="far fa-clock mr-1"></i> 4 min read</span>
                                            </div>
                                            <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white">Community Cleanup Drive Reaches 200+ Participants</h4>
                                            <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed">Over 200 volunteers came together for the annual Keffi community cleanup drive, collecting waste and beautifying public spaces across the city.</p>
                                        </div>
                                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155]">
                                            <span class="text-xs text-[#64748b] dark:text-[#94a3b8]">By <span class="font-medium">Grace Okonkwo</span></span>
                                            <a href="#" class="read-more text-[#0f766e]">Read More <i class="fas fa-arrow-right text-xs"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- News Item 3 -->
                            <div class="glass rounded-2xl overflow-hidden card-hover news-card" data-category="scholarships">
                                <div class="grid sm:grid-cols-3 gap-0">
                                    <div class="relative overflow-hidden h-48 sm:h-auto">
                                        <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=400&q=80" alt="News" class="news-image w-full h-full object-cover" loading="lazy" />
                                        <span class="category-tag bg-[#f59e0b] text-white">Scholarships</span>
                                    </div>
                                    <div class="sm:col-span-2 p-5 flex flex-col justify-between">
                                        <div>
                                            <div class="flex items-center gap-2 text-xs text-[#64748b] dark:text-[#94a3b8] mb-2">
                                                <span><i class="far fa-calendar-alt mr-1"></i> June 2, 2026</span>
                                                <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                                                <span><i class="far fa-clock mr-1"></i> 2 min read</span>
                                            </div>
                                            <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white">Scholarship Application Deadline Extended to July 30</h4>
                                            <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed">Good news for applicants! The deadline for the KESA Excellence Scholarship has been extended, giving more students the opportunity to apply.</p>
                                        </div>
                                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155]">
                                            <span class="text-xs text-[#64748b] dark:text-[#94a3b8]">By <span class="font-medium">Musa Adamu</span></span>
                                            <a href="#" class="read-more text-[#0f766e]">Read More <i class="fas fa-arrow-right text-xs"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- News Item 4 -->
                            <div class="glass rounded-2xl overflow-hidden card-hover news-card" data-category="leadership">
                                <div class="grid sm:grid-cols-3 gap-0">
                                    <div class="relative overflow-hidden h-48 sm:h-auto">
                                        <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=400&q=80" alt="News" class="news-image w-full h-full object-cover" loading="lazy" />
                                        <span class="category-tag bg-[#0f766e] text-white">Leadership</span>
                                    </div>
                                    <div class="sm:col-span-2 p-5 flex flex-col justify-between">
                                        <div>
                                            <div class="flex items-center gap-2 text-xs text-[#64748b] dark:text-[#94a3b8] mb-2">
                                                <span><i class="far fa-calendar-alt mr-1"></i> May 28, 2026</span>
                                                <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                                                <span><i class="far fa-clock mr-1"></i> 3 min read</span>
                                            </div>
                                            <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white">Executive Council Meets with University Administration</h4>
                                            <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed">The KESA executive council held a productive meeting with university leadership to discuss student welfare, infrastructure, and academic support initiatives.</p>
                                        </div>
                                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155]">
                                            <span class="text-xs text-[#64748b] dark:text-[#94a3b8]">By <span class="font-medium">Dr. Ibrahim Bello</span></span>
                                            <a href="#" class="read-more text-[#0f766e]">Read More <i class="fas fa-arrow-right text-xs"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- News Item 5 -->
                            <div class="glass rounded-2xl overflow-hidden card-hover news-card" data-category="events">
                                <div class="grid sm:grid-cols-3 gap-0">
                                    <div class="relative overflow-hidden h-48 sm:h-auto">
                                        <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=400&q=80" alt="News" class="news-image w-full h-full object-cover" loading="lazy" />
                                        <span class="category-tag bg-[#2563eb] text-white">Events</span>
                                    </div>
                                    <div class="sm:col-span-2 p-5 flex flex-col justify-between">
                                        <div>
                                            <div class="flex items-center gap-2 text-xs text-[#64748b] dark:text-[#94a3b8] mb-2">
                                                <span><i class="far fa-calendar-alt mr-1"></i> May 25, 2026</span>
                                                <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                                                <span><i class="far fa-clock mr-1"></i> 2 min read</span>
                                            </div>
                                            <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white">Global Scholarship Fair Draws International Partners</h4>
                                            <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed">The virtual Global Scholarship Fair connected students with representatives from 15 international universities and scholarship organizations.</p>
                                        </div>
                                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155]">
                                            <span class="text-xs text-[#64748b] dark:text-[#94a3b8]">By <span class="font-medium">Fatima Suleiman</span></span>
                                            <a href="#" class="read-more text-[#0f766e]">Read More <i class="fas fa-arrow-right text-xs"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- News Item 6 -->
                            <div class="glass rounded-2xl overflow-hidden card-hover news-card" data-category="alumni">
                                <div class="grid sm:grid-cols-3 gap-0">
                                    <div class="relative overflow-hidden h-48 sm:h-auto">
                                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=400&q=80" alt="News" class="news-image w-full h-full object-cover" loading="lazy" />
                                        <span class="category-tag bg-[#f59e0b] text-white">Alumni</span>
                                    </div>
                                    <div class="sm:col-span-2 p-5 flex flex-col justify-between">
                                        <div>
                                            <div class="flex items-center gap-2 text-xs text-[#64748b] dark:text-[#94a3b8] mb-2">
                                                <span><i class="far fa-calendar-alt mr-1"></i> May 20, 2026</span>
                                                <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                                                <span><i class="far fa-clock mr-1"></i> 4 min read</span>
                                            </div>
                                            <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white">Alumni Spotlight: Dr. Hassan Bello's Journey from KESA to Global Impact</h4>
                                            <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed">Meet Dr. Hassan Bello, a KESA alumnus whose journey from student leader to international development expert is inspiring the next generation.</p>
                                        </div>
                                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155]">
                                            <span class="text-xs text-[#64748b] dark:text-[#94a3b8]">By <span class="font-medium">Editorial Team</span></span>
                                            <a href="#" class="read-more text-[#0f766e]">Read More <i class="fas fa-arrow-right text-xs"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- ===== PAGINATION ===== -->
                        <div class="flex items-center justify-between mt-8 pt-6 border-t border-[#e2e8f0] dark:border-[#334155]">
                            <p class="text-sm text-[#64748b] dark:text-[#94a3b8]">Showing <span class="font-medium text-[#0f172a] dark:text-white">1-6</span> of <span class="font-medium text-[#0f172a] dark:text-white">12</span> articles</p>
                            <div class="flex items-center gap-1.5">
                                <button class="pagination-btn text-sm"><i class="fas fa-chevron-left"></i></button>
                                <button class="pagination-btn active">1</button>
                                <button class="pagination-btn">2</button>
                                <button class="pagination-btn">3</button>
                                <button class="pagination-btn text-sm"><i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>

                    </div>

                    <!-- ===== SIDEBAR ===== -->
                    <div class="lg:w-1/3">

                        <!-- About KESA News -->
                        <div class="glass rounded-2xl p-6 mb-6">
                            <h4 class="font-poppins font-bold text-[#0f172a] dark:text-white text-lg mb-3">About KESA News</h4>
                            <p class="text-sm text-[#475569] dark:text-[#94a3b8] leading-relaxed">Your source for the latest updates, announcements, and stories from the Keffi Students Association community.</p>
                            <div class="flex items-center gap-3 mt-4">
                                <div class="w-10 h-10 rounded-full bg-[#0f766e]/10 flex items-center justify-center text-[#0f766e]"><i class="fas fa-rss"></i></div>
                                <div>
                                    <p class="text-xs font-semibold text-[#0f172a] dark:text-white">Subscribe to Newsletter</p>
                                    <p class="text-xs text-[#64748b] dark:text-[#94a3b8]">Get weekly updates in your inbox</p>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Posts -->
                        <div class="glass rounded-2xl p-6 mb-6">
                            <h4 class="font-poppins font-bold text-[#0f172a] dark:text-white text-lg mb-4">Recent Posts</h4>
                            <div class="space-y-3">
                                <a href="#" class="sidebar-card flex items-center gap-3 p-2 rounded-xl hover:bg-[#0f766e]/5 transition-colors">
                                    <div class="w-16 h-16 rounded-lg overflow-hidden shrink-0">
                                        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=100&q=80" alt="Post" class="w-full h-full object-cover" loading="lazy" />
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-[#0f172a] dark:text-white leading-tight">KESA Announces Annual Leadership Summit</p>
                                        <p class="text-xs text-[#64748b] dark:text-[#94a3b8]">June 10, 2026</p>
                                    </div>
                                </a>
                                <a href="#" class="sidebar-card flex items-center gap-3 p-2 rounded-xl hover:bg-[#0f766e]/5 transition-colors">
                                    <div class="w-16 h-16 rounded-lg overflow-hidden shrink-0">
                                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c7f1?w=100&q=80" alt="Post" class="w-full h-full object-cover" loading="lazy" />
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-[#0f172a] dark:text-white leading-tight">Mentorship Program for Freshmen Launches</p>
                                        <p class="text-xs text-[#64748b] dark:text-[#94a3b8]">June 8, 2026</p>
                                    </div>
                                </a>
                                <a href="#" class="sidebar-card flex items-center gap-3 p-2 rounded-xl hover:bg-[#0f766e]/5 transition-colors">
                                    <div class="w-16 h-16 rounded-lg overflow-hidden shrink-0">
                                        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=100&q=80" alt="Post" class="w-full h-full object-cover" loading="lazy" />
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-[#0f172a] dark:text-white leading-tight">Community Cleanup Drive a Huge Success</p>
                                        <p class="text-xs text-[#64748b] dark:text-[#94a3b8]">June 5, 2026</p>
                                    </div>
                                </a>
                                <a href="#" class="sidebar-card flex items-center gap-3 p-2 rounded-xl hover:bg-[#0f766e]/5 transition-colors">
                                    <div class="w-16 h-16 rounded-lg overflow-hidden shrink-0">
                                        <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=100&q=80" alt="Post" class="w-full h-full object-cover" loading="lazy" />
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-[#0f172a] dark:text-white leading-tight">Scholarship Deadline Extended</p>
                                        <p class="text-xs text-[#64748b] dark:text-[#94a3b8]">June 2, 2026</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Categories List -->
                        <div class="glass rounded-2xl p-6 mb-6">
                            <h4 class="font-poppins font-bold text-[#0f172a] dark:text-white text-lg mb-4">Categories</h4>
                            <div class="space-y-2">
                                <a href="#" class="flex items-center justify-between p-2 rounded-lg hover:bg-[#0f766e]/5 transition-colors">
                                    <span class="text-sm text-[#475569] dark:text-[#94a3b8]">Leadership</span>
                                    <span class="text-xs bg-[#0f766e]/10 text-[#0f766e] px-2 py-0.5 rounded-full">4</span>
                                </a>
                                <a href="#" class="flex items-center justify-between p-2 rounded-lg hover:bg-[#0f766e]/5 transition-colors">
                                    <span class="text-sm text-[#475569] dark:text-[#94a3b8]">Education</span>
                                    <span class="text-xs bg-[#0f766e]/10 text-[#0f766e] px-2 py-0.5 rounded-full">3</span>
                                </a>
                                <a href="#" class="flex items-center justify-between p-2 rounded-lg hover:bg-[#0f766e]/5 transition-colors">
                                    <span class="text-sm text-[#475569] dark:text-[#94a3b8]">Community</span>
                                    <span class="text-xs bg-[#0f766e]/10 text-[#0f766e] px-2 py-0.5 rounded-full">5</span>
                                </a>
                                <a href="#" class="flex items-center justify-between p-2 rounded-lg hover:bg-[#0f766e]/5 transition-colors">
                                    <span class="text-sm text-[#475569] dark:text-[#94a3b8]">Events</span>
                                    <span class="text-xs bg-[#0f766e]/10 text-[#0f766e] px-2 py-0.5 rounded-full">3</span>
                                </a>
                                <a href="#" class="flex items-center justify-between p-2 rounded-lg hover:bg-[#0f766e]/5 transition-colors">
                                    <span class="text-sm text-[#475569] dark:text-[#94a3b8]">Scholarships</span>
                                    <span class="text-xs bg-[#0f766e]/10 text-[#0f766e] px-2 py-0.5 rounded-full">2</span>
                                </a>
                                <a href="#" class="flex items-center justify-between p-2 rounded-lg hover:bg-[#0f766e]/5 transition-colors">
                                    <span class="text-sm text-[#475569] dark:text-[#94a3b8]">Alumni</span>
                                    <span class="text-xs bg-[#0f766e]/10 text-[#0f766e] px-2 py-0.5 rounded-full">1</span>
                                </a>
                            </div>
                        </div>

                        <!-- Newsletter Signup -->
                        <div class="glass rounded-2xl p-6" style="background: linear-gradient(135deg, #0f766e, #2563eb);">
                            <h4 class="font-poppins font-bold text-white text-lg mb-2">Stay Updated</h4>
                            <p class="text-sm text-white/80 mb-4">Get the latest news delivered straight to your inbox.</p>
                            <form id="sidebar-newsletter" class="flex flex-col gap-3">
                                <input type="email" placeholder="Your email address" class="form-input rounded-full px-4 py-2.5 bg-white/20 border-white/30 text-white placeholder-white/60 focus:border-white" required />
                                <button type="submit" class="btn-accent text-sm w-full justify-center">
                                    <i class="fas fa-paper-plane mr-1"></i> Subscribe
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CTA ===== -->
        <section class="py-20 relative overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);" data-aos="fade-up">
            <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-white/80 px-4 py-1.5 rounded-full text-sm font-medium border border-white/10 mb-4">
                    <i class="fas fa-bullhorn text-[#f59e0b]"></i>
                    <span>Share Your Story</span>
                </div>
                <h2 class="font-poppins font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white leading-tight">
                    Have a <span class="text-[#f59e0b]">Story</span> to Share?
                </h2>
                <p class="text-white/80 text-lg sm:text-xl mt-4 max-w-2xl mx-auto">
                    We'd love to feature your achievements, experiences, and contributions to the KESA community.
                </p>
                <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <a href="contact.php" class="btn-accent text-base px-10 py-3.5">
                        <i class="fas fa-pen-fancy"></i> Submit a Story
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
        // CATEGORY FILTERS & SEARCH
        // ──────────────────────────────────────────────────────────────
        const categoryBtns = document.querySelectorAll('.category-btn');
        const newsCards = document.querySelectorAll('.news-card');
        const newsSearch = document.getElementById('news-search');

        function filterNews() {
            const activeCategory = document.querySelector('.category-btn.active')?.dataset.category || 'all';
            const query = newsSearch.value.toLowerCase().trim();

            newsCards.forEach(card => {
                const category = card.dataset.category;
                const matchesCategory = activeCategory === 'all' || category === activeCategory;
                const text = card.textContent.toLowerCase();
                const matchesSearch = !query || text.includes(query);

                if (matchesCategory && matchesSearch) {
                    card.style.display = 'block';
                    setTimeout(() => { card.style.opacity = '1'; }, 50);
                } else {
                    card.style.opacity = '0';
                    setTimeout(() => { card.style.display = 'none'; }, 300);
                }
            });
        }

        categoryBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                categoryBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                filterNews();
            });
        });

        newsSearch.addEventListener('input', filterNews);

        // ──────────────────────────────────────────────────────────────
        // PAGINATION
        // ──────────────────────────────────────────────────────────────
        document.querySelectorAll('.pagination-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                if (this.querySelector('.fa-chevron-left') || this.querySelector('.fa-chevron-right')) {
                    // Navigation arrows - find adjacent active page
                    const container = this.closest('.flex');
                    const pages = container.querySelectorAll('.pagination-btn:not(:has(fa-chevron))');
                    let activeIndex = -1;
                    pages.forEach((p, idx) => { if (p.classList.contains('active')) activeIndex = idx; });
                    if (activeIndex === -1) activeIndex = 0;

                    if (this.querySelector('.fa-chevron-left')) {
                        const newIndex = Math.max(0, activeIndex - 1);
                        pages.forEach(p => p.classList.remove('active'));
                        if (pages[newIndex]) pages[newIndex].classList.add('active');
                    } else {
                        const newIndex = Math.min(pages.length - 1, activeIndex + 1);
                        pages.forEach(p => p.classList.remove('active'));
                        if (pages[newIndex]) pages[newIndex].classList.add('active');
                    }
                } else {
                    document.querySelectorAll('.pagination-btn').forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                }
                // Scroll to top of news grid
                document.getElementById('news-grid').scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });

        // ──────────────────────────────────────────────────────────────
        // SIDEBAR NEWSLETTER
        // ──────────────────────────────────────────────────────────────
        document.getElementById('sidebar-newsletter')?.addEventListener('submit', function(e) {
            e.preventDefault();
            const input = this.querySelector('input');
            if (input.value.trim()) {
                input.value = '';
                showToast('✅ Subscribed to newsletter!', 'success');
            }
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
        const currentPath = window.location.pathname.split('/').pop() || 'news.php';
        document.querySelectorAll('.nav-link').forEach(link => {
            const href = link.getAttribute('href');
            if (href === currentPath) { link.classList.add('active'); } else { link.classList.remove('active'); }
        });

        console.log('🚀 News page loaded successfully!');
    </script>
</body>
</html>