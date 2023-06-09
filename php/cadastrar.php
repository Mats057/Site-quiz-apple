<?php
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_DEFAULT);
if ($btnCadUsuario) {
	include_once 'conexao.php';
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);

	$erro = false;

	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);

	if (in_array('', $dados)) {
		$erro = true;
		$_SESSION['msg'] = "Necessário preencher todos os campos";
	} elseif ((strlen($dados['senha'])) < 6) {
		$erro = true;
		$_SESSION['msg'] = "A senha deve ter no minímo 6 caracteres";
	} elseif (stristr($dados['senha'], "&")) {
		$erro = true;
		$_SESSION['msg'] = "Caracter ( & ) utilizado na senha é inválido";
	} else {
		$result_usuario = "SELECT id FROM usuarios WHERE usuario='" . $dados['usuario'] . "'";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if (($resultado_usuario) and ($resultado_usuario->num_rows != 0)) {
			$erro = true;
			$_SESSION['msg'] = "Este usuário já está sendo utilizado";
		}

		$result_usuario = "SELECT id FROM usuarios WHERE email='" . $dados['email'] . "'";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if (($resultado_usuario) and ($resultado_usuario->num_rows != 0)) {
			$erro = true;
			$_SESSION['msg'] = "Este e-mail já está cadastrado";
		}
	}

	if (!$erro) {
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

		$result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
						'" . $dados['nome'] . "',
						'" . $dados['email'] . "',
						'" . $dados['usuario'] . "',
						'" . $dados['senha'] . "'
						)";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if (mysqli_insert_id($sql)) {
			$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
			sleep(2);
			header("Location: ../login.php");
		} else {
			$_SESSION['msg'] = "Erro ao cadastrar o usuário";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastrar Usuário</title>
	<link rel="stylesheet" href="../css/estilo.css" type="text/css">
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
	<script src="../js/dark.js" defer></script>

</head>

<body>
	<header>
		<img id="logo" src="../img/logo.png" alt="Logo da Apple">
		<div id="options">
			<a href="../index.php" class="title2">
				Sobre a Apple
			</a>
			<a href="../formp.php" class="title2">
				Teste Apple
			</a>
			<a href="../login.php" class="title2">
				Logar
			</a>
			<h7 id="title">Cadastrar</h7>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="form-signin">
				<h2 id="cad">Formulário de Cadastro</h2>
				<form method="POST" action="">
					<fieldset>
						</p><label class="label">Nome:</label></p>
						<input type="text" name="nome" placeholder="Digite o nome e o sobrenome" class="form-control"><br>

						<label class="label"">E-mail:</label>
						<p>
							<input type=" email" name="email" placeholder="Digite o seu e-mail" class="form-control"><br>

							<label class="label">Usuário:</label>
							<p>
								<input type="text" name="usuario" placeholder="Digite o usuário" class="form-control"><br>

								<label class="label">Senha:</label>
							<p>
								<input type="password" name="senha" placeholder="Digite a senha" class="form-control"><br>

								<input type="submit" name="btnCadUsuario" value="Cadastrar" id="btnConfirm" /><br><br>
								<?php
								if (isset($_SESSION['msg'])) {
									echo '<div class="erro-msg" style="
					color: red;
					background-color: yellow;
					border-radius: 5px;
					font-weight: bold;
					padding: 10px;
					border: 1px solid red;
					font-size: 16px;
					text-align: center;">' . $_SESSION['msg'] . '</div>';
									unset($_SESSION['msg']);
								}
								?>


							<div class="row text-center" style="margin-top: -20px;">
								<p class="label"> Lembrou? <a href="../login.php" id="criar-conta" class="text-center">Clique aqui</a> para logar</p>
							</div>
					</fieldset>
				</form>
			</div>
		</div>
	</main>
</body>

</html>