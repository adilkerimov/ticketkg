<?php 
	

	//header("Content-Type: image/png");
	$params['data'] = 'Аида привет!';
	$params['level'] = 'H';
	$params['size'] = 5;
	$params['savename'] = FCPATH.'img/qr/tes'.date ("Hi").'.png';
	$this->ciqrcode->generate($params); 
	echo '<img src="'.base_url().'img/qr/tes'.date ("Hi").'.png" /><br><h1>I did it!!!</h1>';
	?>
