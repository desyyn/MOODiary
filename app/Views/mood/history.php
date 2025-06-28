<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Mood – MOODiary</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="history-page">

    <div class="history-container">
        <h2 class="history-title">📖 Riwayat Mood Kamu</h2>

        <?php if (session()->getFlashdata('success')) : ?>
            <p class="success-msg"><?= session()->getFlashdata('success') ?></p>
        <?php endif; ?>

        <?php if (count($moods) === 0): ?>
            <p class="empty-note">Belum ada mood yang dicatat 🐮</p>
        <?php endif; ?>

        <div class="mood-list">
            <?php foreach($moods as $mood): ?>
                <div class="mood-card">
                    <div class="mood-header">
                        <span class="mood-emoji"><?= $mood['emoji'] ?></span>
                        <span class="mood-date"><?= $mood['tanggal'] ?></span>
                    </div>
                    <p class="mood-text"><?= esc($mood['catatan']) ?></p>
                    <div class="mood-actions">
                        <a href="/mood/edit/<?= $mood['id'] ?>" class="btn-action edit">Edit</a>
                        <a href="/mood/delete/<?= $mood['id'] ?>" class="btn-action delete" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <a href="/dashboard" class="back-link">← Kembali ke Dashboard</a>
    </div>

</body>
</html>