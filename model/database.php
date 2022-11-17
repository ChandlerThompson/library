<?php
$dsn = "mysql:host=localhost;dbname=library";
$username = "root";
$password = "";

try {
    $db = new PDO($dsn, $username, $password);
    //echo("connected");
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo ("<p>Error message: $error_message");
}


function getBooks() // gets all the books from the database
{
    global $db;
    $sql = "select * from books where active = 1";
   
    $qry = $db->query($sql);
    $books = $qry->fetchAll();

    return $books;

}

function getAdmins() // gets all the admins from the database 
{
    global $db;
    $sql = "select * from admin";
   
    $qry = $db->query($sql);
    $admins = $qry->fetchAll();

    return $admins;
}

function getRequst(){ // gets all the check out request from the database 
    global $db;
    $sql = "SELECT * FROM `checkedout`;";

    $qry = $db->query($sql);
    $requests = $qry->fetchAll();

    return $requests;
}

function getBook($id)  // gets a specific book by id
{
    global $db;
    $sql = "select * from book where bookId = $id";
   
    $qry = $db->query($sql);
    $rs = $qry->fetch();
    return $rs;
}

?>