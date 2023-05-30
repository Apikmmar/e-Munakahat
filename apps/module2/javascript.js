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

    //MODULE 3 by afiq
    // prep course
    $("#userprepcoursemainpage").on("click", function() {
        window.location.href = 'maincoursepage.php';
    });

    $("#daftarcourse").on("click", function() {
        window.location.href = 'searchcourse.php';
    });

    $("#tangguhkursus").on("click", function() {
        window.location.href = 'reschedulecourse.php';
    });

    $("#printslippermohonan").on("click", function() {
        window.location.href = 'downloadapplicationslip.php';
    });

    $("#usermainpage").on("click", function() {
        window.location.href = '';
    });

    $("#viewcourse").on("click", function() {
        window.location.href = 'viewcoursedetail.php';
    });

    $("#backtosearchkursus").on("click", function() {
        window.location.href = 'searchcourse.php';
    });

    $("#regcourse").on("click", function() {
        window.location.href = 'applycourse.php';
    });

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
});

//javascript do here
document.getElementById("userprepcoursemainpage").addEventListener("click", function() {
  window.location.href = 'maincoursepage.php';
});
