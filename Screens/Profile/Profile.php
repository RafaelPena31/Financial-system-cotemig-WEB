<?php
header("Content-type:text/html; charset=utf8");

session_start();
require_once "../../Classes/User.php";
$User = new User();

if(isset($_SESSION['userToken']) && !empty($_SESSION['userToken'])) {

    $UserListData = $User->ListingUserData();
    $name = '';
    $genre = '';
    $email = '';
    $address = '';
    $phone = '';
    $pass = '';
		$expense = 0;
		$recipe = 0;
		$balance = 0;

    foreach ($UserListData as $UserData) :
        $name = $UserData->name;
        $genre = $UserData->genre;
        $email = $UserData->email;
        $address = $UserData->address;
        $phone = $UserData->phone;
				$pass = $UserData->password;
				$expense = $UserData->expense;
				$recipe = $UserData->recipe;
				$balance = $UserData->balance;
        endforeach;

    if(isset($_GET['desconnect']) && !empty($_GET['desconnect'])) {
        $_SESSION = array();
        session_destroy();
        header('location: ../../index.php');
    }

    if ( (isset($_POST['nameInput']) && !empty($_POST['nameInput'])) || (isset($_POST['emailInput']) && !empty($_POST['emailInput'])) ||
        (isset($_POST['passInput']) && !empty($_POST['passInput'])) || (isset($_POST['addressInput']) && !empty($_POST['addressInput'])) ||
        (isset($_POST['phoneInput']) && !empty($_POST['phoneInput'])) ) {
            $User->UpdateUserData();
    }

    if(isset($_GET['deleteConfirm']) && !empty($_GET['deleteConfirm'])) {
        $User->DeleteUserData();
    }

} else {
    header('location: ../../index.php');
}
?>

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
					<div class="modal-body">
                        <ul class="list-group">
                            <li class="list-group-item">Nome: <?php echo $name; ?></li>
                            <li class="list-group-item">Gênero: <?php
                                if ($genre === 'M') {
                                    echo 'Masculino';
                                } elseif ($genre === 'F') {
                                    echo 'Feminino';
                                } elseif ($genre === 'O') {
                                    echo  'Outro';
                                } elseif ($genre === 'N') {
                                    echo  'Não declarado';
                                }
                            ?>
                            </li>
                            <li class="list-group-item">E-mail: <?php echo $email; ?></li>
                            <li class="list-group-item">Endereço: <?php echo $address; ?></li>
                            <li class="list-group-item">Telefone: <?php echo $phone; ?></li>
                            <li class="list-group-item pass">
                                <p>
                                    Senha:
                                    <span id="passString"> *******</span>
                                    <span id="passStringOpen" style="display: none"> <?php echo $pass; ?></span>
                                </p>
                                <button type="button" class="btn btn-outline-info nVisibleBtn" onclick="VisiblePass('visibleBtn', 'nVisibleBtn')">
                                    <i class="fas fa-eye-slash receita"></i>
                                </button>
                                <button type="button" class="btn btn-outline-info visibleBtn" onclick="VisiblePass('nVisibleBtn', 'visibleBtn')" style="display: none">
                                    <i class="fas fa-eye receita"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
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
						<form action="Profile.php" method="POST">
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
						<form action="Profile.php" method="POST">
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
						<form action="Profile.php" method="POST">
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
						<form action="Profile.php" method="POST">
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
						<form action="Profile.php" method="POST">
							<label for="phoneInput">Digite seu telefone</label>
							<input type="tel" class="form-control" id="phoneInput" name="phoneInput" placeholder="(xx) xxxxx-xxxx" oninput="PhoneMask('phoneInput')" />
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
					<div class="modal-body">
                        <p>Você tem certeza que gostaria de excluir sua conta? A exclusão é irreversível.</p>
                        <a href="Profile.php?deleteConfirm=true" class="btn btn-danger" style="width: 100%">Deletar minha conta</a>
                    </div>
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
							<a class="nav-link h5" href="../History/History.php?month=1">Histórico</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link h5" href="#">Perfil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link h5" href="Profile.php?desconnect=true">Desconectar</a>
						</li>
					</ul>
				</div>
			</section>
			<section class="money-view">
				<div id="carouselExampleControls" class="carousel" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<article class="item-money-view">
								<p class="item-money-text">Saldo: R$ <?php echo $balance; ?></p>
							</article>
						</div>
						<div class="carousel-item">
							<article class="item-money-view">
								<p class="item-money-text">Despesa: R$ <?php echo $expense; ?></p>
							</article>
						</div>
						<div class="carousel-item">
							<article class="item-money-view">
								<p class="item-money-text">Receita: R$ <?php echo $recipe; ?></p>
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
					<h1 class="title-name">Bem vindo(a): <?php echo $name; ?></h1>
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
    <script src="Profile.js" type="text/javascript"></script>
    <script src="../../JS/Masks.js" type="text/javascript"></script>
</html>
