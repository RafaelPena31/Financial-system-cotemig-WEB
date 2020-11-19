<?php
header("Content-type:text/html; charset=utf8");

session_start();

require_once "../../Classes/Registration.php";

$Registration = new Registration();

if(isset($_SESSION['userToken']) && !empty($_SESSION['userToken'])) {

	/* Jan */
	$ListingExpenseJan = $Registration->ListingRegistration('D', 'jan');
	$ListingReceiveJan = $Registration->ListingRegistration('R', 'jan');
	/* Fev */
	$ListingExpenseFev = $Registration->ListingRegistration('D', 'fev');
	$ListingReceiveFev = $Registration->ListingRegistration('R', 'fev');
	/* Mar */
	$ListingExpenseMar = $Registration->ListingRegistration('D', 'mar');
	$ListingReceiveMar = $Registration->ListingRegistration('R', 'mar');
	/* Abr */
	$ListingExpenseAbr = $Registration->ListingRegistration('D', 'abr');
	$ListingReceiveAbr = $Registration->ListingRegistration('R', 'abr');
	/* Mai */
	$ListingExpenseMai = $Registration->ListingRegistration('D', 'mai');
	$ListingReceiveMai = $Registration->ListingRegistration('R', 'mai');
	/* Jun */
	$ListingExpenseJun = $Registration->ListingRegistration('D', 'jun');
	$ListingReceiveJun = $Registration->ListingRegistration('R', 'jun');
	/* Jul */
	$ListingExpenseJul = $Registration->ListingRegistration('D', 'jul');
	$ListingReceiveJul = $Registration->ListingRegistration('R', 'jul');
	/* Ago */
	$ListingExpenseAgo = $Registration->ListingRegistration('D', 'ago');
	$ListingReceiveAgo = $Registration->ListingRegistration('R', 'ago');
	/* Set */
	$ListingExpenseSet = $Registration->ListingRegistration('D', 'set');
	$ListingReceiveSet = $Registration->ListingRegistration('R', 'set');
	/* Out */
	$ListingExpenseOut = $Registration->ListingRegistration('D', 'out');
	$ListingReceiveOut = $Registration->ListingRegistration('R', 'out');
	/* Nov */
	$ListingExpenseNov = $Registration->ListingRegistration('D', 'nov');
	$ListingReceiveNov = $Registration->ListingRegistration('R', 'nov');
	/* Dez */
	$ListingExpenseDez = $Registration->ListingRegistration('D', 'dez');
	$ListingReceiveDez = $Registration->ListingRegistration('R', 'dez');

    if(isset($_GET['desconnect']) && !empty($_GET['desconnect'])) {
        $_SESSION = array();
        session_destroy();
        header('location: ../../index.php');
    }
} else {
    header('location: ../../index.php');
}

	if(isset($_GET['confirmUpdate'])){
        $Registration->UpdateRegistration();
    }

    if(isset($_GET['confirmDelete'])){
        $Registration->DeleteRegistration();
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Histórico</title>
		<link
			rel="stylesheet"
			href="History.php?month=ps://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
			integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="History.php?month=ps://use.fontawesome.com/releases/v5.15.1/css/all.css" />
		<link rel="stylesheet" href="History.php?month=../Styles/_fonts.css" />
		<link rel="stylesheet" href="History.php?month=../Styles/header.css" />
		<link rel="stylesheet" href="History.php?month=tory.css" />
	</head>
	<body>
	
	<!-- Modal Editar -->
	<div
			class="modal fade"
			id="editar"
			data-backdrop="static"
			data-keyboard="false"
			tabindex="-1"
			aria-labelledby="staticBackdropLabel"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Editar</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="History.php" method="POST">
							<label class="LabelModal" for="ClassInput">Class</label>
							<input type="ClassEditar" class="form-control" id="ClassInput" name="ClassEditart"/><hr>
							<label class="LabelModal" for="TipoInput">Tipo</label>
							<input type="TipoEditar" class="form-control" id="TipoInput" name="TipoEditart"/><hr>
							<label class="LabelModal" for="ValorInput">Valor</label>
							<input type="ValorEditar" class="form-control" id="ValorInput" name="ValorEditart"/><hr>
							<label class="LabelModal" for="DataInput">Data</label>
							<input type="DataEditar" class="form-control" id="DataInput" name="DataEditart"/>
							<button type="submit" class="btn btn-info btn-modal-submit">Alterar</button>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal Editar -->

		<!-- Start nav -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<section class="nav-content">
				<div class="menu-btn">
					<a class="navbar-brand" href="History.php?month=
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
							<a class="nav-link h5" href="History.php?month=Transaction/TransactionPage.php">Transações</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link h5" href="History.php?month=Histórico</a>
						</li>
						<li class="nav-item">
							<a class="nav-link h5" href="History.php?month=Dashboard</a>
						</li>
						<li class="nav-item">
							<a class="nav-link h5" href="History.php?month=Profile/Profile.php">Perfil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link h5" href="History.php?month=tory.php?desconnect=true">Desconectar</a>
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
					<a class="carousel-control-prev" href="History.php?month=rouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="History.php?month=rouselExampleControls" role="button" data-slide="next">
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
					<h3>Receitas</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<a href="History.php?month=jan" class="btn btn-light jan" onclick="ChangeMonth('jan')">1</button>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
						<?php if ($ListingRegistration) :
                            foreach ($ListingRegistration as $registrar) : ?>
						<tr class="trRece">
							<td><?php echo $registrar->id ?></td>
							<td><?php echo $registrar->class ?></td>
							<td><?php echo $registrar->type ?></td>
							<td><?php echo $registrar->value ?></td>
							<td><?php echo $registrar->data ?></td>
							<td>
								<a href="History.php?month=tory.php?confirmUpdate=<?php echo $registrar->id ?>" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></a>
								<a href="History.php?month=tory.php?confirmDelete=<?php echo $registrar->id ?>" class="btn btn-danger btn-table" data-toggle="modal" data-target="#deletar"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
						<?php endforeach ; ?>
                        <?php else : ?>
						<tr>
                            <td colspan="5" id="blockedRegistrationReceita">Nenhuma receita cadastrada!!</td>
                        </tr>
                        <?php endif; ?>			

				<div class="title-table">
					<h3>Despesas</h3>
				</div>

				<nav class="month-menu">
					<label for="container-btn">Selecione o mês:</label>
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" name="container-btn" id="container-btn">
						<div class="btn-group mr-2" role="group" aria-label="First group">
							<a href="History.php?month=jan" class="btn btn-light jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
						<?php if ($ListingRegistration) :
                            foreach ($ListingRegistration as $registrar) : ?>
						<tr class="trDesp">
							<td><?php echo $registrar->id ?></td>
							<td><?php echo $registrar->class ?></td>
							<td><?php echo $registrar->type ?></td>
							<td><?php echo $registrar->value ?></td>
							<td><?php echo $registrar->data ?></td>
							<td>
								<a href="History.php?month=tory.php?confirmUpdate=<?php echo $registrar->id ?>" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></a>
								<a href="History.php?month=tory.php?confirmDelete=<?php echo $registrar->id ?>" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
						<?php endforeach ; ?>
                        <?php else : ?>
						<tr>
                            <td colspan="5" id="blockedRegistrationDespesa">Nenhuma despesa cadastrada!!</td>
                        </tr>
                        <?php endif; ?>		
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-light fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
		  						<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-light fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-light mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-light mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
							<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-light abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-light abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							    <button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-light maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-light maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-light jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-light jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-light jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-light jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-light ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-light ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-light set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-light set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-light out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-light out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-light nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-light nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-secondary dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-light dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
							<a href="History.php?month=jan" class="btn btn-secondary jan" onclick="ChangeMonth('jan')">1</a>
							<a href="History.php?month=fev" class="btn btn-secondary fev" onclick="ChangeMonth('fev')">2</a>
							<a href="History.php?month=mar" class="btn btn-secondary mar" onclick="ChangeMonth('mar')">3</a>
							<a href="History.php?month=abr" class="btn btn-secondary abr" onclick="ChangeMonth('abr')">4</a>
							<a href="History.php?month=mai" class="btn btn-secondary maio" onclick="ChangeMonth('mai')">5</a>
							<a href="History.php?month=jun" class="btn btn-secondary jun" onclick="ChangeMonth('jun')">6</a>
							<a href="History.php?month=jul" class="btn btn-secondary jul" onclick="ChangeMonth('jul')">7</a>
							<a href="History.php?month=ago" class="btn btn-secondary ago" onclick="ChangeMonth('ago')">8</a>
							<a href="History.php?month=set" class="btn btn-secondary set" onclick="ChangeMonth('set')">9</a>
							<a href="History.php?month=out" class="btn btn-secondary out" onclick="ChangeMonth('out')">10</a>
							<a href="History.php?month=nov" class="btn btn-secondary nov" onclick="ChangeMonth('nov')">11</a>
							<a href="History.php?month=dez" class="btn btn-light dez" onclick="ChangeMonth('dez')">12</a>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
								<button type="button" class="btn btn-info btn-table" data-toggle="modal" data-target="#editar"><i class="fas fa-edit"></i></button>
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
