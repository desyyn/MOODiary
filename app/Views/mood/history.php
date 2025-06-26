<h2>Riwayat Mood</h2>
<ul>
    <?php foreach($moods as $mood): ?>
        <li>
            <?= $mood['emoji'] ?> <?= $mood['tanggal'] ?> - <?= esc($mood['catatan']) ?>
            <a href="/mood/edit/<?= $mood['id'] ?>">Edit</a> |
            <a href="/mood/delete/<?= $mood['id'] ?>" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
        </li>
    <?php endforeach; ?>
    
</ul>

<p><a href="/dashboard">Kembali</a></p>
