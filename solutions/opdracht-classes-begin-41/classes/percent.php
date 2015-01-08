
<?php 

/**
* 
*/
class Percent
{
	 public $absolute ;
            public $relative ;
            public $hundred ;
            public $nominal ;

	public function  __construct($new, $unit, )
	{
		$this->absolute 		=	$num->formatNumber( $new / $unit );
		$this->relative 		=	$num->formatNumber( $this->absolute -1 );
		$this->hundred 		=	$num->formatNumber( $this->absolute * 100 );
		$this->nominal 		=	'status-quo';



		if ( $this->hundred > 0)
		{
			$this->nominal	=	"positive";
		}
		elseif ( $this->hundred < 0 )
		{
			$this->nominal	=	"negative";
		}	

	}

			public function formatNumber( $number )
		{
			return number_format($number, 2, '.', ' ');
		}

}






 ?>

