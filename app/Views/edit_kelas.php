<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="center">
    <h1>Edit Kelas</h1>

    <form action="<?= base_url('/kelas/'.$kelas['id']) ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
    <?= csrf_field()?>

        <div class="txt_field">
            <input type="text" name="nama_kelas" placeholder="Kelas" value="<?= $kelas['nama_kelas'] ?>">
            <span></span>
        </div>

        <div class="txt_field">
          <input type="text" name="angkatan" placeholder="Angkatan" value="<?= $kelas['angkatan'] ?>">
          <span></span>
        </div>
	
        <input type="submit" value="Save">
    </div>
    </form>
<?= $this->endSection() ?>