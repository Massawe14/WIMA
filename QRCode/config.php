<?php 
class RaviKoQr
{
  public $server = "localhost";
  public $user = "root";
  public $pass = "";
  public $dbname = "wima_event";
	public $conn;
  public function __construct()
  {
  	$this->conn= new mysqli($this->server,$this->user,$this->pass,$this->dbname);
  	if($this->conn->connect_error)
  	{
  		die("connection failed");
  	}
  }
 	public function insertQr($fullname,$phone_number,$company,$position,$qrimage,$qrlink)
 	{
		$sql = "REPLACE INTO `qr_codes`(full_name,phone_number,company_name,position,qrImage,qrlink) VALUES('$fullname','$phone_number','$company','$position','$qrimage','$qrlink')";
		$query = $this->conn->query($sql);
		return $query;
 	}
 	public function displayImg()
 	{
 		$sql = "SELECT qrImage,qrlink FROM qr_codes WHERE qrImage='$qrimage'";
 	}
}
$meravi = new RaviKoQr();