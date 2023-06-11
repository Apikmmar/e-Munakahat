<?php

$_SESSION['current_link'] = $_SERVER['HTTP_REFERER'];
// module 2
require "business_service/controller/ManageMarriagePreparation/UserMarriagePreparationController.php";
require "business_service/controller/ManageMarriagePreparation/StaffMarriagePreparationController.php";
require "business_service/controller/ManageMarriageApplication/StaffMarriageApplicationController.php";
require "business_service/controller/ManageMarriageApplication/UserMarriageApplicationController.php";
extract ($_POST);