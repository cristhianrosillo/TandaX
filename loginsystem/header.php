<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Bienvenido a TandaX</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li>
					<a href="index.php">TandaX

					</a>
				</li>
			</ul>

			<div class="nav-login">
				<?php
					if (isset ( $_SESSION ['u_id'] ) )
					{
						echo 
						'
						<form action="includes/logout.inc.php" method="POST">
						<button type="submit" name="submit">Logout</button>
						</form>
						';
					} 
					else 
					{
						echo
						'
						<form action="includes/login.inc.php" method="POST">
						<input type="text" name="uid" placeholder="Usuario / e-mail">
						<input type="password" name="pwd" placeholder="Contraseña">
						<button type="submit" name="submit">Entrar</button>
						</form>
						<a href="signup.php">Registrarme</a>
						';
					}
				?>
			</div>
		</div>
	</nav>
</header>