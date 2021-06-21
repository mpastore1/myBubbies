<html>
<head><title>Our Time Together</title></head>

<link rel="stylesheet" href="decor.css">
<div class="topnav2">
<table>
<tr>
    <th><img src='/pics/tenor.gif' style="float:left; width:100%;height:20%;transform: scaleX(-1)" /></th>
    <th>&#10084; Happy 1 year Bubbies &#10084;</th>
    <th><img src='/pics/tenor.gif' style="float:left; width:100%;height:20%;" /></th>    
</tr>


</table>
</div>

<body>
<div class="topnav">
<a class="active" href='FrontPage.php'>  Home </a></li>
<a href="Photos.php">  Photos </a></li>

<a href="Fav.php">  Your Favorites </a></li>
</div>


<?php 
ini_set('display_errors','Off');
session_start();


$counter = $_SESSION['count'] ; 
    $counter = (int)$counter;
$PICS = array();

for($i = 0; $i < 39; $i++){
    $PICS[] = "<img src='pics/$i.jpg' style='width:500px;height:700px;' />";
}
if(isset($_POST['button1'])){
    $_SESSION["count"] =  $_SESSION["count"]++;
    array_key_exists('count', $_SESSION) ? $_SESSION['count']++ : ($_SESSION['count'] =0);
    echo $PICS[$_SESSION["count"]];
    
    if($_SESSION["count"] > 38){
        $_SESSION["count"] = 0;
    }
    
   
}

?>

<form method="post">
        <input type="submit" name="button1"
                class="button" value="&#10084; Next -> &#10084;" />
          
</form>


</body>

</html>