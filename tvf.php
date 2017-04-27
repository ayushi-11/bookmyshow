
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



 
$conn->close();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$a;
$b;
$c;
$d;
$e;
	

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "use project";

if ($conn->query($sql) === TRUE) {} else {
	echo "Error creating database: " . $conn->error;
}
$sq= "SELECT Tid,tvanue,Ttime, Tprice FROM theatre where Tname='TVF' ";
$result = $conn->query($sq);

if ($result->num_rows> 0) {
  
    while($row = $result->fetch_assoc()) {
    $a=$row["Tid"];
	$b=$row["tvanue"];
	$c=$row["Ttime"];
	$e=$row["Tprice"];
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
<title>TVF</title>
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
<h1> The Viral Fever</h1><br><br>
<div id="brm">
<IMG SRC="tv.JPG" align="right">
</div>
<p>The Viral Fever also popularly abbreviated TVF is an online youth entertainment network launched in 2010. The main mode of this entertainment network is distribution of short comical videos that expose the funny side of everyday life which most of us fail to notice. The videos are freely available on YouTube. According to Arunabh Kumar the founder of this creative network, the idea behind the launch of the network was to reach out to the younger generation who seldom watch the television to either pass the time or for entertainment. Recently they have diversified into 'Drama' with their web series Permanent Roommates which became the most watched branded web series in the world.[citation needed] Permanent Roommates explores the love, life and live-in relationships in India in a humorous way.[2] Following the success of Permanent Roommates, they have come up with their second original series know as 'TVF Pitchers' - a show focused on how engineers working in different companies quit their jobs and start a startup. 'TVF Pitchers' currently ranks 21 on the IMDb Top 250 TV list with a rating of 9.7.

All the video clips from TVF studio has the seal of originality in tearing down, exposing, making a harmless jest and revealing what we often choose to ignore. TVF clips dissect Indian politics, movies, lifestyle, social concepts, etc, from a very different perspective and angle to initially evoke laughter  but also send out an unforgettable social message to the viewers. TVF videos already have 1,020,114 subscribers on YouTube  It is the first YouTube based channel to reach a million subscribers for online content within the shortest time.</p>
<h3>event_id: <?php echo "$a"; ?><br>    vanue: <?php echo "$b"; ?><br>   time: <?php echo "$c"; ?><br>   cost:<?php echo "$e"; ?></h3>
<br><br>
<ul type="none">
<li><b>Pseudonym : </b>TVF</li>
<li><b>Medium : </b>Hindi, English</li>
<li><b>Nationality : </b>Indian</li>
<li><b>Years active : </b>2010 - present</li>
<li><b>Genres :</b> Drama, Comedy</li>
<li><b>Notable works and roles :</b> Permanent Roommates, TVF Pitchers, Barely Speaking With Arnub,The Making Of Series, Chai Sutta Chronicles, Tech Conversations With Dad Members	Arunabh Kumar,Amit Golani, Biswapati Sarkar, Jitendra Kumar, Deepak Mishra, Nidhi Bisht, Anandeshwar Dwivedi, Vaibhav Bundhoo</li>
<li><b>Website :</b> www.tvfplay.com</li>
<li><b><a href="book.php" class="button">BOOK</a></b></li>
<li>&nbsp;</li><br><br>
</ul>
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