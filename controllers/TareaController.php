<?php

require("models/Tarea.php");
require("views/Tareas.view.php");
require("views/Tarea.view.php");
require("views/EditarTarea.view.php");

class TareaController {

    public function listadoTareas() {
        $user = $_SESSION["user"];        
        $tareas = Tarea::getAllUserTareas($user);        
        $estados = EstadoTarea::getAll();

        $tareasViews = new TareasView();
        echo $tareasViews->render($tareas, $estados);
    }
    
    public function agregarTarea($titulo, $desc, $estado_id) {
        $user = $_SESSION["user"];
        Tarea::agregarTarea($titulo, $desc, $user->getId(), $estado_id);        
        header('Location: ' . '/todolisto_mvc/mainController.php/tareas');
    }

    public function borrarTarea($id) {
        $user = $_SESSION["user"];
        Tarea::borrarTarea($id);        
        header('Location: ' . '/todolisto_mvc/mainController.php/tareas');
    }

    public function mostrarTarea($id) {
        $user = $_SESSION["user"];        
        $tarea = Tarea::mostrarTarea($id);  
        $estado = $tarea->getEstado();
        $tareaViews = new TareaView();
        echo $tareaViews->render($tarea, $estado);
    }

    public function editarTarea($id) {
        $user = $_SESSION["user"];
        $tarea = Tarea::mostrarTarea($id); 
       
        
        Tarea::editarTarea($id, $user);   
        $editarTareaViews = new EditarTareaView();
        echo $editarTareaViews->render($tarea, $user);     
       
    }
}
?>