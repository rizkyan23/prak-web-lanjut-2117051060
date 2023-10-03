<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Halaman Profil</title>
    <style>

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .content {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="content">
        <br>
        <img src="<?= base_url('assets/img/ultramen.jpeg') ?>" alt="Foto Profil" style="width: 100px; "><br>

        <div class="badge bg-light text-dark">
            <?= $nama?>
        </div>
        <br>

        <div class="badge bg-light text-dark">
            <?= $kelas?>
        </div>
        <br>

        <div class="badge bg-light text-dark">
            <?= $npm?>
        </div>
        <br>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
