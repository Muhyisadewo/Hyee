<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
</body>
</html>
