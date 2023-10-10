<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="center">
    <h1>Create User</h1>

    <?php if(session()->getFlashdata('errors')) : ?>
            <div class="row">
                <div class="col">
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('errors') ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>


    <form action="<?= base_url('/user/store') ?>" method="POST" enctype="multipart/form-data">

        <div class="txt_field">
          <input type="text" name="nama" placeholder="Nama">
          <span></span>
        </div>

        <div class="txt_field">
          <input type="text" name="npm" placeholder="NPM">
          <span></span>
        </div>

        <div class="txt_field">
          <input type="file" name="foto" placeholder="Foto">
          <span></span>
        </div>

        <div class="txt_field">
          <select name="kelas" id="kelas">
              <?php
              foreach ($kelas as $item){
                  ?>
                  <option value="<?= $item['id'] ?>">
                      <?= $item['nama_kelas'] ?>
                  </option>
                  <?php
              }
              ?>
              
          </select>
        </div>
        <input type="submit" value="Submit">
    </div>
    </form>
<?= $this->endSection() ?>