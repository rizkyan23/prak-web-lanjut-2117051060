<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
    <div class="profile-container">
        <img src="<?= $user['foto'] ?? 'gedik.jpg'?>" width="100%" height="100%" alt="">
        <div class="profile-name"><?= $user['nama'] ?></div>
        <div class="profile-info">
            <p><?= $user['npm'] ?></p>
            <p><?= $user['nama_kelas'] ?></p>
        </div>
<?= $this->endSection() ?>
