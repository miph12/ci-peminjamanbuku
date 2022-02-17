<?php 
$attribut = array("method"=>"POST","class"=>"kategori_form","id"=>"kategori_form");
echo form_open("buku/simpan_kategori", $attribut);
//select kategori

echo form_label('Tulis Judul');
echo form_input($attjudul);
echo("<br>");
echo form_label('Nama Kategori');
echo form_input(array("name"=>"kategori"));
echo form_submit('simpan','Simpan Data');
echo("<br>");
echo form_close();

?>