<?php
include("C.php");

if (isset($_POST['Enviar'])) {
if(strlen($_POST['Titulo']) >= 1 && strlen($_POST['Imagen']) >= 1 && strlen($_POST['Descripcion']) >= 1 && strlen($_POST['Nombredelautor']) >= 1 && strlen($_POST['FechadePublicacion']) >= 1 ){

    $Titulo = trim($_POST['Titulo']);
    $Imagen = trim($_POST['Imagen']);
    $Descripcion = trim($_POST['Descripcion']);
    $Nombredelautor = trim($_POST['Nombredelautor']);
    $FechadePublicacion = trim($_POST['FechadePublicacion']);

    $consulta = "INSERT INTO se(titulo, imagen, descripcion, nombre del autor, fecha de publicacion) VALUES ('$Titulo','$Imagen',' $Descripcion',' $Nombredelautor','$FechadePublicacion')";
    $resultado = mysqli_query($conex,$consulta);
}
if ($resultado) {
	    	?> 
    		<button onclick="location.href='inicio.php'">Regresar</button>           <?php
	    } else {
	    	?> 
	    	<h3>¡Ups ha ocurrido un error!</h3>
           <?php
	    }
     }   


?>