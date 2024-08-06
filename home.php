<?php
    include "dabse.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasteversity</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/logo1.png">
    <style>
        /* CSS styles for the categories section */
        #Categories {
            text-align: center;
            margin-top: 20px;
        }
        .box {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .ca-card {
            flex: 0 0 30%; /* Set the width of each category card */
            margin: 10px;
        }
        .ca-card img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <header>
        <a href="home.php">
            <img src="img/ab.JPG" alt="tasteversity" style="width: 53%;">
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
    <div class="hero">
        <div class="hero-container">
            <div class="hero-text">
                <h1>TRANSFORMING</h1>
                <h4>ingredients into delights</h4>
            </div>
        </div>
    </div>
    <!-- Featured recipes section -->
    <div class="recipe">
        <h2>FEATURED RECIPES</h2>
        <div class="box">
            
<div class="card">
              <img src="img/p10.jpg" alt="image222432">
              <div class="content">
                  <h3>MOMO</h3>
                  <P>Asian dumpling with flavorful fillings,popular across South Asia for its delicious taste.</P>
                  <button onclick="viewmomo()">View Recipe</button>
              </div>
          </div>
          <div class="card">
              <img src="img/p12.jpg" alt="corndog">
              <div class="content">
                  <h3>CORNDOG</h3>
                  <P>Snack made of a hot dog coated in a cornmeal batter and deep-fried until golden brown.</P>
                  <button onclick="viewcorn()">View Recipe</button>
              </div>
          </div>
          <div class="card">
              <img src="img/p3.jpg" alt="">
              <div class="content">
                  <h3>PASTA</h3>
                  <P>Italian dish made from wheat and water, often served with sauces or toppings.</P>
                  <button onclick="viewpasta()">View Recipe</button>
              </div>
          </div>
          <div class="card">
              <img src="img/p99.jpg" alt="">
              <div class="content">
                  <h3>TACO</h3>
                  <P>Mexican dish consisting of a folded tortilla filled with meat, beans, cheese, and salsa.</P>
                  <button onclick="viewtaco()">View Recipe</button>
              </div>
          </div>
          <div class="card">
              <img src="img/p5.jpg" alt="">
              <div class="content">
                  <h3>PIZZA</h3>
                  <P>Italian dish made of round bread base topped with tomato sauce, various toppings.</P>
                  <button onclick="viewpizza()">View Recipe</button>
              </div>
          </div>
          <div class="card">
              <img src="img/p13.jpg" alt="">
              <div class="content">
                  <h3>KEEMA NOODLES</h3>
                  <P>Fusion dish blending spiced minced meat with Asian-style noodles.</P>
                  <button onclick="viewkeema()">View Recipe</button>
              </div>
          </div>
          <div class="card">
              <img src="img/p11.jpg" alt="">
              <div class="content">
                  <h3>BIRYANI</h3>
                  <P>Flavorful South Asian rice dish with rice, meat (or vegetables), and spices.</P>
                  <button onclick="viewbiryani()">View Recipe</button>
              </div>
          </div>
          <div class="card">
              <img src="img/p1.jpeg" alt="">
              <div class="content">
                  <h3>PANCAKES</h3>
                  <P> Flat, round cakes made from a batter of flour, milk, eggs, served with toppings.</P>
                  <button onclick="viewpancake()">View Recipe</button>
              </div>
          </div>
      </div>
  </div>
  <script>
    function viewmomo()
    {
        window.open('momo.php','_SELF');
    }
  </script>
  <script>
    function viewpancake()
    {
        window.open('pancake.php','_SELF');
    }
  </script>
  <script>
    function viewpizza()
    {
        window.open('pizza.php','_SELF');
    }
  </script>

        </div>
    </div>
    <!-- Categories section -->
    <div id="Categories">
        <h2><center>CATEGORIES</center></h2>
        <div class="box">
            <div class="ca-card">
                <img src="image/breakfast.jpg" alt="">
                <div class="content">
                    <button>BREAKFAST</button>
                </div>
            </div>
            <div class="ca-card">
                <img src="img/c7.jpg" alt="">
                <div class="content">
                    <button>LUNCH</button>
                </div>
            </div>
            <div class="ca-card">
                <img src="img/c5.jpg" alt="">
                <div class="content">
                    <button>DINNER</button>
                </div>
            </div>
            <div class="ca-card">
                <img src="img/c2.jpg" alt="dessert">
                <div class="content">
                    <button>APPETIZER</button>
                </div>
            </div>
            <div class="ca-card">
                <img src="img/cakes.jpg" alt="">
                <div class="content">
                    <button>DESSERT</button>
                </div>
            </div>
            <div class="ca-card">
                <img src="img/c8.jpg" alt="">
                <div class="content">
                    <button>FASTFOOD</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer section -->
    <?php include "footer.php"; ?>
</body>
</html>
