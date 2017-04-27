
<html >
<head>
<title>Zangoora</title>
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
<h1> Zangoora</h1><br><br>
<div id="brm">
<IMG SRC="za.JPG" align="right">
</div>
<p>Zangoora – The Gypsy Prince is the first Bollywood musical. It was premiered on September 23, 2010 at Nautanki Mahal of Kingdom of Dreams, Gurgaon. It has a cast of 110 members with Hussain Kuwajerwala, Gauhar Khan, Kashmira Irani and Sadanand Patil playing lead; besides crew of 250 people. In June 2013, the musical completed a run of 1000 shows, and became the longest running Bollywood stage show in India.[2]

The musical was a production of the Great Indian Nautanki Company, a joint venture between Wizcraft and APRA Group. The music of the musical was composed by Shankar-Ehsaan-Loy, with screenplay and dialogues by Javed Akhtar.</p>
<BR>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$a;
$b;
$c;
$d;
$e;
	
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
$sq= "SELECT Tid,tvanue,Ttime, Tprice FROM theatre where Tname='ZANGOORA' ";
$result = $conn->query($sq);

if ($result->num_rows> 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $a=$row["Tid"];
	$b=$row["tvanue"];
	$c=$row["Ttime"];
	$e=$row["Tprice"];
 echo NL2BR("event_id: $a  \t &nbsp;&nbsp;&nbsp;     vanue: $b  \t&nbsp;&nbsp;&nbsp;     time: $c");echo nl2br("&nbsp;&nbsp;&nbsp;\t cost: $e\n") ; 	
    }
} else {
    echo "0 results";
}
  
$conn->close();
?>
<br><br>
<ul type="none">
<li><b>Music : </b>Shankar-Ehsaan-Loy</li>
<li><b>Lyrics : </b>Javed Akhtar</li>
<li><b>Basis : </b>Original screenplay by Javed Akhtar</li>
<li><b>Premiere : </b>September 23, 2010 – Kingdom of Dreams, Gurgaon</li>
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