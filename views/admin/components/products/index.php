<div class="container">
    <?php
    include_once "model/products.php";


    $model = new model();

    $ids = $model->getimg();


    ?>
    <h1 class="row justify-content-center">admin produts</h1>
    <?php

    if (isset($_GET['add'])) {

    ?>
        <a name="addimages" id="addimages" class="btn btn-primary mb-3" role="button" href="http://localhost/windowssolutionsproyect/?admin=products">atras</a>
        <div class="row ">

            <div class=" col-lg-6 col-md-8">

                <div class="card p-3">
                    <div class="row justify-content-center">

                    </div>
                    <form class="form-card" action="http://localhost/windowssolutionsproyect/?admin=products&adds" method="post">


                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="input-group"> <input type="text" name="nombre_product" placeholder="nombre producto"> <label>nombre</label> </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <select class="form-select" aria-label="Default select example" name="id_img">
                                            <option selected>imagen</option>
                                            <?php foreach ($ids as $id) { ?>
                                                <option value="<?= $id['id_img']; ?>"> <?= $id['nombre_img']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <select class="form-select" aria-label="Default select example" name="categoria">
                                            <option selected>categoria</option>
                                            <option>nueva</option>
                                            <option>vieja</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-12">

                                <div class="input-group"> <input type="text" id="exp" name="est_m2_prod" placeholder="solo numero" minlength="5" maxlength="5"> <label>precio</label> </div>

                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="input-group"> <input type="text" name="desc_prod" placeholder="detalles"> <label>descripcion</label> </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" name="adds" class="btn btn-success m-1 col-12">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">

                <div class="card-group ">

                    <?php $resultado = ProductsController::get();
                    if($resultado=="no hay resultado"){
                        echo "no hay productos";
                        return;
                    }
                    foreach ($resultado as $key => $value) { ?>
                        <div class="col-md-6 mt-2">
                            <div class="card " style="margin-left: 3%;">
                                <img class="card-img-top" src="<?= $value['b64_img']; ?>" height="200">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $value['nombre_prod']; ?></h5>
                                    <p class="card-text">descripcion: <?= $value['desc_prod']; ?></p>
                                    <p class="card-text">precio: <?= $value['est_m2_prod']; ?></p>

                                    <form action="http://localhost/windowssolutionsproyect/?admin=products&delete=<?= $value['id_prod']; ?>" method="post">

                                      <input type="hidden" name="id_prod" value="<?= $value['id_prod']; ?>">
                                      <button type="submit" name="delete" class="btn btn-danger" role="button"><i class="fa fa-trash"></i></button>
                                 <a name="update" id="update" class="btn btn-primary" role="button" href="http://localhost/windowssolutionsproyect/?admin=products&update=<?= $value['id_prod']; ?>"><i class="fa fa-pencil"></i></a>
                             </form>
                                </div>
                            </div>
                        </div>






                    <?php  } ?>


                </div>
            </div>


        <?php
    } else if (isset($_POST['delete'])) {


       ProductsController::delete(($_POST['id_prod']));
        header('Location: http://localhost/windowssolutionsproyect/?admin=products');
        ?>

        <?php } elseif (isset($_POST['adds'])) {
       ProductsController::create($_POST['id_img'], $_POST['nombre_product'], $_POST['desc_prod'], $_POST['est_m2_prod'], $_POST['categoria']);

        header('Location: http://localhost/windowssolutionsproyect/?admin=products');
        ?>

            <?php } else if (isset($_GET['update'])) {
            $res = $model->byid($_GET['update']);
            foreach ($res as $re) { ?>
                <div class=" col-lg-12">

                    <div class="card p-3">
                        <div class="row justify-content-center">

                        </div>
                        <form class="form-card" action="http://localhost/windowssolutionsproyect/?admin=products" method="post">

                            <input type="hidden" value="<?= $re['id_prod'] ?>" name="id">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <div class="input-group"> <input type="text" name="nombre_product" value="<?= $re['nombre_prod'] ?>" placeholder="nombre producto"> <label>nombre</label> </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <select class="form-select" aria-label="Default select example" name="id_img">
                                                <option selected>imagen</option>
                                                <?php foreach ($ids as $id) { ?>
                                                    <option value="<?= $id['id_img']; ?>"> <?= $id['nombre_img']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <select class="form-select" aria-label="Default select example" name="categoria">
                                                <option selected>categoria</option>
                                                <option>nueva</option>
                                                <option>vieja</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-6">

                                    <div class="input-group"> <input type="text" id="exp" name="est_m2_prod" placeholder="solo numero" minlength="5" maxlength="5" value="<?= $re['est_m2_prod'] ?>"> <label>precio</label> </div>

                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <div class="input-group"> <input type="text" name="desc_prod" placeholder="detalles" value="<?= $re['desc_prod'] ?>"> <label>descripcion</label> </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <button type="submit" name="updatep" class="btn btn-success m-1 col-12">actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            <?php  } ?>


        <?php } else if (isset($_POST['updatep'])) {


          ProductsController::update($_POST['id'], $_POST['nombre_product'], $_POST['desc_prod'], $_POST['est_m2_prod'], $_POST['categoria']);


            header('Location: http://localhost/windowssolutionsproyect/?admin=products');
        } else {
            $resultado = ProductsController::get();
           
            if($resultado=="no hay resultado"){  
                 echo "   no hay productos  </br>"?>
                <br>
                <a name="addimages" id="addimages" class="btn btn-primary mb-1 " role="button" href="http://localhost/windowssolutionsproyect/?admin=products&add" style="margin-left: 1%;">Agregar producto</a>
    
    
                <div class="card-group ">
              
          <?php  }else{
        ?>

            <br>
            <a name="addimages" id="addimages" class="btn btn-primary mb-1 " role="button" href="http://localhost/windowssolutionsproyect/?admin=products&add" style="margin-left: 1%;">Agregar</a>


            <div class="card-group ">


                <?php foreach ($resultado as  $value) {




                ?>

                    <div class="col-md-3 mt-2">
                        <div class="card" style="margin-left: 3%;">
                            <img class="card-img-top" src="<?= $value['b64_img']; ?>" height="200">
                            <div class="card-body">
                                <h5 class="card-title"><?= $value['nombre_prod']; ?></h5>
                                <p class="card-text">descripcion: <?= $value['desc_prod']; ?></p>
                                <p class="card-text">precio: <?= $value['est_m2_prod']; ?></p>
                                <form action="http://localhost/windowssolutionsproyect/?admin=products&delete=<?= $value['id_prod']; ?>" method="post">
                                    <input type="hidden" name="id_prod" value="<?= $value['id_prod']; ?>">
                                    <button type="submit" name="delete" class="btn btn-danger" role="button"><i class="fa fa-trash"></i></button>
                                    <a name="update" id="update" class="btn btn-primary" role="button" href="http://localhost/windowssolutionsproyect/?admin=products&update=<?= $value['id_prod']; ?>"><i class="fa fa-pencil"></i></a>
                                </form>
                            </div>
                        </div>

                    </div>





                <?php  } ?>


            </div>



        <?php  } ?>
        <?php  } ?>

        </div>