<!doctype html>
<html>
<head>

</head>
    <body>
        <p>
            <?php
                echo "Hello World";
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            ?>
            <br>
            <?php
                echo "Hello, world!";
                echo "Hello,"." "."world"."!";
            ?>
            <br>
            <?php
                echo 5 * 7;
            ?>
            <br>
            <?php
                $myname = "Frodo Baggins";
                $myage = 111;
                echo "My name is" . $myname . "and I am " . $myage;
            ?>
            <br>
            <?php
                echo "I get printed!";
                //I don't! I'm a comment.
                /* I don't get printed either
                and neither do I */
            ?>
            <br>
            <?php
                $name = "Edgar";

            if ($name == "Simon") {
                print "I know you!";
            }
            else {
                print "Who are you?";
            }
            ?>
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
                    echo "All the hobbits have gone home";
            }
            ?>
    </body>
</html>
