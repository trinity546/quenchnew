<?php
try {
    $db = new PDO("mysql:dbname=final_assignment;host=localhost", "root", "root");
} catch (PDOException $e){
    echo "FAIL";
}
?>