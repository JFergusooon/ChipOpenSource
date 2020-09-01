<?php

session_start();
    require_once '../vendor/autoload.php';
    require_once ('MysqliDb.php');


$db = $db->get('recipes');

if (isset($_POST['like'])){
    $db_recipeID = $_POST['like'];
    $query = Array('like_count' =>$db->inc(1));
    $db->where('id',$db_recipeID);
    $db->update('recipes', $query);

    $db->insert('likes', Array('recipe_ID'=> $db_recipeID));
}

foreach ($recipes as $recipe){
    exho $recipe["recipe_text"] .'&nbsp;<button data-recipeid="'.$recipe['recipe_ID'].'"data-likes="'.$recipe['like_count'].'" class="like">Like ('.$recipe['like_count'].')</button><hr />';
}
?>

