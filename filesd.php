
<html>
<body> 
<?php
$servername = "localhost";
$username = "root";
$password = "";

	

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "use project";

if ($conn->query($sql) === TRUE) {} else {
	echo "Error creating database: " . $conn->error;
}
$sql = "SELECT email FROM user where email='$_POST[email]'";
$result = $conn->query($sql);
$i=0;
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $uail=$row["email"];
	$i=5;
    }
}

if($_POST["pass"]!== $_POST["pas"])
{
	header('Location: nomatch.php');
}
if($i===5)
{
	header('Location: match.php');
}

$sq2 = "insert into user(email,uname,pass,number,address) values('$_POST[email]','$_POST[uname]','$_POST[pass]','$_POST[number]','$_POST[address]') ";

if ($conn->query($sq2) === TRUE) {
    
} else {
    echo "Error: ";
}
$sq2 = "insert into login values('$_POST[uname]','$_POST[email]')";
if ($conn->query($sq2) === TRUE) {
    
} else {
    echo "Error: ";
}



 
$conn->close();
?>
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
<title>HOME</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body><div id="header">
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
      
      <div id="latest-projects">
        <h2 class="eye"> <span>LATEST MOVIES</span> <a href="movie.php" class="see-all">SEE ALL</a> </h2>
        <div class="latest-projects-list">
          <ul>
            <li>
               <a href="drishyam.php"><img src="5.jpg" alt="" /></a>
              <div class="entry">
                <h3>DHRISHYAM.</h3>
                <p>Drishyam is a 2015 Indian thriller drama film directed by Nishikant Kamat. It features Ajay Devgn, Shriya Saran and Tabu in the lead roles </p>
                <a href="drishyam.php" class="button rarr">DETAILS</a> </div>
            </li>
            <li>
               <a href="pkp2.php"><img src="8.jpg" alt="" /></a> 
              <div class="entry">
                <h3>PYAAR KA PANCHANAMA 2</h3>
                <p>Pyaar Ka Punchnama 2 is a 2015 Hindi film. It is a sequel to the 2011 film Pyaar Ka Punchnama.</p>
                <a href="pkp2.php" class="button rarr">DETAILS</a> </div>
            </li>
            <li class="last">
             <a href="bdlpr.php"><img src="10.jpg" alt="" /></a> 
              <div class="entry">
                <h3>BADLAPUR</h3>
                <p>Badlapur (stylized as बदलाPUR) is a 2015 Indian crime thriller directed by Sriram Raghavan and produced by Dinesh Vijan and Sunil Lulla.</p>
                <a href="bdlpr.php" class="button rarr">DETAILS</a> </div>
            </li>
          </ul>
          <div class="cl">&nbsp;</div>
        </div>
      </div>
	  
	  
	  <div id="latest-projects">
        <h2 class="eye"> <span>THEATRES</span> <a href="theatre.php" class="see-all">SEE ALL</a> </h2>
        <div class="latest-projects-list">
          <ul>
            <li>
               <a href="aib.php"><img src="aib1.jpg" alt="" /></a> 
              <div class="entry">
                <h3>AIB</h3>
                <p>All India Bakchod usually abbreviated and referred to as AIB is an Indian comedy group. The group was initially founded by Gursimran Khamba and Tanmay Bhat and was later joined by Rohan Joshi and Ashish Shakya. </p>
                <a href="aib.php" class="button rarr">DETAILS</a> </div>
            </li>
            <li>
              <a href="zang.php"><img src="z.jpg" alt="" /></a> 
              <div class="entry">
                <h3>ZANGOORA</h3>
                <p>Zangoora – The Gypsy Prince is the first Bollywood musical. It was premiered on September 23, 2010 at Nautanki Mahal of Kingdom of Dreams, Gurgaon..</p>
                <a href="zang.php" class="button rarr">DETAILS</a> </div>
            </li>
            <li class="last">
               <a href="tvf.php"><img src="tvf.jpg" alt="" /></a> 
              <div class="entry">
                <h3>TVF</h3>
                <p>The Viral Fever also popularly abbreviated TVF is an online youth entertainment network launched in 2010. The main mode of this entertainment network is distribution of short comical videos that expose the funny side of everyday life which most of us fail to notice..</p>
                <a href="tvf.php" class="button rarr">DETAILS</a> </div>
            </li>
          </ul>
          <div class="cl">&nbsp;</div>
        </div>
      </div>
	  
	  
	  
	  
	  
      <div id="blog">
        <h2 class="bubble"> <span>FROM OUR BLOG</span>  </h2>
        <div class="blog-posts">
          <ul>
            <li>
              <h3>Why Lewis Hamilton and Cristiano Ronaldo are Soulmates</h3
              <a href="bsport.php"> <img src="s1.jpg" alt=""> </a>
              <div class="data">
                <p>With three races left in the 2015 F1 calendar, Lewis Hamilton – already a double World Champion – secured his third F1 World Championship by winning the United States Grand Prix. He became the second Brit to win three World Championships – now on par with childhood idol Ayrton Senna, after already having overtaken him in race victories (43). He also became the first Brit ever to win two consecutive titles, after being the youngest-ever F1 champion back in 2008 for McLaren. He won 11 races in the 2014 season, and has already won 10, with two to go in this 2015 season, and just 39 points short of his 2014 record tally. He has a combined total of 31 podiums in the last two years<a href="bsport.php">....</a> </p>
              </div>
              <div class="cl">&nbsp;</div>
              <div class="buttons"> <a href="bsport.php" class="button rarr">READ MORE</a>
                <div class="cl">&nbsp;</div>
              </div>
            </li>
            <li>
              <h3>Let’s Get Ready to Rumble</h3>              
              <a href="wwe.php"><img src="w.jpg" alt="" /></a> 
              <div class="data">
                <p>We have all grown up with WWE being a part of our lives and aside from having tremendous athletic ability and the personality to entertain an audience, the top professional wrestlers have left their mark embedded in our memories with their stage names designed to fit their persona perfectly. Where would the WWE be without Hulk Hogan, Bret The Hitman Hart, Stone Cold Steve Austin along with The Rock and his signature catchphrase – ‘If you smell what The Rock is cooking’? And who can forget the legendary battles between Kane and (my personal favorite) The Undertaker.
                <a href="wwe.php">....</a></p>
				</div>
              <div class="cl">&nbsp;</div>
              <div class="buttons"> <a href="wwe.php" class="button rarr">READ MORE</a> 
                <div class="cl">&nbsp;</div>
              </div>
            </li>
            <li class="last">
              <h3>The Rise And Rise Of Deepika Padukone.</h3>
              
              <a href="deepika.php"><img src="d1.jpg" alt="" /> </a>
              <div class="data">
                <p class="data">As far as time management and sheer prolific and obsessive hard work goes, there is perhaps no Hindi film performer, in recent times, quite like Deepika Padukone. It isn’t a coincidence, therefore, that she is the most improved mainstream actor in Bollywood – an ideal amalgamation of a star and an artist, who can pull in crowds as well as have them rooted to their seats. 
				<a href="deepika.php">.....</a></p>
				</div>
              <div class="cl">&nbsp;</div>
              <div class="buttons"> <a href="deepika.php" class="button rarr">READ MORE</a> 
                <div class="cl">&nbsp;</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      
      <div class="cl">&nbsp;</div>
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