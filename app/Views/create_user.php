<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"><br>
<body>
<div class="center">
    <h1>Create User</h1>

    <?php if(session()->getFlashdata('errors')) : ?>
            <div class="row">
                <div class="col-md-5">
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('errors') ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>


    <form action="<?= base_url('/user/store') ?>" method="POST">

        <div class="txt_field">
          <input type="text" name="nama" placeholder="Nama">
          <span></span>
        </div>

        <div class="txt_field">
          <input type="text" name="npm" placeholder="NPM">
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
</body>
</html>