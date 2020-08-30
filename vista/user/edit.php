<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
     
    <title>Document</title>
    <style>
        #id {
            width : 510px;

        }

        #name {
            width : 552px;

        }

        #email {
            width : 561px;

        }
    </style>

     <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="js/materialize.min.js"></script>
   
</head>
<body>
   
    <div class="container">
        <div class="row">
            <div class="col m12">
                <div class="card blue m-depth-3 white-text center-align">
                    <h4><?=$button?></h4>

                </div>

            </div>


        </div> <br> <br> <br>
            <form action="index.php?c=<?=Database::encryptor('encrypt','user')?>&a=<?=Database::encryptor('encrypt','crud')?>" method="POST">

                

                <div class="row">

                    
                    <div class=""> <h6>Nombre :</h6> </div>
                    
                    <div class=" col m3">
                        <input type="text" name="name" id="name" value="<?=$name?>" required>   
                    </div>
                    
                </div> <br> <br> <br>
                <div class="col m3"></div>
                <div class=" row">
                  
                    <div class=""> <h6>Correo :</h6></div>
                    <div class="col m3">
                        <input type="email" name="email" id="email" value="<?=$email?>" required>   
                    </div>

  
                </div> <br>
                <div class=""> <h6>Rol :</h6></div>
                    <div class="col m3">
                <p> <br>
                   
                <label>
                    <input name="level" type="radio" id="level"  value="1" <?=$level1?> >
                    <span>Usuario (a)</span>
                </label>
                </p>
                <p>
                <label>
                <input name="level" type="radio" id="level" value="2" <?=$level2?> >
                    <span>Administrador (a)</span>
                </label>
               
                </p>

                
                
                <div class="col m3"></div> <br> <br> <br>
                
                <div class="row">
                    <div class="col m3"></div>
                    <div class="col m9">

                        <input type="hidden" value="<?=$id?>" name="id"> 
                        
                        <button class="btn waves-effect waves-blue" type="submit" >
                            <?=$button?>
                            <i class="material-icons arrow_forward"></i>
                        </button>
                        <div class="col m7"></div>        
                    </div>
                </div>
                
 
            </form>
    </div>
  
   
   
</body>
</html>