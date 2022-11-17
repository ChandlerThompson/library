<?php 

// this is always checking to see if the session is set and if it is set will validate that the username and password are set it will display the main admin page with all the inforamtion
if(isset($_SESSION['admin'])){
    $admins = getAdmins();
    foreach($admins as $admin)
    {
      if($_SESSION['admin']['adminName'] == $admin['adminName']){
        if($_SESSION['admin']['adminPass'] == $admin['adminPassword']){
          $valid = 1;
        }
      }
    }
    
  }
  
  
// this runs after you login and will save the password and the username to sessions allowing for the program to make sure you are logged in 
  if($try = filter_input(INPUT_POST, 'try') == true){
    $admins = getAdmins();
    $uName = filter_input(INPUT_POST, 'uName');
    $password = filter_input(INPUT_POST, 'password');
    //$_SESSION['uName'] = $uName;
    //$_SESSION['password'] = $password;
    foreach($admins as $admin)
    {
      if($admin['adminName'] == $uName){
        if($admin['adminPassword'] == $password){
          $valid = 1;
          $adminArray = array( // saving the info into an array to pass to the session
            'adminId' => $admin['adminId'],
            'adminName' => $admin['adminName'],
            'adminPass' => $admin['adminPassword']
          );
          $_SESSION['admin'] = $adminArray;
        }
      }
      else{
        $notvalid = 1;
      }
    }
    
    if($valid == 1){
      $notvalid = 0;
    }
    else{
      echo("Incorect user name or password.");
    }
  }

  
  
  if($edit = filter_input(INPUT_GET, 'edit')){  //if you click edit it will show the edit form also testing again that you are logged in 
    $admins = getAdmins();
    if(isset($_SESSION['admin'])){

      foreach($admins as $admin)
      {
        if($_SESSION['admin']['adminName'] == $admin['adminName']){
          if($_SESSION['admin']['adminPass'] == $admin['adminPassword']){
            $valid = 2;
          }
        }
      }
      
    }
    else{
      echo("You are not logged in");
    }
  }

  if($Del = filter_input(INPUT_GET, 'Del')){  // if you click delete it will test that you are logged in and then run the qry to delete that book
    $admins = getAdmins();
    $bookid = filter_input(INPUT_GET, 'id');
    if(isset($_SESSION['admin'])){

      foreach($admins as $admin)
      {
        if($_SESSION['admin']['adminName'] == $admin['adminName']){
          if($_SESSION['admin']['adminPass'] == $admin['adminPassword']){
            
            $sql = "UPDATE `books` SET `active` = '0' WHERE `books`.`bookId` = $bookid; ";
            $qry = $db->query($sql);
            
          }
        }
      }
      echo("Book Deleted");
      
    }
    else{
      echo("You are not logged in");
    }
  }

  if($add = filter_input(INPUT_GET, 'add')){ //if you click add it will show the edit form also testing again that you are logged in 
    $admins = getAdmins();
    if(isset($_SESSION['admin'])){

      foreach($admins as $admin)
      {
        if($_SESSION['admin']['adminName'] == $admin['adminName']){
          if($_SESSION['admin']['adminPass'] == $admin['adminPassword']){
            $valid = 3;
          }
        }
      }
      
    }
    else{
      echo("You are not logged in");
    }
  }

  // once you submit the edit form it will run this running this will run the qry to edit the information
  if($finishedit = filter_input(INPUT_POST, 'finishedit')){
    $booName = filter_input(INPUT_POST, 'bookName');
    $bookDescription = filter_input(INPUT_POST, 'bookDescription');
    $bookISBN = filter_input(INPUT_POST, 'bookISBN');
    $bookAuthor = filter_input(INPUT_POST, 'bookAuthor');
    $bookId = filter_input(INPUT_POST, 'bookId');

    $sql = "UPDATE `books` SET 
    `bookName` = '$booName', `bookDescription` = '$bookDescription', `bookISBN` = '$bookISBN', 
    `bookAuthor` = '$bookAuthor' WHERE `books`.`bookId` = $bookId;";

    $qry = $db->query($sql);
    echo("Book updated");
  }

  // once you submit the add form it will run the qury to add the information entered into the database
  if($saveAdd = filter_input(INPUT_POST, 'saveAdd')){
    $booName = filter_input(INPUT_POST, 'bookName');
    $bookDescription = filter_input(INPUT_POST, 'bookDescription');
    $bookISBN = filter_input(INPUT_POST, 'bookISBN');
    $bookAuthor = filter_input(INPUT_POST, 'bookAuthor');
    $bookId = filter_input(INPUT_POST, 'bookId');

    $sql = "INSERT INTO `books` (`bookId`, `bookName`, `bookDescription`, `bookISBN`, `bookAuthor`, `active`) 
            VALUES (NULL, '$booName', '$bookDescription', '$bookISBN', '$bookAuthor', '1'); ";

    $qry = $db->query($sql);
    echo("Book has been added");
  }

?>