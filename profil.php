<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profil</title>

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
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
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
                <h1 class="page-header">Dein Profil </br>
                    <small>Hier kannst du alles ändern </small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Sub Nav -->
           <div class="row">
             <div class="col-md-12 col">
               <!-- boostrap component Button group: drei Buttons nebeineinander -->
               <div class="btn-group btn-group-justified" role="group" aria-label="...">
                 <div class="btn-group" role="group">
                   <button type="button" class="btn btn-default" id="fuss" value="fuss">Profilfoto</button>
                 </div>
                 <div class="btn-group" role="group">
                   <button type="button" class="btn btn-default" id="auto" value="auto">Meine Fotos</button>
                 </div>
                 <div class="btn-group" role="group">
                   <button type="button" class="btn btn-default" id="oeV" value="oeV">Favoriten</button>
                 </div>
                 <div class="btn-group" role="group">
                   <button type="button" class="btn btn-default" id="fuss" value="fuss">Follower</button>
                 </div>
               </div>
               <!-- Platzhalter für Inhalte, wird durch JS mit Inhalt gefüllt. Je nach geklicktem Button -->
            <div class="col-md-12 col">
              <p class="anreiseText"></p>
            </div>
       <!-- Ende Subnav -->

<!--Section Profilbild-->
 <section>
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-12 col-lg-12 portfolio-item">
              <div class="col-md-4 col-sm-4">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Das ist dein Profilfoto</a>
                </h3>
                <p>"Was für ein schöner Tag in New York City"</p>
              </div>
              <div class="col-md-8 col-sm-8">
                <!--Start Formular -->
                <form>
                  <div class="form-group">
                    <label for="pwd">Name</label>
                    <input type="text" class="form-control" id="pwd">
                  </div>
                  <div class="form-group">
                    <label><input type="text">Vorname</label>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" class="form-control" id="pwd">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password bestätigen</label>
                    <input type="password" class="form-control" id="pwd">
                  </div>


                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <!--Ende Formular -->

 </section>
        <!-- Ende Section -->









        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <!-- Include all compiled plugins (below), or include individual files as needed -->
       <script src="js/bootstrap.min.js"></script>
       <script src="plugins/datepicker/js/bootstrap-datepicker.js"></script>
       <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
       <script src="js/functions.js"></script>


</body>

</html>
