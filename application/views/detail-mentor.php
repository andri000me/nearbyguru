<?php
//----Jika input data baru field formnya dianggap kosong
$nama_mentor = '';
$no_identitas_mentor = '';
$jenis_kelamin_mentor = '';
$tempat_lahir_mentor = '';
$tanggal_lahir_mentor = '';
$no_ponsel_mentor = '';
$email_mentor = '';
$password_mentor = '';
$latitude_mentor = '';
$longitude_mentor = '';
$alamat_mentor = '';
$pekerjaan_mentor = '';
$bio_mentor = '';
$tentang_mentor = '';


if (isset($data)) { //--- saat melakukan edit ambil data yang dikirim di controller untuk ditampilkan
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

//--------FORM-------//
?>

<h3><i class="fa fa-angle-right"></i> Mentor </h3>
<?php
if (validation_errors() == TRUE) {
    ?>
    <div class="alert alert-danger"><?php echo validation_errors(); ?></div>
<?php } ?>
<div class="row mt">
    <div class="col-lg-12">
        <form class="form-horizontal style-form" method="post" enctype="multipart/form-data">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Profil Mentor</h4>
                <div class="form-group">
                     <label class="col-sm-2 col-sm-2 control-label">Ganti Foto</label>
                     <div class="col-sm-3">
                         <?php
                            if ($foto_mentor == "") {
                                echo 'Not have Photo';
                            } else {
                                echo '<img class="img-responsive" height="150" width="150" src="data:image/jpeg;base64,' . base64_encode($foto_mentor) . '"/>';
                            }
                            ?>
                        <input type='file' name='foto_mentor' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nama :</label>
                    <div class="col-sm-10">
                        <input value='<?= $nama_mentor ?>' type='text' name='nama_mentor' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Identitas :</label>
                    <div class="col-sm-10">
                        <input value='<?= $no_identitas_mentor ?>' type='text' name='no_identitas_mentor' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin :</label>
                    <div class="col-sm-10">
                        <!--<input value='<?= $jenis_kelamin_mentor ?>' type='text' name='jenis_kelamin_mentor' class="form-control">-->
                        <input type="radio" name="jenis_kelamin_mentor" value="L" <?php if ($jenis_kelamin_mentor == 'L') echo 'checked="checked"'; ?>> Laki-laki
                        <input type="radio" name="jenis_kelamin_mentor" value="P" <?php if ($jenis_kelamin_mentor == 'P') echo 'checked="checked"'; ?>> Perempuan
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tempat Lahir :</label>
                    <div class="col-sm-10">
                        <input value='<?= $tempat_lahir_mentor ?>' type='text' name='tempat_lahir_mentor' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir :</label>
                    <div class="col-sm-10">
                        <input value='<?= $tanggal_lahir_mentor ?>' type='date' name='tanggal_lahir_mentor' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nomor Ponsel :</label>
                    <div class="col-sm-10">
                        <input value='<?= $no_ponsel_mentor ?>' type='text' name='no_ponsel_mentor' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Alamat :</label>
                    <div class="col-sm-10">
                        <input value='<?= $alamat_mentor ?>' type='text' name='alamat_mentor' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Langitude dan Longitude :</label>
                    <div class="col-sm-5">
                        <input value='<?= $latitude_mentor ?>' type='text' name='latitude_mentor' class="form-control">
                    </div>
                    <div class="col-sm-5">
                        <input value='<?= $longitude_mentor ?>' type='text' name='longitude_mentor' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Email :</label>
                    <div class="col-sm-10">
                        <input value='<?= $email_mentor ?>' type='text' name='email_mentor' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Password :</label>
                    <div class="col-sm-10">
                        <input value='<?= $password_mentor ?>' type='text' name='password_mentor' class="form-control">
                    </div>
                </div>
            </div>
            <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

            <div class="form-panel"> 
                <h4 class="mb"><i class="fa fa-angle-right"></i> Detail Profil Mentor </h4>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Pekerjaan :</label>
                    <div class="col-sm-10">
                        <input value='<?= $pekerjaan_mentor ?>' type='text' name='pekerjaan_mentor' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Bio Singkat :<br>200 karakter bio singkat yang mendeskripsikan diri dan kemampuan anda</label>
                    <div class="col-sm-10">
                        <textarea rows="4" value='<?= $bio_mentor ?>' type='text' name='bio_mentor' class="form-control"><?php echo $bio_mentor; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tentang Saya :<br>Tuliskan deskripsi terbaik mengenai diri anda </label>
                    <div class="col-sm-10">
                        <textarea rows="4" value='<?= $tentang_mentor ?>' type='text' name='tentang_mentor' class="form-control"><?php echo $tentang_mentor; ?> </textarea>
                    </div>
                </div>
            </div>
            <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Sejarah Pendidikan</h4>
                <table class="table col-sm-12">

                    <tr>
                        <td>Jenjang Pendidikan</td>		
                        <td>Instansi Pendidikan</td>
                    </tr>
                    <tr>
                        <td><input type='text' name='jenjang_pendidikan' id="jenjang_pendidikan"/></td>
                        <td><input type='text' name='instansi_pendidikan' id="instansi_pendidikan"/></td>
                        <td><button type='button' id="input"/>Tambah</button></td>

                    </tr>
                    <tr>
                    <table id='sejarah' class="table-bordered">
                        <thead>
                            <tr>
                                <th>Jenjang Pendidikan</th>		
                                <th>Instansi Pendidikan</th>
                            </tr>
                        </thead>
                        <tbody aria-data='0'>
                            <tr>
                                <td colspan="2"> Silahkan tambahkan data ! </td>
                            </tr>
                        </tbody>
                    </table>
                    </tr>
                </table>   
                <!--------------------------TAMPILAN SEJARAH/LULUSAN PENDIDIKAN YANG SUDAH ADA------------------------------------->
                <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr>
                            <th>Jenjang Pendidikan</th>
                            <th>Instansi Pendidikan</th>
                            <th colspan="2"> Action </th>
                        </tr>
                    </thead>
                    <?php foreach ($dataSejarah as $m) { ?>
                        <tbody>
                            <tr>
                                <td><?= $m['jenjang_pendidikan'] ?></td>
                                <td><?= $m['instansi_pendidikan'] ?></td>
                                <td> <button type="button" class="btn btn-danger btn-xs" onclick="window.location.href = '<?= $this->config->base_url('/index.php/admin/mentor/deleteSejarah') ?>/<?= $m['id_mentor'] ?>/<?= $m['id_pendidikan'] ?>'">
                                        <i class="fa fa-trash-o ">
                                            HAPUS 
                                        </i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>

            <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


            <div class="form-panel"> <!-- BUAT TABEL SPT TAUFIQ DULU JUGA -->
                <h4 class="mb"><i class="fa fa-angle-right"></i> Pengalaman Mengajar : </h4>
                <table class="table col-sm-12">

                    <tr>
                        <td>Pengalaman Mengajar</td>
                    </tr>

                    <tr>
                        <td><input type='text' name='nama_pengalaman' id="nama_pengalaman"/></td>
                        <td><button type='button' id="inputPengalaman"/>Tambah</button></td>

                    </tr>
                    <tr>
                    <table id='pengalaman' class="table-bordered">
                        <thead>
                            <tr>
                                <th> Pengalaman Mengajar </th>
                            </tr>
                        </thead>
                        <tbody aria-data='0'>
                            <tr>
                                <td colspan="1"> Silahkan tambahkan data ! </td>
                            </tr>
                        </tbody>
                    </table>
                    </tr>
                </table> 
                <!--------------------------TAMPILAN PENGALAMAN YANG SUDAH ADA------------------------------------->
                <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr>
                            <th>Pengalaman Mengajar</th>
                            <th colspan="2"> Action </th>
                        </tr>
                    </thead>
                    <?php foreach ($dataPengalaman as $m) { ?>
                        <tbody>
                            <tr>
                                <td><?= $m['nama_pengalaman'] ?></td>
                                <td> <button type="button" class="btn btn-danger btn-xs" onclick="window.location.href = '<?= $this->config->base_url('/index.php/admin/mentor/deletePengalaman') ?>/<?= $m['id_mentor'] ?>/<?= $m['id_pengalaman'] ?>'">
                                        <i class="fa fa-trash-o ">
                                            HAPUS 
                                        </i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
            <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


            <div class="form-panel"> 
                <h4 class="mb"><i class="fa fa-angle-right"></i> Kualifikasi dan Sertifikat : </h4>
                <table class="table col-sm-12">

                    <tr>
                        <td colspan="2">Kualifikasi dan sertifikat</td>
                    </tr>

                    <tr>
                        <td colspan="2"><input style="width:300px;" type='text' name='nama_kualifikasi' id="nama_kualifikasi"/></td>
                        <td><button type='button' id="inputKualifikasi"/>Tambah</button></td>

                    </tr>
                    <tr>
                    <table id='kualifikasi' class="table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2">Kualifikasi dan sertifikat</th>
                               <th>File Tambahan</th>
                            </tr>
                        </thead>
                        <tbody aria-data='0'>
                            <tr>
                                <td colspan="2"> Silahkan tambahkan data ! </td>
                            </tr>
                        </tbody>
                    </table>
                    </tr>
                </table>
                <!----------------------------------KUALIFIKASI YANG SUDAH ADA----------------------------------------------------->
                <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr>
                            <th colspan="2">Kualifikasi dan sertifikat</th>
                           <th>File Tambahan </th>
                            <th colspan="2"> Action </th>
                        </tr>
                    </thead>
                    <?php foreach ($dataKualifikasi as $m) { ?>
                        <tbody>
                            <tr>
                                <td colspan="2"><?= $m['nama_kualifikasi'] ?></td>
                                <td><?= $m['tambahan_kualifikasi'] ?></td>
                                <td> <button type="button" class="btn btn-danger btn-xs" onclick="window.location.href = '<?= $this->config->base_url('/index.php/admin/mentor/deleteKualifikasi') ?>/<?= $m['id_mentor'] ?>/<?= $m['id_kualifikasi'] ?>'">
                                        <i class="fa fa-trash-o ">
                                            HAPUS 
                                        </i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
            <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Jadwal Ketersedian Mengajar : </h4>
                <table class="table col-sm-12">
                    <tr>
                        <td> Hari </td>
                        <td> Jam </td>
                    </tr>
                    <tr>
                        <td><input type='text' name='hari_ketersediaan' id="hari_ketersediaan"/></td>
                        <td><input type='time' name='waktu_ketersediaan' id="waktu_ketersediaan"/></td>
                        <td><button type='button' id="inputJadwal"/>Tambah</button></td>
                    </tr>
                    <tr>
                    <table id='jadwal' class="table-bordered">
                        <thead>
                            <tr>
                                <th> Hari </th>
                                <th> Jam </th>
                            </tr>
                        </thead>
                        <tbody aria-data='0'>
                            <tr>
                                <td colspan="2"> Silahkan tambahkan data ! </td>
                            </tr>
                        </tbody>
                    </table>
                    </tr>
                </table>
                <!-------------------------------------JADWAL KETERSEDIAAN MENGAJAR YANG ADA------------------------------------------->
                <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Hari </th>
                            <th> Jam </th>
                            <th colspan="2"> Action </th>
                        </tr>
                    </thead>
                    <?php foreach ($dataJadwal as $m) { ?>
                        <tbody>
                            <tr>
                                 <td><?= $m['id_jadwal_ketersediaan'] ?></td>
                                <td><?= $m['hari_ketersediaan'] ?></td>
                                <td><?= $m['waktu_ketersediaan'] ?></td>
                                <td> <button type="button" class="btn btn-danger btn-xs" onclick="window.location.href = '<?= $this->config->base_url('/index.php/admin/mentor/deleteJadwal') ?>/<?= $m['id_mentor'] ?>/<?= $m['id_jadwal_ketersediaan'] ?>'">
                                        <i class="fa fa-trash-o ">
                                            HAPUS 
                                        </i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
            <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-8">
                    <button type="submit" class="member btn btn-success" name="btn_submit"><i class="fa fa-check"></i> Simpan </button>
                </div>
            </div>
        </form>
        <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

        <button class="btn btn-danger" onclick="window.location.href = '<?= $this->config->base_url('/index.php/admin/mentor/') ?>'">
            <i class="fa fa-times"> Batal</i>
        </button>

    </div><!-- col-lg-12-->      	
</div>