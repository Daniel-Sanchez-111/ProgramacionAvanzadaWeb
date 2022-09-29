<!DOCTYPE html>
<html>
	<head>
		<?php include "../layouts/head.template.php"; ?>
	</head>
	<body>

		<?php include "../layouts/nav.template.php"; ?>

		<!--CONTAINER-->
		<div class="container-fluid">
			
			<div class="row">

				<!--SIDEBAR-->
				<?php include "../layouts/sidebar.template.php"; ?>

				<!--CONTENT-->
				<div class="col-lg-10 col-sm-12">
					
					<!--BREAD-->
					<div class="border-bottom">
						
						<div class="row m-2">
							
							<div class="col">
								<p>Productos</p>
							</div>
							<div class="col">
								<button data-bs-toggle="modal" data-bs-target="#createProductModal" class="btn btn-info float-end">
									Añadir producto
								</button>
							</div>

						</div>

					</div>

					<!--CONTENT-->

					<div class="row">
						
						 
						
						<div class="col-md-4 col-sm-10 p-2">
							
							<div class="card mb-1" >
							  <img src="../public/img/logo.png" class="card-img-top img-fluid" alt="...">
							  <div class="card-body">
							    <h5 class="card-title text-center">
							    	Tostachos
							    </h5>
    							<h6 class="card-subtitle mb-2 text-muted text-center">
    								Botanas
    							</h6>
							    <p class="card-text">
							    	Some quick example text to build on the card title and make up the bulk of the card's content
							    </p>
							    <div class="row">
							    	<a href="#" data-bs-toggle="modal" data-bs-target="#createProductModal" class="btn btn-warning col-6">
								    	Editar
								    </a>
								    <a onclick="remove(this)" href="#" class="btn btn-danger col-6">
								    	Eliminar
								    </a> 
							    </div>
							  </div>
							</div>


						</div>

						 

					</div>

				</div>

			</div>

		</div>

		<!-- Modal -->
		<div class="modal fade" id="createProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        
		        <?php for ($i=0; $i < 6; $i++): ?>

		      	<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
				</div>

				<?php endfor; ?>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>

		<?php include "../layouts/scripts.template.php"; ?>

		<script type="text/javascript">
			function remove(target)
			{
				swal({
				  title: "Are you sure?",
				  text: "Once deleted, you will not be able to recover this imaginary file!",
				  icon: "warning",
				  buttons: true,
				  dangerMode: true,
				})
				.then((willDelete) => {
				  if (willDelete) {
				    swal("Poof! Your imaginary file has been deleted!", {
				      icon: "success",
				    });
				  } else {
				    swal("Your imaginary file is safe!");
				  }
				});
			}
		</script>

	</body>
</html>









