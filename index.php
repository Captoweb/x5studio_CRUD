<?php
$pdo = new PDO("mysql:host=localhost;dbname=x5studio;charset=utf8","root","");
$sql = "SELECT * FROM books";
$stmt =$pdo->prepare($sql);
$stmt->execute();
$books= $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>x5studio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="row">
       
       <div class="col-md-12">
       <h1>Список книг</h1> 
        <a  class="btn btn-success" href="add.php" role="button">Добавить книгу</a> 
        <table class="table">
  <thead>
    <tr>
      <th>Название</th>
      <th>Дата добавления</th>
      <th>Краткое описание</th>
      <th>Кол-во страниц</th>
      <th>Цена</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($books as $book):?>
    <tr>
          <td hidden="true"><?= $book['id'];?></td>
          <td><?= $book['name'];?></td>
          <td><?= $book['time'];?></td>
          <td><?= $book['description'];?></td>
          <td><?= $book['pages'];?></td>
          <td><?= $book['price'];?></td> 
          <td>
            <a onclick="return confirm('Вы действительно хотите удалить информацию?');" href="delete.php?id=<?= $book['id'];?>" class="btn btn-danger">Delete</a>
          
            <a href="show.php?id=<?= $book['id'];?>" class="btn btn-info">Show</a>
         </td>
    </tr>    
    <?php endforeach; ?> 
  </tbody>
</table> 
       </div>  
    </div>    
 </div>
    
</body>
</html>


