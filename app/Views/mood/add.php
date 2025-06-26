<h2>Tambah Mood</h2>
<form action="/mood/save" method="post">
    <label for="tanggal">Tanggal:</label>
    <input type="date" name="tanggal" value="<?= date('Y-m-d') ?>"><br>

    <label for="mood_type_id">Mood:</label>
    <select name="mood_type_id">
        <?php foreach($moodTypes as $m): ?>
            <option value="<?= $m['id'] ?>"><?= $m['emoji'] ?> <?= $m['nama_mood'] ?></option>
        <?php endforeach; ?>
    </select><br>

    <label for="catatan">Catatan:</label>
    <textarea name="catatan"></textarea><br>

    <button type="submit">Simpan</button>
</form>
<p><a href="/dashboard">Kembali ke Dashboard</a></p>
