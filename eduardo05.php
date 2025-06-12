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
    padding: 10px;
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

<div class="container1" style=" display:flex; max-whidth:600px; margin:auto;">

    <form method="POST" id="formulario">
<label for="numero_control">Numero de Control</label>
<input type="text" id="numero_control" name="numero_control"
required></br>
<label for="nomre">Nombre</label>
<input type="text" id="nombre" name="nombre"
required></br>
<label for="apellido_paterno">Apellido Paterno</label>
<input type="text" id="apellido_paterno" name="apellido_paterno"
required></br>
<label for="apellido_materno">Apellido Materno</label>
<input type="text" id="apellido_materno" name="apellido_materno"
required></br>
<label for="id_edad">Edad</label>
<input type="text" id="id_edad" name="id_edad"
required></br>
<label for="id_colonia">Colonia</label>
<input type="text" id="id_colonia" name="id_colonia"
required></br>
<label for="id_especialidad">Especialidad</label>
<input type="text" id="id_especialidad" name="id_especialidad"
required></br>
<label for="id_genero">genero</label>
<input type="text" id="id_genero" name="id_genero"
required></br>
<label for="correo">Correo Electronico</label>
<input type="email" id="correo" name="correo"
required></br>
<label for="telefono">Telefono</label>
<input type="text" id="telefono" name="telefono"
required></br>
<label for="fecha_ingreso">Fecha de Ingreso</label>
<input type="date" id="fecha_de_ingreso" name="fecha_de_ingreso"
required></br>






<input type ="submit" value="Agregar Registro">
</form>
</div>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$username="root"; 
$password ="";
$servername ="localhost";
$database ="escuela1";

$conexion =new mysqli($servername,$username,$password, $database);
if($conexion->connect_error){
die("conexion fallida: " .$conexion->connect_error);

}

function insertarAlumno($conexion)
{
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    var_dump($_POST);
$numero_control = $conexion->real_escape_string($_POST["numero_control"]);
$nombre = $conexion->real_escape_string($_POST["nombre"]);
$apellido_paterno = $conexion->real_escape_string($_POST["apellido_paterno"]);
$apellido_materno = $conexion->real_escape_string($_POST["apellido_materno"]);
$id_edad = $conexion->real_escape_string($_POST["id_edad"]);
$id_colonia = $conexion->real_escape_string($_POST["id_colonia"]);
$id_especialidad = $conexion->real_escape_string($_POST["id_especialidad"]);
$id_genero = $conexion->real_escape_string($_POST["id_genero"]);
$correo = $conexion->real_escape_string($_POST["correo"]);
$telefono = $conexion->real_escape_string($_POST["telefono"]);
$fecha_de_ingreso = $conexion->real_escape_string($_POST["fecha_de_ingreso"]);

$sql = "INSERT INTO Alumnos (numero_control, nombre,apellido_paterno , apellido_materno , id_edad ,
 id_colonia , id_especialidad , id_genero , correo , telefono , fecha_de_ingreso )
VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$id_edad',
'$id_colonia', '$id_especialidad', '$id_genero', '$correo', '$telefono', '$fecha_de_ingreso')";

if ($conexion->query($sql) == TRUE) {
    echo "<p class='success'>nuevo alumno agregado con exito. </p>";
header("Location: " . $_SERVER['PHP_SELF']);
exit();
}else{
    echo "<p class'error'>Error al agregar el alumno: " . $conexion->error . "</p>";
}
    }

}

insertarAlumno($conexion);
$sql = "SELECT * FROM alumnos";
$resultado = $conexion->query($sql);
if ($resultado->num_rows > 0 ){
echo "<table class='table table-bordered'>";
echo "<tr><th>Numero de control</th> <th>Nombre</th> <th>Apellido paterno</th> <th>Apellido materno</th>
<th>Edad</th> <th>Colonia</th> <th>Especialidad</th> <th>Genero</th> <th>correo</th> <th>Telefono</th>
<th>Fecha de registro</th></tr>";
while ($row = $resultado->fetch_assoc()) {

    echo "<tr>
    <td>"  . $row['numero_control'] . "</td>
    <td>"  . $row['nombre'] . "</td>
    <td>"  . $row['apellido_paterno'] . "</td>
    <td>"  . $row['apellido_materno'] . "</td>
    <td>"  . $row['id_edad'] . "</td>
    <td>"  . $row['id_colonia'] . "</td>
    <td>"  . $row['id_especialidad'] . "</td>
    <td>"  . $row['id_genero'] . "</td>
    <td>"  . $row['correo'] . "</td>
    <td>"  . $row['telefono'] . "</td>
    <td>"  . $row['fecha_de_ingreso'] . "</td>
    </tr>";
}    
echo "</table>";





}else{
    echo "<p>No se encontraron registros en la base de datos.</p>";
}




$conexion->close();

?>


</div>

</body>
</html>