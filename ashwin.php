<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$uname;
$umail;
	
// Create connection
$conn = new mysqli($servername, $username, $password);
 //Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "use project";

if ($conn->query($sql) === TRUE) {} else {
	echo "Error creating database: " . $conn->error;
}
$sql = "SELECT uname,email FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $uname=$row["uname"];
	$umail=$row["email"];
    }
} else {
    echo "0 results";
}
if($uname==="NULL")
{
	header('location: check.php');
}


 
$conn->close();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ashwin shines as India clinch series with third Test win</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="css/images/favicon.ico" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.1.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>
<body>
<div id="header">
<h3 id="hello"> Hello <?php echo "$uname"; ?> ! </h3>
  <div class="shell">
    
    <div id="navigation">
      <ul>
        <li><a href="index1.php" class="active">HOME</a></li>
		<li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="movie.php">MOVIES</a></li>
        <li><a href="concert.php">CONCERTS</a></li>
        <li><a href="theatre.php">THEATRES</a></li>

		<li><a href="fest.php">FESTS</a></li>
		<li><a href="profile.php"> PROFILE</a></li>
        <li><a href="up.php">SIGN UP</a></li>
        <li> <a href="in.php">SIGN IN</a></li>
         <li> <a href="out.php">SIGN OUT</a></li>
      </ul>
    </div>
    <div class="cl">&nbsp;</div>
  
  </div>
</div>
<div id="marq">
<marquee behavior="scroll" scrollamount="10" hspace="10px"><a href="kapil.php"><img src="k.jpg"></a><a href="tamasha.php"><img src="tamasha.jpg"></a><a href="skrillex.php"><img src="Skrillex.jpg"></a><a href="bro.php"><img src="b1.jpg"></a><a href="drishyam.php"><img src="dd.jpg"></a><a href="pkp2.php"><img src="8.jpg"></a><a href="talvar.php"><img src="tl.jpg"></a><a href="kapil.php>"<img src="k.jpg"></a></marquee>
</div>

<br><br>
<div id="main">
<div class="bg-top">
<div class="shell">
<h1> Ashwin shines as India clinch series with third Test win</h1><br><br>
<div id="brm">
<IMG SRC="ashwin.JPG" align="right">
</div>
<p>Nagpur, Nov 27 (IANS) India rode on a superb performance from off-spinner Ravichandran Ashwin to beat South Africa by 124 runs in the third Test and take an unassailable 2-0 lead in the four-match series at the Vidarbha Cricket Association Stadium here on Friday.
Resuming the third day at 32/2, South Africa were bowled out for 185 in their second innings while chasing a target of 310 runs. India had won the first Test at Mohali while the second Test in Bengaluru was washed out due to heavy rain.
This was South Africa's first series defeat on foreign soil in nine years, a period which included 15 trips away from home.
Ashwin was the star of the show, claiming figures of 7/66 in the second innings. The Tamil Nadu spinner, who had five scalps in the first innings, took home the Man of the Match award with a match haul of 12 wickets.
Ashwin is the now the highest wicket-taker of 2015 with 55 scalps in his kitty, ahead of England pacer Stuart Broad (51). The last time an Indian bowler had taken 50 or more Test wickets in a year was in 2008 when off-spinner Harbhajan Singh took 53.
Leg-spinner Amit Mishra (3/51) also made merry on the crumbling pitch, picking up three wickets, including the crucial ones of South African skipper Hashim Amla and Faf du Plesis.
Left-arm spinner Ravindra Jadeja also troubled the Proteas batsmen, although he did not claim a wicket in the second innings. Pacer Ishant Sharma also bowled well, helped on by the unpredictable bounce and movement offered by the uneven surface.
Amla and du Plesis were the only South African batsmen to offer a spirited fightback to the Indian bowlers. Coming together after the fall of the in-form AB de Villiers in the pre-lunch session, the duo put together a 72-run partnership although they were finding it tough to negotiate the dificult pitch.
Amla, who has not been at his best so far in this series, gave a good account of himself. He showed much better application and footwork, notching up a well made 39 before being caught by skipper Virat Kohli off Mishra's bowling.
Du Plesis (39) gave his captain excellent support from the other end, smashing three boundaries and a six during his stint in the middle. The pair looked more confident in the second session, but the runs did not come easy as they scored just 21 off 19 overs in the first hour after lunch before both were dismissed in successive overs from Mishra.
The partnership was the second highest for South Africa in this series after the 76-run stand between Amla and Dean Elgar for the third wicket in the first innings of the Mohali Test.
South Africa suffered crucial blows early in the day when opener Dean Elgar got a thick inside edge off an Ashwin delivery. The ball rebounded off the pads for a simple catch by Cheteshwar Pujara at silly point.
De Villiers seemed to be in good nick and even smashed Jadeja for a boundary through mid-off. But Ashwin accounted for the experienced South African with a carrom ball that kept straight after pitching. De Villiers misread the spin of the ball which hit the rear leg and the umpire had no hesitation in awarding a leg before decision.
Once Mishra had sent Amla and du Plesis back to the pavilion, an Indian victory was only a matter of time. Ashwin completed the formalities by claiming the last four wickets to bring the partisan home crowd on to its feet.</p>
<br>
<br><br>
</div>
</div>
</div>

<div id="footer">
  <div class="shell">
    <div class="top">
     <div id="twitter">
        <h2>COMING SOON</h2>
        
        <div class="cl">&nbsp;</div>
        <div class="twitter-posts">
          <ul>
            <li>
              <p><a href="bjr.html">BAJIRAO MASTANI</a> Bajirao Mastani is an Indian historical romance film produced and directed by Sanjay Leela Bhansali</p>
              
            </li>
            <li>
              <p><a href="airlft.html">AIRLIFT</a> Airlift is an upcoming Indian film directed by Raja Krishna Menon, and starring Akshay Kumar and Nimrat Kaur in lead roles, and is scheduled for release on 22 January 2016.</p>
              
            </li>
            <li>
              <p><a href="badi.html">World Superseries Finals 2015</a>The 2015 BWF Season is the overall badminton circuit organized by the Badminton World Federation (BWF) for the 2015 badminton season to publish and promote the sport.</p>
             
            </li>
            <li>
              <p><a href="skrillex.html">Skrillex</a> Sonny John Moore,known professionally as Skrillex, is an American electronic music producer, DJ, singer and songwriter.</a></p>
              
            </li>
          </ul>
        </div>
      </div>
	
	
      <div id="flickr">
        
      
        <div class="cl">&nbsp;</div>
        <div class="flickr-pics">
          <ul>
            <li> <a href="ashwin.html"><img src="ashwin.jpg" alt="Ashwin shines as India clinch series with third Test win" ></a> </li>
            <li> <a href="sun.html"><img src="sun.jpg" alt="Sunburn Festival 2015" ></a> </li>
            
            <li class="last"> <a href="rd.html"><img src="rd.jpg" alt="Deepika Padukone, Ranbir Kapoor starrer ‘Tamasha’ earns Rs. 24.04 cr in two days" ></a> </li>
            <li> <a href="starc.html"><img src="starc.jpg" alt="Injured Starc unsure when he'll bowl again for Australia" ></a> </li>
            <li> <a href="rs.html"><img src="rs.jpg" alt="Why Is Ranveer Singh Not Worried About ‘Dilwale-Bajirao Mastani’ Clash?" ></a> </li>
            
            <li class="last"> <a href="tamasha.html"><img src="tamasha.jpg" alt="Deepika Padukone And Ranbir Kapoor Create More Tamasha At College Festival!" ></a> </li>
            <li> <a href="sa.html"><img src="sa.jpg" alt="Awesome threesome have made SA batsmen look club class" ></a> </li>
            <li> <a href="narine.html"><img src="narine.jpg" alt="Sunil Narine suspended from international cricket for illegal bowling action" ></a> </li>
            
            <li class="last"> <a href="ns.html"><img src="ns.jpg" alt="Naseeruddin Shah To Be Honoured At Dubai International Film Festival" ></a> </li>
          </ul>
        </div>
      </div>
    
      <div class="cl">&nbsp;</div>
    </div>
    <div class="footerlink">
      <p class="lf">Copyright &copy; 2010 <a href="#">SiteName</a> - All Rights Reserved</p>
      <p class="rf"><a href="http://all-free-download.com/free-website-templates/">Free CSS Templates</a> by <a href="http://chocotemplates.com/">ChocoTemplates.com</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
<!-- END PAGE SOURCE -->
</body>
</html>