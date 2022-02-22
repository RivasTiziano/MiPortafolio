<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['telephone']) >= 1 && strlen($_POST['mensaje']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
		$telephone = trim($_POST['telephone']);
		$mensaje = trim($_POST['mensaje']);
		$fechareg = date("d/m/y");
	    $consulta = "INSERT INTO portfolio(nombre, email, telephone, mensaje, fecha_reg) VALUES ('$name','$email','$telephone','$mensaje','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?>
	    	<h3 class="ok">¡Los datos se enviaron correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>