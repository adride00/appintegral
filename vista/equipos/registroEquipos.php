<?php
            
            ?>
  
          
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Agregar Equipo</h3>
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
  
                      <form class="form-horizontal form-label-left" action="http://localhost/appintegral/vista/dashboard.php?controlador=Equipos&action=save" method="POST" novalidate>
  
                        
                        </p>
                        <span class="section">Información general del equipo</span>
  
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Codigo Sap<span></span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="codigo_sap" class="form-control col-md-7 col-xs-12" name="codigo_sap" placeholder="" type="number">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tag">Tag <span class="">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="email" name="tag" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        
      
                        
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Descripción<span class=""></span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="descripcion" name="descripcion" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        

                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Zona Proceso<span class=""></span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="zona_proceso" name="zona_proceso" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Variable de Proceso<span class=""></span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="variable_proceso" name="variable_proceso" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Tipo Equipo <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="tipo" type="text" name="tipo" class="optional form-control col-md-7 col-xs-12">
                            <option value="Instrumentista">Instrumentista</option>
                              <option value="Administrador">Administrador</option>
                              <option value="Coordinador">Coordinador</option>
                             
                              <option value="Jefatura">Jefatura</option>
                            </select>
                          </div>
                        </div>

                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Ubicación<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="ubicacion" type="text" name="ubicacion" class="optional form-control col-md-7 col-xs-12">
                            <option value="Instrumentista">INGENIO</option>
                              <option value="Administrador">PLANTA</option>
                              
                            </select>
                          </div>
                        </div>
                        
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Protocolo<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="protocolo" type="text" name="protocolo" class="optional form-control col-md-7 col-xs-12">
                            <option value="Instrumentista">INGENIO</option>
                              <option value="Administrador">PLANTA</option>
                              
                            </select>
                          </div>
                        </div>
                       
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-md-offset-3">
                            
                            <button id="send" type="submit" class="btn btn-success">Guardar</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
          <!-- /page content -->
  