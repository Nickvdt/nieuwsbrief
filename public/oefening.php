<!doctype html>
<html lang="en">
<head>
    <title>Oefening</title>
</head>
<body>

<?php
for ($nummer = 33; $nummer <= 543; $nummer++) {

    if ($nummer % 5 == 0 && $nummer % 9 == 0) {

        if ($nummer % 2 == 0) {
            echo "<strong>Web</strong> ";
        } else {
            echo "software ";
        }

    } elseif ($nummer % 5 == 0) {

        if ($nummer % 2 == 0) {
            echo "<strong>{software}</strong> ";
        } else {
            echo "software ";
        }

    } elseif ($nummer % 9 == 0) {

        if ($nummer % 2 == 0) {
            echo "<strong>{developer}</strong> ";
        } else {
            echo "developer ";
        }
    } elseif ($nummer % 2 == 0) {

        echo "<strong>{$nummer}</strong> ";

    } else {

        echo "{$nummer} ";

    }
}

?>

</body>
</html>