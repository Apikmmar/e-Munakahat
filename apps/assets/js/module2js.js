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
    console.log("module2 jquery is on");

    // preparation course-user
    $(document).on("click", "#userprepcoursemainpage", function() {
        window.location.href = 'maincoursepage.php';
    });

    $(document).on("click", "#daftarcourse", function() {
        window.location.href = 'searchcourse.php';
    });

    $(document).on("click", "#tangguhkursus", function() {
        window.location.href = 'reschedulecourse.php';
    });

    $(document).on("click", "#printslippermohonan", function() {
        window.location.href = 'downloadapplicationslip.php';
    });

    $(document).on("click", "#usermainpage", function() {
        window.location.href = '';
    });

    $(document).on("click", "#viewcourse", function() {
        window.location.href = 'viewcoursedetail.php';
    });

    $(document).on("click", "#backtosearchkursus", function() {
        window.location.href = 'searchcourse.php';
    });

    $(document).on("click", "#regcourse", function() {
        window.location.href = 'applycourse.php';
    });

    // preparation course-staff
    $(document).on("click", "#staffprepcoursemainpage", function() {
        window.location.href = 'maincoursepagestaff.php';
    });

    $(document).on("click", "#regcourseven", function() {
        window.location.href = 'registercoursevenuestaff.php';
    });

    $(document).on("click", "#appcourseapp", function() {
        window.location.href = '';
    });

    $(document).on("click", "#staffmainpage", function() {
        window.location.href = '';
    });
});