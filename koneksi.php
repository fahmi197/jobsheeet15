<?php
	$db = "showroommobil";

	//create conection
	$conn = mysqli_connect('localhost','root','',$db);

	$sql ="SELECT * FROM showroommobil";
	$query=mysqli_query($conn, $sql);

	while($row=mysqli_fetch_array($query)){
	echo $row['Merk']."<br>";
	}
	//mysqli_close($conn);
?>