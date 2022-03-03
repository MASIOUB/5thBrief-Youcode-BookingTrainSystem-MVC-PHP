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


	public function save()
	{
		$ctn=new Connection();
		$ctn->insert($this->table,["date_trip","start_time","return_time","start_station","return_station","price"],[$this->date_trip,$this->start_time,$this->return_time,$this->start_station,$this->return_station,$this->price]);
	}

	public static function select()
	{
		$ctn=new Connection();
		return $ctn->selectAll("trips");
	}

	public static function delete($id_trip)
	{
		$ctn=new Connection();
		return $ctn->delete("trips",$id_trip);
	}


	public static function edit($id_trip)
	{
		$ctn=new Connection();
		return $ctn->selectOne("trips",$id_trip);
	}

	public function update($id_trip)
	{
		$ctn=new Connection();
		$ctn->update($this->table,["date_trip","start_time","return_time","start_station","return_station","price"],[$this->date_trip,$this->start_time,$this->return_time,$this->start_station,$this->return_station,$this->price],$id_trip);
	}

}