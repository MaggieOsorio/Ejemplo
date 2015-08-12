<?php

class Instalador extends CI_Controller{
	
	//CONSTRUCTOR DE LA CLASE, CARGA EL MODELO
	public function __construct()
	{
		parent::__construct();
		$this->load->model('modelbase');
		
	}
	
	//FUNCION PRINCIPAL, ESTA VALIDA INICIALMENTE SI YA EXISTE LA TABLA A CREAR,PARA SABER QUE VISTA MOSTRAR
	public function index(){
			$data['cadena'] = $this->modelbase->consultatabla();
			if($data['cadena'] === NULL){
				$this->load->view('principal', $data);
			}else{
				$this->load->view('yainstalado');
			}	
	}
	
	//FUNCION QUE LLAMA AL MODELO PARA CREAR UNA TABLA, SE VALIDA SI YA EXISTE PRIMERO.
	public function basedatos(){
		$data['cadena'] = $this->modelbase->consultatabla();
		if($data['cadena'] === NULL){
			$this->modelbase->creatabla();
		 	$this->load->view('estado');
		}else{
			$this->load->view('yainstalado');
		}	
	}
	
	
	
}

?>