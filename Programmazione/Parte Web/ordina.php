<?php
    $conn = mysqli_connect('127.0.0.1','root','','my_losig');

    $sql = "UPDATE prodotti SET pezzi=pezzi-1 WHERE id =".$_REQUEST['id']." AND pezzi > 0 ";
    $result = mysqli_query($conn,$sql);
    
    $sql = "INSERT INTO prenotazioni ( prod_id, user_id, data, stato) VALUES (".$_REQUEST['id'].",1,NOW(),0)";
    $result = mysqli_query($conn,$sql);
    return "Operazione Eseguita con successo";
?>