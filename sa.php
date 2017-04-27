
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
<title>Awesome threesome have made SA batsmen look club class</title>
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
<h1> Awesome threesome have made SA batsmen look club class</h1><br><br>
<div id="brm">
<IMG SRC="sa.JPG" align="right">
</div>
<p>Ravichandran Ashwin, Amit Mishra and Ravindra Jadeja have cast a magical spell on South African batsmen who have found it difficult to read them.THE THREE-PRONGED spin attack has been the key to India’s success on turning tracks in the current series against South Africa. Ravinchandran Ashwin, Amit Mishra and Ravindra Jadeja have cast a magical spell on South African batsmen who have found it difficult to read them. All three bring different skills to the table and have fitted into their roles perfectly.
Ashwin has spearheaded the attack with aplomb while Jadeja has been the perfect foil, standing out for his accuracy. Mishra, with his variations, has been the surprise element in the pack and captain Virat Kohli has used him judiciously for maximum impact.
Mishra, who returned to the team in the series against Sri Lanka, has got the breakthroughs for his captain whenever needed.
When Hashim Amla and Faf du Plessis put up a strong resistance in the second innings in the third Test, Mishra walked up to Kohli and asked for the ball . The leg- spinner removed both batsmen, thus exposing the lower order.
In the Mohali Test, he got the most important batsman AB de Villers in both innings.
“ Mishra has been very important for us, AWESOME
getting crucial breakthroughs.
He bowled well in Sri Lanka in his comeback series and in this Test also. When the partnership was going on, he actually held the ball and said I am going to get you a wicket and in three overs he got Hashim out. He was persistent and as a captain, it is a pleasing thing - a bowler saying ‘ I will get you a wicket’,” said Kohli.
In the past, Ashwin has copped a lot of criticism for trying out too many things, but gradually he has grown in confidence and emerged as the most difficult bowler to face for any opposition in India.
He has backed his natural skills and used his variations judiciously. Patience and persistence with one line, before using his bag of tricks, has reaped dividends.
The carrom bowl is not coming out of his hands too often now but he is using it cleverly to deceive batsmen. He is plotting dismissals now making him more dangerous.
“ He has always been a quality bowler. He has become more consistent now with his stock ball, flighting it and putting more revs into it. He is not trying too hard, you hardly see the carrom ball coming in and that is a sign of confidence for any spinner who is relying on his natural ability to deceive the batsman with changes in pace.
“ In the past few months, he is winning games for us consistently which is a great sign. He is a champion bowler,” Kohli said.
Jadeja brings with him consistency in line and length. He is not a big turner of the ball but his ability to pitch the ball in one area with regularity and allowing the surface to do its bit is his biggest strength.
He is quick to assess the pace of the wicket, and on surfaces where the ball is turning a lot, his arm ball has been his biggest asset. Several times in the series, he has bamboozled batsmen with it.
Kohli said Jadeja’s consistency has got him the desired results.
India always had a pack of spinners who have helped the team win matches, and Kohli seems to have found his own set of tweakers to exploit home conditions.
But as Sunil Gavaskar has mentioned, the batting from both the sides has also been mediocre. “ For all the three Test matches that we have seen the batting for both the teams has been below- par. And both the teams have got world- class batsmen. If you see the dismissals of all the players, there has been very seldom a bowler who has bowled an unplayable delivery,” he said.
Spinners have helped Kohli exploit home advantage</p><br><br>
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