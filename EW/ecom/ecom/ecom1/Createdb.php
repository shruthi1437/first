<?php
$servername='localhost:3306';
$username='root';
$password='No';
$dbname='mobiles';
$tname='phones';
$dbc=new mysqli($servername,$username,$password,$dbname); 
//$conn=new mysqli($servername, $username, $password);
if ($dbc->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}
?>