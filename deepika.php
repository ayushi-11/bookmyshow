
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
<title>BLOG:The Rise And Rise Of Deepika Padukone</title>
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
<br><br>
<div id="main">
<div class="bg-top">
<div class="shell">
<h1>The Rise And Rise Of Deepika Padukone</h1><br><br>
<p>As far as time management and sheer prolific and obsessive hard work goes, there is perhaps no Hindi film performer, in recent times, quite like Deepika Padukone. It isn’t a coincidence, therefore, that she is the most improved mainstream actor in Bollywood – an ideal amalgamation of a star and an artist, who can pull in crowds as well as have them rooted to their seats. 

I remember first watching her in Om Shanti Om back in 2007. She was Badminton legend Prakash Padukone’s awkward-accented ambitious young daughter for many, back then. I remember wondering if her ‘Bangalorean’ Hindi would ever let her break the glass ceiling and strive for a substantial career. The launchpad wasn’t dissimilar to the one Alia Bhatt received in Student Of The Year – more for the exposure and awareness than anything else. 

It’s heartening to see that both these actors turned out to be far, far better than they appeared in their first films. 

Padukone’s career is a lesson in will power. She was, by no means, a good actor till 5 years into her career, and even after that, she succumbed to many a big banner and hero-oriented or director-headed saga. And once stars like her find a comfort zone of sorts, where they can get away with average performances in middling films, very rarely does one see them make a genuine effort to turn over a new leaf – and improve. 

Improvement isn’t a hallmark of Indian actors these days. Their capabilities are often judged – and entire careers run – from their initial performances. They are cast in films accordingly, not taking into consideration their desire or ability to get better, to learn from their mistakes and to evolve as actors. 

But Deepika Padukone has proved even her most ardent critics (yours truly) wrong over time, and – even though she isn’t the best actor out there right now – she has definitely achieved the most admirable balance between fame and content, ground and stars, fluff and game-face, economics and arts. </p>
<br><br>
<img src="de.jpg">
<p>What’s more – she has worked with almost every major Indian director out there. She works on big-scale, massively mounted projects most of the time – with a few relatively smaller ones thrown in in between. It isn’t easy to do so many a-year-in-the-making films at one go, and appear in each of them successfully in only 8 years. At her rate, she does around 3 films a year – and we’re talking about directors like Imtiaz Ali, Sanjay Leela Bhansali, Ashutosh Gowariker – the guys who don’t take any less than 15 months to make, or even shoot, their films. Which is why her speed always ceases to amaze. 

Heaven knows the amount of time she has waited on sets between shots, during elaborate dance sequences, songs and precisely lit frames. Acting is 80% waiting on the set and contemplating life, work and everything in between. And there’s a lot to be learned from Deepika, as a young actor in a notorious industry, about how to maximize potential with sheer non-stop work. Good choices, bad choices, silly choices – she’s done them all, and come up cleaner, bigger and smarter on the other side. 

And now, with her 23rd and 24th films up for release within three weeks of one another – Imtiaz Ali’s Tamasha and Sanjay Leela Bhansali’s Bajirao Mastani (her second with the famed task master) – she adds to a filmography that is now thriving as much on variety as it is on quantity. 

Early Flaws

She tried to play unorthodox, modern, forward-thinking characters after bagging Love Aaj Kal, but always came across as someone who is far too conscious of the role she’s playing, and someone not quite at ease with the camera yet. She was mere ornamentation in Siddharth Anand’s awful Bachna Ae Haseeno, Akshay’s heroine in Chandni Chowk to China and an executive who couldn’t smoke or hold a cigarette convincingly in the psychological thriller Karthik Calling Karthik. 

Mainstream Boom

She then went on a slew of misdirected formulaic commercial disasters – the forgettable Lafangey Parindey, the immensely forgettable Break ke Baad (whose director Danish Aslam she was rumored to be dating) and the disastrous Khelein Hum Jee Jaan Sey. But she stayed afloat, thanks to the few multi-starrer hits in between – Housefull, Desi Boyz and Race 2 – all terrible films on their own, but box office hits – thereby cementing her status as a lesser version of Katrina Kaif. 

Turning Point

Homi Adajania’s Cocktail released in 2012, and once again, it had Padukone as part of a triangle/multi-starrer. But despite the lukewarm reception the film garnered, for the first time, Padukone stole the show as the volatile, fragile, wild bohemian girl – something, one suspects, she had been wanting to succeed at for years now. It was perhaps the setting, or the fact that she was paired opposite the perpetually non-solo hero Saif Ali Khan and newcomer Diana Penty, but Deepika actually showed glimpses of an artist willing to let go, and willing to showcase her greatest fears and insecurities on screen. She was a bit of a revelation, though not entirely a finished product. </p>
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