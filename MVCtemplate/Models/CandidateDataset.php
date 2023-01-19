<?php

require_once("Database.php");
require_once("Candidate.php");
require_once ("Admin.php");

class CandidateDataset
{
    protected $_dbHandle, $_dbInstance;

//   Constructor
    public function __construct()
    {
        $this->_dbInstance = Database::getInstance(); //gets database instance
        $this->_dbHandle = $this->_dbInstance->getdbConnection(); //gets database connection
    }

//    Methods
    public function Upload($Full_Name, $Address, $Role, $Email, $Phone_number, $Comment_section, $Goals, $Candidate_skills, $Salary, $dateOfBirth, $contract_sent, $contract_received, $equipment_need, $training)
    {
        $sqlQuery = "SELECT * FROM Candidate WHERE Full_Name = '$Full_Name'";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
        $row = $statement->fetch();
        if (empty($row)) {
            $sqlQuery = "INSERT INTO Candidate (Full_Name, Address, Role, Email, Phone_number, Comment_section, 
                       Goals, Candidate_skills, Salary, dateOfBirth, contract_sent, contract_received, equipment_need, training)
                        VALUES('$Full_Name', '$Address', '$Role', '$Email', '$Phone_number', '$Comment_section', '$Goals', 
                               '$Candidate_skills', '$Salary', '$dateOfBirth', '$contract_sent', '$contract_received',
                               '$equipment_need', '$training')"; //Insert details into the tables
            $statement = $this->_dbHandle->prepare($sqlQuery);
            $statement->execute();
            return true;
        } else {
            return false;
        }
        $this->fetchCandidateDetails($_POST['Full_Name']); //fetch details where full name is full name entered
    }

    public function fetchCandidateDetails($c_id) // fetch candidate details where c_id is same as c_id entered
    {
        $sqlQuery = "SELECT * FROM Candidate WHERE c_id = '$c_id'";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
        $row = $statement->fetch();
        $dataset[] = new Candidate($row);
        return $dataset;
    }

    public function fetchAllCandidateDetails() //fetch all candidates from database
    {
        $sqlQuery = "SELECT * FROM Candidate ORDER BY Full_Name";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
        $dataset = [];
        while ($row = $statement->fetch()) {
            $dataset[] = new Candidate($row);
        }
        return $dataset;
    }

    public function deleteCandidate($c_id) //delete candidate where c_id is same as c_id entered
    {
        $sqlQuery = "DELETE FROM Candidate WHERE c_id = '$c_id'";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
    }

    public function updateFullname($c_id, $Full_Name)  //update or change full name
    {
        $sqlQuery = "UPDATE Candidate SET Full_Name = '$Full_Name' WHERE c_id = $c_id";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
    }

    public function updateAddress($c_id, $Address) //update or change address
    {
        $sqlQuery = "UPDATE Candidate SET Address = '$Address' WHERE c_id = $c_id";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
    }

    public function updateComment($c_id, $Comment) //update or change comment section
    {
        $sqlQuery = "UPDATE Candidate SET Comment_section = '$Comment' WHERE c_id = $c_id";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
    }

    public function updateRole($c_id, $Role) //update or change job role
    {
        $sqlQuery = "UPDATE Candidate SET Role = '$Role' WHERE c_id = $c_id";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
    }

    public function updateEmail($c_id, $Email) //update or change email
    {
        $sqlQuery = "UPDATE Candidate SET Email = '$Email' WHERE c_id = $c_id";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
    }

    public function updateNumber($c_id, $Number) //update or change Phone number
    {
        $sqlQuery = "UPDATE Candidate SET Phone_number = '$Number' WHERE c_id = $c_id";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
    }

    public function updateDob($c_id, $Birth) //update or change Date of birth
    {
        $sqlQuery = "UPDATE Candidate SET dateOfBirth = '$Birth' WHERE c_id = $c_id";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
    }

    public function updateGoal($c_id, $Goal) //update or change candidate goals
    {
        $sqlQuery = "UPDATE Candidate SET Goals = '$Goal' WHERE c_id = $c_id";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
    }

    public function updateSkill($c_id, $Skill) //update or change candidate skills
    {
        $sqlQuery = "UPDATE Candidate SET Candidate_skills = '$Skill' WHERE c_id = $c_id";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
    }

    public function updateSalary($c_id, $Salary) //update or change salary
    {
        $sqlQuery = "UPDATE Candidate SET Salary = '$Salary' WHERE c_id = $c_id";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
    }

    public function updateContractSent($c_id, $Sent) //update or change if contract has been sent
    {
        $sqlQuery = "UPDATE Candidate SET contract_sent = '$Sent' WHERE c_id = $c_id";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
    }

    public function updateContractReceived($c_id, $received) //update or change if contract has been received
    {
        $sqlQuery = "UPDATE Candidate SET contract_received = '$received' WHERE c_id = $c_id";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
    }

    public function updateNeed($c_id, $need) //update or change Equipment needs
    {
        $sqlQuery = "UPDATE Candidate SET equipment_need = '$need' WHERE c_id = $c_id";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
    }
    public function updateTraining($c_id, $train) //update or change Training
    {
        $sqlQuery = "UPDATE Candidate SET training = '$train' WHERE c_id = $c_id";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
    }

    public function search($name) // search where entered characters are similar to characters in name, role, email or phone number
    {
        $sqlQuery = "SELECT * from Candidate WHERE Full_Name LIKE '%".$name."%' OR Role LIKE '%".$name."%' OR Email LIKE '%".$name."%' OR Phone_number LIKE '%".$name."%' ORDER BY Full_Name";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();//executes sql query
        $dataset = [];
        while($row = $statement->fetch()){
            $dataset[] = new Candidate($row);
        }return $dataset;//returns candidate details
    }

}
