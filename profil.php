<?php
  session_start();
  if(!isset($_SESSION['userid'])){
    header("Location:index.php");
  }
  else{
    $user_id = $_SESSION['userid'];
  }

  require_once('system/data.php');

  $result = get_user($user_id);
  $user = mysqli_fetch_assoc($result);

  if(isset($_POST['update-submit']))
  {
    // $profilfoto = filter_inputs($_POST['profil_img']);
    $firstname = filter_inputs($_POST['firstname']);
    $lastname = filter_inputs($_POST['lastname']);
    $email = filter_inputs($_POST['email']);
    $password = filter_inputs($_POST['password']);

    $result = update_user($firstname, $lastname, $email, $password, $user_id);
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
                <a class="navbar-brand" href="#">Photoloc</a>
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
                <h1 class="page-header">Dein Profil <br>
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
                   <button type="button" class="btn btn-default" id="profilfoto" value="profilfoto">Profilfoto</button>
                 </div>
                 <div class="btn-group" role="group">
                   <button type="button" class="btn btn-default" id="meinefotos" value="meinefotos">Meine Fotos</button>
                 </div>
                 <div class="btn-group" role="group">
                   <button type="button" class="btn btn-default" id="favoriten" value="favoriten">Favoriten</button>
                 </div>
                 <div class="btn-group" role="group">
                   <button type="button" class="btn btn-default" id="follower" value="follower">Follower</button>
                 </div>
               </div>
               <!-- Platzhalter für Inhalte, wird durch JS mit Inhalt gefüllt. Je nach geklicktem Button -->
            <div class="col-md-12 col">
              <p class="layoutonclick"></p>
            </div>
       <!-- Ende Subnav -->

<!--Section Profilbild-->
 <section id="profilfoto">
        <!-- Profilfoto -->
        <h2>Du siehst super aus!</h2>

        <div class="row">
            <div class="col-md-12 col-lg-12 portfolio-item">
              <div class="col-md-4 col-sm-4">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <p>"Was für ein schöner Tag in New York City"</p>
              </div>
              <div class="col-md-8 col-sm-8">
                <!--Start Formular -->
                <form enctype="multipart/form-data" action="profil.php" method="post">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Persönliche Einstellungen</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="Vorname" class="col-sm-2 col-xs-12 form-control-label">Name</label>
            <div class="col-sm-5 col-xs-6">
              <input  type="text" class="form-control form-control-sm"
                      id="Vorname" placeholder=""
                      name="firstname" value="<?php echo $user['first_name'];?>">
            </div>
            <div class="col-sm-5 col-xs-6">
              <input  type="text" class="form-control form-control-sm"
                      id="Nachname" placeholder=""
                      name="lastname" value="<?php echo $user['last_name'];?>">

            </div>
          </div>
          <div class="form-group row">
            <label for="Email" class="col-sm-2 form-control-label">E-Mail</label>
            <div class="col-sm-10">
              <input  type="email" class="form-control form-control-sm"
                      id="Email" placeholder="" required
                      name="email" value="<?php echo $user['email'];?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="Passwort" class="col-sm-2 form-control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control form-control-sm" id="Passwort" placeholder="Passwort" name="password">
            </div>
          </div>
          <div class="form-group row">
            <label for="Passwort_Conf" class="col-sm-2 form-control-label">Passwort bestätigen</label>
            <div class="col-sm-10">
              <input type="password" class="form-control form-control-sm" id="Passwort_Conf" placeholder="Passwort" name="confirm-password">
            </div>
          </div>

          <div class="form-group row">
            <!-- http://plugins.krajee.com/file-input -->
            <label for="Tel" class="col-sm-2 form-control-label">Profilbild</label>
            <div class="col-sm-10">
              <input type="file" name="profil_img">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Abbrechen</button>
          <button type="submit" class="btn btn-success btn-sm" name="update-submit">Änderungen speichern</button>
        </div>
      </form>

                <!--Ende Formular -->

 </section>

 <section id="meinefotos">
<!--Start Section Meine Fotos-->

  <h2>Deine Fotos</h2>
      <!-- Fotos -->
      <div class="row">
          <div class="col-md-12 col-lg-12 portfolio-item">
            <div class="col-md-4 col-sm-4">
              <a href="#">
                  <img class="img-responsive" src="http://placehold.it/700x400" alt="">
              </a>
            </div>
            <div class="col-md-8 col-sm-8">
 </section>
 <!--Ende Section Meine Fotos-->

 <section id="favoriten">
   <!--Start Section Favoriten-->
    <h2>Das sind deine Favoriten</h2>
    <!-- Fotos -->
    <div class="row">
        <div class="col-md-12 col-lg-12 portfolio-item">
          <div class="col-md-4 col-sm-4">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
                  </div>
          <div class="col-md-8 col-sm-8">
 </section>
 <!--Ende Section Favoriten-->

 <section id="follower">
   <!--Start Section Follower-->
   <h2>Following</h2>
   <form method="post" action="friends.php" >
         <!-- Freund+ Button -->
         <div class="form-group row p42-form-group">
           <input type="checkbox" name="new_friends[]" id="userid2" autocomplete="off" value="2"/>
           <div class="btn-group col-xs-6">
             <label for="userid2" class="btn btn-default  col-xs-2 col-sm-1">
               <span class="glyphicon glyphicon-plus"></span>
               <span> </span>
             </label>
             <label for="userid2" class="btn btn-default active col-xs-10 col-sm-11">
                 Simonne Bosiers
             </label>
           </div>
         </div>
         <!-- /Freund+ Button -->
         <!-- Freund+ Button -->
         <div class="form-group row p42-form-group">
           <input type="checkbox" name="new_friends[]" id="userid3" autocomplete="off" value="3"/>
           <div class="btn-group col-xs-6">
             <label for="userid3" class="btn btn-default  col-xs-2 col-sm-1">
               <span class="glyphicon glyphicon-plus"></span>
               <span> </span>
             </label>
             <label for="userid3" class="btn btn-default active col-xs-10 col-sm-11">
                 Rolf Hofstetter
             </label>
           </div>
         </div>
          <!-- /Freund+ Button -->
          <input type="submit" class="btn btn-default" value="Diese Freunde löschen" />
         </form>

         <h2>Follower</h2>
         <form method="post" action="friends.php" >
               <!-- Freund+ Button -->
               <div class="form-group row p42-form-group">
                 <input type="checkbox" name="new_friends[]" id="userid2" autocomplete="off" value="2"/>
                 <div class="btn-group col-xs-6">
                   <label for="userid2" class="btn btn-default  col-xs-2 col-sm-1">
                     <span class="glyphicon glyphicon-plus"></span>
                     <span> </span>
                   </label>
                   <label for="userid2" class="btn btn-default active col-xs-10 col-sm-11">
                       Simonne Bosiers
                   </label>
                 </div>
               </div>
               <!-- /Freund+ Button -->
               <!-- Freund+ Button -->
               <div class="form-group row p42-form-group">
                 <input type="checkbox" name="new_friends[]" id="userid3" autocomplete="off" value="3"/>
                 <div class="btn-group col-xs-6">
                   <label for="userid3" class="btn btn-default  col-xs-2 col-sm-1">
                     <span class="glyphicon glyphicon-plus"></span>
                     <span> </span>
                   </label>
                   <label for="userid3" class="btn btn-default active col-xs-10 col-sm-11">
                       Rolf Hofstetter
                   </label>
                 </div>
               </div>

               <div class="container">
                 <input type="submit" class="btn btn-default" value="zu meinen Freunden hinzufügen" name="new_friends" />
                </form>
              </div>

       <!--Ende Section Follower-->
     </section>


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
