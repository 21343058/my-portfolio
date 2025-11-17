<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    
    <link rel="stylesheet" href="/style.css"> 
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="navbar">
        <div class="container">
            <a href="#hero" class="nav-brand">M. Farel Fahlevi</a>
            <nav class="nav-menu">
                <a href="#about" class="nav-link">Tentang</a>
                <a href="#skills" class="nav-link">Keahlian</a>
                <a href="#experience" class="nav-link">Pengalaman</a>
                <a href="#projects" class="nav-link">Projek</a>
                <a href="#contact" class="nav-link">Kontak</a>
            </nav>
        </div>
    </header>

    <section id="hero" class="hero-section">
        <div class="container">
            <div class="hero-content">
                <span data-aos="fade-up" data-aos-delay="100">Halo, saya</span>
                <h1 data-aos="fade-up" data-aos-delay="200">Muhammad Farel Fahlevi</h1>
                <h2 data-aos="fade-up" data-aos-delay="300">Web Development, Design Development, and Software Development</h2>
                <p data-aos="fade-up" data-aos-delay="400">
                    Lulusan Sarjana Teknik Informatika dari Universitas Negeri Padang.
                </p>
                <a href="#projects" class="btn" data-aos="fade-up" data-aos-delay="500">Lihat Portofolio Saya</a>
            </div>
            <div class="hero-image" data-aos="fade-left" data-aos-delay="600">
                <img src="/img/foto_profil.jpg" alt="Foto Muhammad Farel Fahlevi"> 
            </div>
        </div>
    </section>

    <section id="about" class="content-section">
        <div class="container" data-aos="fade-up">
            <h2>Tentang Saya</h2>
            <p>
                Saya adalah seorang Sarjana lulusan Teknik Informatika dari Universitas Negeri Padang dengan fokus kuat pada Pengembangan Web, Pengembangan Desain, dan Pengembangan Perangkat Lunak. Saya telah mengembangkan landasan yang kokoh dalam teknologi front-end dan back-end, serta desain antarmuka yang responsif dan ramah pengguna. Mahir dalam beberapa bahasa pemrograman seperti JavaScript, PHP, dan Python, saya memiliki pengalaman langsung bekerja dengan Laravel untuk pengembangan aplikasi web dan Expo React Native untuk proyek aplikasi seluler lintas platform. 
            </p>
            <p>
                Perjalanan akademik saya juga membekali saya dengan pengetahuan kuat dalam manajemen basis data, desain sistem, dan alur kerja pengembangan modern. Saya bersemangat menciptakan solusi digital inovatif, mampu beradaptasi dengan teknologi baru, dan siap berkontribusi secara efektif sebagai bagian dari tim pengembangan yang dinamis.
            </p>
        </div>
    </section>

    <section id="education" class="content-section-alt">
        <div class="container" data-aos="fade-up">
            <h2>Pendidikan</h2>
            <div class="timeline">
                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-content">
                        <h3>Universitas Negeri Padang - Indonesia</h3>
                        <p>Sarjana Teknik Informatika</p>
                        <span class="timeline-date">Jul 2021 - Jun 2025</span>
                        <p>IPK: 3.65/4.00</p>
                    </div>
                </div>
                <div class="timeline-item" data-aos="fade-left">
                    <div class="timeline-content">
                        <h3>SMAN 2 Payakumbuh - Indonesia</h3>
                        <p>Matematika dan Ilmu Pengetahuan Alam (MIPA)</p>
                        <span class="timeline-date">Jul 2018 - Mei 2021</span>
                        <p>Nilai Rata-rata: 89.79</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="content-section">
        <div class="container" data-aos="fade-up">
            <h2>Keahlian</h2>
            <div class="skills-grid">
                <div class="skill-category" data-aos="fade-up" data-aos-delay="100">
                    <h3>Hard Skills</h3>
                    <ul>
                        <li>HTML, PHP, CSS, Java</li>
                        <li>Laravel, JavaScript, MySQL</li>
                        <li>Visual Studio Code</li>
                        <li>Jupyter Notebook</li>
                        <li>Figma, Expo React Native</li>
                        <li>Microsoft Office (Excel, Word, PowerPoint)</li>
                        <li>Adobe Premiere</li>
                    </ul>
                </div>
                <div class="skill-category" data-aos="fade-up" data-aos-delay="200">
                    <h3>Soft Skills</h3>
                    <ul>
                        <li>Leadership</li>
                        <li>Analytical Thinking</li>
                        <li>Teamwork</li>
                        <li>Communication</li>
                        <li>Problem-solving</li>
                        <li>Creativity</li>
                    </ul>
                </div>
                <div class="skill-category" data-aos="fade-up" data-aos-delay="300">
                    <h3>Bahasa</h3>
                    <ul>
                        <li>Indonesia (Native)</li>
                        <li>English (Intermediate)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="experience" class="content-section-alt">
        <div class="container" data-aos="fade-up">
            <h2>Pengalaman Magang</h2>
            <div class="experience-item">
                <h3>Information Technology Intern (Divisi STI)</h3>
                <h4>PT PLN (Persero) Unit Induk Wilayah Sumatera Barat</h4>
                <span class="experience-date">Juli - Sep 2024</span>
                <p>
                    Mengembangkan proyek tim Mande (Management Device) menggunakan Laravel dan MySQL untuk mengelola aset IT internal.
                </p>
            </div>
        </div>
    </section>

    <section id="projects" class="content-section">
        <div class="container" data-aos="fade-up">
            <h2>Projek</h2>
            <div class="projects-grid">
                
                <div class="project-card" data-aos="fade-up" data-aos-delay="100">
                    <h3>Projek Akhir (2025)</h3>
                    <p>Mengembangkan Kamus Digital TechVocab Istilah Komputer menggunakan Expo React Native, dengan database MySQL dan backend API Node.js Express.</p>
                </div>

                <div class="project-card" data-aos="fade-up" data-aos-delay="200">
                    <h3>Projek (2023)</h3>
                    <ul>
                        <li>Database Manajemen Rumah Sakit (SQL)</li>
                        <li>Website Toko Online Komputer (PHP & SQL)</li>
                        <li>Analisis Data Eksploratif COVID-19 di Korea Selatan</li>
                        <li>Website Profil Perusahaan Teaching Factory UNP</li>
                    </ul>
                </div>

                <div class="project-card" data-aos="fade-up" data-aos-delay="300">
                    <h3>Projek (2022-2023)</h3>
                    <ul>
                        <li>Website Reservasi Tiket Bioskop Online (PHP & SQL)</li>
                        <li>Website Prakiraan Cuaca (API & JSON)</li>
                        <li>Website E-commerce Sederhana (PHP & SQL)</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section id="certificates" class="content-section-alt">
        <div class="container" data-aos="fade-up">
            <h2>Sertifikasi & Kursus</h2>
            <ul>
                <li>(2025) Belajar Prinsip Pemrograman SOLID - Dicoding Indonesia</li>
                <li>(2025) Memulai Pemrograman dengan Java - Dicoding Indonesia</li>
                <li>(2024) HCIA-AI V3.5 - Huawei Talent Online</li>
                <li>(2023) International Public Lecture - Generative AI - Universitas Negeri Padang & UPNM</li>
                <li>(2023) Short Class Software Engineering Frontend Development - Universitas Negeri Padang</li>
                <li>(2022) 1st International Conference on Electrical and Electronics Engineering (IC3E)</li>
            </ul>
        </div>
    </section>

    <section id="contact" class="content-section">
        <div class="container" data-aos="fade-up">
            <h2>Hubungi Saya</h2>
            <p>Saya terbuka untuk peluang baru. Jangan ragu untuk menghubungi saya.</p>
            <div class="contact-links">
                <a href="mailto:farelfahlevi15@gmail.com" class="btn" data-aos="fade-up" data-aos-delay="100">Email</a>
                <a href="https://www.linkedin.com/in/rel-leviii" class="btn" target="_blank" data-aos="fade-up" data-aos-delay="200">LinkedIn</a>
                <a href="https://github.com/21343058" class="btn" target="_blank" data-aos="fade-up" data-aos-delay="300">GitHub</a>
                <a href="tel:+6285295450485" class="btn" data-aos="fade-up" data-aos-delay="400">Telepon</a>
            </div>
            <p class="location" data-aos="fade-up" data-aos-delay="500">Lokasi: Jakarta, Indonesia</p>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?= date('Y') ?> Muhammad Farel Fahlevi. Dibuat dengan CodeIgniter 4.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // Durasi animasi
            once: true,     // Animasi hanya sekali
        });
    </script>
</body>
</html>