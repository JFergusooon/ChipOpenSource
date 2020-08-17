<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href='style.css' rel='stylesheet' />
</head>
<body>
    <header>
        
        <nav>
        <ul>
            <a href = 'index.php'> <li> Home </li> </a>
            <a href = 'recipes.php'> <li> Recipes </li> </a>
            <a href = 'profile.php'> <li> Profile </li> </a>
            <a href = 'search.php'> <li> Search </li> </a>
        </ul>
        <div>
            <?php 
                if(isset($_SESSION['userId'])) {
                     echo '<form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                        </form>';
                     echo '<p>'.$_SESSION['userUid'].'</p>';
                } else {
                    echo '<form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Email">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="login-submit">Login</button>
                        </form>
                        <a href="signup.php">Signup</a>';
                }
            ?>
        </div>
        </nav>
    </header>