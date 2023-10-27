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


    <form action="<?= base_url('/user/'.$user['id']) ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
    <?= csrf_field()?>

        <div class="txt_field">
            <input type="text" name="nama" placeholder="Nama" value="<?= $user['nama'] ?>">
            <span></span>
        </div>


        <div class="txt_field">
          <input type="text" name="npm" placeholder="NPM" value="<?= $user['npm'] ?>">
          <span></span>
        </div>
	
	<img src="<?= $user['foto'] ?? 'assets/img/gedik.jpg' ?>">
        <div class="mb-3">
            <label for="formFile" class="form-label">Foto</label>
            <input type="file" name="foto" id="formFile">
        </div>

        <div class="txt_field">
          <select name="kelas" id="kelas">
              <?php
              foreach ($kelas as $item){
                  ?>
                  <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?> >
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