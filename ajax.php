<?php include "db.php"?>
<?php
$id=$_GET['id'];

$Qrevents="SELECT
            Id,
            DATE_FORMAT(date, '%Y-%m-%d') as date,
            DATE_FORMAT(date, '%H:%i') as time,
            cat,
            name

             FROM events
             
             WHERE Id='$id'";
            
            $Rsevents=$con->query($Qrevents); 

           echo json_encode($Rsevents->fetch_assoc());
?>