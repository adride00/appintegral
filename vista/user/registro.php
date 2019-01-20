          
          <script>
          function validarFormulario () {
              
          }
          </script>
          
          <link href="build/css/sweetalert.css" rel="stylesheet">


          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Registro de Usuario</h3>
              </div>

              <div class="title_right">
                
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Departamento de Instrumentación<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      
                      
                      
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="http://localhost/appintegral/vista/dashboard.php?controlador=UserController&action=save" method="POST" novalidate>

                      
                      </p>
                      <span class="section">Información del Personal</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="nombre" placeholder="" required="true" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12"><div id="resultado"></div>
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Codigo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="codigo" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Imagen de Perfil <span class=""></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                          <input id="imagen" name="imagen" size="30" type="file" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
 
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Puesto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="puesto" type="text" name="puesto" class="optional form-control col-md-7 col-xs-12">
                          <option value="Instrumentista">Instrumentista</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Coordinador">Coordinador</option>
                           
                            <option value="Jefatura">Jefatura</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="contraseña" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          
                          <button id="send" type="submit" onClick="" class="btn btn-success">Guardar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script src="../vendors/jquery/dist/jquery.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>
  
          <script>
      
  
      
      </script>   
