<?php
//    local development server connection
    // $dsn = 'mysql:host=localhost;dbname=zippy';
    // $username = 'root';
    // $password = 'sesame';

//     Heroku connection
    
    //  $dsn = 'mysql:host=eyw6324oty5fsovx.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=kapejzcteqfo95k9';
    //  $username = 'szh6s65ahmhfewmb';
    //  $password = 'rz51jf40ix551ije';
    



//      try {
// //        local development server connection
// //        if using a $password, add it as 3rd parameter
//          $db = new PDO($dsn, $username, $password);

// //         Heroku connection
//         $db = new PDO($dsn, $username, $password);
//      } catch (PDOException $e) {
//          $error = "Database Error: ";
//          $error .= $e->getMessage();
//          include('view/error.php');
//          exit();
//      }


     class Database {
    // private static $dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
    // private static $username = 'mgs_user';
    // private static $password = 'pa55word';
    // private static $db;

        private static $dsn = 'mysql:host=grp6m5lz95d9exiz.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=unxrwidfmqz3c6ur';
    private static $username = 'bc4mijcpj4fcntea';
    private static $password = 'gkni9r9axhdnyeal';
    private static $db;

    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}



?>