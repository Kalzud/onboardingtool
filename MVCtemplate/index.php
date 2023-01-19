<?php
require_once("Models/AdminDataset.php"); //require this class
$view = new stdClass();
$view->pageTitle = "Login Page";
$AdminDataset = new AdminDataset(); // creates new admin dataset
if(isset($_POST['userName']) && isset($_POST['password'])){
    $userName = htmlentities($_POST['userName']); // gets the username
    $password = htmlentities($_POST['password']);// gets the password
    $AdminDataset->loginAdmin($userName, $password); // login in the admin
}else{
    $view->loggedin = "Wrong Username or Password";
}
if(isset($_POST["logoutButton"])) {
    //end the session
    unset($_SESSION["id"]);
    unset($_SESSION["userName"]);
    session_destroy();
    header('Location: index.php'); //redirects to index page
}

require_once("Views/index.phtml");