<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adimin extends Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
        $this->load->model('items_model');  
        $this->load->model('manager_model');   
        $this->load->helper('csv');
        $this->load->helper('xls');   
    }
    
      
    public function index()
	{
       $user = $this->ion_auth->user()->row();
       $data['menu_first'] = $this->items_model->get_menu_admin();
       $data['main_info'] = $this->category_model->get_all();
       //$data['won_count'] = $this->category_model->won_prizes();
       //$data['account_count'] = $this->category_model->account_count();
       //$data['auth_session'] = $this->category_model->auth_session();
       //$data['info'] = "Главная страница - Список розыгрышей призов";
        $data['won_count'] = $this->category_model->won_prizes();
        $data['all_count'] = $this->category_model->all_count();
        $data['account_count'] = $this->category_model->account_count();
        $data['auth_session'] = $this->category_model->auth_session();       
        $data['all_user_prizes'] = $this->category_model->all_user_prizes();
       
       
        if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) //remove this elseif if you want to enable this for non-admins
		{
			//redirect them to the home page because they must be an administrator to view this
			return show_error('У вас недостаточно прав чтобы просмотреть данную страницу. Вы должный быть администратором.');
		}
        else
        {
        $data['info'] = 'Главная страница Администратора';
        $name = 'admin';
        $this->display_lib->admin($data,$name); 
        }
	}
    
    
    public function email()
	{   
        if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) //remove this elseif if you want to enable this for non-admins
		{
			//redirect them to the home page because they must be an administrator to view this
			return show_error('У вас недостаточно прав чтобы просмотреть данную страницу. Вы должный быть администратором.');
		}
        else
        {
        $data['won_count'] = $this->category_model->won_prizes();
        $data['all_count'] = $this->category_model->all_count();
        $data['account_count'] = $this->category_model->account_count();
        $data['auth_session'] = $this->category_model->auth_session();
        $data['all_user_prizes'] = $this->category_model->all_user_prizes();
        
        $data['info'] = 'Рассылка сообщений';
        $name = 'message';
        $this->display_lib->admin($data,$name); 
        }
	}
    
    
    public function email_send()
	{     
        if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) //remove this elseif if you want to enable this for non-admins
		{
			//redirect them to the home page because they must be an administrator to view this
			return show_error('У вас недостаточно прав чтобы просмотреть данную страницу. Вы должный быть администратором.');
		}
        else
        {
        $data['won_count'] = $this->category_model->won_prizes();
        $data['all_count'] = $this->category_model->all_count();
        $data['account_count'] = $this->category_model->account_count();
        $data['auth_session'] = $this->category_model->auth_session(); 
        $data['all_user_prizes'] = $this->category_model->all_user_prizes();
                    
        $this->email->from('admin@getlucky.kg', 'Getlucky.kg');
        $text = $this->input->post('message');
        $theme = $this->input->post('theme');
        $this->email->subject($theme);
        
        
        $emails = $this->category_model->email_array();
        foreach ($emails as $item):
        $this->email->to($item['email']);
        $this->email->message('Здравствуйте '.$item['email'].'<br /><br />'.$text);
        if($this->email->send())
        {
        //echo '<br />Email sent.';
        }
        else
        {
        //show_error($this->email->print_debugger());
        echo 'Ошибка при отправке пользователю '.$item['email']."<br />";
        }
        endforeach;
        $data['info'] = 'Завершение рассылки сообщений.';
        $name = 'admin';
        $this->display_lib->admin($data,$name); 
        }
	}
    
    
    
    public function generate()
	{
       $user = $this->ion_auth->user()->row();
       $data['main_info'] = $this->category_model->get_all();
       //$data['won_count'] = $this->category_model->won_prizes();
       //$data['account_count'] = $this->category_model->account_count();
       //$data['auth_session'] = $this->category_model->auth_session();
       //$data['info'] = "Главная страница - Список розыгрышей призов";
       
       
       
       
        if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) //remove this elseif if you want to enable this for non-admins
		{
			//redirect them to the home page because they must be an administrator to view this
			return show_error('У вас недостаточно прав чтобы просмотреть данную страницу. Вы должный быть администратором.');
		}
        else
        {

        $this->load->view('generate_view',$data);
        }
	}
    
    
        public function csv_gen()
	{
       $user = $this->ion_auth->user()->row();
       $data['main_info'] = $this->category_model->get_all();
       //$data['won_count'] = $this->category_model->won_prizes();
       //$data['account_count'] = $this->category_model->account_count();
       //$data['auth_session'] = $this->category_model->auth_session();
       //$data['info'] = "Главная страница - Список розыгрышей призов";
       
       
       
       
        if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) //remove this elseif if you want to enable this for non-admins
		{
			//redirect them to the home page because they must be an administrator to view this
			return show_error('У вас недостаточно прав чтобы просмотреть данную страницу. Вы должный быть администратором.');
		}
        else
        {

        $this->load->view('csv_view',$data);
        }
	}
    
    public function money_gen()
	{
       $user = $this->ion_auth->user()->row();
       $data['main_info'] = $this->category_model->get_all();
       //$data['won_count'] = $this->category_model->won_prizes();
       //$data['account_count'] = $this->category_model->account_count();
       //$data['auth_session'] = $this->category_model->auth_session();
       //$data['info'] = "Главная страница - Список розыгрышей призов";
       $data['all_user_prizes'] = $this->category_model->all_user_prizes();

        if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) //remove this elseif if you want to enable this for non-admins
		{
			//redirect them to the home page because they must be an administrator to view this
			return show_error('У вас недостаточно прав чтобы просмотреть данную страницу. Вы должный быть администратором.');
		}
        else
        {

        $this->load->view('money_view',$data);
        }
	}
    
    public function add_rozyg()
	{
       $user = $this->ion_auth->user()->row();
       $data['main_info'] = $this->category_model->get_all();
       //$data['won_count'] = $this->category_model->won_prizes();
       //$data['account_count'] = $this->category_model->account_count();
       //$data['auth_session'] = $this->category_model->auth_session();
       //$data['info'] = "Главная страница - Список розыгрышей призов";
       $data['all_user_prizes'] = $this->category_model->all_user_prizes();

        if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) //remove this elseif if you want to enable this for non-admins
		{
			//redirect them to the home page because they must be an administrator to view this
			return show_error('У вас недостаточно прав чтобы просмотреть данную страницу. Вы должный быть администратором.');
		}
        else
        {

        $this->load->view('add_rozyg_view',$data);
        }
	}
    
    
    function readExcel()
{
        $this->load->library('CSVReader');
        $gett = base_url()."img/getlucky.csv";
        $result = $this->csvreader->parse_file($gett);
        $data['all_rozygr'] = $this->category_model->all_rozygr();

        $data['csvData'] =  $result;
        $this->load->view('csvread_view', $data);  
}

        function addprizes()
    {

        $data = array();
        $data['won_count'] = $this->category_model->won_prizes();
        $data['all_count'] = $this->category_model->all_count();
        $data['account_count'] = $this->category_model->account_count();
        $data['auth_session'] = $this->category_model->auth_session();
        $data['main_info'] = 0;
                
        //Массив по одной странице  
        //$data['main_info'] = $this->products_model->get_all();
        
           
    //Если нажата кнопка "Добавить материал"  
    if (isset($_POST['submit']))
    {      
        /*$this->form_validation->set_rules($this->orders_model->add_rules);
		
     	if ($this->form_validation->run() == TRUE)
        {*/
            //Добавляем новый материал
            $this->category_model->add_prize();
            /*
            $test = array();
            $test['test_add'] = $this->orders_model->get_latest();                       
            
            foreach ($test['test_add'] as $test_add_result):
            endforeach;
            $add_test = $test_add_result['id_order'];

            $this->orders_model->add_quest($add_test);
            */
            $data['info'] = 'Тестирование добавлено';
            $name = 'sample'; 
            //$data['main_info'] = 0;           
            $this->display_lib->main($data,$name);
            
            //redirect(base_url().'orders/add');
            
            /*}
            else
            {
            $this->testing_model->add_quest();
            $data['info'] = 'Плохи дела';
            $name = 'test_add';            
            $this->display_lib->admin_page($data,$name);    
            
            }*/
        /*}
        
        else
        {            
            $name = 'products';
            // Передаем пустой массив data так как того требует функция admin_page
            $this->display_lib->products($data,$name);

			
        }*/
    }  
      
    //Если не нажата кнопка "Добавить материал", выводим пустую форму
    else
    {    
        redirect (base_url());            
    }
    }


    
    public function company($page_id = '')
	{  
	   if ($this->ion_auth->logged_in())
        {
        
       if($page_id)
       {
        
       $data = array ();
       $data['prize'] = $this->category_model->get_prize($page_id);
       $data['rozygr'] = $this->category_model->get_rozygr($page_id);
       $data['main_click'] = $this->manager_model->unique_date($page_id);
       $data['gold_prizes'] = $this->category_model->get_gold_prizes($page_id);
       $data['silver_prizes'] = $this->category_model->get_silver_prizes($page_id);
       $data['bronz_prizes'] = $this->category_model->get_bronz_prizes($page_id);
       
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
           $this->load->view('static_view',$data); 
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
            redirect (base_url().'login');
        }
	}
    
    
        public function manage()
	{
       $data['main_info'] = $this->category_model->get_all();
       $data['won_count'] = $this->category_model->won_prizes();
       $data['account_count'] = $this->category_model->account_count();
       $data['auth_session'] = $this->category_model->auth_session();
       $data['info'] = "Главная страница - Список розыгрышей призов";
       $this->load->view('main_view',$data);
	}
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */