<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roman Herts | CV</title>

    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;500&family=Inter:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="lang-switcher">
        <button class="lang-btn" onclick="setLang('uk')" id="btn-uk">UA</button>
        <button class="lang-btn" onclick="setLang('en')" id="btn-en">EN</button>
    </div>

    <div class="container">
        <header>
            <h1 data-i18n="name">РОМАН ГЕРЦ</h1>
            <div class="tagline" data-i18n="tagline">Trainee Embedded / Backend / Cybersecurity</div>
            <div class="contacts">
                <a href="mailto:gercroman77@gmail.com">gercroman77@gmail.com</a>
                <a href="https://www.google.com/maps/place/Lviv,+Ukraine" target="_blank" rel="noopener noreferrer" class="location-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="location-icon"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
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
                    <div class="sub" data-i18n="job1_sub">Практикант-електронік | 2024 — 2025</div>
                    <ul>
                        <li data-i18n="job1_1">Розробка електроніки та PCB у KiCad.</li>
                        <li data-i18n="job1_2">Мережа IIoT-метеостанцій.</li>
                        <li data-i18n="job1_3">Виконання промислових замовлень для провідних компаній.</li>
                    </ul>
                </div>

                <div class="card">
                    <h3>CooKey Start-Up</h3>
                    <div class="sub" data-i18n="job2_sub">Project Manager / Backend Developer | 2022</div>
                    <ul>
                        <li data-i18n="job2_1">Архітектура на Python (Flask).</li>
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
            </div>
        </aside>

        <footer>
            <p>&copy; 2026 <span data-i18n="foot">Роман Герц. Kali Linux & Nginx.</span></p>
        </footer>
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
                mon_temp: "Темп. CPU",
                mon_ram: "ОЗП",
                mon_uptime: "Час роботи",
                foot: "Роман Герц. Побудовано на Kali Linux & Nginx."
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
                mon_temp: "CPU Temp",
                mon_ram: "RAM Usage",
                mon_uptime: "Uptime",
                foot: "Roman Herts. Built on Kali Linux & Nginx."
            }
        };

        function setLang(lang) {
            localStorage.setItem('lang', lang);
            document.querySelectorAll('[data-i18n]').forEach(el => {
                const key = el.getAttribute('data-i18n');
                if (translations[lang][key]) el.innerText = translations[lang][key];
            });
            
            document.querySelectorAll('.lang-btn').forEach(btn => btn.classList.remove('active'));
            document.getElementById(`btn-${lang}`).classList.add('active');
        }

        const savedLang = localStorage.getItem('lang') || 'uk';
        setLang(savedLang);

        async function updateStats() {
            try {
                const res = await fetch('data.php');
                if (!res.ok) throw new Error();
                const data = await res.json();
                document.getElementById('temp').innerText = data.temp;
                document.getElementById('ram').innerText = data.ram;
                document.getElementById('uptime').innerText = data.uptime;
            } catch (e) {
                console.error("Помилка отримання даних вузла");
            }
        }
        
        setInterval(updateStats, 3000);
        updateStats();
    </script>
</body>

</html>