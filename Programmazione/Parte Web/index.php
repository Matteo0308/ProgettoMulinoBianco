<!DOCTYPE html>
<html>
<!--Include Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="scripts.js"></script>
<!-- jQuery Import-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <title></title>
</head>


<body style ="background-color:#fff9e7">
	<div class="w-100" style = "background-color:#fadd8b;height:60px">
    	<div class="d-flex justify-content-center p-2">
        	<h3>Mulino Bianco</h3>
        </div>
    </div>
    
    <div class=" justify-content-center" style="width:100%;height:100%;margin-top: 10px;margin-left:120px;margin-right:120px">
    	<?php
            $conn = mysqli_connect('127.0.0.1','root','','my_losig');

            $sql = "SELECT * FROM prodotti WHERE pezzi > 0";

            $result = mysqli_query($conn,$sql) or die("Errore nella query.") ;
            while($row = mysqli_fetch_array($result)){
            	echo 
                '<div class="card m-3" style="width: 320px; float:left;">
  			        <img class="card-img-top" src="'.$row['img_path'].'" alt="Card image cap">
  			        <div class="card-body">
    			        <h5 class="card-title">'. $row['nome'].'</h5>
                        <div class="border-1"></div>
    			        <p class="card-text ">Prezzo: '. $row['costo'] .' punti</p>
                        <button type="button" onclick="ordina('. $row['id'] .')" class="btn btn-primary" style="background-color:#551b11; color:white">Ordina</button>
  			        </div>
		        </div>';


            };
        ?>
    </div>
</body>
</html>
