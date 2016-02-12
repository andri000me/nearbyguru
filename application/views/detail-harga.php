<?php
//----Jika input data baru field formnya dianggap kosong

$id_mentor = '';
$id_mapel = '';
$harga = '';

if (isset($data)) { //--- saat melakukan edit ambil data yang dikirim di controller untuk ditampilkan
  $id_mentor = $data['id_mentor'];
$id_mapel = $data['id_mapel'];
$harga = $data['harga'];
}
//--------FORM-------//
?>
<h3><i class="fa fa-angle-right"></i>Harga Kursus</h3>
<?php
if (validation_errors() == TRUE) {
    ?>
    <div class="alert alert-danger"><?php echo validation_errors(); ?></div>
<?php } ?>
<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Detail Harga Kursus</h4>
            <form class="form-horizontal style-form" method="post">

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Id Mentor :</label>
                    <div class="col-sm-10">
                        <input value='<?= $id_mentor ?>' type='text' name='id_mentor' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"> Id Mata Pelajaran :</label>
                    <div class="col-sm-10">
                        <input value='<?= $id_mapel ?>' type='text' name='id_mapel' class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"> Harga Kursus :</label>
                    <div class="col-sm-10">
                        <input value='<?= $harga ?>' type='text' name='harga' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-8">
                        <button type="submit" class="member btn btn-success" name="btn_submit"><i class="fa fa-check"></i> Simpan </button>

                    </div>
                </div>
            </form>
            <button class="btn btn-danger" onclick="window.location.href = '<?= $this->config->base_url('/index.php/admin/harga/') ?>'">
                <i class="fa fa-times"> Batal</i>
            </button>
        </div>
    </div><!-- col-lg-12-->      	
</div>