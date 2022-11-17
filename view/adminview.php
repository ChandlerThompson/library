<div class="card mainform text-bg-dark">
      <div class="card-body ">
<?php
    // gets all the checkout request 
    $requests = getRequst();
    echo("<h1>Checked Out</h1>");
    foreach($requests as $request){
        echo("$request[checkedTime] | $request[checkedBook] | $request[checkedName] <br>");
    }
    // gets all the books and gives a link to either edit or delete said book 
    $books = getBooks();
    echo("<h1>Edit Books</h1>");
    foreach($books as $book){
        
        $bookId = $book['bookId'];
        echo("<a href='admin.php?edit=$bookId' style='text-decoration: none; color:rgb(72, 216, 241);'>Edit</a> | <a href='admin.php?Del=1&id=$bookId' 
        style='text-decoration: none; color:rgb(72, 216, 241);'>Del</a> | $book[bookName] <br>");
        
    }
    // allows you to add or log out
    echo("<a href='admin.php?add=1' style='text-decoration: none; color:rgb(72, 216, 241);'>Add Book</a> | <a href='admin.php?lo=1' style='text-decoration: none; color:rgb(72, 216, 241);'>Log Out</a>")
?>
    </div>
</div>

