<?php


include "funcions.php";



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Examen M08 - UF4</title>
  </head>
  <body>
    <div class="container">
    
        
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1>Examen M08 - UF4</h1>
                <p class="lead">Dos programadors estan discutint
                quina és la millor manera de calcular el numero π.
                Per demostrar quin és el millor algorisme han decidit
                col·laborar en aquest repositori.</p>
                <hr class="my-4">
                <p>Cada un ha creat una branca a partir de master i
                ha implementat el seu algorisme, ara falta un expert en Git que
                integri tots els canvis i publiqui el repositori a Github perquè
                tota la comunitat pugui saber qui tenia raó.</p>
            </div>
        </div>

<<<<<<< HEAD
        <div class="row">
            <div class="col">
                <table class="table">
                    <tr>
                        <th>Iteració</th>
                        <th>Programador 1</th>
                        <th>Programador 2</th>
                    </tr>
                    <?php for ($i=1;$i<=20;$i++) {
                        ?>
                    
                    <tr>
                        <td><?=$i;?></td>
                        <td><?=programador1($i*1000);?></td>
                        <td><?=programador2($i*1000);?></td>
                    </tr>
                    <?php } ?>
                </table>
                
            </div>
        </div>

    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>