<?php
require_once('Models/CandidateDataset.php');


$view = new stdClass();
$view->pageTitle = 'Register';


$CandidateDataset = new CandidateDataset();
if(isset($_POST['register'])){ // assign values from fields
    $Full_Name  = $_POST['Full_Name'];
    $Address = $_POST['Address'];
    $Role = $_POST['Role'];
    $Email = $_POST['Email'];
    $Phone_number = $_POST['Phone_number'];
    $Comment_section = $_POST['Comment_section'];
    $Goals = $_POST['Goals'];
    $Candidate_skills = $_POST['Candidate_skills'];
    $Salary = $_POST['Salary'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $contract_sent = $_POST['contract_sent'];
    $contract_received = $_POST['contract_received'];
    $equipment_need = $_POST['equipment_need'];
    $training = $_POST['training'];

//    upload the details put in
    $successfulSignup = $CandidateDataset->Upload($Full_Name, $Address, $Role,
        $Email, $Phone_number,$Comment_section, $Goals, $Candidate_skills, $Salary,
        $dateOfBirth, $contract_sent, $contract_received, $equipment_need, $training);
    if($successfulSignup){
        header('Location: adminDash.php'); // redirects to admin dash page
    }else{
        $view->userNameMismatch = "username taken";
    }
}
require_once('Views/registration.phtml');