<div class="clear"></div>
<br />
<h1><?=$main_info['title'];?> <br /></h1>
    <span style="color: #137171; border-bottom: 1px dashed #137171;"></span>
    
    <strong>Фамилия:</strong> <?=$last_name;?><br />
    <strong>Имя:</strong> <?=$first_name;?><br />
    <!-- <strong>Возраст:</strong> <?=$main_info['title'];?><br />
    <strong>Пол:</strong> <?=$main_info['title'];?><br /> 
    <strong>Выиграно призов:</strong> <?=$email;?><br />
    -->
    <strong>Баланс:</strong> <a style="color:#127271; border-bottom: 1px dashed #127271;" href="<?=base_url();?>userprizes"><?=$user_account['balance'];?> сом<br /></a>
    <strong>Телефон:</strong> <?=$phone;?><br />
    <strong>E-mail:</strong> <?=$email;?><br />
    <br />
    <div class="round_s" style="float: left; width: 968px; border: 1px dashed #074343; padding: 15px 15px; background: #fff; border: 1px solid #80A7A6;">
    <div style="float: left; width: 300px;">
    <form action="<?=base_url()?>withdrawal" method="post">
    <h2 style="padding: 0 0 10px 0; float: none;">Вывод средств со счета</h2>
    <span style="color: red; padding: 0;"><?=form_error('sum');?></span><?=$info?>
    Выберите сумму:<br />
    <select id="sum" name="sum">
    <option disabled selected>Сумма</option>
    <option value="100">100</option>
    <option value="200">200</option>
    <option value="300">300</option>
    <option value="400">400</option>
    <option value="500">500</option>
    <option value="1000">1000</option>
    </select> сом<br /><br />
    <span style="color: red;"><?=form_error('type');?></span>
    <select id="type" name="type">
    <option disabled selected>Выберите тип платежа</option>
    <option value="telephone">Услуги связи</option>
    <option value="internet">Интернет</option>
    <option value="mobilebank">Мобильный кошелек/банкинг</option>
    </select>
    <br /><br />
    <div id="telephone">
    <span style="color: red;"><?=form_error('provider');?></span>
    <select name="provider">
    <option disabled selected>Выберите поставщика услуг</option>
    <option>Мегаком</option>
    <option>Билайн</option>
    <option>O!</option>
    <option>КыргызТелеком</option>
    <option>Saima Telecom</option>
    </select>
    </div>
    <div id="internet" >
    <span style="color: red;"><?=form_error('provider');?></span>
    <select name="provider">
    <option disabled selected>Выберите поставщика услуг</option>
    <option>Акнет</option>
    <option>Elcat</option>
    <option>Jet</option>
    <option>Megaline</option>
    <option>Homeline</option>
    <option>Maxlink</option>
    </select>
    </div>    
    <div id="mobilebank" >
    <span style="color: red;"><?=form_error('provider');?></span>
    <select name="provider">
    <option disabled selected>Выберите поставщика услуг</option>
    <option>GeoPay</option>
    </select>
    </div> 
    <br />
    <div id="number" style="display: none;">
    <span style="color: red; padding: 0;"><?=form_error('account');?></span>
    Введите номер телефона/лицевого счета:<br />
    <input name="account" type="text" maxlength="15" size="15" value="" onkeypress='validate(event)'/> №<br /><br />
    <p><input type="submit" class="button_r" value="Подать заявку" name="button_apply"/></p>
    </div>
    <script type="text/javascript">
    function validate(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    var regex = /[0-9]/;
    if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
    } 
    }
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
        $('#type').change(refresh_inputs);
        refresh_inputs();
        
        function refresh_inputs() {
            var val = $('#type').val();
            $('#telephone,#internet,#mobilebank,#number').hide();
            $('#'+val).show();
        }
        
        $('#telephone,#internet,#mobilebank').change(refresh_last);
        function refresh_last() {
            $('#number').show();
        }
    });
    </script>
    </form>
    </div>
    <div style="float: right;">
    <table class="event round" style="width: 550px;">

<?php
if($withdrawals)
{
echo "<tr><td><strong>Дата</strong></td><td><strong>Сумма</strong></td><td><strong>Тип</strong></td><td><strong>Услуга</strong></td><td><strong>Номер/счет</strong></td><td><strong>Статус</strong></td></tr>";
foreach ($withdrawals as $item):
echo "<tr><td width='130'>[".$item['date']."]</td><td>".$item['summ']."</td><td>".$item['type']."</td><td>".$item['provider']."</td><td>".$item['account']."</td><td>".$item['status']."</td></tr>";
endforeach; 
}
else
{
    echo "<tr><td><span style='float: left;'><strong>У вас не было заявок на вывод средств</strong></span></td></tr>";

}
?>
</table>
</div>
    </div>
                  
    <div class="clear"></div>
    
    <br />
</div>