<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="center">
    <h1>Create Kelas</h1>


    <form action="<?= base_url('/kelas/store') ?>" method="POST" enctype="multipart/form-data">

        <div class="txt_field">
          <input type="text" name="nama_kelas" placeholder="Kelas">
          <span></span>
        </div>

        <div class="txt_field">
          <input type="text" name="angkatan" placeholder="Angkatan">
          <span></span>
        </div>

        <input type="submit" value="Submit">
    </div>
    </form>
<?= $this->endSection() ?>