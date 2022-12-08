<?php
include("C.php");

if (isset($_POST['Enviar'])) {
if(strlen($_POST)['Titulo'] >= 1 &&
   strlen($_POST)['Imagen'] >= 1 &&
   strlen($_POST)['Descripcion'] >= 1 &&
   strlen($_POST)['Nombredelautor'] >= 1 &&
   strlen($_POST)['FechadePublicacion'] >= 1 ){

    $Titulo = trim($_POST['Enviar']);
    $Imagen = trim($_POST['Titulo']);
    $Descripcion = trim($_POST['Imagen']);
    $Nombredelautor = trim($_POST['Descripcion']);
    $FechadePublicacion = trim($_POST['Nombredelautor']);
    $fechareg = date("d/m/y");
    $consulta = "INSERT INTO gt (titulo, descripcion,nombreautor,fecha) VALUES ('$Titulo','$Imagen',' $Descripcion','$Nombredelautor','  $FechadePublicacion')";
    $resultado = mysqli_query ($conex,$consulta);
}
if ($resultado) {
	    	?> 
	    	<h3>¡Te has inscripto correctamente! </h3>
           <?php
	    } else {
	    	?> 
	    	<h3>¡Ups ha ocurrido un error!</h3>
           <?php
	    }
     }   


?>