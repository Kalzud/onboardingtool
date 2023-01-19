<?php
class Candidate
{
    //declare fields
    protected $c_id, $Full_Name, $Address, $Role, $Email, $Phone_number, $Comment_section, $Goals, $Candidate_skills, $Salary, $dateOfBirth, $contract_sent, $contract_received, $equipment_need, $training;

    /**
     * User constructor.
     * @param $c_id
     * @param $Full_Name
     * @param $Address
     * @param $Role
     * @param $Email
     * @param $Phone_number
     * @param $Comment_section
     * @param $Goals
     * @param $Candidate_skills
     * @param $Salary
     * @param $dateOfBirth
     * @param $contract_sent
     * @param $contract_recieved
     * @param $equipment_need
     * @param $training
     */
    public function __construct($dbRow){
        $this->c_id = $dbRow['c_id'];
        $this->Full_Name = $dbRow['Full_Name'];
        $this->Address = $dbRow['Address'];
        $this->Role = $dbRow['Role'];
        $this->Email = $dbRow['Email'];
        $this->Phone_number = $dbRow['Phone_number'];
        $this->Comment_section = $dbRow['Comment_section'];
        $this->Goals = $dbRow['Goals'];
        $this->Candidate_skills = $dbRow['Candidate_skills'];
        $this->Salary = $dbRow['Salary'];
        $this->dateOfBirth= $dbRow['dateOfBirth'];
        $this->contract_sent= $dbRow['contract_sent'];
        $this->contract_received= $dbRow['contract_received'];
        $this->equipment_need= $dbRow['equipment_need'];
        $this->training= $dbRow['training'];
    }

    /**
     * @return mixed
     */
    public function getCId(): mixed
    {
        return $this->c_id;
    }

    /**
     * @param mixed $c_id
     */
    public function setCId(mixed $c_id): void
    {
        $this->c_id = $c_id;
    }

    /**
     * @return mixed
     */
    public function getFullName(): mixed
    {
        return $this->Full_Name;
    }

    /**
     * @param mixed $Full_Name
     */
    public function setFullName(mixed $Full_Name): void
    {
        $this->Full_Name = $Full_Name;
    }

    /**
     * @return mixed
     */
    public function getAddress(): mixed
    {
        return $this->Address;
    }

    /**
     * @param mixed $Address
     */
    public function setAddress(mixed $Address): void
    {
        $this->Address = $Address;
    }

    /**
     * @return mixed
     */
    public function getRole(): mixed
    {
        return $this->Role;
    }

    /**
     * @param mixed $Role
     */
    public function setRole(mixed $Role): void
    {
        $this->Role = $Role;
    }

    /**
     * @return mixed
     */
    public function getEmail(): mixed
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail(mixed $Email): void
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber(): mixed
    {
        return $this->Phone_number;
    }

    /**
     * @param mixed $Phone_number
     */
    public function setPhoneNumber(mixed $Phone_number): void
    {
        $this->Phone_number = $Phone_number;
    }

    /**
     * @return mixed
     */
    public function getCommentSection(): mixed
    {
        return $this->Comment_section;
    }

    /**
     * @param mixed $Comment_section
     */
    public function setCommentSection(mixed $Comment_section): void
    {
        $this->Comment_section = $Comment_section;
    }

    /**
     * @return mixed
     */
    public function getGoals(): mixed
    {
        return $this->Goals;
    }

    /**
     * @param mixed $Goals
     */
    public function setGoals(mixed $Goals): void
    {
        $this->Goals = $Goals;
    }

    /**
     * @return mixed
     */
    public function getCandidateSkills(): mixed
    {
        return $this->Candidate_skills;
    }

    /**
     * @param mixed $Candidate_skills
     */
    public function setCandidateSkills(mixed $Candidate_skills): void
    {
        $this->Candidate_skills = $Candidate_skills;
    }

    /**
     * @return mixed
     */
    public function getSalary(): mixed
    {
        return $this->Salary;
    }

    /**
     * @param mixed $Salary
     */
    public function setSalary(mixed $Salary): void
    {
        $this->Salary = $Salary;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth(): mixed
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth(mixed $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getContractReceived(): mixed
    {
        return $this->contract_received;
    }

    /**
     * @return mixed
     */
    public function getContractSent(): mixed
    {
        return $this->contract_sent;
    }

    /**
     * @return mixed
     */
    public function getEquipmentNeed(): mixed
    {
        return $this->equipment_need;
    }

    /**
     * @return mixed
     */
    public function getTraining(): mixed
    {
        return $this->training;
    }

    /**
     * @param mixed $contract_recieved
     */
    public function setContractReceived(mixed $contract_received): void
    {
        $this->contract_received = $contract_received;
    }

    /**
     * @param mixed $contract_sent
     */
    public function setContractSent(mixed $contract_sent): void
    {
        $this->contract_sent = $contract_sent;
    }

    /**
     * @param mixed $equipment_need
     */
    public function setEquipmentNeed(mixed $equipment_need): void
    {
        $this->equipment_need = $equipment_need;
    }

    /**
     * @param mixed $training
     */
    public function setTraining(mixed $training): void
    {
        $this->training = $training;
    }


}