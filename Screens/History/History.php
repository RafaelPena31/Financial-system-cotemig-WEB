<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Histórico</title>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
			integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" />
		<link rel="stylesheet" href="../../Styles/_fonts.css" />
		<link rel="stylesheet" href="../../Styles/header.css" />
		<link rel="stylesheet" href="History.css" />
	</head>
	<body>
		<!-- Start nav -->
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
							<a class="nav-link h5" href="../Transaction/TransactionPage.html">Transações</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link h5" href="#">Histórico</a>
						</li>
						<li class="nav-item">
							<a class="nav-link h5" href="#">Dashboard</a>
						</li>
						<li class="nav-item">
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
			</section>
		</nav>

		<!-- Finish nav -->

		<!-- Start Jan -->

		<div id="main-table-jan">
			<main class="container">
				<div class="title-table">
					<h3>Receita</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-light jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trRece">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>

				<div class="title-table">
					<h3>Despesas</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-light jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trDesp">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>
			</main>
		</div>

		<!-- Finish Jan -->

		<!-- Start Fev -->

		<div id="main-table-fev">
			<main class="container">
				<div class="title-table">
					<h3>Receita</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-light fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trRece">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>

				<div class="title-table">
					<h3>Despesas</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-light fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trDesp">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>
			</main>
		</div>

		<!-- Finish Fev -->

		<!-- Start Mar -->

		<div id="main-table-mar">
			<main class="container">
				<div class="title-table">
					<h3>Receita</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-light mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trRece">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>

				<div class="title-table">
					<h3>Despesas</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-light mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trDesp">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>
			</main>
		</div>

		<!-- Finish Mar -->

		<!-- Start Abr -->

		<div id="main-table-abr">
			<main class="container">
				<div class="title-table">
					<h3>Receita</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-light abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trRece">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>

				<div class="title-table">
					<h3>Despesas</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-light abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trDesp">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>
			</main>
		</div>

		<!-- Finish Abr -->

		<!-- Start Mai -->

		<div id="main-table-mai">
			<main class="container">
				<div class="title-table">
					<h3>Receita</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-light maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trRece">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>

				<div class="title-table">
					<h3>Despesas</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-light maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trDesp">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>
			</main>
		</div>

		<!-- Finish Mai -->

		<!-- Start Jun -->

		<div id="main-table-jun">
			<main class="container">
				<div class="title-table">
					<h3>Receita</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-light jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trRece">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>

				<div class="title-table">
					<h3>Despesas</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-light jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trDesp">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>
			</main>
		</div>

		<!-- Finish Jun -->

		<!-- Start Jul -->

		<div id="main-table-jul">
			<main class="container">
				<div class="title-table">
					<h3>Receita</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-light jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trRece">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>

				<div class="title-table">
					<h3>Despesas</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-light jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trDesp">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>
			</main>
		</div>

		<!-- Finish Jul -->

		<!-- Start Ago -->

		<div id="main-table-ago">
			<main class="container">
				<div class="title-table">
					<h3>Receita</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-light ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trRece">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>

				<div class="title-table">
					<h3>Despesas</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-light ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trDesp">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>
			</main>
		</div>

		<!-- Finish Ago -->

		<!-- Start Set -->

		<div id="main-table-set">
			<main class="container">
				<div class="title-table">
					<h3>Receita</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-light set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trRece">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>

				<div class="title-table">
					<h3>Despesas</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-light set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trDesp">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>
			</main>
		</div>

		<!-- Finish Set -->

		<!-- Start Out -->

		<div id="main-table-out">
			<main class="container">
				<div class="title-table">
					<h3>Receita</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-light out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trRece">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>

				<div class="title-table">
					<h3>Despesas</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-light out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trDesp">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>
			</main>
		</div>

		<!-- Finish Out -->

		<!-- Start Nov -->

		<div id="main-table-nov">
			<main class="container">
				<div class="title-table">
					<h3>Receita</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-light nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trRece">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>

				<div class="title-table">
					<h3>Despesas</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-light nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trDesp">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>
			</main>
		</div>

		<!-- Finish Nov -->

		<!-- Start Dez -->

		<div id="main-table-dez">
			<main class="container">
				<div class="title-table">
					<h3>Receita</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-light dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trRece">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trRece">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>

				<div class="title-table">
					<h3>Despesas</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<button type="button" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</button>
							<button type="button" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</button>
							<button type="button" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</button>
							<button type="button" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</button>
							<button type="button" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</button>
							<button type="button" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</button>
							<button type="button" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</button>
							<button type="button" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</button>
							<button type="button" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</button>
							<button type="button" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</button>
							<button type="button" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</button>
							<button type="button" class="btn btn-light dez" onclick="ChangeMonth('dez')">12</button>
						</div>
					</div>
				</nav>

				<div class="container-table">
					<table>
						<tr class="trDesp">
							<th>ID</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
							<th></th>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
						<tr class="trDesp">
							<td>1</td>
							<td>Compra no supermercado</td>
							<td>Alimentação</td>
							<td>R$ 550,00</td>
							<td>14/11/2020</td>
							<td>
								<button type="button" class="btn btn-info btn-table"><i class="fas fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					</table>
				</div>
			</main>
		</div>

		<!-- Finish Dez -->
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
  <script src="History.js"></script>
</html>
