<?php
    session_start();
    require_once '../vendor/autoload.php';
    $ID = $_GET["recipeID"];
    $loader = new \Twig\Loader\FileSystemLoader('../templates');
    $twig = new \Twig\Environment($loader);

    $db = new mysqli('localhost', 'root', '', 'recipesdb');

    if($db->connect_errno > 0){
        die('Unable to connect to database [' . $db->connect_error . ']');
    }
    $sql = <<<SQL
    SELECT *
    FROM `publicrecipes`
    WHERE `recipeID` = $ID
SQL;

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

    echo $twig->render('recipe.phtml', ['recipe' => $result])
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
        <section>
        
            <div> 
                <p>[RECIPE NAME]</p>
                <p>[Ingredients]</p>
                <p>[TimeToMake]</p>
                <p>[Instructions]</p>
            </div>


        </section>

        <footer>
            <p>Made by Team Chip &copy; Copyright 2020</p>
            <p id="developers">Ashton Atkinson, Sawyer Benson, Cory Billing, Danny Doyle, Jeffrey Ferguson, Kayla Neumann <p>
        </footer>
    </body>
</html> -->