<?php 
$attribut = array("method"=>"POST","class"=>"buku_form","id"=>"buku_form");
echo form_open("buku/simpan_buku", $attribut);
//select kategori
echo form_hidden("id_buku",$get_buku->id_buku);
foreach ($hasil_query as $key => $value) {
	$options[$value->id_kategori] = $value->kategori;
}
echo form_label('Pilih Kategori');
echo form_dropdown("kategori",$options, $get_buku->id_kategori);
echo("<br>");
//judul
$attjudul = array("type"=>"textarea","name"=>"judul","cols"=>"30","rows"=>"3" );
echo form_label('Tulis Judul');
echo form_input($attjudul);
echo("<br>");
echo form_label('Pengarang');
echo form_input(array("name"=>"pengarang","value"=>$get_buku->pengarang));
echo("<br>");
echo form_label('Penerbit');
echo form_input(array("name"=>"penerbit","value"=>$get_buku->penerbit));
echo("<br>");
echo form_label('Halaman');
echo form_input(array("name"=>"halaman","value"=>$get_buku->halaman));
echo("<br>");
echo form_label('Harga');
echo form_input(array("name"=>"harga","value"=>$get_buku->harga));
echo("<br>");
echo form_label('Stok');
echo form_input(array("name"=>"stok","value"=>$get_buku->stok));
echo("<br>");
echo form_submit('simpan','Simpan Data');
echo("<br>");
echo form_close();

?>