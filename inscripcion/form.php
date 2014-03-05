<?php
 echo '<form method="post" action="http://localhost/technium/DB.php">';
 echo 'Nombre completo : <input type="text" name="nombre" size="25" maxlength="50"><br><br>';
 echo 'Nick : <input type="text" name="nick" size="25" maxlength="50"><br><br>';
 echo 'Correo electronico : <input type="text" name="correo" size="25" maxlength="50"><br><br>';
 echo 'Telefono : <input type="text" name="telefono" size="25" maxlength="50"><br><br>';
 
 echo 'Potencia de tu equipo : <input type="text" name="potencia" size="25" maxlength="50"><br><br>';
 echo '<input type="hidden" name="tipo" value="registrar" >';
 echo '<input type="submit" value="Registrar">';
 echo '</form>';

 echo '<form method="post" action="http://localhost/technium/login.php">';
 echo '<input type="submit" value="Mostrar">';
 echo '</form>';
?>