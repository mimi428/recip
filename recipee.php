
<?php
    include "dabse.php";
    include "conn/conn.php";
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasteversity</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="logo1.png">
    <style>
    .recipe {
    border: 1px solid #ccc;
    padding: 20px;
    margin: 20px auto;
    max-width: 800px;
}

.recipe h2 {
    color: #333;
    margin-bottom: 10px;
}

.recipe-photo img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
}

.recipe p {
    margin-bottom: 10px;
}

.recipe p strong {
    font-weight: bold;
}



    
</style>




</head>
<body>
    <header>
      <a href="home.php">
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
    <?php

$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'food_recipe_db';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL query
    $stmt = $conn->prepare("SELECT * FROM tbl_recipe");
    $stmt->execute();

    // Fetch all results as associative array
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output the results
    foreach ($results as $row) {
        echo "<div class='recipe'>";
        echo "<h2>Recipe Name: " . $row['recipe_name'] . "</h2>";
        if (!empty($row['recipe_image'])) {
            $photoPath = 'uploads/' . $row['recipe_image']; // Assuming photos are stored in the 'uploads' folder
            echo "<div class='recipe-photo'>";
            echo "<img src='" . $photoPath . "' alt='Recipe Photo'>";
            echo "</div>"; // Close recipe-photo div
        } else {
            echo "<p>No photo available</p>";
        }
       
        echo "<p><strong>Recipe Ingredients:</strong></p>";
        // Display ingredients without list style
        $ingredients = explode("\r\n", $row['recipe_ingredients']);
        foreach ($ingredients as $ingredient) {
            echo "<p>" . $ingredient . "</p>";
        }
        
        echo "<p><strong>Recipe Procedure:</strong></p>";
        // Display procedure without list style
        $steps = explode("\r\n", $row['recipe_procedure']);
        foreach ($steps as $step) {
            echo "<p>" . $step . "</p>";
        }
        
        echo "</div>"; // Close recipe div
    }
} catch (PDOException $e) {
    echo 'Failed: ' . $e->getMessage();
}
?>




<?php
    include "footer.php";
?>
