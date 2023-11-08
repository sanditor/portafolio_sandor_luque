<?php 
	session_start();
	class Home extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function home()
		{
			$data['page_id'] = 1;
			$data['page_tag'] = NOMBRE_EMPRESA;
			$data['page_title'] = "SLF Desarrollador Web";
			$data['page_name'] = "portafolioSLF";
			$this->views->getView($this,"home",$data);
		}

	}
 ?>