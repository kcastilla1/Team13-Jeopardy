<?php session_start();

$file = fopen("userdata.txt", "a+");
    $txt = $_SESSION["name"].";".$_SESSION['winnings'];
    $txt = $txt.";";
    fwrite($file, $txt);
    fwrite($file, "\n");
fclose($file);

#txt file to array for handling
function txt_to_arr($path) {
    $file = file_get_contents($path);
    $rows = explode("\n", $file);
    $all_data = Array();
    foreach($rows as $row=>$info) {
        $r_info = explode(";", $info);

        $all_data[$row]["name"] = $r_info[0];
        $all_data[$row]["winnings"] = $r_info[1];
    }
    return $all_data;
}
?>

<html>

<head>
    <title>Jeopardy Leaderboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class = "title">Jeopardy!</h1>
    <div class=leaders>
    <table class=leaderboard>
        <caption>Leaderboard</caption>
        <tr>
            <th>Name</th>
            <th>Winnings ($)</th>
        </tr>
        <?php
        $all_data = txt_to_arr('userdata.txt');
        #generate table
        foreach($all_data as $rows=>$row) {
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['winnings']."</td>";
            echo "</tr>";
        }
        ?>
        </table>
    </div>
</body>

</html>
