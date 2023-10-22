<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];


    try{
        require_once "display.php";
        $query = "UPDATE user SET first_name = :first_name, last_name = :last_name, email = :email
                    WHERE id = 11;";
        $stmt = $pdo->prepare($query);
       
        $stmt -> bindParam(":first_name", $first_name);
        $stmt -> bindParam(":last_name", $last_name);
        $stmt -> bindParam(":email", $email);
       
        $stmt->execute();
        
        $pdo = null;
        $stmt = null;

        header("Location: index.php");

        die();
    }
    catch (PDOException $e){
        die ("Query Failed " . $e->getMessage());
    }
                                
 }
  else {
    header("Location: index.php");
 }