<html>
<head>
  <title>MOMO</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="singlerecipe.css">
</head>
<body>
	<header>
<a href="home.html">
        <img src="img/ab.JPG" alt="tasteversity" style="width: 53%;"/>
      </a>
        
        <div class="nav-bar">
            <ul>
            <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="recipee.php">Recipes</a></li>
                <li><a href="home.php#Categories">Categories</a></li>
                <li><a href="loginnn.php">Login</a></li>
            </ul>
        </div>
    </header>
   
    <main class="page">
      <div class="recipe-page">
        <section class="recipe-hero">
          <img
            src="img/momo.jpg"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2><strong>MOMO</strong></h2>
            <br>
            <p>
            Momo is cherished in Nepalese culture, are steamed dumplings consisting of a thin, unleavened dough encasing a delectable filling. The filling is typically a combination of ground meat, onions, garlic, ginger, and a blend of aromatic spices like cumin and coriander. These flavorful parcels are carefully folded into various shapes, from simple crescents to intricate pleats, then steamed until cooked to perfection. Served hot and often accompanied by a zesty dipping sauce, momos offer a delightful fusion of taste and texture, making them a beloved culinary tradition in Nepal.
            </p>
            <!-- <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>prep time</h5>
                <p>30 min.</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>cook time</h5>
                <p>15 min.</p>
              </article>
              <article>
                <i class="fas fa-user-friends"></i>
                <h5>serving</h5>
                <p>6 servings</p>
              </article>
            </div>
            <p class="recipe-tags">
              Tags : <a href="tag-template.html">beef</a>
              <a href="tag-template.html">breakfast</a>
              <a href="tag-template.html">pancakes</a>
              <a href="tag-template.html">food</a>
            </p> -->
          </article>
        </section>
        <!-- content -->
        <section class="recipe-content">
          <article>
            <h4><strong>INSTRUCTIONS</strong></h4><br>
            <ul>
           <li> Prepare Filling: Mix ground meat (chicken, pork, or beef) with finely chopped onions, garlic, ginger, green chilies, soy sauce, ground cumin, ground coriander, salt, and pepper. Optionally, add chopped cilantro for flavor.<br><br></li>
  
           <li> Make Dough: Mix all-purpose flour, salt, and water to form a firm dough. Rest the dough for 30 minutes, then divide into small balls.<br><br></li>

           <li>Roll Dough: Roll each dough ball into a thin circle (about 3-4 inches in diameter) on a floured surface.<br><br></li>

           <li>Fill and Seal: Place a spoonful of the meat mixture in the center of each dough circle. Fold the edges over the filling and pleat to seal the momos into a half-moon shape.<br><br></li>

           <li>Steam Momos: Arrange the momos in a steamer basket lined with parchment paper or cabbage leaves. Steam for about 10-12 minutes until cooked through.<br><br></li>

           <li> Serve: Serve hot momos with a dipping sauce made of soy sauce, vinegar, and chili sauce.<br><br></li>
</ul>
        
          </article>
          <article class="second-column">
            <div>
              <h4><STRONG>INGREDIENTS</STRONG></h4></BR>
              <p class="single-ingredient">2 cups all-purpose flour</p>
              <p class="single-ingredient">1 lb ground meat (chicken, pork, or beef)</p>
              <p class="single-ingredient">1 medium onion</p>
              <p class="single-ingredient">2-3 cloves garlic</p>
              <p class="single-ingredient">1-inch ginger</p>
              <p class="single-ingredient">2-3 green chilies</p>
              <p class="single-ingredient">2 tbsp cooking oil</p>
              <p class="single-ingredient">2 tbsp soy sauce</p>
              <p class="single-ingredient">1 tsp ground cumin</p>
              <p class="single-ingredient">1 tsp ground coriander</p>
              <p class="single-ingredient">Salt and pepper to taste</p>
              <p class="single-ingredient">Water (for dough)</p>
            </div>
            <div>
              <h4>TOOLS</h4><br>
              <p class="single-tool">Mixing bowl</p>
              <p class="single-tool">Knife</p>
              <p class="single-tool">Chopping board</p>
              <p class="single-tool">Steamer Pot</p>
              <p class="single-tool">Plates and serving dishes</p>
            </div>
          </article>
        </section>
      </div>
    </main>
<!-- <script type="text/javascript">
	// Initialize Variables
	var closePopup = document.getElementById("popupclose");
	var overlay = document.getElementById("overlay");
	var popup = document.getElementById("popup");
	var button = document.getElementById("button");
	// Close Popup Event
	closePopup.onclick = function() {
	  overlay.style.display = 'none';
	  popup.style.display = 'none';
	};
	// Show Overlay and Popup
	button.onclick = function() {
	  overlay.style.display = 'block';
	  popup.style.display = 'block';
	}
</script> -->
</body>
</html>
<?php
include "footer.php";

?>
  