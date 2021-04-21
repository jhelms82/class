<?php
//    local development server connection
    $dsn = 'mysql:host=localhost;dbname=zippy';
    $username = 'root';
    $password = 'sesame';

//     Heroku connection
    
//      $dsn = 'mysql:host=eyw6324oty5fsovx.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=kapejzcteqfo95k9';
//      $username = 'szh6s65ahmhfewmb';
//      $password = 'rz51jf40ix551ije';
    



     try {
//        local development server connection
//        if using a $password, add it as 3rd parameter
         $db = new PDO($dsn, $username, $password);

//         Heroku connection
        $db = new PDO($dsn, $username, $password);
     } catch (PDOException $e) {
         $error = "Database Error: ";
         $error .= $e->getMessage();
         include('view/error.php');
         exit();
     }



?>