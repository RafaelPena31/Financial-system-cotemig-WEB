<!DOCTYPE html>
<html>
	<html lang="pt-br"></html>
	<head>
		<title>Perfil</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
			integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" />
		<link rel="stylesheet" href="../../Styles/header.css" />
		<link rel="stylesheet" href="../../Styles/_fonts.css" />
		<link rel="stylesheet" href="Profile.css" />
	</head>
	<body>
		<!-- Modal Profile -->
		<div
			class="modal fade"
			id="profile"
			data-backdrop="static"
			data-keyboard="false"
			tabindex="-1"
			aria-labelledby="staticBackdropLabel"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Seus dados</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">...</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal Profile -->

		<!-- Modal Name -->
		<div
			class="modal fade"
			id="name"
			data-backdrop="static"
			data-keyboard="false"
			tabindex="-1"
			aria-labelledby="staticBackdropLabel"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Altere o seu nome</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="Perfil.php" method="POST">
							<label for="nameInput">Digite seu nome</label>
							<input type="text" class="form-control" id="nameInput" name="nameInput" placeholder="Seu nome" />
							<button type="submit" class="btn btn-info btn-modal-submit">Alterar</button>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal Name -->

		<!-- Modal Email -->
		<div
			class="modal fade"
			id="email"
			data-backdrop="static"
			data-keyboard="false"
			tabindex="-1"
			aria-labelledby="staticBackdropLabel"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Altere seu e-mail</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="Perfil.php" method="POST">
							<label for="emailInput">Digite seu email</label>
							<input type="email" class="form-control" id="emailInput" name="emailInput" placeholder="finance@exemplo.com" />
							<button type="submit" class="btn btn-info btn-modal-submit">Alterar</button>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal Email -->

		<!-- Modal Pass -->
		<div
			class="modal fade"
			id="pass"
			data-backdrop="static"
			data-keyboard="false"
			tabindex="-1"
			aria-labelledby="staticBackdropLabel"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Altere sua senha</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="Perfil.php" method="POST">
							<label for="passInput">Digite sua senha</label>
							<input type="password" class="form-control" id="passInput" name="passInput" placeholder="*******" />
							<button type="submit" class="btn btn-info btn-modal-submit">Alterar</button>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal Pass -->

		<!-- Modal Address -->
		<div
			class="modal fade"
			id="address"
			data-backdrop="static"
			data-keyboard="false"
			tabindex="-1"
			aria-labelledby="staticBackdropLabel"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Altere seu endereço</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="Perfil.php" method="POST">
							<label for="addressInput">Digite seu endereço</label>
							<textarea class="form-control" id="addressInput" name="addressInput"></textarea>
							<button type="submit" class="btn btn-info btn-modal-submit">Alterar</button>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal Address -->

		<!-- Modal Phone -->
		<div
			class="modal fade"
			id="phone"
			data-backdrop="static"
			data-keyboard="false"
			tabindex="-1"
			aria-labelledby="staticBackdropLabel"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Altere seu telefone</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="Perfil.php" method="POST">
							<label for="phoneInput">Digite seu telefone</label>
							<input type="tel" class="form-control" id="phoneInput" name="phoneInput" placeholder="(xx) xxxxx-xxxx" />
							<button type="submit" class="btn btn-info btn-modal-submit">Alterar</button>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal Phone -->

		<!-- Modal Delete -->
		<div
			class="modal fade"
			id="delete"
			data-backdrop="static"
			data-keyboard="false"
			tabindex="-1"
			aria-labelledby="staticBackdropLabel"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Deletar sua conta</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">...</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal Delete -->

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<section class="nav-content">
				<div class="menu-btn">
					<a class="navbar-brand" href="#">
						<i class="fas fa-comment-dollar fa-lg"></i>
						Finanças
					</a>
					<button
						class="navbar-toggler"
						type="button"
						data-toggle="collapse"
						data-target="#navbarColor02"
						aria-controls="navbarColor02"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="navbarColor02">
					<div class="mr-auto"></div>
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link h5" href="../Transaction/TransactionPage.php">Transações</a>
						</li>
						<li class="nav-item">
							<a class="nav-link h5" href="../History/History.php">Histórico</a>
						</li>
						<li class="nav-item">
							<a class="nav-link h5" href="#">Dashboard</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link h5" href="#">Perfil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link h5" href="#">Desconectar</a>
						</li>
					</ul>
				</div>
			</section>
			<section class="money-view">
				<div id="carouselExampleControls" class="carousel" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<article class="item-money-view">
								<p class="item-money-text">Saldo: R$ 00,00</p>
							</article>
						</div>
						<div class="carousel-item">
							<article class="item-money-view">
								<p class="item-money-text">Despesa: R$ 00,00</p>
							</article>
						</div>
						<div class="carousel-item">
							<article class="item-money-view">
								<p class="item-money-text">Receita: R$ 00,00</p>
							</article>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<div class="name">
					<h1 class="title-name">Bem vindo(a): Vitória</h1>
				</div>
			</section>
		</nav>
		<div class="container">
			<article class="label-action">
				<h1 class="label-action-title">O que deseja fazer?</h1>
			</article>

			<div class="card-container-profile">
				<section class="card-profile" data-toggle="modal" data-target="#profile">
					<i class="fas fa-users fa-2x receita"></i>
					<p class="h3 receita">Visualizar dados</p>
				</section>
				<section class="card-profile" data-toggle="modal" data-target="#name">
					<i class="fas fa-file-signature fa-2x receita"></i>
					<p class="h3 receita">Alterar nome</p>
				</section>
				<section class="card-profile" data-toggle="modal" data-target="#email">
					<i class="fas fa-envelope fa-2x receita"></i>
					<p class="h3 receita">Alterar E-mail</p>
				</section>
				<section class="card-profile" data-toggle="modal" data-target="#pass">
					<i class="fas fa-unlock-alt fa-2x receita"></i>
					<p class="h3 receita">Alterar Senha</p>
				</section>
				<section class="card-profile" data-toggle="modal" data-target="#address">
					<i class="fas fa-map-marked fa-2x receita"></i>
					<p class="h3 receita">Alterar Endereço</p>
				</section>
				<section class="card-profile" data-toggle="modal" data-target="#phone">
					<i class="fas fa-phone fa-2x receita"></i>
					<p class="h3 receita">Alterar Telefone</p>
				</section>
				<section class="card-profile" data-toggle="modal" data-target="#delete">
					<i class="fas fa-trash fa-2x receita"></i>
					<p class="h3 receita">Deletar conta</p>
				</section>
			</div>
		</div>
	</body>
	<script
		src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
		crossorigin="anonymous"
	></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
		integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
		crossorigin="anonymous"
	></script>
</html>
