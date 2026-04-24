<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roman Herts | CV</title>

    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;500&family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles.css?v=0.1.9">
    <!-- Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
</head>

<body>
    <canvas id="bg-canvas"></canvas>
    <div class="container">
        <header>
            <div class="lang-switcher">
                <button class="lang-btn" onclick="setLang('uk')" id="btn-uk">UA</button>
                <button class="lang-btn" onclick="setLang('en')" id="btn-en">EN</button>
                <button class="lang-btn" onclick="toggleTheme()" id="theme-btn">DARK</button>
            </div>
            <h1 data-i18n="name">РОМАН ГЕРЦ</h1>
            <div class="tagline" data-i18n="tagline">Trainee Embedded / Backend / Cybersecurity</div>
            <div class="contacts">
                <button class="contact-btn" onclick="openModal()" data-i18n="contact_btn">Написати мені</button>
                <a href="https://www.google.com/maps/place/Lviv,+Ukraine" target="_blank" rel="noopener noreferrer" class="location-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="location-icon">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <span data-i18n="location">Львів, Україна 🇺🇦</span>
                </a>
            </div>
        </header>

        <main>
            <section>
                <h2 data-i18n="about_title">Про мене</h2>
                <p data-i18n="about_text">
                    Займаюсь розробкою систем на межі Hardware та Software. Маю досвід проектування PCB (KiCad) та створення IIoT-мереж. Спеціалізуюсь на архітектурі Python (Flask) та безпеці серверних вузлів.
                </p>
            </section>

            <section>
                <h2 data-i18n="exp_title">Досвід роботи</h2>

                <div class="card">
                    <h3 data-i18n="job1_company">libs Heerbrugg (Швейцарія)</h3>
                    <div class="sub" data-i18n="job1_sub">Практикант-електронік | Серпень 2024 — Жовтень 2025</div>
                    <ul>
                        <li data-i18n="job1_1">Розробка електроніки та проектування друкованих плат у KiCad.</li>
                        <li data-i18n="job1_2">Створення персонального проєкту мережі IIoT-метеостанцій.</li>
                        <li data-i18n="job1_3">Організація процесів виконання замовлень для провідних швейцарських компаній.</li>
                    </ul>
                </div>

                <div class="card">
                    <h3>CooKey Start-Up</h3>
                    <div class="sub" data-i18n="job2_sub">Project Manager / Backend Developer | 2022</div>
                    <ul>
                        <li data-i18n="job2_1">Розробка архітектури на Python (Flask).</li>
                    </ul>
                </div>
            </section>

            <section>
                <h2 data-i18n="skills_title">Навички</h2>
                <div class="skills-grid">
                    <span class="skill-tag">C / Python / SQL</span>
                    <span class="skill-tag">KiCad (PCB Design)</span>
                    <span class="skill-tag">Embedded C (Arduino/ESP32)</span>
                    <span class="skill-tag" data-i18n="skill_rpi">Адміністрування RPi</span>
                    <span class="skill-tag" data-i18n="skill_cyber">Аудит безпеки</span>
                    <span class="skill-tag" data-i18n="skill_iiot">Архітектура IIoT</span>
                    <span class="skill-tag" data-i18n="skill_de">Німецька (B2)</span>
                    <span class="skill-tag" data-i18n="skill_en">Англійська (C1)</span>
                </div>
            </section>

            <section>
                <h2 data-i18n="edu_title">Освіта</h2>

                <div class="card">
                    <h3 data-i18n="edu1_company">НУ «Львівська Політехніка»</h3>
                    <div class="sub" data-i18n="edu1_sub">Бакалавр | 2021 — 2023 | 2026 — дотепер</div>
                    <ul>
                        <li data-i18n="edu1_1">Спеціальність «Кібербезпека».</li>
                        <li data-i18n="edu1_2">Спеціалізація в адмініструванні систем кібербезпеки.</li>
                        <li data-i18n="edu1_3">Backend-розробник з навичками C, Python, MySQL.</li>
                    </ul>
                </div>

                <div class="card">
                    <h3>GBS St. Gallen</h3>
                    <div class="sub" data-i18n="edu2_sub">Технічна освіта | 2024 — 2025 | Припинено через повернення в Україну</div>
                    <ul>
                        <li data-i18n="edu2_1">Дуальна технічна освіта за спеціальністю «Електроніка» та практика у технічній компанії.</li>
                        <li data-i18n="edu2_2">Навчання проводилось німецькою мовою.</li>
                        <li data-i18n="edu2_3">Висока успішність у фахових предметах: Електроніка, Електротехніка, Розробка апаратного та програмного забезпечення.</li>
                    </ul>
                </div>
            </section>
        </main>

        <aside>
            <div class="node-status">
                <div class="node-header"><span class="blink">●</span> RPI_NODE</div>

                <div class="stat-item">
                    <div class="stat-label" data-i18n="mon_temp">CPU Temp</div>
                    <div class="stat-value" id="temp">--°C</div>
                </div>

                <div class="stat-item">
                    <div class="stat-label" data-i18n="mon_ram">RAM Usage</div>
                    <div class="stat-value" id="ram">--%</div>
                </div>

                <div class="stat-item">
                    <div class="stat-label" data-i18n="mon_uptime">Uptime</div>
                    <div class="stat-value" id="uptime" style="font-size: 0.8rem;">--</div>
                </div>

                <div class="stat-item">
                    <div class="stat-label" data-i18n="mon_visitors">Unique IPs</div>
                    <div class="stat-value" id="visitors">--</div>
                </div>

                <div class="stat-item">
                    <div class="stat-label" data-i18n="mon_conn">Active Conn.</div>
                    <div class="stat-value" id="connections">--</div>
                </div>
            </div>
        </aside>

        <footer>
            <p>&copy; 2026 <span data-i18n="foot">Роман Герц. Kali Linux & Nginx.</span></p>
        </footer>
    </div>


    <div class="modal-overlay" id="feedback-overlay" role="dialog" aria-modal="true" aria-labelledby="modal-heading">
        <div class="modal">
            <button class="modal-close" id="modal-close-btn" aria-label="Закрити">&times;</button>
            <p class="modal-title" id="modal-heading" data-i18n="modal_title">Зворотний зв'язок</p>
            <p class="modal-sub" data-i18n="modal_sub">Залиш повідомлення&mdash;відповім найближчим часом.</p>

            <form class="modal-form" id="feedback-form" novalidate>
                <div>
                    <label for="fb-name" data-i18n="modal_name">Ім'я</label>
                    <input type="text" id="fb-name" name="name" placeholder="Roman" required>
                </div>
                <div>
                    <label for="fb-email">Email</label>
                    <input type="email" id="fb-email" name="email" placeholder="you@example.com" required>
                </div>
                <div>
                    <label for="fb-phone" data-i18n="modal_phone">Номер телефону</label>
                    <input type="tel" id="fb-phone" name="phone" placeholder="+380 XX XXX XX XX">
                </div>
                <div>
                    <label for="fb-message" data-i18n="modal_msg">Повідомлення</label>
                    <textarea id="fb-message" name="message" placeholder="..."></textarea>
                </div>
                <button type="submit" class="modal-submit" id="modal-submit-btn" data-i18n="modal_send">Відправити</button>
            </form>

            <div class="modal-success" id="modal-success">
                <span class="modal-success-icon">&#10003;</span>
                <p data-i18n="modal_ok">Дякую! Повідомлення надіслано.</p>
            </div>
        </div>
    </div>

    <script>
        const translations = {
            uk: {
                name: "РОМАН ГЕРЦ",
                tagline: "Trainee Embedded / Backend / Cybersecurity",
                location: "Львів, Україна 🇺🇦",
                about_title: "Про мене",
                about_text: "Займаюсь розробкою систем на межі Hardware та Software. Маю досвід проектування PCB (KiCad) та створення IIoT-мереж. Спеціалізуюсь на архітектурі Python (Flask) та безпеці серверних вузлів.",
                exp_title: "Досвід роботи",
                job1_company: "libs Heerbrugg (Швейцарія)",
                job1_sub: "Практикант-електронік | Серпень 2024 — Жовтень 2025",
                job1_1: "Розробка електроніки та проектування друкованих плат у KiCad.",
                job1_2: "Створення персонального проєкту мережі IIoT-метеостанцій.",
                job1_3: "Організація процесів виконання замовлень для провідних швейцарських компаній.",
                job2_sub: "Project Manager / Backend Developer | 2022",
                job2_1: "Розробка архітектури на Python (Flask).",
                skills_title: "Навички",
                skill_rpi: "Адміністрування RPi",
                skill_cyber: "Аудит безпеки",
                skill_iiot: "Архітектура IIoT",
                skill_de: "Німецька (B2)",
                skill_en: "Англійська (C1)",
                edu_title: "Освіта",
                edu1_company: "НУ «Львівська Політехніка»",
                edu1_sub: "Бакалавр | 2021 — 2023 | 2026 — дотепер",
                edu1_1: "Спеціальність «Кібербезпека».",
                edu1_2: "Спеціалізація в адмініструванні систем кібербезпеки.",
                edu1_3: "Backend-розробник з навичками C, Python, MySQL.",
                edu2_sub: "Технічна освіта | 2024 — 2025 | Припинено через повернення в Україну",
                edu2_1: "Дуальна технічна освіта за спеціальністю «Електроніка» та практика у технічній компанії.",
                edu2_2: "Навчання проводилось німецькою мовою.",
                edu2_3: "Висока успішність у фахових предметах: Електроніка, Електротехніка, Розробка апаратного та програмного забезпечення.",
                mon_temp: "Темп. CPU",
                mon_ram: "ОЗП",
                mon_uptime: "Час роботи",
                mon_visitors: "Унікальні IP",
                mon_conn: "Активні з'єдн.",
                foot: "Роман Герц. Побудовано на Kali Linux & Nginx.",
                modal_title: "Зворотний зв'язок",
                modal_sub: "Залиш повідомлення—відповім найближчим часом.",
                modal_name: "Ім'я",
                modal_phone: "Номер телефону",
                modal_msg: "Повідомлення",
                modal_send: "Відправити",
                contact_btn: "Написати мені",
                modal_ok: "Дякую! Повідомлення надіслано."
            },
            en: {
                name: "ROMAN HERTS",
                tagline: "Trainee Embedded / Backend / Cybersecurity",
                location: "Lviv, Ukraine 🇺🇦",
                about_title: "About Me",
                about_text: "Bridging the gap between Hardware and Software. Experienced in PCB design (KiCad) and IIoT network deployment. Specialized in Python (Flask) architecture and server node security.",
                exp_title: "Work Experience",
                job1_company: "libs Heerbrugg (Switzerland)",
                job1_sub: "Electronics Intern | Aug 2024 — Oct 2025",
                job1_1: "Electronics development and PCB design in KiCad.",
                job1_2: "Personal project: IIoT weather station network.",
                job1_3: "Industrial order management for Swiss companies.",
                job2_sub: "Project Manager / Backend Developer | 2022",
                job2_1: "Backend architecture with Python (Flask).",
                skills_title: "Technical Skills",
                skill_rpi: "RPi Administration",
                skill_cyber: "Security Audit",
                skill_iiot: "IIoT Architecture",
                skill_de: "German (B2)",
                skill_en: "English (C1)",
                edu_title: "Education",
                edu1_company: "Lviv Polytechnic National University",
                edu1_sub: "Bachelor's | 2021 — 2023 | 2026 — present",
                edu1_1: "Cybersecurity specialty.",
                edu1_2: "Specialization in cybersecurity systems administration.",
                edu1_3: "Backend developer with C, Python, MySQL skills.",
                edu2_sub: "Technical Education | 2024 — 2025 | Discontinued due to return to Ukraine",
                edu2_1: "Dual technical education in Electronics with industry practice.",
                edu2_2: "Instruction conducted in German.",
                edu2_3: "Top performer in Electronics, Electrical Engineering, and Hardware/Software Development.",
                mon_temp: "CPU Temp",
                mon_ram: "RAM Usage",
                mon_uptime: "Uptime",
                mon_visitors: "Unique IPs",
                mon_conn: "Active Conn.",
                foot: "Roman Herts. Built on Kali Linux & Nginx.",
                modal_title: "Feedback",
                modal_sub: "Leave a message\u2014I'll get back to you soon.",
                modal_name: "Name",
                modal_phone: "Phone number",
                modal_msg: "Message",
                modal_send: "Send",
                contact_btn: "Contact Me",
                modal_ok: "Thank you! Message sent."
            }
        };

        function setLang(lang) {
            localStorage.setItem('lang', lang);

            document.querySelectorAll('[data-i18n]').forEach(el => {
                const key = el.getAttribute('data-i18n');
                if (translations[lang] && translations[lang][key]) {
                    el.textContent = translations[lang][key];
                }
            });

            document.getElementById('btn-uk').classList.remove('active');
            document.getElementById('btn-en').classList.remove('active');
            document.getElementById(`btn-${lang}`).classList.add('active');
        }

        function getAutoTheme() {
            const hour = new Date().getHours();
            return (hour >= 7 && hour < 21) ? 'light' : 'dark';
        }

        function applyTheme(theme) {
            const root = document.documentElement;
            const themeBtn = document.getElementById('theme-btn');

            if (theme === 'light') {
                root.classList.add('light-mode');
                themeBtn.textContent = 'DARK';
                themeBtn.classList.add('active');
                if (window.updateThreeTheme) window.updateThreeTheme(true);
            } else {
                root.classList.remove('light-mode');
                themeBtn.textContent = 'LIGHT';
                themeBtn.classList.remove('active');
                if (window.updateThreeTheme) window.updateThreeTheme(false);
            }
        }

        function setTheme(theme) {
            applyTheme(theme);
        }

        let isThemeManuallySet = false;

        function toggleTheme() {
            isThemeManuallySet = true;
            const currentTheme = document.documentElement.classList.contains('light-mode') ? 'light' : 'dark';
            setTheme(currentTheme === 'light' ? 'dark' : 'light');
        }

        function initTheme() {
            applyTheme(getAutoTheme());
        }

        function refreshAutoTheme() {
            if (!isThemeManuallySet) {
                applyTheme(getAutoTheme());
            }
        }

        const savedLang = localStorage.getItem('lang') || 'uk';
        setLang(savedLang);

        initTheme();

        async function updateStats() {
            try {
                const res = await fetch('data.php', { cache: 'no-store' });
                if (!res.ok) throw new Error('Failed to fetch stats');

                const data = await res.json();

                document.getElementById('temp').textContent = data.temp;
                document.getElementById('ram').textContent = data.ram;
                document.getElementById('uptime').textContent = data.uptime;
                document.getElementById('visitors').textContent = data.visitors;
                document.getElementById('connections').textContent = data.connections;
            } catch (e) {
                console.error("Помилка отримання даних вузла:", e);
            }
        }

        updateStats();
        setInterval(updateStats, 3000);

        setInterval(refreshAutoTheme, 60000);

        (function () {
            const overlay  = document.getElementById('feedback-overlay');
            const closeBtn = document.getElementById('modal-close-btn');
            const form     = document.getElementById('feedback-form');
            const success  = document.getElementById('modal-success');

            window.openModal = function() {
                overlay.classList.add('show');
            }

            function closeModal() {
                overlay.classList.remove('show');
            }

            setTimeout(openModal, 60000);

            closeBtn.addEventListener('click', closeModal);
            overlay.addEventListener('click', function (e) {
                if (e.target === overlay) closeModal();
            });
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') closeModal();
            });

            form.addEventListener('submit', async function (e) {
                e.preventDefault();
                const btn = document.getElementById('modal-submit-btn');
                btn.disabled = true;
                btn.textContent = '...';

                const body = new FormData(form);

                try {
                    const res = await fetch('contact.php', { method: 'POST', body });
                    if (!res.ok) throw new Error();
                    form.style.display = 'none';
                    success.style.display = 'block';
                    setTimeout(closeModal, 3000);
                } catch {
                    btn.disabled = false;
                    const lang = localStorage.getItem('lang') || 'uk';
                    btn.textContent = lang === 'en' ? 'Error. Try again.' : 'Помилка. Спробуй ще.';
                }
            });
        })();
    </script>

    <script>
        // Three.js Background Animation
        (function() {
            const canvas = document.getElementById('bg-canvas');
            if (!canvas || typeof THREE === 'undefined') return;

            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
            
            const renderer = new THREE.WebGLRenderer({ canvas: canvas, alpha: true, antialias: true });
            renderer.setSize(window.innerWidth, window.innerHeight);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

            // Create particles
            const particlesCount = 700;
            const posArray = new Float32Array(particlesCount * 3);
            for(let i = 0; i < particlesCount * 3; i++) {
                posArray[i] = (Math.random() - 0.5) * 15;
            }
            const geometry = new THREE.BufferGeometry();
            geometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));

            const isLight = document.documentElement.classList.contains('light-mode');
            const material = new THREE.PointsMaterial({
                size: 0.025,
                color: isLight ? 0x00aa2f : 0x00ff41,
                transparent: true,
                opacity: 0.8,
                blending: THREE.AdditiveBlending
            });

            const particlesMesh = new THREE.Points(geometry, material);
            scene.add(particlesMesh);

            camera.position.z = 3;

            let mouseX = 0;
            let mouseY = 0;
            let targetX = 0;
            let targetY = 0;
            let windowHalfX = window.innerWidth / 2;
            let windowHalfY = window.innerHeight / 2;

            document.addEventListener('mousemove', (event) => {
                mouseX = (event.clientX - windowHalfX);
                mouseY = (event.clientY - windowHalfY);
            });

            window.addEventListener('resize', () => {
                windowHalfX = window.innerWidth / 2;
                windowHalfY = window.innerHeight / 2;
                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(window.innerWidth, window.innerHeight);
            });

            const clock = new THREE.Clock();
            function animate() {
                requestAnimationFrame(animate);
                const elapsedTime = clock.getElapsedTime();

                // Base particle rotation
                particlesMesh.rotation.y = elapsedTime * 0.03;
                particlesMesh.rotation.x = elapsedTime * 0.02;

                // Mouse interactive rotation
                targetX = mouseX * 0.0005;
                targetY = mouseY * 0.0005;
                
                particlesMesh.rotation.y += 0.05 * (targetX - particlesMesh.rotation.y);
                particlesMesh.rotation.x += 0.05 * (targetY - particlesMesh.rotation.x);

                renderer.render(scene, camera);
            }
            animate();

            // Export to window for theme switching
            window.updateThreeTheme = function(isLightMode) {
                if (material) {
                    material.color.setHex(isLightMode ? 0x00aa2f : 0x00ff41);
                    if (isLightMode) {
                        material.blending = THREE.NormalBlending;
                        material.opacity = 0.5;
                    } else {
                        material.blending = THREE.AdditiveBlending;
                        material.opacity = 0.8;
                    }
                }
            };
        })();
    </script>
</body>

</html>