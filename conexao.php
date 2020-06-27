<?php
    function conexao(){
    $servername = "sql303.epizy.com";
    $username   = "epiz_26115053";
    $password   = "pKo0DQQs0RK";
    $db         = "epiz_26115053_clubefutsal";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$db;charset=utf8", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
                
            } catch(PDOException $e) {
                echo "Error 700: " . $e->getMessage();
              }
           
}