<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About KESA - Keffi Students Association</title>
    <meta name="description" content="Learn about KESA - Keffi Students Association's mission, vision, history, and impact." />
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

    <!-- Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Custom Styles -->
    <style>
        /* ── Copy all custom styles from index.php here ── */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; background: #ffffff; color: #0f172a; overflow-x: hidden; }
        h1,h2,h3,h4,h5,h6 { font-family: 'Poppins', sans-serif; }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #0f766e; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #0d6b63; }
        #scroll-progress { position: fixed; top: 0; left: 0; height: 4px; background: linear-gradient(90deg, #0f766e, #2563eb, #f59e0b); z-index: 9999; width: 0%; transition: width 0.1s; }
        .navbar { transition: all 0.3s ease; background: rgba(255,255,255,0.92); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border-bottom: 1px solid rgba(15,23,42,0.06); }
        .navbar-scrolled { box-shadow: 0 8px 32px rgba(0,0,0,0.08); }
        .nav-link { position: relative; font-weight: 500; font-size: 0.875rem; color: #334155; transition: color 0.2s; padding: 0.5rem 0; }
        .nav-link::after { content: ''; position: absolute; bottom: 0; left: 0; width: 0; height: 2.5px; background: linear-gradient(90deg, #0f766e, #2563eb); transition: width 0.3s ease; border-radius: 4px; }
        .nav-link:hover::after, .nav-link.active::after { width: 100%; }
        .nav-link:hover { color: #0f172a; }
        .nav-link.active { color: #0f172a; font-weight: 600; }
        #mobile-menu { transition: all 0.4s cubic-bezier(0.4,0,0.2,1); transform: translateX(100%); opacity: 0; visibility: hidden; }
        #mobile-menu.open { transform: translateX(0); opacity: 1; visibility: visible; }
        #mobile-menu .nav-link { font-size: 1rem; padding: 0.75rem 0; border-bottom: 1px solid rgba(15,23,42,0.06); }
        .btn-primary { background: linear-gradient(135deg, #0f766e, #2563eb); color: #fff; padding: 0.75rem 2rem; border-radius: 9999px; font-weight: 600; font-size: 0.875rem; transition: all 0.3s ease; box-shadow: 0 4px 16px rgba(15,118,110,0.3); display: inline-flex; align-items: center; gap: 0.5rem; border: none; cursor: pointer; }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 28px rgba(15,118,110,0.4); }
        .btn-secondary { background: transparent; color: #0f172a; padding: 0.75rem 2rem; border-radius: 9999px; font-weight: 600; font-size: 0.875rem; border: 2px solid #e2e8f0; transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 0.5rem; cursor: pointer; }
        .btn-secondary:hover { border-color: #0f766e; color: #0f766e; transform: translateY(-2px); }
        .btn-accent { background: linear-gradient(135deg, #f59e0b, #d97706); color: #fff; padding: 0.75rem 2rem; border-radius: 9999px; font-weight: 600; font-size: 0.875rem; transition: all 0.3s ease; box-shadow: 0 4px 16px rgba(245,158,11,0.3); display: inline-flex; align-items: center; gap: 0.5rem; border: none; cursor: pointer; }
        .btn-accent:hover { transform: translateY(-2px); box-shadow: 0 8px 28px rgba(245,158,11,0.4); }
        .glass { background: rgba(255,255,255,0.7); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.25); }
        .glass-dark { background: rgba(15,23,42,0.6); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.08); }
        .card-hover { transition: all 0.4s cubic-bezier(0.4,0,0.2,1); }
        .card-hover:hover { transform: translateY(-8px); box-shadow: 0 20px 60px rgba(0,0,0,0.08); }
        .hero-overlay { background: linear-gradient(135deg, rgba(15,118,110,0.85) 0%, rgba(37,99,235,0.75) 100%); }
        .stat-number { font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 2.5rem; background: linear-gradient(135deg, #0f766e, #2563eb); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        @media (min-width: 768px) { .stat-number { font-size: 3.5rem; } }
        .swiper-button-next, .swiper-button-prev { color: #0f766e !important; background: rgba(255,255,255,0.9); width: 44px !important; height: 44px !important; border-radius: 50%; box-shadow: 0 4px 16px rgba(0,0,0,0.1); }
        .swiper-button-next::after, .swiper-button-prev::after { font-size: 18px !important; font-weight: 700; }
        .swiper-pagination-bullet-active { background: #0f766e !important; }
        #announcement-bar { background: linear-gradient(135deg, #0f766e, #2563eb); color: #fff; padding: 0.5rem 1rem; font-size: 0.875rem; font-weight: 500; display: flex; align-items: center; justify-content: center; gap: 1rem; flex-wrap: wrap; position: relative; z-index: 50; }
        #announcement-bar .close-btn { background: rgba(255,255,255,0.2); border: none; color: #fff; width: 28px; height: 28px; border-radius: 50%; cursor: pointer; font-size: 0.75rem; transition: background 0.2s; display: flex; align-items: center; justify-content: center; }
        #announcement-bar .close-btn:hover { background: rgba(255,255,255,0.3); }
        #whatsapp-float { position: fixed; bottom: 28px; right: 28px; z-index: 999; background: #25d366; color: #fff; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; box-shadow: 0 8px 32px rgba(37,211,102,0.4); transition: all 0.3s ease; text-decoration: none; border: none; cursor: pointer; }
        #whatsapp-float:hover { transform: scale(1.1); box-shadow: 0 12px 48px rgba(37,211,102,0.5); }
        #back-to-top { position: fixed; bottom: 100px; right: 28px; z-index: 998; background: #0f172a; color: #fff; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px; box-shadow: 0 4px 20px rgba(0,0,0,0.15); transition: all 0.3s ease; border: none; cursor: pointer; opacity: 0; visibility: hidden; transform: translateY(20px); }
        #back-to-top.visible { opacity: 1; visibility: visible; transform: translateY(0); }
        #back-to-top:hover { background: #0f766e; transform: translateY(-4px); }
        #dark-toggle { background: none; border: none; font-size: 1.25rem; color: #334155; cursor: pointer; transition: color 0.2s; padding: 0.25rem 0.5rem; }
        #dark-toggle:hover { color: #0f172a; }
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
        .section-bg { background: #f8fafc; }
        html.dark .section-bg { background: #1e293b; }
        .text-gradient { background: linear-gradient(135deg, #0f766e, #2563eb); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .text-gradient-accent { background: linear-gradient(135deg, #f59e0b, #d97706); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .animate-float { animation: float 6s ease-in-out infinite; }
        @keyframes float { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-16px); } }
        #search-modal { position: fixed; inset: 0; z-index: 9999; background: rgba(0,0,0,0.6); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); display: flex; align-items: center; justify-content: center; opacity: 0; visibility: hidden; transition: all 0.3s ease; }
        #search-modal.open { opacity: 1; visibility: visible; }
        #search-modal .modal-content { background: #fff; border-radius: 2rem; padding: 2rem; max-width: 600px; width: 90%; transform: scale(0.9); transition: transform 0.3s ease; }
        #search-modal.open .modal-content { transform: scale(1); }
        html.dark #search-modal .modal-content { background: #1e293b; }
        #search-modal input { width: 100%; padding: 1rem 1.5rem; border-radius: 9999px; border: 2px solid #e2e8f0; font-size: 1rem; outline: none; transition: border-color 0.2s; background: transparent; }
        #search-modal input:focus { border-color: #0f766e; }
        html.dark #search-modal input { border-color: #334155; color: #f1f5f9; }
        html.dark #search-modal input::placeholder { color: #64748b; }
        .form-input { width: 100%; padding: 0.75rem 1rem; border-radius: 0.75rem; border: 2px solid #e2e8f0; font-size: 0.875rem; transition: border-color 0.2s; outline: none; background: #fff; }
        .form-input:focus { border-color: #0f766e; box-shadow: 0 0 0 4px rgba(15,118,110,0.1); }
        html.dark .form-input { background: #1e293b; border-color: #334155; color: #f1f5f9; }
        .form-label { font-weight: 600; font-size: 0.875rem; color: #0f172a; margin-bottom: 0.25rem; display: block; }
        html.dark .form-label { color: #f1f5f9; }
        .form-error { color: #ef4444; font-size: 0.75rem; margin-top: 0.25rem; display: none; }
        .form-input.error { border-color: #ef4444; }
        .form-input.error+.form-error { display: block; }
        #toast { position: fixed; bottom: 100px; left: 50%; transform: translateX(-50%) translateY(20px); background: #0f766e; color: #fff; padding: 0.75rem 2rem; border-radius: 9999px; font-weight: 600; font-size: 0.875rem; box-shadow: 0 8px 32px rgba(15,118,110,0.3); z-index: 9999; opacity: 0; visibility: hidden; transition: all 0.4s ease; }
        #toast.show { opacity: 1; visibility: visible; transform: translateX(-50%) translateY(0); }
        @media (max-width: 640px) { .hero-title { font-size: 2rem !important; } .hero-subtitle { font-size: 1rem !important; } .stat-number { font-size: 1.75rem !important; } #whatsapp-float { width: 52px; height: 52px; font-size: 24px; bottom: 20px; right: 20px; } #back-to-top { width: 42px; height: 42px; font-size: 16px; bottom: 80px; right: 20px; } }
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
                <!-- Logo -->
                <a href="index.php" class="flex items-center gap-3 shrink-0" aria-label="KESA Home">
                    <div class="w-12 h-12 flex items-center justify-center">
                        <img src="img/KSA logo.jpeg" alt="KESA Logo" class="w-full h-full object-contain">
                    </div>
                </a>
                <!-- Desktop Menu -->
                <ul class="hidden lg:flex items-center gap-1 xl:gap-2" id="desktop-menu">
                    <li><a href="index.php" class="nav-link">Home</a></li>
                    <li><a href="about.php" class="nav-link active">About</a></li>
                    <li><a href="leadership.php" class="nav-link">Leadership</a></li>
                    <li><a href="membership.php" class="nav-link">Membership</a></li>
                    <li><a href="events.php" class="nav-link">Events</a></li>
                    <li><a href="scholarships.php" class="nav-link">Scholarships</a></li>
                    <li><a href="news.php" class="nav-link">News</a></li>
                    <li><a href="gallery.php" class="nav-link">Gallery</a></li>
                    <li><a href="projects.php" class="nav-link">Projects</a></li>
                    <li><a href="alumni.php" class="nav-link">Alumni</a></li>
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
    <div id="mobile-menu" class="fixed inset-0 z-40 bg-white dark:bg-[#0f172a] pt-20 px-6 overflow-y-auto lg:hidden" role="dialog" aria-modal="true" aria-label="Mobile navigation">
        <div class="flex flex-col gap-1 pb-8">
            <a href="index.php" class="nav-link text-lg">Home</a>
            <a href="about.php" class="nav-link active text-lg">About</a>
            <a href="leadership.php" class="nav-link text-lg">Leadership</a>
            <a href="membership.php" class="nav-link text-lg">Membership</a>
            <a href="events.php" class="nav-link text-lg">Events</a>
            <a href="scholarships.php" class="nav-link text-lg">Scholarships</a>
            <a href="news.php" class="nav-link text-lg">News</a>
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
                <input type="text" placeholder="Search for events, scholarships, news..." aria-label="Search query" />
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

        <!-- Page Hero -->
        <section class="pt-32 pb-16 section-bg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <span class="inline-block text-[#0f766e] dark:text-[#0f766e] font-semibold text-sm tracking-wider uppercase">About Us</span>
                <h1 class="font-poppins font-bold text-4xl sm:text-5xl text-[#0f172a] dark:text-white mt-2">
                    About <span class="text-gradient">KESA</span>
                </h1>
                <p class="text-[#475569] dark:text-[#94a3b8] mt-4 max-w-2xl mx-auto leading-relaxed">
                    Discover the story, mission, and vision behind the Keffi Students Association.
                </p>
            </div>
        </section>

        <!-- Our Story -->
        <section class="py-16" data-aos="fade-up">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div data-aos="fade-right">
                        <h2 class="font-poppins font-bold text-3xl text-[#0f172a] dark:text-white">Our <span class="text-gradient">Story</span></h2>
                        <div class="w-16 h-1 bg-gradient-to-r from-[#0f766e] to-[#2563eb] rounded-full mt-3 mb-5"></div>
                        <p class="text-[#475569] dark:text-[#94a3b8] leading-relaxed">
                            KESA was founded in 2015 by a group of passionate students who believed in the power of education and unity. What started as a small gathering of like-minded individuals has grown into the premier student association in Keffi, Nasarawa State.
                        </p>
                        <p class="text-[#475569] dark:text-[#94a3b8] leading-relaxed mt-4">
                            Today, KESA serves thousands of students, alumni, and community members, providing a platform for leadership, learning, and service. Our journey is a testament to the resilience and determination of the youth of Keffi.
                        </p>
                        <div class="flex flex-wrap gap-4 mt-6">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-full bg-[#0f766e]/10 flex items-center justify-center text-2xl">📅</div>
                                <div>
                                    <p class="font-bold text-[#0f172a] dark:text-white">2015</p>
                                    <p class="text-xs text-[#64748b] dark:text-[#94a3b8]">Year Founded</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-full bg-[#2563eb]/10 flex items-center justify-center text-2xl">👥</div>
                                <div>
                                    <p class="font-bold text-[#0f172a] dark:text-white">5,000+</p>
                                    <p class="text-xs text-[#64748b] dark:text-[#94a3b8]">Members</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative" data-aos="fade-left">
                        <div class="aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl">
                            <img src="./img/president.jpeg" alt="KESA Story" class="w-full h-full object-cover" loading="lazy" />
                        </div>
                        <div class="absolute -bottom-6 -left-6 glass rounded-2xl p-5 shadow-xl max-w-xs hidden sm:block">
                            <p class="text-sm font-semibold text-[#0f172a] dark:text-white">"Educate, Enlighten and Unite"</p>
                            <p class="text-xs text-[#64748b] dark:text-[#94a3b8]">— Our motto</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission, Vision, Values (reuse from index) -->
        <section class="py-16 section-bg" data-aos="fade-up">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <h2 class="font-poppins font-bold text-3xl text-[#0f172a] dark:text-white">Our <span class="text-gradient">Core Purpose</span></h2>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="glass rounded-3xl p-8 card-hover text-center" data-aos="fade-up" data-aos-delay="0">
                        <div class="w-16 h-16 rounded-2xl bg-[#0f766e]/10 flex items-center justify-center text-3xl mx-auto mb-4">🎯</div>
                        <h3 class="font-poppins font-bold text-xl text-[#0f172a] dark:text-white">Mission</h3>
                        <p class="text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed text-sm">To empower students through quality education, leadership development, and community engagement.</p>
                    </div>
                    <div class="glass rounded-3xl p-8 card-hover text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-16 h-16 rounded-2xl bg-[#2563eb]/10 flex items-center justify-center text-3xl mx-auto mb-4">👁️</div>
                        <h3 class="font-poppins font-bold text-xl text-[#0f172a] dark:text-white">Vision</h3>
                        <p class="text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed text-sm">A united community of educated, enlightened, and empowered citizens driving positive change in Keffi and beyond.</p>
                    </div>
                    <div class="glass rounded-3xl p-8 card-hover text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-16 h-16 rounded-2xl bg-[#f59e0b]/10 flex items-center justify-center text-3xl mx-auto mb-4">📋</div>
                        <h3 class="font-poppins font-bold text-xl text-[#0f172a] dark:text-white">Objectives</h3>
                        <p class="text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed text-sm">Promote academic excellence, foster leadership, encourage innovation, and strengthen community bonds.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Values (same as index) -->
        <section class="py-16" data-aos="fade-up">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="inline-block text-[#0f766e] dark:text-[#0f766e] font-semibold text-sm tracking-wider uppercase">Our Values</span>
                    <h2 class="font-poppins font-bold text-3xl text-[#0f172a] dark:text-white mt-2">The <span class="text-gradient">Core Principles</span> That Guide Us</h2>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="glass rounded-2xl p-6 card-hover flex items-start gap-4" data-aos="flip-up" data-aos-delay="0">
                        <div class="w-12 h-12 rounded-xl bg-[#0f766e]/10 flex items-center justify-center text-2xl shrink-0">📚</div>
                        <div><h4 class="font-poppins font-bold text-[#0f172a] dark:text-white">Education</h4><p class="text-sm text-[#64748b] dark:text-[#94a3b8]">Promoting lifelong learning and academic excellence.</p></div>
                    </div>
                    <div class="glass rounded-2xl p-6 card-hover flex items-start gap-4" data-aos="flip-up" data-aos-delay="100">
                        <div class="w-12 h-12 rounded-xl bg-[#2563eb]/10 flex items-center justify-center text-2xl shrink-0">🤝</div>
                        <div><h4 class="font-poppins font-bold text-[#0f172a] dark:text-white">Unity</h4><p class="text-sm text-[#64748b] dark:text-[#94a3b8]">Building bridges and fostering a sense of community.</p></div>
                    </div>
                    <div class="glass rounded-2xl p-6 card-hover flex items-start gap-4" data-aos="flip-up" data-aos-delay="200">
                        <div class="w-12 h-12 rounded-xl bg-[#f59e0b]/10 flex items-center justify-center text-2xl shrink-0">⭐</div>
                        <div><h4 class="font-poppins font-bold text-[#0f172a] dark:text-white">Leadership</h4><p class="text-sm text-[#64748b] dark:text-[#94a3b8]">Developing the next generation of visionary leaders.</p></div>
                    </div>
                    <div class="glass rounded-2xl p-6 card-hover flex items-start gap-4" data-aos="flip-up" data-aos-delay="300">
                        <div class="w-12 h-12 rounded-xl bg-[#0f766e]/10 flex items-center justify-center text-2xl shrink-0">🔒</div>
                        <div><h4 class="font-poppins font-bold text-[#0f172a] dark:text-white">Integrity</h4><p class="text-sm text-[#64748b] dark:text-[#94a3b8]">Upholding honesty, transparency, and ethical conduct.</p></div>
                    </div>
                    <div class="glass rounded-2xl p-6 card-hover flex items-start gap-4" data-aos="flip-up" data-aos-delay="400">
                        <div class="w-12 h-12 rounded-xl bg-[#2563eb]/10 flex items-center justify-center text-2xl shrink-0">💡</div>
                        <div><h4 class="font-poppins font-bold text-[#0f172a] dark:text-white">Innovation</h4><p class="text-sm text-[#64748b] dark:text-[#94a3b8]">Embracing creativity and forward-thinking solutions.</p></div>
                    </div>
                    <div class="glass rounded-2xl p-6 card-hover flex items-start gap-4" data-aos="flip-up" data-aos-delay="500">
                        <div class="w-12 h-12 rounded-xl bg-[#f59e0b]/10 flex items-center justify-center text-2xl shrink-0">❤️</div>
                        <div><h4 class="font-poppins font-bold text-[#0f172a] dark:text-white">Community Service</h4><p class="text-sm text-[#64748b] dark:text-[#94a3b8]">Giving back and making a tangible impact in our society.</p></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Impact Statistics (same as index) -->
        <section class="py-16 relative overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);" data-aos="fade-up">
            <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="inline-block text-[#f59e0b] font-semibold text-sm tracking-wider uppercase">Our Impact</span>
                    <h2 class="font-poppins font-bold text-3xl sm:text-4xl text-white mt-2">Making a <span class="text-[#f59e0b]">Difference</span> in Numbers</h2>
                </div>
                <div class="grid grid-cols-2 lg:grid-cols-5 gap-6 lg:gap-8 text-center">
                    <div data-aos="zoom-in" data-aos-delay="0"><div class="stat-number" data-count="5000">0</div><p class="text-white/70 text-sm mt-1 font-medium">Registered Members</p></div>
                    <div data-aos="zoom-in" data-aos-delay="100"><div class="stat-number" data-count="200">0</div><p class="text-white/70 text-sm mt-1 font-medium">Scholarships Facilitated</p></div>
                    <div data-aos="zoom-in" data-aos-delay="200"><div class="stat-number" data-count="50">0</div><p class="text-white/70 text-sm mt-1 font-medium">Projects Completed</p></div>
                    <div data-aos="zoom-in" data-aos-delay="300"><div class="stat-number" data-count="100">0</div><p class="text-white/70 text-sm mt-1 font-medium">Events Organized</p></div>
                    <div data-aos="zoom-in" data-aos-delay="400"><div class="stat-number" data-count="30">0</div><p class="text-white/70 text-sm mt-1 font-medium">Partner Organizations</p></div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16" data-aos="fade-up">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="font-poppins font-bold text-3xl text-[#0f172a] dark:text-white">Ready to <span class="text-gradient">Make a Difference?</span></h2>
                <p class="text-[#475569] dark:text-[#94a3b8] mt-3">Join KESA today and become part of a community that's shaping the future.</p>
                <a href="membership.php" class="btn-primary mt-6">Join KESA Now →</a>
            </div>
        </section>

    </main>

    <!-- ===== FOOTER (same as index) ===== -->
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
                <!-- <p class="text-[#64748b]">Made with <i class="fas fa-heart text-[#f59e0b]"></i> in Keffi</p> -->
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // ── Copy all JavaScript from index.php here ──
        AOS.init({ duration: 800, once: true, offset: 60, easing: 'ease-out-cubic' });

        const darkToggle = document.getElementById('dark-toggle');
        const htmlEl = document.documentElement;
        const icon = darkToggle.querySelector('i');
        if (localStorage.getItem('theme') === 'dark') { htmlEl.classList.add('dark'); icon.className = 'fas fa-sun'; }
        darkToggle.addEventListener('click', () => {
            htmlEl.classList.toggle('dark');
            if (htmlEl.classList.contains('dark')) { localStorage.setItem('theme', 'dark'); icon.className = 'fas fa-sun'; }
            else { localStorage.setItem('theme', 'light'); icon.className = 'fas fa-moon'; }
        });

        const mobileToggle = document.getElementById('mobile-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = mobileMenu.querySelectorAll('a');
        let menuOpen = false;
        mobileToggle.addEventListener('click', () => {
            menuOpen = !menuOpen;
            mobileMenu.classList.toggle('open', menuOpen);
            mobileToggle.setAttribute('aria-expanded', menuOpen);
            const icon = mobileToggle.querySelector('i');
            if (menuOpen) { icon.className = 'fas fa-times'; document.body.style.overflow = 'hidden'; }
            else { icon.className = 'fas fa-bars'; document.body.style.overflow = ''; }
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

        const announcement = document.getElementById('announcement-bar');
        const closeAnnounce = document.getElementById('close-announcement');
        if (localStorage.getItem('announcement-closed') === 'true') { announcement.style.display = 'none'; }
        closeAnnounce.addEventListener('click', () => {
            announcement.style.display = 'none';
            localStorage.setItem('announcement-closed', 'true');
        });

        const navbar = document.getElementById('navbar');
        const progress = document.getElementById('scroll-progress');
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            const height = document.documentElement.scrollHeight - window.innerHeight;
            if (scrollY > 40) { navbar.classList.add('navbar-scrolled'); } else { navbar.classList.remove('navbar-scrolled'); }
            const percent = height > 0 ? (scrollY / height) * 100 : 0;
            progress.style.width = percent + '%';
            const backBtn = document.getElementById('back-to-top');
            if (scrollY > 400) { backBtn.classList.add('visible'); } else { backBtn.classList.remove('visible'); }
        });

        document.getElementById('back-to-top').addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        const searchToggle = document.getElementById('search-toggle');
        const searchModal = document.getElementById('search-modal');
        const searchClose = document.getElementById('search-close');
        function openSearch() { searchModal.classList.add('open'); document.body.style.overflow = 'hidden'; searchModal.querySelector('input').focus(); }
        function closeSearch() { searchModal.classList.remove('open'); document.body.style.overflow = ''; }
        searchToggle.addEventListener('click', openSearch);
        searchClose.addEventListener('click', closeSearch);
        searchModal.addEventListener('click', (e) => { if (e.target === searchModal) closeSearch(); });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeSearch();
            if ((e.ctrlKey || e.metaKey) && e.key === 'k') { e.preventDefault(); openSearch(); }
        });

        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            let animated = false;
            function runCounters() {
                if (animated) return;
                const section = counters[0]?.closest('section');
                if (!section) return;
                const rect = section.getBoundingClientRect();
                if (rect.top < window.innerHeight - 80) {
                    animated = true;
                    counters.forEach((el) => {
                        const target = parseInt(el.getAttribute('data-count'), 10);
                        if (isNaN(target) || target <= 0) return;
                        let current = 0;
                        const increment = Math.ceil(target / 60);
                        const timer = setInterval(() => {
                            current += increment;
                            if (current >= target) { current = target; clearInterval(timer); }
                            el.textContent = current.toLocaleString();
                        }, 25);
                    });
                }
            }
            window.addEventListener('scroll', runCounters);
            setTimeout(runCounters, 400);
        }
        animateCounters();

        document.getElementById('newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const input = this.querySelector('input');
            if (input.value.trim()) {
                const success = document.getElementById('newsletter-success');
                success.classList.remove('hidden');
                input.value = '';
                setTimeout(() => success.classList.add('hidden'), 4000);
                showToast('✅ Subscribed to newsletter!');
            }
        });

        function showToast(message) {
            const toast = document.getElementById('toast');
            toast.textContent = message;
            toast.classList.add('show');
            clearTimeout(toast._timeout);
            toast._timeout = setTimeout(() => toast.classList.remove('show'), 3500);
        }

        const currentPath = window.location.pathname.split('/').pop() || 'about.php';
        document.querySelectorAll('.nav-link').forEach(link => {
            const href = link.getAttribute('href');
            if (href === currentPath) { link.classList.add('active'); } else { link.classList.remove('active'); }
        });

        console.log('🚀 About page loaded!');
    </script>
</body>
</html>