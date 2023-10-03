<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="filter">

 </div>

 <table >

 
<thead>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>NPM</th>
        <th>KELAS </th>
        <th>AKSI</th>
    </tr>
</thead>

<tbody>
        <?php
        $no = 1;
        foreach ($user as $user) {
        ?>
        
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td></td>
        </tr>

        <?php
        }
        ?>

    </tbody>
</table>
<?= $this->endSection() ?>
