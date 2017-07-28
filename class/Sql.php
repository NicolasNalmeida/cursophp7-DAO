<?php 

	class Sql extends PDO
	{
		private $conn;

		public function __construct()
		{
			$this->conn = new PDO("mysql:host=localhost;dbname=dpphp7", "root", "");
		}

		//$statment = declaração
		//$parameters = é ou são os parâmetros
		//setParam = faz o bindParam da chave(s) e valor(es) enviados do setParam(...)
		private function setParams($statment, $parameters = array())
		{
			foreach ($parameters as $key => $value) {
				$this->setParam($statment, $key, $value);
			}
		}

		//Função específica para fazer bind dos parâmetros
		//$statment = declaração
		//&key e $value = dados parassados do setParams(...) para poder fazero bindParam
		private function setParam($statment, $key, $value)
		{
			$statment->bindParam($key, $value);
		}

		//$rawQuery = recebe a query mysql
		//$params = um array de parâmetros que é enviado para o setParams
		//			para fazer o foreach de parâmetros que é enviado para o setParam
		//			para fazer o bindParam(...) de cada chave e valor do foreach do setParams
		//A função retorna um $stmt ----> statemente = declaração da query
		public function query($rawQuery, $params = array())
		{
			$stmt = $this->conn->prepare($rawQuery);

			$this->setParams($stmt, $params);

			$stmt->execute();

			return $stmt;
		}

		//$rawQuery = recebe a query mysql
		//$params = um array de parâmetros que é enviado para o setParams
		//			para fazer o foreach de parâmetros que é enviado para o setParam
		//			para fazer o bindParam(...) de cada chave e valor do foreach do setParams
		//$stmt = recebe o retorno $stmt da função query(...) com a Query mysql montada
		//A função retorna o $stmt com o fetchAll ----> buscar todos
		public function select($rawQuery, $params = array())
		{
			$stmt = $this->query($rawQuery, $params);

			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
	}