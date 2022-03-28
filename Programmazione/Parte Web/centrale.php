<?php
    $centrale = mysqli_connect('127.0.0.1','root','','my_losig');
    $ven1 = mysqli_connect('127.0.0.1','root','','mb');
    $ven2 = mysqli_connect('127.0.0.1','root','','mb');

    $sql = "SELECT * FROM prenotazioni WHERE stato = 0";

    $result = mysqli_query($ven1,$sql);

    while($row = mysqli_fetch_array($result)){
        $sql = "UPDATE prenotazioni SET stato = 1 WHERE id =". $row['id'];
        mysqli_query($ven1,$sql);
        
        $sql = "INSERT INTO `centrale`(`prenot_id`, `data`) VALUES (".$row['id'].",NOW())";
        mysqli_query($centrale,$sql);
    }

    $sql = "SELECT * FROM prenotazioni WHERE stato = 0";

    $result = mysqli_query($ven2,$sql);

    while($row = mysqli_fetch_array($result)){
        $sql = "UPDATE prenotazioni SET stato = 1 WHERE id =". $row['id'];
        mysqli_query($ven2,$sql);
        
        $sql = "INSERT INTO `centrale`(`prenot_id`, `data`) VALUES (".$row['id'].",NOW())";
        mysqli_query($centrale,$sql);
    }

?>