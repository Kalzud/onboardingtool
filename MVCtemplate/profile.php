<?php
require_once ('Models/CandidateDataset.php');
$view = new stdClass();
$view->pageTitle = 'Profile';
$view->Candidate = null;
$CandidateDataset = new CandidateDataset();
if(isset($_GET['id'])){ //gets candidate details
    $Full_Name = htmlentities($_GET['id']);
    $view->Candidate = $CandidateDataset->fetchCandidateDetails($Full_Name); //fetch candidate details of particular id
}
require_once('Views/profile.phtml');
