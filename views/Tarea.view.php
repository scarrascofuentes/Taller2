<?php

class TareaView {

    public function render($tarea) { ?>
        <html>
            <head>
                <title>Todo Listo! / <?php echo $_SESSION["username"];?></title>
            </head>
            <body>   
                <a href="/todolisto_mvc/mainController.php/logout">Cerrar Sesión</a>         
                <h1>Todo Listo!</h1>
                <h2>Detalle de Tarea</h2>

                <table style="width:50%"  border=1>
                        <tr>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Fecha de Inicio</th>
                            <th>Estado</th>
                        </tr>
                     
                        <tr>
                            <td>
                                <p> <?php echo $tarea->getTitulo();?> </p>
                            </td>
                            <td>
                                <?php echo $tarea->getDescripcion(); ?>
                            </td>
                            <td>
                                <?php echo 'Vacio'; ?>
                            </td>
                            <td>
                                <?php echo 'Vacio'; ?>
                            </td>
                        </tr>
                     
                </table>


        </html>

    <?php }
}
?>