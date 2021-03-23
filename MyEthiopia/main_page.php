<?php
session_start();
if($_SESSION['id']==0){
  header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>My Ethiopia - Home</title>
	<link rel="icon" href="img/myethiopia.ico">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style2.css">
 <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
</head>

<body style="background-color:#e6e6ff">

		<header  id="section-1" >
			<nav class="navbar" id="navbarID">

				<div class="navcontainer">
					
					<ul class="navmenu center_text">
						<li><a href="#section-1">Home</a></li>
						<li><a href="#section-2">About Ethiopia</a></li>
						<li><a href="#section-3">Destinations</a></li>
						<li><a href="#section-4">Tour Package</a>
						<li><a href="#section-5">About Us</a></li>
						<li><a href="logout.php">Logout</a></li>
						</li>
					</ul>
				</div>	
			</nav>
		</header>
		<div class="top_background" >		
					<div>
						<h1 class="center_white_text"> My Ethiopia</h1>
						<p class="center_text white-text">Discover Ethiopia...</p>				
					</div>	
		</div>

<section>
	<div class="container">
				<h2 class="center_text black-text" style="border-left: 150px; border-radius: 15px; border: 2px solid black;">Features</h2>
			</div>
		<div class="row" >
	<div class="coupon column-front">
  <img class="feat_img scaleUp"; style="width:95%; height: 280px;"  src="img/imgheader1.jpg" alt="Nature's Bounty">
 
 	<div class="container" style="background-color:white">
  		<div class="pop-title">Nature's Bounty</div><hr>
		<p class="center_text">Ethiopia is one of Africa's most beautiful countries and its landscapes are epic in both scale and beauty.
 			Here is a place where you can trek more than 3000m above sea level (the Semien and Bale mountains) 
 			or visit the lowest place on the African continent, the Danakil Depression.</p>
	</div>
  	
	</div>

			
			<div class="column-middle coupon">
				 <img class="feat_img scaleUp"; style="width:95%; height: 280px;"  src="img/imgheader2.jpg" alt="Historical Wonders">
				<div class="container" style="background-color:white">
				<div class="pop-title">Historical Wonders</div><hr>
				<p class="center_text">Ethiopia, the only African country to have escaped European colonialism, has retained much 
				of its cultural identity and its story is one of Africa's most fascinating. It all begins with Lucy, one of our 
				most celebrated ancient ancestors, moves effortlessly into the realm of ancient Aksum.</p>
			</div>
  	
			</div>


			<div class="column-side coupon">
				<img class="feat_img scaleUp"; style="width:95%; height: 280px;"  src="img/about-eth3.png" alt="Proud Traditions">
				<div class="container" style="background-color:white">
				<div class="pop-title">Proud Traditions</div>
				<hr>
				<p class="center_text">When it comes to human cultures, Ethiopia has an embarrassment of riches. There are the Surmi, 
				Afar, Mursi, Karo, Hamer, Nuer and Anuak, whose ancient customs and traditions have remained almost entirely intact. Venturing into 
				these communities and staying among them.</p>
		   </div>
		
		
		</div>
		
	</section>
	

<section >	
		<div>
			<div class="container">
				
				<h2 class="center_text black-text" style="border-left: 150px; border-radius: 15px; border: 2px solid black;">Popular Destinations</h2>
				
			</div>
<DIV class="row-popular">
<!--konso-->
<div class="coupon column-front-pop">
  <img class="feat_img " style="width:100%; height: 280px;" src="img/konso2.jpg" alt="Konso Cultural Landscape">
 
 	<div class="container" style="background-color:white">
  		<div class="pop-title">Konso</div><hr>
		<p class="pop-para">Konso Cultural Landscape is an arid property of stone walled terraces and fortified settlements...	</p>
	</div>
  	<div class="readmore">
   	 <p class="center_text"><a class="textdecor" href="#">Read more</a></p>
  	</div>
</div>

<!--konso-->
<div class="coupon column-front-pop">
  <img class="feat_img "; style="width:100%; height: 280px;"  src="img/semien.jpg" class="scaleUp" alt="Semien mountains">
 
 	<div class="container" style="background-color:white">
  		<div class="pop-title">Semien Mountains</div><hr>
		<p class="pop-para">The Semien Mountains found in northern Ethiopia, north east of Gondar in Amhara region...</p>
	</div>
  	<div class="readmore">
   	 <p class="center_text"><a class="textdecor" href="#">Read more</a></p>
  	</div>
</div>

<!--aksum-->
<div class="coupon column-front-pop">
  <img class="feat_img "; style="width:100%; height: 280px;" src="img/aksum1.jpg"  alt="Aksum Obelisk">
 
 	<div class="container" style="background-color:white">
  		<div class="pop-title">Axum</div><hr>
		<p class="pop-para">Axum is a city in northern Ethiopia. It's known for its tall and symbolizes the wealth and importance...</p>
	</div>
  	<div class="readmore">
   	 <p class="center_text"><a class="textdecor" href="#">Read more</a></p>
  	</div>
</div>

<!--lalibela-->
<div class="coupon column-front-pop">
  <img class="feat_img "; style="width:100%; height: 280px;" src="img/lalibela3.jpg" alt="Lalibela">
 
 	<div class="container" style="background-color:white">
  		<div class="pop-title">Lalibela</div><hr>
		<p class="pop-para">Lalibela is a town in the Amhara region of northern Ethiopia,it is famous rock-cut monolithic...</p>
	</div>
  	<div class="readmore">
   	 <p class="center_text"><a class="textdecor"  href="#">Read more</a></p>
  	</div>
</div>
</Div>			
</div>
	</section>
		<hr>

		 <section id="section-2">
			<hr>
			<div class="row">
				<div class="column60">
				<h1 style="color:black;"> Brief Explanation about Ethiopia</h1>
				<hr>
				<p class="double">Ethiopia-one of the most fascinating countries in the world, Old beyond all imagination, dates back to the very beginnings
						of mankind, “LAND OF ORIGIN” offering a wealth of captivating riches, fabulous kingdoms and ancient mysteries. 
						Ethiopia is truly a land of contrasts and extremes; a land of remote and wild places. Besides, Ethiopia is a land of wonder and enchantment, 
						a country with one of the richest histories on the African continent, home to cultured and friendly people who are descended from some of 
						the world's oldest civilizations. A unique and secluded country never been colonized by a European power, and as a result the people have 
						retained a strong cultural identity and are renowned for their warmth hospitality.	</p>

				<p class="double">Ethiopia (formerly known as Abyssinia) is located in the east of Africa, commonly known as the Horn of Africa. It covers an area of 1, 1 12,000kmq, 
					twice the area of France, and according to the recent census has an estimated population of 95 million inhabitants with 80 ethnic groups. It is bounded 
					on the northeast by Eritrea and Djibouti, on the east and southeast by Somalia, on the south by Kenya and on the west by Sudan. The Ethiopian landscape 
					is dominated by a volcanic plateau with an average altitude of 2000 meter above sea level, which decreases towards the country's borders on three sides.
					The Great Rift Valley which begins at Jordan, Red Sea and traverses long distance all the way the Danakil depression (which contains one of the lowest point 
					on the earth 120 meter below sea levels) continuing towards the south of Ethiopia, Kenya, Tanzania and finally Mozambique. <br><br>
					Ethiopia has a very strong 
					cultural identity, which has been preserved thanks to a long period of independence, lasting practically until present times. Ethiopia is truly a land
					of contrasts and extremes; a land of remote and wild places. Some of the highest and most stunning places on the African continent are found here,
					such as the jaggedly carved Simien Mountains, one of UNESCO's World Heritage Sites and one of the lowest place on earth the hot but fascinating 
					Danakil Depression, with its sulphur fumaroles and lunar-like landscape. Ethiopia is old; old beyond all imaginations Ethiopia known as cradle 
					of human kind, it is almost certain that human beings and their hominid ancestors evolved in the eastern zone of the Rift Valley: Lucy, our most 
					distant ancestor, who lived 3.2 million years ago, was found in the rift Valley region a place called Hadar. As Abyssinia, its culture and traditions 
					date back over 3,000 years.	</p>
				
				<p class="double">The historic route is one of the greatest treasures of Ethiopia. Nowhere else in the world can you see riches of man’s past such as those in the northern 
					part of Ethiopia, A history that stretched back to the time of prehistoric man; the 5th century B.C pagan temple of Yeha, to more than 3000 years old history
					of Axum, the 12th century rock hewn churches of Lalibela; the medieval castles of Gonder, the famous Blue Nile fall with the 13th century painting monastery 
					of Lake Tana at Bahirdar and the medieval walled city of Harar. Riches that encompass the history of Ethiopia ; From the 1st early beginnings to the modern 
					day, riches that arte set amongst some of the most stunning scenery in Ethiopia and where our people work today, just as their ancestors have done for 
					generations as scholars say “Lalibela represents the supreme wonder and mystery of Ethiopian civilization, Gonder it’s pride, Bahirdar is natural bounty 
					and Harar its exotic mosaic culture known special for its old town within the sturdy wall built between the 13th and 16th centuries. It is a city with a 
					rich and wonderful history; famous architecture; a friendly people who really knows how to roll out a red carpet and Axum stands as the fountain head of 
					all this, where civilization born and fertile.</p>	
				
				<p class="double">The Lower Omo valley; living cultural museum; an astonishing mix of small, contrasting ethnic groups uniquely known for their natural artistic impulses. 
					Meet and greet some of the very colorful local tribes who live in this area amazing things you'll be doing capture the memories of a lifetime in the Omo valley
					- Ethiopia’s largest nature sanctuary and rich in spectacular game and yet one of the least visited areas on earth. A voyage to the Omo Valley is a true 
					expedition to encounter some of the most remarkable tribal peoples with their vibrant local market with number of festivals and cultural ceremony conduct 
					throughout the country in different seasons.	</p>

				<p class="double">The stunning nature on the African continent are found here, such as the jaggedly carved Simien Mountains, one of UNESCO's World Heritage Sites and one 
					of the lowest place on earth the hot but fascinating Danakil Depression, with its sulphur fumaroles and lunar-like landscape, Lake Tana, source of the Blue Nile, 
					the national parks home to a wealth of bird and animal life .The high, rugged Simien Mountains in the north and the Bale Mountains in the south with their utmost 
					tranquility are also home to unique and endemic wild life, and are ideal for trekking, whilst some of Ethiopia's fast-flowing rivers are becoming famous for 
					white-water rafting and the miracle Ethiopian Rift Valley, which is part of the famous East African Rift Valley, comprises numerous hot springs, beautiful 
					lakes and a variety of wildlife.</p>
				
				<p class="double">In general Ethiopia is truly a land of discovery, brilliant and beautiful, secretive, mysterious and extraordinary. Ethiopia has been called the land of a 
				thousand smiles and beginnings of mankind, “LAND OF ORIGIN” </p>
					
				</div>
				
				


				<div class="column30">
				<h1 style="color:black;font-size:37px;" >Popular Destinations</h1>
				<hr>
		    		<UL  >	
						
						<li><a  style="text-decoration: none;font-size:20px;" href="#">Semien Mountains</a></li>
						<li><a  style="text-decoration: none;font-size:20px;" href="#">Fasiledes</a></li>
		    			<li><a  style="text-decoration: none;font-size:20px;"  href="#">Aksum Obelisk</a></li>
		    			<li><a  style="text-decoration: none;font-size:20px;"  href="#">Lalibela</a></li>
		    			<li><a  style="text-decoration: none;font-size:20px;"  href="#">Konso Cultural Landscape</a></li>
		    		</UL>
					
				 <img class="center" src="img/etmap.png" alt="ethiopian heritage map" style="width:100%;height:300px;" >
		    	</div>
		</div>
	</div>
</div>
		</section> 


<section id="section-3">
	<div>
		<div style="width:95%;padding-left:5%;">
					<div > 
					<hr>
					<h2 class="black-text">DESTINATIONS</h2>
					<hr>
	<p style="font-size:19px; padding-left:20px;">Ethiopia's excellent network of national parks, UNESCO World Heritage Sites and other tourist attractions can be 
	explored along several well-established routes.<br><br>
	A varied selection of exciting destinations awaits the visitor to Ethiopia. National parks include the scenic Simien and Bale Mountains, with their wealth of endemic
	 wildlife, while historical sites range from the atmospheric rock-hewn churches of Lalibela to the towering stelae of Aksum and castles in Gondar. Other highlights
 	are the awe-inspiring Erta Ale Volcano, the cultural mosaic of Konso and South Omo, and bird-rich lakes strung along the Rift Valley floor. <br>An array of five
 	well-established routes can be followed to explore Ethiopia's best known destinations, along with some more off-the-beaten-track gems.</p>
 	<br>
 
	 <img class="center" src="img/etmap.png" alt="ethiopian heritage map" >
	<br><br><br><br>
	<hr>
	<h2 class="black-text">WELL KNOWN DESTINATIONS</h2>
<hr>
<div style="" class="clearfix">
  <img class="img2" src="img/aksum.jpg" alt="Aksum Obelisk" width="250" height="250">
  <br><h2 class="black-text" >Aksum Obelisk</h2>
 <p style="font-size:19px; padding-right:15px;">Situated in the highlands of northern Ethiopia, Aksum symbolizes the wealth and importance of the civilization of the ancient Aksumite kingdom, 
 which lasted from the 1st to the 8th centuries AD. The kingdom was at the crossroads of the three continents: Africa, Arabia and the Greco-Roman  World, and was the most 
 powerful state...<a class="textdecor" href="#"><i>See more</i></a></p>
</div>
<hr>
<div style="" class="clearfix">
  <img class="img2" src="img/lalibela1.jpg" alt="Lalibela" width="250" height="250">
 <br><h2 class="black-text">Lalibela</h2>
 <p style="font-size:19px;">Lalibela is a town in Amhara Region, Ethiopia famous for its rock-cut monolithic churches. 
			The whole of Lalibela is a large antiquity of the medieval and post-medieval civilization of Ethiopia. Lalibela is one of Ethiopia's holiest cities, 
			second only to Axum, and a center of pilgrimage. Unlike Axum, the population of Lalibela is almost completely...<a class="textdecor" href="#"><i>See more</i></a></p>
</div>
<hr>
<div style="" class="clearfix">
  <img class="img2" src="img/semien.jpg" alt="Semien mountains" width="250" height="250">
 <br><h2 class="black-text">Semien Mountains</h2>
 <p style="font-size:19px;">The Semien Mountain is found in northern Ethiopia, 
					north east of Gondar in Amhara region, are part of the Ethiopian Highlands.
					They are a World Heritage Site and include the Simien Mountains National Park. The mountains consist 
					of plateaus separated by valleys and rising to pinnacles...<a class="textdecor" href="#"><i>See more</i></a></p>
</div>
<hr>
<div style="" class="clearfix">
  <img class="img2" src="img/fasil1.jpg" alt="The Royal Enclosure" width="250" height="250">
 <br><h2 class="black-text">The Royal Enclosure(Fasilides)</h2>
 <p style="font-size:19px;">The Royal Enclosure (or Fasil Ghebbi) is the remains of a fortress-city in Gondar, Ethiopia. 
It was founded in the 17th century by Emperor Fasilides (Fasil) and was the home of Ethiopia's emperors. Its unique architecture shows diverse influences including Nubian styles. 
The site was inscribed as a UNESCO World Heritage Site in 1979...<a class="textdecor" href="#"><i>See more</i></a></p>
</div>
<hr>
<div class="clearfix">
  <img class="img2" src="img/konso2.jpg" alt="Konso Cultural Landscape">
 <br><h2 class="black-text">Konso Cultural Landscape</h2>
 <p style="font-size:19px;">Konso Cultural Landscape is an arid property of stone walled terraces and fortified settlements in the Konso highlands of Ethiopia.
		It constitutes a spectacular example of a living cultural tradition stretching back 21 generations (more than 400 years) adapted 
	to its dry hostile environment. The landscape demonstrates the shared values...<a class="textdecor"  href="#"><i>See more</i></a></p>
</div>
</div>
</div>
</div>	
		</section>


<section style="background-color: lightblue;" id="section-4">		
			<div class="row" >
  <div class="columnfluka">
  </div>
				<div style="background-color: white;" class="columnpack">
  					<h2 style="color:black;"> 7 DAYS NORTHERN ETHIOPIA HISTORIC ROUTE By Flight</h1>
  					<hr>				
				<p class="double"; style="color:black;">Day 1 - ARRIVAL - ADDIS ABABA<br><br>
				Arrive Addis Ababa Bole International airport. Depending on your arrival you can do sightseeing of Addis Ababa. Visit the National Museum, one of the most 
				important sub-Saharan museums in all of Africa. 
				The museum is home to the fossilized humanoid Lucy, as well as a collection of artifacts, royal items and art. Visit the Ethnological Museum, which was the 
				former palace of Haile Selassie. Take time in St. George Cathedral, built in 1896 by Emperor Menelik and continue on to Holy Trinity Cathedral.
				Holy Trinity Cathedral is the largest Orthodox Church in Ethiopia and has survived through many historical periods. The Cathedral contains the thrones and 
				the tombs of the emperor, some of the royal family and a past president. Visit Merkato, the largest open air market in Africa. Overnight  HOTEL</p>

				<p class="double"; style="color:black;">Day 2- Fly to Axum and sightseeing<br><br>
				Early morning transfer to the airport for your flight to Axum, the holiest sanctuary, and oldest capital of Ethiopia. After settling into your hotel, depart on a
				city tour including a visit to the ancient stelae (obelisks) and the national museum - widely rated as Ethiopia's best. In the afternoon visit the ruins of the
				palace of the legendary Queen of Sheba and the tombs of ancient Axumite kings and queens. It's worth visiting some of the local shops in Axum for exquisite 
				locally made clothing and jewelry. Overnight  HOTEL</p>
				
				<p class="double"; style="color:black;">Day 3 – Fly to Lalibela and sightseeing<br><br>
				After breakfast you will be taken to the airport for your flight to Lalibela, famous for its rock-hewn churches dating back 800 years. This is the most important 
				stop on the historical route and from the air the 11 churches, carved into the rugged mountainside, present an awesome spectacle. Afternoon excursion to the most
				spectacular churches. Overnight  HOTEL</p>	
				
				<p class="double"; style="color:black;">Day 4 – Fly to Gondar and sightseeing.<br><br>
				Transfer to the airport for your flight to Gondar. In the afternoon a city tour of Gondar including a visit to the Royal Compound, where enchanting 17th century
				castles stand. Overnight  HOTEL  </p>

				<p class="double"; style="color:black;">Day 5 - Drive to Bahir Dar and visit Lake Tana<br><br>
				Visit Lake Tana, the source of the Blue Nile river. The afternoon is spent visiting isolated monasteries by boat. There is good birding in the lush forest 
				surrounding much of the lake. With luck, you may see hippos swimming in the marsh. Overnight HOTEL</p>
				
				<p class="double"; style="color:black;">Day 6 – Visit Blue Nile Falls and Fly back to Addis Ababa<br><br>
				An early morning excursion to the thundering Blue Nile Falls. Along the walk to the falls, birding is excellent. Continue to the airport for your flight to 
				Addis Ababa. Overnight HOTEL</p>
				
				<p class="double"; style="color:black;">Day 7- Departure<br>
				Transfer to Bole International Airport where your tour ends. </p>

<hr>
<br>
<h2 style="color:black;">14 DAYS 13 NIGHTS NORTHERN HISTORIC ROUTE BY SURFACE (Addis Ababa, Bahir Dar, Gorgora, Gondar, Axum, Adigrat, Mekelle, Lalibela, Kombolcha)</h2>
<hr>
<p class="double"; style="color:black;"> Day 1: Arrive to Addis Ababa, and transfer to the hotel. Depending on your arrival you can enjoy sightseeing in Addis Ababa. Visit the National Museum, one of the most important sub-Saharan museums in all of Africa. The museum is home to the fossilized humanoid Lucy, as well as a collection of artifacts, royal items and art. Visit the Ethnological Museum, which was the former palace of Haile Selassie. Take time in St. George Cathedral, built in 1896 by Emperor Menelik and continue on to Holy Trinity Cathedral. Holy Trinity Cathedral is the largest Orthodox Church in Ethiopia and has survived through many historical periods. The Cathedral contains the thrones and the tombs of the emperor, some of the royal family and a past president. Visit Merkato, the largest open air market in Africa.. Overnight  HOTEL</p>

<p class="double"; style="color:black;"> Day 2: Drive Addis to Bahir Dar, passing though the Nile Gorge via Debre Markos, arrive to Bahir Dar in the evening. Overnight  HOTEL</p>

<p class="double"; style="color:black;"> Day 3: Bahir Dar, morning visits the Blue Nile Falls and afternoon visit the city tour including the market. Overnight  HOTEL</p>

<p class="double"; style="color:black;"> Day 4: Bahir Dar /Gorgora / Gondar: The day is dedicated to a boat trip on Lake Tana (the biggest lake of Ethiopia) to visit the monastery churches. There is good birding in the lush forests surrounding the lake.  With luck you may see hippos in the marsh .After arriving to Gorgora drive to Gondar. Overnight  HOTEL</p>

<p class="double"; style="color:black;"> Day 5: Gondar, The day is dedicated to visiting Gondar. The afternoon includes a city tour and a visit to the Royal compound, to visit 17th century castles, Debre Birhan Selassie Church (known for the angels painted on the ceilings), and the Fasiladas baths, a ceremonial bath used during Timket (Ephiphany). . Overnight  HOTEL</p>

<p class="double"; style="color:black;"> Day 6: Drive Gondar / Axum, en route visit the Simien mountains.  Overnight  HOTEL</p>

<p class="double"; style="color:black;"> Day 7: Axum, Axum, the holiest sanctuary, and oldest capital of Ethiopia. Depart on a city tour including a visit to the ancient stelae (obelisks) and the national museum - widely rated as Ethiopia's best. In the afternoon visit the ruins of the palace of the legendary Queen of Sheba and the tombs of ancient Axumite kings and queens. Overnight  HOTEL</p>
<p class="double"; style="color:black;"> Day 8: Drive Axum to Adigrat via spectacular scenary through mountain range complete with winding roads and hairpin turns. Enroute visit the Yeha Temple and Debre Damo. Overnight  HOTEL</p>
<p class="double"; style="color:black;"> Day 9: Drive Adigrat to Mekelle; en route visit the Tigrai rock hewn churches. Overnight  HOTEL</p>

<p class="double"; style="color:black;"> Day 10: Drive Mekelle to Lalibela, Overnight  HOTEL</p>
<p class="double"; style="color:black;"> Day 11: Lalibela, the day is dedicated to visit Lalibela morning visit the first group of the magnificent rock-hewn churches of Lalibela , whch are carved with super architectural skill. UNESCO registers these churches as a World Heritage site. Among churches of this group, Bete Medahine Alem (House of the Redeemer) is largest with 5 aisles, 72 pillars, vaulted dome and molding decoration. Bete Mariam (House of Mary) is the most decorated among the rock hewn churches. visit the second groups of churches. Afternoon: excursion to Yemerhane Kirstos cave church out side of Lalibela through beautiful mountainous land scape of last region. Back to the hotel for lunch and after noon visit the second group of the rock-hewn churches; Bete Emanuel (house of Emanuel) is architecturally the finest. Bete Giorgis (the house of George) is the finest of all the churches in Lalibela for which reason art historians conclude that this church is carved at the end of the cluster, after the masons have developed their skill to carve the church in such extraordinary perfection. Overnight HOTEL</p>
<p class="double"; style="color:black;"> Day 12: Drive Lalibela to Kombolcha; en route visit the Lake Haik. Overnight  HOTEL</p>
<p class="double"; style="color:black;"> Day 13: Drive Kombolcha to Addis Ababa, Overnight </p>
<p class="double"; style="color:black;"> HOTEL Day 14: Addis Ababa, this day is dedicated to visit Addis</p><br>
<hr>

<h2 style="color:black;">8 DAYS TIGRAY ROCK-HEWN CHURCHES (Mekelle, Dugem, Wukro Cherqos, Hawzen, Gheralta)</h2>
<hr>
<p class="double"; style="color:black;"> Day 1: Arrival Addis Ababa</p>
Arrive Addis Ababa Bole International Airport and transfer to the hotel. Depending on your arrival you can enjoy sightseeing in Addis Ababa. Visit the National Museum, one of the most important sub-Saharan museums in all of Africa. The museum is home to the fossilized humanoid Lucy, as well as a collection of artifacts, royal items and art. Visit the Ethnological Museum, which was the former palace of Haile Selassie. Take time in St. George Cathedral, built in 1896 by Emperor Menelik and continue on to Holy Trinity Cathedral. Holy Trinity Cathedral is the largest Orthodox Church in Ethiopia and has survived through many historical periods. The Cathedral contains the thrones and the tombs of the emperor, some of the royal family and a past president. Visit Merkato, the largest open air market in Africa. Overnight  HOTEL</p>

<p class="double"; style="color:black;"> Day 2: Addis - Mekelle
Early in the morning transfer to Bole International Airport and fly to Mekelle. Mekelle Town is the capital city for Tigrian Region. The town is pleasant to walk around.  Explore the castle of Emperor Yohanis and visit Hawalte, the museum built for the commemoration of those who sacrificed their lives during the struggle against the Revolutionary government. Overnight  HOTEL</p>

<p class="double"; style="color:black;"> Day 3: Mekelle - Dugem
Drive to Degum-visit Wukro Cherqos and Abreha wa Atsbeha.  Today we begin to explore the wonderful Tigray rock hewn churches starting from Abreha wa Atsbeha, situated 15 kms west of Wukro, the finest church in Tigre, it lies about halfway between Dugem and Wukro.  Afternoon visit Dugem Selassie Church. Overnight camping at Dugem or Overnight HOTEL in Wukro</p>

<p class="double"; style="color:black;"> Day 4: Explore around Dugem
Trek to Abuna Abraham Debre Tsion and Yohannes Maequdi. Trek to Abuna Abraham a couple of hours walk from Dugem, the Abune Abraham Debre Tsion church which is elaborately decorated with 16th century murals. The church's ceremonial fan dates back to the 15th century and consists of 34 parchment panels, each painted with a figure of a saint. Lunch in Dugem, Afternoon trek to Yohannes Maequddi, which is best known for its ancient and well-preserved paintings. Overnight camping at Dugem or over night hotel in Wukro.</p>

<p class="double"; style="color:black;"> Day 5: Dugem - Hawzen
Drive and trek to Mariam Korkor, a rock-hewn church situated on one of the highest mountains of Gheralta just overlooking the village of Megab, 8 kms south of Hawzien. An hour's trek from the village brings you to the Mariam Korkor and the nearby smaller church of Daniel Korkor. A picnic lunch after a steep climb up. Time to enjoy the wonderful view across the Gherelta Plains. In the afternoon a gentle return to camp. Visit local village, a local grinding mill or maybe join in coffee ceremony. Overnight at Gheralta Lodge or Hotel in Hawzien </p>

<p class="double"; style="color:black;"> Day 6: Excursion around Gerallta lodge
Drive and Trek to Abune Yemata Abune Yemata is 4 kms drive from Megab and a further 30 minutes' walk will bring you to the foot of the perpendicular rock mountains of Guh. The scenery is breathtaking and the mountains resemble pillars reaching to the sky. The challenging and the only way to the church is footholds and handgrips in the rock face. Just before the entrance to the church there is a narrow ledge carved in the cliff from which one can view a sheer drop of approximately 250m to 300m. Picnic lunch at top, it worth and relaxing to ascend even if you can make to the church. afternoon at leisure or visit the village and overnight or proceed to Hawzien. Overnight Gheralta Lodge or Hotel in Hawzien</p>

<p class="double"; style="color:black;"> Day 7: Drive back to Mekelle via Sinkata after breakfast  – About 30 minutes walk from Sinkata lies Adi Chewa and visit Arbuta Insesa. It is a large church with several unusual features, most notably the deepest domed ceiling in any Tigrian church, and strange red and yellow stencil-like figures on thick columns. We also explore Medhane Alem Adi Kasho, regarded as one of the oldest and most impressive churches in Tigre for its size and impressive architecture. The interior has a cathedral-like atmosphere. Moreover, you can visit Petros and Paulos and Mikael Melehayezenghi. Overnight  HOTEL</p>

<p class="double"; style="color:black;"> Day 8: Fly back to Addis  Transfer to airport for final departure.</p>
<hr>
</div>
			<div class="column30">
				<div style="background-color: lightblue; border-radius: 15px;">
					<h2 style="text-align:center;color:black;">SAFETY TIPS</h2>
					<hr style="color:gray;">
					<ol>	
						<li>Ethiopia is a safe and reasonably healthy country provided you take a few common sense precautions.</li><br>
							<li>Ensure your inoculations for typhoid, tetanus, polio and hepatitis A are up to date...</li><br>
								<li>Anti-malarial prophylactics should be taken if you’ll be visiting low-lying moist regions such as the southern Rift Valley and South Omo. </li><br>
									<li>Avoid drinking or brushing your teeth with tap water. Bottled water is safe and widely available. </li><br>
										<li>Its a good idea to carry a few packs of antiseptic wet wipes to wash your hands after toilet where running water may not be available.  </li><br>
											<li>Ethiopia is a safe and politically stable country, though there may be some risk attached to travel in remote border areas </li>
				
		    		</ol>
					<br> <br> <br>	<br>	<br>		


					<h2 class="black-text">MISSION</h2>
					<hr>
<p> Our Mission Is to always be driven and passionate about servicing the travel needs of companies and individuals in Ethiopia, through the commitment, 
integrity and dedication of our competent business partners.<br> 
To render efficient, value for money and quality service and profoundly contribute to the sustainable development of Tourism.

</p>
<h2 class="black-text">VISION</h2>
<hr>
<p>To be the most sought after travel agency, providing services to all sectors of the business community and individuals. 
<br>To utilize the expertise of highly qualified to address the holistic travelling requirements for corporate and leisure travelers.
  	</p>			</div>
		    </div>
		
	</div>	
</section> 	

<section id="section-5">
					<div >
					<h1 class="black-text center_text">Meet Our team</h1>
					<h2 class="black-text center_text">Faculty of Informatics, Department of Information system, 3rd Year Students.</h2>
					</div>
<div class="row" >
<div class="column19 ">
<div class="card" style="text-align:center;box-shadow: 0 4px 8px 0 #000;">
  <img src="img/team/ytbarek.jpg" alt="Ytbarek" class="scaleUp" style="width:100%; height:350px;">
  	<div class="cardcontainer">
    <p style="text-align: left;" class="black-text"><b>Name</b>: Ytbarek Gebre</p>
	<p style="text-align: left;" class="black-text"><b>ID</b>: IS/0120/10</p>
	<p style="text-align: left;" class="black-text"><b>Position</b>: Group Leader</p>
  	</div>
  </div>
  </div>

  <div class="column19">
<div class="card" style="text-align:center;box-shadow: 0 4px 8px 0 #000;">
  <img src="img/team/abuki.jpg" alt="Abdulkerim" class="scaleUp"  style="width:100%; height:350px;">
  <div class="cardcontainer">
    <p style="text-align: left;" class="black-text"><b>Name</b>: Abdulkerim Kedir</p>
	<p style="text-align: left;" class="black-text"><b>ID</b>: IS/0005/10</p>
	<p style="text-align: left;" class="black-text"><b>Position</b>:Group Member</p>
  	</div>
  </div>
 </div> 

  <div class="column19">
<div class="card" style="text-align:center;box-shadow: 0 4px 8px 0 #000;">
  <img src="img/team/selome.jpg" alt="Selome" class="scaleUp"  style="width:100%; height:350px;">
  	<div class="cardcontainer">
    <p style="text-align: left;" class="black-text"><b>Name</b>: Selome Gashaw</p>
	<p style="text-align: left;" class="black-text"><b>ID</b>: IS/0098/10</p>
	<p style="text-align: left;" class="black-text"><b>Position</b>:Group Member</p>
  	</div>
  </div>
</div>

  <div class="column19">
<div class="card" style="text-align:center;box-shadow: 0 4px 8px 0 #000;">
  <img src="img/team/shambhu.jpg" alt="Shampoo" class="scaleUp"  style="width:100%; height:350px;">
  		<div class="cardcontainer">
    <p style="text-align: left;" class="black-text"><b>Name</b>: Shambhu Shibru</p>
	<p style="text-align: left;" class="black-text"><b>ID</b>: IS/0101/10</p>
	<p style="text-align: left;" class="black-text"><b>Position</b>: Group Member</p>
  	</div>
  </div>
</div>

  <div class="column19">
<div class="card" style="text-align:center;box-shadow: 0 4px 8px 0 #000;">
  <img src="img/team/hosana.jpg" alt="Hosana" class="scaleUp" style="width:100%; height:350px;">
  		<div class="cardcontainer">
    <p style="text-align: left;" class="black-text"><b>Name</b>: Hosana Tashoma</p>
	<p style="text-align: left;" class="black-text"><b>ID</b>: IS/0060/10</p>
	<p style="text-align: left;" class="black-text"><b>Position</b>:Group Member</p>
  	</div>
  </div>
</div>

</div>
</section>

<section  style="border-radius: 15px;" >	
		<div>
				
				<h2 class="center_text black-text" style="border-left: 150px; border-radius: 15px; border: 2px solid black;">Things To Do</h2>
			</div>
<div >
   	 	<p style=" padding: 25px 50px 25px 80px; font-size: 20px;" class="pop-para black-text">From hiking and wildlife viewing to hot-air balloon trips and exploring museums, Ethiopia offers limitless possibilities to outdoor enthusiasts and curious travellers.
		<br><br>
		A wide range of outdoor and adventure activities includes scenic overland expeditions, hiking in lush forest and Afro-alpine moorlands, climbing active volcanoes, and ballooning around Addis Ababa.
		<br><br>
		From the coffee forests of the western highlands to the jewel-like lakes that dot the Rift Valley, Ethiopia's wealth of down-to-earth nature experiences includes the opportunity to track endemic wildlife on foot, and some of the finest birding anywhere in Africa.
		<br><br>
		Whether you are picking through venerable museums and palaeontological sites, or enjoying shopping fir handicrafts and exploring the unique and spicy cuisine, Ethiopia offers a rare variety of rewarding cultural experiences.</p>
</div>
	</section>


<footer style="background-color:#001a33">
		<div class="copy">
		<p class="white-text center_text"> <?php include 'footer.php';?></p>
	    	</div>
</footer>
	
	<script src="js/script.js"></script>

</body>
</html>