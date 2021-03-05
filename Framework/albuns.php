

<!DOCTYPE html>

<body> 

<?php

$url = 'https://jsonplaceholder.typicode.com/albums/';
$ch = curl_init($url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$resultado = json_decode(curl_exec($ch));



?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Site Framework</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="js/js.js"></script>
 
</head>

<body>


   


</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">



    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
       
         <li class="nav-item">
             <h4 class="nav-link" href="index.php">Site Framework</h4>
        </li> 
            
        </ul>
    </div>
    <ul class="navbar-nav">
    <ul class="navbar-nav">
   
     <li class="nav-ite">
     <li class="nav-item">
                <a class="nav-link" href="postagens.php">Postagens</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="albuns.php">Albuns</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Todos</a>
            </li>
     </li> 
</ul>
  
  
</ul>
</nav>




        <div class="col-sm-9">
        <h1>Albuns</h1> 
        <table id= "table" class="lista-clientes">
          
            <?php
            
                foreach($resultado as $result)
                        {
                            echo "Id: " . $result->id . "<br>";
                            echo "Titulo: " . $result->title . "<br>";
            
                            echo "<hr>";
                        }
                        ?>  
        
        </table>
        </div>      
    </div>
</div>



</body>
</html>



</body>


</html>


