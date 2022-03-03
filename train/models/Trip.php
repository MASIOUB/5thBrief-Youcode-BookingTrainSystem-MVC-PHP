<?php 

require_once "Connection.php";

/**
 * 
 */
class Trip
{
	private $table="trips";
	private $date_trip;
	private $start_time;
	private $return_time;
	private $start_station;
	private $return_station;
	private $price;
	function __construct($date_trip,$start_time,$return_time,$start_station,$return_station,$price)
	{
		$this->date_trip=$date_trip;
		$this->start_time=$start_time;
		$this->return_time=$return_time;
		$this->start_station=$start_station;
		$this->return_station=$return_station;
		$this->price=$price;
	}


	public function saveTrip()
	{
		$ctn=new Connection();
		$ctn->insertTrip($this->table,["date_trip","start_time","return_time","start_station","return_station","price"],[$this->date_trip,$this->start_time,$this->return_time,$this->start_station,$this->return_station,$this->price]);
	}

	public static function selectTrip()
	{
		$ctn=new Connection();
		return $ctn->selectAllTrip("trips");
	}

	public static function deleteTrip($id_trip)
	{
		$ctn=new Connection();
		return $ctn->deleteTrip("trips",$id_trip);
	}


	public static function editTrip($id_trip)
	{
		$ctn=new Connection();
		return $ctn->selectOneTrip("trips",$id_trip);
	}

	public function updateTrip($id_trip)
	{
		$ctn=new Connection();
		$ctn->updateTrip($this->table,["date_trip","start_time","return_time","start_station","return_station","price"],[$this->date_trip,$this->start_time,$this->return_time,$this->start_station,$this->return_station,$this->price],$id_trip);
	}

}