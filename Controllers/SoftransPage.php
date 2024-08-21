<?php
	session_start();
	class SoftransPage extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function softransPage()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = NOMBRE_EMPRESA;
			$data['page_title'] = "PortafolioSLF/softrans";
			$data['page_name'] = "softransPage";
			$this->views->getView($this,"softransPage",$data);
		}

	}
 ?>