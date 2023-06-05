<?= $this->extend('layout/layout-login'); ?>
<?= $this->section('content'); ?>

    <div class="login">
      <br />
      <div class="card-log">
        <form action="<?= url_to('login') ?>" method="post">
          <h2>Masuk Akun</h2>

          <?= csrf_field() ?>
      <div style="">
      <center>
        <?= view('Myth\Auth\Views\_message_block') ?>
      </center>
      
      </div>

      <div class="email">
        <label for="email" method="POST" class="">Email</label> <br />
      </div>
      <?php if ($config->validFields === ['email']): ?>
      <div class="email">
        <input type="email" id="username" class="<?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?=lang('Auth.email')?>" /><div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
      </div>
    <?php else: ?>
      <div class="username inn">
        <input type="text" class="<?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?=lang('Auth.email')?>" />
          <div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
      </div>
    <?php endif; ?>
          <div class="pass">
            <label for="password" method="POST" class="">Password</label> <br />
        <input type="password" name="password" id="password" class="<?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" />
          <div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
      </div>
          <div class="bwh">
            <div class="checkbb"><input type="checkbox" name="" id="" /> ingat saya</div>
            <div class="lupapass">
              <a href="#">Lupa Password?</a>
            </div>
          </div>
          <div class="masuklogin">
            <input type="submit" value="Masuk" />
          </div>
        </form>

        <div class="atau">
          <div class="line"></div>
          <p>atau</p>
          <div class="line"></div>
        </div>

        <div class="google">
          <div class="g">
            <div class="logo"></div>
            <p>Masuk dengan Google</p>
          </div>
        </div>

        <div class="blmadaakun">Belum punya akun? <a href="/register">Daftar sekarang</a></div>
      </div>
    </div>

    <?= $this->endSection(); ?>
