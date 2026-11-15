<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projects - KESA</title>
    <meta name="description" content="Explore community and educational projects driven by the Keffi Students Association." />
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🎓</text></svg>" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; background: #ffffff; color: #0f172a; overflow-x: hidden; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Poppins', sans-serif; }

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #0f766e; border-radius: 10px; }

        #scroll-progress {
            position: fixed; top: 0; left: 0; height: 4px;
            background: linear-gradient(90deg, #0f766e, #2563eb, #f59e0b);
            z-index: 9999; width: 0%; transition: width 0.1s;
        }
        .navbar {
            transition: all 0.3s ease; background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(15, 23, 42, 0.06);
        }
        .navbar-scrolled { box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08); }
        .nav-link {
            position: relative; font-weight: 500; font-size: 0.875rem;
            color: #334155; transition: color 0.2s; padding: 0.5rem 0;
        }
        .nav-link::after {
            content: ''; position: absolute; bottom: 0; left: 0; width: 0; height: 2.5px;
            background: linear-gradient(90deg, #0f766e, #2563eb); transition: width 0.3s ease; border-radius: 4px;
        }
        .nav-link:hover::after, .nav-link.active::after { width: 100%; }
        .nav-link:hover, .nav-link.active { color: #0f172a; }
        .nav-link.active { font-weight: 600; }

        #mobile-menu { transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); transform: translateX(100%); opacity: 0; visibility: hidden; }
        #mobile-menu.open { transform: translateX(0); opacity: 1; visibility: visible; }
        #mobile-menu .nav-link { font-size: 1rem; padding: 0.75rem 0; border-bottom: 1px solid rgba(15, 23, 42, 0.06); }

        .btn-primary {
            background: linear-gradient(135deg, #0f766e, #2563eb); color: #fff; padding: 0.75rem 2rem;
            border-radius: 9999px; font-weight: 600; font-size: 0.875rem; transition: all 0.3s ease;
            box-shadow: 0 4px 16px rgba(15, 118, 110, 0.3); display: inline-flex; align-items: center; gap: 0.5rem; border: none; cursor: pointer;
        }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 28px rgba(15, 118, 110, 0.4); }

        .glass { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.25); }
        .card-hover { transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
        .card-hover:hover { transform: translateY(-8px); box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08); }
        .text-gradient { background: linear-gradient(135deg, #0f766e, #2563eb); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .section-bg { background: #f8fafc; }

        /* Dark Mode */
        html.dark body { background: #0f172a; color: #f1f5f9; }
        html.dark .navbar { background: rgba(15, 23, 42, 0.92); border-bottom-color: rgba(255, 255, 255, 0.06); }
        html.dark .nav-link { color: #94a3b8; }
        html.dark .nav-link:hover, html.dark .nav-link.active { color: #f1f5f9; }
        html.dark .glass { background: rgba(30, 41, 59, 0.7); border-color: rgba(255, 255, 255, 0.06); }
        html.dark .section-bg { background: #1e293b; }
        html.dark #mobile-menu { background: #0f172a; }

        #announcement-bar { background: linear-gradient(135deg, #0f766e, #2563eb); color: #fff; padding: 0.5rem 1rem; font-size: 0.875rem; font-weight: 500; display: flex; align-items: center; justify-content: center; gap: 1rem; flex-wrap: wrap; position: relative; z-index: 50; }
        #announcement-bar .close-btn { background: rgba(255, 255, 255, 0.2); border: none; color: #fff; width: 28px; height: 28px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; }

        #back-to-top { position: fixed; bottom: 28px; right: 28px; z-index: 998; background: #0f172a; color: #fff; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15); transition: all 0.3s ease; border: none; cursor: pointer; opacity: 0; visibility: hidden; transform: translateY(20px); }
        #back-to-top.visible { opacity: 1; visibility: visible; transform: translateY(0); }
        #back-to-top:hover { background: #0f766e; transform: translateY(-4px); }

        #search-modal { position: fixed; inset: 0; z-index: 9999; background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(8px); display: flex; align-items: center; justify-content: center; opacity: 0; visibility: hidden; transition: all 0.3s ease; }
        #search-modal.open { opacity: 1; visibility: visible; }
        #search-modal .modal-content { background: #fff; border-radius: 2rem; padding: 2rem; max-width: 600px; width: 90%; }
        html.dark #search-modal .modal-content { background: #1e293b; }
        #search-modal input { width: 100%; padding: 1rem 1.5rem; border-radius: 9999px; border: 2px solid #e2e8f0; outline: none; background: transparent; }
        html.dark #search-modal input { border-color: #334155; color: #f1f5f9; }

        /* Extra spacing for navbar brand */
        .navbar-brand { margin-right: 2.5rem; }
        @media (max-width: 1024px) { .navbar-brand { margin-right: 1rem; } }
    </style>
</head>

<body>
    <div id="scroll-progress"></div>

    <div id="announcement-bar" role="alert">
        <span>📢 <strong>Scholarship Opportunities</strong> — Apply now for the 2026 KESA Education Grant &bull; <strong>Membership Registration</strong> is open &bull; <strong>Leadership Summit</strong> coming soon</span>
        <button class="close-btn" id="close-announcement" aria-label="Close announcement">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <nav class="navbar fixed top-0 left-0 w-full z-50" id="navbar" role="navigation" aria-label="Main navigation">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <!-- Logo + Brand Title with extra spacing -->
                <a href="index.php" class="navbar-brand flex items-center gap-3 shrink-0" aria-label="KESA Home">
                    <div class="w-12 h-12 flex items-center justify-center">
                        <img src="img/KSA logo.jpeg" alt="KESA Logo" class="w-full h-full object-contain">
                    </div>
                    <span class="font-poppins font-bold text-xl text-[#0f172a] dark:text-white tracking-tight">KESA</span>
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
                    <li><a href="projects.php" class="nav-link active">Projects</a></li>
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

    <div id="mobile-menu" class="fixed inset-0 z-40 bg-white dark:bg-[#0f172a] pt-20 px-6 overflow-y-auto lg:hidden" role="dialog" aria-modal="true" aria-label="Mobile navigation">
        <div class="flex flex-col gap-1 pb-8">
            <a href="index.php" class="nav-link text-lg">Home</a>
            <a href="about.php" class="nav-link text-lg">About</a>
            <a href="leadership.php" class="nav-link text-lg">Leadership</a>
            <a href="membership.php" class="nav-link text-lg">Membership</a>
            <a href="events.php" class="nav-link text-lg">Events</a>
            <a href="scholarships.php" class="nav-link text-lg">Scholarships</a>
            <a href="news.php" class="nav-link text-lg">News</a>
            <a href="gallery.php" class="nav-link text-lg">Gallery</a>
            <a href="projects.php" class="nav-link active text-lg">Projects</a>
            <a href="alumni.php" class="nav-link text-lg">Alumni</a>
            <a href="contact.php" class="nav-link text-lg">Contact</a>
            <div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-800">
                <a href="membership.php" class="btn-primary w-full justify-center text-center">
                    <i class="fas fa-user-plus"></i> Join KESA
                </a>
            </div>
        </div>
    </div>

    <div id="search-modal" role="dialog" aria-modal="true" aria-label="Search">
        <div class="modal-content mx-4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-poppins font-bold text-xl text-[#0f172a] dark:text-white">Search</h3>
                <button id="search-close" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" aria-label="Close search">
                    <i class="fas fa-times text-[#334155] dark:text-[#94a3b8] text-xl"></i>
                </button>
            </div>
            <form id="search-form" onsubmit="return false;">
                <input type="text" placeholder="Search projects..." aria-label="Search query" />
                <div class="mt-4 flex justify-end">
                    <button type="submit" class="btn-primary text-sm px-6 py-2.5">
                        <i class="fas fa-search"></i> Search
                    </button>
                </div>
            </form>
        </div>
    </div>

    <main class="pt-24 lg:pt-32">
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-16" data-aos="fade-up">
            <span class="text-sm font-semibold text-gradient uppercase tracking-wider">Our Impact</span>
            <h1 class="font-poppins font-extrabold text-4xl sm:text-5xl text-[#0f172a] dark:text-white mt-2">
                Community & Educational <span class="text-gradient">Projects</span>
            </h1>
            <p class="text-[#64748b] dark:text-[#94a3b8] max-w-2xl mx-auto mt-4 text-base sm:text-lg">
                Discover how KESA systematically invests in local human development, infrastructural updates, and civic campaigns across Keffi.
            </p>
        </section>

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="glass card-hover rounded-2xl overflow-hidden border border-slate-100 dark:border-slate-800/50 flex flex-col h-full" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-48 overflow-hidden bg-slate-200">
                        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?w=600&q=80" alt="ICT Infrastructure" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <span class="text-xs font-semibold text-[#0f766e] tracking-wider uppercase mb-2 block">Infrastructural</span>
                        <h3 class="font-poppins font-bold text-xl text-[#0f172a] dark:text-white mb-2">KESA Digital Hub Complex</h3>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] flex-grow leading-relaxed">
                            Building a modern tech lab providing structured access to visual tools, high-speed internet, and system workspaces for student academic projects.
                        </p>
                        <div class="mt-4 pt-4 border-t border-slate-100 dark:border-slate-800 flex justify-between items-center text-xs font-medium text-slate-500">
                            <span>Status: Ongoing</span>
                            <span class="text-[#2563eb]">Est: Late 2026</span>
                        </div>
                    </div>
                </div>

                <div class="glass card-hover rounded-2xl overflow-hidden border border-slate-100 dark:border-slate-800/50 flex flex-col h-full" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-48 overflow-hidden bg-slate-200">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=600&q=80" alt="Books Donation" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <span class="text-xs font-semibold text-[#2563eb] tracking-wider uppercase mb-2 block">Educational</span>
                        <h3 class="font-poppins font-bold text-xl text-[#0f172a] dark:text-white mb-2">Rural Library Drive</h3>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] flex-grow leading-relaxed">
                            Distributing essential educational textbooks, science apparatus, and instructional syllabus references to public schools within rural Keffi sectors.
                        </p>
                        <div class="mt-4 pt-4 border-t border-slate-100 dark:border-slate-800 flex justify-between items-center text-xs font-medium text-slate-500">
                            <span>Status: Completed</span>
                            <span class="text-[#0f766e]">June 2026</span>
                        </div>
                    </div>
                </div>

                <div class="glass card-hover rounded-2xl overflow-hidden border border-slate-100 dark:border-slate-800/50 flex flex-col h-full" data-aos="fade-up" data-aos-delay="300">
                    <div class="h-48 overflow-hidden bg-slate-200">
                        <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=600&q=80" alt="Sanitation project" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <span class="text-xs font-semibold text-[#f59e0b] tracking-wider uppercase mb-2 block">Health & Civic</span>
                        <h3 class="font-poppins font-bold text-xl text-[#0f172a] dark:text-white mb-2">Clean Keffi Campaign</h3>
                        <p class="text-sm text-[#64748b] dark:text-[#94a3b8] flex-grow leading-relaxed">
                            A clean community sanitization drive combined with targeted healthcare awareness seminars organized alongside resident student health groups.
                        </p>
                        <div class="mt-4 pt-4 border-t border-slate-100 dark:border-slate-800 flex justify-between items-center text-xs font-medium text-slate-500">
                            <span>Status: Recurrent</span>
                            <span class="text-[#64748b]">Quarterly</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-[#0f172a] text-slate-400 pt-16 pb-8 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <img src="img/KSA logo.jpeg" alt="KESA Logo" class="w-10 h-10 object-contain rounded-full" />
                    <span class="font-poppins font-bold text-white text-lg tracking-tight">KESA</span>
                </div>
                <p class="text-sm leading-relaxed mb-6">
                    The premier student organization dedicated to fostering human capital development, educational parity, and sustainable social growth within Keffi.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-9 h-9 rounded-full bg-slate-800 hover:bg-[#0f766e] text-white flex items-center justify-center transition-colors"><i class="fab fa-facebook-f text-sm"></i></a>
                    <a href="#" class="w-9 h-9 rounded-full bg-slate-800 hover:bg-[#0f766e] text-white flex items-center justify-center transition-colors"><i class="fab fa-twitter text-sm"></i></a>
                    <a href="#" class="w-9 h-9 rounded-full bg-slate-800 hover:bg-[#0f766e] text-white flex items-center justify-center transition-colors"><i class="fab fa-instagram text-sm"></i></a>
                </div>
            </div>
            <div>
                <h4 class="font-poppins font-semibold text-white text-sm uppercase tracking-wider mb-6">Quick Links</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="about.php" class="hover:text-white transition-colors">About Us</a></li>
                    <li><a href="leadership.php" class="hover:text-white transition-colors">Executive Team</a></li>
                    <li><a href="membership.php" class="hover:text-white transition-colors">Portal Registration</a></li>
                    <li><a href="scholarships.php" class="hover:text-white transition-colors">Education Grants</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-poppins font-semibold text-white text-sm uppercase tracking-wider mb-6">Resources</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="news.php" class="hover:text-white transition-colors">Press & News</a></li>
                    <li><a href="events.php" class="hover:text-white transition-colors">Upcoming Events</a></li>
                    <li><a href="projects.php" class="hover:text-white transition-colors">Community Projects</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-poppins font-semibold text-white text-sm uppercase tracking-wider mb-6">Contact Support</h4>
                <p class="text-sm leading-relaxed mb-4">Have questions about current project funding setups?</p>
                <span class="text-white font-semibold text-sm">📧 contact@kesa.org.ng</span>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 border-t border-slate-800 text-center text-xs text-slate-500">
            <p>&copy; 2026 Keffi Students Association. All rights reserved. Designed by <a href="https://qafamstech.com.ng" target="_blank" rel="noopener noreferrer" class="text-[#0f766e] hover:underline">Qafam Software Technology</a></p>
        </div>
    </footer>

    <button id="back-to-top" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, duration: 800 });

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

        document.getElementById('close-announcement').addEventListener('click', () => {
            document.getElementById('announcement-bar').style.display = 'none';
        });

        const mobileToggle = document.getElementById('mobile-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileToggle.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.toggle('open');
            mobileToggle.setAttribute('aria-expanded', isOpen);
            mobileToggle.querySelector('i').classList.toggle('fa-bars', !isOpen);
            mobileToggle.querySelector('i').classList.toggle('fa-times', isOpen);
        });

        const searchToggle = document.getElementById('search-toggle');
        const searchClose = document.getElementById('search-close');
        const searchModal = document.getElementById('search-modal');
        searchToggle.addEventListener('click', () => searchModal.classList.add('open'));
        searchClose.addEventListener('click', () => searchModal.classList.remove('open'));

        const darkToggle = document.getElementById('dark-toggle');
        darkToggle.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            const icon = darkToggle.querySelector('i');
            icon.classList.toggle('fa-moon');
            icon.classList.toggle('fa-sun');
        });
    </script>
</body>
</html>