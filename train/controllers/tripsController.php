<?php

class TripsController{

    public function getAllTrips(){
        $trips = Trips::getAll();
        return $trips;
    }

}

?>