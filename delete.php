<?php

$id = $_GET['id'];

$sql = "DELETE FROM books WHERE id=:id";
$pdo = new PDO("mysql:host=localhost;dbname=x5studio", "root", "");
$stmt = $pdo->prepare($sql); //подготовить
$stmt->bindParam(":id", $id);
$stmt->execute(); //выполнить
    
header("Location: /");   
 