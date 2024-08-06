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
            src="img/pizza.jpg"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2><strong>PIZZA</strong></h2><br>
            <p>
            Pizza, originating from Italy, has become a global culinary sensation. Its essence lies in a thin crust topped with tangy tomato sauce, melted mozzarella, and an assortment of toppings like pepperoni, mushrooms, and olives. Baked to perfection in a hot oven, pizzas emerge with crispy crusts and bubbling cheese, offering a harmonious blend of flavors and textures. From classic Margherita to inventive combinations, pizza caters to various tastes and preferences worldwide. Its universal appeal makes it a go-to choice for gatherings, casual meals, and indulgent comfort food cravings across cultures.  
            </p>
          </article>
        </section>
        <!-- content -->
        <section class="recipe-content">
          <article>
            <h4><strong>INSTRUCTIONS</strong></h4></br>
            <ul>
           <li> Preheat Oven: Begin by preheating your oven to a high temperature, typically around 475-500°F (245-260°C). Preheating ensures that the oven is hot enough to cook the pizza quickly and evenly. 
            <br/><br/></li>
            <li> Prepare Dough: Roll out your pizza dough on a floured surface to your desired thickness. You can use homemade dough or store-bought dough.
            <br/><br/></li>
            <li> Add Sauce and Toppings: Spread pizza sauce evenly over the dough, leaving a small border around the edges. Then, add your preferred toppings, such as cheese, vegetables, meats, and herbs.
            <br/><br/></li>
            <li> Bake the Pizza: Carefully transfer the topped pizza onto a preheated pizza stone or baking sheet. Place it in the oven and bake for about 10-15 minutes, or until the crust is golden brown and the cheese is melted and bubbly.
            <br/><br/></li>
            <li>  Check for Doneness: Keep an eye on the pizza as it bakes to ensure it doesn't burn. The cooking time may vary depending on your oven and the thickness of your dough.
            <br/><br/></li>
            <li> Remove and Serve: Once the pizza is cooked to your liking, carefully remove it from the oven. Allow it to cool for a few minutes before slicing and serving.
</ul>  </li>
          </article>
          <article class="second-column">
            <div>
              <h4><strong>INGREDIENTS</strong></h4><br>
              <p class="single-ingredient">Pizza Dough (homemade or store-bought)</p>
              <p class="single-ingredient">Pizza Sauce (tomato-based or marinara sauce)</p>
              <p class="single-ingredient">Mozzarella Cheese (shredded or fresh)</p>
              <p class="single-ingredient">Toppings (sausage, mushroom, pepperoni, onions, ham etc)</p>
              <p class="single-ingredient">Herbs and seasonings (basil, oregano, thyme, etc)</p>
              <p class="single-ingredient">Cornmeal or Flour (for dusting)</p>
              <p class="single-ingredient">1-2 tsp Olive Oil</p>
              <p class="single-ingredient">Water (for dough)</p>
            </div>
            <div>
              <h4>TOOLS</h4>
              <p class="single-tool">Mixing Bowl</p>
              <p class="single-tool">Rolling Pin</p>
              <p class="single-tool">Pizza Peel</p>
              <p class="single-tool">Baking Sheet</p>
              <p class="single-tool">Measuring Cups and Spoons</p>
              <p class="single-tool">Oven Mittens</p>
              <p class="single-tool">Plates and serving dishes</p>
              <p class="single-tool">Cutting Board</p>
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