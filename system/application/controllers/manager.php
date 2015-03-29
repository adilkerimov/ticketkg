<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manager extends Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prizes_model');
        $this->load->model('user_click_model');  
        $this->load->model('manager_model');         
    }
    
      
    public function index()
	{         
        if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		elseif (!$this->ion_auth->in_group('managers')) //remove this elseif if you want to enable this for non-admins
		{
			//redirect them to the home page because they must be an administrator to view this
			return show_error('У вас недостаточно прав чтобы просмотреть данную страницу. Вы должный быть менеджером.');
		}
        else
        {
	   $data['main_info'] = $this->prizes_model->get_all();
       $data['won_count'] = $this->prizes_model->won_prizes();
       $data['account_count'] = $this->prizes_model->account_count();
       $data['auth_session'] = $this->prizes_model->auth_session();
       $data['all_count'] = $this->prizes_model->all_count();
       $data['all_user_prizes'] = $this->prizes_model->all_user_prizes();
       $user = $this->ion_auth->user()->row();
       $manager_id = $user->company;
       $data['main_info'] = $this->manager_model->get_manager($manager_id);
       $name = 'manager';
       $this->display_lib->main($data,$name); 
        }
	}
    
    
    public function company($page_id = '')
	{  
	   if ($this->ion_auth->logged_in())
        {
        
        
       if($page_id)
       {
        
       $data = array ();
       $data['prize'] = $this->prizes_model->get_prize($page_id);
       $data['rozygr'] = $this->prizes_model->get_rozygr($page_id);
       $data['main_click'] = $this->manager_model->unique_date($page_id);
       $data['all_click'] = $this->manager_model->unique_all($page_id);
       $data['gold_prizes'] = $this->prizes_model->get_gold_prizes($page_id);
       $data['silver_prizes'] = $this->prizes_model->get_silver_prizes($page_id);
       $data['bronz_prizes'] = $this->prizes_model->get_bronz_prizes($page_id);
       $data['money_prizes'] = $this->prizes_model->get_money_prizes($page_id);
       $data['all_user_prizes'] = $this->prizes_model->all_user_prizes();
       
       $id_roz = $data['rozygr']['id_company'];
       $user = $this->ion_auth->user()->row();
       $manager_id = $user->company;       
       //echo $id_roz;
      // echo $manager_id;
        
        if($id_roz===$manager_id)
        {
           //Обновляем страницу
           $data['info'] = 'Поздравляю Вам везет!';
           //$data = array('info' => 'Статус изменен');
           //$name = 'info';       
           //$this->display_lib->admin($data,$name);
        $name = 'static';
        $data['won_count'] = $this->prizes_model->won_prizes();
        $data['account_count'] = $this->prizes_model->account_count();
        $data['auth_session'] = $this->prizes_model->auth_session();
        $data['all_count'] = $this->prizes_model->all_count();
        $this->display_lib->main($data,$name); 
        }
        else
        {
           redirect (base_url().'manager'); 
        }
       }
       

       else
       {
       redirect (base_url());
       }
       }
       
        else
        {
            redirect (base_url().'auth/login');
        }
	}
    
    
        public function manage()
	{
       $data['main_info'] = $this->prizes_model->get_all();
       $data['won_count'] = $this->prizes_model->won_prizes();
       $data['account_count'] = $this->prizes_model->account_count();
       $data['auth_session'] = $this->prizes_model->auth_session();
       $data['info'] = "Главная страница - Список розыгрышей призов";
       $this->load->view('main_view',$data);
	}
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */