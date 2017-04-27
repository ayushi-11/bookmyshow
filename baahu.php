
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
<html >
<head>
<title>Baahubali</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body<div id="header">
<h3 id="hello"> Hello <?php echo "$uname"; ?> ! </h3>
  <div class="shell">
    
    <div id="navigation">
      <ul>
        <li><a href="index1.php" >HOME</a></li>
		<li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="movie.php" class="active">MOVIES</a></li>
        <li><a href="concert.php" >CONCERTS</a></li>
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
<h1> Baahubali</h1><br><br>
<div id="brm">
<IMG SRC="b.JPG" align="right">
</div>
<p>Baahubali: The Beginning is a 2015 Indian bilingual epic historical fiction film directed by S. S. Rajamouli. Produced by Shobu Yarlagadda and Prasad Devineni, it is the first of two cinematic parts. The film was simultaneously made in Telugu and Tamil and dubbed into Hindi, Malayalam and French languages. A fictional story of two warring brothers fighting for control of an ancient Indian kingdom, it stars Prabhas, Rana Daggubati, Tamannaah and Anushka Shetty in lead roles. Ramya Krishnan, Sathyaraj, Nassar, Adivi Sesh, Tanikella Bharani and Sudeep appear in supporting roles. The Soundtrack and background score were composed by M. M. Keeravani while the cinematography, editing, art direction and visual effects supervision were done by K. K. Senthil Kumar, Kotagiri Venkateswara Rao, Sabu Cyril and V. Srinivas Mohan respectively.

The film made on a budget of ₹120 crore (US$18 million) released worldwide on 10 July 2015 to positive reviews from critics, and became the highest grossing Indian film within India and third highest grossing Indian film globally. It became the first south Indian film to gross over ₹600 crore (US$91 million) worldwide and the first non-Hindi film to gross over ₹100 crore (US$15 million) in dubbed Hindi version in India. It is also the highest grossing Telugu film of all time.

An International version of the film edited by Vincent Tabaillon was screened at the Open Cinema Strand of Busan International Film Festival, Indian Film Festival The Hague, Sitges Film Festival in Spain, Utopiales Film Festival in France,Golden Horse Film Festival in Taipei, Taiwan,Tallinn Black Nights Film Festival in Estonia and Hawaii International Film Festival.International version of the film is scheduled to be released in China, Japan, Korea, Taiwan, Indonesia, Thailand, Vietnam, Laos, Cambodia, Myanmar, Timor-Leste along with some European and Latin American countries.</p>
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
$sq= "SELECT Mid,vanue,time, price FROM movies where Mname='BAHUBALI'";
$result = $conn->query($sq);

if ($result->num_rows> 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $a=$row["Mid"];
	$b=$row["vanue"];
	$c=$row["time"];
	$e=$row["price"];
 echo NL2BR("event_id: $a  &nbsp;&nbsp;&nbsp;\t      vanue: $b  \t &nbsp;&nbsp;&nbsp;    time: $c");echo nl2br("&nbsp;&nbsp;&nbsp;\t cost: $e\n") ; 	
    }
} else {
    echo "0 results";
}
  
$conn->close();
?>

<ul type="none">
<li><b>Directed by :</b> S. S. Rajamouli</li>
<li><b>Produced by :</b> Shobu Yarlagadda ,Prasad Devineni</li>
<li><b>Screenplay by :</b> S. S. Rajamouli</li>
<li><b>Story by :</b> K. V. Vijayendra Prasad</li>
<li><b>Starring :</b> Prabhas ,Rana Daggubati ,Anushka Shetty ,Tamannaah</li>
<li><b>Music by :</b> M. M. Keeravani</li>
<li><b>Cinematography : </b>K. K. Senthil Kumar</li>
<li><b>Edited by : </b>Kotagiri Venkateswara Rao ,Vincent Tabaillon (International Version)</li>
<li><b>Production company :</b> Arka Media Works</li>
<li><b>Distributed by : </b>Telugu:Arka Media Works ,Tamil:Studio Green ,UV Creations , Sri Thenandal Films ,Hindi:Dharma Productions,Malayalam:Global United Media</li>
<li><b>Release dates :</b> 10 July 2015</li>
<li><b>Running time : </b>158 minutes(Telugu),159 minutes (Tamil)</li>
<li><b>Country : </b>India</li>
<li><b>Language :</b> Telugu , Tamil</li>
<li><b>Budget : </b>₹120 crore (US$18 million) ,Box office	est.₹600 crore (US$91 million)</li>
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