<?php
$data = $_POST;
$link = mysqli_connect( 'localhost','root','02091502','school');
$link->set_charset('utf8');
$q= "INSERT INTO students (name, address) VALUES ('".$data['name']."','".$data['address']."')";
$query = mysqli_query( $link,$q);
echo json_encode($data);
?>
