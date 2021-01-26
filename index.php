<?php
    $arr = array('a','b','c');
    define('DAYS_IN_YEAR', 365);

    $firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);

    $canvote = "am old enough to vote in the United States";
    $cannotvote = "am not old enough to vote in the United States";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INF653 Week 2</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <header>
        <?php echo "Today's date " . date("m/d/Y"); ?>
    </header>
    <div class="name">
        <h1>
        <?php
            if (!empty($firstname) && !empty($lastname)) {
                echo "Hello, my name is " . $firstname . " " . $lastname . ".";
            } else {
                echo "You did not submit both firstname and lastname parameters!";
            }
        ?>
        </h1>
    </div>
    <br>
    <div class="age">
        <?php
            if (!empty($age)) {
                echo "I am " . $age . " years young, and ";
                if($age >= 18) {
                    echo $canvote;
                } else {
                    echo $cannotvote;
                }
                echo "<br>" . "That means I am at least " . $age * DAYS_IN_YEAR . " old.";
            } else {
                echo "You did not submit a numeric age parameter!";
            }
        ?>
    </div>
</body>
</html>