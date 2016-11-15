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
    // echo $sql ."<br>";
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    return $result;
  }

 /* ----------------------- */

 function register($username, $email, $firstname, $lastname, $password){
   $sql = "INSERT INTO user (benutzer_name, email, first_name, last_name, password) VALUES ('$username', '$email', '$firstname', '$lastname', '$password');";
   return get_result($sql);
 }
?>
