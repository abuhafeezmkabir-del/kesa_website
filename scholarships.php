<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scholarships - KESA</title>
    <meta name="description" content="Discover scholarships, grants, and funding opportunities for students through the Keffi Students Association. Apply now for educational support." />
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

        /* ── Scholarship Card ── */
        .scholarship-card { position: relative; overflow: hidden; }
        .scholarship-card .deadline-badge { position: absolute; top: 1rem; right: 1rem; z-index: 10; font-size: 0.65rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; padding: 0.3rem 0.8rem; border-radius: 9999px; }
        .scholarship-card .deadline-badge.urgent { background: #ef4444; color: #fff; animation: pulse-badge 2s ease-in-out infinite; }
        .scholarship-card .deadline-badge.open { background: #22c55e; color: #fff; }
        .scholarship-card .deadline-badge.closed { background: #64748b; color: #fff; }
        @keyframes pulse-badge { 0%,100% { opacity: 1; } 50% { opacity: 0.7; } }
        .scholarship-card .amount { font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 1.5rem; color: #0f766e; }
        html.dark .scholarship-card .amount { color: #0f766e; }

        /* ── Filter Buttons ── */
        .filter-btn { padding: 0.5rem 1.25rem; border-radius: 9999px; font-weight: 500; font-size: 0.8rem; transition: all 0.3s ease; border: 2px solid #e2e8f0; background: transparent; color: #64748b; cursor: pointer; }
        .filter-btn:hover { border-color: #0f766e; color: #0f766e; }
        .filter-btn.active { background: #0f766e; color: #fff; border-color: #0f766e; }
        html.dark .filter-btn { border-color: #334155; color: #94a3b8; }
        html.dark .filter-btn.active { background: #0f766e; color: #fff; border-color: #0f766e; }

        /* ── Application Modal ── */
        #apply-modal { position: fixed; inset: 0; z-index: 10000; background: rgba(0,0,0,0.6); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); display: flex; align-items: center; justify-content: center; opacity: 0; visibility: hidden; transition: all 0.3s ease; }
        #apply-modal.open { opacity: 1; visibility: visible; }
        #apply-modal .modal-content { background: #fff; border-radius: 2rem; padding: 2rem; max-width: 550px; width: 90%; transform: scale(0.9) translateY(20px); transition: transform 0.3s ease; max-height: 90vh; overflow-y: auto; }
        #apply-modal.open .modal-content { transform: scale(1) translateY(0); }
        html.dark #apply-modal .modal-content { background: #1e293b; }

        /* ── Responsive ── */
        @media (max-width: 640px) {
            #whatsapp-float { width: 52px; height: 52px; font-size: 24px; bottom: 20px; right: 20px; }
            #back-to-top { width: 42px; height: 42px; font-size: 16px; bottom: 80px; right: 20px; }
            .scholarship-card .amount { font-size: 1.25rem; }
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
                    <li><a href="scholarships.php" class="nav-link active">Scholarships</a></li>
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
            <a href="membership.php" class="nav-link text-lg">Membership</a>
            <a href="events.php" class="nav-link text-lg">Events</a>
            <a href="scholarships.php" class="nav-link active text-lg">Scholarships</a>
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
                <input type="text" placeholder="Search for scholarships, grants, opportunities..." aria-label="Search query" />
                <div class="mt-4 flex justify-end">
                    <button type="submit" class="btn-primary text-sm px-6 py-2.5">
                        <i class="fas fa-search"></i> Search
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- ===== APPLICATION MODAL ===== -->
    <div id="apply-modal" role="dialog" aria-modal="true" aria-label="Scholarship Application">
        <div class="modal-content">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-poppins font-bold text-xl text-[#0f172a] dark:text-white">Apply for Scholarship</h3>
                <button id="apply-close" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" aria-label="Close application">
                    <i class="fas fa-times text-[#334155] dark:text-[#94a3b8] text-xl"></i>
                </button>
            </div>
            <form id="apply-form" novalidate>
                <div class="mb-4">
                    <label class="form-label" for="apply-name">Full Name *</label>
                    <input type="text" id="apply-name" name="apply-name" class="form-input" required placeholder="e.g. John Doe" />
                    <div class="form-error">Please enter your full name.</div>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="apply-email">Email Address *</label>
                    <input type="email" id="apply-email" name="apply-email" class="form-input" required placeholder="e.g. john@example.com" />
                    <div class="form-error">Please enter a valid email address.</div>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="apply-phone">Phone Number *</label>
                    <input type="tel" id="apply-phone" name="apply-phone" class="form-input" required placeholder="e.g. 08012345678" />
                    <div class="form-error">Please enter your phone number.</div>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="apply-institution">Institution *</label>
                    <input type="text" id="apply-institution" name="apply-institution" class="form-input" required placeholder="e.g. University of Keffi" />
                    <div class="form-error">Please enter your institution.</div>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="apply-course">Course of Study *</label>
                    <input type="text" id="apply-course" name="apply-course" class="form-input" required placeholder="e.g. Computer Science" />
                    <div class="form-error">Please enter your course of study.</div>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="apply-scholarship">Scholarship *</label>
                    <select id="apply-scholarship" name="apply-scholarship" class="form-input" required>
                        <option value="">Select a scholarship</option>
                        <option value="kesa-excellence">KESA Excellence Scholarship</option>
                        <option value="leadership-internship">Leadership Internship Program</option>
                        <option value="community-impact">Community Impact Grant</option>
                        <option value="stem-scholarship">STEM Excellence Scholarship</option>
                    </select>
                    <div class="form-error">Please select a scholarship.</div>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="apply-message">Why do you deserve this scholarship?</label>
                    <textarea id="apply-message" name="apply-message" class="form-input" rows="3" placeholder="Tell us about your achievements, goals, and why you're a good candidate..."></textarea>
                </div>
                <button type="submit" class="btn-primary w-full justify-center">
                    <i class="fas fa-paper-plane mr-1"></i> Submit Application
                </button>
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
                    <i class="fas fa-graduation-cap text-sm"></i>
                    <span>Funding Opportunities</span>
                </div>
                <h1 class="font-poppins font-bold text-4xl sm:text-5xl lg:text-6xl text-[#0f172a] dark:text-white mt-2">
                    <span class="text-gradient">Scholarships</span> &amp; Grants
                </h1>
                <p class="text-[#475569] dark:text-[#94a3b8] mt-4 max-w-2xl mx-auto leading-relaxed text-lg">
                    Explore funding opportunities, scholarships, and grants to support your educational journey. Apply now and take the next step toward your future.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4 mt-6 text-sm text-[#64748b] dark:text-[#94a3b8]">
                    <span class="flex items-center gap-1.5"><i class="fas fa-money-bill-wave text-[#0f766e]"></i> 8+ Opportunities</span>
                    <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                    <span class="flex items-center gap-1.5"><i class="fas fa-clock text-[#0f766e]"></i> 3 Open Applications</span>
                    <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                    <span class="flex items-center gap-1.5"><i class="fas fa-users text-[#0f766e]"></i> 200+ Awarded</span>
                </div>
            </div>
        </section>

        <!-- ===== FILTERS & SEARCH ===== -->
        <section class="py-6 border-b border-[#e2e8f0] dark:border-[#334155] bg-white/50 dark:bg-[#0f172a]/50 backdrop-blur-sm sticky top-16 lg:top-20 z-30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="flex flex-wrap items-center justify-center gap-2">
                        <button class="filter-btn active" data-filter="all">All</button>
                        <button class="filter-btn" data-filter="open">Open</button>
                        <button class="filter-btn" data-filter="closing">Closing Soon</button>
                        <button class="filter-btn" data-filter="closed">Closed</button>
                        <button class="filter-btn" data-filter="undergraduate">Undergraduate</button>
                        <button class="filter-btn" data-filter="postgraduate">Postgraduate</button>
                    </div>
                    <div class="relative w-full sm:w-auto">
                        <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-[#64748b] dark:text-[#94a3b8] text-sm"></i>
                        <input type="text" id="scholarship-search" placeholder="Search scholarships..." class="form-input rounded-full pl-9 pr-4 py-2 text-sm w-full sm:w-56" />
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== SCHOLARSHIPS GRID ===== -->
        <section class="py-16 lg:py-20" data-aos="fade-up">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" id="scholarships-grid">

                    <!-- Scholarship 1: KESA Excellence -->
                    <div class="glass rounded-2xl p-6 card-hover scholarship-card" data-category="open undergraduate" data-aos="fade-up" data-aos-delay="0">
                        <span class="deadline-badge open"><i class="fas fa-check-circle mr-1"></i> Open</span>
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="text-xs font-semibold bg-[#0f766e]/10 text-[#0f766e] px-3 py-1 rounded-full">🎓 Education</span>
                                <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white mt-3">KESA Excellence Scholarship</h4>
                            </div>
                            <span class="amount">₦500K</span>
                        </div>
                        <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed">Full tuition coverage for outstanding students demonstrating academic excellence and leadership potential.</p>
                        <div class="flex items-center gap-3 mt-3 text-xs text-[#64748b] dark:text-[#94a3b8]">
                            <span><i class="fas fa-calendar-alt text-[#f59e0b] mr-1"></i> Deadline: Jul 30, 2026</span>
                            <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                            <span><i class="fas fa-user-graduate text-[#0f766e] mr-1"></i> Undergraduate</span>
                        </div>
                        <div class="mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155] flex items-center justify-between">
                            <span class="text-xs text-[#64748b] dark:text-[#94a3b8]"><i class="fas fa-building mr-1"></i> Multiple Universities</span>
                            <button class="btn-primary text-sm px-4 py-2 apply-btn" data-scholarship="KESA Excellence Scholarship">Apply Now</button>
                        </div>
                    </div>

                    <!-- Scholarship 2: Leadership Internship -->
                    <div class="glass rounded-2xl p-6 card-hover scholarship-card" data-category="open postgraduate" data-aos="fade-up" data-aos-delay="100">
                        <span class="deadline-badge open"><i class="fas fa-check-circle mr-1"></i> Open</span>
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="text-xs font-semibold bg-[#2563eb]/10 text-[#2563eb] px-3 py-1 rounded-full">💼 Career</span>
                                <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white mt-3">Leadership Internship Program</h4>
                            </div>
                            <span class="amount">₦300K</span>
                        </div>
                        <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed">Paid internships with top partner organizations, offering real-world experience and mentorship.</p>
                        <div class="flex items-center gap-3 mt-3 text-xs text-[#64748b] dark:text-[#94a3b8]">
                            <span><i class="fas fa-calendar-alt text-[#f59e0b] mr-1"></i> Deadline: Aug 15, 2026</span>
                            <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                            <span><i class="fas fa-user-graduate text-[#0f766e] mr-1"></i> Postgraduate</span>
                        </div>
                        <div class="mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155] flex items-center justify-between">
                            <span class="text-xs text-[#64748b] dark:text-[#94a3b8]"><i class="fas fa-building mr-1"></i> Partner Orgs</span>
                            <button class="btn-primary text-sm px-4 py-2 apply-btn" data-scholarship="Leadership Internship Program">Apply Now</button>
                        </div>
                    </div>

                    <!-- Scholarship 3: Community Impact -->
                    <div class="glass rounded-2xl p-6 card-hover scholarship-card" data-category="open undergraduate" data-aos="fade-up" data-aos-delay="200">
                        <span class="deadline-badge open"><i class="fas fa-check-circle mr-1"></i> Open</span>
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="text-xs font-semibold bg-[#f59e0b]/10 text-[#f59e0b] px-3 py-1 rounded-full">🌍 Community</span>
                                <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white mt-3">Community Impact Grant</h4>
                            </div>
                            <span class="amount">₦200K</span>
                        </div>
                        <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed">Funding for student-led community projects that create positive social impact in Keffi and beyond.</p>
                        <div class="flex items-center gap-3 mt-3 text-xs text-[#64748b] dark:text-[#94a3b8]">
                            <span><i class="fas fa-calendar-alt text-[#f59e0b] mr-1"></i> Deadline: Sep 1, 2026</span>
                            <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                            <span><i class="fas fa-user-graduate text-[#0f766e] mr-1"></i> All Levels</span>
                        </div>
                        <div class="mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155] flex items-center justify-between">
                            <span class="text-xs text-[#64748b] dark:text-[#94a3b8]"><i class="fas fa-users mr-1"></i> Student-Led</span>
                            <button class="btn-primary text-sm px-4 py-2 apply-btn" data-scholarship="Community Impact Grant">Apply Now</button>
                        </div>
                    </div>

                    <!-- Scholarship 4: STEM Excellence -->
                    <div class="glass rounded-2xl p-6 card-hover scholarship-card" data-category="closing undergraduate" data-aos="fade-up" data-aos-delay="300">
                        <span class="deadline-badge urgent"><i class="fas fa-exclamation-triangle mr-1"></i> Closing Soon</span>
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="text-xs font-semibold bg-[#0f766e]/10 text-[#0f766e] px-3 py-1 rounded-full">🔬 STEM</span>
                                <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white mt-3">STEM Excellence Scholarship</h4>
                            </div>
                            <span class="amount">₦400K</span>
                        </div>
                        <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed">Supporting students in Science, Technology, Engineering, and Mathematics with outstanding potential.</p>
                        <div class="flex items-center gap-3 mt-3 text-xs text-[#64748b] dark:text-[#94a3b8]">
                            <span><i class="fas fa-calendar-alt text-[#ef4444] mr-1"></i> Deadline: Jun 30, 2026</span>
                            <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                            <span><i class="fas fa-user-graduate text-[#0f766e] mr-1"></i> Undergraduate</span>
                        </div>
                        <div class="mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155] flex items-center justify-between">
                            <span class="text-xs text-[#64748b] dark:text-[#94a3b8]"><i class="fas fa-building mr-1"></i> STEM Universities</span>
                            <button class="btn-primary text-sm px-4 py-2 apply-btn" data-scholarship="STEM Excellence Scholarship">Apply Now</button>
                        </div>
                    </div>

                    <!-- Scholarship 5: Women in Leadership -->
                    <div class="glass rounded-2xl p-6 card-hover scholarship-card" data-category="closing postgraduate" data-aos="fade-up" data-aos-delay="400">
                        <span class="deadline-badge urgent"><i class="fas fa-exclamation-triangle mr-1"></i> Closing Soon</span>
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="text-xs font-semibold bg-[#2563eb]/10 text-[#2563eb] px-3 py-1 rounded-full">👩‍🎓 Leadership</span>
                                <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white mt-3">Women in Leadership Grant</h4>
                            </div>
                            <span class="amount">₦350K</span>
                        </div>
                        <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed">Empowering female students to pursue leadership roles through mentorship and financial support.</p>
                        <div class="flex items-center gap-3 mt-3 text-xs text-[#64748b] dark:text-[#94a3b8]">
                            <span><i class="fas fa-calendar-alt text-[#ef4444] mr-1"></i> Deadline: Jul 5, 2026</span>
                            <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                            <span><i class="fas fa-user-graduate text-[#0f766e] mr-1"></i> Postgraduate</span>
                        </div>
                        <div class="mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155] flex items-center justify-between">
                            <span class="text-xs text-[#64748b] dark:text-[#94a3b8]"><i class="fas fa-venus mr-1"></i> Female Students</span>
                            <button class="btn-primary text-sm px-4 py-2 apply-btn" data-scholarship="Women in Leadership Grant">Apply Now</button>
                        </div>
                    </div>

                    <!-- Scholarship 6: International Study -->
                    <div class="glass rounded-2xl p-6 card-hover scholarship-card" data-category="closed postgraduate" data-aos="fade-up" data-aos-delay="500">
                        <span class="deadline-badge closed"><i class="fas fa-times-circle mr-1"></i> Closed</span>
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="text-xs font-semibold bg-[#f59e0b]/10 text-[#f59e0b] px-3 py-1 rounded-full">🌍 Global</span>
                                <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white mt-3">International Study Scholarship</h4>
                            </div>
                            <span class="amount">₦1M</span>
                        </div>
                        <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed">Full funding for postgraduate study abroad at partner international universities.</p>
                        <div class="flex items-center gap-3 mt-3 text-xs text-[#64748b] dark:text-[#94a3b8]">
                            <span><i class="fas fa-calendar-alt text-[#64748b] mr-1"></i> Deadline: May 15, 2026</span>
                            <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                            <span><i class="fas fa-user-graduate text-[#0f766e] mr-1"></i> Postgraduate</span>
                        </div>
                        <div class="mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155] flex items-center justify-between">
                            <span class="text-xs font-medium text-[#64748b] dark:text-[#94a3b8]"><i class="fas fa-lock mr-1"></i> Applications Closed</span>
                            <span class="text-xs text-[#64748b] dark:text-[#94a3b8]">2026 Intake</span>
                        </div>
                    </div>

                    <!-- Scholarship 7: Arts & Humanities -->
                    <div class="glass rounded-2xl p-6 card-hover scholarship-card" data-category="closed undergraduate" data-aos="fade-up" data-aos-delay="600">
                        <span class="deadline-badge closed"><i class="fas fa-times-circle mr-1"></i> Closed</span>
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="text-xs font-semibold bg-[#0f766e]/10 text-[#0f766e] px-3 py-1 rounded-full">🎨 Arts</span>
                                <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white mt-3">Arts &amp; Humanities Grant</h4>
                            </div>
                            <span class="amount">₦250K</span>
                        </div>
                        <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed">Supporting creative talent and scholarly work in the arts and humanities fields.</p>
                        <div class="flex items-center gap-3 mt-3 text-xs text-[#64748b] dark:text-[#94a3b8]">
                            <span><i class="fas fa-calendar-alt text-[#64748b] mr-1"></i> Deadline: Apr 30, 2026</span>
                            <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                            <span><i class="fas fa-user-graduate text-[#0f766e] mr-1"></i> Undergraduate</span>
                        </div>
                        <div class="mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155] flex items-center justify-between">
                            <span class="text-xs font-medium text-[#64748b] dark:text-[#94a3b8]"><i class="fas fa-lock mr-1"></i> Applications Closed</span>
                            <span class="text-xs text-[#64748b] dark:text-[#94a3b8]">2026 Intake</span>
                        </div>
                    </div>

                    <!-- Scholarship 8: Entrepreneurship -->
                    <div class="glass rounded-2xl p-6 card-hover scholarship-card" data-category="closed undergraduate" data-aos="fade-up" data-aos-delay="700">
                        <span class="deadline-badge closed"><i class="fas fa-times-circle mr-1"></i> Closed</span>
                        <div class="flex items-start justify-between">
                            <div>
                                <span class="text-xs font-semibold bg-[#2563eb]/10 text-[#2563eb] px-3 py-1 rounded-full">🚀 Innovation</span>
                                <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white mt-3">Youth Entrepreneurship Fund</h4>
                            </div>
                            <span class="amount">₦500K</span>
                        </div>
                        <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-2 leading-relaxed">Seed funding for student entrepreneurs to launch and grow innovative business ideas.</p>
                        <div class="flex items-center gap-3 mt-3 text-xs text-[#64748b] dark:text-[#94a3b8]">
                            <span><i class="fas fa-calendar-alt text-[#64748b] mr-1"></i> Deadline: Mar 31, 2026</span>
                            <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                            <span><i class="fas fa-user-graduate text-[#0f766e] mr-1"></i> All Levels</span>
                        </div>
                        <div class="mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155] flex items-center justify-between">
                            <span class="text-xs font-medium text-[#64748b] dark:text-[#94a3b8]"><i class="fas fa-lock mr-1"></i> Applications Closed</span>
                            <span class="text-xs text-[#64748b] dark:text-[#94a3b8]">2026 Intake</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ===== APPLICATION PROCESS ===== -->
        <section class="py-16 lg:py-20 section-bg" data-aos="fade-up">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="inline-block text-[#0f766e] dark:text-[#0f766e] font-semibold text-sm tracking-wider uppercase">How It Works</span>
                    <h2 class="font-poppins font-bold text-3xl sm:text-4xl text-[#0f172a] dark:text-white mt-2">
                        Application <span class="text-gradient">Process</span>
                    </h2>
                    <p class="text-[#475569] dark:text-[#94a3b8] mt-3">Follow these simple steps to apply for any scholarship or grant opportunity.</p>
                </div>

                <div class="grid md:grid-cols-4 gap-6 max-w-5xl mx-auto">
                    <div class="glass rounded-2xl p-6 text-center card-hover" data-aos="fade-up" data-aos-delay="0">
                        <div class="w-14 h-14 rounded-full bg-[#0f766e]/10 flex items-center justify-center text-2xl mx-auto mb-4">🔍</div>
                        <h4 class="font-poppins font-bold text-[#0f172a] dark:text-white">1. Explore</h4>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mt-1">Browse available scholarships and find the right opportunity for you.</p>
                    </div>
                    <div class="glass rounded-2xl p-6 text-center card-hover" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-14 h-14 rounded-full bg-[#2563eb]/10 flex items-center justify-center text-2xl mx-auto mb-4">📝</div>
                        <h4 class="font-poppins font-bold text-[#0f172a] dark:text-white">2. Apply</h4>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mt-1">Complete the online application form with your details and supporting documents.</p>
                    </div>
                    <div class="glass rounded-2xl p-6 text-center card-hover" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-14 h-14 rounded-full bg-[#f59e0b]/10 flex items-center justify-center text-2xl mx-auto mb-4">📋</div>
                        <h4 class="font-poppins font-bold text-[#0f172a] dark:text-white">3. Review</h4>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mt-1">Our committee reviews applications and selects qualified candidates.</p>
                    </div>
                    <div class="glass rounded-2xl p-6 text-center card-hover" data-aos="fade-up" data-aos-delay="300">
                        <div class="w-14 h-14 rounded-full bg-[#0f766e]/10 flex items-center justify-center text-2xl mx-auto mb-4">🎉</div>
                        <h4 class="font-poppins font-bold text-[#0f172a] dark:text-white">4. Award</h4>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mt-1">Successful applicants receive funding and support to achieve their goals.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== SUCCESS STORIES ===== -->
        <section class="py-16 lg:py-20" data-aos="fade-up">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="inline-block text-[#0f766e] dark:text-[#0f766e] font-semibold text-sm tracking-wider uppercase">Success Stories</span>
                    <h2 class="font-poppins font-bold text-3xl sm:text-4xl text-[#0f172a] dark:text-white mt-2">
                        Scholarship <span class="text-gradient">Recipients</span>
                    </h2>
                    <p class="text-[#475569] dark:text-[#94a3b8] mt-3">Real stories of students whose lives were transformed through KESA scholarships.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                    <div class="glass rounded-2xl p-6 card-hover text-center" data-aos="flip-up" data-aos-delay="0">
                        <div class="w-20 h-20 rounded-full mx-auto overflow-hidden border-3 border-[#0f766e]/20 mb-4">
                            <img src="https://images.unsplash.com/photo-1494790108374-be9c7b2930e6?w=200&q=80" alt="Recipient" class="w-full h-full object-cover" loading="lazy" />
                        </div>
                        <h5 class="font-poppins font-bold text-[#0f172a] dark:text-white">Aisha Mohammed</h5>
                        <p class="text-xs font-medium text-[#0f766e]">KESA Excellence Scholar</p>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mt-2 leading-relaxed">"This scholarship made it possible for me to complete my degree without financial stress. I'm now pursuing my master's."</p>
                        <div class="mt-3 text-xs text-[#0f766e]">⭐ ⭐ ⭐ ⭐ ⭐</div>
                    </div>
                    <div class="glass rounded-2xl p-6 card-hover text-center" data-aos="flip-up" data-aos-delay="100">
                        <div class="w-20 h-20 rounded-full mx-auto overflow-hidden border-3 border-[#2563eb]/20 mb-4">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&q=80" alt="Recipient" class="w-full h-full object-cover" loading="lazy" />
                        </div>
                        <h5 class="font-poppins font-bold text-[#0f172a] dark:text-white">Dr. Ibrahim Bello</h5>
                        <p class="text-xs font-medium text-[#2563eb]">Leadership Internship Alumnus</p>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mt-2 leading-relaxed">"The internship program opened doors I never knew existed. I now lead a team at a top tech company."</p>
                        <div class="mt-3 text-xs text-[#2563eb]">⭐ ⭐ ⭐ ⭐ ⭐</div>
                    </div>
                    <div class="glass rounded-2xl p-6 card-hover text-center" data-aos="flip-up" data-aos-delay="200">
                        <div class="w-20 h-20 rounded-full mx-auto overflow-hidden border-3 border-[#f59e0b]/20 mb-4">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=200&q=80" alt="Recipient" class="w-full h-full object-cover" loading="lazy" />
                        </div>
                        <h5 class="font-poppins font-bold text-[#0f172a] dark:text-white">Fatima Suleiman</h5>
                        <p class="text-xs font-medium text-[#f59e0b]">Community Impact Grant Winner</p>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mt-2 leading-relaxed">"The grant funded my community project, which has now helped over 200 young people in Keffi gain skills."</p>
                        <div class="mt-3 text-xs text-[#f59e0b]">⭐ ⭐ ⭐ ⭐ ⭐</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== FAQ SECTION ===== -->
        <section class="py-16 lg:py-20 section-bg" data-aos="fade-up">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="inline-block text-[#0f766e] dark:text-[#0f766e] font-semibold text-sm tracking-wider uppercase">FAQ</span>
                    <h2 class="font-poppins font-bold text-3xl sm:text-4xl text-[#0f172a] dark:text-white mt-2">
                        Frequently Asked <span class="text-gradient">Questions</span>
                    </h2>
                </div>

                <div class="space-y-4">
                    <div class="glass rounded-2xl p-6 card-hover" data-aos="fade-up" data-aos-delay="0">
                        <h4 class="font-poppins font-semibold text-[#0f172a] dark:text-white flex items-center gap-2">
                            <i class="fas fa-question-circle text-[#0f766e]"></i> Who is eligible to apply?
                        </h4>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mt-2 leading-relaxed">Eligibility varies by scholarship. Most opportunities are open to registered KESA members, students of Keffi institutions, and sometimes alumni. Check each scholarship's specific requirements.</p>
                    </div>
                    <div class="glass rounded-2xl p-6 card-hover" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="font-poppins font-semibold text-[#0f172a] dark:text-white flex items-center gap-2">
                            <i class="fas fa-question-circle text-[#0f766e]"></i> How do I apply for a scholarship?
                        </h4>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mt-2 leading-relaxed">Click the "Apply Now" button on any open scholarship card. Complete the application form with your personal details, academic information, and a motivation statement.</p>
                    </div>
                    <div class="glass rounded-2xl p-6 card-hover" data-aos="fade-up" data-aos-delay="200">
                        <h4 class="font-poppins font-semibold text-[#0f172a] dark:text-white flex items-center gap-2">
                            <i class="fas fa-question-circle text-[#0f766e]"></i> What documents do I need?
                        </h4>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mt-2 leading-relaxed">Typically, you'll need academic transcripts, a CV/resume, a personal statement, and reference letters. Specific requirements are listed on each scholarship page.</p>
                    </div>
                    <div class="glass rounded-2xl p-6 card-hover" data-aos="fade-up" data-aos-delay="300">
                        <h4 class="font-poppins font-semibold text-[#0f172a] dark:text-white flex items-center gap-2">
                            <i class="fas fa-question-circle text-[#0f766e]"></i> When will I know the outcome?
                        </h4>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] mt-2 leading-relaxed">Successful applicants are typically notified within 4-6 weeks after the application deadline. You'll receive an email with the outcome and next steps.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CTA ===== -->
        <section class="py-20 relative overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);" data-aos="fade-up">
            <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-white/80 px-4 py-1.5 rounded-full text-sm font-medium border border-white/10 mb-4">
                    <i class="fas fa-graduation-cap text-[#f59e0b]"></i>
                    <span>Invest in Your Future</span>
                </div>
                <h2 class="font-poppins font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white leading-tight">
                    Ready to <span class="text-[#f59e0b]">Apply?</span>
                </h2>
                <p class="text-white/80 text-lg sm:text-xl mt-4 max-w-2xl mx-auto">
                    Don't miss out on these life-changing opportunities. Apply for a scholarship today and take the next step toward your dreams.
                </p>
                <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <a href="#scholarships-grid" class="btn-accent text-base px-10 py-3.5 scroll-link">
                        <i class="fas fa-search"></i> Browse Scholarships
                    </a>
                    <a href="membership.php" class="bg-white/10 backdrop-blur-sm text-white border border-white/20 px-10 py-3.5 rounded-full font-semibold text-base hover:bg-white/20 transition-all inline-flex items-center gap-2">
                        <i class="fas fa-user-plus"></i> Join KESA
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
        // SCHOLARSHIP FILTERS & SEARCH
        // ──────────────────────────────────────────────────────────────
        const filterBtns = document.querySelectorAll('.filter-btn');
        const scholarshipCards = document.querySelectorAll('.scholarship-card');
        const searchInput = document.getElementById('scholarship-search');

        function filterScholarships() {
            const activeFilter = document.querySelector('.filter-btn.active')?.dataset.filter || 'all';
            const query = searchInput.value.toLowerCase().trim();

            scholarshipCards.forEach(card => {
                const categories = card.dataset.category.split(' ');
                const matchesFilter = activeFilter === 'all' || categories.includes(activeFilter);
                const text = card.textContent.toLowerCase();
                const matchesSearch = !query || text.includes(query);

                if (matchesFilter && matchesSearch) {
                    card.style.display = 'block';
                    card.style.opacity = '1';
                } else {
                    card.style.opacity = '0';
                    setTimeout(() => { card.style.display = 'none'; }, 300);
                }
            });
        }

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                filterScholarships();
            });
        });

        searchInput.addEventListener('input', filterScholarships);

        // ──────────────────────────────────────────────────────────────
        // APPLICATION MODAL
        // ──────────────────────────────────────────────────────────────
        const applyModal = document.getElementById('apply-modal');
        const applyClose = document.getElementById('apply-close');
        const applyForm = document.getElementById('apply-form');

        document.querySelectorAll('.apply-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const scholarship = this.dataset.scholarship;
                applyModal.classList.add('open');
                document.body.style.overflow = 'hidden';
                // Set the scholarship in the dropdown
                const select = document.getElementById('apply-scholarship');
                const options = select.options;
                for (let i = 0; i < options.length; i++) {
                    if (options[i].textContent.includes(scholarship.split(' ')[0]) || options[i].textContent ===
                        scholarship) {
                        select.value = options[i].value;
                        break;
                    }
                }
            });
        });

        applyClose.addEventListener('click', () => {
            applyModal.classList.remove('open');
            document.body.style.overflow = '';
        });
        applyModal.addEventListener('click', (e) => { if (e.target === applyModal) { applyModal.classList.remove('open');
                document.body.style.overflow = ''; } });

        applyForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const inputs = this.querySelectorAll('.form-input');
            let valid = true;
            inputs.forEach(inp => {
                if (inp.hasAttribute('required') && !inp.value.trim()) {
                    inp.classList.add('error');
                    valid = false;
                } else { inp.classList.remove('error'); }
            });
            if (valid) {
                showToast('✅ Application submitted successfully! Check your email for confirmation.', 'success');
                applyModal.classList.remove('open');
                document.body.style.overflow = '';
                applyForm.reset();
            } else {
                showToast('⚠️ Please fill in all required fields.', 'error');
            }
        });

        // ──────────────────────────────────────────────────────────────
        // SMOOTH SCROLL FOR CTA LINK
        // ──────────────────────────────────────────────────────────────
        document.querySelectorAll('.scroll-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
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
        const currentPath = window.location.pathname.split('/').pop() || 'scholarships.php';
        document.querySelectorAll('.nav-link').forEach(link => {
            const href = link.getAttribute('href');
            if (href === currentPath) { link.classList.add('active'); } else { link.classList.remove('active'); }
        });

        console.log('🚀 Scholarships page loaded successfully!');
    </script>
</body>
</html>