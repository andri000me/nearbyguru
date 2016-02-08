<h2>Daftar Mentor</h2>

<button class="btn btn-theme03 btn-xs" onclick="window.location.href='<?=$this->config->base_url('/index.php/admin/mentor/input')?>'">
                        <i class="fa fa-book"> TAMBAH</i>
</button>
<table class="table table-striped table-advance table-hover">
    <thead>
	<tr>
		<th>ID</th>
		<th>Nama</th>
                <th>No Identitas</th>
                <th>Jenis Kelamin</th>
                <th>No. Ponsel</th>
		<th colspan='2'>Action</th>
	</tr>
    </thead>
	<?php foreach($data as $m) { ?>
    <tbody>
	<tr>
		<td><?=$m['id_mentor']?></td>
		<td><?=$m['nama_mentor']?></td>
                <td><?=$m['no_identitas_mentor']?></td>
                <td><?=$m['jenis_kelamin_mentor']?></td>
                <td><?=$m['no_ponsel_mentor']?></td>
                <td> 
                    <button class="btn btn-primary btn-xs" onclick="window.location.href='<?=$this->config->base_url('/index.php/admin/mentor/view')?>/<?=$m['id_mentor']?>'">
                        <i class="fa fa-pencil"> view</i>
                    </button>
                    <button class="btn btn-primary btn-xs" onclick="window.location.href='<?=$this->config->base_url('/index.php/admin/mentor/edit')?>/<?=$m['id_mentor']?>'">
                        <i class="fa fa-pencil"> EDIT</i>
                    </button>
                <button class="btn btn-danger btn-xs" onclick="window.location.href='<?=$this->config->base_url('/index.php/admin/mentor/delete')?>/<?=$m['id_mentor']?>'">
                    <i class="fa fa-trash-o ">
                       HAPUS 
                    </i>
                </button>
                </td>
	</tr>
    </tbody>
	<?php } ?>
</table>