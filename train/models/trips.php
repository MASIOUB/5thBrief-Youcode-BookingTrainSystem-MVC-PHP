<?php

class Trips{

    static public function getAll(){
        $statement = DB::connect()->prepare('SELECT * FROM trips');
        $statement->execute();
        return $statement->fetchAll();
        $statement->close();
        $statement = null;
    }

}

?>