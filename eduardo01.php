<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.cdnfonts.com/css/modi-thorson" rel="stylesheet">
                
        <link href="https://fonts.cdnfonts.com/css/modi-thorson" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/g-getuk" rel="stylesheet">

    <title>J.EDUARDO</title>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color:#72a98f;">
    <div class="container">
                     
        <a href="/real/index.html" class="navbar-brand" style="color:rgb(255, 255, 255);  font-family: 'g Getuk', sans-serif;">Inicio</a>
        <div class="collase nabvar-collapse" id="navbarNavDropdown">
<ul class="nav navbar-nav">
<li class="nav-item dropdown">
<a href="" class="nav-link dropdown-toogle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
 style="color: white;  font-family: 'g Getuk', sans-serif;">Unidad 1</a>

    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<a href="/real/eduardo01.php" class="dropdown-item">practica 1</a><br>
<a href="/real/eduardo02.php" class="dropdown-item">practica 2</a><br>
<a href="/real/eduardo03.php" class="dropdown-item">practica 3</a><br>
    </div>
</li>
<li class="nav-item dropdown">
    <a href="" class="nav-link dropdown-toogle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
     style="color: white;    font-family: 'g Getuk', sans-serif;">Unidad 2</a>
    
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a href="/real/eduardo04.php" class="dropdown-item">practica 4</a><br>
          <a href="/real/eduardo05.php" class="dropdown-item">practica 5</a><br>
          <a href="/real/jesusss06.html" class="dropdown-item">practica 6</a><br>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a href="" class="nav-link dropdown-toogle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
         style="color: white; font-family: 'g Getuk', sans-serif;">Unidad 3</a>
        
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a href="/real/jesus07.html" class="dropdown-item">practica 7</a><br>
              <a href="/real/jesus08.html" class="dropdown-item">practica 8</a><br>
              <a href="/real/jesus09.html" class="dropdown-item">practica 9</a><br>
            </div>
            </div>
        </li>
</ul>
</div>
    </div>
    </nav>
    <div class="jumbotron" >
        <h1 class="display-4" style="text-align:center;      font-family: 'g Getuk', sans-serif;">
  Mostrar Datos
        </h1>
        <p class="lead" style="text-align:center;"></p>
        <hr class="my-4">
        <p style="text-align:center;"></p>
      </div>



     

<?php
$username="root"; 
$password ="";
$servername ="localhost";
$database ="reynosa";

$conexion =new mysqli($servername,$username,$password, $database);
if($conexion->connect_error){
die("conexion fallida: " .$conexion->connect_error);
}
$sql="SELECT * FROM nfleast";
$resultado = $conexion-> query($sql); 
?>
<div class="container">
<h1>datos de los jugadores  </h1>
</div>
<style>
  h1{
    text-align:center;
<color: green;
margin-bottom:20px;
  }
table{
width:100%;
border-collapse:collapse;
margin-top:50px;
border-radius:50px;
}
th, td{
padding:10px;
text-align:left;
border-bottom: 1px solid #ddd;
}
tr:nth-child(even){
background-color:grey ;
color:black;
}
tr:nth-child(odd){
  background-color:white;
  color:black;
}
th{
  background-color:#72a98f;
  color:white;
}
</style>



<?php if($resultado->num_rows >0):?>
<table>
  <tr>
    <th>id</th>
    <th>Nombre</th>
    <th>apellido</th>
    <th>apodo</th>
    <th>peso</th>
    <th>altura</th>
    <th>posicion</th>
    <th>universidad</th>
    <th>equipo</th>

</tr>






<?php while ($fila = $resultado->fetch_assoc()): ?>
<tr>
  <td><?php echo $fila ["id"]; ?></td>
  <td><?php echo $fila ["nombre"]; ?></td>
  <td><?php echo $fila ["apellido"]; ?></td>
  <td><?php echo $fila ["apodo"]; ?></td>
  <td><?php echo $fila ["peso"]; ?></td>
  <td><?php echo $fila ["altura"]; ?></td>
  <td><?php echo $fila ["posicion"]; ?></td>
  <td><?php echo $fila ["universidad"]; ?></td>
  <td><?php echo $fila ["equipo"]; ?></td>

</tr>
<?php endwhile; ?>
</table>
<?php else: ?> 
<p>No se encontro el jugador</P>
<?php endif; ?>


</body>
</html>