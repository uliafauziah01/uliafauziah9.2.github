<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Gaji</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <div class="container">
        <h1>OPERATOR</h1>
        <?php
        $a = 5;
        $b = 4;


        echo '<table class="table">';
        echo '<tr><th>Expression</th><th>Result</th></tr>';
        echo "<tr><td>$a == $b</td><td>" . (($a == $b) ? 'true' : 'false') . "</td></tr>";
        echo "<tr><td>$a != $b</td><td>" . (($a != $b) ? 'true' : 'false') . "</td></tr>";
        echo "<tr><td>$a > $b</td><td>" . (($a > $b) ? 'true' : 'false') . "</td></tr>";
        echo "<tr><td>$a < $b</td><td>" . (($a < $b) ? 'true' : 'false') . "</td></tr>";
        echo "<tr><td>($a != $b) && ($a > $b)</td><td>" . ((($a != $b) && ($a > $b)) ? 'true' : 'false') . "</td></tr>";
        echo "<tr><td>($a != $b) || ($a > $b)</td><td>" . ((($a != $b) || ($a > $b)) ? 'true' : 'false') . "</td></tr>";
        echo '</table>';
        ?>
    </div>
</body>
</html>
