<?php include("db.php") ?>

<!---Asi se linkea a header, con los estilos --->
<?php include("includes/header.php") ?>

<!---Asi se linkea a footer, con los estilos --->
<?php include("includes/footer.php") ?>
	
<!---Formulario-->
<div class="container p-4">
	<div class="row">
		<div class="col-md-4">
		
		
      <?php if (isset($_SESSION['message'])) { ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
 		<?= $_SESSION['message'] ?>
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  	  <span aria-hidden="true">&times;</span>
 	 </button>
	</div>
 	<?php session_unset(); } ?>
			
				<div class="card card-body">
			<form action="guardarDatos.php" method="POST">
				<div class="form-group">
					<input type="text" name="title" class="form-control" placeholder="Tarea" autofocus>
				</div>
				<div class="form-group">
					<textarea name="descripcion" rows="2" class="form-control" placeholder="descripcion"></textarea>
				</div>
				<input type="submit" class="btn btn-success btn-block" name="guardarDatos" value="Guardar">
			</form>
			</div>
		</div>
	</div>
	<div class="row">
		</div>
	</div>
<div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Titulo</th>
            <th>Despcricion</th>
            <th>Fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
        	<?php
        	$query = "SELECT * FROM tareas";
        	$resultado_tareas = mysqli_query($conn, $query);


        	while ($row = mysqli_fetch_array($resultado_tareas)) { ?>
        		<tr>
        			<td><?php echo $row ['titulo']?></td>
        			<td><?php echo $row ['descripcion']?></td>
        			<td><?php echo $row ['FechaCreacion']?></td>
        			<td>
        				<a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
        					<i class="fas fa-marker"></i>
        				</a>
        		
        				<a href="eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                		<i class="far fa-trash-alt"></i>
        			</td>

        		</tr>
        	<?php } ?>
		</div>
	</div>
</div>
<?php include("includes/footer.php")  ?>




