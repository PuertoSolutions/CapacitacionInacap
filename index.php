<?php
    $_ENV['modo'] = "d"; // {d="desarrollo", p="produccion"}
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    require 'lib/Slim/Slim.php';
    require 'Vistas/Vista.php';

    session_cache_limiter(FALSE);
    session_start();

    \Slim\Slim::registerAutoloader();
    $vista = new Vista();

    $app = new \Slim\Slim(
        array("view" => $vista)
    );

    Vista::set_layout("default.php");
    //------------------------------------------------------------------------GETS
    $app -> get('/', function() use ($app){
        $app -> render("index.php");
    });

    $app -> get('/phpinfo', function() use ($app){
        phpinfo();
    });

    $app -> get('/Registro/:tipo', function($tipo) use ($app){
        switch ($tipo) {
            case 'Usuario': {
                $app -> render("Administracion/RegistroUsuario.php");
                 break;
            }
                case 'empresa_alumnos': {
                $app -> render("Administracion/empresa_alumnos.php");
                 break;
            }
            case 'RegistroUsuario': {
                $app -> render("Administracion/RegistroUsuario.php");
                 break;
            }
                        
             case 'tipo_curso': {
                $app -> render("Administracion/tipo_curso.php");
                 break;
            }

            case 'lugar': {
                $app -> render("Administracion/lugar.php");
                 break;
             }
            default:
                # code...
                break;
        }
    });

    $app -> get('/LogOut', function() use ($app){
        session_destroy();
        $app->render("avisos.php", array("Mensaje" => "", "Detalle" => "", "Tiempo" => 10));
    });


    //------------------------------------------------------------------------POSTs

    $app -> post('/Login', function() use ($app){
        if ($app->request()->params("usuario") == "inacap" || 
            $app->request()->params("pass") == "inacap") {
                $_SESSION["Usuario"] = "Administrador";
                $app->render("avisos.php", array(
                    "Mensaje" => "Redirigiendo",
                    "Detalle" => "",
                    "Tiempo" => 1000
                    )
                );
        }else{
            require 'Modelos/Usuario.php';
            $usuario = new Usuario(
                null, $app->request()->params("mail"), 
                $app->request()->params("pass")
            );
            $app->render("avisos.php", $usuario->getLogin());
        }
    });

    $app -> post('/Registro/:tipo', function($tipo) use ($app){
        switch ($tipo) {
            case 'Usuario': {
                
                 break;
            }
                case 'empresa_alumnos': {
                $app -> render("Administracion/empresa_alumnos.php");
                 break;
            }
            case 'RegistroUsuario': {
                $app -> render("Administracion/RegistroUsuario.php");
                 break;
            }
                        
             case 'tipo_curso': {
                $app -> render("Administracion/tipo_curso.php");
                 break;
            }

            case 'lugar': {
                $app -> render("Administracion/lugar.php");
                 break;
             }
            default:
                # code...
                break;
        }
    });

    $app -> run();

?>