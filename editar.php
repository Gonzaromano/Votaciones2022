<?php
	include ("conex.php");
		if (isset($_GET['id'])) {
			$id= $_GET['id'];
			$query = "SELECT * FROM registros WHERE id = $id";
			$result = mysqli_query($conex, $query);
			if (mysqli_num_rows($result)== 1 ) {
				$row = mysqli_fetch_array($result);
				$title = $row ["Registro editado"];
				$description = $row ['description'];
			}

		}
?>

<?php include("includes/header.php") ?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<div class="card card-body">
				<form action="">
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
                            <center><input type="submit" class="btn btn-success btn-block" name="boton" value="Actualizar"></center> 
                    </form>
						

				</form>
			</div>
		</div>
	</div>
</div>