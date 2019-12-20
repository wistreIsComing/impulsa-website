<?php require 'views/header.php'; ?>


<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <div class="card">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <h1 class="card-header">Usuarios</h1>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="card-header float-right">
                                        <a href="<?php echo RUTAADMIN; ?>/new_user.php" class="btn btn-rounded btn-warning">Nuevo Usuario</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <h1></h1>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $user) : ?>
                                            <tr>
                                                <th scope="row"><?php echo $user['user_id']; ?></th>
                                                <td><?php echo $user['user_name']; ?></td>
                                                <td><?php echo $user['user_user']; ?></td>
                                                <td>
                                                    <div class="dd-nodrag btn-group ml-auto">
                                                        <a class="btn btn-sm btn-outline-dark" href="edit.php?id=<?php echo $user['blog_id']; ?>">Edit</a>
                                                        <a class="btn btn-sm btn-outline-dark" data-toggle="modal" data-target=".bd-example-modal-lg-<?php echo $user['user_id'] ?>">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <div class="modal fade bd-example-modal-lg-<?php echo $user['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-12 row section-padding-us">
                                                                    <div class="col-md-12 col-lg-12 col-xs-12">
                                                                        <div class="container caja-de-modal">
                                                                            <center>
                                                                                <h1><?php echo $user['user_name']; ?></h1>
                                                                                <h3>¿Desea eliminar este artículo?</h3>
                                                                                <br>
                                                                                <a style="color:#fff;" class="btn btn-rounded btn-danger" href="delete.php?id=<?php echo $post['blog_id']; ?>">Eliminar arituculo</a>
                                                                                <br>
                                                                                <br>
                                                                                <a style="color:#fff;" class="btn btn-rounded btn-success" data-dismiss="modal">Cancelar</a>
                                                                            </center>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>


                                        <!-- <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            
                                            <td>
                                                <div class="dd-nodrag btn-group ml-auto">
                                                    <button class="btn btn-sm btn-outline-dark">Edit</button>
                                                    <button class="btn btn-sm btn-outline-dark">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            
                                            <td>
                                                <div class="dd-nodrag btn-group ml-auto">
                                                    <button class="btn btn-sm btn-outline-dark">Edit</button>
                                                    <button class="btn btn-sm btn-outline-dark">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr> -->


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
        </div>
    </div>
</div>

<?php require 'views/footer.php'; ?>