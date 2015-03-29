<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Orders_model extends Crud
{
    
public $table = 'orders'; //Имя таблицы	
public $idkey = 'id_order'; //Имя ID


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
      'label' => 'Имя',
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
      'field' => 'email',
      'label' => 'E-mail адрес',
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
      'field' => 'id_status',
      'label' => 'Статус',
      'rules' => 'required'
    )
);

public function get_latest()
{
    $this->db->order_by ('id_order','desc');
    $this->db->limit (1);
    $query = $this->db->get('orders');
    return $query->result_array();//Возвращаем массив с последними материалами
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


public function get_all()
{
    $this->db->order_by('id_order', 'desc');
    
    //ограничиваем запрос к базе двумя параметрами
    //$this->db->limit($limit,$start_from);    
    $query = $this->db->get('orders');
    
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
    $data['id_item'] = $this->input->post('id_product'.$i);
    $data['quantity'] = $this->input->post('quantity'.$i);
    //$data['measure_zak'] = $this->input->post('measure'.$i);
    $data['order_date'] = $this->input->post('date');
    $data['product_cost'] = $this->input->post('product_cost'.$i);
    $data['order_cost'] = $this->input->post('order_cost'.$i);
    
    //$product = $this->orders_model->get_product($data['id_product']);
    //$data['buy_cost'] = $product['cost'];
    $data['productname'] = $this->input->post('productname'.$i);
    $data['id_order'] = $add_test;
    if ($data['id_item'] == 0) {
    }
    else{
    $this->db->insert('product_zak',$data);    
    }
    }
}

public function get_product($product)
{
    $this->db->order_by('id_product');
    //ограничиваем запрос к базе двумя параметрами
    $this->db->limit(1);    
    $this->db->where('id_product',$product);
    $query = $this->db->get('products');
    
    //Возвращаем массив с материалами, урезанный в соответствии с разбивкой pagination
    return $query->row_array();
}

public function update_cost($page_id)
{
    for ($i=1;$i<=$this->input->post('counter');$i++)
    {
    $data['buy_cost'] = $this->input->post('buy_cost'.$i);
    $data['quantity'] = $this->input->post('quantity'.$i);
    $this->db->where('id_product_zak',$this->input->post('zakup_id'.$i));
    $this->db->update('product_zak',$data);    
    }
}

public function get_page($page)
{
    $this->db->where('page_id',$page);
    $query = $this->db->get('pages');
    return $query->row_array();//Возвращаем массив с данными о страницах
}

}
?>