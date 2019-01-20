<?php include_once('../includes/load.php'); ?>
<?php
$req_fields = array('username','password' );
validate_fields($req_fields);
$username = remove_junk($_POST['username']);
$password = remove_junk($_POST['password']); 
 
if(empty($errors)){
  $user_id = authenticate($username, $password);
  if($user_id['Contraseña']){
    //create session with id
     $session->login($user_id);
     echo $user_id['Nombre'];
    //Update Sign in time
     updateLastLogIn($user_id['Contraseña']);

     $session->msg("s", "Bienvenido a OSWA-INV.");
     redirect('../vista/dashboard.php',false);

  } else {
    $session->msg("d", "Nombre de usuario y/o contraseña incorrecto.");
    redirect('../index.php',false);
  }

} else {
   $session->msg("d", $errors);
   redirect('../index.php',false);
}

?>
