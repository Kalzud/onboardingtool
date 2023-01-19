<?php
session_start();  // Starts the session
class Admin
{
    //declare fields
    protected $id, $userName, $password;

    /**
     * User constructor.
     * @param $id
     * @param $userName
     * @param $password
     */
    public function __construct($dbRow){
        $this->id = $dbRow['id']; //assigns id database row to id
        $this->userName = $dbRow['userName']; //assigns username database row to username
        $this->password = $dbRow['password']; //assigns password database row to password
    }

    /**
     * @return mixed
     * gets the id
     */
    public function getID()
    {
        return $this->id;
    }

    /**
     * @return mixed
     * gets the username
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @return mixed
     * gets the password
     */
    public function getPassword()
    {
        return $this->password;
    }


}