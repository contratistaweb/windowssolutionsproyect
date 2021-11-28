<?php
include_once "model/products.php";

class ProductsController
{

    public function Index()
    {
       
        include_once 'views/admin/components/products/index.php';
    
   }
    static public function gets (){
     
    
      $get = new model();
      return $get->getProducts();
        
       

   }
  
    static public function deletes ($id){
     
      $get = new model();
        
     return $get->deletes($id);
        
       

   }

    
   static public function creates ($id_imagen,$nombre_product, $desc_prod , $est_m2_prod, $categoria){
     
        
       $get = new model();
        
       return $get->creates($id_imagen,$nombre_product, $desc_prod , $est_m2_prod, $categoria);
        
       

  }

    static public function updatess ($id,$nombre_product, $desc_prod , $est_m2_prod, $categoria){
     
      $get = new model();
        
    return $get->updates($id,$nombre_product, $desc_prod , $est_m2_prod, $categoria);
        
       

        
  }

    
 }
