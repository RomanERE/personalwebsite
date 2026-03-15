📟 RPI-NODE: Personal Portfolio & Monitoring Dashboard

RPI-NODE — це легка та безпечна веб-платформа, розгорнута на базі Raspberry Pi (Kali Linux). Проєкт поєднує в собі професійне портфоліо та систему моніторингу апаратних ресурсів у реальному часі.

🚀 Основні можливості

Live Hardware Telemetry: Моніторинг завантаження ОЗП та температури процесора через PHP-бекенд.
Professional Portfolio: Детальна інтеграція досвіду в IIoT Architecture, PCB Design (KiCad) та розробці на Python (Flask).
PWA Ready: Повна підтримка веб-маніфесту для встановлення як нативного додатка на Android та iOS.
Deployment Workflow: Налаштована автоматична синхронізація через SFTP/SSH (порт 2222) для миттєвого оновлення коду.

🛠 Технологічний стек

Компонент	Технологія
Server	Raspberry Pi 4 / Kali Linux
Web Server	Nginx
Backend	PHP (Server-side metrics extraction)
Frontend	HTML5, CSS3 (Modern Glassmorphism Design)
DevOps	SSH Key Auth, Port Mapping , SFTP Sync

🏗 Архітектура проєкту

data.php: Виконує системні команди Bash для отримання метрик vcgencmd measure_temp та free -m.
index.php: Основний інтерфейс, що динамічно відображає дані та професійний бекграунд.
styles.css: Кастомна дизайн-система з акцентом на читабельність та мінімалізм.

🛡 Безпека (Cybersecurity Audit)

SSH Hardening: Зміна стандартного порту 22 на 2222 для захисту від ботнетів.
Key-based Auth: Повна відмова від паролів на користь RSA-4096 ключів.
Firewall Configuration: Налаштування UFW для суворого контролю вхідного трафіку.
Permissions: Мінімізація прав доступу