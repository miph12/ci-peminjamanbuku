<a href="<?php echo base_url();?>index.php/menu/tambah_menu">Tambah Buku</a>
<table>
	<tr>
		<th>No</th>
		<th>Menu</th>
		<th>Link</th>
		<th>Status</th>
		<th>Aktif</th>
		<th>Urutan</th>
		<th>Subdari</th>
		<th>Costum Style</th>
	</tr>
	<tr>
	<?php 
		$no = 1;
		foreach ($hasil_query->result() as $value) {
			?>
		<td><?php echo $no; ?></td>
		<td><?php echo $value->nm_menu; ?></td>
		<td><?php echo $value->link; ?></td>
		<td><?php echo $value->status; ?></td>
		<td><?php echo $value->aktif; ?></td>
		<td><?php echo $value->urutan; ?></td>
		<td><?php echo $value->subdari; ?></td>
		<td><?php echo $value->costome_style; ?></td>
	</tr>
	<?php 
			$no++;
		}
	 ?>
</table>