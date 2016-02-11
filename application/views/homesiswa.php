<?php
if (isset($data)) { //--- saat melakukan edit ambil data yang dikirim di controller untuk ditampilkan
    $id_siswa = $data['id_siswa'];
    $nama_siswa = $data['nama_siswa'];
    $no_identitas_siswa = $data['no_identitas_siswa'];
    $jenis_kelamin_siswa = $data['jenis_kelamin_siswa'];
    $tempat_lahir_siswa = $data['tempat_lahir_siswa'];
    $tanggal_lahir_siswa = $data['tanggal_lahir_siswa'];
    $no_ponsel_siswa = $data['no_ponsel_siswa'];
    $sekolah_siswa = $data['sekolah_siswa'];
    $email_siswa = $data['email_siswa'];
    $password_siswa = $data['password_siswa'];
    $latitude_siswa = $data['latitude_siswa'];
    $longitude_siswa = $data['longitude_siswa'];
    $alamat_siswa = $data['alamat_siswa'];
}
//--------FORM-------//
?>
<h5><i class="fa fa-home"> </i> Home Siswa</h5>
<div class="row">
    <div class="col-md-12">
        <div class="showback">
            <table cellpadding="3">
                <tr>
                    <td style="width: 200px;" ><h4><i class="fa fa-male"> </i> Profil</h4></td>
                    <td></td>
                    <td><button class="btn btn-primary" onclick="window.location.href = '<?= $this->config->base_url('/index.php/admin/student/edit') ?>/<?= $id_siswa ?>'">
                            <i class="fa fa-pencil"> EDIT PROFIL</i>
                        </button></td>
                </tr>
                <tr>
                    <td style="width: 200px;" colspan="3"><h2><strong><?php echo $nama_siswa; ?></strong></h2></td>
                </tr>
                <tr>
                    <td style="width: 200px;"><strong>Email</strong></td>
                    <td style="width: 20px;"> : </td>
                    <td><?php echo $email_siswa; ?></td>
                </tr>
                <tr>
                    <td style="width: 200px;"><strong>Jenis Kelamin</strong></td>
                    <td style="width: 20px;"> : </td>
                    <td><?php
                        if ($jenis_kelamin_siswa == 'P') {
                            echo 'Perempuan';
                        } else {
                            echo 'Laki-laki';
                        }
                        ?></td>
                </tr>
                <tr>
                    <td style="width: 200px;"><strong>Tempat Lahir</strong></td>
                    <td style="width: 20px;"> : </td>
                    <td><?php echo $tempat_lahir_siswa; ?></td>
                </tr>
                <tr>
                    <td style="width: 200px;"><strong>No. Telp</strong></td>
                    <td style="width: 20px;"> : </td>
                    <td><?php echo $no_ponsel_siswa; ?></td>
                </tr>
                <tr>
                    <td style="width: 200px;"><strong>Alamat</strong></td>
                    <td style="width: 20px;"> : </td>
                    <td><?php echo $alamat_siswa; ?></td>
                </tr>

            </table>
        </div>
        <div class="showback">
            <table cellpadding="3">
                <tr>
                    <td style="width: 200px;" ><h4><i class="fa fa-building"> </i> Kelas </h4></td>
                    <td><button class="btn btn-theme03" onclick="window.location.href = '<?= $this->config->base_url('/index.php/admin/harga/') ?>'">
                            <i class="fa fa-search"> Cari Kursus</i>
                        </button></td>
                    <td></td>
                </tr>
                <tr>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr>
                            <th> Tingkat </th>
                            <th> Nama Mata Pelajaran </th>
                            <th> Nama Mentor </th>
                            <th> Alamat Mentor </th>
                            <th> No Ponsel Mentor </th>
                            <th> Harga </th>
                            <th> Waktu Masuk </th>
                            <th> Waktu Keluar </th>
                        </tr>
                    </thead>
                    <?php foreach ($dataKelas as $m) { ?>
                        <tbody>
                            <tr>
                                <td><?= $m['tingkat_mapel'] ?></td>	
                                <td><?= $m['nama_mapel'] ?></td>
                                <td><?= $m['nama_mentor'] ?></td>
                                <td><?= $m['alamat_mentor'] ?></td>
                                <td><?= $m['no_ponsel_mentor'] ?></td>
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