<?php
/*
    $conn = mysqli_connect('127.0.0.1','root','','my_losig');

    mysqli_query($conn,"SET AUTOCOMMIT=0");
    mysqli_begin_transaction($conn);
    try{
        $conn->query("UPDATE prodotti SET pezzi=pezzi-1 WHERE id =".$_REQUEST['id']." AND pezzi > 0 ;");
        $conn->query("INSERT INTO prenotazioni ( prod_id, user_id, data, stato) VALUES (".$_REQUEST['id'].",1,CAST( GETDATE() AS Date ),0);"); 
        $conn->commit();
    }catch(mysqli_sql_exception $exception) {
        $conn->rollback();
        echo $exception;
        throw $exception;
    }
*/
 $conn = mysqli_connect('127.0.0.1','root','','my_losig');

    $sql = "UPDATE prodotti SET pezzi=pezzi-1 WHERE id =".$_REQUEST['id']." AND pezzi > 0 ";
    $result = mysqli_query($conn,$sql);
    
    $sql = "INSERT INTO prenotazioni ( prod_id, user_id, data, stato) VALUES (".$_REQUEST['id'].",1,NOW(),0)";
    $result = mysqli_query($conn,$sql);
    return "Operazione Eseguita con successo";
?>

