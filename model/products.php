<?php

// class model
// {
//     private $conexion;
//     function __construct()
//     {

//         $this->conexion = new Database();
//     }


//     function getProducts()
//     {

//         $query = $this->conexion->conectar();
//         $prepare = $query->prepare('SELECT id_prod, nombre_prod, categoria,est_m2_prod,desc_prod, b64_img
//     FROM productos
//     INNER JOIN imagenes
//     ON productos.id_img=imagenes.id_img');
//         $prepare->execute();
//         $resultado = $prepare->fetchAll(PDO::FETCH_ASSOC);
//         return empty($resultado) ? "no hay resultado" : $resultado;
//     }

//     function getimg()
//     {

//         $query = $this->conexion->Conectar();
//         $prepare = $query->prepare('SELECT nombre_img, id_img FROM imagenes');

//         $prepare->execute();
//         $resultado = $prepare->fetchAll(PDO::FETCH_ASSOC);
//         return empty($resultado) ? "no hay resultado" : $resultado;
//         return $resultado;
//     }


//     function create($id_imagen, $nombre_product, $desc_prod, $est_m2_prod, $categoria)
//     {

//         $query = $this->conexion->Conectar();
//         $prepare = $query->prepare('INSERT INTO productos (id_img,nombre_prod,desc_prod,est_m2_prod,categoria) VALUES (?,?,?,?,?)');
//         $prepare->bindParam(1, $id_imagen, PDO::PARAM_INT);
//         $prepare->bindParam(2, $nombre_product, PDO::PARAM_STR);
//         $prepare->bindParam(3, $desc_prod, PDO::PARAM_STR);
//         $prepare->bindParam(4, $est_m2_prod, PDO::PARAM_INT);
//         $prepare->bindParam(5, $categoria, PDO::PARAM_STR);
//         $prepare->execute();
//         return $prepare;
//     }

//     function delete($id)
//     {

//         $query = $this->conexion->Conectar();
//         $prepare = $query->prepare('DELETE FROM productos WHERE id_prod = ?');
//         $prepare->bindParam(1, $id, PDO::PARAM_INT);

//         $prepare->execute();

//         return $prepare;
//     }


//     function byid($id)
//     {

//         $query = $this->conexion->Conectar();
//         $prepare = $query->prepare('SELECT nombre_prod,desc_prod,est_m2_prod, id_prod FROM productos WHERE id_prod = ?');
//         $prepare->bindParam(1, $id, PDO::PARAM_INT);
//         $prepare->execute();
//         $resultado = $prepare->fetchAll(PDO::FETCH_ASSOC);
//         empty($resultado) ? "no hay resultado" : $resultado;
//         return $resultado;
//     }

//     function updates($id, $nombre_product, $desc_prod, $est_m2_prod, $categoria)
//     {

//         $query = $this->conexion->Conectar();
//         $prepare = $query->prepare('UPDATE productos SET nombre_prod= ?,desc_prod=?,est_m2_prod=?,categoria=? WHERE id_prod=?');

//         $prepare->bindParam(1, $nombre_product, PDO::PARAM_STR);
//         $prepare->bindParam(2, $desc_prod, PDO::PARAM_STR);
//         $prepare->bindParam(3, $est_m2_prod, PDO::PARAM_INT);
//         $prepare->bindParam(4, $categoria, PDO::PARAM_STR);
//         $prepare->bindParam(5, $id, PDO::PARAM_INT);
//         $prepare->execute();
//         return $prepare;
//     }
// }

// $get = new model();
// $get->getProducts();
