<?php

  /* ---- general stuff ---- */
  /* ----------------------- */

  /* verbindung mit db */
  function get_db_connection()
  {
    $db = mysqli_connect('localhost', '467655_3_1', 'n32QYacUwJtX', '467655_3_1')
      or die('Fehler beim Verbinden mit dem Datenbank-Server.');
      mysqli_query($db, "SET NAMES 'utf8'");
    return $db;
  }

  /* funktion zu sql abfragen */
  function get_result($sql)
  {
    $db = get_db_connection();
    //echo $sql ."<br>";
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    return $result;
  }
 /* ----------------------------------------------------------------------------- */


 /* ---- security stuff ---- */
 /* ----------------------- */

  function filter_inputs($input){
    $db = get_db_connection();

    // HTML- und PHP-Codes wegfiltern: strip_tags(variable)
    $input = strip_tags($input);
    // Leerzeichen am Anfang und Ende der Zeichenkette entfernen
    $input = trim($input);
    // SQL-Injection (einschmggeln von SQL-Befehlen) verhindern
    $input = mysqli_real_escape_string($db, $input);
    mysqli_close($db);
    return $input;
  }
 /* ----------------------------------------------------------------------------- */


 /* ---- index.php ---- */
 /* ----------------------- */

 function get_all_pictures(){
   $sql = "SELECT * FROM picture";
   return get_result($sql);
 }

 function get_picture_owner($ownerID){
   $sql = "SELECT first_name, last_name FROM user WHERE user_id = '$ownerID';";
   return get_result($sql);
 }
 /* ----------------------------------------------------------------------------- */


 /* ---- login.php ---- */
 /* ----------------------- */

 function register($username, $email, $firstname, $lastname, $password){
   $sql = "INSERT INTO user (benutzer_name, email, first_name, last_name, password) VALUES ('$username', '$email', '$firstname', '$lastname', '$password');";
   return get_result($sql);
 }

 function login($username, $password){
   $sql = "SELECT * FROM user WHERE benutzer_name = '$username' AND password = '$password';";
   return get_result($sql);
 }
 /* ----------------------------------------------------------------------------- */


  /* ---- location.php ---- */
  /* ----------------------- */
  function get_certain_picture($picID){
    $sql = "SELECT * FROM picture WHERE picture_id = '$picID';";
    return get_result($sql);
  }

  function update_like($picID,$userID){
    $sql = "INSERT INTO likes (user_id, picture_id) VALUES ('$userID', '$picID');";
  }
  /* ----------------------------------------------------------------------------- */

  /* ---- allgemein ---- */
  /* ----------------------- */
  function get_tags(){
    $sql = "SELECT * FROM tags;";
    return get_result($sql);
  }

  /* ----------------------------------------------------------------------------- */


  /* ---- home.php ---- */
  /* ----------------------- */

  //Bildupload
  function bildupload($uploader, $like_counter, $description, $title, $img_src){
    $sql = "INSERT INTO picture (uploader, like_counter, description, title, img_src) VALUES ('$uploader', '$like_counter', '$description', '$title', '$img_src');";
   // echo '<script type="text/javascript">alert("' . $sql . '");</script>';
     return get_result($sql);
  }


  function get_user($user_id){
      $sql = "SELECT * FROM user WHERE user_id = $user_id;";
      return get_result($sql);
  }

  /* ---- profil.php ---- */
  /* ----------------------- */
  // userdaten updaten
  function update_user($firstname, $lastname, $email, $password, $confirm_password, $user_id){
      $sql_ok = false;
      $sql = "UPDATE user SET ";
    //   if($profilfoto != ""){ //wenn profilfoto nicht leer dann:
    //     $sql .= "profilfoto = '$profilfoto', ";  //vorhandener string wird erweitert
    //     $sql_ok = true;
    // }

      if($firstname != ""){
        $sql .= "first_name = '$firstname', ";
        $sql_ok = true;
      }

      if($lastname != ""){
        $sql .= "last_name = '$lastname', ";
        $sql_ok = true;
      }

      if($email != ""){
        $sql .= "email = '$email', ";
      }

      if($password != "" && $confirm_password == $password){
        $sql .= "password = '$password', ";
        $sql_ok = true;
      }

      $sql = substr_replace($sql, ' ', -2, 1);
      $sql .= "WHERE user_id = $user_id;";

      if($sql_ok)
      {
        return get_result($sql);

      } else{
        return false;
      }
}
  ?>
