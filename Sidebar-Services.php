<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Sidebar.css">
    
</head>
    
<!-- Services sidebar -->
<div class="sidebar">    
    <h3>Services</h3>
    
    <a href="#">Leakage Detection Survey</a>
    <a href="#">Pressure Study</a>
    <a href="#"> Noise Logger Monitoring</a>
    <a href="#">Underground Utility Survey</a>
    <a href="#">CCTV Survey</a>
    <a href="#">GPR Survey</a>
    <a href="#">RITS Survey</a>
    <a href="#">Structural Test</a>
    <a href="#">Other</a>
    
</div>
   
<script>

    //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

</script>
    
    
</html>
