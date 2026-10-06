<!DOCTYPE html>
<html>

    <?php

    $asignatura = $_GET["asignatura"] ?? "No hay datos";
    $profesor = $_GET["profesores"] ?? [];
    $horas = $_GET["horas"] ?? "No hay datos";
    $info = $_GET["info"] ?? "No hay datos";

    //Aquí se usa isset para que si no existe la variable no se intente mostrar, ya que no podrá
    if (isset ($asignatura))
        echo "Asignatura: ".$asignatura."<br>";

    // if (!empty($profesor)){
    //     echo "Profesores:";
    //     echo "<ul>";
    //     foreach ($profesor as $profesores)
    //         echo "<li>".$profesores."</li>";
    //     echo "</ul>";
    // }

    if (!empty($profesor)){
        echo "Profesores:";
        echo "<ul>";
        for ($i = 0; $i < count($profesor); $i++){
            echo "<li>".$profesor[$i]."</li>";
        }
        echo "</ul>";
    }

    //Aquí se usa empty porque al ser inputs de texto siempre se crean, asique es mejor comprobar si están vacíos
    if (!empty ($horas))
        echo "Horas: ".$horas."<br>";
    else echo "Horas: No hay datos <br>";

    if (!empty ($info))
        echo "Información: ".$info;
    else echo "Información: No hay datos";

    ?>

</html>