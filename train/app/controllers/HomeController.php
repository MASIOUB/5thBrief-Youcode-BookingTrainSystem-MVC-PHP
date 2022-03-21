<?php

// require_once "../app/configs/utils.php";
// ConnexionDataBase();

class HomeController
{

    private $tripModel;
    public function __construct()
    {
        $this->tripModel = new Trip();
    }


    public function index()
    {

        if (isset($_GET["date_trip"])) {
            $trips = $this->tripModel->fetchAll("WHERE date_trip =:date_trip and start_station=:start_station and return_station=:return_station",  $_GET);
            $dataTrips = ["tripExist" => $trips];
            return view("home", $dataTrips);
        }
        return view("home");
    }
}
