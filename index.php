<!DOCTYPE html>
<html lang="en">
<?php

require("comunes/head.php");
require("conectar.php");
require("determinar_movimiento.php");
 ?>

<body>
 

<?php   require("comunes/nav.php"); ?>

    <!-- Header -->
    <header>
        <div align="center">
           <br><br><br>

    <form class="form-signin" action="index.php" method="POST">

		
		<div style="text-align:center;color:red;font-weight:900"> <?php

  
                        if(isset($_GET["error"]))
                              {
                            ?>
                            <div class="alert alert-danger">
                             <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo "No hay alumno registrado con esa matricula "; ?> !
                         </div>
                         <?php
                     }
                      
                     ?>

<?php

 
                        if(isset($movimiento) and ($movimiento==0))
                        {
                            ?>
                             <div style="color:black">
                             <?php echo "Matricula: ".$cedula; echo "<br>"; ?>
                              <?php  echo "Nombre y Apellido: ".$row["nombre"];  echo " ";  echo $row["apellido"]; echo "<br>";  ?>
                               <img src="admin/empleados/fotos/<?php echo $row['foto']; ?>" class="img-rounded" width="64px" height="64px" />
                                <?php echo "<br>"; ?>
                         </div>
                          <?php echo "<br>"; ?>
                            <div class="alert alert-success fade in">
                              <?php echo $tipo; echo ": "; echo $hora; ?> 
                         </div>
                         <?php
                     }
                      if(isset($movimiento) and ($movimiento==1))
                        {
                            ?>
                             <div  style="color:black">
                              <?php echo "Matricula: ".$cedula; echo "<br>"; ?>
                                 <?php  echo "Nombre y Apellido: ".$row["nombre"];  echo " ";  echo $row["apellido"]; echo "<br>"; ?>
                                  <img src="admin/empleados/fotos/<?php echo $row['foto']; ?>" class="img-rounded" width="64px" height="64px" />
                                  <?php echo "<br>"; ?>
                         </div>
                          <?php echo "<br>"; ?>
                            <div class="alert alert-danger fade in">
                                 <?php echo $tipo; echo ": "; echo $hora; ?> 
                         </div>
                         <?php
                     }
                    
                       
                     ?>

                     </div>  
                      <img style="width:128px" src="img/marcados.png"/> 
      <h2 class="form-signin-heading" style="color:black">REGISTRO</h2>
	  
	  
	  <?php
	 
	 mysql_connect("localhost","root","");
	 mysql_select_db("asistencia");
	 ?>
	 
	 <form method='POST'>
	 
 <input type="text" class="form-control" name="cedula" maxlength="15" onkeypress="return isNumberKey(event)" placeholder="Matricula" required="" autofocus="" />  
	  <br>
	  <select type="text" class="form-control" name="Materias" maxlength="8"  >
	  <?php
	  $sql=" SELECT * FROM materias ";
	  $rec=mysql_query($sql);
	  while($row=mysql_fetch_array($rec))
		  
		  {
			  echo "<option>";
			  
			  echo $row['materia'];
			 
			  echo "</option>";
			  
		  }
		  ?>
	  </select>
	   <br>
	    <select type="text" class="form-control" name="Clasificacion" maxlength="8"  >
	  <?php
	  $sql=" SELECT * FROM clasificacion ";
	  $rec=mysql_query($sql);
	  while($row=mysql_fetch_array($rec))
		  
		  {
			  echo "<option>";
			  
			  echo $row['clasificacion'];
			 
			  echo "</option>";
			  
		  }
		  ?>
	  </select>
	  
	  
	  <br>
	  <br>
     
      <button class="btn btn-lg btn-primary btn-block" type="submit">Aceptar</button>   
    </form>
  </div>
                    
    </header>

 <?php   require("comunes/footer.php"); ?>

  <?php   require("comunes/scripts.php"); ?>
   
<script type="text/javascript">
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
</script>
</body>

</html>
