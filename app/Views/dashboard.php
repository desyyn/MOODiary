<h2>Halo, <?= session()->get('user_name') ?></h2>
<p><a href="/mood/add">+ Tambah Mood</a></p>
<p><a href="/mood/history">Lihat Riwayat Mood</a></p>
<p><a href="/logout">Logout</a></p>
<?php if (session()->getFlashdata('success')) : ?>
    <p style="color: green"><?= session()->getFlashdata('success') ?></p>
<?php endif; ?>
