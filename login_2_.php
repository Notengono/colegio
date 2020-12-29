<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.15, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-122x184.jpg" type="image/x-icon">
  <meta name="description" content="Colegio de Podólogos de Entre Ríos">

  <title>login_2</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>
    <?php include_once 'menu.php'?>

    <section class="mbr-section form3 cid-rKnlO51oiQ" id="form3-14">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="align-center pb-2 mbr-fonts-style display-2">LOGIN</h2>
                <h3 class="mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5">
                    Acceso a la biblioteca
                </h3>
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 ">
                <!---Formbuilder Form--->

                <!-- <a href="assets/files/Pie%20y%20tobillo.pdf" class="btn btn-warning-outline display-4" target="_blank">
                                Descargar</a> -->
                <form action="acceso.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                <!-- <form action="libro.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"> -->
                    <input type="hidden" name="email" value="<?php echo $_POST['email'] ?>">
                    <input type="hidden" name="libro" value="<?php echo $_POST['libro'] ?>">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12"></div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="form-group col" data-for="email">
                            <input type="password" name="passw" placeholder="Pasword" data-form-field="passw" required="required"
                            class="form-control display-7" id="name-form1-l">
                        </div>
                        <div class="col-auto input-group-btn"><button type="submit" class="btn btn-primary display-4">ACCEDER</button></div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
    </section>
    
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/theme/js/script.js"></script>
  <!-- <script src="assets/formoid/formoid.min.js"></script> -->
</body>
</html>
