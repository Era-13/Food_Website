
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Food website</title>
<style>

header {font-family:segoe print;color:#502916; margin-left:350px; }
footer {background:#e4ba4e;color:#502916; font-family:times new roman;}

body{background-image: url("wallpaper.jpeg")}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:  khaki ;

 }

 li {
    float: left;
	border-right:1px solid #bbb;
}

li a {
    display: block;
    color: #502916 ;	
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	font-family: elephant;
}

 li a, .dropbtn {
    display: block;
    color:  black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	font-family:elephant;
	background-color: khaki;
	font-size: 16px;
}

 li a:hover, .dropdown:hover .dropbtn:hover {
    background-color: #eadd61;
}
 #myInput {
    border-box: box-sizing;
    background-image: url('searchicon.png');
  background-position: 14px 12px;
    background-repeat: no-repeat;
    font-size: 16px;
 padding: 14px 20px 12px 45px;
    border: none;
	margin-left:0px; 
}

li.dropdown {
    display: inline-block;
}

 .dropdown-content {
    display: none;
    position: absolute;
    background-color: khaki;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	margin-left: 0px;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

 .dropdown-content a:hover {background-color: #f1f1f1}

.show {display:block;}


 footer li {
    float: left;
	border-right:1px solid #bbb;
	margin-bottom: 0px;
}

footer li a {
    display: block;
    color: #502916;
    text-align: right;
   margin-bottom: 0px;
    text-decoration: none;
}
footer li a:hover:not(.active) {
    background-color:#eadd61;color:#502916;
}
div.cleft{
  background-color: grey;
    color: black;
	text-align:center;
	margin-left:0px;
	margin-right:0px;
	margin-bottom: 0px;
}
div{ margin-right:180px; margin-left:180px; }
.mySlides {display:none;}
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}




</style>
</head>
<body>
 <ul>
   <li><a href="home.html">Home</a></li>
  <li><a href="http://localhost/project/rest.php">Restuarent</a></li>
  <li class="dropdown">
<button onclick="myFunction()" class="dropbtn">Cuisines</button>
  <div id="myDropdown" class="dropdown-content"><img class = "search-icon" src = "search.png" style="width:21px;height:18px"/>
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="fastfood.html">Fast Food</a>
    <a href="indian.html">Indian</a>
    <a href="thai.html">Thai</a>
    <a href="pizza.html">Pizza</a>
    <a href="arabian.html">Arabian</a>
    <a href="kebab.html">Kebab</a>
    <a href="biryani.html">Biryani</a>
  </div>
</li>
 <li><a href="http://localhost/project/contact.php">Contact</a></li>
  </ul>
  
  
 <script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
</script> 



 


<header>
<h1><img src="waiter1.jpg" style="width:214px;height:164px;" "style:top-left"><img src="title.jpg" style="width:214px;height:164px;" "style:top-left"> <img src="waiter.jpg" style="width:214px;height:164px;"></h1>
 <h1 "style:center"><b>Grab your favourite item within a short item!!!</b></h1>
</header>


<div class="w3-content w3-section" style="max-width:1500px">
  <img class="mySlides" src="food1.jpg" style="width:1000px;height:600px">
  <img class="mySlides" src="food2.jpg" style="width:1000px;height:600px">
  <img class="mySlides" src="food3.jpg" style="width:1000px;height:600px">
   <img class="mySlides" src="food4.jpg" style="width:1000px;height:600px">
    <img class="mySlides" src="food6.jpg" style="width:1000px;height:600px">
  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

 


<footer>
<footer class="footer">
<ul>
   <li><a  href="privacy.html">Privacy policy</a></li>
  <li><a  href="term.html">Terms and Condition</a></li>  
</ul>
</footer>

<div class="cleft">
		<p id="copyright">Copyright &copy; খাই-দাই ডট কম. All rights reserved.</p>
	</div>
	 
 </div>
<div class="cleft">


</body>
</html>
