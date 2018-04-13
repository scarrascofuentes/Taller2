<?php

class EditarTareaView {

    public function render($id, $user) { ?>
        <html>
            <head>
                <title>Todo Listo! / <?php echo $_SESSION["username"];?></title>
            </head>
            <body>   
                <a href="/todolisto_mvc/mainController.php/logout">Cerrar Sesión</a>         
                <h1>Todo Listo!</h1>
                <h2>Editar Tarea</h2>

               <form action="/my-handling-form-page" method="post">
                    <div>
                        <label for="titulo">Titulo:</label>
                        <input type="text" id="titulo" />
                    </div>
                    <div>
                        <label for="descripcion">Descripción</label>
                        <input type="text" id="descripcion" />
                    </div>

                    <div>
                        <label for="estado_id">Estado</label>
                        <input type="text" id="estado_id" />
                    </div>
                    
                </form>


        </html>

    <?php }
}
?>