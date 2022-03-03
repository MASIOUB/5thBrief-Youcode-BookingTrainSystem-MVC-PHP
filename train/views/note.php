
<!-- tripcontroller -->
    public function index()
	{
		$trips=Trip::select();
		require_once __DIR__."/../view/trip/index.php";
	}

<!-- model-trip -->

    public static function select()
	{
		$ctn=new Connection();
		return $ctn->selectAll("trips");
	}

<!-- model - connection -->
    public function selectAll($table)
	{
		$query=$this->conn->prepare("SELECT * FROM `$table`");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
-------------------------------------------------
    
<!-- tripcontroller -->
    public function edit($id_trip)
	{
		$trip=Trip::edit($id_trip);
		require_once __DIR__."/../view/trip/edit.php";
	}

    public function update($id_trip)
	{
		$date_trip=$_POST['date_trip'];
		$start_time=$_POST['start_time'];
		$return_time=$_POST['return_time'];
		$start_station=$_POST['start_station'];
		$return_station=$_POST['return_station'];
		$price=$_POST['price'];
		$trip=new Trip($date_trip,$start_time,$return_time,$start_station,$return_station,$price);
		$trip->update($id_trip);
		header("Location: http://localhost/projetmvc/trip/index");
	}

<!-- model-trip -->

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

    <!-- model - connection -->
    public function selectOne($table,$id_trip)
	{
		$query=$this->conn->prepare("SELECT * FROM `$table` where id_trip=$id_trip");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC)[0];
	}

    public function update($table,$tableCln,$tableVal,$id_trip)
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
		$str="UPDATE $table SET $names WHERE id_trip=$id_trip";
		$query=$this->conn->prepare($str);
		$query->execute();
	}
-------------------------------------
    
<!-- tripcontroller -->
    public function delete($id_trip)
	{
		$trips=Trip::delete($id_trip);
		header("Location: http://localhost/projetmvc/trip/index");
	}

<!-- model-trip -->

    public static function delete($id_trip)
	{
		$ctn=new Connection();
		return $ctn->delete("trips",$id_trip);
	}

    <!-- model - connection -->
    public function delete($table,$id_trip)
	{
		$query=$this->conn->prepare("DELETE FROM `$table` WHERE id_trip=$id_trip");
		$query->execute();
	}