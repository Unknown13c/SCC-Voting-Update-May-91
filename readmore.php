	<?php include ('head.php');?>
	<?php include ('nav-bar.php');?>

   

	<div class="readcontent">
         <h2>About Online Voting System</h2></br>
     <p>Online Voting is a web-based voting system that will help manage the student council elections easily and securely. This voting system can be used for casting votes during the elections that will be held in St. Cecilia's College. In this system the voters do not have to go to the polling booth  and use their personal computers to cast their votes. There is a database which is maintained in which all the name of the voters with their complete information is stored<span id="dots">...</span> <span id="more">The System Administrator registers the voters by simply filling a registration form to register the voters. After the complete registration, the voter will be assigned a One-TIme Password with their Student ID which he/she can use to login to the system and cast his/her vote these log-in details will be sent to the voters respective email address.
     Once the user logs in with the provided One Time Password (OTP) they can proceed on voting the candidates for the Elections. After the successful votation, the One-TIme Password(OTP) will be destroyed and an Email will be sent as a Receipt of their Successful Vote. The advantage of online voting is that the voters have the choice of voting at their own free time and there is reduced congestion and  also minimizes on errors of vote counting. The individual votes are submitted in a database which can be queried automatically to find out who of the aspirants for a given post has the highest number of votes.</span><button onclick="myFunction()" id="myBtn">Read More</button></p>

    </div>

    <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

     <!-- slideshow content -->

<div class="slideshow-container">

<div class="mySlides fade">
 <!--  <div class="numbertext">1 / 3</div> -->
  <img src="image/Voting-graphic.png" style=" height: 100%; width: 100%;">
  <!-- <div class="text">Caption Text</div> -->
</div>

<div class="mySlides fade">
<!--   <div class="numbertext">2 / 3</div> -->
  <img src="image/img4.jpg" style=" height: 50%; width: 100%;" >
 <!--  <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
<!--   <div class="numbertext">2 / 3</div> -->
  <img src="image/img2.jpg" style=" height: 100%; width: 100%;" >
 <!--  <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">3 / 3</div> -->
  <img src="image/img3.png" style=" height: 100%; width: 100%;">
  <!-- <div class="text">Caption Three</div> -->
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


    <div class="read-container">
        <div class="read-con2">
            <h2>Development Years (2010-2014)</h2>
            <hr>
            <p>The presence of LASSO brought rapid changes in the institution. The owners focused their attention on improving the school's facilities. The school administrators set organizational systems, promoting academic excellence and developing a holistic student program and practical outreach program for the poor children of the municipality.</p>
        </div>
        <div class="read-con2">
            <h2>Financial Viability</h2>
            <hr>
            <p>Inaugurated in 2009, the 5 storey St. La Salle building was occupied by the Basic Education Department and College Department..</p>
        </div>
    </div>
    </div>

 
        <div class="readcontent-child">
            <h2>About School</h2>
            <p>Mrs. Lorna real Parrotina, who envisioned a transformative education to the children of the municipality of Minglanilla founded the St. Cecilia's Child Development Center in January 1999. The school was then registered with the Securities and Exchange Commission, granted permit to open the Preschool in the same year, and subsequentially granted government recognition in 2000.</p>

        </div>


        
  

	 <?php    
        include ('newfooter.php');
        ?>