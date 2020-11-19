<?php

session_start();

require_once "../../Classes/Category.php";
require_once "../../Classes/Registration.php";

$Category = new Category();
$Registration = new Registration();

if(isset($_SESSION['userToken']) && !empty($_SESSION['userToken'])) {

	$ListingRecipe = $Category->ListingCategory("R");
	$ListingExpense = $Category->ListingCategory("D");
	
	if(isset($_GET['desconnect']) && !empty($_GET['desconnect'])) {
        $_SESSION = array();
        session_destroy();
        header('location: ../../index.php');
	}
	
	if(isset($_POST['createCategory'])){
		$Category->CreateCategory();
	}

	if(isset($_GET['confirmDelete'])){
		$Category->DeleteCategory();
	}

	if(isset($_POST['confirmUpdate'])){
		$Category->UpdateCategory();
	}

	if(isset($_POST['btnExpense'])){
		$Registration->CreateRegistration('D');
	}

	if(isset($_POST['btnReceive'])){
		$Registration->CreateRegistration('R');
	}

	if(isset($_POST['createRegistration'])){
    $Registration->CreateRegistration();
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
					<option value="Alimentação">Alimentação</option>
					<option value="Educação">Educação</option>
					<option value="Lazer">Lazer</option>
					<option value="Trabalho">Trabalho</option>
					<option value="Transporte">Transporte</option>
					<option value="Vestuário">Vestuário</option>
					<option value="Outros">Outros</option>
				</select>
				<div class="container-btn">
					<button type="button" class="btn btn-light" onclick="CloseForm()">Fechar</button>
					<button type="submit" name="createCategory" class="btn btn-info" data-toggle="modal" data-target="#Category">Criar</button>
				</div>
			</form>

			<form action="TransactionPage.php" method="post" id="formDesp" class="form-register">
				<label for="classRegistration">Nome da despesa</label>
				<select class="form-control cursor" name="classRegistration">
				<option hidden>Nomes</option>
					<?php if ($ListingExpense) :
						foreach ($ListingExpense as $categoria) : ?>
							<option value="<?php echo $categoria->id ?>"><?php echo $categoria->name ?></option>
						<?php  endforeach; ?>
					<?php endif; ?>
				</select>
				<label for="data">Escolha a data</label>
				<input type="date" class="form-control data" name="dateRegistration">
				<label for="valueRegistration">Valor de despesa</label>
				<input
					type="text"
					class="form-control"
					id="valueRegistration"
					name="valueRegistration"
					onchange="MoneyMask('valueRegistration')"
				/>
				<div class="container-btn">
					<button type="button" class="btn btn-light" onclick="CloseForm()">Fechar</button>
					<button type="submit" class="btn btn-info" name="btnExpense">Criar</button>
				</div>
			</form>

			<form action="TransactionPage.php" method="post" id="formRece" class="form-register">
				<label for="classRegistration">Nome da receita</label>
				<select class="form-control cursor" name="classRegistration">
					<option hidden>Nomes</option>
					<?php if ($ListingRecipe) :
						foreach ($ListingRecipe as $categoria) : ?>
							<option value="<?php echo $categoria->id ?>"><?php echo $categoria->name ?></option>
						<?php  endforeach; ?>
					<?php endif; ?>
				</select>
				<label for="data">Escolha a data</label>
				<input type="date" class="form-control data" name="dateRegistration">
				<label for="valueRece">Valor de receita</label>
				<input type="text" class="form-control" id="valueRece" name="valueRegistration" onchange="MoneyMask('valueRece')" />
				<div class="container-btn">
					<button type="button" class="btn btn-light" onclick="CloseForm()">Fechar</button>
					<button type="submit" class="btn btn-info" name="btnReceive">Criar</button>
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
						<?php if ($ListingRecipe) :
							foreach ($ListingRecipe as $categoriaReceita) : ?>
						<tr class="trCate">
							<td><?php echo $categoriaReceita->id ?></td>
							<td><?php echo $categoriaReceita->name ?></td>
							<td><?php echo $categoriaReceita->class ?></td>
							<td>
								<?php if($categoriaReceita->type == 'R') : ?>
									<?php echo 'Receita'; ?>
								<?php endif; ?>
							</td>
							<td>
								<button 
									type="button"
 									class="btn btn-info btn-table" 
									data-toggle="modal" 
									data-target="#CategoryR"
								>
									<i class="fas fa-edit"></i>
								</button>
								<a href="TransactionPage.php?confirmDelete=<?php echo $categoriaReceita->id ?>" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
						
						<!-- Start Update Modal -->

						<div
								class="modal fade" 
								id="CategoryR"
								data-backdrop="static"
								data-keyboard="false"
								tabindex="-1"
								aria-labelledby="staticBackdropLabel"
								aria-hidden="true"
							>
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="staticBackdropLabel">Atualize sua categoria</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
										<form action="TransactionPage.php" method="POST">
											
											<label for="updateNameCategory">Nome da categoria</label>
											<input 
												type="text" 
												class="form-control" 
												id="updateNameCategory" 
												placeholder="Exemplo: Compra no supermercado..." 
												name="updateNameCategory"
												value="<?php echo $categoriaReceita->name; ?>"
											/>

											<label for="updateTypeCategory">Tipo da categoria</label>
											<select class="form-control cursor" name="updateTypeCategory">
												<option hidden>Tipos</option>
												<option 
													value="R"
													<?php if($categoriaReceita->type == "R") { echo "selected"; } ?>	
												>
													Receita
												</option>
												<option 
													value="D"
													<?php if($categoriaReceita->type == "D") { echo "selected"; } ?>	
												>
													Despesa
												</option>
											</select>

											<label for="updateClassCategory">Classe da categoria</label>
											<select class="form-control cursor" name="updateClassCategory">
												<option hidden>Classes</option>
												<option 
													value="Alimentação" 
													<?php if($categoriaReceita->class == "Alimentação") { echo "selected"; } ?>
												>
													Alimentação
												</option>
												<option 
													value="Educação"
													<?php if($categoriaReceita->class == "Educação") { echo "selected"; } ?>	
												>
													Educação
												</option>
												<option 
													value="Lazer"
													<?php if($categoriaReceita->class == "Lazer") { echo "selected"; } ?>	
												>
													Lazer
												</option>
												<option 
													value="Trabalho"
													<?php if($categoriaReceita->class == "Trabalho") { echo "selected"; } ?>	
												>
													Trabalho
												</option>
												<option 
													value="Transporte"
													<?php if($categoriaReceita->class == "Transporte") { echo "selected"; } ?>	
												>
													Transporte
												</option>
												<option 
													value="Vestuário"
													<?php if($categoriaReceita->class == "Vestuário") { echo "selected"; } ?>	
												>
													Vestuário
												</option>
												<option 
													value="Outros"
													<?php if($categoriaReceita->class == "Outros") { echo "selected"; } ?>	
												>
													Outros
												</option>
											</select>

											<button 
												type="submit" 
												class="btn btn-info btn-modal-submit" 
												name="confirmUpdate" 
												value="<?php echo $categoriaReceita->id; ?>"
											>
												Alterar
											</button>
										</form>
										
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>

							<!-- End Update Modal -->

						<?php  endforeach ; ?>
						<?php else : ?>
						<tr>
          					<td colspan="4" id="blockedReceive">Nenhuma categoria de receita cadastrada!!</td>
        				</tr>
        				<?php endif; ?>
					</table>
				</div>

				<div class="container-table" id="table-category2">
					<table>
						<tr class="trCate">
							<th>ID</th>
							<th>Nome</th>
							<th>Classe</th>
							<th>Tipo</th>
							<th></th>
						</tr>
						<?php if ($ListingExpense) :
							foreach ($ListingExpense as $categoriaDespesa) : ?>
						<tr class="trCate">
							<td><?php echo $categoriaDespesa->id ?></td>
							<td><?php echo $categoriaDespesa->name ?></td>
							<td><?php echo $categoriaDespesa->class ?></td>
							<td>
								<?php if($categoriaDespesa->type === 'D') : ?>
									<?php echo 'Despesa'; ?>
								<?php endif; ?>
							</td>
							<td>
							<button 
								type="button"
								class="btn btn-info btn-table" 
								data-toggle="modal" 
								data-target="#CategoryD"
							>
								<i class="fas fa-edit"></i>
							</button>
								<a href="TransactionPage.php?confirmDelete=<?php echo $categoriaDespesa->id ?>" class="btn btn-danger btn-table"><i class="fas fa-trash"></i></a>
							</td>
						</tr>

						<!-- Start Update Modal -->

						<div
								class="modal fade" 
								id="CategoryD"
								data-backdrop="static"
								data-keyboard="false"
								tabindex="-1"
								aria-labelledby="staticBackdropLabel"
								aria-hidden="true"
							>
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="staticBackdropLabel">Atualize sua categoria</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
										<form action="TransactionPage.php" method="POST">
											
											<label for="updateNameCategory">Nome da categoria</label>
											<input 
												type="text" 
												class="form-control" 
												id="updateNameCategory" 
												placeholder="Exemplo: Compra no supermercado..." 
												name="updateNameCategory"
												value="<?php echo $categoriaDespesa->name; ?>"
											/>

											<label for="updateTypeCategory">Tipo da categoria</label>
											<select class="form-control cursor" name="updateTypeCategory">
												<option hidden>Tipos</option>
												<option 
													value="R"
													<?php if($categoriaDespesa->type == "R") { echo "selected"; } ?>	
												>
													Receita
												</option>
												<option 
													value="D"
													<?php if($categoriaDespesa->type == "D") { echo "selected"; } ?>	
												>
													Despesa
												</option>
											</select>

											<label for="updateClassCategory">Classe da categoria</label>
											<select class="form-control cursor" name="updateClassCategory">
												<option hidden>Classes</option>
												<option 
													value="Alimentação" 
													<?php if($categoriaDespesa->class == "Alimentação") { echo "selected"; } ?>
												>
													Alimentação
												</option>
												<option 
													value="Educação"
													<?php if($categoriaDespesa->class == "Educação") { echo "selected"; } ?>	
												>
													Educação
												</option>
												<option 
													value="Lazer"
													<?php if($categoriaDespesa->class == "Lazer") { echo "selected"; } ?>	
												>
													Lazer
												</option>
												<option 
													value="Trabalho"
													<?php if($categoriaDespesa->class == "Trabalho") { echo "selected"; } ?>	
												>
													Trabalho
												</option>
												<option 
													value="Transporte"
													<?php if($categoriaDespesa->class == "Transporte") { echo "selected"; } ?>	
												>
													Transporte
												</option>
												<option 
													value="Vestuário"
													<?php if($categoriaDespesa->class == "Vestuário") { echo "selected"; } ?>	
												>
													Vestuário
												</option>
												<option 
													value="Outros"
													<?php if($categoriaDespesa->class == "Outros") { echo "selected"; } ?>	
												>
													Outros
												</option>
											</select>

											<button 
												type="submit" 
												class="btn btn-info btn-modal-submit" 
												name="confirmUpdate" 
												value="<?php echo $categoriaDespesa->id; ?>"
											>
												Alterar
											</button>
										</form>
										
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>

							<!-- End Update Modal -->

						<?php  endforeach; ?>
						<?php else : ?>
						<tr>
          					<td colspan="4" id="blockedExpense">Nenhuma categoria de despesa cadastrada!!</td>
        				</tr>
        				<?php endif; ?>			
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
