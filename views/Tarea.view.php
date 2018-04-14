<?php

class TareaView {

    public function render($tarea, $estado) { ?>
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
                                <?php echo '2018-03-03'; ?>
                            </td>
                            <td>
                                <?php print_r ($estado->getNombre());
                                
                                
                                ?>
                            </td>
                            <td>
                                <button> <a href="<?php echo "/todolisto_mvc/mainController.php/editarTarea?id=" . $tarea->getId(); ?>">
                                    Editar Tarea
                                </a> </button>
                                
                                
                        
                            </td>
                        </tr>
                     
                </table>


        </html>

    <?php }
}
?>