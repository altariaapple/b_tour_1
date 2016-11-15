<?php

  session_start();
  if(isset($_SESSION['id'])) unset($_SESSION['id']);
  session_destroy();

  require_once("system/data.php");


  $error = false;
  $error_msg = "";
  $success = false;
  $success_msg = "";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Photoloc!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Photoloc</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Finde Locations</a>
                    </li>
                    <li>
                        <a href="login.php">Login / Registration</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- modal window for login -->
    <div class="modal fade" id="loginModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4>Login</h4>
          </div>

          <div class="modal-body">
            <!--  login form -->
            <form id="login-form" action="index.php" method="post" role="form">
    					<div class="form-group">
                <h5>Benutzername</h5>
    						<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="E-Mail-Adresse" value="">
    					</div>
    					<div class="form-group">
                <h5>Passwort</h5>
    						<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Passwort">
    					</div>
              <div class="form-group">
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-register" value="login">
                </div>
              </div>
            </div>
            </form>
            <!-- /login form  -->
          </div>
        </div>

      </div>
    </div>
    <!-- /modal login window -->

    <!-- modal window for register -->
    <div class="modal fade" id="registerModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4>Registrierung</h4>
          </div>

          <div class="modal-body">
            <!-- register form -->
            <form id="register-form" action="index.php" method="post" role="form">
              <h5>Benutzername</h5>
              <div class="form-group">
                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Benutzername" value="" required>
              </div>

              <h5>E-Mail</h5>
              <div class="form-group">
                <input type="email" name="email" id="email" tabindex="2" class="form-control" placeholder="E-Mail-Adresse" value="" required>
              </div>

              <h5>Vorname</h5>
              <div class="form-group">
                <input type="text" name="firstname" id="email" tabindex="2" class="form-control" placeholder="Vorname" value="" required>
              </div>

              <h5>Nachname</h5>
              <div class="form-group">
                <input type="text" name="lastname" id="email" tabindex="2" class="form-control" placeholder="Nachname" value="" required>
              </div>

              <h5>Passwort</h5>
              <div class="form-group">
                <input type="password" name="password" id="password" tabindex="3" class="form-control" placeholder="Passwort" required>
              </div>

              <h5>Passwort bestätigen</h5>
              <div class="form-group">
                <input type="password" name="confirm-password" id="confirm-password" tabindex="4" class="form-control" placeholder="Passwort bestätigen" required>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="submit" name="register-submit" id="register-submit" tabindex="5" class="form-control btn btn-register" value="Registrieren" required>
                  </div>
                </div>
              </div>

            </form>
            <!-- /register form -->
            <?php
              // Gibt es einen Erfolg zu vermelden?
              if($success == true){
            ?>
                <div class="alert alert-success" role="alert"><?php echo $success_msg; ?></div>
            <?php
              }   // schliessen von if($success == true)
              // Gibt es einen Fehler?
              if($error == true){
            ?>
                <div class="alert alert-danger" role="alert"><?php echo $error_msg; ?></div>
            <?php
              }   // schliessen von if($success == true)
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- /modal register window -->

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Photoloc
                    <small>Machen Sie sich ein Bild davon!</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- locations Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Bild Titel</a>
                </h3>
                <p>Kurzbeschrieb</p>
                <p>Tags</p>
                <p>von >Uploader< </p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Photoloc 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- functions.js -->
    <script src="js/functions.js"></script>

</body>

</html>
