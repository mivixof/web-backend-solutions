<?php 


class HTMLBuilder
{

	protected $header 	;
	protected $body 		;
	protected $footer 	;



		public function getHeader()
		{
			include "html\header.partial.php";
		}
		public function getBody	()
		{
			include "html\body.partial.php";
		}
		public function getFooter()
		{
			include "html\footer.partial.php";
			/*foreach (new RecursiveDirectoryIterator(js) as $filename)
			{
			       echo  '<script type="text/javascript" src="js/'. $filename .'"></script>"' ;

			}*/

		}		
		public function __construct($header, $body, $footer)
		{
			$this->header;
			$this->getHeader();
			$this->body	;
			$this->getBody();
			$this->footer;
			$this->getFooter();
		}

}










 ?>

