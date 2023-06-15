<?php

$_SESSION['current_link'] = $_SERVER['HTTP_REFERER'];
// module 1
require "Business_Service/Controller/ManageLogin/ChangePasswordController.php";
require "Business_Service/Controller/ManageLogin/ForgetPasswordController.php";
require "Business_Service/Controller/ManageLogin/LoginController.php";
require "Business_Service/Controller/ManageAccountRegistration/userAccountRegistrationController.php";
require "Business_Service/Controller/ManageAccountRegistration/staffAccountRegistrationController.php";
require "Business_Service/Model/ManageAccountRegistration/AccountRegistrationModel.php";


// module 2
require "Business_Service/Controller/ManageMarriagePreparation/UserMarriagePreparationController.php";
require "Business_Service/Controller/ManageMarriagePreparation/StaffMarriagePreparationController.php";
require "Business_Service/Controller/ManageMarriageApplication/StaffMarriageApplicationController.php";
require "Business_Service/Controller/ManageMarriageApplication/UserMarriageApplicationController.php";

//module 5
require "Business_Service/Controller/ManageIncentiveApplication/UserManageIncentiveApplicationController.php";
require "Business_Service/Controller/ManageIncentiveApplication/StaffManageIncentiveApplicationController.php";
require "Business_Service/Model/ManageIncentiveApplication/ManageIncentiveApplicationModel.php";
extract ($_POST);