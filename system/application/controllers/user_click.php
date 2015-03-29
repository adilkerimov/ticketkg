<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_click extends Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_click_model');        
    }
    
      
    public function index()
	{  
       $data['main_info'] = $this->prizes_model->get_all();
       $data['won_count'] = $this->prizes_model->won_prizes();
       $data['auth_session'] = $this->prizes_model->auth_session();
       $data['info'] = "Главная страница - Список розыгрышей призов";
       $this->load->view('main_view',$data);
	}
    
    
    /*
    public function company($page_id = '')
	{  
	   if($page_id)
       {
         
       $data = array ();
       //$data['main_info'] = $this->prizes_model->get_latest();
       $data['prize'] = $this->prizes_model->get_prize($page_id);
       $data['rozygr'] = $this->prizes_model->get_rozygr($page_id);
       
       if ($data['prize'])
       {
       
       if (isset($_POST['my_button']))
       {
       $this->form_validation->set_rules($this->prizes_model->update_rules);

	   if ($this->form_validation->run() == TRUE)
       {        
           //Обновляем страницу
           $this->prizes_model->update($data['prize']['id_prize']);
           
           $data['info'] = 'Поздравляю Вам везет!';
           //$data = array('info' => 'Статус изменен');
           //$name = 'info';       
           //$this->display_lib->admin($data,$name);
           $this->load->view('welcome_message',$data);
       }

       else
       {
           //Формируем массив с данными о странице для подстановки в поля            формы (те, что не прошли валидацию, берутся из базы, а те, что            прошли - из массива POST)
           
           //$data = $this->orders_model->get_right($page_id);
           $data['info'] = 'Че за лажа?!';
           $this->load->view('welcome_message',$data);
       }               
       }

   //Не нажата кнопка "Обновить страницу"
   else
   { 
           $data['info'] = 'Ты на главной';
           $this->load->view('first_view',$data);       
   }  

       }
       
       else
       {
       $data['info'] = "Призов нет братишка!"; 
       $this->load->view('fail_view',$data);
       }
       
       
       
       
       }
       else
       {
       redirect (base_url());
       }
	}
    
    */
    
    
    
    public function company($page_id = '')
	{  
	   if($page_id)
       {
         
       $data = array ();
       //$data['main_info'] = $this->prizes_model->get_latest();
       $data['prize'] = $this->prizes_model->get_prize($page_id);
       $data['rozygr'] = $this->prizes_model->get_rozygr($page_id);
       
       if ($data['prize'])
       {
       
       if (isset($_POST['my_button']))
       {
       
       
       $this->form_validation->set_rules($this->prizes_model->update_rules);     
	   if ($this->form_validation->run() == TRUE)
       {        
           //Обновляем страницу
           $this->prizes_model->update($data['prize']['id_prize']);
           $data['info'] = 'Поздравляю Вам везет!';
           //$data = array('info' => 'Статус изменен');
           //$name = 'info';       
           //$this->display_lib->admin($data,$name);
           $this->load->view('welcome_message',$data);
       }

       else
       {
           //Формируем массив с данными о странице для подстановки в поля            формы (те, что не прошли валидацию, берутся из базы, а те, что            прошли - из массива POST)
           
           //$data = $this->orders_model->get_right($page_id);
           $data['info'] = 'Че за лажа с методом POST?!';
           $this->load->view('welcome_message',$data);
       }               
       }

           //Не нажата кнопка "Обновить страницу"
           else
           { 
                   $data['info'] = 'Ты на главной';
                   $this->load->view('first_view',$data);       
           }  

       }
       
       else
       {
       $data['info'] = "Попытай свое счастье братишка!"; 
       $this->load->view('welcome_message',$data);
       }
       
       
       
       
       }
       else
       {
       redirect (base_url());
       }
	}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */