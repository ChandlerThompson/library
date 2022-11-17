<div class="card mainform text-bg-dark">
  <h5>Add Book</h5>
      <div class="card-body ">
        <form action="admin.php" method="post">
            <label for="bookName">Book Name:</label><br>
            <input type="text" name="bookName"><br>
            <label for="bookDescription">Description:</label><br>
            <input type="text" name="bookDescription"><br>
            <label for="bookISBN">ISBN:</label><br>
            <input type="text" name="bookISBN"><br>
            <label for="bookAuthor">Author:</label><br>
            <input type="text" name="bookAuthor"><br>
            <input type="hidden" name="saveAdd" value="1">
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>