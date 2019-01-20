<?php
      $user = $_POST['b'];
       
      if(!empty($user)) {
            comprobar($user);
      }
       
      function comprobar($b) {
            global $db;
       
            $email = $db->query("SELECT * FROM Ejecutores WHERE email = '".$b."'");
             
            $contar = mysqli_num_rows($email);
             
            if($contar == 0){
                  echo "<span style='font-weight:bold;color:green;'>Disponible.</span>";
            }else{
                  echo "<span style='font-weight:bold;color:red;'>El nombre de usuario ya existe.</span>";
            }
      }     
?>