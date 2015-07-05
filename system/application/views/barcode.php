<?php 
	

	//header("Content-Type: image/png");
	$params['data'] = 'Привет от сайта Ticketland.kg!';
	$params['level'] = 'H';
	$params['size'] = 5;
	$params['savename'] = FCPATH.'img/qr/tes'.date ("Hi").'.png';
	$this->ciqrcode->generate($params); 
	echo '<img src="'.base_url().'img/qr/tes'.date ("Hi").'.png" /><br><h1>Работает!</h1>';
	?>
