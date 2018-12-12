<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
<style>
    /* Add a background color to the top navigation */
.topnav {
    background-color: #3D8E78;
    overflow: hidden;
    position: sticky;    
    top: 0;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 10px 16px;
    text-decoration: none;
    font-size: 17px;
    border-right-style: solid;
    border-right-width: thin;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
    display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
    float: left;
    overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
    font-size: 17px; 
    border: none;
    outline: none;
    color: white;
    padding: 10px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
     border-right-style: solid;
    border-right-width: thin;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-style: none
    
}

/* Style the links inside the dropdown */
.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    font-size: 16px;
    border-style:none
    
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
    background-color: darkgrey;
    color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
    display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
      border-style:none
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
    
</style>
    
</head>
  <div class="topnav" id="myTopnav">
   <a href="#home"><i class="fa fa-fw fa-home"></i>Home</a>
  <div class="dropdown">
    <button class="dropbtn">Company 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">About Us</a>
      <a href="#">Partners</a>
    </div>
  </div> 
      
  <div class="dropdown">
    <button class="dropbtn">Solutions 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="#">Leakage Management</a>
        <a href="#">Network Management</a>
        <a href="#">Flow Management</a>
        <a href="#">Scada &amp; RTU</a>
        <a href="#">Utility Detection</a>
        <a href="#">Pipe Fitting &amp; Couplings</a>
        <a href="#">Environmental Products</a>
    </div>
  </div> 
      <a href="#news">Service</a>
<a href="#news">News</a>
  <a href="#contact">Contact</a>

      <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
     
<script>

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>
    
    
</html>
