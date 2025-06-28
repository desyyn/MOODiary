<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mood – MOODiary</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="add-mood-enhanced">

    <header class="mood-header">
        <h1>🌈 Tambah Mood Hari Ini 💌</h1>
        <p class="subtitle">📍 Catat perasaanmu seperti nulis jurnal harian 🎀</p>
    </header>

    <main class="mood-form-wrapper">
        <form action="/mood/save" method="post" class="mood-form-card">
            <div class="form-title">
                <h2>📝 Form Mood 📝</h2>
                <p>Isi detail mood kamu hari ini</p>
            </div>

            <div class="form-group">
                <label for="tanggal">📅 Tanggal</label>
                <input type="date" name="tanggal" value="<?= date('Y-m-d') ?>" required>
            </div>

            <div class="form-group">
                <label for="mood_type_id">😶 Mood Kamu</label>
                <select name="mood_type_id" required>
                    <?php foreach($moodTypes as $m): ?>
                        <option value="<?= $m['id'] ?>"><?= $m['emoji'] ?> <?= $m['nama_mood'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="catatan">💬 Catatan Hari Ini</label>
                <textarea name="catatan" placeholder="Tulis cerita atau perasaanmu di sini..."></textarea>
            </div>

            <button type="submit" class="btn-save-mood">Simpan Mood</button>
            <a href="/dashboard" class="back-link">← Kembali ke Dashboard</a>
        </form>
    </main>

    <footer class="mood-footer">
        <p>🌸 Tetap semangat dan jujur dengan perasaanmu ya!</p>
    </footer>

</body>
</html>