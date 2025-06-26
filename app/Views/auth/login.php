<h2>Login</h2>
<form action="/login" method="post">
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">Login</button>
</form>
<p><a href="/register">Belum punya akun?</a></p>
<?php if (session()->getFlashdata('error')) : ?>
    <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
<?php endif; ?>
