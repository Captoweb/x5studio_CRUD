<?php

$pdo = new PDO("mysql:host=localhost;dbname=x5studio", "root", "");
$sql = "SELECT * FROM books WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(":id", $_GET['id']);
$stmt->execute();

$book = $stmt->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>x5studio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style> body{ background: #EDEDED;}</style>
</head>
<body>
    
  <div class="container">
      <div class="row">
         <div class="col-md-12">
          <h1><?= $book['name']; ?></h1>
          <p><?= $book['description']; ?></p>
          <p><?= 'Количество страниц: '. $book['pages']; ?></p> 
          <p><?= 'Цена: '. $book['price'] . ' рублей.'; ?></p>
          <p><?= 'Время добавления: '. $book['time']; ?></p>
      </div>
    </div> 
  </div>
</body>
</html>