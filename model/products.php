<?php


class model {
        private $conexion;
   
    function __construct()
    {
        
        $this->conexion = new Database();
        
    }

  
function getProducts(){
   

    $consulta = "SELECT id_prod, nombre_prod, categoria,est_m2_prod,desc_prod, b64_img
    FROM productos
    INNER JOIN imagenes
    ON productos.id_img=imagenes.id_img";
    $resultado= $this->conexion->getConnection()->query($consulta);
    return $resultado->num_rows <= 0 ? "no hay resultado":$resultado;
   

}

function getimg(){
   

    $consulta = "SELECT nombre_img, id_img FROM imagenes";
    $resultado= $this->conexion->getConnection()->query($consulta);
    return $resultado->num_rows <= 0 ? "no hay resultado":$resultado;

}



function create($id_imagen,$nombre_product, $desc_prod , $est_m2_prod, $categoria){
   
    $consulta = "INSERT INTO productos (id_img,nombre_prod,desc_prod,est_m2_prod,categoria) VALUES ('$id_imagen','$nombre_product', '$desc_prod', '$est_m2_prod',  '$categoria')";
     $this->conexion->getConnection()->query($consulta);
    

}


function delete($id){
   
    $consulta = "DELETE FROM productos WHERE id_prod = '$id'";
    $this->conexion->getConnection()->query($consulta);

}



function byid($id){
   
    $consulta = "SELECT nombre_prod,desc_prod,est_m2_prod, id_prod FROM productos WHERE id_prod = '$id'";
    $resultado= $this->conexion->getConnection()->query($consulta);
    return $resultado->num_rows <= 0 ? "no hay resultado":$resultado;

}

function updates($id,$nombre_product, $desc_prod , $est_m2_prod, $categoria){
   
    $consulta = "UPDATE productos SET nombre_prod= '$nombre_product',desc_prod='$desc_prod',est_m2_prod='$est_m2_prod',categoria='$categoria' WHERE id_prod='$id'";
    $this->conexion->getConnection()->query($consulta);

}



   

}

