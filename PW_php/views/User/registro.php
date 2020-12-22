<div class="container p-4">

    <form method="post" action="AddUser" enctype="multipart/form-data">

        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card text-center">

                    <div class="card-header">
                        <output id="imageUser">
                            <img src="<?php echo URL . RQ ?>images/default.png" class="responsive-img">
                        </output>
                    </div>

                    <div class="card-body">
                        <div class="caption text-center">
                            <label class="btn btn-primary" for="files">Cargar Foto</label>
                            <input type="file" accept="image/*" id="files">
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xs-6 col-md-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registrar Usuario</h3>
                    </div>
                    <div class="panel-body">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <div class="bg-info" id="header">
                                        <h2 class="mb-0 t">
                                            <button class="btn btn-link text-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Ingresar Información
                                            </button>
                                        </h2>
                                    </div>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="text" placeholder="DNI" name="dni" class="form-control" value="<?php echo $model1->DNI ?? "" ?>" onkeypress="new User().ClearMessages(this)">
                                            <span id="dni" class="text-danger">
                                                <?php echo $model2->DNI ?? "" ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Nombre" name="nombre" class="form-control" value="<?php echo $model1->Nombre ?? "" ?>" onkeypress="new User().ClearMessages(this)">
                                            <span id="nombre" class="text-danger">
                                                <?php echo $model2->Nombre ?? "" ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Apellidos" name="apellido" class="form-control" value="<?php echo $model1->Apellidos ?? "" ?>" onkeypress="new User().ClearMessages(this)" >
                                            <span id="apellido" class="text-danger">
                                                <?php echo $model2->Apellidos ?? "" ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" placeholder="Email" name="email" class="form-control" value="<?php echo $model1->Email ?? "" ?>" onkeypress="new User().ClearMessages(this)" >
                                            <span id="email" class="text-danger">
                                                <?php echo $model2->Email ?? "" ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Usuario" name="user" class="form-control" value="<?php echo $model1->User ?? "" ?>" onkeypress="new User().ClearMessages(this)" >
                                            <span id="user" class="text-danger">
                                                <?php echo $model2->User ?? "" ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" placeholder="Contraseña" name="pass" class="form-control" value="<?php echo $model1->Contraseña ?? "" ?>" onkeypress="new User().ClearMessages(this)" >
                                            <span id="pass" class="text-danger">
                                                <?php echo $model2->Contra ?? "" ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" placeholder="Repetir Contraseña" name="repass" class="form-control" require  onkeypress="new User().ClearMessages(this)" >
                                            <span id="repass" class="text-danger">
                                                <?php echo $model2->Contra1 ?? "" ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Registrar</button>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-danger"></label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>

</div>