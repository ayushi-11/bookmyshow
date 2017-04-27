
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
<html>
<head>
<title>BLOG:Why Lewis Hamilton and Cristiano Ronaldo are Soulmates</title>

<link rel="shortcut icon" href="css/images/favicon.ico" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
class="active"
<br><br>
<div id="main">
<div class="bg-top">
<div class="shell">
<h1>Why Lewis Hamilton and Cristiano Ronaldo are Soulmates</h1><br><br>
<p>With three races left in the 2015 F1 calendar, Lewis Hamilton – already a double World Champion – secured his third F1 World Championship by winning the United States Grand Prix. He became the second Brit to win three World Championships – now on par with childhood idol Ayrton Senna, after already having overtaken him in race victories (43). He also became the first Brit ever to win two consecutive titles, after being the youngest-ever F1 champion back in 2008 for McLaren. He won 11 races in the 2014 season, and has already won 10, with two to go in this 2015 season, and just 39 points short of his 2014 record tally. He has a combined total of 31 podiums in the last two years. </p>
<br><br>
<img src="bs3.jpg">
<br><br>
<p>With three races left in the 2015 F1 calendar, Lewis Hamilton – already a double World Champion – secured his third F1 World Championship by winning the United States Grand Prix. He became the second Brit to win three World Championships – now on par with childhood idol Ayrton Senna, after already having overtaken him in race victories (43). He also became the first Brit ever to win two consecutive titles, after being the youngest-ever F1 champion back in 2008 for McLaren. He won 11 races in the 2014 season, and has already won 10, with two to go in this 2015 season, and just 39 points short of his 2014 record tally. He has a combined total of 31 podiums in the last two years. 



Unfortunately, for fans, once again, this season has been down to one team and its two competing drivers; nobody else has come close, and there isn’t a car out there half as good as Mercedes. This made for a bland season, except for the simmering rivalry between teammates Hamilton and Nico Rosberg – who have grown up together, raced together, before suffering from a spectacular breakdown in their time together for Mercedes. Following the US Grand Prix, Nico then went on to win the Mexican GP – the first time it came back to the country after 23 years. 
 
In context of the all-time greats, Lewis Hamilton and Sebastian Vettel, arguably two of the contemporary champions and young superstars, share a rivalry similar to that shared by Lionel Messi and Cristiano Ronaldo in football. The timelines of highs and lows are pretty similar too: Lewis burst onto the scene in 2007 and almost won the Championship in his debut season. He then won his first title in 2008, the same year Ronaldo won the World Footballer of the Year award for his record-breaking season with Manchester United. Ronaldo then made the move to Real Madrid, around the same time Hamilton switched from his childhood team McLaren to Mercedes (replacing Schumacher) in search of another title, after being title-less for 2009, 2010, 2011, 2012. These were also the same years Lionel Messi dominated World football with Barcelona, and won the World Footballer award four times in a row – an unprecedented effort. Vettel won the title in 2010, 2011, 2012 and 2013.</p>

<br><br>
<p>With three races left in the 2015 F1 calendar, Lewis Hamilton – already a double World Champion – secured his third F1 World Championship by winning the United States Grand Prix. He became the second Brit to win three World Championships – now on par with childhood idol Ayrton Senna, after already having overtaken him in race victories (43). He also became the first Brit ever to win two consecutive titles, after being the youngest-ever F1 champion back in 2008 for McLaren. He won 11 races in the 2014 season, and has already won 10, with two to go in this 2015 season, and just 39 points short of his 2014 record tally. He has a combined total of 31 podiums in the last two years. 



Unfortunately, for fans, once again, this season has been down to one team and its two competing drivers; nobody else has come close, and there isn’t a car out there half as good as Mercedes. This made for a bland season, except for the simmering rivalry between teammates Hamilton and Nico Rosberg – who have grown up together, raced together, before suffering from a spectacular breakdown in their time together for Mercedes. Following the US Grand Prix, Nico then went on to win the Mexican GP – the first time it came back to the country after 23 years. 
 
In context of the all-time greats, Lewis Hamilton and Sebastian Vettel, arguably two of the contemporary champions and young superstars, share a rivalry similar to that shared by Lionel Messi and Cristiano Ronaldo in football. The timelines of highs and lows are pretty similar too: Lewis burst onto the scene in 2007 and almost won the Championship in his debut season. He then won his first title in 2008, the same year Ronaldo won the World Footballer of the Year award for his record-breaking season with Manchester United. Ronaldo then made the move to Real Madrid, around the same time Hamilton switched from his childhood team McLaren to Mercedes (replacing Schumacher) in search of another title, after being title-less for 2009, 2010, 2011, 2012. These were also the same years Lionel Messi dominated World football with Barcelona, and won the World Footballer award four times in a row – an unprecedented effort. Vettel won the title in 2010, 2011, 2012 and 2013.
 

 
Ronaldo finished runner-up almost all the time, unlike Hamilton, who was far down in 4th or 5th for these seasons. Then, after a few rule changes, Hamilton’s car became unbeatable, and he won the 2014 and 2015 seasons – three titles to Vettel’s four. Ronaldo won the Footballer titles for 2013 and 2014 – twice in a row, breaking Messi’s stranglehold and finally coming into his own at the top. He now has three awards to Messi’s four, and their rivalry isn’t dimming anytime soon. While Messi is currently injured, he stands less of a chance to win the award next year, much like Vettel – who is struggling with Ferrari, but is easily the best of the rest away from the Mercedes drivers. </p>
<br><br>

<p>Hamilton may be saddled into the best car right now, much like Vettel had one for the years he had dominated the scene. But that doesn’t make them lesser drivers, for they have almost always defeated their teammates over a season, and have even performed admirably when their teams have been struggling. Vettel will finish third this season, and looks to have finally gotten a hold over his car’s mechanics. However, they’re still a long way behind Mercedes – who seemed to have cracked the same ‘cheat code’ form that brought them their first title back in 2009 back when they were Brawn GP. 
 </p>
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