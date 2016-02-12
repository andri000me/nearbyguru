<?php
//----Jika input data baru field formnya dianggap kosong

if (isset($data)) { //--- saat melakukan edit ambil data yang dikirim di controller untuk ditampilkan
    $id_siswa = $data['id_siswa'];
    $id_harga = $data['id_harga'];
    $waktu_masuk = $data['waktu_masuk'];
    $waktu_keluar = $data['waktu_keluar'];
}
if (isset($dataKelas)) { //--- saat melakukan edit ambil data yang dikirim di controller untuk ditampilkan
    $tingkat_mapel = $dataKelas['tingkat_mapel'];
    $nama_mapel = $dataKelas['nama_mapel'];
    $nama_siswa = $dataKelas['nama_siswa'];
}
//--------FORM-------//
?>
<h3><i class="fa fa-clock-o"></i> Jadwal Kelas</h3>
<div class="row mt">
    <div class="col-md-2 col-sm-2 mb">
    <div class="green-panel">
        <div class="green-header">
            <h5>
                <?php echo $nama_siswa; ?></h5>
        </div>
        <i class="fa fa-user fa-5x"></i><br>
        <i class="fa fa-stack-2x"> </i>
        <p><?php echo $tingkat_mapel; ?><br>
        <?php echo $nama_mapel; ?></p>
        
    </div>
    </div>
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Detail Kelas</h4>
            <form class="form-horizontal style-form" method="post">
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"> Waktu Masuk :</label>
                    <div class="col-sm-10">
                        <input value='<?= $waktu_masuk ?>' type='text' name='waktu_masuk' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"> Waktu Keluar :</label>
                    <div class="col-sm-10">
                        <input value='<?= $waktu_keluar ?>' type='text' name='waktu_keluar' class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-8">
                        <button type="submit" class="member btn btn-success" name="btn_submit"><i class="fa fa-check"></i> Simpan </button>

                    </div>
                </div>
            </form>
            <button class="btn btn-danger" onclick="window.location.href = '<?= $this->config->base_url('/index.php/homementor/editKelasByMentor/') ?>'">
                <i class="fa fa-times"> Batal</i>
            </button>
        </div>
    </div><!-- col-lg-12-->      	
</div>