<?php 
/*function for class detect*/
	spl_autoload_register(function($className){
	 $path = strtolower($className).".php";
	if (file_exists($path)) {
		# code...
		require_once($path);
	}else{
		echo "File $path is not found.";
	}
})

	$control = new Control; 
	$control->processApi();
 ?>