<?php
include_once 'acceso.php';

extract($_POST, EXTR_OVERWRITE);

if (isset($_POST['libro'])) {
    $path = "assets/files/" . $_POST['libro'] . ".pdf";
    header("Content-type:application/pdf");
    // header("Content-Disposition:inline; filename='assets/files/" . $_POST['libro'] . ".pdf'");
    header("Content-Disposition:inline; filename='" . $_POST['libro'] . ".pdf'");
    // header("Content-Disposition:inline; filename='" . $path."'");
    readfile($path);

    // header("location: page4.php");
} else {
    header("location: page4.php");
}
