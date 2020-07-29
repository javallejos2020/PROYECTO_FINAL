

<link rel="stylesheet" type="text/css" href="css/estilofinal.css">

<!--<link rel="stylesheet" type="text/css" href="css/estilo1.css">-->
<?php 
if ($codProceso=='P8') { 
  ?>
 <!-- <link rel="stylesheet" type="text/css" href="css/estilo.css">-->
  <form action="" method="POST">
  <h1><center>HISTORIAL</center></h1>
    
        <input type="text" name="ci" placeholder="Introduzca Carnet de Identidad" required><br>
        <input type="submit" name="ver" required>
   
  </form>
  <?php 
}
?>

<?php 
if ($codProceso=='P3') {
  ?>
  <form action="" method="POST">
  <h1><center>VALIDAR FECHA</center></h1>
 
          <select name="facultad" >
            <option disabled="">Facultades</option>
            <option value="Agronomia">Agronomia</option>
            <option value="Ciencias Geologicas">Ciencias Geologicas</option>
            <option value="Ciencias Puras y Naturales">Ciencias Puras y Naturales</option>
            <option value="Ciencias Farmaceuticas y Bioquimica">Ciencias Farmaceuticas y Bioquimica</option>
            <option value="Ciencias Economicas y Finanacieras">Ciencias Economicas y Finanacieras</option>
            <option value="Medicina, Nutricion, Enfermeria, Tecnologia">Medicina, Nutricion, Enfermeria, Tecnologia</option>
            <option value="Odontologia">Odontologia</option>
            <option value="Arquitectura y Artes">Arquitectura y Artes</option>
            <option value="Ciencias Sociales">Ciencias Sociales</option>
            <option value="Derecho">Derecho</option>
            <option value="Humanidades y Ciencias de la Educacion">Humanidades y Ciencias de la Educacion</option>
            <option value="Ingenieria">Ingenieria</option>
            <option value="Tecnologia">Tecnologia</option>
          </select>           
       <br>
          <input type="date" name="fecha" required>
       <br>
      
        <input type="submit" name="Verifica" required>
    

      
    </form>

    <?php 
  }
  
  if ($codProceso=='P4'):
    ?>
    <form  action="" method="POST">
	<h1><center>VALIDAR NUEVO</center></h1>
        <input type="text" name="ci" placeholder="Introduzca Carnet de Identidad" required>        
        <input type="submit" name="envia" required>			  
    </form>

  <?php endif ?>
  
  
  
  <?php 
  if ($codProceso=='P6') { 
    ?>

    <form method="post">
    	<h1>Registrar Nuevo</h1>
    	<input type="text" name="nombre" placeholder="Nombre">
    	<input type="text" name="apellidos" placeholder="Apellidos">
      <input type="text" name="ci" placeholder="Carnet de Identidad">
      <input type="text" name="facultad" placeholder="Facultad">
      <input type="text" name="carrera" placeholder="Carrera">
      <input type="submit" name="register" required>
    </form>
    <?php 
  }
  ?>
  
  <?php 
  if ($codProceso=='P7') { 
    ?>
    <form method="post">
    	<h1>Registrar Valoracion</h1>
        <input type="text" name="ci" placeholder="Carnet de Identidad"><br>
        <input type="text" name="peso" placeholder="Peso"><br>
        <input type="text" name="talla" placeholder="Talla"><br><br>
		<select name="estado">
            <option disabled="">Estado</option>
            <option value="Bajo Peso">Bajo Peso</option>
            <option value="Normal">Normal</option>
            <option value="Sobre Peso">Sobre Peso</option>
            <option value="Obesidad 1">Obesidad 1</option>
            <option value="Obesidad 2">Obesidad 2</option>
          </select>           <br>
        <!--<input type="text" name="estado" placeholder="Estado">-->
        <input type="submit" name="register"> 
    
   </form>
   <?php 
 }
 ?>
 