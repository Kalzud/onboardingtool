<?php
require_once ("Models/CandidateDataset.php");

$view = new stdClass();
$view->pageTitle = "Admin Dashboard";
$CandidateDataset = new CandidateDataset();
$view->CandidateSearch = $CandidateDataset->fetchAllCandidateDetails(); //fetch details on all candidates for search
$view->search = count($view->CandidateSearch); //count candidates in search results
$view->Candidate = $CandidateDataset->fetchAllCandidateDetails(); //fetch all candidates
$view->rows = count($view->Candidate); //count all candidates
if(isset($_GET['id'])){
    $Full_Name = htmlentities($_GET['id']);
    $CandidateDataset->deleteCandidate($Full_Name);
    header("Location: adminDash.php"); //redirect to admin dash page
}
if (isset($_POST["searchBtn"])) {
    $name = $_POST["search"];
    $view->CandidateSearch = $CandidateDataset->search($name);//finds member based of users' search parameter.
    $view->search = count($view->CandidateSearch);
}else{
    $view->Candidate = $CandidateDataset->fetchAllCandidateDetails();//returns all members.
}

require_once("Views/adminDash.phtml");