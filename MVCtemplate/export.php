<?php
//calls the following classes
require_once("Models/Database.php");
require_once("Models/SimpleXLSXGen.php");
require_once("Models/Candidate.php");
require_once("Models/CandidateDataset.php");

//get connection instance to database
$username ='agd986';
$password = 'Ka6QqTVO6I2BPmx';
$hostname = 'poseidon.salford.ac.uk';
$database = 'agd986_onboarding';
$conn = new mysqli($hostname, $username, $password, $database);

$CandidateDataset = new CandidateDataset();

// creates array candidate to be the headings on exported excel pages
$Candidates = [
    ['Full_Name', 'Email', 'Role', 'Phone_number', 'Address', 'dateOfBirth', 'Salary', 'Goals', 'Candidate_skills', 'Comment_section', 'contract_sent', 'contract_received', 'equipment_need', 'training']
];

$sql = "SELECT * FROM Candidate"; //gets all the details from candidates
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res)>0){
    foreach ($res as $row){
        //merge candidate array and array with all candidate information
        $Candidates = array_merge($Candidates, array([$row['Full_Name'], $row['Email'], $row['Role'], $row['Phone_number'], $row['Address'], $row['dateOfBirth'], $row['Salary'], $row['Goals'], $row['Candidate_skills'], $row['Comment_section'], $row['contract_sent'], $row['contract_received'], $row['equipment_need'], $row['training']]));
    }
}
$xlsx = SimpleXLSXGen::fromArray($Candidates); //gets the merged array candidates
$xlsx->downloadAs('Candidates.xlsx'); //downloads file as Candidates.xlsx



