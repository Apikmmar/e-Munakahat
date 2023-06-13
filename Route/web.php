<?php

$_SESSION['current_link'] = $_SERVER['HTTP_REFERER'];
// module 2
require "Business_Service/Controller/ManageMarriagePreparation/UserMarriagePreparationController.php";
require "Business_Service/Controller/ManageMarriagePreparation/StaffMarriagePreparationController.php";
require "Business_Service/Controller/ManageMarriageApplication/StaffMarriageApplicationController.php";
require "Business_Service/Controller/ManageMarriageApplication/UserMarriageApplicationController.php";
extract ($_POST);