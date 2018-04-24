<?php

class AdminView {

    public function render($usuariosNormales) { ?>
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
                            <th>Usuario</th>
                            <th>Cantidad</th>
                            <th>Ver</th>
                        </tr>

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