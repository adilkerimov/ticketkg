<?php $array = array(
	array('Last Name', 'First Name', 'Gender'),
	array('Furtado', 'Nelly', 'female'),
	array('Twain', 'Shania', 'female'),
	array('Farmer', 'Mylene', 'female')
);

 

//echo array_to_csv($array);

array_to_csv($array, 'toto.csv');

?>