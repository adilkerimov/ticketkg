<div class="clear"></div>
<br />
	<h1><?=$main_info['title'];?> <a href="<?=base_url();?>userinfo"><strong style="color:#888; font-weight:700; border-bottom: 1px dashed #127271;"><?=$last_name;?> <?=$first_name;?></strong></a><br /></h1>
    <span style="color: #137171; border-bottom: 1px dashed #137171;"></span>
    <br>
    <strong>Список всех моих покупок и броней:</strong> <br />
    <?php 
    /*if($user_prizes)
    {
     echo "<table class='wins round_s'><tr><td><strong>№</strong></td><td><strong>№ билета</strong></td><td><strong>Дата приобретения билета</strong></td><td><strong>ID пользователя</strong></td><td><strong>Наименование мероприятия</strong></td>
    </tr>";
    $i=1;
    foreach ($user_prizes as $item): 
    $item_name = $this->items_model->get_item($item['id_item']);
    echo "<tr><td>".$i."</td><td>".$item['id_item']."</td><td>".$item['create_date']."</td><td>".$item['id_user']."</td><td>".$item_name['item_name']."</td></tr>";
    $i++;
    endforeach;
    echo "</table>";   
    }
    else
    {*/
        echo "<br><table class='wins round_s'><tr><td><strong>Вы еще ничего не покупали на сайте.</strong></td></tr></table>";
    //}
    ?>
    <br />
</div>