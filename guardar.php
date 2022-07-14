<?php

    include ("conex.php");

    if (isset($_POST['boton'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $curso = $_POST['curso'];
        $edad = $_POST['edad'];
        $dni = $_POST['dni'];
        $genero = $_POST['genero'];
        $tel = $_POST['tel'];
            $consulta = "INSERT INTO registros(nombres, apellido, curso, edad, dni, genero, tel) VALUES ('$nombre', '$apellido', '$curso', $edad, $dni, '$genero', $tel)";
            $conex->query($consulta);
            if (!$consulta) {
                    die("Fallo la consulta");
                }
                $_SESSION['message'] = 'Registro Guardado';
                $_SESSION['message_type'] = 'success';
                    header("Location: index.php");
    }
?>