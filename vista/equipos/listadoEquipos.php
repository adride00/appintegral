
<link rel="stylesheet" type="text/css" href="../../DataTables/dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.3.2/css/autoFill.dataTables.min.css">

<?php require_once('../includes/load.php'); ?>
          
          
         
    <div class="title_left">
          <h3>LISTADO DE EQUIPOS <small></small></h3>
      </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
                 
  <table id="datatables" class="display table table-striped table-bordered">
    <thead>
        <tr>
            <th>Tag</th>
            <th>Codigo SAP</th>
            <th>Descripción</th>
            <th>Ubicación</th>
            <th>Zona Proceso</th>
            <th>Tipo de Equipo</th>
            <th>Variable de Proceso</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
    <tbody>
        <?php while($equipos = $listadoEquipos->fetch_object()): ?>
       
        <tr>
            <td><?= $equipos->Tag;?></td>
            <td><?= $equipos->Codigo_Sap;?></td>
            <td><?= $equipos->Descripcion;?></td>
            <td><?= $equipos->Ubicacion;?></td>
            <td><?= $equipos->Zona_Proceso;?></td>
            <td><?= $equipos->Tipo_Equipo;?></td>
            <td><?= $equipos->Variable_de_Proceso;?></td>
<td><?php if($_SESSION['Puesto'] == 'Administrador' || $_SESSION['Puesto'] == 'Coordinador'): ?><a id=<?=$equipos->id;?> class="btn btn-danger eliminar"><i class="fa fa-eraser"></i>Eliminar</a><?php endif; ?>
            <a href="?controlador=Equipos&action=editar&id=<?=$equipos->id;?>" class="btn btn-warning"><i class="fa fa-edit"></i>Editar</a></td>
        </tr>
          <?php endwhile; ?>
    </tbody>
</table>
   </div>
  </div>
 </div>

 <!-- jQuery -->
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    
 <script src="../../yvendors/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>


    <script>
        $(".eliminar").click(function(e){
            e.preventDefault();
            var id = $(this).attr('id');
            Swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.value) {
                    window.location.href = '?controlador=Equipos&action=eliminar&id='+id;
                }
                })
            });
    </script>
    
    <?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'completado'): ?>
    <script>
        Swal(
            'ELIMINADO!',
            'El registro ha sido eliminado.',
            ''
            )
    </script>

<?php endif;?>
<?php 
$_SESSION['delete'] = null;
unset($_SESSION['delete']); 

?>

    <script>
      $(document).ready(function() {
        
    $('#datatables').DataTable( {
        "language": {
            
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
        
    } );
} );


    </script>
    
  