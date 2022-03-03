<?php 


/**
 * 
 */
class Connection
{
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $database="railway";
	private $conn;

	public function __construct()
	{

		try {
			  $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
			  // set the PDO error mode to exception
			 
		
			} catch(PDOException $e) 
			{
			  echo "Connection failed: " . $e->getMessage();
			}
	}

	public function insertTrip($table,$tableCln,$tableVal)
	{
		$names="";
		$values="";
		$vrls="";
		for ($i=0; $i <count($tableCln) ; $i++) 
		{ 
			if ($i>0) 
			{
				$vrls=",";
			}
			$names.=$vrls."`".$tableCln[$i]."`";
			$values.=$vrls."'".$tableVal[$i]."'";
		}
		$str="INSERT INTO `$table`(".$names.") VALUES (".$values.")";
		$query=$this->conn->prepare($str);
		$query->execute();
	}

	public function selectAllTrip($table)
	{
		$query=$this->conn->prepare("SELECT * FROM `$table`");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	public function selectOneTrip($table,$id)
	{
		$query=$this->conn->prepare("SELECT * FROM `$table` where id_trip=$id");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC)[0];
	}
	public function updateTrip($table,$tableCln,$tableVal,$id)
	{
		$names="";
		$vrls="";
		for ($i=0; $i <count($tableCln) ; $i++) 
		{ 
			if ($i>0) 
			{
				$vrls=",";
			}
			$names.=$vrls."`".$tableCln[$i]."`='".$tableVal[$i]."'";
		}
		$str="UPDATE $table SET $names WHERE id_trip=$id";
		$query=$this->conn->prepare($str);
		$query->execute();
	}
	public function deleteTrip($table,$id)
	{
		$query=$this->conn->prepare("DELETE FROM `$table` WHERE id_trip=$id");
		$query->execute();
	}



}