<!--
  Developer: Chandler Thompson
  Project: Exam 2 - Book Checkout System
  Date: 11/2/2022
-->
<?php
  // start the session 
  // im using the session to save the login information
  session_set_cookie_params(strtotime('+1 years'), '/');
  session_start();
  $logout = filter_input(INPUT_GET, 'lo');
  if($logout){
      $_SESSION = [];
      
      // Generate a new session ID
      session_regenerate_id(true);
          
  }

  if(empty($_SESSION['admin'])){
      $_SESSION = array();
  }
  $notvalid = 0;
  $valid = 0;
  include "view/navigation.php";
  include "model/database.php";
  include "model/adminfunctions.php";
  
  

  

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
  </head>
  <body>
  <?php
    switch($valid){
      case "1":
        include "view/adminview.php";
        break;
      case "2":
        include "view/adminedit.php";
        break;
      case "3":
        include "view/adminadd.php";
        break;
      default:
        include "view/adminform.php";
        
    }

  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>