<?php
//----Jika input data baru field formnya dianggap kosong
$tingkat_mapel = '';
$nama_mapel = '';

if (isset($data)) { //--- saat melakukan edit ambil data yang dikirim di controller untuk ditampilkan
    $tingkat_mapel = $data['tingkat_mapel'];
    $nama_mapel = $data['nama_mapel'];
}
//--------FORM-------//
?>

<h3><i class="fa fa-angle-right"></i>Mata Pelajaran</h3>
<?php
if (validation_errors() == TRUE) {
    ?>
    <div class="alert alert-danger"><?php echo validation_errors(); ?></div>
<?php } ?>


<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Detail Mata Pelajaran</h4>
            <form class="form-horizontal style-form" method="post">

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Tingkat :</label>
                    <div class="col-sm-10">
                        <input value='<?= $tingkat_mapel ?>' type='text' name='tingkat_mapel' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"> Nama Mata Pelajaran :</label>
                    <div class="col-sm-10">
                        <input value='<?= $nama_mapel ?>' type='text' name='nama_mapel' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-8">
                        <button type="submit" class="member btn btn-success" name="btn_submit"><i class="fa fa-check"></i> Simpan </button>

                    </div>
                </div>
            </form>
            <button class="btn btn-danger" onclick="window.location.href = '<?= $this->config->base_url('/index.php/admin/mapel/') ?>'">
                <i class="fa fa-times"> Batal</i>
            </button>
        </div>
    </div><!-- col-lg-12-->      	
</div>
<script>