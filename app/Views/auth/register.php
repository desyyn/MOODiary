<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MOODiary – Register</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
</head>
<body class="register-enhanced">

    <div class="register-container-enhanced">

        <section class="register-left">
            <h1>🌼 Gabung ke MOODiary</h1>
            <p>Jurnal mood harianmu yang lucu dan personal 💖</p>
            <ul class="features">
                <li>🌈 Catat mood setiap hari</li>
                <li>📜 Lihat riwayat mood kamu</li>
                <li>🎯 Lebih mengenal diri sendiri</li>
            </ul>
        </section>

        <section class="register-right">
            <div class="form-card-wide">
                <h2>🐮 MOODiary</h2>
                <p class="subtitle">Buat akun baru untuk mulai mencatat!</p>

                <?php if (session()->getFlashdata('error')) : ?>
                    <p class="error"><?= session()->getFlashdata('error') ?></p>
                <?php endif; ?>

                <form action="/register" method="post" class="register-form">
                    <label>Nama</label>
                    <input type="text" name="name" placeholder="Nama kamu" required>

                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email aktif" required>

                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password" required>

                    <button type="submit">Daftar Sekarang</button>
                </form>

                <p class="register-link">Sudah punya akun? <a href="/login">Login di sini</a></p>
            </div>
        </section>

    </div>

</body>
</html>