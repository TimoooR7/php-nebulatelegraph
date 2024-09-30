<?php
    $servername = "mysql-nebulatelegraph.mysql.database.azure.com";
    $username = "db_admin";
    $password = ".Etml-123";
    $dbname = "db_telegraph";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Test réussi, la base de données db_telegraph est accessible";
    } 
    catch(PDOException $e) {
        echo "Test échoué, la base de données db_telegraph est inaccessible: " . $e->getMessage();
    }
?>