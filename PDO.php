<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);





$servername = "sql2.njit.edu";
$username = "jc926";
$password = "gkXLdWmKr";
$dbname = "jc926";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    echo "<br>";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    echo "<br>";
    }

    $statement= $conn ->prepare("SELECT * from accounts where id < 6");
    $statement->execute();
    $result = $statement->fetchAll();
    $number_results = count($result);
    print_r($number_results);
    echo"<br><br>";
    echo "<html>";
    echo "<body>";
    echo "<div style='overflow-x:auto;'>";
        foreach ($result as $row) {
              echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["phone"]."</td><td>".$row["birthday"]."</td><td>".$row["gender"]."</td><td>".$row["password"]."</td></tr>";
           
            }
                      

        echo "</table></div>";
        echo "</body>";
        echo "</html>";	
        
    

?>
