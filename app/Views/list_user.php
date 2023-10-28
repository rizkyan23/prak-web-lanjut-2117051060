<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <div class="tambah">
        <a href="/user/create" class="btn btn-primary">Tambah Data</a>
    </div>


<table >
<thead>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>NPM</th>
        <th>KELAS </th>
        <th>ANGKATAN</th>
        <th>AKSI</th>
        <th>LAINNYA</th>
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
            <td><?= $user['angkatan'] ?></td>
            <td>
                <a href="<?= base_url('/user/'.$user['id'].'/edit') ?>" class="btn btn-warning">Edit</a>
                <a href="<?= base_url('user/'.$user['id']) ?>" class="btn btn-success">Detail</a>
            </td>
            <td>
                <form action="<?= base_url('user/'.$user['id']) ?>" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <?= csrf_field()?>
                <button type="submit" class="btn btn-danger">Delete</button> 
                </form>
            </td>
        </tr>

        <?php
        }
        ?>

    </tbody>
</table>
<?= $this->endSection() ?>
