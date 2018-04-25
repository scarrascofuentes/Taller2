<?php

class TareaView {

    public function render($tarea, $estado, $tipo) { ?>
        <html>
            <head>

                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">           
                
                <title>Todo Listo! / <?php echo $_SESSION["username"];?></title>
            </head>
            <body>  

                <div align = "right">
                    <a class="badge badge-warning" href="/todolisto_mvc/mainController.php/logout">Cerrar Sesión</a>    
                </div>    

                <h1 align = "center">Todo Listo!</h1>
                <h2 align = "center">Detalle de Tarea</h2>

                <div>
                    <ul class="list-group">
                        <li class="list-group-item"> <b> Titulo: </b> <?php echo $tarea->getTitulo();?>  </li>
                        <li class="list-group-item"> <b> Descripción: </b> <?php echo $tarea->getDescripcion(); ?></li>
                        <li class="list-group-item"> <b> Estado: </b> <?php print_r ($estado->getNombre()); ?></li>
                        <li class="list-group-item"> <b> Tipo: </b> <?php print_r ($tipo->getNombre()); ?></li>
                    </ul>
                </div>

                <br>

                <div align = "center">
                    <button class="btn btn-light"> 
                        <a href="<?php echo "/todolisto_mvc/mainController.php/editarTarea?id=" . $tarea->getId(); ?>">Editar Tarea</a> 
                    </button>
                </div>

                  <br>
                  <div>
                    <button> <a href="todolisto_mvc/mainController.php/tareas">
                                        Volver a la vista tareas
                                </a> 
                        </button>
                  </div>

                   

        </html>

    <?php }
}
?>