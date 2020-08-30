
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
  <link rel ="stylesheet" href = "bootstrap/css/bootstrap.min.css">
  
 
  

</head>
    
</head>
</script>
<body>
 <!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Listado De Usuarios</h6>

    <a href="index.php?c=<?=Database::encryptor('encrypt','user')?>&a=<?=Database::encryptor('encrypt','edit')?>" class="btn btn-primary btn-icon-split">
       <span class="icon text-white-50">
       <i class="fas fa-user-plus"></i>
       </span>
       <span class="text">Crear Usuario</span>
      </a>
      

  
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Ultimo Acceso</th>
            <th><i class="fas fa-edit">&nbsp;&nbsp;</i>Editar</i>
            <th><i class="fas fa-trash-alt">&nbsp;&nbsp;</i>Eliminar</i>
            <th>Subir Archivo(esta parte aun no esta completada)</i>
          </th>
            
            
            
            
          </tr>
          
          
        </thead>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Ultimo Acceso</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-edit"></i></th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-trash-alt"></i></i>
          </tr>
        </tfoot>
        <tbody>
            <?php
            $num = 0;
             foreach ($rows as $row){
               $num++;
            ?> 
             
          <tr>
            <td><?=$row->id?></td>
            <td><?=$row->name?></td>
            <td><?=$row->email?></td>
            <td><?=$row->level?></td>
            <td><?=$row->lastAccess?></td>
            <td> &nbsp;&nbsp;
            <a href="index.php?c=<?=Database::encryptor('encrypt','user')?>&a=<?=Database::encryptor('encrypt','edit')?>&id=<?=$row->id?>" class="btn btn-success btn-circle .btn-sm">
              <i class="fas fa-user-edit"></i>
              </a>
            </td>
                  <td> &nbsp;&nbsp;&nbsp;&nbsp; <a class="btn btn-danger btn-circle .btn-sm" href="index.php?c=<?=Database::encryptor('encrypt','user')?>&a=<?=Database::encryptor('encrypt','delete')?>&id=<?=$row->id?>" data-toggle="modal" data-target="#logoutModal<?=$num?>">
                   <i class="fas fa-trash "></i>
                     
                  </a>
                  </td>

                  <td>  
                  <a href="index.php?c=<?=Database::encryptor('encrypt','user')?>&a=<?=Database::encryptor('encrypt','upload')?>" class="btn btn-primary btn-circle">
                  <i class="fas fa-file-download"></i>
                  </a>
                  </td>
           
          
           
          
                 
        
                

                    <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal<?=$num?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">¿Desea Eliminar Este Usuario?</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                  </button>
                              </div>
                              <div class="modal-body">Este Registro NO Se Recuperara.</div>
                              <div class="modal-footer">
                                  <button class="btn btn-primary" type="button" data-dismiss="modal">Cancelar</button>
                                  <a class="btn btn-danger" href="index.php?c=<?=Database::encryptor('encrypt','user')?>&a=<?=Database::encryptor('encrypt','delete')?>&id=<?=$row->id?>">Eliminar</a>
                              </div>
                          </div>
                      </div>
                </div>

                  
            </td>
            
          </tr>
          
        </tbody>
            <?php }?>
      </table>
    </div>
  </div>
</div>


</body>
</html>

