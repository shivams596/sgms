<?php

$connection = mysqli_connect('localhost','root','','sgms') or die("mysql connection problem");
$dynamicList="";
$sql=mysqli_query($connection,"SELECT * FROM dustbin;") or die("query failed");
$pc = mysqli_num_rows($sql);
echo "connected to db";
?>