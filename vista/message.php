<?php
 if (isset($_REQUEST['m'])) {

    $msg = $_REQUEST['m'];
    
      if ($_REQUEST['e'] == 0) {
          $alert = 'alert-success';
      } else {
          $alert = 'alert-danger';
          
      } 
     
        
      
         
  ?> 

    <div class="alert alert <?=$alert?>" role="alert">
        <strong> <?=$msg?></strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
   </div>

    

 
 
 <?php
 }