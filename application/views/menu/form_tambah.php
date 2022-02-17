<?php 
$attribut = array("method"=>"POST","class"=>"menu_form","id"=>"menu_form");
echo form_open("menu/simpan_menu", $attribut);
$status = array("admin" => "Admin", "user" => "User");
$aktif = array("Y"=>"Ya","T"=>"Tidak");

echo form_label('menu');
echo form_input(array("name"=>"menu"));
echo("<br>");
echo form_label('Link');
echo form_input(array("name"=>"link"));
echo("<br>");
echo form_label('Status');
echo form_dropdown("status", $status);
echo("<br>");
echo form_label('Aktif');
echo form_dropdown('aktif',$aktif);
echo("<br>");
echo form_label('Urutan');
echo form_input(array("name"=>"urutan"));
echo("<br>");
echo form_label('Subdari');
echo form_input(array("name"=>"subdari"));
echo("<br>");
echo form_label('Costum_style');
echo form_input(array("name"=>"costume_style"));
echo("<br>");
echo form_submit('simpan','Simpan Data');
echo("<br>");
echo form_close();


 ?>