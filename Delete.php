<?php
include('connection.php');
$sql=$con->query("delete from phonelist where id='{$_GET['id']}'");
unlink ("image/".$_GET['pn']."/".$_GET['img']);
rmdir("image/".$_GET['pn']);
header('location:display.php');

?>