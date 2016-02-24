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
            //starting PHP Hello World
            ?>
            <br>
            <?php
                echo "Hello, world!";
                echo "Hello,"." "."world"."!";
            //PHP syntax and conditional statements
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
                print "Buy Mugs and specs!";
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
        <br>
            <?php
                $wantedgood = "mugs";
            switch ($wantedgood) {
                    case 1:
                        echo "You have to be 18 to buy mugs";
                        break;
                case 2:
                    echo "You have to be 21 to buy sausage rolls";
                    break;
                case 3:
                    echo "You have to be 16 to buy specs";
                    break;
                default:
                    echo "You have to be 16 or over to buy anything from the list";
                }
            ?>
        <br>
            <?php
            // This is the PHP arrays syntax
                $myArray = array("do", "re", "mi"); //declares the array
                echo $myArray[0]; //outputs "do"
                $myArray[1] = "la"; // modifies position 1 (re)
                echo $myArray[1]; // outpute "la"
                unset($myArray[2]); //removes the array in position 2
            ?>
        <br>
            <?php
            $provisionedActivities = array("Specs", "Drugs", "Rock", "Roll");
            echo $provisionedActivities[0];
            $provisionedActivities[1] = "Hugs";
            echo $provisionedActivities[1];
            unset($provisionedActivities[2]);
            foreach ($provisionedActivities as $x) {
                print "<p>$x</p>";
            }
            ?>
        <br>
            <?php
                //This is PHP loops
                for ($i = 1; $i < 10; $i++)
                {
                    echo "<p>$x</p>";
                }
            ?>
        <br>
            <?php
                foreach ($arrayelement as $x) {
                    print "<p>$x</P>";
                }
            ?>
    </body>
</html>
