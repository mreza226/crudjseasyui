<?php
$conn = @mysql_connect('localhost', 'root', '');
if(!$conn) {
	die('couldnt connect: ' . mysql_error());
}
// else{
// 	echo "string";
// }
mysql_select_db('db_latihan', $conn);
?>