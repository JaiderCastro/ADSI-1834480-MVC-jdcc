
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php?c=<?=Database::encryptor('encrypt','user')?>&a=<?=Database::encryptor('encrypt','uploadFile')?>" method="POST" enctype="multipart/form-data">

<div class="form-group">
  <label form="exampleFormControlFilel">Seleccione el Documento a Subir</label>
  <input type="file" name="file" id="file">
  
  <br>
  <button type="submit" class="btn btn-success">
   Subir   
   </button>

</div>
  

</form>
</body>
</html>