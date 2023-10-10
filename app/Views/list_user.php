<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="filter">

 </div>
    <div class="row">
        <div class="col">
            <a href="<? base_url(relativePath:'user/create')?>">Tambah Data</a>
        </div>
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
            <td>
                <a href="<?= base_url('user/'.$user['id']) ?>">Detail</a>
                <button type="button">Edit</button>
                <button type="button">Delete</button>
            </td>
        </tr>

        <?php
        }
        ?>

    </tbody>
</table>
<?= $this->endSection() ?>
