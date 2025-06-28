<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mood – MOODiary</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="edit-mood-page">

    <div class="edit-wrapper">
        <div class="edit-card">
            <h2>✏️ Edit Mood Kamu</h2>
            <p class="mood-subtext">Revisi mood yang udah kamu catat 💭</p>

            <form action="/mood/update/<?= $mood['id'] ?>" method="post" class="edit-form">
                <div class="form-group">
                    <label for="tanggal">📅 Tanggal:</label>
                    <input type="date" name="tanggal" value="<?= $mood['tanggal'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="mood_type_id">😌 Mood:</label>
                    <select name="mood_type_id" required>
                        <?php foreach($moodTypes as $m): ?>
                            <option value="<?= $m['id'] ?>" <?= ($m['id'] == $mood['mood_type_id']) ? 'selected' : '' ?>>
                                <?= $m['emoji'] ?> <?= $m['nama_mood'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="catatan">📝 Catatan:</label>
                    <textarea name="catatan" required><?= $mood['catatan'] ?></textarea>
                </div>

                <div class="edit-actions">
                    <button type="submit" class="btn-update">💾 Simpan</button>
                    <a href="/mood/history" class="btn-cancel">❌ Batal</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>