<?php

extract($_POST, EXTR_OVERWRITE);

date_default_timezone_set('America/Argentina/Buenos_Aires');

session_name('ColegioDePodologosDeEntreRios');

session_start();

var_dump($_POST);

array(3) { ["email"]=> string(23) "martin.remedi@gmail.com" ["clave_1"]=> string(4) "asda" ["clave_2"]=> string(6) "adasda" }
die();
if (!isset($email) || !isset($passw)) {

    // puede estar logueado o intentar ingresar sin logueo.

    if (isset($_SESSION['tiempo'])) {

        if (time() > ($_SESSION['tiempo'] + 600)) {

            unset($_SESSION['tiempo']);

            session_destroy();

            header("location: index.php");

        } else {

            $_SESSION['tiempo'] = time();

        }

    } else {

        header("location: ./login.php");

    }

    // tiempoDeLogueo();

} else {

    // Intentando loguearse



    if (!($conect = mysqli_connect("localhost", "copoderc_copo", "c0p0_d3r_2019", "copoderc_copo"))) {

    // if (!($conect = mysqli_connect("localhost", "root", "", "copoderc_copo"))) {

    // if (!($conect = mysqli_connect("localhost", "root", "ardilla2012", "stock"))) {

        echo "Error conectando a la base de datos.";

        exit();

    }

    ;
    $sql = "UPDATE usuarios SET clave = :clave_n1 WHERE id = :id and clave = :clave_vieja";
    $sentencia = "SELECT COUNT(*) FROM usuarios_copo WHERE identificacion = '" . $_POST['email'] . "' AND clave = SHA2('" . $_POST['passw'] . "', 256);";

    // $sentencia = "SELECT COUNT(*) FROM usuarios WHERE nombre = '$email' AND pass = '$passw';";

    $consulta = mysqli_query($conect, $sentencia);

    if ($consulta) {

        $resp = mysqli_fetch_array($consulta, MYSQLI_NUM);

        if ($resp[0] > 0) {

            $_SESSION['tiempo'] = time();

            header("location: informacion.php");

            // header("location: page4.php");

        } else {

            unset($_SESSION['tiempo']);

            session_destroy();

            header("location: index.php");

        }

    } else {

        unset($_SESSION['tiempo']);

        session_destroy();

        header("location: index.php");

    }



    // if (!isset($_SESSION['tiempo'])) {

    //     header("location: ./login.php");

    // } else {

    //     tiempoDeLogueo();

    // }

}



function tiempoDeLogueo()

{

    if (isset($_SESSION['tiempo'])) {

        if (time() > ($_SESSION['tiempo'] + 600)) {

            unset($_SESSION['tiempo']);

            session_destroy();

            header("location: index.php");

        } else {

            echo "tiempo = " . $_SESSION['tiempo'] . ' ' . time();

            echo " Seguí participando";

        }

    } else {

        header("location: ./login.php");

    }

}

