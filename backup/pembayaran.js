document.getElementById("openModal").addEventListener("click", function() {
    document.getElementById("myModal").style.display = "block";
  });
  
  document.getElementById("uploadBtn").addEventListener("click", function() {
    document.getElementById("myModal").style.display = "none";
  });
  
  document.getElementsByClassName("close")[0].addEventListener("click", function() {
    document.getElementById("myModal").style.display = "none";
  });  