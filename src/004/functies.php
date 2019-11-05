<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $dieren = array("aap", "beer", "konijn", "vis");
        $sporten = array("handbal", "korfbal", "hockey", "schaatsen");
        shuffle($sporten);
        echo "<li>Er zijn ".count($sporten)." in de array</li>";

        geefArrayWeerAlsLijst($sporten);
        geefArrayWeerAlsLijst($dieren);

        function geefArrayWeerAlsLijst($arr) {
            foreach ($arr as $arr_element) {
                echo "<li>".$arr_element."</li>";
            }
        }

    ?>
</body>
</html>

