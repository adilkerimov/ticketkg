<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* export mysql data or any kind of data in to xls format.
* @param $fields: Name of Headers 
* @param $result_array: Data to be put into excel
* @param $filename: name of download file 
* @author shankar kumar
* @return download xls file
*/

function convert_into_excel($fields=array(),$result_array=array(),$filename)
{
$headers = ''; // just creating the var for field headers to append to below
$data = ''; // just creating the var for field data to append to below
$i=0; 
foreach ($fields as $field)
{

$headers .= $field . "\t";


}
$k=1;
if($result_array)
{
foreach ($result_array as $row)
{
$line = '';
$m=1;
foreach ($row as $value)
{
if ((!isset($value)) or ($value == ""))
{
$value = "\t";
}
else
{
if($m==1)
{
$value = '"' . $k . '"' . "\t";
}
else{
$value = str_replace('"', '""', $value);
$value = '"' . $value . '"' . "\t";
}
}
$line .= $value;
$m++;
}
$data .= trim($line) . "\n";
$k++;
}

}
$data = str_replace("\r", "", $data);

header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename.xls");
echo "$headers\n$data";
}


?>