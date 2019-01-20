
<?php
require_once '../modelo/userModel.php';
class UserController {
    public function index () {
        require_once '../vista/user/registro.php';
    }

    public function save () {
        if(isset($_POST)) {
            $usuario = new Usuario();
            $usuario->setCodigo($_POST['codigo']);
            $usuario->setNombre($_POST['nombre']);
            $usuario->setPuesto($_POST['puesto']);
            $usuario->setContraseña(sha1($_POST['contraseña']));
            $usuario->setEmail($_POST['email']);
            if($_POST['puesto'] == 'Administrador'){$usuario->setUser_level('1');}
            if($_POST['puesto'] == 'Jefatura'){$usuario->setUser_level('2');}
            if($_POST['puesto'] == 'Coordinador'){$usuario->setUser_level('3');}
            if($_POST['puesto'] == 'Instrumentista'){$usuario->setUser_level('4');}
            
            $file = $_FILES['imagen'];
            $filename = $file['name'];
            $fileType = $file['type'];

            if($fileType == "image/jpeg" || $fileType ==  "image/jpg" || $fileType == "image/png" || $fileType == "image/gif"){
                
            
            move_uploaded_file($file['tmp_name'], '../build/images/'.$filename);
                $usuario->setImagen('../build/images/'.$filename);
            }else{
                echo "<script>
                Swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Ha ocurrido un error',
                    footer: '<p>Tipo de archivo incorrecto, debe ser una imagen</p>'
                  })
                </script>";
            }
            

                        

            $save = $usuario->save();
            if($save){
                $_SESSION['register'] = "complete";
                include '../vista/user/registro.php';
                echo "<script>
                Swal({
                  position: 'center',
                  type: 'success',
                  title: 'Usuario Agregado Con Exito',
                  showConfirmButton: false,
                  timer: 1500
                })
                </script>";
            }else{
                
                $_SESSION['register'] = "failed";
                include '../vista/user/registro.php';
                echo "<script>
                Swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Ha ocurrido un error',
                    footer: '<p>Existe un usuario con esos datos</p>'
                  })
                </script>";
                
            }
        }else{
            $_SESSION['register'] = "failed";
            include '../vista/user/registro.php';
            echo "<script>
            Swal({
                type: 'error',
                title: 'Oops...',
                text: 'Ha ocurrido un error',
                footer: '<p>ERROR DE CONEXIÓN</p>'
              })
                </script>";
            
        }
        
    }
}