<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MOODiary – Login</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
</head>
<body class="login-modern">

    <div class="login-hero">
        <h1 class="big-title">🌤️ Selamat Datang!</h1>
        <p class="big-subtitle">Masuk untuk melacak mood harianmu</p>
    </div>

    <div class="form-area">
        <div class="form-card">
            <h2 class="title">🔖 MOODiary 🐮</h2>
            <p class="subtitle">Login to Your Mood Diary</p>

            <?php if (session()->getFlashdata('error')) : ?>
                <p class="error"><?= session()->getFlashdata('error') ?></p>
            <?php endif; ?>

            <form action="/login" method="post" class="login-form">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" required>

                <label>Password</label>
                <input type="password" name="password" placeholder="Password" required>

                <button type="submit">Masuk</button>
            </form>

            <p class="register-link">Belum punya akun? <a href="/register">Daftar di sini</a></p>
        </div>
    </div>

</body>
</html>