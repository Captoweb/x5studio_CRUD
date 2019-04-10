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
          <h1>Форма добавления</h1>
             
              <form action="create.php" method="post">
              
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Название">
                    </div>

                  <div class="form-group">
                     <textarea name="description" class="form-control" placeholder="Краткое описание"></textarea>
                  </div> 

                  <!-- <div class="form-group">
                     <input type="text" class="form-control" name="time" placeholder="Дата">
                   </div>-->
                    

                   <div class="form-group">
                    <input type="number" class="form-control" name="pages" placeholder="Количество страниц">
                   </div> 

                   <div class="form-group">
                    <input type="number" class="form-control" name="price" placeholder="Цена">
                   </div>
               
                  <div class="form-group">
                    <button class="btn btn-success" type="submit">Submit</button> 
                </div>
                
             </form>
             
          </div>
      </div>
  </div>    
</body>
</html>