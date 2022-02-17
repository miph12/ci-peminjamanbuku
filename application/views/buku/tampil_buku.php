<a href="<?php echo base_url();?>index.php/buku/tambah_buku">Tambah Buku</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Judul</th>
		<th>Kategori</th>
		<th>Pengarang</th>
		<th>Penerbit</th>
		<th>Harga</th>
		<th>Halaman</th>
		<th>Stok</th>
		<th>Aksi</th>
	</tr>
	<?php 
		$no = 1;
		foreach ($hasil_query->result() as $value) {
			?>
			<tr>
				<th><?php echo $no; ?></th>
				<th><?php echo $value->judul; ?></th>
				<th><?php echo $value->id_kategori; ?></th>
				<th><?php echo $value->pengarang; ?></th>
				<th><?php echo $value->penerbit; ?></th>
				<th><?php echo $value->harga; ?></th>
				<th><?php echo $value->halaman; ?></th>
				<th><?php echo $value->stok; ?></th>
				<th><a href="<?php echo base_url();?>index.php/buku/edit_buku/<?php echo $value->id_buku;?>">	Edit 
					</a>
					<a href="<?php echo base_url();?>index.php/buku/hapus_buku/<?php echo $value->id_buku;?>">	Hapus
					</a>
				</th>
			</tr>
		<?php 
			$no++;
		}
	 ?>
</table>