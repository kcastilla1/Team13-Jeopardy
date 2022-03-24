<html>
<head>
<title> Jeopardy! </title>
<link rel = "stylesheet" href="style.css">

</head>
<body>
<h1 class = "title">Jeopardy!</h1>
<?php
if (empty($_POST["name"]))
{
    echo'
    <div class = "welcome">
    <h1> Error! Invalid data. </h1>
    <p> Please go back to mainpage and try again!</p>';
    echo '<br><br>
    <button align = "center" class = "button" type="button" onclick="window.location=\'https://codd.cs.gsu.edu/~ntran64/WP/PW/01/index.php\'">Back to main page</button>';
}
else
{
    echo '
    <div class = "welcome">
    <h1> Thank you! </h1>
    <p>Let begin the game, '.$_POST["name"]."!";
    echo '<br><br>
    <button align = "center" class = "button" type="button" onclick="window.location=\'https://codd.cs.gsu.edu/~ntran64/WP/PW/01/table.php\'">Play game!</button>';
}
            $current = file_get_contents('user.txt');
            $current.=  $_POST["name"];
            file_put_contents('user.txt',$current.'\n');   
        
?>

</body>
</html>