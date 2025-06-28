<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard – MOODiary</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
</head>
<body class="dashboard-fun">

    <header class="wave-header">
        <h1>Hai, <?= session()->get('user_name') ?>! 🌷</h1>
        <p class="subtitle">Apa mood kamu hari ini?</p>
    </header>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="notif-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <section class="dashboard-actions">
        <a href="/mood/add" class="action-card">
            <div class="emoji">🖊️</div>
            <div class="label">Tambah Mood</div>
        </a>

        <a href="/mood/history" class="action-card">
            <div class="emoji">📜</div>
            <div class="label">Riwayat Mood</div>
        </a>

        <a href="/logout" class="action-card logout">
            <div class="emoji">🚪</div>
            <div class="label">Logout</div>
        </a>
    </section>

    <footer class="footer-cute">
        <p>🌈 MOODiary – Jurnal mood harianmu 💖</p>
    </footer>

</body>
</html>