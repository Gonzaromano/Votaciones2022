    <!--Scripts-->
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4e3abf6c3a.js" crossorigin="anonymous"></script>
    -->
    <div class="container p-4">
        <div class="row">   
            <div class="col-md-4">
                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?=$_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset(); } ?>
                <div class="row card card-body">
                    <form action="guardar.php" method="POST">                    
                        <center><div class="form-group"><h2>Formulario Registro</h2><br></div></center>
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre completo" autofocus><br>
                            </div>
                            <div class="form-group">
                                <input type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido"><br>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="curso">
                                <option disabled selected="">Ingrese su curso</option>
                                <option>1.1</option>
                                <option>1.2</option>
                                <option>1.3</option>
                                <option>1.4</option>
                                <option>1.5</option>
                                <option>1.6</option>
                                <option>2.1</option>
                                <option>2.2</option>
                                <option>2.3</option>
                                <option>2.4</option>
                                <option>2.5</option>
                                <option>3.1</option>
                                <option>3.2</option>
                                <option>3.3</option>
                                <option>3.4</option>
                                <option>3.5</option>
                                <option>3.6</option>
                                <option>4.1</option>
                                <option>4.2</option>
                                <option>4.3</option>
                                <option>4.4</option>
                                <option>4.5</option>
                                <option>5.1</option>
                                <option>5.2</option>
                                <option>5.3</option>
                                <option>5.4</option>
                                <option>5.5</option>
                                <option>6.1</option>
                                <option>6.2</option>
                                <option>6.3</option>
                                <option>6.4</option>
                                <option>6.5</option>
                                <option>7.1</option>
                                <option>7.2</option>
                                <option>7.3</option>
                                <option>7.4</option>
                                <option>7.5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <br><input type="number" min="11" max="999" name="edad" class="form-control" placeholder="Ingrese su edad"><br>
                            </div>
                            <div class="form-group">
                                <input type="number" max="99999999" min="10000000" name="dni" class="form-control" placeholder="Ingrese su D.N.I"><br>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="genero">
                                <option disabled selected="">Seleccione su género</option>
                                <option>Masculino</option>
                                <option>Femenino</option>
                                <option>No Binario</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <br><input type="number" min="1000000000" max="9999999999" name="tel" class="form-control" placeholder="Ingrese su número de telefono">
                            </div>
                            <br>
                            <center><input type="submit" class="btn btn-success btn-block" name="boton" value="REGISTRAR"></center> 
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombres</th>
                            <th>Apellido</th>
                            <th>Curso</th>
                            <th>Edad</th>
                            <th>D.N.I</th>
                            <th>Genero</th>
                            <th>Telefono</th>
                            <th>Editar/Eliminar</th>
                        </tr>
                    </thead> 
                    <tbody> 
                        <?php
                            $consult = "SELECT * FROM registros";
                            $cargas = $conex->query($consult);

                                while ($row = mysqli_fetch_array($cargas)) { ?>
                                   <tr>
                                        <td><?php echo $row ['id'] ?></td>
                                        <td><?php echo $row ['nombres'] ?></td>
                                        <td><?php echo $row ['apellido'] ?></td>
                                        <td><?php echo $row ['curso'] ?></td>                                        
                                        <td><?php echo $row ['edad'] ?></td>
                                        <td><?php echo $row ['dni'] ?></td>
                                        <td><?php echo $row ['genero'] ?></td>
                                        <td><?php echo $row ['tel'] ?></td>
                                        <td>
                                            <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a href="eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                   </tr>
                                <?php } ?>
                        
                    </tbody>
                </table>
            </div>
    </div>
</body>
</html>