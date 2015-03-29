<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Добро пожаловать на сайт Get Lucky!</title>
    <script language="javascript" src="<?=base_url();?>js/jquery-1.10.1.min.js" type="text/javascript"></script>
<link href="<?=base_url();?>styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="container">
	<h1>Саламалейкум, добро пожаловать на сайт Get Lucky!</h1>
    
	<div id="body">
        <p><ins>ID розыгрыша</ins>: <?=$rozygr['id_rozygr'];?></p>
        <p><ins>ID/Наименование компании</ins>: 
        <?php 
        $name = $rozygr['id_company'];
        $comp_name = $this->prizes_model->get_comp($name);
        echo $comp_name['company']; ?>
        </p>
        <p><ins>Дата начала розыгрыша</ins>: <?=$rozygr['start_date'];?></p>
        <p><ins>Дата окончания розыгрыша</ins>: <?=$rozygr['end_date'];?></p>
        <p><ins>Статус розыгрыша</ins>: <?=$rozygr['id_status'];?></p>
        <p><ins>Максимальное количество попыток на одного пользователя</ins>: <?=$rozygr['max_count'];?></p>   
        

<form method="post" action="<?=base_url();?>welcome/company/<?=$rozygr['id_rozygr'];?>">
    <div id="start"> 
        <p id="pMessage">
            <img src="<?=base_url();?>/img/0.gif" id="imgFailCoin" /><br/>
			<?=$info;?>
        </p>
	</div>
    <input type="text" value="<? $date = date ("Y-m-d H:i:s"); echo $date;?>" name="win_date" />
    <input type="text" value="<? $user = $this->ion_auth->user()->row(); echo $user->id;?>" name="id_user" />
	<input type="submit" value="Вали отсюда" class="submit" name="my_button" />
</form>    
    
    
    
    </div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> секунд</p>
</div>

<div>



</div>

</body>
</html>