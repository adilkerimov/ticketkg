<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
        $this->load->model('comments_model'); 
        $this->load->model('items_model');
        $this->load->model('share_model');
        $this->load->library('ciqrcode');
               
    }
      
    public function index()
	{
       $data['items'] = $this->items_model->get_items();
       $data['menu_first'] = $this->items_model->get_menu_first();    
       //$name = 'index';
       $name = 'index';
       $this->display_lib->main($data,$name);     
	}

    public function qr()
    {
       
        $this->load->view('qr');     
    }
    
    public function view($page_id = '',$page_id2 = '',$page_id3 = '',$page_id4 = '',$page_id5 = '')
	{  
         if($page_id5)
         {
         redirect (base_url());
         }
         elseif($page_id4)
         {
         $check4 = $this->items_model->get_tickets($page_id4);
         $check3 = $this->items_model->get_item($page_id3);
         if($check4){
         if($this->ion_auth->logged_in()){
          $user = $this->ion_auth->user()->row(); 
          $data['user_seat'] = $this->items_model->user_seats($user->id);
          $data['u_seat_count'] = $this->items_model->u_seat_count($user->id);
          $data['u_seat_sum'] = $this->items_model->u_seat_sum($user->id);
         } 
         $data['acts'] = $this->items_model->get_acts_in($page_id3);
         $data['comments'] = $this->items_model->get_comments($page_id3);
         $data['items_act'] = $this->items_model->get_items_act($page_id3);
         $data['seats'] = $this->items_model->get_seats($page_id4);
         $data['main_info'] = $check3;
         $data['tickets'] = $check4;
         $data['page_id'] = $page_id;
         $data['page_id2'] = $page_id2;
         $data['page_id3'] = $page_id3;
         $name = 'seats';
         $this->display_lib->seat($data,$name);
         }
         else{
         redirect (base_url());
         }
         }
         elseif($page_id3)
         {
         $check3 = $this->items_model->get_item($page_id3);
         if($check3){
         $data['acts'] = $this->items_model->get_acts_in($page_id3);
         $data['comments'] = $this->items_model->get_comments($page_id3);
         $data['items_act'] = $this->items_model->get_items_act($page_id3);
         $data['main_info'] = $check3;
         $data['page_id'] = $page_id;
         $data['page_id2'] = $page_id2;
         $data['page_id3'] = $page_id3;
         $name = 'item';
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
         $name = 'institution';
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
         $name = 'institution';
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

    public function comment()
    {  
         if($_POST){
         if (!$this->ion_auth->logged_in())
         {
         redirect(base_url());
         }
         else{
         $this->form_validation->set_rules($this->comments_model->add_rules); 
         $data['link'] = $this->input->post('link');
         if($this->form_validation->run() == TRUE){   
         //$data['comments'] = $this->comments_model->get_comments($page_id3);
         $this->comments_model->add_comment();
         $data['info'] = 'Комментарий добавлен.';
         $name = 'info';
         $this->display_lib->main($data,$name);
         }
         else{
         $data['info'] = 'Вышла ошибка.';
         $name = 'info';
         $this->display_lib->main($data,$name);   
         }
         }
         }
         else{
         redirect (base_url());
         }

    } 



  public function catalog($page_id = '',$page_id2 = '',$page_id3 = '',$page_id4 = '',$page_id5 = '')
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
         $this->display_lib->item($data,$name);  
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
    
    public function buy_ticket(){
        $is_there = $this->share_model->validate_has_ticket();
        if(empty($is_there)){
        $this->share_model->validate_buy_ticket();  
        }
		else{
        echo 'К сожалению данный билет уже забронирован либо выкуплен.';
        }
	}

    public function abort_ticket(){
        $is_there = $this->share_model->user_has_ticket();
        if(empty($is_there)){
        echo 'Бронь по данному билету не может быть удалена.';
        }
        else{
        $this->share_model->user_abort_ticket();
        }
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
