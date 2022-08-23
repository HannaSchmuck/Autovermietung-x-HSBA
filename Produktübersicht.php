<!DOCTYPE html>

<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <div id ="navigation">
        <a href="#Logo" class="logo"> carbon</a>
        
        <div class="navigation_links">
            <a href="#Locations" class="normal"> Locations</a>
            <a href="#rent" class="normal"> Rent</a>
            <a href="#einloggen" class="normal"> Einloggen</a>
        </div>
        
    </div>
         
<br>
    <div class="Filter" style="border: 1px solid #10E6CD;"> 
        Hier werden die Filter eingefügt
        
        <div >
            Filter oben links
        </div>
    </div>
<br>
    <div class="content" style="border: 1px solid #10E6CD; height: 700px;padding: 15px 15px 15px 15px">
        <br>
        <div class="content_2" >
            <div  class="car" > Auto 1
            </div>

            <div  class="car" > Auto 2
            </div>
            
            <div  class="car" > Auto 3
            </div>

        </div>
        <div class="content_2">
            <div  class="car" > Auto 4
            </div>

            <div  class="car" > Auto 5
            </div>
            
             <div  class="car" > Auto 6
            </div>
        </div>
        <div class="content_2">
            <div  class="car" > Auto 7
            </div>

            <div  class="car" > Auto 8
            </div>
            
             <div  class="car" > Auto 9
            </div>
        </div>
    </div>
    
<br>
    <div class="footer" style="border: 1px solid #10E6CD">
        FOOTER
    </div>

    <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navigation");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
    
    
</body>

</html>

