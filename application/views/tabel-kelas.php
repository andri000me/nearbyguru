<h2>Daftar Kelas</h2>

<button class="btn btn-theme03 btn-xs" onclick="window.location.href='<?=$this->config->base_url('/index.php/admin/kelas/input')?>'">
                        <i class="fa fa-book"> TAMBAH</i>
</button>

<table class="table table-striped table-advance table-hover">
    <thead>
	<tr>
                <th>ID Kelas</th>	
                <th>ID Siswa</th>
		<th>ID Harga</th>
                <th>Waktu Masuk</th>
                <th>Waktu Keluar</th>
		<th colspan='2'>Action</th>
	</tr>
    </thead>
	<?php foreach($data as $m) { ?>
    <tbody>
	<tr>
                <td><?=$m['id_kelas']?></td>	
                <td><?=$m['id_siswa']?></td>
		<td><?=$m['id_harga']?></td>
                <td><?=$m['waktu_masuk']?></td>
                <td><?=$m['waktu_keluar']?></td>
                <td> 
                    <button class="btn btn-primary btn-xs" onclick="window.location.href='<?=$this->config->base_url('/index.php/admin/kelas/edit')?>/<?=$m['id_kelas']?>'">
                        <i class="fa fa-pencil"> VIEW and EDIT</i>
                    </button>
                <button class="btn btn-danger btn-xs" onclick="window.location.href='<?=$this->config->base_url('/index.php/admin/kelas/delete')?>/<?=$m['id_kelas']?>'">
                    <i class="fa fa-trash-o ">
                       HAPUS 
                    </i>
                </button>
                </td>
	</tr>
    </tbody>
	<?php } ?>
</table>