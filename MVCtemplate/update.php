<?php

require_once('Models/CandidateDataset.php');
$view = new stdClass();
$view->pageTitle = 'UPDATE';
$CandidateDataset = new CandidateDataset();
//to edit the information of candidates
if (isset($_POST['editFullname'])) {
    $id = $_POST['c_id'];
    $Full_Name = $_POST['Full_Name'];
    $successfulUpdate = $CandidateDataset->updateFullname($id, $Full_Name);
    header("Location: profile.php?id=$id");
}
if (isset($_POST['editAddress'])) {
    $id = $_POST['c_id'];
    $Address = $_POST['Address'];
    $successfulUpdate = $CandidateDataset->updateAddress($id, $Address);
    header("Location: profile.php?id=$id");
}
if (isset($_POST['editRole'])) {
    $id = $_POST['c_id'];
    $Role = $_POST['Role'];
    $successfulUpdate = $CandidateDataset->updateRole($id, $Role);
    header("Location: profile.php?id=$id");
}
if (isset($_POST['editEmail'])) {
    $id = $_POST['c_id'];
    $Email = $_POST['Email'];
    $successfulUpdate = $CandidateDataset->updateEmail($id, $Email);
    header("Location: profile.php?id=$id");
}
if (isset($_POST['editNumber'])) {
    $id = $_POST['c_id'];
    $Number = $_POST['Phone_number'];
    $successfulUpdate = $CandidateDataset->updateNumber($id, $Number);
    header("Location: profile.php?id=$id");
}
if (isset($_POST['editBirth'])) {
    $id = $_POST['c_id'];
    $Birth = $_POST['dateOfBirth'];
    $successfulUpdate = $CandidateDataset->updateDob($id, $Birth);
    header("Location: profile.php?id=$id");
}
if (isset($_POST['editGoal'])) {
    $id = $_POST['c_id'];
    $Goal = $_POST['Goals'];
    $successfulUpdate = $CandidateDataset->updateGoal($id, $Goal);
    header("Location: profile.php?id=$id");
}
if (isset($_POST['editSkill'])) {
    $id = $_POST['c_id'];
    $Skill = $_POST['Candidate_skills'];
    $successfulUpdate = $CandidateDataset->updateSkill($id, $Skill);
    header("Location: profile.php?id=$id");
}
if (isset($_POST['editSalary'])) {
    $id = $_POST['c_id'];
    $Salary = $_POST['Salary'];
    $successfulUpdate = $CandidateDataset->updateSalary($id, $Salary);
    header("Location: profile.php?id=$id");
}
if (isset($_POST['editComment'])) {
    $id = $_POST['c_id'];
    $Comment = $_POST['Comment_section'];
    $successfulUpdate = $CandidateDataset->updateComment($id, $Comment);
    header("Location: profile.php?id=$id");
}
if (isset($_POST['editSent'])) {
    $id = $_POST['c_id'];
    $Sent = $_POST['contract_sent'];
    $successfulUpdate = $CandidateDataset->updateContractSent($id, $Sent);
    header("Location: profile.php?id=$id");
}
if (isset($_POST['editReceived'])) {
    $id = $_POST['c_id'];
    $received = $_POST['contract_received'];
    $successfulUpdate = $CandidateDataset->updateContractReceived($id, $received);
    header("Location: profile.php?id=$id");
}
if (isset($_POST['editNeed'])) {
    $id = $_POST['c_id'];
    $need = $_POST['equipment_need'];
    $successfulUpdate = $CandidateDataset->updateNeed($id, $need);
    header("Location: profile.php?id=$id");
}
if (isset($_POST['editTrain'])) {
    $id = $_POST['c_id'];
    $train = $_POST['training'];
    $successfulUpdate = $CandidateDataset->updateTraining($id, $train);
    header("Location: profile.php?id=$id");
}


