<!--
  Developer: Chandler Thompson
  Project: Exam 2 - Book Checkout System
  Date: 11/2/2022
-->
<?php

    include "view/navigation.php";
    include "model/database.php";
    $add = filter_input(INPUT_POST, 'add');
    // this runs once you have entered your name on the checkout page and runs the qry to save the check out request
    if($add)
    {
        $cName = filter_input(INPUT_POST, 'cName');
        $bookCheck = filter_input(INPUT_POST, 'bookCheck');
        date_default_timezone_set("America/Chicago"); // get the curent time 
        $time = date('m/d/y h:i:s a', time());
        
        $sql = "INSERT INTO `checkedout` (`checkedId`, `checkedTime`, `checkedBook`, `checkedName`) 
        VALUES (NULL, '$time', '$bookCheck', '$cName');";
        $qry = $db->query($sql);
        echo("Book Checked Out");
    }
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
    $choice = filter_input(INPUT_GET, 'check');
    switch($choice){
      case "1":
        include "view/publiccheckout.php";
        break;
      default:
        include "view/publicallbooks.php";
    }
    
    ?>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>