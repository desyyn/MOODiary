<!DOCTYPE html>
<html>
<head>
    <title>Log Berhasil!</title>
    <style>
        body {
            font-family: sans-serif;
            text-align: center;
            padding-top: 80px;
        }
        .emoji {
            font-size: 5rem;
        }
        .button {
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #6c63ff;
            color: white;
            border: none;
            border-radius: 8px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="emoji"><?= $mood['emoji'] ?? '🌟' ?></div>
    <h2>Mood kamu hari ini: <?= $mood['nama_mood'] ?? 'Tidak diketahui' ?></h2>
    <p><?= esc($mood['catatan']) ?: 'Semoga harimu menyenangkan!' ?></p>

    <a class="button" href="/mood/history">Lihat Riwayat Mood</a>
</body>
</html>
