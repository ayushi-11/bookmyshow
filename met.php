
<?php
$servername = "localhost";
$username = "root";
$password = "";
$uname;
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
$sq= "SELECT Cid,vanue,Ctime, Cdate, price FROM concerts where band_name='METTALICA' ";
$result = $conn->query($sq);

if ($result->num_rows> 0) {
   
    while($row = $result->fetch_assoc()) {
    $a=$row["Cid"];
	$b=$row["vanue"];
	$c=$row["Ctime"];
	$d=$row["Cdate"];
	$e=$row["price"];
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
<title>Metillica</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body><div id="header">
<h3 id="hello"> Hello <?php echo "$uname"; ?> ! </h3>
  <div class="shell">
    
    <div id="navigation">
      <ul>
        <li><a href="index1.php" >HOME</a></li>
		<li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="movie.php">MOVIES</a></li>
        <li><a href="concert.php" class="active">CONCERTS</a></li>
        <li><a href="theatre.php">THEATRES</a></li>
        <li><a href="sport.php">SPORTS</a></li>
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
<h1> Metllica</h1><br><br>
<div id="brm">
<IMG SRC="m.JPG" align="right">
</div>
<p>Metallica is an American heavy metal band formed in Los Angeles, California. Metallica was formed in 1981 when vocalist/guitarist James Hetfield responded to an advertisement posted by drummer Lars Ulrich in a local newspaper. The band's current line-up comprises founding members Hetfield and Ulrich, longtime lead guitarist Kirk Hammett and bassist Robert Trujillo. Lead guitarist Dave Mustaine and bassists Ron McGovney, Cliff Burton and Jason Newsted are former members of the band. Metallica collaborated over a long period with producer Bob Rock, who produced all of the band's albums from 1990 to 2003 and served as a temporary bassist between the departure of Newsted and the hiring of Trujillo.

The band's fast tempos, instrumentals, and aggressive musicianship placed them as one of the founding "big four" bands of thrash metal, alongside Anthrax, Megadeth, and Slayer. The band earned a growing fan base in the underground music community and won critical acclaim with its first four albums; the third album Master of Puppets (1986) was described as one of the most influential and heaviest thrash metal albums. Metallica achieved substantial commercial success with its eponymous fifth album—also known as The Black Album—which debuted at number one on the Billboard 200. With this release the band expanded its musical direction, resulting in an album that appealed to a more mainstream audience. In 2000, Metallica was among a number of artists who filed a lawsuit against Napster for sharing the band's copyright-protected material for free without consent from any band member. A settlement was reached and Napster became a pay-to-use service. Despite reaching number one on the Billboard 200, the release of St. Anger (2003) alienated many fans with the exclusion of guitar solos and the "steel-sounding" snare drum. A film titled Some Kind of Monster documented the recording of St. Anger and the tensions within the band during that time. In 2009, Metallica was inducted into the Rock and Roll Hall of Fame.

Metallica has released nine studio albums, four live albums, five extended plays, 26 music videos, and 37 singles. The band has won eight Grammy Awards and five of its albums have consecutively debuted at number one on the Billboard 200. The band's eponymous 1991 album has sold over 16 million copies in the United States, making it the best-selling album of the SoundScan era. Metallica ranks as one of the most commercially successful bands of all time, having sold over 110 million records worldwide. Metallica has been listed as one of the greatest artists of all time by many magazines, including Rolling Stone, which ranked them 61st on its list of The 100 Greatest Artists of All Time.As of December 2012, Metallica is the third best-selling music artist since Nielsen SoundScan began tracking sales in 1991, selling a total of 54.26 million albums in the U.S.In 2012, Metallica formed the independent record label Blackened Recordings and took full ownership of its albums and videos. As of 2015, the band is in production of its tenth studio album, slated to be released in 2016.</p>
<h3>event_id: <?php echo "$a"; ?><br>    vanue: <?php echo "$b"; ?><br>   time: <?php echo "$c"; ?><br>  date:<?php echo "$d"; ?><br>   cost:<?php echo "$e"; ?></h3>
<br><br>
<ul type="circle">
<li><b><a href="book.php" class="button">BOOK</a></b></li></ul>
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