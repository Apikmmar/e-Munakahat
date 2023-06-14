document.getElementById('downloadButton').addEventListener('click', function () {
  
  var fileUrl = 'file/borang.pdf';

  window.location.href = 'download.php?file=' + fileUrl;
});

// routing  rmb to do changes!!!!!! n also the path  check bk !!!!!!!!!!!!!
$(document).ready(function () {
  console.log("module3 jquery is on");

  // preparation course-user
  $(document).on("click", "#userprepcoursemainpage", function (e) {
    e.preventDefault();
    window.location.href = '../ManageUserMarriagePreparationView/m2_maincoursepage.php';
  });

  $(document).on("click", "#daftarcourse", function () {
    window.location.href = '../ManageUserMarriagePreparationView/m2_searchcourse.php';
  });

  $(document).on("click", "#tangguhkursus", function () {
    window.location.href = '../ManageUserMarriagePreparationView/m2_reschedulecourse.php';
  });

  $(document).on("click", "#printslippermohonan", function () {
    window.location.href = '../ManageUserMarriagePreparationView/m2_downloadapplicationslip.php';
  });

  $(document).on("click", "#usermainpage", function () {
    window.location.href = '';
  });

  $(document).on("click", "#viewcourse", function () {
    window.location.href = '../ManageUserMarriagePreparationView/m2_viewcoursedetail.php';
  });

  $(document).on("click", "#backtosearchkursus", function () {
    window.location.href = '../ManageUserMarriagePreparationView/m2_searchcourse.php';
  });

  $(document).on("click", "#regcourse", function () {
    window.location.href = '../ManageUserMarriagePreparationView/m2_applycourse.php';
  });

  // preparation course-staff
  $(document).on("click", "#staffprepcoursemainpage", function () {
    window.location.href = '../ManageStaffMarriagePreparationView/m2_maincoursepagestaff.php';
  });

  $(document).on("click", "#regcourseven", function () {
    window.location.href = '../ManageStaffMarriagePreparationView/m2_registercoursevenuestaff.php';
  });

  $(document).on("click", "#appcourseapp", function () {
    window.location.href = '../ManageStaffMarriagePreparationView/m2_courseapplicationdetailstaff.php';
  });

  $(document).on("click", "#staffmainpage", function () {
    window.location.href = '';
  });

  $(document).on("click", "#backbuttonstaff", function (e) {
    e.preventDefault();
    window.location.href = '../ManageStaffMarriagePreparationView/m2_maincoursepagestaff.php';
  });

  //apply marriage-user
  $(document).on("click", "#marriageapply", function () {
    window.location.href = "../ManageUserMarriageApplicationView/m2_homepage.php"
  });

  $(document).on("click", "#daftarkahwin", function () {
    window.location.href = "../ManageUserMarriageApplicationView/m2_userinputinformation.php"
  });

  $(document).on("click", "#tambahpasangan", function () {
    alert("Permintaan menambah sebagai pasangan dihantar...Menunggu diluluskan");
  });

  $(document).on("click", "#gotomarriageinfo", function () {
    window.location.href = "../ManageUserMarriageApplicationView/m2_usermarriageinformation.php";
  });

  $(document).on("click", "#backtomainpage", function (e) {
    e.preventDefault();
    window.location.href = "../ManageUserMarriageApplicationView/m2_homepage.php";
  });

  $(document).on("click", "#registermarriage", function () {
    alert("PENDAFTARAN PERKAHWINAN BERJAYA!!!");
  });

  //apply marriage-staff
  $(document).on("click", "#viewmarriageapplicant", function (e) {
    e.preventDefault();
    window.location.href = "../ManageStaffMarriageApplicationView/m2_viewapplicationstaff.php";
  });
});