<?php
	//class Declaration
	class Myclass{
		//1. property
		
		//2. consturctor
		public function __construct($name,$a,$b){
			echo "Hello $name from constructor";
			echo '<br>';//breal line 
			echo 'addition';
			echo '<br>';//break line
			echo $a+$b;
			echo '<br>';//break line
		}
		//3. method
		public function getMethod($m,$n){
			echo 'Hello from method a1';
			echo '<br>';//break line
			echo 'subtract';
			echo '<br>';//break line
			echo $m-$n;
		}
	}
	//create an object of the class
	$obj=new Myclass('priyanka',50,40);
	
	//call the method
	$obj->getMethod(20,10);

	//class Declaration
	class Myclass2 extends Myclass{
		//1. property
		public $x=10;//Declaration and initialization
		public $y=20;//Declaration and initialization
		
		//2. constructor
		public function __construct(){
			echo 'Hello from constructor Myclass2';
			echo '<br>';//break line
			echo 'Addition';
			echo '<br>';//break line
			echo $this->x;//$this is an internal object
			echo '<br>';//break line	
			echo $this->y;//$this is an internal object
			echo '<br>';//break line
		}
		//3. method
		public function getMethod2($s,$y){
			echo 'Hello from method2';
			echo '<br>';//break line
			echo 'multiply';
			echo '<br>';//break line
			echo $s*$y;
			echo '<br>';//break line
		} 
		
	}
	//create an object  of the class
	$objs= new  Myclass2(50,50);
	
	//call the method
	$objs->getMethod2(30,3);
?>