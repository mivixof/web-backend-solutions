<?php 



	/**
	* 
	*/
	class database
	{
		private $db;
		public function __construct($dbconnect)
		{
			$this->db = $dbconnect
		}


		public function querry ($querrystring , $bindings = false)
		{
			$statement = $this->db->prepare($querrystring)


		##array [name] [value]
		foreach ($bindings as $key => $value) {
			$statement->bindValue( $key, $value );
		}
		$error 	=	$statement->execute();

		}



		

			$editar 		=	array();
			while ($rows=$showeditstatement->fetch( PDO::FETCH_ASSOC))
			{
			$editar []		=	$rows;
			}


		
	}















 ?>