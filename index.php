<!doctype html>
<html>
<head>

</head>
<body>
<p>
    <?php
    echo "Hello World";
    echo "Hello, World!";
    echo "Hello,"." "."World"."!";
    echo 5 * 7;
    $myname = "Frodo Baggins";
    $myage = 111;
    echo "My name is". $myname . "and I am" . $myage;

    ?>
</p>
<br>
<p>
    <?php
    echo "I get printed!";
    // I don't! I'm a comment.
    /* I don't get printed either
    and neither do I */
    ?>
</p>
<br>
<p>
    <?php
    $name = "Edgar";

    if ($name == "Simon") {
        print "I know you!";
    }
    else {
        print "Who are you?";
    }
    ?>
</p>
<br>
<p>
    <?php
    $myage = 44;

    if ($myage >= 21) {
        print "Buy Specs, mugs and sausage rolls!";
    }
    elseif ($myage >= 18 ) {
        print "Buy Mugs and specs!"
                }
    elseif ($myage >= 16) {
        echo "You can buy specs!";
    }
    else {
        echo "You can't buy anything...grow up!";
    }
    ?>
</p>
<br>
<p>
    <?php
    $numberOfHobbits = 2;
    switch ($numberOfHobbits) {
        case 1:
            echo "1 sad hobbit";
            break;
        case 2:
            echo "2 happy hobbits";
            break;
        case 3:
            echo "3 hobbits are a crowd";
            break;
        default:
            echo "All tha hobbits have gone home";
    }
    ?>
</p>

</body>
</html>
/**
* Created by PhpStorm.
* User: henry
* Date: 24/02/2016
* Time: 14:29
*/