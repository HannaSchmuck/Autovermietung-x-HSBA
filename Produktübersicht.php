<!DOCTYPE html>

<html>

<head>
<style>
    .car {width: 28%; float: left; border: 1px solid black; height: 150px; margin: 1% 1% 2% 2%; padding: 10px 10px 10px 10px}  



/* Style the navbar */
.navbar {
  overflow: hidden;
  background-color: #000000;
    width: 100%;
}
    

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

</style>
</head>

<body>
    <div class="navbar">
        <a href="#Logo"> Logo-Platzhalter</a>
        <a href="#Locations"> Locations</a>
        <a href="#rent"> Rent</a>
        <a href="#einloggen"> Einloggen</a>
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

var navbar = document.getElementById("navbar");
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

