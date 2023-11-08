<?php 

class ContactosModel extends Mysql
{

	private $intMensaje;

	public function __construct()
	{
		parent::__construct();
	}	

	public function selectMensajes()
	{
		$sql = "SELECT id AS idMensaje, nombre, email, tema, DATE_FORMAT(datecreated, '%d/%m/%Y') as fecha
				FROM contacto WHERE status != 0 ORDER BY id DESC";
		$request = $this->select_all($sql);
		return $request;
	}

	public function selectMensaje(int $idmensaje){
		$sql = "SELECT id, nombre, email, tema, DATE_FORMAT(datecreated, '%d/%m/%Y') as fecha, mensaje
				FROM contacto WHERE id = {$idmensaje}";
		$request = $this->select($sql);
		return $request;
	}

	public function deleteMensaje(int $intMensaje)
	{
		$this->intMensaje = $intMensaje;
		$sql = "UPDATE contacto SET status = ? WHERE id = $this->intMensaje ";
		$arrData = array(0);
		$request = $this->update($sql,$arrData);
		return $request;
	}

}
