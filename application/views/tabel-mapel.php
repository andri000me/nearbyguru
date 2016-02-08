<h2>Daftar Mata Pelajaran</h2>

<button class="btn btn-theme03 btn-xs" onclick="window.location.href='<?=$this->config->base_url('/index.php/admin/mapel/input')?>'">
                        <i class="fa fa-book"> TAMBAH</i>
</button>

<table class="table table-striped table-advance table-hover">
    <thead>
	<tr>
		<th>ID Mapel</th>
		<th>Tingkat</th>
                <th>Nama Mapel</th>
		<th colspan='2'>Action</th>
	</tr>
    </thead>
	<?php foreach($data as $m) { ?>
    <tbody>
	<tr>
		<td><?=$m['id_mapel']?></td>
		<td><?=$m['tingkat_mapel']?></td>
                <td><?=$m['nama_mapel']?></td>
                <td> 
                    <button class="btn btn-primary btn-xs" onclick="window.location.href='<?=$this->config->base_url('/index.php/admin/mapel/edit')?>/<?=$m['id_mapel']?>'">
                        <i class="fa fa-pencil"> VIEW and EDIT</i>
                    </button>
                <button class="btn btn-danger btn-xs" onclick="window.location.href='<?=$this->config->base_url('/index.php/admin/mapel/delete')?>/<?=$m['id_mapel']?>'">
                    <i class="fa fa-trash-o ">
                       HAPUS 
                    </i>
                </button>
                </td>
	</tr>
    </tbody>
	<?php } ?>
</table>