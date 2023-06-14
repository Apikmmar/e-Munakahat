$(document).ready(function() {
    console.log("jquery is fire");
    //DEFAULT
    // daytime
    setInterval(function() {
        var DateTime = luxon.DateTime;
        var currentDate = DateTime.now().setLocale('ms');
        var date = currentDate.toLocaleString(DateTime.DATE_HUGE);
        var time = currentDate.toLocaleString(DateTime.TIME_SIMPLE);

        $('#date').text(date);
        $('#time').text(time);
    }, 1000);

    // SIDEBAR MAIN ROUTING- DO FOR ALL INTERFACE
    // user sidebar
    $(document).on("click", "#userloginmainpage", function() {
        window.location.href = "../ManageLoginView/m1_manageUserProfile.php";
    });

    $(document).on("click", "#userprepcoursemainpage", function(e) {
        e.preventDefault();
        window.location.href = '../ManageUserMarriagePreparationView/m2_maincoursepage.php';
    });

    $(document).on("click", "#marriageapply", function() {
        window.location.href = "../ManageUserMarriageApplicationView/m2_homepage.php"
    });

    $(document).on("click", "#usermarriagemainpage", function() {
        window.location.href = "../ManageMarriageRegistrationUserView/m3_marriage.php";
    });

    $(document).on("click", "#userconsultationmainpage", function() {
        window.location.href = "../ManageMarriageConsultationUserView/m4_userHomepage.php";
    });

    $(document).on("click", "#userincentivemainpage", function() {
        window.location.href = "../ManageIncentiveApplicationUserView/m5_userMainPage.php";
    });

    // staff sidebar
    $(document).on("click", "#staffloginmainpage", function() {
        window.location.href = "../ManageStaffAccountRegistrationView/m1_homepagestaff.php";
    });

    $(document).on("click", "#staffprepcoursemainpage", function() {
        window.location.href = '../ManageStaffMarriagePreparationView/m2_maincoursepagestaff.php';
    });

    $(document).on("click", "#staffapplymainpage", function() {
        window.location.href = "../ManageStaffMarriageApplicationView/m2_mainapplypagestaff.php";
    });

    $(document).on("click", "#staffmarriagemainpage", function() {
        window.location.href = "../ManageMarriageRegistrationStaffView/m3_adminMarriage.php";
    });

    $(document).on("click", "#staffconsultationmainpage", function() {
        window.location.href = "../ManageMarriageConsultationAdvisorView/m4_advisorApplicationList.php";
    });

    $(document).on("click", "#staffincentivemainpage", function() {
        window.location.href = "../ManageIncentiveApplicationStaffView/m5_staffMainPage.php";
    });
});
