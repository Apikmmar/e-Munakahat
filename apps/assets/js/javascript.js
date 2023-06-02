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

    // date picker
    $(".datepicker").datepicker({
        format: 'yyyy-mm-dd'
    });
});
