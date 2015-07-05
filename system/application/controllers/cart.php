<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
        $this->load->model('user_click_model'); 
        $this->load->model('items_model');
        $this->load->model('share_model');
        $this->load->model('orders_model');
    }
      
    public function index()
	{
       $data['items'] = $this->items_model->get_items();
       $data['menu_first'] = $this->items_model->get_menu_first();    
       $data['menu_third'] = $this->items_model->get_menu_third();
    if($this->cart->contents())
    {   
    if (isset($_POST['add_button']))
    {      
        $this->form_validation->set_rules($this->orders_model->add_rules);
		
     	if ($this->form_validation->run() == TRUE)
        {
            //Добавляем новый материал
            $this->orders_model->add();

            $test = array();
            $test['test_add'] = $this->orders_model->get_latest();                       
            
            foreach ($test['test_add'] as $test_add_result):
            endforeach;
            $add_test = $test_add_result['id_order'];
            $add_pincode = $test_add_result['pincode'];
            $this->orders_model->add_quest($add_test);
            $this->cart->destroy();
            $data['info'] = 'Ваш заказ №'.$add_test.' отправлен на подтверждение оператору';
            $newdata = array(
                   'message'  => $add_test,
                   'pincode'  => $add_pincode
            );
            //--------------------- Уведомление на почту 04082014 ------------------------
            $subj = "Поздравляем, ваш заказ создан";
            $email_client = $this->input->post('email');
            $this->email->from('admin@getlucky.kg', 'Snabjenec.kg');
            $this->email->subject($subj);
            $this->email->to($email_client); //$user->email
            //$text = "Поздравлем Вас с выигрышем &laquo;".$data['prize']['prize_name']."&raquo; от компании ".$comp_name['company']."!<br>Раздача призов осуществляется каждую пятницу и субботу в офисе проекта Getlucky.kg.<br>Вы можете забрать свой приз по адресу Горького/Панфилова, здание рядом с магазином Народный.<br><br>Перед приходом просим Вас заранее позвонить по контактным данным, указанным на сайте.<br>Более точную информацию по местоположению офиса Вы сможете найти на странице http://getlucky.kg/contact.<br><br>C уважением,<br>Администрация Getlucky.kg";
            $this->email->message("<span style='color: #2B6FA2; padding: 0;'>Здравствуйте!</span><br /><br />".$data['info']);
            //$this->email->send(); 
            //----------------------------------------------------------------------------
            $this->session->set_flashdata($newdata);
            redirect(base_url().'orders/send');
            $this->display_lib->products($data,$name);
            
        }
        else
        {
    $data['view'] = 'Test';//redirect(base_url());
    
    $name = 'cart';
    $this->display_lib->main_catalog($data,$name); 
        }
        }
        else
        {
    $data['view'] = 'Test';//redirect(base_url());
    
    $data['all'] = $this->items_model->get_all();
    $name = 'cart';
    $this->display_lib->main_catalog($data,$name); 
        }
        }
        else{
    $name = 'empty_cart';
    $this->display_lib->main_catalog($data,$name); 
        }  
	}
    
    
    
    
    
}
