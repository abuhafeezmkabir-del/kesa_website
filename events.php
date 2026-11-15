<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Events - KESA</title>
    <meta name="description" content="Upcoming and past events organized by the Keffi Students Association. Register for leadership summits, scholarship fairs, and community outreach programs." />
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
        .btn-outline { background: transparent; padding: 0.5rem 1.25rem; border-radius: 9999px; font-weight: 600; font-size: 0.75rem; transition: all 0.3s ease; border: 2px solid; cursor: pointer; display: inline-flex; align-items: center; gap: 0.4rem; }

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

        /* ── Event Card ── */
        .event-card { position: relative; overflow: hidden; }
        .event-card .event-status { position: absolute; top: 1rem; left: 1rem; z-index: 10; font-size: 0.65rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; padding: 0.3rem 0.8rem; border-radius: 9999px; }
        .event-card .event-status.upcoming { background: #22c55e; color: #fff; }
        .event-card .event-status.past { background: #64748b; color: #fff; }
        .event-card .event-status.registration { background: #f59e0b; color: #fff; animation: pulse-badge 2s ease-in-out infinite; }
        @keyframes pulse-badge { 0%,100% { opacity: 1; } 50% { opacity: 0.7; } }
        .event-card .event-image { transition: transform 0.6s ease; }
        .event-card:hover .event-image { transform: scale(1.05); }
        .event-card .event-date-box { min-width: 60px; text-align: center; background: rgba(15,23,42,0.06); border-radius: 0.75rem; padding: 0.5rem 0.25rem; }
        html.dark .event-card .event-date-box { background: rgba(255,255,255,0.06); }

        /* ── Countdown Timer ── */
        .countdown-item { display: flex; flex-direction: column; align-items: center; min-width: 60px; }
        .countdown-item .number { font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 2rem; line-height: 1; background: linear-gradient(135deg, #0f766e, #2563eb); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        html.dark .countdown-item .number { background: linear-gradient(135deg, #0f766e, #2563eb); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .countdown-item .label { font-size: 0.6rem; text-transform: uppercase; letter-spacing: 0.05em; color: #64748b; margin-top: 0.15rem; }

        /* ── Filter Buttons ── */
        .filter-btn { padding: 0.5rem 1.25rem; border-radius: 9999px; font-weight: 500; font-size: 0.8rem; transition: all 0.3s ease; border: 2px solid #e2e8f0; background: transparent; color: #64748b; cursor: pointer; }
        .filter-btn:hover { border-color: #0f766e; color: #0f766e; }
        .filter-btn.active { background: #0f766e; color: #fff; border-color: #0f766e; }
        html.dark .filter-btn { border-color: #334155; color: #94a3b8; }
        html.dark .filter-btn.active { background: #0f766e; color: #fff; border-color: #0f766e; }

        /* ── Registration Modal ── */
        #register-modal { position: fixed; inset: 0; z-index: 10000; background: rgba(0,0,0,0.6); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); display: flex; align-items: center; justify-content: center; opacity: 0; visibility: hidden; transition: all 0.3s ease; }
        #register-modal.open { opacity: 1; visibility: visible; }
        #register-modal .modal-content { background: #fff; border-radius: 2rem; padding: 2rem; max-width: 500px; width: 90%; transform: scale(0.9) translateY(20px); transition: transform 0.3s ease; max-height: 90vh; overflow-y: auto; }
        #register-modal.open .modal-content { transform: scale(1) translateY(0); }
        html.dark #register-modal .modal-content { background: #1e293b; }

        /* ── Responsive ── */
        @media (max-width: 640px) {
            #whatsapp-float { width: 52px; height: 52px; font-size: 24px; bottom: 20px; right: 20px; }
            #back-to-top { width: 42px; height: 42px; font-size: 16px; bottom: 80px; right: 20px; }
            .countdown-item .number { font-size: 1.5rem; }
            .countdown-item { min-width: 45px; }
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
                    <li><a href="events.php" class="nav-link active">Events</a></li>
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
            <a href="membership.php" class="nav-link text-lg">Membership</a>
            <a href="events.php" class="nav-link active text-lg">Events</a>
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

    <!-- ===== REGISTRATION MODAL ===== -->
    <div id="register-modal" role="dialog" aria-modal="true" aria-label="Event Registration">
        <div class="modal-content">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-poppins font-bold text-xl text-[#0f172a] dark:text-white">Register for Event</h3>
                <button id="register-close" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" aria-label="Close registration">
                    <i class="fas fa-times text-[#334155] dark:text-[#94a3b8] text-xl"></i>
                </button>
            </div>
            <form id="register-form" novalidate>
                <div class="mb-4">
                    <label class="form-label" for="reg-name">Full Name *</label>
                    <input type="text" id="reg-name" name="reg-name" class="form-input" required placeholder="e.g. John Doe" />
                    <div class="form-error">Please enter your full name.</div>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="reg-email">Email Address *</label>
                    <input type="email" id="reg-email" name="reg-email" class="form-input" required placeholder="e.g. john@example.com" />
                    <div class="form-error">Please enter a valid email address.</div>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="reg-phone">Phone Number *</label>
                    <input type="tel" id="reg-phone" name="reg-phone" class="form-input" required placeholder="e.g. 08012345678" />
                    <div class="form-error">Please enter your phone number.</div>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="reg-institution">Institution</label>
                    <input type="text" id="reg-institution" name="reg-institution" class="form-input" placeholder="e.g. University of Keffi" />
                </div>
                <div class="mb-4">
                    <label class="form-label" for="reg-event">Event *</label>
                    <select id="reg-event" name="reg-event" class="form-input" required>
                        <option value="">Select an event</option>
                        <option value="leadership-summit">Annual Leadership Summit</option>
                        <option value="scholarship-fair">Global Scholarship Fair</option>
                        <option value="community-outreach">Community Outreach Day</option>
                        <option value="mentorship-workshop">Mentorship Workshop</option>
                    </select>
                    <div class="form-error">Please select an event.</div>
                </div>
                <button type="submit" class="btn-primary w-full justify-center">
                    <i class="fas fa-check-circle mr-1"></i> Register Now
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
                    <i class="fas fa-calendar-alt text-sm"></i>
                    <span>Upcoming &amp; Past Events</span>
                </div>
                <h1 class="font-poppins font-bold text-4xl sm:text-5xl lg:text-6xl text-[#0f172a] dark:text-white mt-2">
                    <span class="text-gradient">Events</span> &amp; Programs
                </h1>
                <p class="text-[#475569] dark:text-[#94a3b8] mt-4 max-w-2xl mx-auto leading-relaxed text-lg">
                    Discover upcoming events, leadership summits, scholarship fairs, and community programs organized by KESA. Register now and be part of the movement.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4 mt-6 text-sm text-[#64748b] dark:text-[#94a3b8]">
                    <span class="flex items-center gap-1.5"><i class="fas fa-calendar-check text-[#0f766e]"></i> 3 Upcoming</span>
                    <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                    <span class="flex items-center gap-1.5"><i class="fas fa-clock text-[#0f766e]"></i> 2 Past Events</span>
                    <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                    <span class="flex items-center gap-1.5"><i class="fas fa-users text-[#0f766e]"></i> 500+ Participants</span>
                </div>
            </div>
        </section>

        <!-- ===== FILTERS ===== -->
        <section class="py-6 border-b border-[#e2e8f0] dark:border-[#334155] bg-white/50 dark:bg-[#0f172a]/50 backdrop-blur-sm sticky top-16 lg:top-20 z-30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-center gap-2">
                    <button class="filter-btn active" data-filter="all">All Events</button>
                    <button class="filter-btn" data-filter="upcoming">Upcoming</button>
                    <button class="filter-btn" data-filter="past">Past</button>
                    <button class="filter-btn" data-filter="workshop">Workshops</button>
                    <button class="filter-btn" data-filter="summit">Summits</button>
                    <button class="filter-btn" data-filter="community">Community</button>
                </div>
            </div>
        </section>

        <!-- ===== UPCOMING EVENTS ===== -->
        <section class="py-16 lg:py-20" data-aos="fade-up">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-between gap-4 mb-10">
                    <div>
                        <span class="inline-block text-[#0f766e] dark:text-[#0f766e] font-semibold text-sm tracking-wider uppercase">Upcoming</span>
                        <h2 class="font-poppins font-bold text-2xl sm:text-3xl text-[#0f172a] dark:text-white mt-1">
                            Featured <span class="text-gradient">Events</span>
                        </h2>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-[#64748b] dark:text-[#94a3b8]">
                        <i class="fas fa-circle text-[#22c55e] text-xs"></i>
                        <span>Registration Open</span>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" id="events-grid">

                    <!-- Event 1: Leadership Summit -->
                    <div class="glass rounded-2xl overflow-hidden card-hover event-card" data-category="summit" data-status="upcoming" data-aos="fade-up" data-aos-delay="0">
                        <div class="relative overflow-hidden">
                            <span class="event-status registration"><i class="fas fa-clock mr-1"></i> Registration Open</span>
                            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&q=80" alt="Leadership Summit" class="event-image w-full h-52 object-cover" loading="lazy" />
                        </div>
                        <div class="p-5">
                            <div class="flex items-start gap-4">
                                <div class="event-date-box shrink-0">
                                    <span class="text-xs font-medium text-[#64748b] dark:text-[#94a3b8]">JUN</span>
                                    <div class="text-2xl font-bold text-[#0f172a] dark:text-white">15</div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 text-xs text-[#64748b] dark:text-[#94a3b8] mb-1">
                                        <i class="fas fa-map-marker-alt text-[#0f766e]"></i>
                                        <span>Keffi, Nigeria</span>
                                        <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                                        <i class="fas fa-clock text-[#0f766e]"></i>
                                        <span>10:00 AM</span>
                                    </div>
                                    <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white">Annual Leadership Summit</h4>
                                    <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-1 line-clamp-2">Join us for a transformative day of leadership training, networking, and inspiration.</p>
                                </div>
                            </div>
                            <!-- Countdown -->
                            <div class="mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155]">
                                <div class="flex items-center justify-between">
                                    <div class="flex gap-2 countdown-timer" data-target="2026-06-15T10:00:00">
                                        <div class="countdown-item"><span class="number cd-days">00</span><span class="label">Days</span></div>
                                        <div class="countdown-item"><span class="number cd-hours">00</span><span class="label">Hours</span></div>
                                        <div class="countdown-item"><span class="number cd-mins">00</span><span class="label">Mins</span></div>
                                        <div class="countdown-item"><span class="number cd-secs">00</span><span class="label">Secs</span></div>
                                    </div>
                                    <button class="btn-primary text-sm px-4 py-2 register-btn" data-event="Annual Leadership Summit">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Event 2: Scholarship Fair -->
                    <div class="glass rounded-2xl overflow-hidden card-hover event-card" data-category="workshop" data-status="upcoming" data-aos="fade-up" data-aos-delay="100">
                        <div class="relative overflow-hidden">
                            <span class="event-status registration"><i class="fas fa-clock mr-1"></i> Registration Open</span>
                            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c7f1?w=600&q=80" alt="Scholarship Fair" class="event-image w-full h-52 object-cover" loading="lazy" />
                        </div>
                        <div class="p-5">
                            <div class="flex items-start gap-4">
                                <div class="event-date-box shrink-0">
                                    <span class="text-xs font-medium text-[#64748b] dark:text-[#94a3b8]">JUL</span>
                                    <div class="text-2xl font-bold text-[#0f172a] dark:text-white">5</div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 text-xs text-[#64748b] dark:text-[#94a3b8] mb-1">
                                        <i class="fas fa-map-marker-alt text-[#0f766e]"></i>
                                        <span>Virtual</span>
                                        <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                                        <i class="fas fa-clock text-[#0f766e]"></i>
                                        <span>11:00 AM</span>
                                    </div>
                                    <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white">Global Scholarship Fair</h4>
                                    <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-1 line-clamp-2">Connect with scholarship providers and learn about funding opportunities worldwide.</p>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155]">
                                <div class="flex items-center justify-between">
                                    <div class="flex gap-2 countdown-timer" data-target="2026-07-05T11:00:00">
                                        <div class="countdown-item"><span class="number cd-days">00</span><span class="label">Days</span></div>
                                        <div class="countdown-item"><span class="number cd-hours">00</span><span class="label">Hours</span></div>
                                        <div class="countdown-item"><span class="number cd-mins">00</span><span class="label">Mins</span></div>
                                        <div class="countdown-item"><span class="number cd-secs">00</span><span class="label">Secs</span></div>
                                    </div>
                                    <button class="btn-primary text-sm px-4 py-2 register-btn" data-event="Global Scholarship Fair">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Event 3: Community Outreach -->
                    <div class="glass rounded-2xl overflow-hidden card-hover event-card" data-category="community" data-status="upcoming" data-aos="fade-up" data-aos-delay="200">
                        <div class="relative overflow-hidden">
                            <span class="event-status registration"><i class="fas fa-clock mr-1"></i> Registration Open</span>
                            <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=600&q=80" alt="Community Outreach" class="event-image w-full h-52 object-cover" loading="lazy" />
                        </div>
                        <div class="p-5">
                            <div class="flex items-start gap-4">
                                <div class="event-date-box shrink-0">
                                    <span class="text-xs font-medium text-[#64748b] dark:text-[#94a3b8]">JUL</span>
                                    <div class="text-2xl font-bold text-[#0f172a] dark:text-white">20</div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 text-xs text-[#64748b] dark:text-[#94a3b8] mb-1">
                                        <i class="fas fa-map-marker-alt text-[#0f766e]"></i>
                                        <span>Keffi</span>
                                        <span class="w-1 h-1 rounded-full bg-[#64748b]"></span>
                                        <i class="fas fa-clock text-[#0f766e]"></i>
                                        <span>8:00 AM</span>
                                    </div>
                                    <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white">Community Outreach Day</h4>
                                    <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-1 line-clamp-2">Join us in giving back to the Keffi community through service projects and engagement.</p>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155]">
                                <div class="flex items-center justify-between">
                                    <div class="flex gap-2 countdown-timer" data-target="2026-07-20T08:00:00">
                                        <div class="countdown-item"><span class="number cd-days">00</span><span class="label">Days</span></div>
                                        <div class="countdown-item"><span class="number cd-hours">00</span><span class="label">Hours</span></div>
                                        <div class="countdown-item"><span class="number cd-mins">00</span><span class="label">Mins</span></div>
                                        <div class="countdown-item"><span class="number cd-secs">00</span><span class="label">Secs</span></div>
                                    </div>
                                    <button class="btn-primary text-sm px-4 py-2 register-btn" data-event="Community Outreach Day">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ===== PAST EVENTS ===== -->
        <section class="py-16 lg:py-20 section-bg" data-aos="fade-up">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-10">
                    <span class="inline-block text-[#0f766e] dark:text-[#0f766e] font-semibold text-sm tracking-wider uppercase">Past Events</span>
                    <h2 class="font-poppins font-bold text-2xl sm:text-3xl text-[#0f172a] dark:text-white mt-1">
                        Previous <span class="text-gradient">Highlights</span>
                    </h2>
                    <p class="text-[#475569] dark:text-[#94a3b8] mt-2">Relive the moments from our recent events and see the impact we've made together.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <!-- Past Event 1 -->
                    <div class="glass rounded-2xl overflow-hidden card-hover event-card opacity-70" data-category="summit" data-status="past">
                        <div class="relative overflow-hidden">
                            <span class="event-status past"><i class="fas fa-check-circle mr-1"></i> Completed</span>
                            <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=600&q=80" alt="Past Event" class="event-image w-full h-48 object-cover grayscale" loading="lazy" />
                        </div>
                        <div class="p-5">
                            <div class="flex items-start gap-4">
                                <div class="event-date-box shrink-0 opacity-50">
                                    <span class="text-xs font-medium text-[#64748b] dark:text-[#94a3b8]">MAY</span>
                                    <div class="text-2xl font-bold text-[#0f172a] dark:text-white">10</div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 text-xs text-[#64748b] dark:text-[#94a3b8] mb-1">
                                        <i class="fas fa-map-marker-alt text-[#0f766e]"></i>
                                        <span>Keffi, Nigeria</span>
                                    </div>
                                    <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white">Youth Empowerment Workshop</h4>
                                    <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-1">Empowering young leaders with skills for the future.</p>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155] flex items-center justify-between">
                                <span class="text-xs text-[#64748b] dark:text-[#94a3b8]"><i class="fas fa-users mr-1"></i> 85 Participants</span>
                                <span class="text-xs font-medium text-[#22c55e]">Completed</span>
                            </div>
                        </div>
                    </div>

                    <!-- Past Event 2 -->
                    <div class="glass rounded-2xl overflow-hidden card-hover event-card opacity-70" data-category="workshop" data-status="past">
                        <div class="relative overflow-hidden">
                            <span class="event-status past"><i class="fas fa-check-circle mr-1"></i> Completed</span>
                            <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=600&q=80" alt="Past Event" class="event-image w-full h-48 object-cover grayscale" loading="lazy" />
                        </div>
                        <div class="p-5">
                            <div class="flex items-start gap-4">
                                <div class="event-date-box shrink-0 opacity-50">
                                    <span class="text-xs font-medium text-[#64748b] dark:text-[#94a3b8]">APR</span>
                                    <div class="text-2xl font-bold text-[#0f172a] dark:text-white">22</div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 text-xs text-[#64748b] dark:text-[#94a3b8] mb-1">
                                        <i class="fas fa-map-marker-alt text-[#0f766e]"></i>
                                        <span>Virtual</span>
                                    </div>
                                    <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white">Mentorship Webinar Series</h4>
                                    <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-1">Connecting students with industry professionals.</p>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155] flex items-center justify-between">
                                <span class="text-xs text-[#64748b] dark:text-[#94a3b8]"><i class="fas fa-users mr-1"></i> 120 Participants</span>
                                <span class="text-xs font-medium text-[#22c55e]">Completed</span>
                            </div>
                        </div>
                    </div>

                    <!-- Past Event 3 -->
                    <div class="glass rounded-2xl overflow-hidden card-hover event-card opacity-70" data-category="community" data-status="past">
                        <div class="relative overflow-hidden">
                            <span class="event-status past"><i class="fas fa-check-circle mr-1"></i> Completed</span>
                            <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=600&q=80" alt="Past Event" class="event-image w-full h-48 object-cover grayscale" loading="lazy" />
                        </div>
                        <div class="p-5">
                            <div class="flex items-start gap-4">
                                <div class="event-date-box shrink-0 opacity-50">
                                    <span class="text-xs font-medium text-[#64748b] dark:text-[#94a3b8]">MAR</span>
                                    <div class="text-2xl font-bold text-[#0f172a] dark:text-white">15</div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 text-xs text-[#64748b] dark:text-[#94a3b8] mb-1">
                                        <i class="fas fa-map-marker-alt text-[#0f766e]"></i>
                                        <span>Keffi</span>
                                    </div>
                                    <h4 class="font-poppins font-bold text-lg text-[#0f172a] dark:text-white">Environmental Cleanup Drive</h4>
                                    <p class="text-sm text-[#475569] dark:text-[#94a3b8] mt-1">Community effort to clean and beautify Keffi.</p>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-[#e2e8f0] dark:border-[#334155] flex items-center justify-between">
                                <span class="text-xs text-[#64748b] dark:text-[#94a3b8]"><i class="fas fa-users mr-1"></i> 200+ Participants</span>
                                <span class="text-xs font-medium text-[#22c55e]">Completed</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ===== EVENT CALENDAR PREVIEW ===== -->
        <section class="py-16 lg:py-20" data-aos="fade-up">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-10">
                    <span class="inline-block text-[#0f766e] dark:text-[#0f766e] font-semibold text-sm tracking-wider uppercase">Calendar</span>
                    <h2 class="font-poppins font-bold text-2xl sm:text-3xl text-[#0f172a] dark:text-white mt-1">
                        Event <span class="text-gradient">Calendar</span>
                    </h2>
                    <p class="text-[#475569] dark:text-[#94a3b8] mt-2">Plan ahead with our upcoming event schedule.</p>
                </div>

                <div class="glass rounded-3xl p-6 md:p-8 max-w-4xl mx-auto">
                    <div class="flex items-center justify-between mb-6">
                        <h4 class="font-poppins font-semibold text-[#0f172a] dark:text-white">June 2026</h4>
                        <div class="flex gap-2">
                            <button class="p-2 rounded-lg hover:bg-[#0f766e]/10 transition-colors text-[#64748b] dark:text-[#94a3b8]"><i class="fas fa-chevron-left"></i></button>
                            <button class="p-2 rounded-lg hover:bg-[#0f766e]/10 transition-colors text-[#64748b] dark:text-[#94a3b8]"><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                    <div class="grid grid-cols-7 gap-1 text-center text-sm">
                        <div class="font-semibold text-[#64748b] dark:text-[#94a3b8] py-2">Sun</div>
                        <div class="font-semibold text-[#64748b] dark:text-[#94a3b8] py-2">Mon</div>
                        <div class="font-semibold text-[#64748b] dark:text-[#94a3b8] py-2">Tue</div>
                        <div class="font-semibold text-[#64748b] dark:text-[#94a3b8] py-2">Wed</div>
                        <div class="font-semibold text-[#64748b] dark:text-[#94a3b8] py-2">Thu</div>
                        <div class="font-semibold text-[#64748b] dark:text-[#94a3b8] py-2">Fri</div>
                        <div class="font-semibold text-[#64748b] dark:text-[#94a3b8] py-2">Sat</div>
                        <!-- Calendar days -->
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">1</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">2</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">3</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">4</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">5</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">6</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">7</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">8</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">9</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">10</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">11</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">12</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">13</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">14</div>
                        <div class="py-2 rounded-lg bg-[#0f766e]/10 text-[#0f766e] font-semibold relative cursor-pointer hover:bg-[#0f766e]/20 transition-colors">
                            15
                            <span class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-1 h-1 rounded-full bg-[#0f766e]"></span>
                        </div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">16</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">17</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">18</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">19</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">20</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">21</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">22</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">23</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">24</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">25</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">26</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">27</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">28</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">29</div>
                        <div class="py-2 text-[#64748b] dark:text-[#94a3b8]">30</div>
                    </div>
                    <div class="mt-4 flex flex-wrap justify-center gap-4 text-xs text-[#64748b] dark:text-[#94a3b8]">
                        <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-[#0f766e]"></span> Event Day</span>
                        <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-[#f59e0b]"></span> Registration Open</span>
                        <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-[#64748b]"></span> Past Event</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CTA ===== -->
        <section class="py-20 relative overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);" data-aos="fade-up">
            <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-white/80 px-4 py-1.5 rounded-full text-sm font-medium border border-white/10 mb-4">
                    <i class="fas fa-calendar-plus text-[#f59e0b]"></i>
                    <span>Stay Connected</span>
                </div>
                <h2 class="font-poppins font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white leading-tight">
                    Never Miss an <span class="text-[#f59e0b]">Event</span>
                </h2>
                <p class="text-white/80 text-lg sm:text-xl mt-4 max-w-2xl mx-auto">
                    Subscribe to our newsletter and get notified about upcoming events, workshops, and opportunities.
                </p>
                <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <form id="event-newsletter" class="flex flex-wrap items-center justify-center gap-3 max-w-lg w-full">
                        <input type="email" placeholder="Enter your email" class="form-input rounded-full px-6 py-3 bg-white/10 border-white/20 text-white placeholder-white/50 focus:border-[#f59e0b] flex-1 min-w-[200px]" required />
                        <button type="submit" class="btn-accent text-base px-8 py-3">
                            <i class="fas fa-paper-plane"></i> Subscribe
                        </button>
                    </form>
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
        // REGISTRATION MODAL
        // ──────────────────────────────────────────────────────────────
        const regModal = document.getElementById('register-modal');
        const regClose = document.getElementById('register-close');
        const regForm = document.getElementById('register-form');

        document.querySelectorAll('.register-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const eventName = this.dataset.event;
                regModal.classList.add('open');
                document.body.style.overflow = 'hidden';
                // Set the event name in the dropdown if it matches
                const select = document.getElementById('reg-event');
                const options = select.options;
                for (let i = 0; i < options.length; i++) {
                    if (options[i].textContent.includes(eventName.split(' ')[0])) {
                        select.value = options[i].value;
                        break;
                    }
                }
            });
        });

        regClose.addEventListener('click', () => {
            regModal.classList.remove('open');
            document.body.style.overflow = '';
        });
        regModal.addEventListener('click', (e) => { if (e.target === regModal) { regModal.classList.remove('open');
                document.body.style.overflow = ''; } });

        regForm.addEventListener('submit', function(e) {
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
                showToast('✅ Registration successful! Check your email for confirmation.', 'success');
                regModal.classList.remove('open');
                document.body.style.overflow = '';
                regForm.reset();
            } else {
                showToast('⚠️ Please fill in all required fields.', 'error');
            }
        });

        // ──────────────────────────────────────────────────────────────
        // EVENT FILTERS
        // ──────────────────────────────────────────────────────────────
        const filterBtns = document.querySelectorAll('.filter-btn');
        const eventCards = document.querySelectorAll('.event-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                const filter = this.dataset.filter;
                eventCards.forEach(card => {
                    const category = card.dataset.category;
                    const status = card.dataset.status;
                    if (filter === 'all' || category === filter || status === filter) {
                        card.style.display = 'block';
                        setTimeout(() => { card.style.opacity = '1'; }, 50);
                    } else {
                        card.style.opacity = '0';
                        setTimeout(() => { card.style.display = 'none'; }, 300);
                    }
                });
            });
        });

        // ──────────────────────────────────────────────────────────────
        // COUNTDOWN TIMERS
        // ──────────────────────────────────────────────────────────────
        function updateAllCountdowns() {
            document.querySelectorAll('.countdown-timer').forEach(timer => {
                const target = new Date(timer.dataset.target).getTime();
                const now = Date.now();
                let diff = Math.max(0, target - now);

                const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const mins = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                const secs = Math.floor((diff % (1000 * 60)) / 1000);

                const dEl = timer.querySelector('.cd-days');
                const hEl = timer.querySelector('.cd-hours');
                const mEl = timer.querySelector('.cd-mins');
                const sEl = timer.querySelector('.cd-secs');
                if (dEl) dEl.textContent = String(days).padStart(2, '0');
                if (hEl) hEl.textContent = String(hours).padStart(2, '0');
                if (mEl) mEl.textContent = String(mins).padStart(2, '0');
                if (sEl) sEl.textContent = String(secs).padStart(2, '0');
            });
        }
        updateAllCountdowns();
        setInterval(updateAllCountdowns, 1000);

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

        document.getElementById('event-newsletter')?.addEventListener('submit', function(e) {
            e.preventDefault();
            const input = this.querySelector('input');
            if (input.value.trim()) {
                input.value = '';
                showToast('✅ You\'ll be the first to know about new events!', 'success');
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
        const currentPath = window.location.pathname.split('/').pop() || 'events.php';
        document.querySelectorAll('.nav-link').forEach(link => {
            const href = link.getAttribute('href');
            if (href === currentPath) { link.classList.add('active'); } else { link.classList.remove('active'); }
        });

        console.log('🚀 Events page loaded successfully!');
    </script>
</body>
</html>