function validateForm() {
  // Retrieve form inputs
  var icNumber = document.getElementById('icnum').value;
  var name = document.getElementById('name').value;
  var gender = document.getElementById('gender').value;
  var bangsa = document.getElementById('bangsa').value;
  var warga = document.getElementById('warga').value;
  var address = document.getElementById('address').value;
  var phonenum = document.getElementById('phonenum').value;
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var confirmpassword = document.getElementById('confirmpassword').value;
  
  // Check if IC number follows the Malaysian identification number format
  var icNumberRegex = /^[0-9]{12}$/;
  if (!icNumber.match(icNumberRegex)) {
    alert("Sila masukkan nombor kad pengenalan Malaysia yang sah (e.g., 000000-00-0000).");
    return false;
  }
  
  // Add more validation rules for other fields if needed
  
  if (gender === '') {
      alert("Sila pilih jantina.");
      return false;
  }
  if (bangsa === '') {
    alert("Sila pilih bangsa.");
      return false;
  }
  if (warga === '') {
      alert("Sila pilih warganegara.");
      return false;
  }

  // Check if password and confirm password match
  if (password !== confirmpassword) {
      alert("Kata laluan yang dimasukkan tidak sepadan.");
      return false;
  }
}

function toggleCurrentAddress() {
  var currentAddressTextarea = document.getElementById('currentaddress');
  var addressTextarea = document.getElementById('address');
  var sameAddressCheckbox = document.getElementById('sameaddress');
  
  if (sameAddressCheckbox.checked) {
    // Disable current address textarea and set its value to the address textarea value
    currentAddressTextarea.disabled = true;
    currentAddressTextarea.value = addressTextarea.value;
  } else {
    // Enable current address textarea
    currentAddressTextarea.disabled = false;
    currentAddressTextarea.value = ''; // Clear the value
  }
}

  
  var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
  var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
  function getthedate(){
  var mydate=new Date()
  var year=mydate.getYear()
  if (year < 1000)
  year+=1900
  var day=mydate.getDay()
  var month=mydate.getMonth()
  var daym=mydate.getDate()
  if (daym<10)
  daym="0"+daym
  var hours=mydate.getHours()
  var minutes=mydate.getMinutes()
  var seconds=mydate.getSeconds()
  var dn="am"
  if (hours>=12)
  dn="pm"
  if (hours>12){
  hours=hours-12
  }
  {
  d = new Date();
  Time24H = new Date();
  Time24H.setTime(d.getTime() + (d.getTimezoneOffset()*60000) + 3600000);
  InternetTime = Math.round((Time24H.getHours()*60+Time24H.getMinutes()) / 1.44);
  if (InternetTime < 10) InternetTime = '00'+InternetTime;
  else if (InternetTime < 100) InternetTime = '0'+InternetTime;
  }
  if (hours==0)
  hours=12
  if (minutes<=9)
  minutes="0"+minutes
  if (seconds<=9)
  seconds="0"+seconds

  var cdate=hours+":"+minutes+":"+seconds+dn
  if (document.all)
  document.all.clock.innerHTML=cdate
  else if (document.getElementById)
  document.getElementById("clock").innerHTML=cdate
  else
  document.write(cdate)
  }
  if (!document.all&&!document.getElementById)
  getthedate()
  function goforit(){
  if (document.all||document.getElementById)
  setInterval("getthedate()",500)
  setInterval("gettheday()",500)
  }

  function gettheday(){
    var mydate=new Date()
    var year=mydate.getYear()
    if (year < 1000)
      year+=1900
    var day=mydate.getDay()
    var month=mydate.getMonth()
    var daym=mydate.getDate()
    if (daym<10)
      daym="0"+daym
    var dayarray=new Array("Ahad","Isnin","Selasa","Rabu","Khamis","Jumaat","Sabtu")
    var montharray=new Array("Januari","Februari","Mac","April","Mei","Jun","Julai","Ogos","September","Oktober","November","Disember")
    var date=dayarray[day]+", "+daym+" "+montharray[month]+" "+year
    if (document.all)
    document.all.day.innerHTML=date
    else if (document.getElementById)
    document.getElementById("day").innerHTML=date
    else
    document.write(date) 
  }
  window.addEventListener('load', goforit);