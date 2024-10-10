<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Konsultasi & Freelance</title>
    <link rel="stylesheet" href="style.css"> <!-- Tambahkan file CSS eksternal -->
</head>
<body>
    <header>
        <div class="container">
            <h1>Layanan Konsultasi & Freelance</h1>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="container">
            <h2>Solusi Profesional untuk Kebutuhan Anda</h2>
            <p>Menawarkan jasa konsultasi dan freelance di bidang desain web, pemasaran digital, dan lainnya.</p>
            <a href="#services" class="cta">Lihat Layanan</a>
        </div>
    </section>

    <section id="services" class="services-section">
        <div class="container">
            <h2>Layanan Kami</h2>
            <div class="service-list">
                <div class="service">
                    <h3>Desain Web</h3>
                    <p>Membantu Anda menciptakan website yang modern dan responsif, sesuai kebutuhan bisnis.</p>
                </div>

                <div class="service">
                    <h3>Pemasaran Digital</h3>
                    <p>Menyusun strategi pemasaran digital untuk meningkatkan visibilitas dan penjualan produk Anda.</p>
                </div>

                <div class="service">
                    <h3>SEO & SEM</h3>
                    <p>Optimalkan situs Anda untuk mesin pencari, dan kelola kampanye iklan yang efektif.</p>
                </div>

                <div class="service">
                    <h3>Konten Kreatif</h3>
                    <p>Menciptakan konten berkualitas tinggi untuk situs web, media sosial, dan kebutuhan promosi Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
            <div class="form-container">
        <h2>Formulir Konsultasi</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil data dari form
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            // Format pesan untuk WhatsApp
            $whatsappMessage = "Nama: $name%0AEmail: $email%0APesan: $message";

            // Nomor WhatsApp tujuan
            $phone = "+6285785059947";

            // Redirect ke WhatsApp Web atau Aplikasi WhatsApp di ponsel
            $whatsappURL = "https://wa.me/$phone?text=$whatsappMessage";
            echo "<script>window.location.href = '$whatsappURL';</script>";
            exit();
        }
        ?>
        <form action="" method="POST">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
    </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Layanan Konsultasi & Freelance. Semua Hak Dilindungi.</p>
        </div>
    </footer>
</body>
</html>
