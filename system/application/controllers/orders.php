<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Orders extends Controller {
    
    public function __construct()
	{
		parent::Controller();
		$this->load->model('category_model');
		//$this->load->model('products_model');        
    }
    
    public function index()
    {
    redirect(base_url());
    }
    
    // ������ ���� �������
	public function view()
    {   
        	if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
        $data = array();
        $data['main_info'] = $this->orders_model->get_all();
        $name = 'orders';
        $this->display_lib->admin($data,$name);
    }
  
//�������� ��� ����� PRINT_R (����� �������)
public function test()
{           
    	if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
            $data = array();
            $name = 'test';
            $this->display_lib->test($data,$name);          
}
  
//�������� ��� ��������� ������ ������ � ���� �������
public function send()
{           
            $data  = array(); 
            $name = 'accept';
            if ($this->session->flashdata('pincode'))
            {
            $this->display_lib->main($data,$name);
            }
            else{
            redirect(base_url());    
            }         
}
  

    //�� ��������� �������� �������� � ������ id
public function add()
{
    	/*	if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		} */
            $data = array();
        //������ �� ����� ��������  
        $data['main_info'] = $this->products_model->get_all();
        $data['fruit'] = $this->products_model->get_fruit();
        $data['vegetable'] = $this->products_model->get_vegetable();
        $data['suhofr'] = $this->products_model->get_suhofr();
        $data['berry'] = $this->products_model->get_berry();
        $data['green'] = $this->products_model->get_green();
        $data['bakalea'] = $this->products_model->get_bakalea();
        $data['conditer'] = $this->products_model->get_conditer();
        $data['milky'] = $this->products_model->get_milky();
        $data['kolbas'] = $this->products_model->get_kolbas();
        $data['oil'] = $this->products_model->get_oil();
        $data['krup'] = $this->products_model->get_krup();
        $data['muka'] = $this->products_model->get_muka();
        $data['makaron'] = $this->products_model->get_makaron();
        $data['specii'] = $this->products_model->get_specii();
        $data['konserv'] = $this->products_model->get_konserv();
        $data['raznoe'] = $this->products_model->get_raznoe();
        $data['cookie'] = $this->products_model->get_cookie();
        
           
    //���� ������ ������ "�������� ��������"  
    if (isset($_POST['add_button']))
    {      
        $this->form_validation->set_rules($this->orders_model->add_rules);
		
     	if ($this->form_validation->run() == TRUE)
        {
            //��������� ����� ��������
            $this->orders_model->add();

            $test = array();
            $test['test_add'] = $this->orders_model->get_latest();                       
            
            foreach ($test['test_add'] as $test_add_result):
            endforeach;
            $add_test = $test_add_result['id_order'];

            $this->orders_model->add_quest($add_test);

            $data['info'] = '������������ ���������';
            $name = 'info';            
            $this->display_lib->products($data,$name);
            
            redirect(base_url().'orders/add');
            
            /*}
            else
            {
            $this->testing_model->add_quest();
            $data['info'] = '����� ����';
            $name = 'test_add';            
            $this->display_lib->admin_page($data,$name);    
            
            }*/
        }
        
        else
        {            
            $name = 'products';
            // �������� ������ ������ data ��� ��� ���� ������� ������� admin_page
            $this->display_lib->products($data,$name);

			
        }
    }  
      
    //���� �� ������ ������ "�������� ��������", ������� ������ �����
    else
    {    
        $name = 'products';
        $this->display_lib->products($data,$name);            
    }  
}

//��������� ������� ������
public function order($id_order)
    {   
        	if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
        $data = array();
        //������ �� ����� ��������  
        $data['main_info'] = $this->orders_model->get_right($id_order);
        $name = 'status';
        $this->display_lib->admin($data,$name);

    }

//���������� (���������� �������� � ���� ������) 
 public function update($page_id = '')
{
    		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
   //���� ������ ������ "�������� ��������"
   if (isset($_POST['update_button']))
   {
       $this->form_validation->set_rules($this->orders_model->update_rules);

	   if ($this->form_validation->run() == TRUE)
       {        
           //��������� ��������
           $this->orders_model->update($page_id);
          
           $data = array('info' => '������ �������');
           $name = 'info';       
           $this->display_lib->admin($data,$name);
       }

       else
       {
           //��������� ������ � ������� � �������� ��� ����������� � ����            ����� (��, ��� �� ������ ���������, ������� �� ����, � ��, ���            ������ - �� ������� POST)
           $data = array ();
           $data = $this->orders_model->get_right($page_id);
           $name = 'status';
           $this->display_lib->simple($data,$name);
       }               
   }

   //�� ������ ������ "�������� ��������"
   else
   { 
       $data = array('info' => '������� �� ��� �������, ��� ��� �� �� ������ ������ "�������� �������"');
       $name = 'info';
       $this->display_lib->products($data,$name);             
   }      
} 

    

}

?>