<?php 
    $db_host = "localhost";
    $db_name = "db_site_dosaaf";
    $user_name = "root";
    $password = "";
try{
    $db = new PDO("mysql:host=$db_host;port=3306;dbname=$db_name", "$user_name", "$password");
    echo "Database connection established";
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
    
?>