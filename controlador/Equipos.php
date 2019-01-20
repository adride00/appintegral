<?php
require_once '../modelo/EquiposModel.php';
    class Equipos {

        public function index (){
            require_once '../vista/equipos/registroEquipos.php';
        }

        public function registro () {
        


        }

       public function save () {
           if(isset($_POST)){
                $equipos = new EquiposModel();
                $equipos->setCodigo_sap($_POST['codigo_sap']);
                $equipos->setTag($_POST['tag']);
                $equipos->setDescripcion($_POST['descripcion']);
                $equipos->setZona_proceso($_POST['zona_proceso']);
                $equipos->setVariable_proceso($_POST['variable_proceso']);
                $equipos->setTipo_equipo($_POST['tipo']);
                $equipos->setUbicacion($_POST['ubicacion']);
                $equipos->setProtocolo($_POST['protocolo']);
                $equipos->setId(generarId ());
                $save = $equipos->save();
                if($save){
                    $_SESSION['register'] = "complete";
                    include '../vista/equipos/registroEquipos.php';
                    echo "<script>
                    Swal({
                      position: 'center',
                      type: 'success',
                      title: 'Equipo Agregado Con Exito',
                      showConfirmButton: false,
                      timer: 1500
                    })
                    </script>";
                }else{
                    $_SESSION['register'] = "failed";
                    include '../vista/user/registroEquipos.php';
                    echo "<script>
                    Swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Ha ocurrido un error',
                        footer: '<p>Existe un equipo con esos datos</p>'
                      })
                    </script>";
                }
            }else{
                $_SESSION['register'] = "failed";
                include '../vista/user/registroEquipos.php';
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

        public function listarEquipos () {
            /*require_once '../modelo/EquiposModel.php';
            $registro = new EquiposModel();
            
            var_dump($registro->listarRegistros()); */
            $equipos = new EquiposModel();
            $listadoEquipos = $equipos->listarRegistros();
            require_once '../vista/equipos/listadoEquipos.php';
        }

        public function eliminar () {
            
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $delete = new EquiposModel();
                $delete->setId($id);
                $eliminado = $delete->eliminarEquipo();

                if($eliminado){
                    $_SESSION['delete'] = 'completado';
                    ?>
                        <script>window.location.href = '?controlador=Equipos&action=listarEquipos';</script>
                    <?php
                    
                }else{
                    $_SESSION['delete'] = 'failed';
                    
                }
            }else{
                $_SESSION['delete'] = 'failed';
                
            }

            
            
                 
            
            
        }
    }
?>

