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
          <h1>Форма добавления</h1>
             
              <form action="create.php" method="post" onsubmit="return validate();">
              
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Название" id="nameId">
                    </div>

                  <div class="form-group">
                     <textarea name="description" class="form-control" placeholder="Краткое описание" id="descriptionId"></textarea>
                  </div> 

                  <!-- <div class="form-group">
                     <input type="text" class="form-control" name="time" value="Дата">
                   </div>-->
                     

                   <div class="form-group">
                    <input type="number" class="form-control" name="pages" placeholder="Количество страниц" id="pagesId">
                   </div> 

                   <div class="form-group">
                    <input type="number" class="form-control" name="price" placeholder="Цена"
                    id="priceId">
                   </div>
               
                  <div class="form-group">
                    <button class="btn btn-success" type="submit">Submit</button> 
                </div>
                
             </form>
             
             <script>
                function validate() {
                    
                    var nameField = document.getElementById("nameId");
                    var descField = document.getElementById("descriptionId");
                    var pageField = document.getElementById("pagesId");
                    var priceField = document.getElementById("priceId");
                    
                      if(!nameField.value){
                          nameField.style.border = "2px solid red";
                          return false;
                      }
                    
                      if(!descField.value){
                          descField.style.border = "2px solid red";
                          return false;
                      }
                    
                       if(!pageField.value){
                          pageField.style.border = "2px solid red";
                          return false;
                      }
                    
                      if(!priceField.value){
                          priceField.style.border = "2px solid red";
                          return false; 
                      }
                    
                    return true;
                }
                 
            </script>
            
          </div>
      </div>
  </div>    
</body>
</html>