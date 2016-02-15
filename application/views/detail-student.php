<?php
//----Jika input data baru field formnya dianggap kosong
$nama_siswa = '';
$no_identitas_siswa = '';
$jenis_kelamin_siswa = '';
$tempat_lahir_siswa = '';
$tanggal_lahir_siswa = '';
$no_ponsel_siswa = '';
$sekolah_siswa = '';
$email_siswa = '';
$password_siswa = '';
$latitude_siswa = '';
$longitude_siswa = '';
$alamat_siswa = '';

if (isset($data)) { //--- saat melakukan edit ambil data yang dikirim di controller untuk ditampilkan
    $nama_siswa = $data['nama_siswa'];
    $no_identitas_siswa = $data['no_identitas_siswa'];
    $foto_siswa = $data['foto_siswa'];
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

<h3><i class="fa fa-angle-right"></i>Siswa</h3>
<?php
if (validation_errors() == TRUE) {
    ?>
    <div class="alert alert-danger"><?php echo validation_errors(); ?></div>
<?php } ?>
<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Profil Siswa</h4>
            <form class="form-horizontal style-form" method="post"  enctype="multipart/form-data">
                <div class="form-group">
                     <label class="col-sm-2 col-sm-2 control-label">Ganti Foto</label>
                     <div class="col-sm-3">
                         <?php
                            if ($foto_siswa == "") {
                                echo 'Not have Photo';
                            } else {
                                echo '<img class="img-responsive" height="150" width="150" src="data:image/jpeg;base64,' . base64_encode($foto_siswa) . '"/>';
                            }
                            ?>
                        <input type='file' name='foto_siswa' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nama :</label>
                    <div class="col-sm-10">
                        <input value='<?= $nama_siswa ?>' type='text' name='nama_siswa' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No. Identitas :</label>
                    <div class="col-sm-10">
                        <input value='<?= $no_identitas_siswa ?>' type='text' name='no_identitas_siswa' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin :</label>
                    <div class="col-sm-10">
                        <!--<input value='<?= $jenis_kelamin_siswa ?>' type='text' name='jenis_kelamin_siswa' class="form-control"> ERROR DB KALAU KOSONG-->
                        <input type="radio" name="jenis_kelamin_siswa" value="L" <?php if ($jenis_kelamin_siswa == 'L') echo 'checked="checked"'; ?>> Laki-laki
                        <input type="radio" name="jenis_kelamin_siswa" value="P" <?php if ($jenis_kelamin_siswa == 'P') echo 'checked="checked"'; ?>> Perempuan    
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tempat Lahir :</label>
                    <div class="col-sm-10">
                        <input value='<?= $tempat_lahir_siswa ?>' type='text' name='tempat_lahir_siswa' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir :</label>
                    <div class="col-sm-10">
                        <input value='<?= $tanggal_lahir_siswa ?>' type='date' name='tanggal_lahir_siswa' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nomor Ponsel :</label>
                    <div class="col-sm-10">
                        <input value='<?= $no_ponsel_siswa ?>' type='text' name='no_ponsel_siswa' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Sekolah :</label>
                    <div class="col-sm-10">
                        <input value='<?= $sekolah_siswa ?>' type='text' name='sekolah_siswa' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Alamat :</label>
                    <div class="col-sm-10">
                        <input value='<?= $alamat_siswa ?>' type='text' name='alamat_siswa' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Langitude dan Longitude :</label>
                    <div class="col-sm-5">
                        <input value='<?= $latitude_siswa ?>' type='text' name='latitude_siswa' class="form-control">
                    </div>
                    <div class="col-sm-5">
                        <input value='<?= $longitude_siswa ?>' type='text' name='longitude_siswa' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Email :</label>
                    <div class="col-sm-10">
                        <input value='<?= $email_siswa ?>' type='text' name='email_siswa' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Password :</label>
                    <div class="col-sm-10">
                        <input value='<?= $password_siswa ?>' type='text' name='password_siswa' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-8">
                        <button type="submit" class="member btn btn-success" name="btn_submit"><i class="fa fa-check"></i> Simpan </button>

                    </div>
                </div>
            </form>
            <button class="btn btn-danger" onclick="window.location.href = '<?= $this->config->base_url('/index.php/admin/student/') ?>'">
                <i class="fa fa-times"> Batal</i>
            </button>
        </div>
    </div><!-- col-lg-12-->      	
</div>