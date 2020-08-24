<?php
    session_start();
    require_once '../vendor/autoload.php';


    $loader = new \Twig\Loader\FileSystemLoader('../templates');
    $twig = new \Twig\Environment($loader);

    //UNCOM TO CREATE DB

    // $connection = new mysqli('localhost', 'root', '');
    // $sql = "CREATE DATABASE recipesDB";
    // if (mysqli_query($connection, $sql)) {
    //   echo "Database created successfully";
    // } else {
    //   echo "Error creating database: " . mysqli_error($connection);
    // }
    // mysqli_close($connection);

    // $db = new mysqli('localhost', 'root', '', 'recipesDB');
    // $sql ="CREATE TABLE publicRecipes (
    //     recipeID INT(255) AUTO_INCREMENT PRIMARY KEY,
    //     CreatedBy VARCHAR(100),
    //     Title VARCHAR(200),
    //     PrepTime VARCHAR(200),
    //     Ingredients VARCHAR(5000),
    //     Instructions VARCHAR(5000),
    //     MiscNotes VARCHAR(5000)
    //     )";
    //     if (mysqli_query($db, $sql)) {
    //         echo "Table created successfully";
    //       } else {
    //         echo "Error creating table: " . mysqli_error($db);
    //       }
    //       $sql = "INSERT INTO publicrecipes (recipeID, CreatedBy, Title, PrepTime, Ingredients,
    //       Instructions, MiscNotes)
    //          VALUES ('2', '19kayla', 'Beef', '100 Minutes', '1 whole cow', 'Kill, and feast', 'make sure you give thanks to the cow')";

    // if (mysqli_query($db, $sql)) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($db);
    // }
    // $sql = "INSERT INTO publicrecipes (recipeID, CreatedBy, Title, PrepTime, Ingredients,
    // Instructions, MiscNotes)
    //     VALUES ('1', '19kayla', 'Chicken And Rice', '30 Minutes', '4 chicken Breasts, 1 cup rice', 'Cook both the chicken and the rice. Chop the chicken up, and then add to rice', 'ahh')";

    // if (mysqli_query($db, $sql)) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($db);
    // }


    //END CREATE AND INSERT COMMANDS


    $db = new mysqli('localhost', 'root', '', 'recipesDB');

    if($db->connect_errno > 0){
        die('Unable to connect to database [' . $db->connect_error . ']');
    }
    $sql = <<<SQL
    SELECT *
    FROM `publicrecipes`
SQL;

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}


    echo $twig->render('recipes.phtml', ['recipes' => $result])

    
?>
<!-- <!DOCTYPE html>
<html>
    <head>
        <title>
            Chip n Cook
        </title>
        <link href='style.css' rel='stylesheet' />
    </head>
    <body>
        <header>
        
        <h1>Chip Recipes And More</h1>
            <nav>
                <ul>
                <a href = 'index.php'> <li> Home </li> </a>
                <a href = 'recipes.php'> <li> Recipes </li> </a>
                <a href = 'profile.php'> <li> Profile </li> </a>
                <a href = 'search.php'> <li> Search </li> </a>
                </ul>
            </nav>
        </header>
        <h2>Public Recipes</h2>

        <section>
        
            <div> 
                <a href = 'emptyRecipe.php'><p>Recipe #1</p> </a>

            </div>


        </section>

        <footer>
            <p>Made by Team Chip &copy; Copyright 2020</p>
            <p id="developers">Ashton Atkinson, Sawyer Benson, Cory Billing, Danny Doyle, Jeffrey Ferguson, Kayla Neumann <p>
        </footer>
    </body>
</html> -->