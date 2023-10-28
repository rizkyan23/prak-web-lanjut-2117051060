<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <div class="tambah">
        <a href="/kelas/create" class="btn btn-primary">Tambah Data</a>
    </div>


<table >
<thead>
    <tr>
        <th>NO</th>
        <th>KELAS</th>
        <th>ANGKATAN</th>
        <th>AKSI</th>
        <th>LAINNYA</th>
    </tr>
</thead>

<tbody>
        <?php
        $no = 1;
        foreach ($kelas as $kelas) {
        ?>
        
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $kelas['nama_kelas'] ?></td>
            <td><?= $kelas['angkatan'] ?></td>
            <td>
                <a href="<?= base_url('/kelas/'.$kelas['id'].'/edit') ?>" class="btn btn-warning">Edit</a>
            </td>
            <td>
                <form action="<?= base_url('kelas/'.$kelas['id']) ?>" method="POST">
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
