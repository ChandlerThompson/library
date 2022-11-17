<div class="card mainform text-bg-dark">
  <h5>Edit</h5>
      <div class="card-body ">
        <form action="admin.php" method="post">
        <?php
            $books = getBooks();

            foreach($books as $book){
                // displays all the information for the book you are editing and then send it in post
                if( $book['bookId'] == $edit = filter_input(INPUT_GET, 'edit') ){
                echo("
                <label for='bookName'>Book Name: </label><br><input type='text' name='bookName' value='$book[bookName]'><br>
                <label for='bookDescription'>Description: </label><br><input type='text' name='bookDescription' value='$book[bookDescription]'><br>
                <label for='bookISBN'>ISBN: </label><br><input type='text' name='bookISBN' value='$book[bookISBN]'><br>
                <label for='bookAuthor'>Author: </label><br><input type='text' name='bookAuthor' value='$book[bookAuthor]'><br>
                ");
                }
                
                
            }
        ?>
            <input type="hidden" name="finishedit" value="1">
            <input type="hidden" name="bookId" value="<?php echo($edit = filter_input(INPUT_GET, 'edit')); ?>">
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
