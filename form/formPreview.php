<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        file_put_contents('logs.txt', PHP_EOL, FILE_APPEND | LOCK_EX);
        
        function appendFileAndPrintOnScreen($value) {
            file_put_contents('logs.txt', $value . ";", FILE_APPEND | LOCK_EX);
            print $value . "<br>";
        }
              
        getFormValue('element_1', "Surname");
        getFormValue('element_2', "Name");
        getFormValue('element_3', "Country");
        getFormValue('element_4', "email");
        getProgrammingLang();
        getPayment();

        function getFormValue($elem, $elemName) {
            if (isset($_REQUEST[$elem]) && ($_REQUEST[$elem] != "")) {
                $found = htmlspecialchars(trim($_REQUEST[$elem]));
                appendFileAndPrintOnScreen("$elemName:$found");
            }
        }

        function getPayment() {
            if (isset($_REQUEST['element_6']) && ($_REQUEST['element_6'] != "")) {
                $found = htmlspecialchars(trim($_REQUEST['element_6']));
                switch ($found) {
                    case 1 : appendFileAndPrintOnScreen("Payment:eurocard");
                        break;
                    case 2 : appendFileAndPrintOnScreen("Payment:visa");
                        break;
                    case 3 : appendFileAndPrintOnScreen("Payment:bank blabla");
                        break;
                }
            }
        }

        function getProgrammingLang() {

            function findLang($elem) {
                if (isset($_REQUEST[$elem]) && ($_REQUEST[$elem] != "")) {
                    $found = htmlspecialchars(trim($_REQUEST[$elem]));
                    return $found;
                }
            }

            $elem1 = findLang('element_5_1');
            $elem2 = findLang('element_5_2');
            $elem3 = findLang('element_5_3');

            if ($elem1 > 0 || $elem2 > 0 || $elem3 > 0) {
                appendFileAndPrintOnScreen("Programming language: ");
                if ($elem1 > 0) {
                    appendFileAndPrintOnScreen("PHP ");
                }
                if ($elem2 > 0) {
                    appendFileAndPrintOnScreen("C++ ");
                }

                if ($elem3 > 0) {
                    appendFileAndPrintOnScreen("Java");
                }
                print("<br>");
            }
        }
        ?>
    </body>
</html>
