<?php
require_once ("Models/Database.php");
require_once ("Models/Admin.php");
class AdminDataset
{
    protected $_dbHandle, $_dbInstance;
    public $_errorMsg = "";

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance(); //gets database instance
        $this->_dbHandle = $this->_dbInstance->getdbConnection(); //gets database connection
    }

    public function loginAdmin($userName, $password) //logs in the admin
    {
        $this->verifyLogin($userName, $password);
        // TODO: verify user
        // TODO: login user
    }
    private function verifyLogin($userName, $password)
    {
        try {
            $sqlQuery = "SELECT * FROM Admin WHERE userName = '$userName'"; //select where username in the database matches username entered
            $statement = $this->_dbHandle->prepare($sqlQuery);
            $statement->execute();
            if ($statement->rowCount() === 1) { //checks if there is a unique username matching the username in the code
                $row = $statement->fetch(PDO::FETCH_ASSOC); // fetch the user details
                $verify = password_verify($password, $row['password']); // verify the password in the database
                if ($verify){                                        //if password is verified
                    $_SESSION['id']= $row['id']; //sends id to session
                    $_SESSION['userName'] = $row['userName']; // send username to session
                    $this->fetchAdminDetails($_SESSION['userName']); //fetch the admin details
                    header('Location: ../adminDash.php');// take it to admin dash
                }
                else{
                    return $this->_errorMsg = 'Wrong Username or Password'; //prints message if not verified
                }
            } else {
                return $this->_errorMsg = 'Wrong Username or Password'; //prints message if username is not in database
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function fetchAdminDetails($userName)  //fetches admin details for a particular username
    {
        $sqlQuery = "SELECT * FROM Admin WHERE userName = '$userName'";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
        $row = $statement->fetch();
        $admin = new Admin($row);
        return $admin;
    }
}