<?php
$host = 'localhost';
$usernmae = 'root';
$password = '';
$db = 'db_sekolah';

$db_sekolah = mysqli_connect ($host, $usernmae, $password, $db)
or die (mysqli_error($db_sekolah));

?>
