<?php

class EditarTareaView {

    public function render($tarea, $user, $estados, $tipos) { ?>
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
                <h2>Editar Tarea</h2>

                <form align = "center" action= "/todolisto_mvc/mainController.php/actualizarTarea"  method="post" >
                    
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $tarea->getId();?>"> 
                    </div>
                   

                    <div class="form-group">
                        <label>Titulo:</label><br>
                        <input type="text" name="titulo" placeholder= "<?php echo $tarea->getTitulo(); ?> " />
                    </div>

                    <br>

                    <div class="form-group">
                        <label>Descripción:</label><br>
                        <input type="text" name="descripcion" placeholder= "<?php echo $tarea->getDescripcion(); ?> "/>
                    </div>

                    <br>

                    <div class="form-group">
                        <label>Estado:</label><br>
                        <select name="estado_id">
                                <option selected disabled>Estado Tarea</option>
                                <?php foreach($estados as $estado) { ?>
                                    <option value="<?php echo $estado->getId(); ?>"><?php echo $estado->getNombre(); ?></option>
                                <?php } ?>
                        </select>
                    </div>

                    <div>
                        <label>Tipo:</label><br>
                        <select name="tipo_id">
                                <option selected disabled>Tipo Tarea</option>
                                <?php foreach($tipos as $tipo) { ?>
                                    <option value="<?php echo $tipo->getId(); ?>"><?php echo $tipo->getNombre(); ?></option>
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