<?php


class TripController
{
    private $trainModel;
    private $tripModel;

    public function __construct()
    {
        $this->trainModel = new Train();
        $this->tripModel = new Trip();
    }
    public function index()
    {

        if (!isLoggedIn()) return redirect("login");

        else{
            if($_SESSION["role"] == "admin"){
                // return all voyages 
                $trips = $this->tripModel->fetchAll();
                return view("trip/dashboard", ["trips" => $trips]);
            }else{
                return view("home");
            }
        }
    }

    // public function addTrip()
    // {
    //     view("trip/addTrip");
    // }


    public function addTrip()
    {
        // if user is not logged in redirect to login page
        if (!isLoggedIn()) return redirect("login");

        else{
            if($_SESSION["role"] == "admin"){
                if (isPostRequest()) {
                    $trip = $this->tripModel->create($_POST);
                    if($trip){
                        redirect("trip");
                    }
                } else {
                    // $trains = $this->trainModel->fetchAll();
                    return view("trip/addTrip");
                }
            }else{
                return view("home");
            }
        }
    }

}