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


<style>
.container1{
    justify-content: center;
    align-items: center;
    width: 50%;
    background:#282a36;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    color:white;
  
}
h1{
    text-shadow: 0 1 1 black;
    text-align:center;
    color:black;      
    margin-bottom:15px;
}
form{
    display:flex;
    flex-direction:column;
}
label{
    font-size:16px;
    margin-bottom:5px;
}
input[type="text"]{
padding: 8px;
margin-bottom: 10px;
border: none;
border-radius: 5px;
font-size: 16px;
background-color: #44475a;
color: #fff;
}
input[type="submit"]{
    padding: 8px;
    background-color: #5efa7b;
    border: none;
    color: #282a36;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}
input[type="submit"]:hover{
    background-color: #3ae374;
}






</style>

     


<h1>METER DATOS</h1>
<div class="container1"> 
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="formulario">


<label form="id:">id: </label>
<input type="text" id="id" name="id" requiered><br>

<label form="nombre:">nombre: </label>
<input type="text" id="nombre" name="nombre" requiered><br>

<label form="apellido:">apellido: </label>
<input type="text" id="apellido" name="apellido" requiered><br>

<label form="apodo:">apodo </label>
<input type="text" id="apodo" name="apodo" requiered><br>

<label form="peso">peso </label>
<input type="text" id="peso" name="peso" requiered><br>

<label form="altura">altura </label>
<input type="text" id="altura" name="altura" requiered><br>

<label form="posicion">posicion </label>
<input type="text" id="posicion" name="posicion" requiered><br>

<label form="universidad">universidad </label>
<input type="text" id="universidad" name="universidad" requiered><br>

<label form="equipo">equipo </label>
<input type="text" id="equipo" name="equipo" requiered><br>


<input type="submit" value="Agregar registro">
</form>

<?php
$username="root"; 
$password ="";
$servername ="localhost";
$database ="reynosa";

$conexion =new mysqli($servername,$username,$password,$database);
if($conexion->connect_error){
die("conexion fallida: " . $conexion->connect_error);
}
function insertarPersonaje($conexion){

if($_SERVER["REQUEST_METHOD"]=="POST"){

var_dump($_POST);

$id = $conexion->real_escape_string ($_POST["id"]);
$nombre = $conexion->real_escape_string ($_POST["nombre"]);
$apellido = $conexion->real_escape_string ($_POST["apellido"]);
$apodo = $conexion->real_escape_string ($_POST["apodo"]);
$peso = $conexion->real_escape_string ($_POST["peso"]);
$altura = $conexion->real_escape_string ($_POST["altura"]);
$posicion = $conexion->real_escape_string ($_POST["posicion"]);
$universidad = $conexion->real_escape_string ($_POST["universidad"]);
$equipo = $conexion->real_escape_string ($_POST["equipo"]);



$sql = "INSERT INTO nfleast (id , nombre , apellido , apodo , peso , altura, posicion, universidad , equipo) VALUES ( '$id', '$nombre', '$apellido',
    '$apodo', '$peso','$altura','$posicion','$universidad','$equipo')";
    if($conexion->query($sql)==TRUE){
    echo"<p class='success'>Nuevo personaje agregado con exito</p>";
 
}else{
    echo "<p class'error'>Error al agregar al personaje" . $conexion->error . "</p>";
    
    
    }
}
} insertarPersonaje($conexion);




$sql =  "SELECT * FROM nfleast ORDER BY id DESC";
$resultado = $conexion->query($sql) 


?>

<h2>Registros ingresados</h2>
<table>
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>apodo</th>
        <th>peso</th>
<th>altura</th>
<th>posicion</th>
<th>universidad</th>
<th>equipo</th>

</tr>
<?php
if($resultado->num_rows >0){
    while ($fila = $resultado->fetch_assoc()){
        echo "<tr>
        <td>" . $fila['id'] . "</td>
        <td>". $fila['nombre'] . "</td>
        <td>". $fila['apellido'] . "</td>
        <td>". $fila['apodo'] . "</td>
        <td>". $fila['peso'] . "</td>
        <td>". $fila['altura'] . "</td>
        <td>". $fila['posicion'] . "</td>
        <td>". $fila['universidad'] . "</td>
        <td>". $fila['equipo'] . "</td>
        </tr>";
    }
}else{
    echo"<tr><td colspan='4'>No hay registros aun.</td></tr>"

;}

?>
</div>





</body>
</html>