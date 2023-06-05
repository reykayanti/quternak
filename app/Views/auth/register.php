<?= $this->extend('layout/layout-login'); ?>
<?= $this->section('content'); ?>
    <div class="register">
      <br />
      <div class="card-log card-log2">
        <form action="<?= url_to('register') ?>" method="post">
        <?= csrf_field() ?>
          <h2>Daftar Akun</h2>

          <?= view('Myth\Auth\Views\_message_block') ?>
         
          <div class="username email">
            <label for="username" method="POST" class="">Username</label> <br />
            <input type="text" class="
        <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>"  name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>"/>
          </div>
          <div class="email">
            <label for="email" method="POST" class="">Email</label> <br />
            <input type="email" class="<?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" 
          name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
          </div>
          <div class="pass">
            <label for="password" method="POST" class="">Password</label> <br />
            <input type="password" name="password" class="<?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
          </div>
          <div class="showpass pass">
            <label for="password" method="POST" class="">Password</label> <br />
            <input type="password" name="pass_confirm"  class="<?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
          </div>
          
          <div class="ket">
            Dengan mendaftar akun, Saya setuju dengan <a href="#">Syarat & Ketentuan</a> dan <a href="#">kebijakan privasi</a> teratour
          </div>
          <div class="masuklogin">
            <input type="submit" value="Daftar" />
          </div>
        </form>

        <div class="atau">
          <div class="line"></div>
          <p>atau</p>
          <div class="line"></div>
        </div>

        <div class="google">
          <a href="#"
            ><div class="g">
              <div class="logo"></div>
              <p>Daftar dengan Google</p>
            </div></a
          >
        </div>

        <div class="blmadaakun">Sudah punya akun? <a href="/login">Masuk</a></div>
      </div>
    </div>
  </body>
</html>
<?= $this->endSection(); ?>
