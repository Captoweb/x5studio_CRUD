<?php

$pdo = new PDO("mysql:host=localhost;dbname=x5studio", "root", "");
$sql = "INSERT INTO books ( name, description, pages, price) VALUES ( :name, :description, :pages, :price)";
$stmt = $pdo->prepare($sql);

$_POST['name'] = htmlspecialchars($_POST['name']);
$_POST['description'] = htmlspecialchars($_POST['description']);

 $stmt->bindParam(":name", $_POST['name']);
 $stmt->bindParam(":description", $_POST['description']);
// $stmt->bindParam(":pages", $_POST['pages']);
// $stmt->bindParam(":price", $_POST['price']);

$stmt->execute($_POST);
    
header("Location: /"); exit;  
