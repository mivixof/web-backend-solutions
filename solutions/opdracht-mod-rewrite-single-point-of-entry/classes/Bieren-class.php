<?php

	class Bieren
	{

		public function __construct($type, $table, $id)
		{


			switch($type)
			{
				case 'insert':
				echo'<h1>insert van ' . $table . '</h1>';
					break;

				case 'delete':
				echo '<h1>delete van ' . $table . ' ' . $id . '</h1>';
					break;

				case 'update':
				echo '<h1>update van ' . $table . ' ' . $id . '</h1>';
					break;
				
				default:
				echo '<h1>Overview van ' . $table . ' ' . $id . '</h1>';

			}
		}
	}
?>