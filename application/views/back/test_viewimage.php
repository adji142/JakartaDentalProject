<?php
$result = $db->query("SELECT photo FROM app_staff where id = 1");
if($result->num_rows > 0){
	$imgData = $result->fetch_assoc();
	header("Content-type: image/jpg"); 
	echo $imgData['image']; 
}
?>