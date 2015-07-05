<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('items_model');
        $this->load->model('user_click_model');
        $this->load->model('share_model');
        $this->load->model('items_model');         
    }
    
        public function index()
	{
       redirect (base_url());       
	}
    
    
      public function user_account()
	{
	   if ($this->ion_auth->logged_in())
       {
       $page = 'user_account';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['menu_third'] = $this->items_model->get_menu_third();
       
       $user = $this->ion_auth->user()->row();
       $just_get = $user->id;
       $data['first_name'] = $user->first_name;
       $data['last_name'] = $user->last_name;
       $data['phone'] = $user->phone;
       $data['email'] = $user->email;
       
       //$data['user_account'] = $this->items_model->user_account($just_get);
       //$data['user_prizes'] = $this->share_model->user_prizes($just_get);
       
       $name = 'user_account';
       $this->display_lib->simple($data,$name);   
       }
       else
       {
       redirect (base_url().'auth/login');
       }
	}




      public function user_info()
      {
         if ($this->ion_auth->logged_in())
       {       
       $page = 'userinfo';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['menu_third'] = $this->items_model->get_menu_third();
       //$data['won_count'] = $this->items_model->won_prizes();
       //$data['all_count'] = $this->items_model->all_count();
       //$data['account_count'] = $this->items_model->account_count();
       //$data['auth_session'] = $this->items_model->auth_session();
       
       
       $user = $this->ion_auth->user()->row();
       $just_get = $user->id;
       $data['first_name'] = $user->first_name;
       $data['last_name'] = $user->last_name;
       $data['phone'] = $user->phone;
       $data['email'] = $user->email;
       
       $data['user_account'] = $this->items_model->user_account($just_get);
       
       
       $name = 'userinfo';
       $this->display_lib->simple($data,$name);        
       }
       else
       {
       redirect (base_url().'auth/login');
       }
      }

    
    
    
    
    
    
        public function about()
	{
       $page = 'about';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['won_count'] = $this->items_model->won_prizes();
       $data['all_count'] = $this->items_model->all_count();
       $data['account_count'] = $this->items_model->account_count();
       $data['auth_session'] = $this->items_model->auth_session();
       $name = 'sample';
       $this->display_lib->simple($data,$name);        
	}
    
            public function agreement()
	{
       $page = 'agreement';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['menu_third'] = $this->items_model->get_menu_third();
       $data['page_id'] = '';
       //$data['all_count'] = $this->items_model->all_count();
       //$data['account_count'] = $this->items_model->account_count();
       $data['auth_session'] = $this->items_model->auth_session();
       $name = 'sample';
       $this->display_lib->main($data,$name);        
	}
    
            public function rules()
	{
       $page = 'rules';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['won_count'] = $this->items_model->won_prizes();
       $data['all_count'] = $this->items_model->all_count();
       $data['account_count'] = $this->items_model->account_count();
       $data['auth_session'] = $this->items_model->auth_session();
       $name = 'sample';
       $this->display_lib->simple($data,$name);        
	}
    
            public function squad()
	{
       $page = 'squad';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['won_count'] = $this->items_model->won_prizes();
       $data['all_count'] = $this->items_model->all_count();
       $data['account_count'] = $this->items_model->account_count();
       $data['auth_session'] = $this->items_model->auth_session();
       $name = 'sample';
       $this->display_lib->simple($data,$name);        
	}
    
            public function help()
	{
       $page = 'help';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['won_count'] = $this->items_model->won_prizes();
       $data['all_count'] = $this->items_model->all_count();
       $data['account_count'] = $this->items_model->account_count();
       $data['auth_session'] = $this->items_model->auth_session();
       $name = 'sample';
       $this->display_lib->simple($data,$name);        
	}
    
            public function howitworks()
	{
       $page = 'howitworks';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['won_count'] = $this->items_model->won_prizes();
       $data['all_count'] = $this->items_model->all_count();
       $data['account_count'] = $this->items_model->account_count();
       $data['auth_session'] = $this->items_model->auth_session();
       $name = 'sample';
       $this->display_lib->simple($data,$name);        
	}
    
            public function faq()
	{
       $page = 'faq';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['won_count'] = $this->items_model->won_prizes();
       $data['all_count'] = $this->items_model->all_count();
       $data['account_count'] = $this->items_model->account_count();
       $data['auth_session'] = $this->items_model->auth_session();
       $name = 'sample';
       $this->display_lib->simple($data,$name);        
	}
    
            public function support()
	{
       $page = 'support';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['won_count'] = $this->items_model->won_prizes();
       $data['all_count'] = $this->items_model->all_count();
       $data['account_count'] = $this->items_model->account_count();
       $data['auth_session'] = $this->items_model->auth_session();
       $name = 'sample';
       $this->display_lib->simple($data,$name);        
	}
    
            public function partners()
	{
       $page = 'partners';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['won_count'] = $this->items_model->won_prizes();
       $data['all_count'] = $this->items_model->all_count();
       $data['account_count'] = $this->items_model->account_count();
       $data['auth_session'] = $this->items_model->auth_session();
       $name = 'sample';
       $this->display_lib->simple($data,$name);        
	}
    
            public function addcompany()
	{
       $page = 'addcompany';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['won_count'] = $this->items_model->won_prizes();
       $data['all_count'] = $this->items_model->all_count();
       $data['account_count'] = $this->items_model->account_count();
       $data['auth_session'] = $this->items_model->auth_session();
       $name = 'sample';
       $this->display_lib->simple($data,$name);        
	}
    
            public function donecompany()
	{
       $page = 'donecompany';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['won_count'] = $this->items_model->won_prizes();
       $data['all_count'] = $this->items_model->all_count();
       $data['account_count'] = $this->items_model->account_count();
       $data['auth_session'] = $this->items_model->auth_session();
       $name = 'sample';
       $this->display_lib->simple($data,$name);        
	}
    
            public function contact()
	{
       $page = 'contact';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['won_count'] = $this->items_model->won_prizes();
       $data['all_count'] = $this->items_model->all_count();
       $data['account_count'] = $this->items_model->account_count();
       $data['auth_session'] = $this->items_model->auth_session();
       $name = 'sample';
       $this->display_lib->simple($data,$name);        
	}
    
                public function howtowin()
	{
       $page = 'howtowin';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['won_count'] = $this->items_model->won_prizes();
       $data['all_count'] = $this->items_model->all_count();
       $data['account_count'] = $this->items_model->account_count();
       $data['auth_session'] = $this->items_model->auth_session();
       $name = 'sample';
       $this->display_lib->simple($data,$name);        
	}
    
      
    
    
    
    
    public function withdrawal()
	{
	   if ($this->ion_auth->logged_in())
       {
       $page = 'userinfo';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['won_count'] = $this->items_model->won_prizes();
       $data['all_count'] = $this->items_model->all_count();
       $data['account_count'] = $this->items_model->account_count();
       $data['auth_session'] = $this->items_model->auth_session();
       $data['info'] = '';
       
       $doc['summa'] = $this->input->post('sum');
       
       $user = $this->ion_auth->user()->row();
       $just_get = $user->id;
       $data['withdrawals'] = $this->items_model->withdrawal($just_get);      
       $data['user_account'] = $this->items_model->user_account($just_get);
       $data['first_name'] = $user->first_name;
       $data['last_name'] = $user->last_name;
       $data['phone'] = $user->phone;
       $data['email'] = $user->email;
       
       if (isset($_POST['button_apply']))
       {
       $this->form_validation->set_rules($this->items_model->add_rules);
       if ($this->form_validation->run() == TRUE)
       {
       
       $money_win = $this->items_model->user_moneys($just_get);//призы
       $account_bal = $this->items_model->user_account($just_get);//баланс счета
       $money_doc = $this->items_model->user_docs($just_get);//кредитовые документы
       $money_with_doc = $this->items_model->user_with_docs($just_get);//дебетовые документы
       $saldo = $money_doc['sum'] - $money_with_doc['sum'];//сальдо
       
       if($saldo == $account_bal['balance'] AND $saldo >= $doc['summa'] AND $saldo >= 100)
       {
       $doc['id'] = 0;
       $doc['debet_user'] = $account_bal['id_account'];
           
       //Устанавливаем технический счет
       $user_debet = 5;
       $kt_acc = $this->items_model->get_account_id($user_debet);
       $doc['kredit_user'] = $user_debet;         
       $doc['kredit_bal'] = $kt_acc['balance'];
       $doc['debet_bal'] = $account_bal['balance'];
       
       $this->items_model->provodka_with($doc);    
       $this->items_model->kredit_with($doc);
       $this->items_model->debet_with($doc);
       $this->items_model->apply();
       $data['withdrawals'] = $this->items_model->withdrawal($just_get);
       
       $data['info'] = "<span style='color: #2B6FA2; padding: 0;'>Поздравляем, ваша заявка на сумму ".$doc['summa']." сом принята к исполнению.<br /><br />
       Срок исполнения заявки 24 часа с момента создания.</span><br /><br />";
       
       //$comp_name = $this->items_model->get_comp($data['prize']['id_company']);
       $subj = "Поздравляем, ваша заявка на сумму ".$doc['summa']." сом принята";
       $this->email->from('admin@getlucky.kg', 'Getlucky.kg');
       $this->email->subject($subj);
       $this->email->to($user->email);
       //$text = "Поздравлем Вас с выигрышем &laquo;".$data['prize']['prize_name']."&raquo; от компании ".$comp_name['company']."!<br>Раздача призов осуществляется каждую пятницу и субботу в офисе проекта Getlucky.kg.<br>Вы можете забрать свой приз по адресу Горького/Панфилова, здание рядом с магазином Народный.<br><br>Перед приходом просим Вас заранее позвонить по контактным данным, указанным на сайте.<br>Более точную информацию по местоположению офиса Вы сможете найти на странице http://getlucky.kg/contact.<br><br>C уважением,<br>Администрация Getlucky.kg";
       $this->email->message("<span style='color: #2B6FA2; padding: 0;'>Здравствуйте, ".$user->email."!</span><br /><br />".$data['info']);
       $this->email->send(); 
       $name = 'apply';
       $this->display_lib->simple($data,$name);
       
       }
       else
       {
       $data['info'] = "<span style='color: red; padding: 0;'>У вас недостаточно средств на счете!</span><br /><br />";
       $name = 'apply';
       $this->display_lib->simple($data,$name);
       }
       }

       //Не нажата кнопка "Обновить страницу"
       else
       { 
       $name = 'apply';
       $this->display_lib->simple($data,$name);      
       }  
       }
       else
       {
       $name = 'apply';
       $this->display_lib->simple($data,$name);
       }
       }
       else
       {
       redirect (base_url().'auth/login');
       }	   
    
    }
    
    
    
    
    
    
        public function apply()
	{
       $page = 'userinfo';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['won_count'] = $this->items_model->won_prizes();
       $data['all_count'] = $this->items_model->all_count();
       $data['account_count'] = $this->items_model->account_count();
       $data['auth_session'] = $this->items_model->auth_session();
       
       $user = $this->ion_auth->user()->row();
       $just_get = $user->id;
       
       $data['first_name'] = $user->first_name;
       $data['last_name'] = $user->last_name;
       $data['phone'] = $user->phone;
       $data['email'] = $user->email;
       
       
       $data['user_account'] = $this->items_model->user_account($just_get);
       
       $name = 'withdrawal';
       $this->display_lib->simple($data,$name);        
	}
     
    
    
    public function journal($start_from = 0)
	{  

       $page = 'journal';
       $data['main_info'] = $this->items_model->get_page($page);
       $data['won_count'] = $this->items_model->won_prizes();
       $data['all_count'] = $this->items_model->all_count();
       $data['account_count'] = $this->items_model->account_count();
       $data['auth_session'] = $this->items_model->auth_session();
       
        
       $this->load->library('pagination');
       $this->load->library('pagination_lib');
       $limit = 50;
       $total = $this->items_model->count_by();;
       
       $settings = $this->pagination_lib->get_settings($total,$limit);
       $this->pagination->initialize($settings);
       $data['page_nav'] = $this->pagination->create_links();
       
       $data['all_user_prizes'] = $this->items_model->all_win_prizes($limit,$start_from);
       
       $name = 'journ';       
       $this->display_lib->journal($data,$name);        

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */