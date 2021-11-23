<?php 
include_once 'database/connect.php';
include_once "model/products.php";


$get = new model();
        
$resultado= $get->getProducts();
  ?>


<div class="col-lg-12">
    

    <div class="card-group ">

         
         <?php foreach ($resultado as  $value) {
           
      
 

             ?>
           
          <div class="col-md-3 mt-2">
            <div class="card">
                <img class="card-img-top" src="<?= $value['b64_img']; ?>"  height="200">
                   <div class="card-body">
                  <h5 class="card-title"><?= $value['nombre_prod']; ?></h5>
                  <p class="card-text">descripcion: <?= $value['desc_prod']; ?></p>
                  <p class="card-text">precio: <?= $value['est_m2_prod']; ?></p>
              
                     </div>
                     </div>
                    
                     </div>
           
          
                                        
     
                     
            <?php  }?>
       
      
            </div>                      