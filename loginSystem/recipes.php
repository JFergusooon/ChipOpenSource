<?php
    session_start();
?>
<!DOCTYPE html>
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
</html>