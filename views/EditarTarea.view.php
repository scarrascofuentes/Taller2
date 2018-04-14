<?php

class EditarTareaView {

    public function render($tarea, $user, $estados) { ?>
        <html>
            <head>
                <title>Todo Listo! / <?php echo $_SESSION["username"];?></title>

            </head>
            <body>   
                <a href="/todolisto_mvc/mainController.php/logout">Cerrar Sesión</a>         
                <h1>Todo Listo!</h1>
                <h2>Editar Tarea</h2>

                <form action= "/todolisto_mvc/mainController.php/actualizarTarea"  method="post" >
                    
                    
                    <input type="hidden" name="id" value="<?php echo $tarea->getId();?>"> 

                   

                    <div>
                        <label>Titulo:</label><br>
                        <input type="text" name="titulo" placeholder= "<?php echo $tarea->getTitulo(); ?> " />
                    </div>

                    <br>

                    <div>
                        <label>Descripción:</label><br>
                        <input type="text" name="descripcion" placeholder= "<?php echo $tarea->getDescripcion(); ?> "/>
                    </div>

                    <br>

                    <div>
                        <label>Estado:</label><br>
                        <select name="estado_id">
                                <option selected disabled>Estado Tarea</option>
                                <?php foreach($estados as $estado) { ?>
                                    <option value="<?php echo $estado->getId(); ?>"><?php echo $estado->getNombre(); ?></option>
                                <?php } ?>
                        </select>
                    </div>

                    <br>

                    <input type="submit" value="Enviar">
                </form>
                <br>

                <button> <a href="<?php echo "/todolisto_mvc/mainController.php/tarea?id=" . $tarea->getId(); ?>">
                                   Volver al detalle
                         </a> 
                </button>
                                
        </html>

    <?php }
}
?>