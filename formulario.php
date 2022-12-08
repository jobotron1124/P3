<!DOCTYPE html>
<html lang="es">
<head>
    <meta chrset="utf-8"/>
    <title> Blosh</title> 
        <link rel="stylesheet" href="estilo.css"/>
</head>
<body>
    
    <header class="T"> 
            Blosh
    </header>
    
    <a class="bt" href="inicio.php">Regresar a Pagina Principal</a>  
       
    <form  method="post" >
        
        <fieldset>
          <legend> <mark>Formulario</mark></legend>
                <label  for="name">Titulo</label>
                <br>
                <input type="text"  name="Titulo" placeholder="Titulo" required>
                <br>
                <label  for="image">Imagen(url) </label>
                <br>
                <input  type="text"  name="Imagen" required>
                <br>
                <label for="msg">Descripcion</label>
                <br>
                <input type="text"  name="Descripcion" placeholder="Descripcion" required>
                <br>
                <label for="name">Nombre del autor</label>
                <br>
                <input type="text" name="Nombredelautor" placeholder="Su nombre" required>
                <br>
                <label for="msg">Fecha de Publicacion</label>
                <br>
                <input type="text"  name="FechadePublicacion" required>              
                <br>
                <br>
				<input type="submit" name="Enviar">
                <?php
include("R.php");

?>
                  
      </form>

</body>
</html>