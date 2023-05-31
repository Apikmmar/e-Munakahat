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

    //close navbar - not working bodo punya default designer
    $("#hey").on("click", function() {
        alert("Call this number 0107730425");
    });

    $(".datepicker").datepicker({
        format: 'yyyy-mm-dd'
    });

    //MODULE 2 by afiq
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

//javascript do here
