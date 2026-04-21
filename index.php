<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Fadil Anggara | Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.jpg" type="image/x-icon"> <!-- Tambahkan ini -->
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav-list" id="nav-list">
                <li><a href="#about">Tentang Saya</a></li>
                <li><a href="#projects">Proyek</a></li>
                <li><a href="https://vdganh.my.id/htdocs/"></a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
        <div class="profile">
            <img src="images/logo.jpg" alt="Foto Profil">
            <h1>Muhammad Fadil Anggara</h1>
            <p>Web Developer & Designer (Vdganh)</p>
        </div>
    </header>
    <main>
        <section id="about" class="about">
            <h2>Tentang Saya</h2>
            <p>Halo! Saya Muhammad Fadil Anggara, seorang web developer profesional sekaligus seorang cyber security. Saya suka menciptakan situs web yang interaktif dan menarik. Anda juga mungkin mengenal saya sebagai Vdganh atau Anggara. Hubungi saya jika ingin membuat website atau ingin mengecek keamanan website mu dengan harga terjangkau ! Hubungi <p>Email: <a href="mailto:vdganh.my.id@gmail.com">vdganh.my.id@gmail.com</a></p>
 </p>
        </section>
        <section id="projects" class="projects">
            <h2>Proyek</h2>
            <div class="project-list">
                <div class="project-item">
                    <h3>CekSehat</h3>
                    <p>Aplikasi untuk pemeriksaan kesehatan.</p>
                </div>
                <div class="project-item">
                    <h3>GaleriFoto</h3>
                    <p>Galeri untuk manajemen dan tampilan foto.</p>
                </div>
                <div class="project-item">
                    <h3>VDTestIQ</h3>
                    <p>Platform untuk pengujian IQ.</p>
                </div>
                <div class="project-item">
                    <h3>KeuanganVD</h3>
                    <p>Aplikasi manajemen keuangan.</p>
                </div>
                <div class="project-item">
                    <h3>VdganhKasir</h3>
                    <p>Sistem POS untuk manajemen penjualan dan inventaris.</p>
                </div>
                <div class="project-item">
                    <h3>Kontrol dan Cek Gaji Karyawan</h3>
                    <p>Sistem pengelolaan gaji dan gaji karyawan.</p>
                </div>
                <div class="project-item">
                    <h3>Cek Data Absen dan Scan Absen QR</h3>
                    <p>Pemantauan kehadiran dengan pemindaian kode QR.</p>
                </div>
                <div class="project-item">
                    <h3>Lacak Seseorang</h3>
                    <p>Aplikasi untuk melacak individu.</p>
                </div>
                <div class="project-item">
                    <h3>Web AI-V Crypto</h3>
                    <p>Situs web terkait crypto yang didukung oleh AI.</p>
                </div>
                <div class="project-item">
                    <h3>KeuanganV2</h3>
                    <p>Aplikasi manajemen keuangan yang diperbarui.</p>
                </div>
            </div>
        </section>
        <section id="contact" class="contact">
            <h2>Kontak</h2>
            <p>Website: <a href="https://vdganh.my.id" target="_blank">vdganh.my.id</a></p>
            <p>Email: <a href="mailto:vdganh.my.od@gmail.com">vdganh.my.id</a></p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Muhammad Fadil Anggara. All rights reserved.</p>
    </footer>
    <script src="js/script.js"></script>
    <script>
        const mobileMenu = document.getElementById('mobile-menu');
        const navList = document.getElementById('nav-list');

        mobileMenu.addEventListener('click', () => {
            navList.classList.toggle('active'); // Toggle kelas 'active' untuk menampilkan menu
        });

        // Menambahkan event listener untuk menambahkan animasi gulir pada menu yang dipilih
        const navLinks = document.querySelectorAll('.nav-list a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navList.classList.remove('active'); // Menyembunyikan menu setelah klik
            });
        });
    </script>
</body>
</html>
