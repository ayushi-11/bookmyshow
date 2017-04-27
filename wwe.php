
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
if($uname==="NULL")
{
	header('location: check.php');
}


 
$conn->close();
?>
<html >
<head>
<title>BLOG:WWE</title>
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
<h1> Let’s Get Ready to Rumble</h1><br><br>
<p>It’s finally time for India to ‘Feel the Rush’ as the new year will bring the biggest WWE Superstars and Divas to New Delhi.  </p>
<br><br>
<img src="w.jpg">
<br><br>
<p>We have all grown up with WWE being a part of our lives and aside from having tremendous athletic ability and the personality to entertain an audience, the top professional wrestlers have left their mark embedded in our memories with their stage names designed to fit their persona perfectly. Where would the WWE be without Hulk Hogan, Bret The Hitman Hart, Stone Cold Steve Austin along with The Rock and his signature catchphrase – ‘If you smell what The Rock is cooking’? And who can forget the legendary battles between Kane and (my personal favorite) The Undertaker.

When it comes to professional wrestling, there’s no place for subtlety. You have to cater to the tiniest fan in a sold out arena as well as to the millions watching at home. And no one has understood how to do this better than Vince McMahon – founder and CEO of WWE.

Since 1982, when Vince, popularly known as Mr. McMahon, took over the business from his father, he has managed to be a part of every family, not only in the United States but across the globe. What made this man and his company a household name was his understanding of the audience within his country as well as the international potential his brand had, in terms of growth. Emerging market revenue has been growing at a 7 percent annual rate for almost a decade in countries like India, Mexico and even South Korea, to $116 million last year and Mr. McMahon has done every thing possible to cash in.

One of the biggest markets outside the US where World Wrestling Entertainment has enjoyed dominance in, is India. You can literally walk up to practically any guy on the road and they would be able to tell you about the who’s who in the WWE. 

As a kid, the most popular trading cards used were of our favorite WWE superstars and the trend still continues. This doesn’t only apply to children. Hence, it’s no surprise that Vince McMahon is bringing his blockbuster event back to this part of the world once again.

Of course, times change and along with the reigning superstars, some new stars have entered the arena. What’s amazing is the fact that the WWE has still managed to associate itself with every generation. 

Introducing John Cena, a complete fan favorite, a rapper, an actor and professional wrestler; it’s no surprise that this WWE champion is a legend in the making (if not already one). Imagine him battle the giant Big Show who was a huge hit the last time he was in India. Or how would the Lunatic Fringe – Dean Ambrose be able to handle The Neutralizer – Cesaro? And will the 6-foot-3, 291 pound monster known as The Big Guy – Ryback survive the Irish Curse, the Back Breaker – Sheamus.

Well, fortunately we don’t just have to imagine. The biggest WWE Superstars and Divas will be in New Delhi to entertain our massive community of wrestling fans in India. As Vince McMahon has been quoted as saying multiple times on WWE, “The biggest thrill in the world is entertaining the public, there is no bigger thrill than that”. And come the 15th & 16th of January 2016, entertained we will be!



 

– By Adrian Remedios</p>
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