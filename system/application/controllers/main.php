<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
        $this->load->model('user_click_model'); 
        $this->load->model('items_model');
        $this->load->model('share_model');
               
    }
      
    public function index()
	{
       $data['items'] = $this->items_model->get_items();
       $data['menu_first'] = $this->items_model->get_menu_first();    
       $name = 'index';
       $this->display_lib->main($data,$name);     
	}
    
    public function catalog($page_id = '',$page_id2 = '',$page_id3 = '',$page_id4 = '')
	{  
         if($page_id4)
         {
         redirect (base_url());
         }
         elseif($page_id3)
         {
         $check3 = $this->category_model->get_one_category($page_id3);
         if($check3){
         $third_menu = $this->items_model->get_menu_link($page_id3);
         $data['items'] = $this->items_model->get_items_third($third_menu['id_menu']);
         $data['menu_first'] = $this->items_model->get_menu_first();
         $name = 'index';
         $this->display_lib->main($data,$name);  
         }
         else{
         redirect (base_url());
         }
         }
         elseif($page_id2)
         {
         $check2 = $this->category_model->get_one_category($page_id2);
         if($check2){
         $second_menu = $this->items_model->get_menu_link($page_id2);
         $data['items'] = $this->items_model->get_items_second($second_menu['id_menu']);
         $data['menu_first'] = $this->items_model->get_menu_first();
         $name = 'index';
         $this->display_lib->main($data,$name);  
         }
         else{
         redirect (base_url());
         }
         }
         elseif($page_id)
         {
         $check = $this->category_model->get_one_category($page_id);
         if($check){
         $first_menu = $this->items_model->get_menu_link($page_id);
         $data['items'] = $this->items_model->get_items_first($first_menu['id_menu']);
         $data['menu_first'] = $this->items_model->get_menu_first();
         $name = 'index';
         $this->display_lib->main($data,$name);
         //print_r($first_menu);  
         }
         else{
         redirect (base_url());
         }
         }
         else
         {
         redirect (base_url());
         }
 
	}    
    
    
    
    public function item($page_id = '')
	{  
	   if ($this->ion_auth->logged_in())
       {
        
       if($page_id)
       {
       $data = array ();
       $data['only_item'] = $this->items_model->get_item($page_id);
       //$data['main_info'] = $this->category_model->get_latest();
       $name = 'item';
       $data['info'] = 'Вы на главной';
       $this->display_lib->inception($data,$name);       
       
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
    
    public function buy_share(){
		$this->share_model->validate_buy_share();
        
		redirect('main');
	}
    
    public function show_my_share(){
        $data['items'] = $this->items_model->get_items();
        $item_id = $data['items'];
        $this->load->view('ajax',$data);
	}
    
    public function show_my_login(){
        $this->load->view('auth/login_only_view');
	}

}
