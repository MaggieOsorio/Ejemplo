<?php
	class Instalador1 extends CI_Controller{
		
		//CONSTRUCTOR DE LA CLASE, CARGA EL MODELO
		public function __construct()
		{
			parent::__construct();
			//$this->load->model('modelbase');
		}
		
		
		
		public function index(){
			//VALIDACIONES
			 $this->load->helper(array('form', 'url'));
			 $this->load->library('form_validation');
			 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('principal1');
                }
		
		}
		
		public function valida(){
			
			 //VALIDACIONES
			 $this->load->helper(array('form', 'url'));
			 $this->load->library('form_validation');
			 
			 
			 $this->form_validation->set_rules('name', 'Username', 'required');
			 $this->form_validation->set_rules('password', 'Password', 'required');
			 
			  if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('principal1');
                }else{
                	$dato = $_POST['name'];
                	$this->load->view('principal',$dato);
                }
               
		}
		
	
	}

?>