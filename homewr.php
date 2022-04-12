<?php
	abstract class Figure2D //abstraction
	{
		abstract public function getSquare();
		abstract public function getPerimeter();
		public function getRatio()
		{
			return $this->getSquare() / $this->getPerimeter();
		}
	}
	
		class Quadrate extends Figure2D //inheritance
	{
		private $a;
		
		public function __construct($a)
		{
			$this->a = $a;
		}
		
		public function getSquare()
		{
			return $this->a * $this->a;
		}
		
		public function getPerimeter()
		{
			return 4 * $this->a;
		}
	}
	
	class Rectangle extends Figure2D
	{
		private $a, $b;
		
		public function __construct($a, $b)
		{
			$this->a = $a;
			$this->b = $b;
		}
		
		public function getSquare()
		{
			return $this->a * $this->b;
		}
		
		public function getPerimeter()
		{
			return 2 * $this->a + 2* $this->b;
		}
	}
?>        

<?php
	$quadrate = new Quadrate(5); //object
	echo "Площа квадрата ".$quadrate->getSquare()."\n";
	echo "Периметр квадрата ".$quadrate->getPerimeter()."\n";
	
	$rectangle = new Rectangle(2,3);
	echo "Площа прямокутника ".$rectangle->getSquare()."\n";
	echo "Периметр прямокутника ".$rectangle->getPerimeter()."\n";
	
	echo "Відношення площі і периметру ".$rectangle->getRatio()."\n";
	
	//$rectangle->a=2; cannot access private property (encapsulation)
?>