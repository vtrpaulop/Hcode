	<?php 

	$pessoa = array(
	'nome'=>'Vitor',
	'idade'=>34
	);

	foreach ($pessoa as &$value) {

		if (gettype($value) === 'integer') $value += 10; 
			echo $value . "<br>";
		}
		


	print_r($pessoa);
	 ?>