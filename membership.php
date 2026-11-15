<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Membership - KESA</title>
    <meta name="description" content="Join the Keffi Students Association. Register for membership and start enjoying benefits today." />
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
        .btn-primary:disabled { opacity: 0.6; cursor: not-allowed; transform: none !important; }
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

        /* ── Form Styles ── */
        .form-input { width: 100%; padding: 0.75rem 1rem; border-radius: 0.75rem; border: 2px solid #e2e8f0; font-size: 0.875rem; transition: all 0.2s ease; outline: none; background: #fff; color: #0f172a; }
        .form-input:focus { border-color: #0f766e; box-shadow: 0 0 0 4px rgba(15,118,110,0.1); }
        .form-input.error { border-color: #ef4444; }
        .form-input.error:focus { box-shadow: 0 0 0 4px rgba(239,68,68,0.1); }
        .form-input:disabled { opacity: 0.6; cursor: not-allowed; }
        html.dark .form-input { background: #1e293b; border-color: #334155; color: #f1f5f9; }
        html.dark .form-input:focus { border-color: #0f766e; box-shadow: 0 0 0 4px rgba(15,118,110,0.2); }
        html.dark .form-input.error { border-color: #ef4444; }
        .form-label { font-weight: 600; font-size: 0.875rem; color: #0f172a; margin-bottom: 0.25rem; display: block; }
        html.dark .form-label { color: #f1f5f9; }
        .form-error { color: #ef4444; font-size: 0.75rem; margin-top: 0.25rem; display: none; }
        .form-input.error + .form-error { display: block; }
        .form-hint { color: #64748b; font-size: 0.75rem; margin-top: 0.25rem; }

        /* ── Progress Indicator ── */
        .progress-step { width: 2.75rem; height: 2.75rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.875rem; transition: all 0.4s ease; border: 2px solid transparent; }
        .progress-step.active { background: #0f766e; color: #fff; border-color: #0f766e; box-shadow: 0 0 0 4px rgba(15,118,110,0.2); }
        .progress-step.completed { background: #0f766e; color: #fff; border-color: #0f766e; }
        .progress-step.inactive { background: #e2e8f0; color: #64748b; border-color: #e2e8f0; }
        html.dark .progress-step.inactive { background: #334155; color: #94a3b8; border-color: #334155; }
        .progress-line { height: 3px; flex: 1; background: #e2e8f0; transition: background 0.4s ease; border-radius: 4px; }
        html.dark .progress-line { background: #334155; }
        .progress-line.completed { background: #0f766e; }

        /* ── Form Steps ── */
        .form-step { animation: fadeStep 0.4s ease-out; }
        @keyframes fadeStep { from { opacity: 0; transform: translateX(20px); } to { opacity: 1; transform: translateX(0); } }
        .form-step.hidden { display: none; }

        /* ── Toast ── */
        #toast { position: fixed; bottom: 100px; left: 50%; transform: translateX(-50%) translateY(20px); background: #0f766e; color: #fff; padding: 0.75rem 2rem; border-radius: 9999px; font-weight: 600; font-size: 0.875rem; box-shadow: 0 8px 32px rgba(15,118,110,0.3); z-index: 9999; opacity: 0; visibility: hidden; transition: all 0.4s ease; }
        #toast.show { opacity: 1; visibility: visible; transform: translateX(-50%) translateY(0); }
        #toast.error { background: #ef4444; box-shadow: 0 8px 32px rgba(239,68,68,0.3); }
        #toast.success { background: #22c55e; box-shadow: 0 8px 32px rgba(34,197,94,0.3); }

        /* ── Success Message ── */
        #success-message { display: none; text-align: center; padding: 2rem 0; }
        #success-message.show { display: block; animation: fadeStep 0.6s ease-out; }
        #success-message .icon { font-size: 4rem; margin-bottom: 1rem; }

        /* ── Responsive ── */
        @media (max-width: 640px) {
            .progress-step { width: 2.25rem; height: 2.25rem; font-size: 0.75rem; }
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
                    <li><a href="membership.php" class="nav-link active">Membership</a></li>
                    <li><a href="events.php" class="nav-link">Events</a></li>
                    <li><a href="scholarships.php" class="nav-link">Scholarships</a></li>
                    <li><a href="news.php" class="nav-link">News</a></li>
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
            <a href="membership.php" class="nav-link active text-lg">Membership</a>
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
                <span class="inline-block text-[#0f766e] dark:text-[#0f766e] font-semibold text-sm tracking-wider uppercase">Join Us</span>
                <h1 class="font-poppins font-bold text-4xl sm:text-5xl text-[#0f172a] dark:text-white mt-2">
                    Become a <span class="text-gradient">Member</span>
                </h1>
                <p class="text-[#475569] dark:text-[#94a3b8] mt-4 max-w-2xl mx-auto leading-relaxed">
                    Register today and gain access to scholarships, leadership training, networking, and more.
                </p>
            </div>
        </section>

        <!-- Membership Benefits -->
        <section class="py-12" data-aos="fade-up">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-10">
                    <h2 class="font-poppins font-bold text-2xl sm:text-3xl text-[#0f172a] dark:text-white">Why Join <span class="text-gradient">KESA?</span></h2>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="glass rounded-2xl p-5 card-hover text-center" data-aos="zoom-in" data-aos-delay="0">
                        <div class="w-14 h-14 rounded-xl bg-[#0f766e]/10 flex items-center justify-center text-2xl mx-auto mb-3">🤝</div>
                        <h4 class="font-poppins font-bold text-[#0f172a] dark:text-white">Networking</h4>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8]">Connect with peers, alumni, and industry leaders.</p>
                    </div>
                    <div class="glass rounded-2xl p-5 card-hover text-center" data-aos="zoom-in" data-aos-delay="100">
                        <div class="w-14 h-14 rounded-xl bg-[#2563eb]/10 flex items-center justify-center text-2xl mx-auto mb-3">🧑‍🏫</div>
                        <h4 class="font-poppins font-bold text-[#0f172a] dark:text-white">Mentorship</h4>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8]">Guidance from experienced professionals and alumni.</p>
                    </div>
                    <div class="glass rounded-2xl p-5 card-hover text-center" data-aos="zoom-in" data-aos-delay="200">
                        <div class="w-14 h-14 rounded-xl bg-[#f59e0b]/10 flex items-center justify-center text-2xl mx-auto mb-3">📈</div>
                        <h4 class="font-poppins font-bold text-[#0f172a] dark:text-white">Leadership Training</h4>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8]">Develop essential skills for future leadership roles.</p>
                    </div>
                    <div class="glass rounded-2xl p-5 card-hover text-center" data-aos="zoom-in" data-aos-delay="300">
                        <div class="w-14 h-14 rounded-xl bg-[#0f766e]/10 flex items-center justify-center text-2xl mx-auto mb-3">🎓</div>
                        <h4 class="font-poppins font-bold text-[#0f172a] dark:text-white">Scholarships</h4>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8]">Access to exclusive scholarship and grant opportunities.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Registration Form -->
        <section class="py-16 section-bg" data-aos="fade-up">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="glass rounded-3xl p-8 md:p-12 shadow-2xl">

                    <h2 class="font-poppins font-bold text-2xl sm:text-3xl text-[#0f172a] dark:text-white text-center mb-8">
                        Register for <span class="text-gradient">Membership</span>
                    </h2>

                    <!-- Progress Indicator -->
                    <div class="flex items-center justify-between max-w-md mx-auto mb-8" id="progress-indicator">
                        <div class="progress-step active" data-step="1">1</div>
                        <div class="progress-line"></div>
                        <div class="progress-step inactive" data-step="2">2</div>
                        <div class="progress-line"></div>
                        <div class="progress-step inactive" data-step="3">3</div>
                    </div>

                    <!-- Success Message -->
                    <div id="success-message">
                        <div class="icon">🎉</div>
                        <h3 class="font-poppins font-bold text-2xl text-[#0f172a] dark:text-white">Registration Successful!</h3>
                        <p class="text-[#475569] dark:text-[#94a3b8] mt-3">Welcome to the KESA family. You'll receive a confirmation email shortly.</p>
                        <a href="index.php" class="btn-primary mt-6">Return to Home</a>
                    </div>

                    <!-- Form -->
                    <form id="membership-form" novalidate>

                        <!-- ===== STEP 1: Personal Information ===== -->
                        <div class="form-step" data-step="1">
                            <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mb-6">Step 1 of 3 — Personal Information</p>
                            <div class="grid md:grid-cols-2 gap-5">
                                <div>
                                    <label class="form-label" for="fullname">Full Name *</label>
                                    <input type="text" id="fullname" name="fullname" class="form-input" required placeholder="e.g. John Doe" />
                                    <div class="form-error">Please enter your full name.</div>
                                </div>
                                <div>
                                    <label class="form-label" for="gender">Gender *</label>
                                    <select id="gender" name="gender" class="form-input" required>
                                        <option value="">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <div class="form-error">Please select your gender.</div>
                                </div>
                                <div>
                                    <label class="form-label" for="dob">Date of Birth *</label>
                                    <input type="date" id="dob" name="dob" class="form-input" required />
                                    <div class="form-error">Please enter your date of birth.</div>
                                </div>
                                <div>
                                    <label class="form-label" for="institution">Institution *</label>
                                    <input type="text" id="institution" name="institution" class="form-input" required placeholder="e.g. University of Keffi" />
                                    <div class="form-error">Please enter your institution.</div>
                                </div>
                                <div>
                                    <label class="form-label" for="course">Course of Study *</label>
                                    <input type="text" id="course" name="course" class="form-input" required placeholder="e.g. Computer Science" />
                                    <div class="form-error">Please enter your course of study.</div>
                                </div>
                                <div>
                                    <label class="form-label" for="level">Level *</label>
                                    <select id="level" name="level" class="form-input" required>
                                        <option value="">Select</option>
                                        <option value="100">100 Level</option>
                                        <option value="200">200 Level</option>
                                        <option value="300">300 Level</option>
                                        <option value="400">400 Level</option>
                                        <option value="500">500 Level</option>
                                        <option value="postgrad">Postgraduate</option>
                                        <option value="alumni">Alumni</option>
                                    </select>
                                    <div class="form-error">Please select your level.</div>
                                </div>
                            </div>
                            <div class="flex justify-end mt-6">
                                <button type="button" class="btn-primary next-step">
                                    Next Step <i class="fas fa-arrow-right ml-1"></i>
                                </button>
                            </div>
                        </div>

                        <!-- ===== STEP 2: Contact & Address ===== -->
                        <div class="form-step hidden" data-step="2">
                            <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mb-6">Step 2 of 3 — Contact &amp; Address</p>
                            <div class="grid md:grid-cols-2 gap-5">
                                <div>
                                    <label class="form-label" for="phone">Phone Number *</label>
                                    <input type="tel" id="phone" name="phone" class="form-input" required placeholder="e.g. 08012345678" />
                                    <div class="form-error">Please enter a valid phone number.</div>
                                </div>
                                <div>
                                    <label class="form-label" for="email">Email Address *</label>
                                    <input type="email" id="email" name="email" class="form-input" required placeholder="e.g. john@example.com" />
                                    <div class="form-error">Please enter a valid email address.</div>
                                </div>
                                <div class="md:col-span-2">
                                    <label class="form-label" for="address">Residential Address *</label>
                                    <input type="text" id="address" name="address" class="form-input" required placeholder="e.g. 123 Main Street, Keffi" />
                                    <div class="form-error">Please enter your residential address.</div>
                                </div>
                                <div>
                                    <label class="form-label" for="state">State of Origin *</label>
                                    <select id="state" name="state" class="form-input" required>
                                        <option value="">Select State</option>
                                        <option value="Abia">Abia</option>
                                        <option value="Adamawa">Adamawa</option>
                                        <option value="Akwa Ibom">Akwa Ibom</option>
                                        <option value="Anambra">Anambra</option>
                                        <option value="Bauchi">Bauchi</option>
                                        <option value="Bayelsa">Bayelsa</option>
                                        <option value="Benue">Benue</option>
                                        <option value="Borno">Borno</option>
                                        <option value="Cross River">Cross River</option>
                                        <option value="Delta">Delta</option>
                                        <option value="Ebonyi">Ebonyi</option>
                                        <option value="Edo">Edo</option>
                                        <option value="Ekiti">Ekiti</option>
                                        <option value="Enugu">Enugu</option>
                                        <option value="FCT">FCT</option>
                                        <option value="Gombe">Gombe</option>
                                        <option value="Imo">Imo</option>
                                        <option value="Jigawa">Jigawa</option>
                                        <option value="Kaduna">Kaduna</option>
                                        <option value="Kano">Kano</option>
                                        <option value="Katsina">Katsina</option>
                                        <option value="Kebbi">Kebbi</option>
                                        <option value="Kogi">Kogi</option>
                                        <option value="Kwara">Kwara</option>
                                        <option value="Lagos">Lagos</option>
                                        <option value="Nasarawa" selected>Nasarawa</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Ogun">Ogun</option>
                                        <option value="Ondo">Ondo</option>
                                        <option value="Osun">Osun</option>
                                        <option value="Oyo">Oyo</option>
                                        <option value="Plateau">Plateau</option>
                                        <option value="Rivers">Rivers</option>
                                        <option value="Sokoto">Sokoto</option>
                                        <option value="Taraba">Taraba</option>
                                        <option value="Yobe">Yobe</option>
                                        <option value="Zamfara">Zamfara</option>
                                    </select>
                                    <div class="form-error">Please select your state of origin.</div>
                                </div>
                                <div>
                                    <label class="form-label" for="passport">Passport Upload</label>
                                    <input type="file" id="passport" name="passport" class="form-input" accept="image/*" />
                                    <p class="form-hint">Optional. JPEG or PNG, max 5MB.</p>
                                </div>
                            </div>
                            <div class="flex justify-between mt-6">
                                <button type="button" class="btn-secondary prev-step">
                                    <i class="fas fa-arrow-left mr-1"></i> Back
                                </button>
                                <button type="button" class="btn-primary next-step">
                                    Next Step <i class="fas fa-arrow-right ml-1"></i>
                                </button>
                            </div>
                        </div>

                        <!-- ===== STEP 3: Review & Submit ===== -->
                        <div class="form-step hidden" data-step="3">
                            <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mb-6">Step 3 of 3 — Review &amp; Submit</p>

                            <div class="bg-[#f8fafc] dark:bg-[#1e293b] rounded-2xl p-6 mb-6">
                                <h4 class="font-poppins font-semibold text-[#0f172a] dark:text-white mb-4">Review Your Information</h4>
                                <div id="review-content" class="space-y-2 text-sm text-[#475569] dark:text-[#94a3b8]">
                                    <!-- Filled by JavaScript -->
                                    <p class="flex justify-between border-b border-[#e2e8f0] dark:border-[#334155] pb-2">
                                        <span class="font-medium">Full Name:</span>
                                        <span id="review-name">—</span>
                                    </p>
                                    <p class="flex justify-between border-b border-[#e2e8f0] dark:border-[#334155] pb-2">
                                        <span class="font-medium">Gender:</span>
                                        <span id="review-gender">—</span>
                                    </p>
                                    <p class="flex justify-between border-b border-[#e2e8f0] dark:border-[#334155] pb-2">
                                        <span class="font-medium">Date of Birth:</span>
                                        <span id="review-dob">—</span>
                                    </p>
                                    <p class="flex justify-between border-b border-[#e2e8f0] dark:border-[#334155] pb-2">
                                        <span class="font-medium">Institution:</span>
                                        <span id="review-institution">—</span>
                                    </p>
                                    <p class="flex justify-between border-b border-[#e2e8f0] dark:border-[#334155] pb-2">
                                        <span class="font-medium">Course:</span>
                                        <span id="review-course">—</span>
                                    </p>
                                    <p class="flex justify-between border-b border-[#e2e8f0] dark:border-[#334155] pb-2">
                                        <span class="font-medium">Level:</span>
                                        <span id="review-level">—</span>
                                    </p>
                                    <p class="flex justify-between border-b border-[#e2e8f0] dark:border-[#334155] pb-2">
                                        <span class="font-medium">Phone:</span>
                                        <span id="review-phone">—</span>
                                    </p>
                                    <p class="flex justify-between border-b border-[#e2e8f0] dark:border-[#334155] pb-2">
                                        <span class="font-medium">Email:</span>
                                        <span id="review-email">—</span>
                                    </p>
                                    <p class="flex justify-between border-b border-[#e2e8f0] dark:border-[#334155] pb-2">
                                        <span class="font-medium">Address:</span>
                                        <span id="review-address">—</span>
                                    </p>
                                    <p class="flex justify-between">
                                        <span class="font-medium">State of Origin:</span>
                                        <span id="review-state">—</span>
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3 mb-6">
                                <input type="checkbox" id="terms" name="terms" class="mt-1 w-5 h-5 rounded border-2 border-[#e2e8f0] focus:ring-2 focus:ring-[#0f766e] accent-[#0f766e]" required />
                                <label for="terms" class="text-sm text-[#475569] dark:text-[#94a3b8]">
                                    I confirm that all information provided is accurate and I agree to the
                                    <a href="#" class="text-[#0f766e] hover:underline">Terms &amp; Conditions</a>
                                    and <a href="#" class="text-[#0f766e] hover:underline">Privacy Policy</a>.
                                    <span class="text-[#ef4444]">*</span>
                                </label>
                            </div>
                            <div class="form-error text-center" id="terms-error">Please accept the terms to continue.</div>

                            <div class="flex justify-between mt-6">
                                <button type="button" class="btn-secondary prev-step">
                                    <i class="fas fa-arrow-left mr-1"></i> Back
                                </button>
                                <button type="submit" class="btn-primary" id="submit-btn">
                                    <i class="fas fa-check-circle mr-1"></i> Submit Registration
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16" data-aos="fade-up">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="font-poppins font-bold text-3xl text-[#0f172a] dark:text-white">Already a <span class="text-gradient">Member?</span></h2>
                <p class="text-[#475569] dark:text-[#94a3b8] mt-3">Log in to access exclusive resources, events, and opportunities.</p>
                <a href="#" class="btn-secondary mt-6">Member Login →</a>
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
        const currentPath = window.location.pathname.split('/').pop() || 'membership.php';
        document.querySelectorAll('.nav-link').forEach(link => {
            const href = link.getAttribute('href');
            if (href === currentPath) { link.classList.add('active'); } else { link.classList.remove('active'); }
        });

        // ──────────────────────────────────────────────────────────────
        // MULTI-STEP FORM
        // ──────────────────────────────────────────────────────────────
        const form = document.getElementById('membership-form');
        const steps = document.querySelectorAll('.form-step');
        const progressSteps = document.querySelectorAll('.progress-step');
        const progressLines = document.querySelectorAll('.progress-line');
        const nextBtns = document.querySelectorAll('.next-step');
        const prevBtns = document.querySelectorAll('.prev-step');
        const submitBtn = document.getElementById('submit-btn');
        const successMsg = document.getElementById('success-message');
        let currentStep = 1;
        const totalSteps = 3;

        function updateProgress(step) {
            progressSteps.forEach((el, idx) => {
                const num = idx + 1;
                el.classList.remove('active', 'completed', 'inactive');
                if (num === step) el.classList.add('active');
                else if (num < step) el.classList.add('completed');
                else el.classList.add('inactive');
            });
            progressLines.forEach((el, idx) => {
                if (idx < step - 1) el.classList.add('completed');
                else el.classList.remove('completed');
            });
        }

        function showStep(step) {
            steps.forEach(el => {
                el.classList.add('hidden');
                if (parseInt(el.dataset.step) === step) el.classList.remove('hidden');
            });
            updateProgress(step);
            currentStep = step;
            // Scroll to top of form
            document.querySelector('.glass').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        function validateStep(step) {
            const currentStepEl = document.querySelector(`.form-step[data-step="${step}"]`);
            const inputs = currentStepEl.querySelectorAll('input, select');
            let valid = true;
            inputs.forEach(inp => {
                if (inp.hasAttribute('required') && !inp.value.trim()) {
                    inp.classList.add('error');
                    valid = false;
                } else {
                    inp.classList.remove('error');
                }
                // Special validation for email
                if (inp.type === 'email' && inp.value.trim() && !inp.value.includes('@')) {
                    inp.classList.add('error');
                    valid = false;
                }
            });
            // Check terms on step 3
            if (step === 3) {
                const terms = document.getElementById('terms');
                const termsError = document.getElementById('terms-error');
                if (!terms.checked) {
                    termsError.style.display = 'block';
                    valid = false;
                } else {
                    termsError.style.display = 'none';
                }
            }
            return valid;
        }

        // Next buttons
        nextBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const step = parseInt(this.closest('.form-step').dataset.step);
                if (validateStep(step)) {
                    if (step < totalSteps) showStep(step + 1);
                } else {
                    showToast('⚠️ Please fill in all required fields correctly.', 'error');
                }
            });
        });

        // Previous buttons
        prevBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const step = parseInt(this.closest('.form-step').dataset.step);
                if (step > 1) showStep(step - 1);
            });
        });

        // Update review content when moving to step 3
        function updateReview() {
            const getVal = (id) => document.getElementById(id)?.value || '—';
            const genderMap = { male: 'Male', female: 'Female', other: 'Other' };
            const levelMap = {
                '100': '100 Level',
                '200': '200 Level',
                '300': '300 Level',
                '400': '400 Level',
                '500': '500 Level',
                'postgrad': 'Postgraduate',
                'alumni': 'Alumni'
            };

            document.getElementById('review-name').textContent = getVal('fullname');
            document.getElementById('review-gender').textContent = genderMap[getVal('gender')] || getVal('gender');
            document.getElementById('review-dob').textContent = getVal('dob');
            document.getElementById('review-institution').textContent = getVal('institution');
            document.getElementById('review-course').textContent = getVal('course');
            document.getElementById('review-level').textContent = levelMap[getVal('level')] || getVal('level');
            document.getElementById('review-phone').textContent = getVal('phone');
            document.getElementById('review-email').textContent = getVal('email');
            document.getElementById('review-address').textContent = getVal('address');
            document.getElementById('review-state').textContent = getVal('state');
        }

        // Override showStep to update review when going to step 3
        const originalShowStep = showStep;
        showStep = function(step) {
            if (step === 3) updateReview();
            originalShowStep(step);
        };

        // Also update review when going to step 3 via next button
        nextBtns.forEach(btn => {
            const origClick = btn.click;
            btn.addEventListener('click', function(e) {
                const step = parseInt(this.closest('.form-step').dataset.step);
                if (step === 2 && validateStep(2)) {
                    // Will show step 3 after validation
                    setTimeout(updateReview, 100);
                }
            });
        });

        // ──────────────────────────────────────────────────────────────
        // FORM SUBMISSION
        // ──────────────────────────────────────────────────────────────
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Validate step 3
            if (!validateStep(3)) {
                showToast('⚠️ Please accept the terms and complete all fields.', 'error');
                return;
            }

            // Simulate submission
            const btn = document.getElementById('submit-btn');
            btn.disabled = true;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-1"></i> Submitting...';

            setTimeout(() => {
                // Hide form, show success
                form.style.display = 'none';
                document.querySelector('.progress-step, .progress-line').forEach(el => {
                    if (el.closest('#progress-indicator')) el.style.display = 'none';
                });
                document.querySelector('#progress-indicator').style.display = 'none';
                successMsg.classList.add('show');
                showToast('🎉 Registration successful! Welcome to KESA.', 'success');
                btn.disabled = false;
                btn.innerHTML = '<i class="fas fa-check-circle mr-1"></i> Submit Registration';
            }, 1500);
        });

        // ──────────────────────────────────────────────────────────────
        // INIT
        // ──────────────────────────────────────────────────────────────
        showStep(1);

        console.log('🚀 Membership page loaded successfully!');
    </script>

</body>
</html>