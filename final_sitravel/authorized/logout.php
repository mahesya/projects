<?php
session_start();
include'../include/config.php';
mysql_query("update user_damtour set status='OFFLINE' where id_staf='$_SESSION[id_staf]'");
session_destroy();
header('location:index.php');
?>