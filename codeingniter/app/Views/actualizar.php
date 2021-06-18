 <?php
$id = $datos[0]['id'];
$nombre = $datos[0]['nombre'];
$apaterno = $datos[0]['apellido_paterno'];
$amaterno = $datos[0]['apellido_materno'];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
     <div class="container"
       <h1>Actualizar registro</h1>          
         <div  class="row">   
           <div  class="col-sm-12">
             <from method="POST" action="<?php echo base_url('/index.php/actualizar')?>">
               <input type="hidden" name="id" id="id" value="<?php echo  $id ?>">
               <label for="nombre">Nombre:</label>
               <input type="text" class="from-control" name="nombre" id="nombre" value="<?php echo $nombre ?>" required>
               <label for="apaterno">Apellido paterno:</label>
               <input type="text" name="apaterno" id="apaterno" class="form-control" value="<?php echo $apaterno ?>" required>
               <label for="apaterno">Apellido materno:</label>
               <input type="text" name="amaterno" id="amaterno" class="form-control" value="<?php echo $amaterno ?>" required>
               <button class="btn  btn-waring from-control">Editar</button>
             </from>
           </div>
         </div>
       </div>        
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
           
