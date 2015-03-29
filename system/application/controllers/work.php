<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Work extends Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prizes_model');
        $this->load->model('user_click_model');        
    }
    
      
    public function index()
	{
       
       
       $data['info'] = "Главная страница - Список розыгрышей призов";

       $name = 'inception';
       $this->display_lib->inception($data,$name);        
	}
    
   

    
    public function company($page_id = '')
	{  
	   if ($this->ion_auth->logged_in())
       {
        
       if($page_id)
       {
       $data = array ();
       //$data['main_info'] = $this->prizes_model->get_latest();
       $data['prize'] = $this->prizes_model->get_prize($page_id);
       $data['rozygr'] = $this->prizes_model->get_rozygr($page_id); 
       if($data['rozygr'] AND $data['rozygr']['id_status'] == 0)
       {
       $data['gold_prizes'] = $this->prizes_model->get_gold_prizes($page_id);
       $data['silver_prizes'] = $this->prizes_model->get_silver_prizes($page_id);
       $data['bronz_prizes'] = $this->prizes_model->get_bronz_prizes($page_id);
       $data['money_prizes'] = $this->prizes_model->get_money_prizes($page_id);
       $data['won_count'] = $this->prizes_model->won_prizes();
       $data['all_count'] = $this->prizes_model->all_count();
       $data['account_count'] = $this->prizes_model->account_count();
       $data['auth_session'] = $this->prizes_model->auth_session();
       $data['all_user_prizes'] = $this->prizes_model->all_user_prizes();
       $is_click = $this->user_click_model->get_click();
       $name = 'start';
       $name2 = 'first';
       if ($data['prize'])
       {
       if (isset($_POST['my_button']))
       {
       
       if($is_click)
       {
       if($is_click['click_count'] < $data['rozygr']['max_count'])
       {
       $this->user_click_model->update_click($is_click);
       $this->form_validation->set_rules($this->prizes_model->update_rules);     
	   if ($this->form_validation->run() == TRUE)
       {        
           //Обновляем страницу
           $doc = array();
           $doc['id'] = $page_id;
           //$doc['debet_user'] = $page_id;
           $user = $this->ion_auth->user()->row();
           $user_item = $user->id;
           $kt_acc = $this->prizes_model->get_account($user_item);
           $doc['kredit_user'] = $kt_acc['id_account'];;
           $doc['summa'] = $data['prize']['sum'];
           $this->prizes_model->provodka($doc);
           
           
           //Устанавливаем технический счет
           $user_debet = 7;
           $dt_acc = $this->prizes_model->get_account_id($user_debet);
           $doc['debet_user'] = $user_debet;           
           $doc['kredit_bal'] = $kt_acc['balance'];
           $doc['debet_bal'] = $dt_acc['balance'];
           
           $this->prizes_model->kredit($doc);
           $this->prizes_model->debet($doc);
           
           
           $this->prizes_model->update_prize($data['prize']['id_prize']);
           $data['info'] = 'Поздравлем, вы выиграли<br />&laquo;'.$data['prize']['prize_name']."&raquo;";
           if($data['prize']['prize_group'] != 4)
           {
           $data['img'] = 'prize/'.$data['prize']['prize_img'];
           $comp_name = $this->prizes_model->get_comp($data['prize']['id_company']);
           $subj = 'Поздравлем, вы выиграли '.$data['prize']['prize_name'];
           $this->email->from('admin@getlucky.kg', 'Getlucky.kg');
           $this->email->subject($subj);
           $this->email->to($user->email);
           $text = "Поздравлем Вас с выигрышем &laquo;".$data['prize']['prize_name']."&raquo; от компании ".$comp_name['company']."!<br>Раздача призов осуществляется каждую пятницу и субботу в офисе проекта Getlucky.kg.<br>Вы можете забрать свой приз по адресу Горького/Панфилова, здание рядом с магазином Народный.<br><br>Перед приходом просим Вас заранее позвонить по контактным данным, указанным на сайте.<br>Более точную информацию по местоположению офиса Вы сможете найти на странице http://getlucky.kg/contact.<br><br>C уважением,<br>Администрация Getlucky.kg";
           $this->email->message('Здравствуйте, '.$user->email.'!<br /><br />'.$text);
           $this->email->send();
           }
           else
           {
           $data['img'] = 'coin1.gif'; 
           }
           //$data = array('info' => 'Статус изменен');
           //$name = 'info';       
           //$this->display_lib->admin($data,$name);
           //$this->load->view('welcome_message',$data);
           $this->display_lib->rozyg($data,$name);
       }
       else
       {
           //Формируем массив с данными о странице для подстановки в поля            формы (те, что не прошли валидацию, берутся из базы, а те, что            прошли - из массива POST)
           
           //$data = $this->orders_model->get_right($page_id);
           $data['info'] = 'Че за лажа с методом POST?!';
           $data['img'] = '0.gif';
           //$this->load->view('welcome_message',$data);
           $this->display_lib->rozyg($data,$name);
       }
       }
       else
       {
       $data['info'] = "У Вас закончился лимит попыток!<br /> <a href='".base_url()."' style='border-bottom:1px dashed ;'>Попробуйте другие</a>"; 
       $data['img'] = '0.gif';
       //$this->load->view('welcome_message',$data); 
       $this->display_lib->rozyg($data,$name);
       }
       }
       else
       {
       $this->user_click_model->user_click();
       $this->form_validation->set_rules($this->prizes_model->update_rules);     
	   if ($this->form_validation->run() == TRUE)
       {        
        
           //Обновляем страницу
           $doc = array();
           $doc['id'] = $page_id;
           //$doc['debet_user'] = $page_id;
           $user = $this->ion_auth->user()->row();
           $user_item = $user->id;
           $kt_acc = $this->prizes_model->get_account($user_item);
           $doc['kredit_user'] = $kt_acc['id_account'];;
           $doc['summa'] = $data['prize']['sum'];
           $this->prizes_model->provodka($doc);
           
           
           //Устанавливаем технический счет
           $user_debet = 7;
           $dt_acc = $this->prizes_model->get_account_id($user_debet);
           $doc['debet_user'] = $user_debet;           
           $doc['kredit_bal'] = $kt_acc['balance'];
           $doc['debet_bal'] = $dt_acc['balance'];
           
           $this->prizes_model->kredit($doc);
           $this->prizes_model->debet($doc);
           
           //Обновляем страницу
           $this->prizes_model->update_prize($data['prize']['id_prize']);
           $data['info'] = 'Поздравляю вы выиграли<br />&laquo;'.$data['prize']['prize_name']."&raquo;";
           if($data['prize']['prize_group'] != 4)
           {
           $data['img'] = 'prize/'.$data['prize']['prize_img']; 
           $comp_name = $this->prizes_model->get_comp($data['prize']['id_company']);
           $subj = 'Поздравлем, вы выиграли '.$data['prize']['prize_name'];
           $this->email->from('admin@getlucky.kg', 'Getlucky.kg');
           $this->email->subject($subj);
           $this->email->to($user->email);
           $text = "Поздравлем Вас с выигрышем &laquo;".$data['prize']['prize_name']."&raquo; от компании ".$comp_name['company']."!<br>Раздача призов осуществляется каждую пятницу и субботу в офисе проекта Getlucky.kg.<br>Вы можете забрать свой приз по адресу Горького/Панфилова, здание рядом с магазином Народный.<br><br>Перед приходом просим Вас заранее позвонить по контактным данным, указанным на сайте.<br>Более точную информацию по местоположению офиса Вы сможете найти на странице http://getlucky.kg/contact.<br><br>C уважением,<br>Администрация Getlucky.kg";
           $this->email->message('Здравствуйте, '.$user->email.'!<br /><br />'.$text);
           $this->email->send(); 
           }
           else
           {
           $data['img'] = 'coin1.gif'; 
           }
           //$data = array('info' => 'Статус изменен');
           //$name = 'info';       
           //$this->display_lib->admin($data,$name);
           //$this->load->view('welcome_message',$data);
           $this->display_lib->rozyg($data,$name);
       }
       else
       {
           //Формируем массив с данными о странице для подстановки в поля            формы (те, что не прошли валидацию, берутся из базы, а те, что            прошли - из массива POST)
           
           //$data = $this->orders_model->get_right($page_id);
           $data['info'] = 'Че за лажа с методом POST?!';
           $data['img'] = '0.gif';
           //$this->load->view('welcome_message',$data);
           $this->display_lib->rozyg($data,$name);
       }
       }               
       }

           //Не нажата кнопка "Обновить страницу"
           else
           { 
                   $data['info'] = 'Вы на главной';
                   //$this->load->view('first_view',$data);
                   $this->display_lib->first($data,$name2);       
           }  

       }
       
       else
       {
       if (isset($_POST['my_button']))
       {
       if($is_click)
       {
       if($is_click['click_count'] < $data['rozygr']['max_count'])
       {
       $this->user_click_model->update_click($is_click);
       $data['info'] = "Попробуйте еще раз, вам повезет"; 
       $data['img'] = '0.gif';
       //$this->load->view('welcome_message',$data);
       $this->display_lib->rozyg($data,$name);
       }
       else
       {
       $data['info'] = "У Вас закончился лимит попыток!<br /> <a href='".base_url()."' style='border-bottom:1px dashed ;'>Попробуйте другие</a>"; 
       $data['img'] = '0.gif';
       //$this->load->view('welcome_message',$data);
       $this->display_lib->rozyg($data,$name); 
       }
       }
       else
       {
       $this->user_click_model->user_click();
       $data['info'] = "Попробуйте еще раз, вам повезет"; 
       $data['img'] = '0.gif';
       //$this->load->view('welcome_message',$data);
       $this->display_lib->rozyg($data,$name);
       }
       }
       else
       {
       $data['info'] = "Нажмите на кнопку"; 
       $data['img'] = '0.gif';
       //$this->load->view('first_view',$data);
       $this->display_lib->first($data,$name2);
       } 
       
       }  
       }
       else{
       redirect (base_url()); 
       }
       }
       else{
       redirect (base_url()); 
       }
       }
        else
        {
            redirect (base_url().'auth/login');
        }
	}

}
