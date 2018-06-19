<?php
 if   (empty($_POST["nombre"]) or (empty($_POST["apellido"])))  {
       header("location: editar.php?error");
    }
 
 else{
  
    $matricula = $_GET["matricula"];
    $nombre = test_input($_POST["nombre"]);
    $apellido = test_input($_POST["apellido"]);
   
    require("../../conectar.php");
 
    $query = "UPDATE docentes SET nombre='$nombre', apellido='$apellido' WHERE matricula='$matricula'";
    
    $result = mysqli_query($connect,$query);
    
    header("location: index.php?editado");
    
   }
    
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

 

