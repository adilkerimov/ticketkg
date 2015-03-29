<?php 

$array2 = array('№', 'Имя', 'Фамилия', 'пол');

$array = array(
	array(' ','Heigl', 'Katerine', 'female'),
	array(' ','Furtado', 'Nelly', 'female'),
	array(' ','Twain', 'Shania', 'female'),
	array(' ','Farmer', 'Mylene', 'female')
);

 

//echo array_to_csv($array);

convert_into_excel($array2,$array);

?>