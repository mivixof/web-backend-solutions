<?php

	class Zebra extends Animal
	{
		protected $Species;

		public function __construct(  $name, $sex, $health, 
$Species )
		{
			parent::__construct( $name, $sex, $health );
			
			$this->Species = $Species;
		}

		public function getSpecies()
		{
			return $this->Species;
		}

	}

?>