<h2>Edit Mood</h2>
<form action="/mood/update/<?= $mood['id'] ?>" method="post">
    <label for="tanggal">Tanggal:</label>
    <input type="date" name="tanggal" value="<?= $mood['tanggal'] ?>"><br>

    <label for="mood_type_id">Mood:</label>
    <select name="mood_type_id">
        <?php foreach($moodTypes as $m): ?>
            <option value="<?= $m['id'] ?>" <?= ($m['id'] == $mood['mood_type_id']) ? 'selected' : '' ?>>
                <?= $m['emoji'] ?> <?= $m['nama_mood'] ?>
            </option>
        <?php endforeach; ?>
    </select><br>

    <label for="catatan">Catatan:</label>
    <textarea name="catatan"><?= $mood['catatan'] ?></textarea><br>

    <button type="submit">Update</button>
</form>
<p><a href="/mood/history">Batal</a></p>
