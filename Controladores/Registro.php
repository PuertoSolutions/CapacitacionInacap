<?php
/*
*	SE ENCARGA DE VALIDAR EL LOGIN DE LOS USUARIOS
*   VARIABLES: $_POST["usuario"] y $_POST["pass"]
*/

if (empty($_POST["usuario"]) || empty($_POST["pass"])) {
    echo "Debe ingresar datos";
}else{
    if ($_POST["usuario"] == "inacap" && $_POST["pass"] == "inacap") {
        # ADMINISTRADOR
        $_SESSION["Usuario"] = "ADMINISTRADOR";
    }else{
        echo "mani :D ";
    }
}
?>