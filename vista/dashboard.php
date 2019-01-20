

           <?php
            $page_title = 'Home Page';
            require_once('../includes/load.php');
              if (!$session->isUserLoggedIn(true)) { redirect('../index.php', false);}
            ?>
            <!-- menu profile quick info -->
            <?php
                
                require_once('../includes/load.php');
                require_once '../includes/database.php';
               
                require_once 'main.php';

                require_once 'profile.php';
              ?>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
              <?php
                require_once 'side-bar.php';
              ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
              <?php
                require_once 'menu-footer.php';
              ?>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
          <?php
            require_once 'header.php';
          ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
        <?php
          
          require_once '../config/autoload.php';

            if(isset($_GET['controlador']) && class_exists($_GET['controlador'])){
                $nombre_controlador = $_GET['controlador'];
                $controlador = new $nombre_controlador();

                if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
                    $action = $_GET['action'];
                    $controlador->$action();    
                }else{
                    echo "Pagina no encontrada 404";
                }

            }else{
                echo "pagina no encontrada";
            }
        ?>  
        </div>
        <!-- /page content -->

        <!-- footer content -->
            <?php
              require_once 'footer.php';
            ?>
        <!-- /footer content -->
      <?php
        require_once 'main-files.php';
      ?>