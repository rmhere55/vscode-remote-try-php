<?php
// 
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// class fruit {
// 	public $name;
// 	public $color;
// 	function __construct($name,$color){
// 		$this->name = $name;
// 		$this->color=$color;

// 	}
// 	public function intro (){
// 		echo "a {$this->name} and also a {$this->color}";
// 	}
	// function get_name(){
	// 	return $this->name;
	// }
	// function get_color(){
	// 	return $this->color;
	// }
// }
//  class Charry extends fruit{
// 	public function message(){
// 		echo "is cheery a fruit ";
// 	}}
// 	$cheery = new Charry("charry", "red");
// 	$cheery->message();
// 	$cheery->intro();

// }
// class Cherry extends fruit{
// 	public $weig;
// 	public function __construct($name,$color,$weig)
// 	{
// 		$this->name =$name;
// 		$this->color =$color;
// 		$this->weig =$weig;
// 	}
// 	public function intro()
// 	{
// 		echo"this is fruit is {$this->name}, the color is {$this->color} or at the end of the day {$this->weig}";
// 	}
// }
 

// $cheery = new Cherry("cherry", "bright pink",20);
// $cheery->intro();

// $stwarberry = new fruit("stwarberry","red");
// echo $stwarberry->get_name();
// echo $stwarberry->get_color();

// function __destruct(){
// 	echo"the fruit is {$this->name} ant the color is {$this->color}";
// }
// }

// $apple = new fruit("Apple", "sdfsd");


// print_r($apple);




?>


 

<html>
	<head>
		<title>Visual Studio Code Remote :: PHP</title>
	</head>
	<body>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  >
			name <input type="text" name="name">
			age <input type="text " name="age">
			<input type="submit" value="submit">
		</form>
		<?php 
		
		 echo "hyyy hlooo";	

		//  destracter
//  get and post 
// get

// if (isset($_GET["name"])|| isset($_GET["age"])){
// 	echo "hi ". $_GET['name']."<br/>";
// 	echo "your age is ". $_GET['age']."<br/>";
// 	exit();
	
// }
// post
if (isset($_POST["submit"])){
	echo "hi ". $_POST['name']."<br/>";
	echo "your age is ". $_POST['age']."<br/>";
	exit();
	} else {
		echo "we only speak english";
		
	}
	



	
		?>
		
	</body>
</html>