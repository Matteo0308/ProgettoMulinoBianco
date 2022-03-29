<?php
    $centrale = mysqli_connect('127.0.0.1','root','','my_losig');

    $sql = "SELECT * FROM prenotazioni WHERE stato = 0";

    $result = mysqli_query($centrale,$sql);

    while($row = mysqli_fetch_array($result)){
        $sql = "UPDATE prenotazioni SET stato = 1 WHERE id =". $row['id'];
        mysqli_query($centrale,$sql);
        
        $sql = "INSERT INTO centrale(prenot_id, data) VALUES (".$row['id'].",NOW())";
        mysqli_query($centrale,$sql);
    }
?>