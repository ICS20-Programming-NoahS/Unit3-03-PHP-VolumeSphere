<?php

    define("PI", 3.1416);

    $radius = floatval($_POST["radius-of-sphere"]);

    // calculating the volume of the sphere
    $volume = (4/3) * PI * pow($radius, 3);

    echo "<h3>Results:</h3>";
    echo "The volume of the sphere is " . number_format($volume, 2) . "cm<sup>3</sup>";
?>