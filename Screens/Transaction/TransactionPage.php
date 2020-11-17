<?php
session_start();
if(isset($_SESSION['userToken']) && !empty($_SESSION['userToken'])) {
    if(isset($_GET['desconnect']) && !empty($_GET['desconnect'])) {
        $_SESSION = array();
        session_destroy();
        header('location: ../../index.php');
    }
} else {
    header('location: ../../index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
			integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" />
		<link rel="stylesheet" href="../../Styles/_fonts.css" />
		<link rel="stylesheet" href="../../Styles/header.css" />
		<link rel="stylesheet" href="Transaction.css" />
		<title>Transações</title>
	</head>
	<body>
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
						<li class="nav-item active">
							<a class="nav-link h5" href="#">Transações</a>
						</li>
						<li class="nav-item">
							<a class="nav-link h5" href="../History/History.php">Histórico</a>
						</li>
						<li class="nav-item">
							<a class="nav-link h5" href="#">Dashboard</a>
						</li>
						<li class="nav-item">
							<a class="nav-link h5" href="../Profile/Profile.php">Perfil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link h5" href="TransactionPage.php?desconnect=true">Desconectar</a>
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
			</section>
		</nav>

		<section class="card-container">
			<div
				class="card"
				onmouseover="ChangeLabelCards('#435BE2', 'receita')"
				onmouseout="ChangeLabelCards('#212529', 'receita')"
				onclick="OpenForm('formCategory')"
			>
				<i class="fas fa-money-check fa-2x receita"></i>
				<p class="h3 receita">Adicionar Categorias</p>
			</div>
			<div
				class="card"
				onmouseover="ChangeLabelCards('#435BE2', 'categoria')"
				onmouseout="ChangeLabelCards('#212529', 'categoria')"
				onclick="OpenForm('formRece')"
			>
				<i class="fas fa-money-check fa-2x colorIconCard categoria"></i>
				<p class="h3 categoria">Adicionar Receita</p>
			</div>
			<div
				class="card"
				onmouseover="ChangeLabelCards('#435BE2', 'despesa')"
				onmouseout="ChangeLabelCards('#212529', 'despesa')"
				onclick="OpenForm('formDesp')"
			>
				<i class="fas fa-money-check fa-2x colorIconCard despesa"></i>
				<p class="h3 despesa">Adicionar Despesa</p>
			</div>
		</section>

		<div class="form-container">
			<form action="TransactionPage.php" method="post" id="formCategory" class="form-register">
				<label for="nameCategory">Nome da categoria</label>
				<input type="text" class="form-control" id="nameCategory" placeholder="Compra no supermercado" name="nameCategory" />
				<label for="typeCategory">Tipo da categoria</label>
				<select class="form-control cursor" name="typeCategory">
					<option hidden>Tipos</option>
					<option value="R">Receita</option>
					<option value="D">Despesa</option>
				</select>
				<label for="classCategory">Classe da categoria</label>
				<select class="form-control cursor" name="classCategory">
					<option hidden>Classes</option>
					<option value="alimentacao">Alimentação</option>
					<option value="educação">Educação</option>
					<option value="lazer">Lazer</option>
					<option value="trabalho">Trabalho</option>
					<option value="transporte">Transporte</option>
					<option value="vestuário">Vestuário</option>
					<option value="outros">Outros</option>
				</select>
				<div class="container-btn">
					<button type="button" class="btn btn-light" onclick="CloseForm()">Fechar</button>
					<button type="submit" class="btn btn-info">Criar</button>
				</div>
			</form>

			<form action="TransactionPage.php" method="post" id="formDesp" class="form-register">
				<label for="typeDesp">Nome da despesa</label>
				<select class="form-control cursor" name="typeDesp">
					<option hidden>Nomes</option>
					<option value="5">Compra de supermercado</option>
					<option value="D">Y</option>
				</select>
				<label for="valueDesp">Valor de despesa</label>
				<input
					type="text"
					class="form-control"
					id="valueDesp"
					name="valueDesp"
					placeholder="Compra no supermercado"
					onchange="MoneyMask('valueDesp')"
				/>
				<div class="container-btn">
					<button type="button" class="btn btn-light" onclick="CloseForm()">Fechar</button>
					<button type="submit" class="btn btn-info">Criar</button>
				</div>
			</form>

			<form action="TransactionPage.php" method="post" id="formRece" class="form-register">
				<label for="typeRece">Nome da receita</label>
				<select class="form-control cursor" name="typeRece">
					<option hidden>Nomes</option>
					<option value="R">X</option>
					<option value="D">Y</option>
				</select>
				<label for="valueRece">Valor de receita</label>
				<input type="text" class="form-control" id="valueRece" name="valueRece" placeholder="Salário" onchange="MoneyMask('valueRece')" />
				<div class="container-btn">
					<button type="button" class="btn btn-light" onclick="CloseForm()">Fechar</button>
					<button type="submit" class="btn btn-info">Criar</button>
				</div>
			</form>

			<div class="container-table" id="table-category">
					<table>
						<tr class="trCate">
							<th>ID</th>
							<th>Nome</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th></th>
						</tr>
						<tr class="trCate">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>Receita</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trCate">
							<td>2</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>Receita</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trCate">
							<td>3</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>Receita</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
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
	<script src="StyleFunctions.js" type="text/javascript"></script>
	<script src="../../JS/Masks.js"></script>
</html>
