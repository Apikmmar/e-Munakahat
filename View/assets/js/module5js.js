//jQuery do here

/*
//COMMON WAYS
$(".button").on("click", function() {
    // do something here
});

//BEST WAYS  BUT COMPLEX(BETTER USE FOR AJAX AND DYNAMIC)
$(document).on("click", "button", function() { 
    do something here
});
*/
$(document).ready(function() {
    console.log("module5 jquery is on");

    // Kembali button
    $(document).on("click", "#backtousermainpage", function() {
        window.location.href = '../ManageIncentiveApplicationUserView/m5_userMainPage.php';
    });

    // Kembali button
    $(document).on("click", "#backtouserupload", function() {
        window.location.href = '../ManageIncentiveApplicationUserView/m5_userUploadDocument.php';
    });

    // Kembali button
    $(document).on("click", "#backtoinputapplicantinfo", function() {
        window.location.href = '../ManageIncentiveApplicationUserView/m5_userInputApplicantInformation.php';
    });

    // Kembali button
    $(document).on("click", "#backtoinputpartnerinfo", function() {
        window.location.href = '../ManageIncentiveApplicationUserView/m5_userInputPartnerInformation.php';
    });
    
    // Kembali button
    $(document).on("click", "#backtoeditapplicantinfo", function() {
        window.location.href = '../ManageIncentiveApplicationUserView/m5_userEditApplicantInformation.php';
    });

    // Kembali button
    $(document).on("click", "#backtoeditpartnerinfo", function() {
        window.location.href = '../ManageIncentiveApplicationUserView/m5_userEditPartnerInformation.php';
    });

    // Kembali button
    $(document).on("click", "#backtousermainpage", function() {
        window.location.href = '../ManageIncentiveApplicationUserView/m5_userMainPage.php';
    });

    // Staff Kembali button
    $(document).on("click", "#backtostaffmainpage", function() {
        window.location.href = '../ManageIncentiveApplicationStaffView/m5_staffMainPage.php';
    });

    // Mohon button
    $(document).on("click", "#mohonbantuan", function() {
        window.location.href = '../ManageIncentiveApplicationUserView/m5_userUploadDocument.php';
    });
    // terma dan syarat page
    $(document).on("click", "#termadansyarat", function() {
        window.location.href = '../ManageIncentiveApplicationUserView/m5_termandconditionincentive.php';
    });




});