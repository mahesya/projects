<?php
include'config.php';

$data=mysql_fetch_array(mysql_query("select*from itinerari where id_itinerari='000002'"));
$data2="$data[itinerari]";
echo "$data2";
?>