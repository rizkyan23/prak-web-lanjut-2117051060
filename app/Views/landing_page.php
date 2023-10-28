<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<section class="home">
    <div class="home-text">
        <h1>Selamat Datang <br> Mahasiswa Ilmu Komputer</h1>
        <p>Bergabunglah dengan kami dalam perjalanan untuk menggali lebih dalam ilmu komputer, <br>
        berkolaborasi dalam proyek-proyek inovatif, dan membangun koneksi yang berarti dalam komunitas kami.b <br>
        Bersama, kita dapat mencapai potensi penuh kita dan menciptakan masa depan yang cerah dalam dunia teknologi. <br>
        Selamat menjelajahi website kami!</p>
    </div>

    <div class="card-container">
        <div class="card">
            <img src="<?= base_url("assets/img/programming.jpeg") ?>" alt="Gambar Programming">
        </div>
        <div class="card">
            <img src="<?= base_url("assets/img/datascience.jpg") ?>" alt="Gambar 2">
        </div>
        <div class="card">
            <img src="<?= base_url("assets/img/multimedia.jpg") ?>" alt="Gambar 3">
        </div>
    </div>
</section>

<?= $this->endSection() ?>
