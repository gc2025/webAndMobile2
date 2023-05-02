<?php
    $title = "Local Resturants";
    $path = "../";

    include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");

?>
   <h1 class="lrh1">Local Resturants</h1>

   <p class = "lRp">
        Here in Williamsport, there are many local restaurants but there are some that you need to come and try, or people come and these are the first places that they go to, to eat:
   </p>

    <div>
        <h1>The Brickyard</h1>
        <h2>Rating: 4.1/5</h2>
        <p class = "lRp">
            The Brickyard is a local bar that specializes in American bar and pub food, especially burgers, and wings. This restaurant is also connected to another restaurant that is a little bit more "fancier" and has Italian dishes
            and has wood oven pizza for sale.
            <br>  
            Here are a couple of reviews of the resturant:
            <br>
            <br>
            5/5- "Service good; nice atmosphere. It was good to come there again. Black bean burger very good. Burger with gorgonzola delicious. Chicken enchilada soup delicious. French onion soup not the best."- Sharon H.
            <br>
            <br>
            4/5- "We were on an adventure traveling to the Southern Tier of New York to visit with a breeder of Golden Retriever puppies. On the way home, we stopped in Williamsport, Pa for a late lunch/early dinner"- IpMaggi713
            <br>
            <br>
            Here are some pictures of some of their dishes that they have to offer:



            <div class = brickSlide>
                <div class="BrickPic fade">
                    <img src="assets/pictures/brickyard-club.png" alt="CLub Sandwhich" class="brickY1">    

                </div>

                <div class="BrickPic fade">
                    <img src="assets/pictures/burger.png" alt="Burger" class="brickY2">

                </div>

                <div class="BrickPic fade">
                    <img src="assets/pictures/nachos.png" alt="nachos" class="brickY3"> 

                </div>
                
            </div> 

            <button class="prev" onclick="plusDivs(-1)">❮</button>
            <button class="next" onclick="plusDivs(1)">❯</button>

        </p>
        
    </div>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("BrickPic");
            if (n > x.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
        }

    </script>

    <br>
    <br>
    <div>
        <h1>The Bull Frog Brewery</h1>
        <h2>Rating: 4/5</h2>
        <p class = "lRp">
            The Bull Frog Brewery is also a local bar that specializes in American pub and bar food but also specialize in their own IPA. in the restaurant while you eat you can see the processes that it takes in order for them to make their own IPAs, they also sell these drinks locally
            in our Wegman’s area.

            <br>  
            Here are a couple of reviews of the resturant:
            <br>
            <br>
            4/5-"the place is good in the heart of Williamsport business district, very cheap, the food is good specially the soup."- Jason S.
            <br>
            <br>
            5/5-"We went to the Bullfrog Brewery for dinner while in town overnight and really liked it. The food was very good, the beer was even better. No problems at all with the service, the server was attentive and helpful. Good variety of items on the menu. This is a place we would go back to if in the area."- Bob S.
            <br>
            <br>
            Here are some pictures of some of their dishes that they have to offer:

        <div claass="bullF">
            <img src="assets/pictures/bullEgg.png" alt="Tater Tots W/ Egg" class="bullF">
            <img src="assets/pictures/bullNoodle.png" alt="Noodle Dish" class="bullF">
            <img src="assets/pictures/bullWrap.png" alt="Club Wrap" class="bullF">

        </div>
        </p>

        <button class="prev" onclick="plusDivsBF(-1)">❮</button>
        <button class="next" onclick="plusDivsBF(1)">❯</button>

    </div>

    <script>
        var slideIndex = 1;
        showDivsBF(slideIndex);

        function plusDivsBF(n) {
            showDivsBF(slideIndex += n);
        }

        function currentDivBF(n) {
            showDivsBF(slideIndex = n);
        }

        function showDivsBF(n) {
            var i;
            var x = document.getElementsByClassName("bullF");
            if (n > x.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
        }

    </script>

    <div>
        <h1>Boom City Brewery</h1>
        <h2>Rating: 4/5</h2>
        <p class = "lRp">
            The Boom City Brewery and Bar specialize in American Pub and Grill as well as wood oven pizza. the reason they are very different from Bullfrog or anyone else is that they started their business off brewing out of their own house, and then decided to invest in a restaurant
            to start selling their own IPAs in their own restaurant.

            <br>  
            Here are a couple of reviews of the resturant:
            <br>
            <br>
            4/5- "Traveling through town and found Boom City for Sunday late dinner. Very happy with food and beer. I had gnocchi. Oh so good. My wife had rigatoni, just as good. Meatballs large. Tender and flavorful. I had log jam. Not as hoppy as I hoped. Loved the benches at the booths. Large menu, options for everyone. Excellent service."- 546MP
            <br>
            <br>
            5/5- "The menu is outstanding. This brewery had the biggest menu I ever seen at a brewery. The food was excellent and great beers as well. Definitely will return."- Brenda S.
            <br>
            <br>
            Here are some pictures of some of their dishes that they have to offer:

            <div class="boom">
                <img src="assets/pictures/boomCItyP.png" alt="Boom City Pretzel" class="boomP">
                <img src="assets/pictures/boomCityPizza.png" alt="Boom City Pretzel" class="boomP">
                <img src="assets/pictures/boomCSteak.png" alt="boom CIty Steak" class="boomP">

            </div>
            <button class="prev" onclick="plusDivsBC(-1)">❮</button>
            <button class="next" onclick="plusDivsBC(1)">❯</button>
        </p>
    </div>
    

    <script>
        var slideIndex = 1;
        showDivsBC(slideIndex);

        function plusDivsBC(n) {
            showDivsBC(slideIndex += n);
        }

        function currentDivBC(n) {
            showDivsBC(slideIndex = n);
        }

        function showDivsBC(n) {
            var i;
            var x = document.getElementsByClassName("boomP");
            if (n > x.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
        }

    </script>
<?php
    include($path . "assets/inc/footer.php");
?>