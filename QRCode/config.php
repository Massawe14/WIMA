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
 	public function insertQr($fullname,$phone_number,$company,$position,$qrimage,$qrlink,$event_id,$table_number)
 	{
		$sql = "INSERT INTO `qr_codes`(full_name,phone_number,company_name,position,qrImage,qrlink,event_id,table_number) VALUES('$fullname','$phone_number','$company','$position','$qrimage','$qrlink','$event_id','$table_number')";
		$query = $this->conn->query($sql);
		return $query;
 	}
  public function select($event_id)
  {
    $sql = "SELECT * FROM `event` WHERE event_id='$event_id' LIMIT 1";
    $query = $this->conn->query($sql);
    return $query;
  }
  public function update($already,$event_id)
  {
    $sql = "UPDATE `event` SET `already`='$already' WHERE event_id='$event_id'";
    $query = $this->conn->query($sql);
    return $query;
  }
 	public function displayImg()
 	{
 		$sql = "SELECT qrImage,qrlink FROM qr_codes WHERE qrImage='$qrimage'";
 	}
}
$meravi = new RaviKoQr();