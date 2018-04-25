<?php

require("models/Tarea.php");
require("models/TipoTarea.php");
require("views/Tareas.view.php");
require("views/Tarea.view.php");
require("views/EditarTarea.view.php");
require("views/Admin.view.php");
require("views/Calendar.view.php");

class TareaController {

    public function listadoTareas() {
        $user = $_SESSION["user"];        
        $tareas = Tarea::getAllUserTareas($user);        
        $estados = EstadoTarea::getAll();
        $tipos = TipoTarea::getAll();

        $tareasViews = new TareasView();
        echo $tareasViews->render($tareas, $estados, $tipos);
    }

    public function tareas_calendario(){
        $user = $_SESSION["user"];        
        $tareas = Tarea::getAllUserTareas($user);        
      
        $calendarViews = new CalendarView();
        echo $calendarViews->render($tareas);
    }
    
    public function agregarTarea($titulo, $desc, $estado_id, $tipo_id) {
        $user = $_SESSION["user"];
        Tarea::agregarTarea($titulo, $desc, $user->getId(), $estado_id, $tipo_id);        
        header('Location: ' . '/todolisto_mvc/mainController.php/tareas');
    }

    public function borrarTarea($id) {
        $user = $_SESSION["user"];
        Tarea::borrarTarea($id, $user);        
        header('Location: ' . '/todolisto_mvc/mainController.php/tareas');
    }

    public function mostrarTarea($id) {
        $user = $_SESSION["user"];        
        $tarea = Tarea::mostrarTarea($id);  
        $estado = $tarea->getEstado();
        $tipo = $tarea->getTipo();
        $tareaViews = new TareaView();
        echo $tareaViews->render($tarea, $estado, $tipo);
    }

    public function editarTarea($id) {
        $user = $_SESSION["user"];
        $tarea = Tarea::mostrarTarea($id); 
        $estados = EstadoTarea::getAll();
        $tipos = TipoTarea::getAll();

        $editarTareaViews = new EditarTareaView();
        echo $editarTareaViews->render($tarea, $user, $estados, $tipos);  

    }

    public function actualizarTarea() {

        $user = $_SESSION["user"];
        
        $usuario_id = $user->getId();

        $id = $_POST["id"];
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
        $estado_id = $_POST["estado_id"];
        $fecha_inicio = "2018-03-03";
        $tipo_id = $_POST["tipo_id"];;

        Tarea::actualizarTarea($id, $usuario_id, $titulo, $descripcion, $estado_id, $fecha_inicio, $tipo_id); 
        header('Location: ' . '/todolisto_mvc/mainController.php/tareas');
       
    }

    public function tareasUsuarios() {
        $user = $_SESSION["user"];
        $usuariosNormales = Usuario::getUsuariosNormales();


        $adminViews = new AdminView();
        echo $adminViews->render($usuariosNormales);  

    }
}
?>