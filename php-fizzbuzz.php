<?php
for($count=1; $count<=100; $count++){
	if($count%3 == 0 && $count%5 == 0){
		echo "FizzBuzz<br>"; 
	}
	elseif($count%3 == 0){
		echo "Fizz<br>";
	}
	elseif($count%5 == 0){
		echo "Buzz<br>";
	}else{
		echo $count . "<br>";
	}
}
?>