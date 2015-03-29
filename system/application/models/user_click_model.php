<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_click_model extends Crud
{
    
public $table = 'user_click'; //��� �������	
public $idkey = 'id_click'; //��� ID

// ������� ��� ���������� ������ ���������
public $add_rules = array
(
    array
    (
      'field' => 'quantity_ord',
      'label' => '���������� ������',
      'rules' => 'required'
    ), 
    array
    (
      'field' => 'summ',
      'label' => '����� ��������� ������',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'date',
      'label' => '���� ����������',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'fio',
      'label' => '�.�.�.',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'contact',
      'label' => '�������',
      'rules' => 'required|is_natural'
    ),
    array
    (
      'field' => 'address',
      'label' => '�����',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'pincode',
      'label' => '��� �������',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'dopinfo',
      'label' => '�������������� ���������� ',
      'rules' => ''
    ),
    array
    (
      'field' => 'doorcode',
      'label' => '��� �����/��������',
      'rules' => ''
    ),
    array
    (
      'field' => 'payback',
      'label' => '����� �',
      'rules' => ''
    )
);

// ������� ��� ���������� ������ ���������
public $update_rules = array
(
    array
    (
      'field' => 'win_date',
      'label' => '�������',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'id_user',
      'label' => 'ID ������������',
      'rules' => 'required'
    )
);

public function get_latest()
{
    $this->db->order_by ('id_prize','desc');
    $this->db->limit (1);
    $query = $this->db->get('prizes');
    return $query->row_array();//���������� ������ � ���������� �����������
}  

public function get_rozygr($rozygr)
{
    $this->db->where ('id_rozygr',$rozygr);
    //������������ ������ � ���� ����� �����������
    //$this->db->limit($limit,$start_from);    
    $query = $this->db->get('rozygrysh');
    
    //���������� ������ � �����������, ��������� � ������������ � ��������� pagination
    return $query->row_array();
}

public function get_prize($rozygr)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$rozygr);
    $this->db->where ('win_date', '0000-00-00 00:00:00');
    $date_cl = $this->input->post('win_date'); //date ('Y-m-d H:i:s');
    $this->db->where ('activate_date <=', $date_cl);
    $this->db->limit (1);
    $query = $this->db->get('prizes');
    return $query->row_array();//���������� ������ � ���������� �����������
}

public function get_comp($name)
{
    $this->db->where ('id_company',$name);
    $query = $this->db->get('companies');
    return $query->row_array();//���������� ������ � ���������� �����������
}


public function won_prizes()
{
    $this->db->where ('win_date !=', '0000-00-00 00:00:00');
    return $this->db->count_all_results('prizes');
}

public function auth_session()
{
    $this->db->where ('user_data !=', 'NULL');
    return $this->db->count_all_results('ci_sessions');
}

public function count_prizes($to_get)
{
    $this->db->order_by ('id_prize');
    $this->db->where ('id_rozygr',$to_get);
    return $this->db->count_all_results('prizes');
}

public function update_prize($prize)
{
    $this->db->where ('id_prize',$prize);
    $this->db->where ('win_date', '0000-00-00 00:00:00');
    
    $query = $this->db->get('prizes');
    return $query->row_array();//���������� ������ � ���������� �����������
}


public function get_all()
{
    $this->db->order_by('id_rozygr', 'desc');
    
    //������������ ������ � ���� ����� �����������
    //$this->db->limit($limit,$start_from);    
    $query = $this->db->get('rozygrysh');
    
    //���������� ������ � �����������, ��������� � ������������ � ��������� pagination
    return $query->result_array();
}


public function user_click()
{
    /*for ($i=1;$i<=$this->input->post('counter');$i++)
    {*/
    $user = $this->ion_auth->user()->row();
    $data['date_click'] = date ('Y-m-d');
    $data['id_user'] = $user->id;
    $data['id_rozygr'] = $this->input->post('id_rozygr');
    $data['ip_address'] = $this->input->post('ip_address');
    $data['click_count'] = 1;
    
    /*if ($data['id_product'] == 0) {
    }
    else{*/
    $this->db->insert('user_click',$data);    
    /*}*//*
    }*/
}


public function get_click()
{
    $date_cl = date ('Y-m-d'); //date ('Y-m-d H:i:s');
    $user = $this->ion_auth->user()->row();    
    $user_id = $user->id;
    $rozygr_id = $this->input->post('id_rozygr');   
    $this->db->where ('id_rozygr',$rozygr_id);
    $this->db->where ('id_user',$user_id);
    $this->db->where ('date_click', $date_cl);
    $query = $this->db->get('user_click');
    return $query->row_array();//���������� ������ � ���������� �����������
}

public function get_click_count($data)
{
    $date_cl = date ('Y-m-d'); //date ('Y-m-d H:i:s');
    //$rozygr_id = $this->input->post('id_rozygr');   
    $this->db->where ('id_rozygr',$data['rozygrysh']);
    $this->db->where ('id_user',$data['user_id']);
    $this->db->where ('date_click', $date_cl);
    $query = $this->db->get('user_click');
    return $query->row_array();//���������� ������ � ���������� �����������
}

public function update_click($id_click)
{
    $this->db->where ('id_click', $id_click['id_click']);
    $count = $id_click['click_count'] + 1;
    $data['click_count'] = $count;
    $this->db->update('user_click',$data);    
}

}
?>