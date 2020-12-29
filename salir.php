<?php
extract($_POST, EXTR_OVERWRITE);
date_default_timezone_set('America/Argentina/Buenos_Aires');
session_name('ColegioDePodologosDeEntreRios');
session_start();
unset($_SESSION['tiempo']);
session_destroy();

header("location: ./index.php");