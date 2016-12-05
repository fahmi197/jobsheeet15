<?php
	mysql_connect("localhost","root","");
	mysql_select_db("absen");

	$id=$_GET['id'];
	$query="DELETE FROM `peserta` WHERE `id`=$id";
	$hasil=mysql_query($query);
	echo '<script language="javascript">alert("Anda berhasil menghapus data!";document.location="#"</script>';

?>