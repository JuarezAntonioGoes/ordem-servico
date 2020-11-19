<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title> Sistema de cadastro de clientes</title>
	<link rel="stylesheet" href="../includes/materialize.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="../includes/materialize.min.js"></script>
	<script src="../includes/jquery-3.4.1.min.js"></script>
	<script src="../includes/javascript.js"></script>


</head>
<?php
// Conexão
require_once '../conexao_banco/db_connect.php';


// Sessão
session_start();

$_SESSION['logado'] = 0;

// Botão enviar
if (isset($_POST['btn-entrar'])) :
	$erros = array();
	$login = mysqli_escape_string($connect, $_POST['login']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);


	if (empty($login) or empty($senha)) :
		$erros[] = "<li style:'margin-top:1rem;'> O campo login/senha precisa ser preenchido </li>";
	else :
		// 105 OR 1=1 
		// 1; DROP TABLE teste

		$sql = "SELECT login FROM tela_login WHERE login = '$login'";
		$resultado = mysqli_query($connect, $sql);

		if (mysqli_num_rows($resultado) > 0) :
			$senha = md5($senha);

			$sql = "SELECT * FROM tela_login WHERE login = '$login' AND senha = '$senha'";



			$resultado = mysqli_query($connect, $sql);

			if (mysqli_num_rows($resultado) == 1) :
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($connect);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id'];

				$_SESSION['admin'] = $dados['id'];


				header('Location: ../menu/menu.php');
			else :
				$erros[] = "<li style:'margin-top:1rem;'> Usuário e senha não conferem </li>";
			endif;

		else :
			$erros[] = "<li style:'margin-top:1rem;'> Usuário inexistente </li>";
		endif;

	endif;

endif;
?>
<style>
	* {
		font-family: 'Roboto', sans-serif;
		font-size: 20px;
	}

	.header-site {
		background-image: url(escritorio.jpg);
		background-position: center top;
		background-repeat: no-repeat;
		background-size: cover;
		background-attachment: fixed;
		color: white;
		padding-top: 300px;
		padding-bottom: 300px;
	}

	.content-site {
		padding-top: 200px;
		padding-bottom: 200px;
	}

	.img-site {
		background-image: url(escritorio.jpg);
		background-position: center top;
		background-repeat: no-repeat;
		background-size: cover;
		background-attachment: fixed;
		color: white;
		padding-top: 200px;
		padding-bottom: 200px;
	}

	.footer-site {
		background-color: #333333;
		color: white;
		padding-top: 50px;
		padding-bottom: 50px;
	}

	header {
		height: 100vh;
		width: 100vw;
		background: url('./img-fundo-login.jpg') no-repeat center top fixed;
		background-size: 100%;
	}

	#tela-login {
		margin-top: 25vh;
		transition: transform .2s;
	}

	#tela-login:hover {
		transform: scale(1.01);
	}

	.caixa-texto {
		background-color: rgba(54, 54, 55, 0.9);
		border-radius: 4px;
		padding: 1rem;
		transition: transform .4s;
	}

	.caixa-texto:hover {
		transform: scale(1.1);
	}

	button[name="btn-entrar"] {
		background-color: #333;
	}

	button[name="btn-entrar"]:hover {
		background-color: turquoise;
	}

	.contato {
		background-color: #66bb6a;
		color: white;
		font-weight: 600;
		font-size: 1.2rem;
		padding: .8rem;
		border-radius: .5rem;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.contato:hover {
		text-decoration: none;
		color: white;
		background-color: #81c784;
	}
</style>


<body>

	<header class="row">
		<div class="col container s1 m1 l4 "></div>
		<div class="col container s12 m12 l4 ">
			<div class="card" style="opacity: 0.85;" id="tela-login">
				<div class="card-action   grey darken-4 white-text">
					<h1 class="center" style="opacity: 0.5;"> LOGIN </h1>
				</div>
				<div class="card-content">
					<div class="form-field">
						<?php
						if (!empty($erros)) :
							foreach ($erros as $erro) :
								echo "<div class='btn '>$erro</div>";
							endforeach;
						endif;
						?>

						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
							<div class="form-field">
								Username: <input type="text" name="login" placeholder="Nome do usuário" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>"><br>
							</div><br>
							<div class="form-field">
								Senha: <input type="password" name="senha" placeholder="***************************" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>"><br>
							</div><br>
							<button type="submit" name="btn-entrar" class="btn-large" style="width:100%;"> Entrar </button>
						</form>
					</div>
				</div>
			</div>

		</div>
		<div class="col container s1 m1 l4 "></div>
	</header>


	<section class="header-site">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 caixa-texto">
					<h1 class="text-center">Bem Vindo!</h1>
					<p class="text-center">Projeto criado com a intenção de facilitar a gestão de serviço interno de uma empresa gerando praticidade e retorno financeiro.</p>
					<p class="text-center">
						<br>
						<a href="" class="contato">ENTRE EM CONTATO CONOSCO <img src="./whatsapp.png" alt="whatsapp" width="40px"></a>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="content-site">
		<div class="container">
			<div class="row" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
				<div class="col-xs-12" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
					<h1 class="text-center">Bem Vindo!</h1>
					<p class="text-center">
						<p class="text-center">A ordem de serviço nada mais é do que um documento que formaliza um serviço que está sendo prestado. </p>
					</p>
				</div>
			</div>
			<div class="row" style="display: flex; justify-content: center;">
				<div class="col-sm-4">

					<div class="thumbnail">

						<img src="imagem1.jpg" class="img-fluid img-thumbnail" alt="">

						<div class="caption text-center"></div>

						<h3 >Importância</h3>

						<p>Por meio da OS, é possível controlar o tempo, mão-de-obra e até mesmo recursos investidos na prestação de um serviço.
						</p>

					</div>

				</div>

				<div class="col-sm-4">

					<div class="thumbnail">

						<img src="imagem2.jpg" class="img-fluid img-thumbnail" alt="">

						<div class="caption text-center"></div>

						<h3 >Planejamento</h3>


						<p>Para garantir a realização do serviço de forma objetiva para a empresa e satisfatória para o cliente, é essencial iniciar um planejamento minucioso baseado em uma OS detalhada.
						</p>

					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="img-site">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 caixa-texto">
					<h1 class="text-center">Status do pedido!</h1>
					<p class="text-center">É possível o cliente saber como está o andamento em relação ao serviço solicitado.</p>
					<p class="text-center">
						<a href="../cliente/index.php" class="btn btn-danger">Ver status do pedido</a>
					</p>
				</div>
			</div>

		</div>
	</section>

	<section class="footer-site">
		<div class="container">
			<div class="row">

				<div class="col-sm-12 text-center">
					<p style="display: flex; align-items: center; justify-content: center;">JobManager 2020 &copy;<small>opyright</small> </p>
				</div>
			</div>
		</div>
	</section>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>