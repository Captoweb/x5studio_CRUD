<?php

$pdo = new PDO("mysql:host=localhost;dbname=x5studio", "root", "");
$sql = "INSERT INTO books ( name, description, pages, price) VALUES ( :name, :description, :pages, :price)";
$stmt = $pdo->prepare($sql);
$stmt->execute($_POST);
    


header("Location: /"); exit;  