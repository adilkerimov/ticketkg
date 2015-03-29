<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Specific_items_model extends Crud
{
    
public $table = 'specific_items'; //Имя таблицы	
public $idkey = 'id_specific_items'; //Имя ID

// правила для добавления нового материала
public $add_rules = array
(
    array
    (
      'field' => 'specific_item',
      'label' => 'Наименование спецификации',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'bind',
      'label' => 'Связка с группой спецификаций',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'status',
      'label' => 'Статус группы спецификации',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'date',
      'label' => 'Дата добавления группы спецификации',
      'rules' => 'required'
    )
);

// правила для добавления нового материала
public $update_rules = array
(
    array
    (
      'field' => 'win_date',
      'label' => 'Подарок',
      'rules' => 'required'
    )
);


public function get_specific_items($item)
{   
    $this->db->order_by ($this->idkey);
    $this->db->where('bind',$item);
    $this->db->where ('status',1);  
    $query = $this->db->get($this->table);
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->result_array();
}

public function get_items_first($first)
{   
    $this->db->order_by ($this->idkey,'desc');
    $this->db->where ('id_category',$first);
    //$this->db->limit($limit,$start_from);    
    $query = $this->db->get($this->table);
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->result_array();
}

public function get_items_second($second)
{   
    $this->db->order_by ($this->idkey,'desc');
    $this->db->where ('id_second_menu',$second);
    //$this->db->limit($limit,$start_from);    
    $query = $this->db->get($this->table);
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->result_array();
}

public function get_items_third($third)
{   
    $this->db->order_by ($this->idkey,'desc');
    $this->db->where ('id_third_menu',$third);
    //$this->db->limit($limit,$start_from);    
    $query = $this->db->get($this->table);
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->result_array();
}

public function get_item($id)
{   
    $this->db->order_by ($this->idkey,'desc');
    $this->db->where ('id_item',$id);
    $this->db->limit(1);  
    $query = $this->db->get($this->table);
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->row_array();
}



public function get_menu_first()
{   
    $this->db->order_by ('id_menu');
    $this->db->where ('type',1);
    $this->db->where ('active',1);   
    $query = $this->db->get('menu');
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->result_array();
}


public function get_menu_second($menu)
{   
    $this->db->order_by ('id_menu');
    $this->db->where ('type',2);
    $this->db->where ('active',1);
    $this->db->where ('bind',$menu);   
    $query = $this->db->get('menu');
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->result_array();
}

public function get_menu_third($menu)
{   
    $this->db->order_by ('id_menu');
    $this->db->where ('type',3);
    $this->db->where ('active',1);
    $this->db->where ('bind',$menu);
    //$this->db->limit($limit,$start_from);    
    $query = $this->db->get('menu');
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->result_array();
}

public function get_menu_link($menu)
{   
    $this->db->where ('active',1);
    $this->db->where ('link',$menu);
    $this->db->limit(1);
    $query = $this->db->get('menu');
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->row_array();
}



/*  */
public function get_menu_admin()
{   
    $this->db->order_by ('id_menu');
    $this->db->where ('type',10);
    $this->db->where ('active',1);   
    $query = $this->db->get('menu');
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->result_array();
}

public function get_menu_admin2($menu)
{   
    $this->db->order_by ('id_menu');
    $this->db->where ('type',11);
    $this->db->where ('active',1);
    $this->db->where ('bind',$menu);
    //$this->db->limit($limit,$start_from);    
    $query = $this->db->get('menu');
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->result_array();
}

public function get_menu_admin3($menu)
{   
    $this->db->order_by ('id_menu');
    $this->db->where ('type',12);
    $this->db->where ('active',1);
    $this->db->where ('bind',$menu);
    //$this->db->limit($limit,$start_from);    
    $query = $this->db->get('menu');
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->result_array();
}


public function transliteration($text){
   
 $trans_arr = array ( 
  "а"=>"a","б"=>"b","в"=>"v","г"=>"g","д"=>"d",
  "е"=>"e", "ё"=>"yo","ж"=>"j","з"=>"z","и"=>"i",
  "й"=>"i","к"=>"k","л"=>"l", "м"=>"m","н"=>"n",
  "о"=>"o","п"=>"p","р"=>"r","с"=>"s","т"=>"t",
  "у"=>"y","ф"=>"f","х"=>"h","ц"=>"c","ч"=>"ch",
  "ш"=>"sh","щ"=>"sh","ы"=>"i","э"=>"e","ю"=>"u",
  "я"=>"ya",
  "А"=>"A","Б"=>"B","В"=>"V","Г"=>"G","Д"=>"D",
  "Е"=>"E","Ё"=>"Yo","Ж"=>"J","З"=>"Z","И"=>"I",
  "Й"=>"I","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
  "О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
  "У"=>"Y","Ф"=>"F","Х"=>"H","Ц"=>"C","Ч"=>"Ch",
  "Ш"=>"Sh","Щ"=>"Sh","Ы"=>"I","Э"=>"E","Ю"=>"U",
  "Я"=>"Ya",
  "ь"=>"","Ь"=>"","ъ"=>"","Ъ"=>"",
  "ї"=>"j","і"=>"i","ґ"=>"g","є"=>"ye",
  "Ї"=>"J","І"=>"I","Ґ"=>"G","Є"=>"YE"
 );
  
 return strtr($text, $trans_arr);
  
}

public function get_shares($item_id)
{   
    //$this->db->order_by ('id_share','desc');
    $this->db->where ('id_item',$item_id);
    $this->db->limit(1);    
    //$query = $this->db->get('shares');
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    //return $query->result_array();
    return $this->db->count_all_results('shares');
}

public function get_quantity($item_id)
{   
    //$this->db->order_by ('id_share','desc');
    $this->db->where ('id_item',$item_id);
    $this->db->limit(1);    
    $query = $this->db->get('quantity');
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->row_array();
}

public function get_latest()
{
    $this->db->order_by ('id_prize','desc');
    $this->db->limit (1);
    $query = $this->db->get('prizes');
    return $query->row_array();//Возвращаем массив с последними материалами
}  

public function get_rozygr($rozygr)
{
    $this->db->where ('id_rozygr',$rozygr);
    //ограничиваем запрос к базе двумя параметрами
    //$this->db->limit($limit,$start_from);    
    $query = $this->db->get('rozygrysh');
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->row_array();
}


public function validate_id()
{
    $date_cl = date ('Y-m-d'); //date ('Y-m-d H:i:s');
    $user = $this->ion_auth->user()->row();    
    $user_id = $user->id;
    $rozygr_id = $this->input->post('id_rozygr');   
    $this->db->where ('id_rozygr',$rozygr_id);
    $this->db->where ('id_user',$user_id);
    $this->db->where ('date_click', $date_cl);
    $query = $this->db->get('user_click');
    return $query->row_array();//Возвращаем массив с последними материалами
}





public function get_prize($rozygr)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$rozygr);
    $this->db->where ('win_date', '0000-00-00 00:00:00');
    $date_cl = date ("Y-m-d H:i:s");
    $this->db->where ('activate_date <=', $date_cl);
    $this->db->limit (1);
    $query = $this->db->get('prizes');
    return $query->row_array();//Возвращаем массив с последними материалами
}

public function add_prize()
{
    for ($i=1;$i<$this->input->post('counter');$i++)
    {
    
    $comp = $this->input->post('id_rozygr');
    if ($comp) {
    
    
    $rozygg = $this->prizes_model->get_rozygr($comp);
    
    $data['id_rozygr'] = $comp;
    $data['id_company'] = $rozygg['id_company'];
    $data['prize_name'] = $this->input->post('prize_name'.$i);
    $data['activate_date'] = $this->input->post('activate_date'.$i);
    $data['prize_group'] = $this->input->post('prize_group');;
    $data['sum'] = $this->input->post('sum'.$i);;
    $this->db->insert('prizes',$data);
    }
    else{
    echo 'Неуспешно!';
    break;
    }
    }
}


public function get_comp($name)
{
    $this->db->where ('id_company',$name);
    $query = $this->db->get('companies');
    return $query->row_array();//Возвращаем массив с последними материалами
}


public function won_prizes()
{
    $this->db->where ('win_date !=', '0000-00-00 00:00:00');
    $this->db->where ('prize_group !=', '4');
    return $this->db->count_all_results('prizes');
}

public function all_count()
{
    return $this->db->count_all_results('rozygrysh');
}

public function account_count()
{
    $this->db->where ('dt_account', '7');
    $bal_count = 0;
    $query = $this->db->get('documents');

    foreach ($query->result() as $row)
    {
        $bal_count = $bal_count + $row->sum;
    }    
    return $bal_count;
}

public function auth_session()
{
    $this->db->where ('user_data !=', 'NULL');
    return $this->db->count_all_results('ci_sessions');
}

public function count_prizes($to_get)
{
    $this->db->where ('id_rozygr',$to_get);
    return $this->db->count_all_results('prizes');
}

public function count_gold_prizes($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('prize_group',1);
    return $this->db->count_all_results('prizes');
}

public function get_gold_prizes($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('prize_group',1);
    $query = $this->db->get('prizes');
    return $query->result_array();
}

public function get_silver_prizes($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('prize_group',2);
    $query = $this->db->get('prizes');
    return $query->result_array();
}

public function get_bronz_prizes($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('prize_group',3);
    $query = $this->db->get('prizes');
    return $query->result_array();
}

public function get_money_prizes($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('prize_group',4);
    $query = $this->db->get('prizes');
    return $query->result_array();
}

public function count_silver_prizes($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('prize_group',2);
    return $this->db->count_all_results('prizes');
}

public function count_bronz_prizes($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('prize_group',3);
    return $this->db->count_all_results('prizes');
}

public function count_money_prizes($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('prize_group',4);
    
  
    $bal_count = 0;
    $query = $this->db->get('prizes');

    foreach ($query->result() as $row)
    {
        $bal_count = $bal_count + $row->sum;
    }    
    return $bal_count;
}

public function count_1som_prizes($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('prize_group',4);
    $this->db->where ('prize_name','1 сом');
    $bal_count = 0;
    return $this->db->count_all_results('prizes');
}

public function count_1som_done($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('win_date', '0000-00-00 00:00:00');
    $this->db->where ('prize_group',4);
    $this->db->where ('prize_name','1 сом');
    $bal_count = 0;
    return $this->db->count_all_results('prizes');
}

public function count_3som_prizes($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('prize_group',4);
    $this->db->where ('prize_name','3 сом');
    $bal_count = 0;
    return $this->db->count_all_results('prizes');
}

public function count_3som_done($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('win_date', '0000-00-00 00:00:00');
    $this->db->where ('prize_group',4);
    $this->db->where ('prize_name','3 сом');
    $bal_count = 0;
    return $this->db->count_all_results('prizes');
}

public function count_5som_prizes($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('prize_group',4);
    $this->db->where ('prize_name','5 сом');
    $bal_count = 0;
    return $this->db->count_all_results('prizes');
}

public function count_5som_done($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('win_date', '0000-00-00 00:00:00');
    $this->db->where ('prize_group',4);
    $this->db->where ('prize_name','5 сом');
    $bal_count = 0;
    return $this->db->count_all_results('prizes');
}

public function count_10som_prizes($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('prize_group',4);
    $this->db->where ('prize_name','10 сом');
    $bal_count = 0;
    return $this->db->count_all_results('prizes');
}

public function count_10som_done($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('win_date', '0000-00-00 00:00:00');
    $this->db->where ('prize_group',4);
    $this->db->where ('prize_name','10 сом');
    $bal_count = 0;
    return $this->db->count_all_results('prizes');
}

public function count_20som_prizes($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('prize_group',4);
    $this->db->where ('prize_name','20 сом');
    $bal_count = 0;
    return $this->db->count_all_results('prizes');
}

public function count_20som_done($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('win_date', '0000-00-00 00:00:00');
    $this->db->where ('prize_group',4);
    $this->db->where ('prize_name','20 сом');
    $bal_count = 0;
    return $this->db->count_all_results('prizes');
}

public function count_50som_prizes($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('prize_group',4);
    $this->db->where ('prize_name','50 сом');
    $bal_count = 0;
    return $this->db->count_all_results('prizes');
}

public function count_50som_done($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    $this->db->where ('win_date', '0000-00-00 00:00:00');
    $this->db->where ('prize_group',4);
    $this->db->where ('prize_name','50 сом');
    $bal_count = 0;
    return $this->db->count_all_results('prizes');
}

public function user_account($to_get)
{
    $this->db->where ('id_user',$to_get);
    
    $query = $this->db->get('accounts');
    return $query->row_array();//Возвращаем массив с последними материалами
}

public function account_user($to_get)
{
    $this->db->where ('id_account ',$to_get);
    
    $query = $this->db->get('accounts');
    return $query->row_array();//Возвращаем массив с последними материалами
}


public function update_prize($prize)
{
    $data = array();
    $user = $this->ion_auth->user()->row();
    $data['win_date'] = date ("Y-m-d H:i:s");
    $data['id_user'] = $user->id;
    $data['id_status'] = 1;   
    $this->db->where('id_prize',$prize);
    $this->db->update('prizes',$data);
}


public function get_all()
{
    $this->db->order_by('id_rozygr', 'desc');
    
    //ограничиваем запрос к базе двумя параметрами
    //$this->db->limit($limit,$start_from);    
    $query = $this->db->get('rozygrysh');
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->result_array();
}


public function get_right($the_test)
{
    $this->db->order_by ('id_order');
    $this->db->where('id_order',$the_test);
    $query = $this->db->get('orders');
    return $query->result_array();//Возвращаем массив с последними материалами
}


public function add_quest($add_test)
{
    for ($i=1;$i<=$this->input->post('counter');$i++)
    {
    $data['id_product'] = $this->input->post('id_product'.$i);
    $data['quantity'] = $this->input->post('quantity'.$i);
    $data['measure_zak'] = $this->input->post('measure'.$i);
    $data['order_date'] = $this->input->post('date');
    $data['product_cost'] = $this->input->post('product_cost'.$i);
    $data['order_cost'] = $this->input->post('order_cost'.$i);
    $data['productname'] = $this->input->post('productname'.$i);
    $data['id_order'] = $add_test;
    if ($data['id_product'] == 0) {
    }
    else{
    $this->db->insert('product_zak',$data);    
    }
    }
}

public function get_latest_user()
{
    $this->db->order_by ('id', 'desc');
    $this->db->limit (1);
    $query = $this->db->get('users');
    return $query->row_array();//Возвращаем массив с последним пользователем
}

public function get_user($id_user)
{   
    $this->db->where ('id',$id_user);
    $query = $this->db->get('users');
    return $query->row_array();//Возвращаем массив с последним пользователем
}

public function get_category($id)
{   
    $this->db->where ('id_group',$id);
    $query = $this->db->get('prize_group');
    return $query->row_array();//Возвращаем массив с последним пользователем
}

public function create_account($id_user)
{
    $data['id_user'] = $id_user;
    $data['date_create'] = date ("Y-m-d H:i:s");
    $this->db->insert('accounts',$data);
}

public function provodka($doc)
{   
    $data['id_rozyg'] = $doc['id'];
    $data['doc_date'] = date ("Y-m-d H:i:s");
    $data['dt_account'] = 7;
    $data['kt_account'] = $doc['kredit_user'];
    $data['sum'] = $doc['summa'];
    $data['naznach'] = 'Розыгрыш';
    $this->db->insert('documents',$data);//Создание проводки
}

public function kredit($doc)
{   
    $data['date_last_update'] = date ("Y-m-d H:i:s");
    $data['balance'] = $doc['kredit_bal'] + $doc['summa'];
    $this->db->where('id_account',$doc['kredit_user']);
    $this->db->update('accounts',$data);//Кредитование счета после создании проводки
}

public function debet($doc)
{   
    $data['date_last_update'] = date ("Y-m-d H:i:s");
    $data['balance'] = $doc['debet_bal'] - $doc['summa'];
    $this->db->where('id_account',$doc['debet_user']);
    $this->db->update('accounts',$data);//Дебетование счета после создании проводки
}


public function get_account($user_item)
{
    $this->db->where('id_user',$user_item);
    $this->db->limit (1);
    $query = $this->db->get('accounts');
    return $query->row_array();//Возвращаем массив с данными о счете пользователя по id user
}

public function get_account_id($user_item)
{
    $this->db->where('id_account',$user_item);
    $this->db->limit (1);
    $query = $this->db->get('accounts');
    return $query->row_array();//Возвращаем массив с данными о счете пользователя по id account
}

public function get_page($page)
{
    $this->db->where('page_id',$page);
    $query = $this->db->get('pages');
    return $query->row_array();//Возвращаем массив с данными о страницах
}

public function email_array()
{
    //$this->db->where ('id_rozygr',$page_id['id']);
    $this->db->distinct();
    $this->db->select('email');
    $query = $this->db->get('users');
    //$rowcount = $query->num_rows();
    
    //return $query->num_rows();//Возвращаем массив с последними материалами
    return $query->result_array();
}

/* Функции для реализации выписки пользователей */
public function user_prizes($just_get)
{
    $this->db->where ('id_user',$just_get);
    $this->db->where ('prize_group',4);
    $this->db->where ('win_date !=', '0000-00-00 00:00:00');
    $this->db->order_by ('win_date','desc');
    $query = $this->db->get('prizes');
    return $query->result_array();
}

public function user_gold_prizes($just_get)
{
    $this->db->where ('id_user',$just_get);
    $this->db->where ('prize_group',1);
    $this->db->where ('win_date !=', '0000-00-00 00:00:00');
    $this->db->order_by ('win_date','desc');
    $query = $this->db->get('prizes');
    return $query->result_array();
}

public function user_silver_prizes($just_get)
{
    $this->db->where ('id_user',$just_get);
    $this->db->where ('prize_group',2);
    $this->db->where ('win_date !=', '0000-00-00 00:00:00');
    $this->db->order_by ('win_date','desc');
    $query = $this->db->get('prizes');
    return $query->result_array();
}

public function user_bronz_prizes($just_get)
{
    $this->db->where ('id_user',$just_get);
    $this->db->where ('prize_group',3);
    $this->db->where ('win_date !=', '0000-00-00 00:00:00');
    $this->db->order_by ('win_date','desc');
    $query = $this->db->get('prizes');
    return $query->result_array();
}


/* События на сайте */
public function all_user_prizes()
{
    $this->db->where ('win_date !=', '0000-00-00 00:00:00');
    $this->db->order_by ('win_date','desc');
    $this->db->limit (5);
    $query = $this->db->get('prizes');
    return $query->result_array();
}

public function all_win_prizes($limit,$start_from)
{
    $this->db->order_by ('win_date','desc');
    $this->db->where ('win_date !=', '0000-00-00 00:00:00');
    $this->db->limit($limit,$start_from);
    $query = $this->db->get('prizes');
    return $query->result_array();
}

public function count_by()
{
    $this->db->where ('win_date !=', '0000-00-00 00:00:00');
    return $this->db->count_all_results('prizes');
}

/* Вывод средств */
public function withdrawal($just_get)
{
    $this->db->order_by ('id_journal','desc');
    $this->db->where ('id_user',$just_get);
    $query = $this->db->get('journal');
    return $query->result_array();
}

public function user_moneys($just_get)
{   
    $this->db->where ('id_user',$just_get);
    $this->db->where ('prize_group',4);
    $this->db->where ('win_date !=', '0000-00-00 00:00:00');
    $this->db->select_sum('sum');
    $query = $this->db->get('prizes');
    return $query->row_array();
    
}

   public function user_docs($just_get)
{
    $account = $this->prizes_model->user_account($just_get);
    $this->db->where ('kt_account',$account['id_account']);
    $this->db->select_sum('sum');
    $query = $this->db->get('documents');
    return $query->row_array();
}

   public function user_with_docs($just_get)
{
    $account = $this->prizes_model->user_account($just_get);
    $this->db->where ('dt_account',$account['id_account']);
    $this->db->select_sum('sum');
    $query = $this->db->get('documents');
    return $query->row_array();
}
    
    public function provodka_with($doc)
{   
    $data['id_rozyg'] = $doc['id'];
    $data['doc_date'] = date ("Y-m-d H:i:s");
    $data['dt_account'] = $doc['debet_user'];
    $data['kt_account'] = 5;
    $data['sum'] = $doc['summa'];
    $data['naznach'] = 'Вывод средств';
    $this->db->insert('documents',$data);//Создание проводки
}    


public function kredit_with($doc)
{   
    $data['date_last_update'] = date ("Y-m-d H:i:s");
    $data['balance'] = $doc['kredit_bal'] + $doc['summa'];
    $this->db->where('id_account',$doc['kredit_user']);
    $this->db->update('accounts',$data);//Кредитование счета после создании проводки
}

public function debet_with($doc)
{   
    $data['date_last_update'] = date ("Y-m-d H:i:s");
    $data['balance'] = $doc['debet_bal'] - $doc['summa'];
    $this->db->where('id_account',$doc['debet_user']);
    $this->db->update('accounts',$data);//Дебетование счета после создании проводки
}

    public function apply()
{   
    $user = $this->ion_auth->user()->row();
    $data['date'] = date ("Y-m-d H:i:s");
    $data['id_user'] = $user->id;
    $data['type'] = $this->input->post('type');
    $data['provider'] = $this->input->post('provider');
    $data['account'] = $this->input->post('account');
    $data['summ'] = $this->input->post('sum');
    $data['status'] = 'Создан';
    $this->db->insert('journal',$data);//Создание проводки
}  



}
?>