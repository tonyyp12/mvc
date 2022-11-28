<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
		<link rel="stylesheet" href="assets/css/estilos.css">
		<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
	</head>
	
	<body>
		<div class="container">
		<a href="https://api.whatsapp.com/send?phone=+52993222431" class="btn-wsp" target="_blank">
	    <i class="fa fa-whatsapp icono"></i>
	</a>
			<h1 class="agencia">ESTACIONAMIENTO DE AUTOS <br> TU MEJOR OPCIÓN </h1>
			<figure class="estacionamiento">
				<img src="estacionamiento.png" alt="">
			</figure>
		
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<a href="index.php?c=vehiculos&a=nuevo" class="btn btn-primary">Agregar</a>
			
			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>Placa</th>
							<th>Marca</th>
							<th>Modelo</th>
							<th>Año</th>
							<th>Color</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["vehiculos"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["placa"]."</td>";
							echo "<td>".$dato["marca"]."</td>";
							echo "<td>".$dato["modelo"]."</td>";
							echo "<td>".$dato["anio"]."</td>";
							echo "<td>".$dato["color"]."</td>";
							echo "<td><a href='index.php?c=vehiculos&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>


			<h1 class="agencia">NOS UBICAMOS</h1>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.4397122437927!2d-89.64314693507059!3d21.015084993620896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56741390226493%3A0xfc195a99ddd2cd46!2sLindavista%20Chuburn%C3%A1%2C%20M%C3%A9rida%2C%20Yuc.!5e0!3m2!1ses!2smx!4v1669577835914!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</body>
</html>