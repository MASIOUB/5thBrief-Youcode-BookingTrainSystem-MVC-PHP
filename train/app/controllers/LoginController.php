<?php

// require_once "../app/configs/utils.php";
// ConnexionDataBase();

class LoginController
{

    private $userModel;
    public function __construct()
    {
        $this->userModel = new User();
    }


    public function index()
    {
        if (isPostRequest() && verify(["username", "password"], $_POST)) {
            $user = $this->userModel->fetchOne("WHERE username = :username", ["username" => $_POST["username"]]);


            if (!$user || $user["password"] !== $_POST["password"]) {
                return view("login");
            }

            // if ($user )
            session_start();
            $_SESSION["id"] = $user["id"];
            $_SESSION["role"] = $user["role"];
            $_SESSION["username"] = $user['username'];
            if($user["role"] == "client"){
                redirect("/");
            }elseif($user["role"] == "admin"){
             redirect("trip");
            }
        } else {
            return view("login");
        }
    }
}