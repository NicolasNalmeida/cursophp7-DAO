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

	// Insert de um Usuario
	// $aluno = new Usuario("AlunoFulano", "@L1N0");
	// $aluno->insert();
	// echo $aluno;

	// Update de usuario
	// $usuario = new Usuario();

	// $usuario->loadById(28);

	// $usuario->update("Professor", "%$##@");

	// echo $usuario;

	// Delete de usuarios
	$usuario = new Usuario();

	$usuario->loadById(28);
	$usuario->delete();
	echo $usuario;



	// $cod = 6;

	// switch ($cod) {
	// 	case 1:
	// 		// Carrega um usuário
	// 		$fulano = new Usuario();

	// 		$idUsuario = 21;
	// 		$fulano->loadById($idUsuario);

	// 		echo $fulano->listarUsuario();
	// 		break;

	// 	case 2:
	// 		// Carrega uma lista de usuarios
	// 		$lista = Usuario::getList();
			
	// 		foreach ($lista as $row) {
	// 			echo "<ul>";
	// 			foreach ($row as $key => $value) {
	// 				echo "<li>" . $key . ": " . $value . "</li>";
	// 			}
	// 			echo "</ul>";
	// 		}
	// 		break;

	// 	case 3:
	// 		// Carrega uma lista de usuarios buscando pelo login
	// 		$nomeBusca = "m";
	// 		$search = Usuario::search($nomeBusca);
	// 		foreach ($search as $row) {
	// 			echo "<ul>";
	// 			foreach ($row as $key => $value) {
	// 				echo "<li>" . $key . ": " . $value . "</li>";
	// 			}
	// 			echo "</ul>";
	// 		}
	// 		break;

	// 	case 4:
	// 		// Carrega um usuario usando um login e a senha
	// 		$login = "FulanoNasc";
	// 		$senha = "12312321";
	// 		$usuario = new Usuario();
	// 		$usuario->login($login, $senha);
	// 		$usuario->listarUsuario();

	// 		break;

	// 	case 5:
	// 		// Insert de um Usuario
	// 		$aluno = new Usuario();

	// 		$usuario = "Paulo";
	// 		$senha = "76948474";

	// 		$aluno->setDeslogin($usuario);
	// 		$aluno->setDessenha($senha);
	// 		$aluno->insert();
			
	// 		$aluno->listarUsuario();

	// 		break;

	// 	case 6:
	// 		// Update de usuario
	// 		$usuario = new Usuario();

	// 		$idUsuario = 13;
	// 		$user = "NicolasAlmeida";
	// 		$senha = "12390###12783";

	// 		$usuario->loadById($idUsuario);
	// 		$usuario->update($user, $senha);
			
	// 		$usuario->listarUsuario();

	// 		break;

	// 	default:
	// 		echo "Codigo invalido";
	// 		break;
	// }