<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hola mundo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="Estilo/style.css">
	<link rel="stylesheet" href="Estilo/styleaccount.css"> <!-- Agrega el archivo CSS de estilo aquí -->
</head>
<body>
	
		<h1 class="text-center">Nintendo</h1>
	</div>

	<div class="hero-image border">
		<div class="container-sm">
			<div class="row my-5">
				<div class="col-12">
					<h3>Ingresar</h3>
					<hr>
				</div>
				<div>
					<form action="login.php" method="post" class="styled-form"> <!-- Agrega la clase "styled-form" al formulario -->
						<?php if (isset($_GET['error'])) { ?>
							<p class="error"><?php echo $_GET['error']; ?></p>
						<?php } ?>
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
							<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
							<div id="emailHelp" class="form-text">Nunca compartiremos tu correo con alguien.</div>
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">Contraseña</label>
							<input type="password" class="form-control" id="pass" name="pass">
						</div>
						<button type="submit" class="btn btn-primary">Entrar</button>
						<a href="registro.php" class="btn btn-primary">Crear una cuenta</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

<script type="text/javascript">
	function muestraselect(str) {
		var conexion;
		if (str == "") {
			document.getElementById("txtHint").innerHTML = "";
			return;
		}

		if (window.XMLHttpRequest) {
			conexion = new XMLHttpRequest();
		}

		conexion.onreadystatechange = function () {
			if (conexion.readyState == 4 && conexion.status == 200) {
				document.getElementById("div").innerHTML = conexion.responseText;
			}
		}

		conexion.open("GET", "pais.php?c=" + str, true);
		conexion.send();
	}
</script>

</html>
