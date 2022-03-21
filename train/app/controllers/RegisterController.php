<?php

// require_once "../app/configs/utils.php";
// ConnexionDataBase();

class RegisterController
{

    private $userModel;
    // private $clientModel;
    public function __construct()
    {
        $this->userModel = new User();
        // $this->clientModel = new Client();
    }


    public function index()
    {
        if (isPostRequest()) {
            $data = ["role" => "client", ...$_POST];
            $userId = $this->userModel->create($data);

            if ($userId) {
                createUserSession($userId);
                
                return redirect("/");
            }
        } else {
            return view("register");
        }
        // view('register');


    }
}
