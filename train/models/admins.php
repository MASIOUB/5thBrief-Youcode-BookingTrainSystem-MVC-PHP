<?php

class Admins{

    static public function getAll(){
        $statement = DB::connect()->prepare('SELECT * FROM admins');
        $statement->execute();
        return $statement->fetchAll();
        $statement->close();
        $statement = null;
    }

}

?>