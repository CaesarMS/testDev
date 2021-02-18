<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'query';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die (mysqli_connect_error());	
}

$sql = "SELECT tb_mahasiswa.mhs_nama WHERE tb_matakuliah = 'MK303' ORDER BY tb_mahasiswa_nilai.nilai DESC from tb_mahasiswa JOIN tb_mahasiswa_nilai on tb_mahasiswa.mhs_id = tb_mahasiswa_nilai.mhs_id JOIN tb_matakuliah on tb_matakuliah.mk_id = tb_mahasiswa_nilai.mk_id limit 1" 

?>