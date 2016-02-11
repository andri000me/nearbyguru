<?php
if (isset($id_siswa)) {
     $id_siswa = $id_siswa['id_siswa'];
}
?>
<h3><i class="fa fa-search"></i><i class="fa fa-building"></i> Daftar Course Tersedia </h3>
<div class="col-lg-12">
    <div class="row">
        <?php foreach ($data as $m) { ?>
            <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="grey-panel pn">
                    <div class="grey-header">
                        <h4><strong><?= $m['nama_mentor'] ?></strong><h4>
                                </div>
                                <i class="fa fa-3x fa-university"></i> <br><br>
                                <p>
                                <?= $m['tingkat_mapel'] ?><br>
                                <?= $m['nama_mapel'] ?><br>
                                <?= $m['harga'] ?><br>
                                </p>
                                <button type="button" class="btn btn-theme03" onclick="window.location.href = '<?= $this->config->base_url('/index.php/enrollkelas/addKelas') ?>/<?= $id_siswa ?>'">
                                        <i class="fa fa-check-circle ">
                                            ENROLL
                                        </i>
                                    </button>
                                </div>
                                </div>
                            <?php } ?>
                            </div>
                            </div>