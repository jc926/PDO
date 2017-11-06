<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);


echo "<table style='border: solid 1px black;'>";


$servername = "sql2.njit.edu";
$username = "jc926";
$password = "gkXLdWmKr";
$dbname = "jc926";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    $statement= $conn ->prepare("SELECT * from accounts where id < 6");
    $statement->execute();
    // $result = $statement->setFetchMode(PDO::FETCH_ASSOC); 
    //foreach(new TableRows(new RecursiveArrayIterator($statement->fetchAll())) as $k=>$v) { 
        //echo $v;
    $result = $statement->fetchAll();
    print_r($result);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



?>
