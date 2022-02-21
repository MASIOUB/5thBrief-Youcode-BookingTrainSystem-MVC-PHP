<?php

class AdminsController{

    public function getAllAdmins(){
        $admins = Admins::getAll();
        return $admins;
    }

}

?>