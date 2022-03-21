<?php

function view($path, $data = [])
    {
        extract($data);
        $path = dirname(__DIR__)."/resources/views/$path.php";
        if (file_exists($path)){
            require_once $path;
        }
        else{
            die ("View doesn't exist");
        }
    }

// show if request is POST 
function isPostRequest()
{
    return $_SERVER["REQUEST_METHOD"] === "POST";
}

// $data = ["username" => "TEST"];

// verify(["username", "password"], $data);


function verify($required, $data): bool
{
    foreach ($required as $value) {
        if (empty($data[$value])) {
            return false;
        }
    }
    return true;
}


function isLoggedIn()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION["id"]);
}


// redirect user to a path
function redirect($path)
{
    header("location: /trainMvc/$path");
}


// generate link 
function createLink($path)
{
    $path = trim($path, "/");
    return "/trainMvc/$path";
}


function currentUserId()
{
    isLoggedIn();
    return $_SESSION["id"] ?? null; // nullish coalascing  
}


function createUserSession($id)
{
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION["id"] = $id;
}
