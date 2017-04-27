
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

<html>
<head>
<title>The Martian</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div id="header">
<h3 id="hello"> Hello <?php echo "$uname"; ?> ! </h3>
  <div class="shell">
    
    <div id="navigation">
      <ul>
        <li><a href="index1.php">HOME</a></li>
		<li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="movie.php" class="active">MOVIES</a></li>
        <li><a href="concert.php">CONCERTS</a></li>
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
<h1> The Martian</h1><br><br>
<div id="brm">
<IMG SRC="mr.JPG" align="right">
</div>
<p>The Martian is a 2015 American science fiction film directed by Ridley Scott and starring Matt Damon. The film is based on Andy Weir's 2011 novel of the same name, which was adapted into a screenplay by Drew Goddard. Damon stars as an astronaut who is mistakenly presumed dead and left behind on Mars, depicting his struggles to survive and others' efforts to rescue him. The film also features Jessica Chastain, Kristen Wiig, Jeff Daniels, Michael Peña, Kate Mara, Sean Bean, Sebastian Stan, Aksel Hennie, Donald Glover, Mackenzie Davis, and Chiwetel Ejiofor in supporting roles.

Producer Simon Kinberg began developing the film after 20th Century Fox optioned the novel in March 2013. Drew Goddard adapted the novel into a screenplay and was initially attached to direct, but the film did not move forward. Scott replaced Goddard, and with Damon in place as the main character, production was green-lit. Filming began in November 2014 and lasted approximately 70 days. Around 20 sets were built on a sound stage in Budapest, Hungary, one of the largest in the world. Wadi Rum in Jordan was also used as a practical backdrop for filming.

The film premiered at the 2015 Toronto International Film Festival on September 11, 2015. 20th Century Fox released the film in theaters in the United States on October 2, 2015. The film was released in 2D, 3D, IMAX 3D and 4DX. The film has grossed over $490 million worldwide, becoming Scott's highest-grossing film to date, and has received positive reviews.</p>
<br>
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
$sq= "SELECT Mid,vanue,time, price FROM movies where Mname='SPECTRE'";
$result = $conn->query($sq);

if ($result->num_rows> 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $a=$row["Mid"];
	$b=$row["vanue"];
	$c=$row["time"];
	$e=$row["price"];
 echo NL2BR("event_id: $a  &nbsp;&nbsp;&nbsp;\t      vanue: $b  &nbsp;&nbsp;&nbsp;\t     time: $c");echo nl2br("&nbsp;&nbsp;&nbsp;\t cost: $e\n") ; 	
    }
} else {
    echo "0 results";
}
  
$conn->close();
?>
<br><br>
<ul type="none">
<li><b>Directed by :</b> Ridley Scott</li>
<li><b>Produced by : </b>Simon Kinberg ,Ridley Scott ,Aditya Sood ,Michael Schaefer ,Mark Huffam</li>
<li><b>Screenplay by :</b> Drew Goddard</li>
<li><b>Based on : </b>The Martian by Andy Weir</li>
<li><b>Starring :</b> Matt Damon ,Jessica Chastain , Kristen Wiig , Jeff Daniels , Michael Peña , Kate Mara ,Sean Bean ,Sebastian Stan ,Aksel Hennie ,Chiwetel Ejiofor</li>
<li><b>Music by :</b> Harry Gregson-Williams</li>
<li><b>Cinematography : </b>Dariusz Wolski</li>
<li><b>Edited by : </b>Pietro Scalia</li>
<li><b>Production companies :</b> Scott Free Productions ,Kinberg Genre</li>
<li><b>Distributed by : </b>20th Century Fox</li>
<li><b>Release dates : </b>September 11, 2015 (TIFF) ,October 2, 2015 (United States)</li>
<li><b>Running time :</b> 141 minutes</li>
<li><b>Country : </b>United States</li>
<li><b>Language :</b> English</li>
<li><b>Budget :</b> $108 million</li>
<li><b>Box office :</b> $490.2 million</li>
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