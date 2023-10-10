<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="profile-container">
        <img src="<?= $user['foto']?? base_url('/assets/img/ultramen.jpeg')?>" alt="..." style = "width : 200px; border-radius: 50%;"><br><br>
        <div class="profile-name"><?= $user['nama']?></div>
        <div class="profile-info">
            <p><?= $user['npm']?></p>
            <p><?= $user['nama_kelas']?></p>
        </div>
</div>
<?= $this->endSection() ?>
