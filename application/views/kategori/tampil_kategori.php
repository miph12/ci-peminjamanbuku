<table border="1">
	<tr>
		<th>No</th>
		<th>Kategori</th>
		<th>Aksi</th>
	</tr>
	<?php 
		$no = 1;
		foreach ($hasil_query->result() as $value) {
			?>
			<tr>
				<th><?php echo $no; ?></th>
				<th><?php echo $value->kategori; ?></th>
				<th>to be contiuned</th>
			</tr>
		<?php 
			$no++;
		}
	 ?>
</table>