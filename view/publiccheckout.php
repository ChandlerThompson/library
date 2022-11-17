<div class="card mainform text-bg-dark">
  <h5>Check Out</h5>
      <div class="card-body ">
       
        <?php
            $bookId = filter_input(INPUT_GET, 'id'); // get teh id for the book checking out 
            $books = getBooks();

            
            ?>
            
            <form action="public.php" method="post">
                <?php
                
                foreach($books as $book){
                
                    if($book['bookId'] == $bookId)
                    {
                    Echo("<h1>Requesting:  $book[bookName]</h1>");
                    $bookname = $book['bookName'];
                    }
                    
                }
                
                ?>
                <br>
                <input type="text" name='cName' value='Your Name'>
                <input type="hidden" name='add' value='true'>
                <input type="hidden" name='bookCheck' value='<?php echo($bookname)  // get the user name ?>'> 
                <input type="submit" value="Request Book">
            </form>
        </div>
</div>
    