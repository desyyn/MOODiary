<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Berhasil Dicatat! – MOODiary</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
</head>
<body class="success-page-v2">

    <div class="confetti-bg"></div>

    <div class="success-wrapper">
        <div class="emoji-bounce"><?= $mood['emoji'] ?? '🌟' ?></div>
        <h2 class="success-title">Yeay! Mood baru kamu sudah tercatat 🎉</h2>
        <p class="mood-today">Mood hari ini: <span><?= $mood['nama_mood'] ?? 'Tidak diketahui' ?></span></p>
        <p class="mood-note"><?= esc($mood['catatan']) ?: 'Semoga harimu menyenangkan!' ?></p>
        <p class="quote">"Setiap emosi itu berharga 💖"</p>

        <a href="/mood/history" class="btn-history">Lihat Riwayat Mood</a>
    </div>

</body>
</html>