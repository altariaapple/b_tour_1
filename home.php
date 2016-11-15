<?php
  session_start();
  if(!isset($_SESSION['userid'])){
    header("Location:index.php");
  }
  else{
    $user_id = $_SESSION['userid'];
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Photoloc</title>

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
                <a class="navbar-brand" href="home.php">photoloc</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="home.php">Finde Locations</a>
                    </li>
                    <li>
                        <a href="profil.php">Mein Profil</a>
                    </li>
                    <li>
                        <a href="index.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hallo >hier kommt der Username<
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Button trigger modal -->
        <div class="panel panel-default container-fluid"> <!-- fluid -->
          <div class="panel-heading row">
            <div class="col-sm-6">
                <h4>Laden Sie hier ein Bild hoch!</h4>
            </div>
            <div class="col-xs-6 text-right">
                <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#myModal">Bild hochladen</button>
            </div>
          </div>
          <div class="panel-body">
            <div class="col-sm-3">
              <!-- Bild -->
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form enctype="multipart/form-data" action="<?PHP echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Laden Sie hier ein Bild hoch</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group row">
                    <label for="Gender" class="col-sm-2 form-control-label">Foto</label>
                    <div class="form-group row">
                      <!-- http://plugins.krajee.com/file-input -->
                      <label for="Tel" class="col-sm-2 form-control-label"></label>
                      <div class="col-sm-10">
                        <input type="file" name="profil_img">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Vorname" class="col-sm-2 col-xs-12 form-control-label">Beschreibung</label>
                    <div class="col-sm-5 col-xs-6">
                      <textarea rows="4" cols="50"> Schreiben Sie hier eine Bildbeschreibung
                      </textarea>

                    </div>
                    <div class="col-sm-5 col-xs-6">

                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Email" class="col-sm-2 form-control-label">Location</label>
                    <div class="col-sm-10">
                      <form action="">
                        <input type="checkbox" name="location" value="bern"> bern <br>
                      </form>

                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Passwort" class="col-sm-2 form-control-label">Tags</label>
                    <div class="col-sm-10">
                      <form action="">
                        <input type="checkbox" name="tags" value="sonnig"> sonnig <br>
                      </form>
                  </div>



                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Abbrechen</button>
                  <button type="submit" class="btn btn-success btn-sm" name="update-submit">Bild hochladen</button>
                </div>
              </form>

            </div>
          </div>
        </div>

        <!-- Locations Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <!-- <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!-- /.row -->

        <!-- <hr> -->

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
