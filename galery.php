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

        function showImages($rows, $cols) {
            $name = "obraz";
            $iterator = 1;
            $fi = new FilesystemIterator("img/", FilesystemIterator::SKIP_DOTS);
            $filesInDirectory = iterator_count($fi);

            print("<h1>Rows: $rows Cols: $cols </h1>");

            for ($i = 1; $i <= $rows; $i++) {
                for ($j = 1; $j <= $cols; $j++) {
                    $filename = "img/$name$iterator.jpg";
                    if (file_exists($filename)) {
                        print("<img src='$filename' alt='$name$iterator' />");
                        $iterator++;
                    }
                }
                print("<br>");
            }



            print("<br><br>");

            for ($k = 1; $k <= $filesInDirectory; $k++) {
                print("<img src='img/$name$k.jpg' alt='$name$k' />");
            }
        }

        showImages(2, 3);
        ?>
    </body>
</html>
