<html>
   <head>
      <title>Add New Record in MySQL Database</title>
   </head>
   <body>
      <?php
         if(isset($_POST['add'])) {
            $dbhost = 'localhost'; 
            $dbuser = '21mca046';
            $dbpass = '2703';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
         
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error($conn));
            }
            $book_title = $_POST['book_title'];
            $book_author = $_POST['book_author'];
            $purchase_date = $_POST['purchase_date'];
            $sql = "INSERT INTO book_tb ".
               "(book_title,book_author, purchase_date) "."VALUES ".
               "('$book_title','$book_author','$purchase_date')";
            mysqli_select_db( $conn, '21mca026' );
            $retval = mysqli_query( $conn, $sql );
         
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
            echo "Entered data successfully\n";
            mysqli_close($conn);
         } else {
      ?>  
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">Book Title</td>
               <td><input name = "book_title" type = "text" id = "book_title"></td>
            </tr>         
            <tr>
               <td width = "250">Book Author</td>
               <td><input name = "book_author" type = "text" id = "book_author"></td>
            </tr>         
            <tr>
               <td width = "250">Purchase Date [   yyyy-mm-dd ]</td>
               <td><input name = "purchase_date" type = "text" id = "purchase_date"></td>
            </tr>      
            <tr>
               <td width = "250"> </td>
               <td></td>
            </tr>         
            <tr>
               <td width = "250"> </td>
               <td><input name = "add" type = "submit" id = "add"  value = "Add Book"></td>
            </tr>
         </table>
      </form>
   <?php
      }
   ?>
   </body>
</html>
