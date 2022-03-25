<?php session_start();  
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['winnings'] = 0;
    $_SESSION['value'] = 0; 
    $_SESSION['currid'];
    $_SESSION['attempted'] = array();
    for ($i=0; $i<30; $i++) {
        $_SESSION['attempted'][] = $i;
    }
    $name = $_POST['name'];
    $winnings = 0;
    setcookie("contestant[name]", $name);
    setcookie("contestant[winnings]", $winnings);

?>

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
    <p> Please go back to main page and try again!</p>';
    echo '<br><br>
    <button align = "center" class = "button" type="button" onclick="window.location=\'index.php\'">Back to main page</button>';
}
else
{
    echo "
    <div class = 'welcome'>
    <h1> Welcome! </h1>
    <p>Let's begin the game, ".$_POST['name']."!";
    echo '<br><br>
    <button align = "center" class = "button" type="button" onclick="window.location=\'table.php\'">Play game!</button>';
}
            $current = file_get_contents('user.txt');
            $current.=  $_POST["name"];
            file_put_contents('user.txt',$current.'\n');   
        
?>

</body>
</html>