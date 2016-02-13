<h2>Daftar Siswa</h2>

<button class="btn btn-theme03 btn-xs" onclick="window.location.href = '<?= $this->config->base_url('/index.php/admin/student/input') ?>'">
    <i class="fa fa-book"> TAMBAH</i>
</button>

<table class="table table-striped table-advance table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>No Identitas</th>
            <th>Jenis Kelamin</th>
            <th>Sekolah</th>
            <th>Alamat</th>
            <th colspan='2'>Action</th>
        </tr>
    </thead>
    <?php foreach ($data as $m) { ?>
        <tbody>
            <tr>
                <td><?= $m['id_siswa'] ?></td>
                <td><a href="<?= $this->config->base_url('/index.php/homesiswa/view') ?>/<?= $m['id_siswa'] ?>"><?= $m['nama_siswa'] ?></a></td>
                <td><?= $m['no_identitas_siswa'] ?></td>
                <td><?= $m['jenis_kelamin_siswa'] ?></td>
                <td><?= $m['sekolah_siswa'] ?></td>
                <td><?= $m['alamat_siswa'] ?></td>
                <td> 
                    <button class="btn btn-primary btn-xs" onclick="window.location.href = '<?= $this->config->base_url('/index.php/admin/student/edit') ?>/<?= $m['id_siswa'] ?>'">
                        <i class="fa fa-pencil"> VIEW and EDIT</i>
                    </button>
                    <a class="btn btn-danger btn-xs" onclick="return doconfirm();" href="<?= $this->config->base_url('/index.php/admin/student/delete') ?>/<?= $m['id_siswa'] ?>"><i class="fa fa-trash-o "></i>HAPUS</a>
                </td>
            </tr>
        </tbody>
    <?php } ?>
</table>