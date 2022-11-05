<?php 
// DB credentials.
 /*
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','root@123');
define('DB_NAME','elms');

// Establish database connection.
try
{

//$dbh = new PDO("pgsql:host=".DB_HOST.";port=5432;dbname=".DB_NAME,DB_USER, DB_PASS,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPITION]); 
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
*/
    $host = 'localhost';
    $dbname = 'elms';
    $username = 'root';
    $password = 'root@123';
 
  $dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";
   
  try{
     $dbh = new PDO($dsn);
   
  }catch (PDOException $e){
     echo $e->getMessage();
  }
?>