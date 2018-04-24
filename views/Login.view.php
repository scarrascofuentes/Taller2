<?php

class LoginView {

    public function render() { ?>
        <html>
            <head> 

                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">           
                
                <title>Todo Listo!</title>
            </head>
            <body>

                <div align = "right">
                    <a href="/todolisto_mvc/mainController.php/logout">Cerrar Sesión</a>
                    <?php echo $_SESSION["username"] ?? "Usuario no registrado"; ?>
                </div>
                
                <h1 align = "center">Todo Listo!</h1>

                <br>

                <div align = "center">
                    <form method="POST" action="/todolisto_mvc/mainController.php/login">
                        <input type="text" name="user" placeholder="Usuario" /> <br> <br>
                        <input type="text" name="password" placeholder="Contraseña" /> <br> <br>
                        <input type="submit" value="Ingresar!"  class="btn btn-primary" />
                </form>
                </div>
            </body>
        </html>
    <?php }
}
?>