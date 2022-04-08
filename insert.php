<?php include "db.php" ?>
<?php
 if(isset($_POST['save']))
 {
    // print_r($_POST);
    $fecha=$con->escape_string($_POST['date']);
    $tiempo=$con->escape_string($_POST['time']);
    $categoria=$con->escape_string($_POST['categories']);
    $nombre=$con->escape_string($_POST['name']);

    $dates=date("Y-m-d h:i:s", strtotime($fecha .' '. $tiempo));

    $insert="INSERT INTO events (name, cat, date)  VALUES ('$nombre', '$categoria', '$dates' )";
    $con->query($insert) or exit($con_error());
    
    $url=date('Y-m', strtotime($fecha ." ". $tiempo));

    header('Location:index.php?month='. $url);


    

 }

?>
