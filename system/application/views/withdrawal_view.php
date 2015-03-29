<div class="clear"></div>
<br />
	<h1><?=$main_info['title'];?> <br /></h1>
    <span style="color: #137171; border-bottom: 1px dashed #137171;"></span>
    
    Уважаемый <strong><?=$last_name." ".$first_name;?></strong> <br />
    На вашем счете <strong><?=$user_account['balance'];?> сом</strong><br />
    <!-- <strong>Возраст:</strong> <?=$main_info['title'];?><br />
    <strong>Пол:</strong> <?=$main_info['title'];?><br /> 
    <strong>Выиграно призов:</strong> <?=$email;?><br />
    -->
    <strong>Номер счета:</strong> <?=$user_account['id_account'];?><br />
    <strong>Баланс:</strong> <?=$user_account['balance'];?> сом<br />
    <strong>Телефон:</strong> <?=$phone;?><br />
    <strong>E-mail:</strong> <?=$email;?><br />
    <br />
    
    <form action="<?=base_url()?>withdrawal" method="post">
    Выберите сумму:<br />
    <select id="sum" name="sum">
    <option value="100">100</option>
    <option value="200">200</option>
    <option value="300">300</option>
    <option value="400">400</option>
    <option value="500">500</option>
    <option value="1000">1000</option>
    </select> сом<br /><br />
    
    Выберите тип платежа<br />
    <select name="type">
    <option id="phone">Услуги связи</option>
    <option id="inet">Интернет</option>
    </select>
    <br /><br />
    Выберите поставщика услуг<br />
    <select id="telephone" name="provider">
    <option>Мегаком</option>
    <option>Билайн</option>
    <option>O!</option>
    <option>КыргызТелеком</option>
    <option>Saima Telecom</option>
    </select>
    <br />
    <select id="internet" name="provider">
    <option>Акнет</option>
    <option>Elcat</option>
    <option>Jet</option>
    <option>Megaline</option>
    <option>Homeline</option>
    <option>Maxlink</option>
    </select>     
    <br /><br />
    Введите номер телефона/лицевого счета:<br />
    <input name="account" type="text" maxlength="15" size="15" value="" onkeypress='validate(event)'/> №<br /><br />
    <p><input type="submit" class="button_r" value="Вывести средства" name="button_apply"/></p>
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
    </form>

            
                    
    
    
    <br />
</div>