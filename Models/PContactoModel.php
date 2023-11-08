<?php 
	require_once("Libraries/Core/Mysql.php");
	trait PContactoModel{
        private $strNombreContacto;
        private $strEmailContacto;
        private $strTemaContacto;
        private $strMensajeContacto;
        private $strIpContacto;
        private $strDispositivoContacto;
        private $strUserAgentContacto;

        public function insertContacto(string $nombreContacto,  string $emailContacto, string $temaContacto, string $mensajeContacto, string $ipContacto, string $dispositoContacto, string $userAgentContacto){
            $this->con = new Mysql(); 
            $this->strNombreContacto= $nombreContacto;
            $this->strEmailContacto = $emailContacto;			
            $this->strTemaContacto = $temaContacto;
            $this->strMensajeContacto = $mensajeContacto;
            $this->strIpContacto = $ipContacto;
            $this->strDispositivoContacto = $dispositoContacto;
            $this->strUserAgentContacto = $userAgentContacto;
            $return = 0;
            $query_insert  = "INSERT INTO contacto(nombre,email,tema,mensaje,ip,dispositivo,useragent) 
                                VALUES(?,?,?,?,?,?,?)";
            $arrData = array($this->strNombreContacto,
                            $this->strEmailContacto,
                            $this->strTemaContacto,
                            $this->strMensajeContacto,
                            $this->strIpContacto,
                            $this->strDispositivoContacto,
                            $this->strUserAgentContacto);               
            $request_insert = $this->con->insert($query_insert,$arrData);
            $return = $request_insert;
            return $return;
	    }  
	}

?>