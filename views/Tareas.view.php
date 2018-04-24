<?php

class TareasView {

    public function render($paramTareas, $estados , $tipos) { ?>
        <!doctype html>
        <html lang="en">

                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                

                <title>Todo Listo! / <?php echo $_SESSION["username"];?></title>
            </head>
            <body> 

                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="js/bootstrap.min.js"></script>  
                
                <div align = "right">
                    <a class="badge badge-warning" href="/todolisto_mvc/mainController.php/logout">Cerrar Sesión</a>    
                </div>

                <h1 align = "center">Todo Listo!</h1>
                <h2>Crear Tarea</h2>


                    <form method="POST" action="/todolisto_mvc/mainController.php/nuevaTarea" align = "center">
                        <input type="text" name="titulo" placeholder="Titulo" />
                        <input type="text" name="descripcion" placeholder="Descripcion" />                        
                        <select name="estado_id">
                            <option selected disabled>Estado Tarea</option>
                            <?php foreach($estados as $estado) { ?>
                                <option value="<?php echo $estado->getId(); ?>"><?php echo $estado->getNombre(); ?></option>
                            <?php } ?>
                        </select>
                        <select name="tipo_id">
                            <option selected disabled>Tipo Tarea</option>
                            <?php foreach($tipos as $tipo) { ?>
                                <option value="<?php echo $tipo->getId(); ?>"><?php echo $tipo->getNombre(); ?></option>
                            <?php } ?>
                        </select>

                        <br><br>

                        <input class="btn btn-primary" type="submit" value="Crear Tarea!" />
                    </form>
                
                <hr>

                <h2>Mis tareas</h2>
                
                <div align = "center">
                    <table class="table table-striped" >
                        <thead class="thead-dark">
                            <tr>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php foreach($paramTareas as $tarea) { ?>
                        <tr>
                            <td>
                                <a href="<?php echo "/todolisto_mvc/mainController.php/tarea?id=" . $tarea->getId(); ?>">
                                    <?php echo $tarea->getTitulo(); ?>
                                </a>
                            </td>
                            <td><?php echo $tarea->getDescripcion(); ?></td>
                            <td>
                                <a class="badge badge-danger" href="<?php echo "/todolisto_mvc/mainController.php/borrarTarea?id=" . $tarea->getId(); ?>">
                                    Borrar
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>

                <?php $user = $_SESSION["user"]; ?>

                <?php if($user->esAdministrador()):  ?>           
                    <div align = "center">
                        <a class="badge badge-dark" href="/todolisto_mvc/mainController.php/tareasUsuarios">Tareas de usuarios</a> 
                    </div> 
                <?php endif; ?>

                    
            </body>
        </html>

    <?php }
}
?>