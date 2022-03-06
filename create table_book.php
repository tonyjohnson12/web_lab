<html>
   <head>
      <title>Creating MySQL Table</title>
   </head>
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = '21mca046';
         $dbpass = '2703';
         $dbname = '21mca046';
         $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
         
         if($mysqli->connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli->connect_error);
            exit();
         }
         printf('Connected successfully.<br />');
         $sql = "CREATE TABLE book_tb( ".
            "book_id INT NOT NULL AUTO_INCREMENT, ".
            "book_title VARCHAR(100) NOT NULL, ".
            "book_author VARCHAR(40) NOT NULL, ".
            "purchase_date DATE, ".
            "PRIMARY KEY ( book_id )); ";
         if ($mysqli->query($sql)) {
            printf("Table book_tb created successfully.<br />");
         }
         if ($mysqli->errno) { 
            printf("Could not create table: %s<br />", $mysqli->error);
         }
         $mysqli->close();
      ?>
   </body>
</html>
