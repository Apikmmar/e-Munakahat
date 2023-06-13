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
    $(document).on("click", "#backtousermainpage", function() {
        window.location.href = '../ManageIncentiveApplicationUserView/m5_userMainPage.php';
    });


});