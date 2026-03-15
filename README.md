# 📟 RPI-NODE: Personal Portfolio & Monitoring Dashboard

<p align="center">
  <img src="https://img.shields.io/badge/Python-3776AB?style=for-the-badge&logo=python&logoColor=white" />
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/Raspberry%20Pi-C51A4A?style=for-the-badge&logo=Raspberry-Pi&logoColor=white" />
  <img src="https://img.shields.io/badge/Nginx-009639?style=for-the-badge&logo=nginx&logoColor=white" />
  <img src="https://img.shields.io/badge/Kali_Linux-557C94?style=for-the-badge&logo=kali-linux&logoColor=white" />
</p>

---

### 🌟 Огляд проекту
**RPI-NODE** — це легка та безпечна веб-платформа, розгорнута на базі **Raspberry Pi (Kali Linux)**. Проєкт поєднує в собі CV та систему моніторингу апаратних ресурсів у реальному часі.

> [!NOTE]
> Проект розроблено з акцентом на архітектурну чистоту та низьке споживання ресурсів (Minimal Footprint).

---

### 🚀 Основні можливості

* **📊 Live Hardware Telemetry:** Моніторинг завантаження ОЗП та температури процесора через PHP-бекенд.
* **💼 Professional Portfolio:** Детальна інтеграція досвіду в **IIoT Architecture**, **PCB Design (KiCad)** та розробці на **Python (Flask)**.
* **📱 PWA Ready:** Повна підтримка веб-маніфесту для встановлення як нативного додатка на Android та iOS.
* **🔄 Deployment Workflow:** Налаштована автоматична синхронізація через SFTP/SSH для миттєвого оновлення коду.

---

### 🛠 Технологічний стек

| Компонент | Технологія |
| :--- | :--- |
| **Server** | `Raspberry Pi 4 / Kali Linux` |
| **Web Server** | `Nginx (High Performance)` |
| **Backend** | `PHP 8.x` (Server-side metrics extraction) |
| **Frontend** | `HTML5`, `CSS3` (Modern Glassmorphism) |
| **DevOps** | `SSH Key Auth`, `Port Mapping`, `SFTP Sync` |

---

### 🏗 Архітектура проєкту

Система розділена на незалежні модулі для забезпечення стабільності:

1.  **`data.php`**: Низькорівневий місток. Виконує системні команди Bash для отримання метрик:
    * `vcgencmd measure_temp` (температура ядра)
    * `free -m` (аналіз пам'яті)
2.  **`index.php`**: Динамічний рендеринг інтерфейсу та професійного бекграунду.
3.  **`styles.css`**: Кастомна дизайн-система з використанням CSS-змінних для легкої кастомізації.

---

### 🛡 Безпека (Cybersecurity Audit)

Проект пройшов базовий аудит безпеки та має наступні рівні захисту:

* **SSH Hardening:** Зміна стандартного портів для захисту від автоматизованих ботнет-атак.
* **Key-based Auth:** Повна відмова від паролів на користь **RSA-4096** ключів.
* **Firewall:** Суворе налаштування **UFW** (Uncomplicated Firewall).
* **Permissions:** Ізоляція прав доступу користувача веб-сервера.

---

### 👨‍💻 Про автора

Бекенд-розробник з фокусом на **Embedded Systems** та **Security**.  
Досвід розробки IIoT метеостанцій у **libs Heerbrugg** та архітектурних рішень у **CooKey Start-Up**.

---