<div class="card mainform text-bg-dark">
  <h5>Books</h5>
      <div class="card-body ">
<?php
    
    $books = getBooks();
    // displays all the books 
    foreach($books as $book){
        
        $bookId = $book['bookId'];
        echo("<a href='public.php?check=1&id=$bookId' style='text-decoration: none; color:rgb(72, 216, 241);'>Checkout</a> | $book[bookName] | $book[bookDescription] | $book[bookAuthor] <br>");
        
    }
    
?>
    </div>
</div>