function validateForm() {
    var icNumber = document.getElementById("icnum").value;
    var password = document.getElementById("password").value;
  
    // Check if IC number follows the Malaysian identification number format
    var icNumberRegex = /^[0-9]{12}$/;
  
    if (!icNumber.match(icNumberRegex)) {
      alert("Please enter a valid Malaysian identification number (e.g., 000000-00-0000).");
      return false;
    }
  
    if (password.trim() === "") {
      alert("Please enter a password.");
      return false;
    }
  
    return true;
  }

  // Retrieve the error message from the URL query parameter
function getErrorMessage() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get('error');
  }
  
  // Display the error message on the login page if it exists
function displayErrorMessage() {
    const errorMessage = getErrorMessage();
    if (errorMessage) {
      const errorContainer = document.getElementById('errorContainer');
      errorContainer.textContent = errorMessage;
      errorContainer.style.color = 'red'; // Set the text color to red
    }
}

function getSuccessMessage() {
  var urlParams = new URLSearchParams(window.location.search);
  return urlParams.get('success');
}

function displaySuccessMessage() {
  const successMessage = getSuccessMessage();
  if (successMessage) {
    const successContainer = document.getElementById('successContainer');
    successContainer.textContent = successMessage;
    successContainer.style.color = 'blue'; // Set the text color to red
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
        window.addEventListener('load', displayErrorMessage);
        window.addEventListener('load', displaySuccessMessage);
        
    