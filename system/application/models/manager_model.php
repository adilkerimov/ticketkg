<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Manager_model extends Crud
{
    
public $table = 'prizes'; //Имя таблицы	
public $idkey = 'id_prize'; //Имя ID

// правила для добавления нового материала
public $add_rules = array
(
    array
    (
      'field' => 'quantity_ord',
      'label' => 'Количество заказа',
      'rules' => 'required'
    ), 
    array
    (
      'field' => 'summ',
      'label' => 'Общая стоимость заказа',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'date',
      'label' => 'Дата добавления',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'fio',
      'label' => 'Ф.И.О.',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'contact',
      'label' => 'Телефон',
      'rules' => 'required|is_natural'
    ),
    array
    (
      'field' => 'address',
      'label' => 'Адрес',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'pincode',
      'label' => 'Код доступа',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'dopinfo',
      'label' => 'Дополнительная информация ',
      'rules' => ''
    ),
    array
    (
      'field' => 'doorcode',
      'label' => 'Код двери/домофона',
      'rules' => ''
    ),
    array
    (
      'field' => 'payback',
      'label' => 'Сдача с',
      'rules' => ''
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
    ),
    array
    (
      'field' => 'id_user',
      'label' => 'ID пользователя',
      'rules' => 'required'
    )
);

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

public function get_comp($name)
{
    $this->db->where ('id_company',$name);
    $query = $this->db->get('companies');
    return $query->row_array();//Возвращаем массив с последними материалами
}


public function won_prizes()
{
    $this->db->where ('win_date !=', '0000-00-00 00:00:00');
    return $this->db->count_all_results('prizes');
}

public function account_count()
{
    $this->db->where ('balance !=', '0');
    //$county = $this->db->count_all_results('accounts');
    $bal_count = 0;
    $query = $this->db->get('accounts');

    foreach ($query->result() as $row)
    {
        $bal_count = $bal_count + $row->balance;
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

public function user_account($to_get)
{
    $this->db->where ('id_user',$to_get);
    
    $query = $this->db->get('accounts');
    return $query->row_array();//Возвращаем массив с последними материалами
}






public function update_prize($prize)
{
    $data = array();
    $data['win_date'] = date ("Y-m-d H:i:s");
    $data['id_user'] = $this->input->post('id_user');    
    $this->db->where('id_prize',$prize);
    $this->db->update('prizes',$data);
}




public function update_prize1($prize)
{
    $this->db->where ('id_prize',$prize);
    $this->db->where ('win_date', '0000-00-00 00:00:00');
    
    /*$this->db->where ('activate_date <=', date('Y-m-d H:i:s'));
    
    $str_date = date('Y-m-d H:i:s');
    
    $date_elems = explode(" ",$str_date);
    $date = explode("-", $date_elems[0]);
    $time = explode(":", $date_elems[1]); 
    $result =  mktime($time[0], $time[1],$time[2], $date[1],$date[2], $date[0]);
 
*/
    $query = $this->db->get('prizes');
    return $query->row_array();//Возвращаем массив с последними материалами
}



















//Подсчет количества материалов в конкретной категории
public function count_by($section_id)
{
    $this->db->where ('section0',$section_id);
    for ($i=1;$i<4;$i++)
    {
        $cname = 'section'.$i;
        $this->db->or_where($cname,$section_id);
    }

    return $this->db->count_all_results('materials');
}




public function get_right($the_test)
{
    $this->db->order_by ('id_order');
    $this->db->where('id_order',$the_test);
    $query = $this->db->get('orders');
    return $query->result_array();//Возвращаем массив с последними материалами
}

public function count_done()
{
    $this->db->where('id_status','Доставлен');
    //$query = $this->db->get('orders');
    //return $query->result_array();//Возвращаем массив с последними материалами
    return $this->db->count_all_results('orders');
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

public function update_cost($page_id)
{
    for ($i=1;$i<=$this->input->post('counter');$i++)
    {
    $data['buy_cost'] = $this->input->post('buy_cost'.$i);
    $this->db->where('id_product_zak',$this->input->post('zakup_id'.$i));
    $this->db->update('product_zak',$data);    
    }
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


public function get_manager($manager_id)
{
    $this->db->order_by('id_rozygr', 'desc');
    $this->db->where ('id_company',$manager_id);
    //ограничиваем запрос к базе двумя параметрами
    //$this->db->limit($limit,$start_from);    
    $query = $this->db->get('rozygrysh');
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->result_array();
}


public function get_click($page_id)
{
    //$date_cl = date ('Y-m-d'); //date ('Y-m-d H:i:s');
    //$user_id = $this->input->post('id_user');
    //$rozygr_id = $this->input->post('id_rozygr');   
   
    $this->db->order_by('date_click');
    $this->db->where ('id_rozygr',$page_id);
    //$this->db->where ('id_user',$user_id);
    //$this->db->where ('date_click', $date_cl);
    $this->db->distinct('date_click');
    //$this->db->select('date_click');
    $query = $this->db->get('user_click');
    return $query->result_array();//Возвращаем массив с последними материалами
}

public function click_per_day($page_id)
{
    $this->db->where ('id_rozygr',$page_id['id']);
    $this->db->where ('date_click',$page_id['date']);
    $this->db->select_sum('click_count');
    //$this->db->select_sum('id_user');
    $query = $this->db->get('user_click');
    
    return $query->row_array();//Возвращаем массив с последними материалами
}

public function user_per_day($page_id)
{
    $this->db->where ('id_rozygr',$page_id['id']);
    $this->db->where ('date_click',$page_id['date']);
    //$this->db->select_sum('click_count');
    $this->db->distinct();
    $this->db->select('id_user');
    $query = $this->db->get('user_click');
    //$rowcount = $query->num_rows();
    
    return $query->num_rows();//Возвращаем массив с последними материалами
}

public function unique_date($page_id)
{
    //$date_cl = date ('Y-m-d'); //date ('Y-m-d H:i:s');
    //$user_id = $this->input->post('id_user');
    //$rozygr_id = $this->input->post('id_rozygr');   
   
    $this->db->order_by('date_click');
    $this->db->where ('id_rozygr',$page_id);
    //$this->db->where ('id_user',$user_id);
    //$this->db->where ('date_click', $date_cl);
    $this->db->distinct();
    $this->db->select('date_click');
    $query = $this->db->get('user_click');
    return $query->result_array();//Возвращаем массив с последними материалами
}

public function unique_all($page_id)
{
    //$date_cl = date ('Y-m-d'); //date ('Y-m-d H:i:s');
    //$user_id = $this->input->post('id_user');
    //$rozygr_id = $this->input->post('id_rozygr');   
   
    $this->db->order_by('date_click');
    $this->db->where ('id_rozygr',$page_id);
    //$this->db->where ('id_user',$user_id);
    //$this->db->where ('date_click', $date_cl);
    $this->db->distinct();
    $this->db->select('date_click');
    $query = $this->db->get('user_click');
    return $query->result_array();//Возвращаем массив с последними материалами
}


public function user_per_rozyg($page_id)
{
    $this->db->where ('id_rozygr',$page_id['id']);
    //$this->db->select_sum('click_count');
    $this->db->distinct();
    $this->db->select('id_user');
    $query = $this->db->get('user_click');
    //$rowcount = $query->num_rows();
    
    return $query->num_rows();//Возвращаем массив с последними материалами
}




}
?>