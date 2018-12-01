<?php include 'header.php'; ?>  
        
       
		<main>
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 9</div>
                    <img src="images/beach.JPG" alt="slide 1" style="width:75%">
                    <div class="text">Salmon River Adventures</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 9</div>
                    <img src="images/camping3.JPG" alt="slide 2" style="width:75%">
                    <div class="text">Salmon River Adventures</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 9</div>
                    <img src="images/group.JPG" alt="slide 3" style="width:75%">
                    <div class="text">Salmon River Adventures</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 9</div>
                    <img src="images/kayaking.JPG" alt="slide 4" style="width:75%">
                    <div class="text">Salmon River Adventurest</div>
                </div>
    
                <div class="mySlides fade">
                    <div class="numbertext">5 / 9</div>
                    <img src="images/rafting2.JPG" alt="slide 5" style="width:75%">
                    <div class="text">Salmon River Adventures</div>
                </div>
    
                <div class="mySlides fade">
                    <div class="numbertext">6 / 3</div>
                    <img src="images/sunset%20kayaks.JPG" alt="slide 6" style="width:75%">
                    <div class="text">Salmon River Adventures</div>
                </div>
    
                <div class="mySlides fade">
                    <div class="numbertext">7 / 9</div>
                    <img src="images/rafting.JPG" alt="slide 7" style="width:75%">
                    <div class="text">Salmon River Adventures</div>
                </div>
    
                <div class="mySlides fade">
                    <div class="numbertext">8 / 9</div>
                    <img src="images/rafting4.JPG" alt="slide 8" style="width:75%">
                    <div class="text">Salmon River Adventures</div>
                </div>
    
                <div class="mySlides fade">
                    <div class="numbertext">9 / 9</div>
                    <img src="images/sunset.JPG" alt="slide 9" style="width:75%">
                    <div class="text">Salmon River Adventures</div>
                </div>

                <div style="text-align:center">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span>
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span>
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span>
                </div>

            </div>
            <br>

            <script>
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    slideIndex++;
                    if (slideIndex> slides.length) {slideIndex = 1}    
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";
                    setTimeout(showSlides, 3000); // Change image every 3 seconds
                }
            </script>
                                    
			<h1 class="title">About Idaho Salmon's River</h1>
             		
			<div class='mainp'>
            <p>
				A trip on the Salmon is defined by exhilarating, giant rollercoaster rapids and wave trains punctuated by deep green pools and roiling pillows, massive white sand beaches, long, warm days, cool nights and perfect temperatures for swimming and goofing off in the water. The Salmon offers a unique variety of options for white water runners of all interest and comfort levels from those seeking white knuckle, high adventure and excitement to those just looking to get their feet wet for the first time in a mellow, fun environment. 
            </p>
                
            <p>
                The Salmon serves as the perfect opportunity to try rowing a raft, paddling an inflatable kayak or stand up paddle boarding for the first time.

                Along the way, creature comforts abound with natural hot springs for soaking, deep pools for swimming and splashing as well as perhaps the best river beach camping on any river anywhere. 
			</p><br><br>

            <video class="video" controls>
                
                <source src="images/salmon.mp4" type="video/mp4" >
                
            </video>
           
            <h2 class="title">River classification</h2>
            
            <p>
                Rivers are rated according to the International Scale of River Difficulty. Note also that a river&#8217;s level of challenge changes with fluctuations in water levels; a river rated Class IV at medium water levels might resemble a Class III river at lower water levels, while at higher levels, it might look more like a Class IV+. The rating system used in the Grand Canyon, which rates rapids 1 to 10, pre-dates the modern Class I-VI system of rating rapids. A &#8220;10&#8221; in the Grand Canyon is comparable to a Class V rapid elsewhere.
            </p>
            
            <p>
                ***Note that multi-day expeditions can have a wide variety of rapids on a single trip, from class I to class V, so check with your guide to get details***
            </p>
            
            <p>
                First-time and veteran rafters alike thrive on class II, III and some class IV rivers and rapids. Class V river trips&#8211;especially for paddlers&#8211;usually require two or more previous trips and previous Class IV experience. When booking your rafting trip with a us, make sure you let our staff know your comfort and experience level so they can recommend the right trip for you.
            </p>
            </div>   
            
            <div class="class">
                <a href="http://www.raftingamerica.com/whitewater-classifications/">
                <img src="images/classes.jpg" alt="White Water Rafting Classification" ></a>
            </div><br><br>
            
        </main>

           
    <?php include 'footer.php'; ?>
		