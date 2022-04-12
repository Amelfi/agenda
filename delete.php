<?php 
include "db.php"
?>
<?php 
$id=$_GET['id'];
$Rsevent="SELECT DATE_FORMAT(date,'%m-%Y')as url FROM events WHERE id=$id";
$Rsevent1=$con->query($Rsevent);
$url=$Rsevent1->fetch_object()->url;

$DEvents="DELETE FROM events WHERE id=$id";
$con->query($DEvents);

$Rsevent1->free();
$con->close();
header('Location:index.php?month=' .$url)



?>