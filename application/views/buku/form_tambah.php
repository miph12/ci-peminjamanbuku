<?php 
$attribut = array("method"=>"POST","class"=>"buku_form","id"=>"buku_form");
echo form_open("buku/simpan_buku", $attribut);
//select kategori
foreach ($hasil_query as $key => $value) {
	$options[$value->id_kategori] = $value->kategori;
}
echo form_label('Pilih Kategori');
echo form_dropdown("kategori",$options);
echo("<br>");
//judul
$attjudul = array("type"=>"textarea","name"=>"judul","cols"=>"30","rows"=>"3" );
echo form_label('Tulis Judul');
echo form_input($attjudul);
echo("<br>");
echo form_label('Pengarang');
echo form_input(array("name"=>"pengarang"));
echo("<br>");
echo form_label('Penerbit');
echo form_input(array("name"=>"penerbit"));
echo("<br>");
echo form_label('Halaman');
echo form_input(array("name"=>"halaman"));
echo("<br>");
echo form_label('Harga');
echo form_input(array("name"=>"harga"));
echo("<br>");
echo form_label('Stok');
echo form_input(array("name"=>"stok"));
echo("<br>");
echo form_submit('simpan','Simpan Data');
echo("<br>");
echo form_close();

?>