<?php
if (isset($data)) { //--- saat melakukan edit ambil data yang dikirim di controller untuk ditampilkan
    $id_mentor = $data['id_mentor'];
    $nama_mentor = $data['nama_mentor'];
    $foto_mentor = $data['foto_mentor'];
    $no_identitas_mentor = $data['no_identitas_mentor'];
    $jenis_kelamin_mentor = $data['jenis_kelamin_mentor'];
    $tempat_lahir_mentor = $data['tempat_lahir_mentor'];
    $tanggal_lahir_mentor = $data['tanggal_lahir_mentor'];
    $no_ponsel_mentor = $data['no_ponsel_mentor'];
    $email_mentor = $data['email_mentor'];
    $password_mentor = $data['password_mentor'];
    $latitude_mentor = $data['latitude_mentor'];
    $longitude_mentor = $data['longitude_mentor'];
    $alamat_mentor = $data['alamat_mentor'];
    $pekerjaan_mentor = $data ['pekerjaan_mentor'];
    $bio_mentor = $data['bio_mentor'];
    $tentang_mentor = $data['tentang_mentor'];
}
?>


<div class="row mt">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="showback">
            <table cellpadding="2">
                <tr>
                    <td style="width: 200px;" ><h4><i class="fa fa-angle-right"></i> Profil Mentor</h4></td>
                    <td></td>
                    <td><button class="btn btn-primary btn-xs" onclick="window.location.href = '<?= $this->config->base_url('/index.php/admin/mentor/edit') ?>/<?= $id_mentor ?>'">
                            <i class="fa fa-pencil"> EDIT PROFIL</i>
                        </button></td>
                        <td rowspan="7" style="width:500px;" >
                        <div class="pull-right">
                            <?php
                            if ($foto_mentor == "") {
                                echo 'Not have Photo';
                            } else {
                                echo '<img class="img-responsive" height="150" width="150" src="data:image/jpeg;base64,' . base64_encode($foto_mentor) . '"/>';
                            }
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;" colspan="3"><h2><strong><?php echo $nama_mentor; ?></strong></h2></td>
                </tr>
                <tr>
                    <td style="width: 200px;"><strong>Email</strong></td>
                    <td style="width: 20px;"> : </td>
                    <td><?php echo $email_mentor; ?></td>
                </tr>
                <tr>
                    <td style="width: 200px;"><strong>Jenis Kelamin</strong></td>
                    <td style="width: 20px;"> : </td>
                    <td><?php
                        if ($jenis_kelamin_mentor == 'P') {
                            echo 'Perempuan';
                        } else {
                            echo 'Laki-laki';
                        }
                        ?></td>
                </tr>
                <tr>
                    <td style="width: 200px;"><strong>Tempat Lahir</strong></td>
                    <td style="width: 20px;"> : </td>
                    <td><?php echo $tempat_lahir_mentor; ?></td>
                </tr>
                <tr>
                    <td style="width: 200px;"><strong>No. Telp</strong></td>
                    <td style="width: 20px;"> : </td>
                    <td><?php echo $no_ponsel_mentor; ?></td>
                </tr>
                <tr>
                    <td style="width: 200px;"><strong>Alamat</strong></td>
                    <td style="width: 20px;"> : </td>
                    <td><?php echo $alamat_mentor; ?></td>
                </tr>
                <tr>
                    <td colspan="3"><h4><i class="fa fa-angle-right"></i> Jadwal Ketersediaan Mengajar</h4></td>
                </tr>
                <tr>
                    <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr>
                            <th> Hari </th>
                            <th> Jam </th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php foreach ($dataJadwal as $m) { ?>
                            <tr>
                                <td><?= $m['hari_ketersediaan'] ?></td>
                                <td><?= $m['waktu_ketersediaan'] ?></td>
                            </tr>
                    <?php } ?>
                        </tbody>
                </table>
            </table>
        </div>
        <div class="showback">
            <table>
                <tr>
                    <td style="width: 200px;"><h4><i class="fa fa-angle-right"></i> Informasi Kursus</h4></td>
                    <td></td>
                    <td ><button class="btn btn-primary btn-xs" onclick="window.location.href = '<?= $this->config->base_url('/index.php/homementor/editHarga') ?>/<?= $id_mentor ?>'">
                            <i class="fa fa-pencil"> EDIT</i>
                        </button></td>
                </tr>
                <tr>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr>
                            <th>Tingkat</th>
                            <th>Mata Pelajaran</th>
                            <th> Harga </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataHarga as $m) { ?>
                            <tr>
                                <td><?= $m['tingkat_mapel'] ?></td>
                                <td><?= $m['nama_mapel'] ?></td>
                                <td><?= $m['harga'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </tr>
            </table>
        </div>
        <div class="showback">
            <table cellpadding="3"> 
                <tr>
                    <td style="width: 500px;"><h4><i class="fa fa-angle-right"></i> Kelas Aktif (diambil sama siswa, otomatis aktif)</h4></td>
                    <td></td>
                    <td><button class="btn btn-theme03 btn-xs" onclick="window.location.href = '<?= $this->config->base_url('/index.php/homementor/editKelasByMentor') ?>/<?= $id_mentor?>'">
                            <i class="fa fa-pencil"> EDIT KELAS</i>
                        </button></td>
                </tr>
                <tr>
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
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
                </tr>
            </table>
        </div>
    </div>
</div>