
<?php
$servername = "localhost";
$username = "root";
$password = "";
$unam;
$umail;

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "use project";

if ($conn->query($sql) === TRUE) {} else {
	echo "Error creating database: " . $conn->error;
}
$sql = "SELECT uname,email FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
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
<html >
<head>
<title>Injured Starc unsure when he'll bowl again for Australia</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
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
<div id="main">
<div class="bg-top">
<div class="shell">
<h1>Injured Starc unsure when he'll bowl again for Australia</h1><br><br>
<div id="brm">
<IMG SRC="starc.JPG" align="right">
</div>
<p>ADELAIDE, Australia (AP) — The morning after hobbling through for the winning runs in an historic three-wicket win over New Zealand in the first day-night cricket test, injured Mitchell Starc was already wondering when he'd be able to bowl again for Australia.
Starc, the form bowler for Australia in 2015 and the pace spearhead after Mitchell Johnson retired during the 2-0 series win over New Zealand, sustained a stress fracture in his right foot on Friday and wasn't able to bowl or field for the remainder of the Adelaide test.
The left-arm paceman will miss the three-test series against the West Indies starting Dec. 10 in Hobart, but was hopeful of being fit enough to play in the return two-test series in New Zealand in February.
"There's no point putting a time stamp on it until the bone heals," Starc, who arrived at a news conference on crutches, said Monday.
Starc played two important cameos while batting last, clobbering an unbeaten 24 — including two sixes and two boundaries in one over — to help Australia take a 22-run first-innings lead, and then joining fellow tail-ender Peter Siddle at the end of the match Sunday night when all the recognized batsmen were dismissed chasing a victory target of 187.
He said he was surprised to be told he was going in to bat ahead of Nathan Lyon and Josh Hazlewood. He limped on the field and backed up patiently as Siddle whittled down the runs required, half skipping, half running through for the last two runs required.
Starc was using a "moon boot" to take pressure off his foot. He also has a long-term ankle injury that will eventually need surgery, but has been delaying that because the recovery will keep him on the sidelines for months.
"I'll be in this (moon) boot for I think three or four weeks, depending on how it's going, and probably reassess then," he said. "The foot won't rule me out for rest of summer so there's no point doubling up and missing extra time with surgery.
"The ankle is going pretty well. I'm not too worried about how that's going to be when my foot," heals.
Australia's pace bowling stocks will be tested in Starc's absence, particularly after the retirements in recent months of veterans Ryan Harris and Johnson. James Pattinson just missed out on selection for the Adelaide test when Siddle was preferred as the replacement for Johnson.
Josh Hazlewood took a career-best 6-70 in the second innings, and nine wickets for the match, to lead the attack after Starc was injured..</p><br><br>
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
              <p><a href="bjr.php">BAJIRAO MASTANI</a> Bajirao Mastani is an Indian historical romance film produced and directed by Sanjay Leela Bhansali</p>
              
            </li>
            <li>
              <p><a href="airlft.php">AIRLIFT</a> Airlift is an upcoming Indian film directed by Raja Krishna Menon, and starring Akshay Kumar and Nimrat Kaur in lead roles, and is scheduled for release on 22 January 2016.</p>
              
            </li>
            <li>
              <p><a href="badi.php">World Superseries Finals 2015</a>The 2015 BWF Season is the overall badminton circuit organized by the Badminton World Federation (BWF) for the 2015 badminton season to publish and promote the sport.</p>
             
            </li>
            <li>
              <p><a href="skrillex.php">Skrillex</a> Sonny John Moore,known professionally as Skrillex, is an American electronic music producer, DJ, singer and songwriter.</a></p>
              
            </li>
          </ul>
        </div>
      </div>
	
	
<div id="flickr">
        
      
        <div class="cl">&nbsp;</div>
        <div class="flickr-pics">
          <ul>
            <li> <a href="ashwin.php"><img src="ashwin.jpg" alt="Ashwin shines as India clinch series with third Test win" ></a> </li>
            <li> <a href="sun.php"><img src="sun.jpg" alt="Sunburn Festival 2015" ></a> </li>
            
            <li class="last"> <a href="rd.php"><img src="rd.jpg" alt="Deepika Padukone, Ranbir Kapoor starrer ‘Tamasha’ earns Rs. 24.04 cr in two days" ></a> </li>
            <li> <a href="starc.php"><img src="starc.jpg" alt="Injured Starc unsure when he'll bowl again for Australia" ></a> </li>
            <li> <a href="rs.php"><img src="rs.jpg" alt="Why Is Ranveer Singh Not Worried About ‘Dilwale-Bajirao Mastani’ Clash?" ></a> </li>
            
            <li class="last"> <a href="tamasha.php"><img src="tamasha.jpg" alt="Deepika Padukone And Ranbir Kapoor Create More Tamasha At College Festival!" ></a> </li>
            <li> <a href="sa.php"><img src="sa.jpg" alt="Awesome threesome have made SA batsmen look club class" ></a> </li>
            <li> <a href="narine.php"><img src="narine.jpg" alt="Sunil Narine suspended from international cricket for illegal bowling action" ></a> </li>
            
            <li class="last"> <a href="ns.php"><img src="ns.jpg" alt="Naseeruddin Shah To Be Honoured At Dubai International Film Festival" ></a> </li>
          </ul>
        </div>
      </div>
      <div class="cl">&nbsp;</div>
    </div>
   
  </div>
</div>
</body>
</html>