<?php

	class Modelbase extends CI_Model{
		
		//CONSTRUCTOR DE LA CLASE, CARGA LA BASE DE DATOS.
		public function __construct()
        {	
            $this->load->database();
        }
        
        //fUNCION QUE CREA UNA TABLA EN LA BASE DE DATOS
        public function creatabla(){
        	$this->db->query("CREATE TABLE tabla1( id int(11) NOT NULL AUTO_INCREMENT,
			title varchar(128) NOT NULL,
			slug varchar(128) NOT NULL,
			text text NOT NULL,
			PRIMARY KEY (id),
			KEY slug (slug)
			);");
        }
        
        //fUNCION QUE HACE SIRVE COMO VALIDACION PARA SABER SI LA TABLA YA ESTA O NO CREADA
        public function consultatabla(){
        	
        	//AL UTILIZAR EL simple_query, TENGO LA OPCION DE CACHAR LOS ERRORES
        	if ($this->db->simple_query("SELECT * FROM tabla1;"))
			{
        		return "Tabla ya creda";
			}      	
        
        }
	}

?>