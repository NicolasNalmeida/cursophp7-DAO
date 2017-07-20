<?php 

	require_once ("config.php");

	// Carrega um usuário
	// $fulano = new Usuario();
	// $fulano->loadById(15);
	// echo $fulano;

	// Carrega uma lista de usuarios
	// $lista = Usuario::getList();
	// echo json_encode($lista);

	// Carrega uma lista de usuarios buscando pelo login
	// $search = Usuario::search("Al");
	// echo json_encode($search);

	// Carrega um usuario usando um login e a senha
	// $usuario = new Usuario();
	// $usuario->login("NicolasAlmeida", "3454756768");
	// echo $usuario;

	$cod = 4;

	switch ($cod) {
		case 1:
			// Carrega um usuário
			$fulano = new Usuario();
			$fulano->loadById(15);

			echo $fulano->listarUsuario();
			break;

		case 2:
			// Carrega uma lista de usuarios
			$lista = Usuario::getList();
			
			foreach ($lista as $row) {
				echo "<ul>";
				foreach ($row as $key => $value) {
					echo "<li>" . $key . ": " . $value . "</li>";
				}
				echo "</ul>";
			}
			break;

		case 3:
			// Carrega uma lista de usuarios buscando pelo login
			$nomeBusca = "m";
			$search = Usuario::search($nomeBusca);
			foreach ($search as $row) {
				echo "<ul>";
				foreach ($row as $key => $value) {
					echo "<li>" . $key . ": " . $value . "</li>";
				}
				echo "</ul>";
			}
			break;

		case 4:
			// Carrega um usuario usando um login e a senha
			$login = "FulanoNasc";
			$senha = "12312321";
			$usuario = new Usuario();
			$usuario->login($login, $senha);
			$usuario->listarUsuario();

			break;

		default:
			echo "Codigo invalido";
			break;
	}