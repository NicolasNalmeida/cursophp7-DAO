<?php 

	require_once ("config.php");

	$fulano = new Usuario();

	$fulano->loadById(15);

	echo $fulano;