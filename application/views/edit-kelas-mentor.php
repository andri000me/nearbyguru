<form class="form-horizontal style-form" method="post">
    <h4><li class="fa fa-pencil-square"></li> Edit Kelas</h4>

    <div class="form-panel">
        <h5><li class="fa fa-info"></li> Silahkan tekan 'Selesai' jika Kursus sudah ditiadakan</h5>
        <table class="table table-striped table-advance table-hover">
            <thead>
                <tr>
                    <th> Tingkat </th>
                    <th> Mata Pelajaran </th>
                    <th> Nama Siswa </th>
                    <th> Alamat Siswa </th>
                    <th> No. Ponsel Siswa </th>
                    <th> Biaya per Jam </th>
                    <th> Waktu Masuk </th>
                    <th> Waktu Keluar </th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <?php foreach ($dataKelas as $m) { ?>
                <tbody>
                    <tr>
                        <td><?= $m['tingkat_mapel'] ?></td>
                        <td><?= $m['nama_mapel'] ?></td>
                        <td><?= $m['nama_siswa'] ?></td>
                        <td><?= $m['alamat_siswa'] ?></td>
                        <td><?= $m['no_ponsel_siswa'] ?></td>
                        <td><?= $m['harga'] ?></td>
                        <td><?= $m['waktu_masuk'] ?></td>
                        <td><?= $m['waktu_keluar'] ?></td>
                        <td> <button type="button" class="btn btn-theme btn-xs" onclick="window.location.href = '<?= $this->config->base_url('/index.php/homementor/editJadwalKelas') ?>/<?= $m['id_mentor'] ?>/<?= $m['id_kelas'] ?>'">
                                <i class="fa fa-hourglass-half ">
                                    Ubah waktu
                                </i>
                            </button>
                        </td>
                        <td> <button type="button" class="btn btn-danger btn-xs" onclick="window.location.href = '<?= $this->config->base_url('/index.php/homementor/deleteKelasByMentor') ?>/<?= $m['id_mentor'] ?>/<?= $m['id_kelas'] ?>'">
                                <i class="fa fa-trash-o ">
                                    Selesai
                                </i>
                            </button>
                        </td>
                         
                    </tr>
                </tbody>
            <?php } ?>
            <tr>
                <td><button type="button" class="btn btn-theme02 btn-xs" onclick="window.location.href = '<?= $this->config->base_url('/index.php/homementor/') ?>'">
                        <i class="fa fa-arrow-circle-left ">
                            Kembali
                        </i>
                    </button></td>
            </tr>
        </table>
    </div>
</form>