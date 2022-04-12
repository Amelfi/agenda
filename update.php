<?php include "db.php" ?>

<?php

$date=$con->escape_string(strip_tags( $_POST['date']));
$time=$con->escape_string(strip_tags( $_POST['time']));
$categories=$con->escape_string(strip_tags( $_POST['categories']));
$name=$con->escape_string(strip_tags( $_POST['name']));
$id=$_POST['id'];
$dates=date('Y-m-d H:m:s', strtotime($date." ".$time));
$Upevent="UPDATE events SET name='$name', cat=$categories, date='$dates' WHERE Id='$id'";
$con->query($Upevent);
$Url=date("m-Y", strtotime($date." ".$time));
header('Location:index.php?month='. $Url);

?>
3