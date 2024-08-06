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
            src="img/pancake.jpg"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2>PANCAKES</h2><br>
            <p>
            Pancakes, a beloved breakfast staple worldwide, are simple yet versatile treats. Typically made from a batter of flour, milk, eggs, and a leavening agent like baking powder, they're cooked on a griddle or skillet until golden brown. Pancakes offer endless possibilities for customization, with additions like chocolate chips, blueberries, or bananas folded into the batter. Served warm with butter and maple syrup, pancakes satisfy sweet cravings and provide a comforting start to the day. Their fluffy texture and delightful flavor make them a cherished indulgence enjoyed by people of all ages.
            </p>
          </article>
        </section>
        <!-- content -->
        <section class="recipe-content">
          <article>
            <h4><strong>INSTRUCTIONS</strong></h4><br>
            <ul>
            <li>Gather Ingredients: You'll need flour, milk, eggs, sugar, baking powder, salt, and butter or oil.<br><br></li>

            <li>Mix Dry Ingredients: In a bowl, whisk together 1 1/2 cups of all-purpose flour, 3 1/2 teaspoons of baking powder, 1 teaspoon of salt, and 1 tablespoon of sugar.<br><br></li>

            <li>Mix Wet Ingredients: In another bowl, beat 1 egg, then stir in 1 1/4 cups of milk and 3 tablespoons of melted butter.<br><br></li>

            <li>Combine Wet and Dry Ingredients: Pour the wet ingredients into the dry ingredients. Stir until just combined; do not overmix. The batter should be slightly lumpy.<br><br></li>

            <li>Heat Pan or Griddle: Heat a skillet or griddle over medium heat and lightly grease it with butter or oil.<br><br></li>

            <li>Cook Pancakes: Pour about 1/4 cup of batter onto the skillet for each pancake. Cook until bubbles form on the surface and the edges look set, then flip and cook until golden brown on the other side.<br><br></li>

            <li> Serve: Transfer the cooked pancakes to a plate and serve warm with butter, maple syrup, fruit, or any other desired toppings.<br><br></li>
                        
        
          </article>
          <article class="second-column">
            <div>
              <h4><strong>INGREDIENTS</strong></h4><br>
              <p class="single-ingredient">Egg</p>
              <p class="single-ingredient">1-1/2 cups All-Purpose Flour</p>
              <p class="single-ingredient">1-1/4 cups Milk</p>
              <p class="single-ingredient">Butter or Oil (for greasing the pan)</p>
              <p class="single-ingredient">3 tbsp Unsalted butter</p>
              <p class="single-ingredient">2 tsp baking powder</p>
              <p class="single-ingredient">1 tsp salt</p>
              <p class="single-ingredient">Toppings(nuts, fruits, honey, syrup etc)</p>
</div>
<div>
              <h4>TOOLS</h4><br>
              <p class="single-tool">Mixing bowl</p>
              <p class="single-tool">Whisk</p>
              <p class="single-tool">Spatula</p>
              <p class="single-tool">Measuring cups and spoons</p>
              <p class="single-tool">Non stick pan</p>
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