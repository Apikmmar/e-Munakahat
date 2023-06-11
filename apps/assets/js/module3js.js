document.getElementById('downloadButton').addEventListener('click', function () {
  
  var fileUrl = 'file/borang.pdf';

  window.location.href = 'download.php?file=' + fileUrl;
});