<?php 

require_once __DIR__."/../models/Trip.php";
/**
 * 
 */
class TripController
{
	
	public function __construct()
	{
		
	}

	public function index()
	{
		$trips=Trip::selectTrip();
		require_once __DIR__."/../views/trip/index.php";
	}

	public function createTrip()
	{
		require_once __DIR__."/../views/trip/create.php";
	}

	public function saveTrip()
	{
		$date_trip=$_POST['date_trip'];
		$start_time=$_POST['start_time'];
		$return_time=$_POST['return_time'];
		$start_station=$_POST['start_station'];
		$return_station=$_POST['return_station'];
		$price=$_POST['price'];
		$trip=new Trip($date_trip,$start_time,$return_time,$start_station,$return_station,$price);
		$trip->saveTrip();
		header("Location: http://localhost/my-projects/train/trip/index");
	}

	public function editTrip($id_trip)
	{
		$trip=Trip::editTrip($id_trip);
		require_once __DIR__."/../views/trip/edit.php";
	}

	public function updateTrip($id_trip)
	{
		$date_trip=$_POST['date_trip'];
		$start_time=$_POST['start_time'];
		$return_time=$_POST['return_time'];
		$start_station=$_POST['start_station'];
		$return_station=$_POST['return_station'];
		$price=$_POST['price'];
		$trip=new Trip($date_trip,$start_time,$return_time,$start_station,$return_station,$price);
		$trip->updateTrip($id_trip);
		header("Location: http://localhost/my-projects/train/trip/index");
	}
	public function deleteTrip($id_trip)
	{
		$trips=Trip::deleteTrip($id_trip);
		header("Location: http://localhost/my-projects/train/trip/index");
	}


}