<?php

class StationsController{

    public function getAllStations(){
        $stations = Stations::getAll();
        return $stations;
    }

}

?>
