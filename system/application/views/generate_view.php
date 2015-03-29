<?php 

$array2 = array('id', 'day', 'nominal', 'time', 'sum'); 

$array = array();
 $arr = 1;
 for ($al = 1; $al <= 10; $al++) {
 for ($id = 1; $id <= $this->input->post('days'.$al); $id++) {
 for ($i = 1; $i <= $this->input->post('quantity'.$al); $i++) {

$array[$arr] = array(' ',$id, $this->input->post('nominal'.$al)." сом", mt_rand(00, 23).":".mt_rand(0, 5)."".mt_rand(0, 9).":".mt_rand(0, 5)."".mt_rand(0, 9),$this->input->post('nominal'.$al));

 $arr++;
 } 
 } 
 } 
$filename = "getlucky_".date('Ymd');
convert_into_excel($array2,$array,$filename);

?>