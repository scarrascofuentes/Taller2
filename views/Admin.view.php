<?php

class AdminView {

    public function render($usuariosNormales) { ?>
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

                <h1 align = "center" >Todo Listo!</h1>
                <h2 align = "center"> Detalle de Tarea</h2>

                <table class="table table-striped">
                        <thead class="thead-dark">
                            <th>Usuario</th>
                            <th>Cantidad</th>
                          
                        </thead>

                        <?php foreach($usuariosNormales as $usuario) { ?>

                        <tr>
                            <td>
                                <?php echo $usuario->getNombre(); ?>
                            </td>
                            <td>
                                <?php echo $usuario->getCantidadTareas(); ?>
                            </td>
                        </tr>
                        <?php } ?>
                </table>


        </html>

    <?php }
}
?>