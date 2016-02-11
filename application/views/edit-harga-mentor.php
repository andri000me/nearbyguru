<form class="form-horizontal style-form" method="post">
    <div class="form-panel">
        <table>
            <tr>
                <td colspan="2"><h4><i class="fa fa-angle-right"></i> Edit Informasi Kursus </h4></td>
            </tr>

            <tr>
                <table class="table col-sm-12">

                    <tr>
                        <td>Tingkat</td>		
                        <td>Mata Pelajaran</td>
                        <td>Harga</td>
                    </tr>
                    <tr>
                        <td><input type='text' name='tingkat_mapel' id="tingkat_mapel"/></td>
                        <td><input type='text' name='nama_mapel' id="nama_mapel"/></td>
                        <td><input type='text' name='harga' id="harga"/></td>
                        <td><button type='button' id="inputHargaMentor"/>Tambah</button></td>
                    </tr>
                    <tr>
                    <table id='hargaMentor' class="table-bordered">
                        <thead>
                            <tr>
                                <th>Tingkat</th>		
                                <th>Mata Pelajaran</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody aria-data='0'>
                            <tr>
                                <td colspan="3"> Silahkan tambahkan data ! </td>
                            </tr>
                        </tbody>
                    </table>
                    </tr>
                </table> 
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th>Tingkat</th>
                        <th>Mata Pelajaran</th>
                        <th>Harga</th>
                        <th colspan="2"> Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataHarga as $m) { ?>
                        <tr>
                            <td><?= $m['tingkat_mapel'] ?></td>
                            <td><?= $m['nama_mapel'] ?></td>
                            <td><?= $m['harga'] ?></td>
                            <td> <button type="button" class="btn btn-danger btn-xs" onclick="window.location.href = '<?= $this->config->base_url('/index.php/homementor/deleteHarga') ?>/<?= $m['id_mentor'] ?>/<?= $m['id_harga'] ?>'">
                                        <i class="fa fa-trash-o ">
                                            HAPUS 
                                        </i>
                                    </button>
                                </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            </tr>
            <tr>
                <td colspan="3">
                <button type="submit" class="member btn btn-success" name="btn_submit"><i class="fa fa-check"></i> Simpan </button>
                </td>
            </tr>
        </table>
    </div>
</form>