<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Specifications extends Controller {
    
    public function __construct()
	{
		parent::Controller();
		$this->load->model('items_model');
        $this->load->model('specifications_model');
        $this->load->model('specific_items_model');
        $this->load->model('specifics_model');
        $this->load->model('category_model');
        //$this->load->model('news_model');
		$this->load->model('cart_model');
        $this->load->library('image_lib');        
		//$this->cart->product_name_rules .="_-а-яА-Я ";
        //$this->load->model('ion_auth_model');
        //$this->load->library('ion_auth');
    }
    
    public function index()
    {
    redirect(base_url());
    }



//Добавление страницы
public function add()
{   
    		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
    //Если нажата кнопка "Добавить страницу"  
    if (isset($_POST['add_button']))
    {
        $this->form_validation->set_rules($this->specifics_model->add_rules);
		
     	if ($this->form_validation->run() == TRUE)
        {
           $data = array('info' => '');
                
            //Добавляем новый продукт
            $this->specifics_model->add_specific_binds();
            $binds = $this->specifics_model->get_specific_binds();
            $this->specifics_model->add_specific($binds['id_specific']);      
            $data = array('info' => 'Набор характеристик успешно создан');
            $name = 'specifications/add';
            $data['menu_first'] = $this->specifics_model->get_menu_admin(); 
            $this->display_lib->admin($data,$name); 
            //redirect(base_url().'products/add');
        }
        else
        {
            $name = 'specifications/add';
            $data['menu_first'] = $this->specifics_model->get_menu_admin(); 
            // Передаем пустой массив data так как того требует функция               admin_page 
            //$this->display_lib->admin($data,$name);
            print_r($_POST);           
        }
    }
          
    //Если не нажата кнопка "Добавить страницу", выводим пустую форму
    else
    {                      
        $name = 'specifications/add';
        $data = array();
        $data['menu_first'] = $this->items_model->get_menu_admin();    
        $data['error'] = '';
        $this->display_lib->admin($data,$name);
    }
}


//Добавление страницы
public function group_add()
{   
    		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
    //Если нажата кнопка "Добавить страницу"  
    if (isset($_POST['add_button']))
    {
        $this->form_validation->set_rules($this->specifications_model->add_rules);
		
     	if ($this->form_validation->run() == TRUE)
        {
           $data = array('info' => '');
                
            //Добавляем новый продукт
            $this->specifications_model->add();            
            $data = array('info' => 'Группа спецификаций добавлена');      
            $name = 'specifications/group_add';
            $data['menu_first'] = $this->items_model->get_menu_admin(); 
            $this->display_lib->admin($data,$name); 
            //redirect(base_url().'products/add');
        }
        else
        {
            $name = 'specifications/group_add';
            $data['menu_first'] = $this->items_model->get_menu_admin(); 
            // Передаем пустой массив data так как того требует функция               admin_page 
            $this->display_lib->admin($data,$name);           
        }
    }
          
    //Если не нажата кнопка "Добавить страницу", выводим пустую форму
    else
    {                      
        $name = 'specifications/group_add';
        $data = array();
        $data['menu_first'] = $this->items_model->get_menu_admin();    
        $data['error'] = '';
        $this->display_lib->admin($data,$name);
    }
}


//Добавление страницы
public function items_add()
{   
    		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
    //Если нажата кнопка "Добавить страницу"  
    if (isset($_POST['add_button']))
    {
        $this->form_validation->set_rules($this->specific_items_model->add_rules);
		
     	if ($this->form_validation->run() == TRUE)
        {
           $data = array('info' => '');
                
            //Добавляем новый продукт
            $this->specific_items_model->add();            
            $data = array('info' => 'Cпецификация добавлена');      
            $name = 'specifications/items_add';
            $data['menu_first'] = $this->items_model->get_menu_admin(); 
            $this->display_lib->admin($data,$name); 
            //redirect(base_url().'products/add');
        }
        else
        {
            $name = 'specifications/items_add';
            $data['menu_first'] = $this->items_model->get_menu_admin(); 
            // Передаем пустой массив data так как того требует функция               admin_page 
            $this->display_lib->admin($data,$name);           
        }
    }
          
    //Если не нажата кнопка "Добавить страницу", выводим пустую форму
    else
    {                      
        $name = 'specifications/items_add';
        $data = array();
        $data['menu_first'] = $this->items_model->get_menu_admin();    
        $data['error'] = '';
        $this->display_lib->admin($data,$name);
    }
}


//Редактирование (вывод списка страниц для выбора)  
public function edit_list()
{
    		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
    $data = array();
    //Массив по всем страницам для вывода списка
    $data['pages_list'] = $this->items_model->get_all();
    $name = 'products/edit_list';

    $this->display_lib->admin($data,$name);
} 


//Редактирование (форма со значениями, подставившимися из базы)
public function edit($page_id = '')
{
    		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}       
    //Формируем массив одной страницы (row_array) для отображения в форме     редактирования 
    $data = array();
    $data = $this->items_model->get($page_id);        
    $data['error'] = '';
    //Если массив пуст
    if (empty($data))
    {
        $data = array('info' => 'Такого продукта нет'); 
        $data['menu_first'] = $this->items_model->get_menu_admin();       
        $this->display_lib->admin($data);               
    }

    else
    {
        $name = 'products/edit';
        $data['menu_first'] = $this->items_model->get_menu_admin(); 
        $this->display_lib->admin($data,$name);
    }
}



//Обновление (Обновление страницы в базе данных) 
public function update($page_id = '')
{
    		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
   //Если нажата кнопка "Обновить страницу"
   if (isset($_POST['update_button']))
   {
       $this->form_validation->set_rules($this->items_model->update_rules);

	   if ($this->form_validation->run() == TRUE)
       {        
           //Обновляем страницу
           if(isset($_POST['usersfile']))
           {  
           $config['upload_path'] = './img/origin/';
	       $config['allowed_types'] = 'gif|jpg|png';
		   $config['max_size']	= '2000';
           $config['max_width']  = '5000';
		   $config['max_height']  = '2000';
           $this->load->library('upload', $config);
           
            if ( ! $this->upload->do_upload())
		{
			//$data['error'] = array('error' => $this->upload->display_errors());
			
			//$this->load->view('upload_form', $error);
            
            $data = $this->items_model->get($page_id);
            $data['error'] = $this->upload->display_errors();
            $name = 'products/edit';
            $this->display_lib->admin($data,$name);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$img_file_name = $data['upload_data']['file_name'];
            $config['image_library'] = 'gd2'; // выбираем библиотеку
            $config['source_image']	= './img/origin/'.$data['upload_data']['file_name']; 
            $config['create_thumb'] = TRUE; // ставим флаг создания эскиза
            $config['maintain_ratio'] = TRUE; // сохранять пропорции
            $config['width'] = 200; // и задаем размеры
            $config['height'] = 400;
            $config['new_image'] = './img/products/';
            $this->image_lib->initialize($config);
            
            $this->image_lib->resize();
            
            $data['err'] = $this->image_lib->display_errors('<p style="color:red">', '</p>');
            
            $data = $this->items_model->get($page_id);
            $name = 'products/edit';
            $_POST['imgfile'] = $img_file_name;
            $this->items_model->update($page_id);
          
            $data = array('info' => 'Продукт изменен');
            $name = 'info';       
            $this->display_lib->admin($data,$name);     
           }
        }
        else
        {
         $this->items_model->update($page_id);
          
            $data = array('info' => 'Продукт изменен');
            $name = 'info';       
            $this->display_lib->admin($data,$name);    
        }
       }

       else
       {
           //Формируем массив с данными о странице для подстановки в поля            формы (те, что не прошли валидацию, берутся из базы, а те, что            прошли - из массива POST)
           $data = array ();
           $data = $this->items_model->get($page_id);
           $name = 'products/edit';
           $this->display_lib->admin($data,$name);
       }               
   }

   //Не нажата кнопка "Обновить страницу"
   else
   { 
       $data = array('info' => 'Продукт не был изменен, так как вы не нажали кнопку "Изменить продукт"');
       $name = 'info';
       $this->display_lib->admin($data,$name);             
   }      
}



//Удаление страницы 
public function delete()
{
    		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
            //Если не нажата кнопка "Удалить страницу"
    if ( ! isset($_POST['delete_button']))
    {
        //Массив по всем страницам
        $data = array();
        $data['pages_list'] = $this->items_model->get_all();
        $name = 'products/delete';

        $this->display_lib->admin($data,$name);
    }

    //Если кнопка "Удалить странцу" нажата
    else
    {
        //но не выбрана страница
        if ( ! isset($_POST['id_product']))
        {
            $data = array('info' => 'Не выбран продукт для удаления');
            $name = 'info';
            $this->display_lib->admin($data,$name);                      
        }

        //и выбрана страница
        else 
        {
            //Получаем идентификатор страницы из массива POST
            $id_product = $this->input->post('id_product');
            
            //Удаляем страницу с выбранным идентификатором
            $this->items_model->delete($id_product);                         
            
            $data = array('info' => 'Продукт удален');   
            $name = 'info';               
            $this->display_lib->admin($data,$name);            
        }
    }
   
    
}


public function add_cart_item(){
		
		if($this->cart_model->validate_add_cart_item() == TRUE){
			
			// Check if user has javascript enabled
			if($this->input->post('ajax') != '1'){
				redirect('products'); // If javascript is not enabled, reload the page with new data
			}else{
				echo 'true'; // If javascript is enabled, return true, so the cart gets updated
			}
		}
		
	}
	
public function update_cart(){
		$this->cart_model->validate_update_cart();
		redirect('products');
	}

public function delete_cart(){
		$this->cart_model->validate_delete_cart_item();
		
		redirect('products');
	}
	
public function show_cart(){
		$this->load->view('cart/cart');
	}
	
public function empty_cart(){
		$this->cart->destroy();
		redirect('products');
	}
    
        function resize($source,$w,$h,$dest = FALSE)
    {
        // сжимает картинку в указанный размер
        if ( ! $dest)
            $dest = $source;
        // если не указывать путь для результата, будет перезаписан оригинал
        $image = new Imagick($source);
        $image->resizeImage($w,$h,Imagick::FILTER_LANCZOS,1);
        $image->writeImage($dest);
        $image->destroy();
        if ( ! is_file($dest))
        {
            // не получился фокус
            return FALSE;
        }
        return $dest;
    } 


        function all_products()
    {
        	if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		} 
        $data['products'] = $this->items_model->get_all();
        $this->load->view('all_products', $data); 
    }
    
    
    
}

?>