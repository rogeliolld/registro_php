<?php include("includes/header.php"); ?>

    
            <div class="col-7 m-auto bg-light p-5 rounded" id="frm-registro">

                <div class="d-none alert alert-dismissible fade show" role="alert" id="alerta">
                    <p id="texto-alerta"></p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" method="POST" id="registroFrm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre (*)</label>
                            <input type="text" class="form-control required" id="nombre" name="nombre" maxlength="200">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellidos">Apellidos (*)</label>
                            <input type="text" class="form-control required" id="apellidos" name="apellidos" maxlength="200">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="cedula">Cedula (*)</label>
                            <input type="number" class="form-control required" id="cedula" name="cedula" maxlength="11">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="correo">Correo (*)</label>
                            <input type="email" class="form-control required" id="correo" name="correo" maxlength="100">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="lenguaje">Lenguaje (*)</label>
                            <select id="lenguaje" class="form-control required" name="lenguaje">
                                <option selected value="">[Selecciona]</option>
                                <option value="c#">C#</option>
                                <option value="java">Java</option>
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="python">Python</option>
                            </select>
                        </div>
                    </div>

                    <button type="button" name="registar_programador" id="registar_programador" class="btn btn-primary">Registrar</button>
                    <a href='list.php' id='listado'><strong>Ver Listado</strong></a>
                </form>
            </div>
            <div class="col-9 m-auto bg-light p-5 rounded d-none" id="view-list">
                <?php include("list.php") ?>
            </div>
        </div>
    </div>
<?php include("includes/footer.php")?>