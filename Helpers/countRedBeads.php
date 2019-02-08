<?php

/**
 * @param int $n
 * Implement count_red_beads(n) (in PHP count_red_beads($n);
 * in Java, Javascript, TypeScript, C, C++ countRedBeads(n))
 * so that it returns the number of red beads.
 * If there are less than 2 blue beads return 0.
 *
 * @return int
 */

function countRedBeads(int $n): int
{
    //count red beads
    $blueBeads = $n;

    if ($blueBeads < 2) {
        return 0;
    }

    $numberOfRedBeads = ($blueBeads - 1) * 2;

    return $numberOfRedBeads;
}

/**
 * @param int $beads
 * echoes beans and coloring it to the html
 *
 * @return string
 */
function getStringOfBeads(int $beads)
{
    if ($beads < 2) {
        return '';
    }

    $string = '';

    for ($i = $beads; $i > 0; $i--) {
        $string .= '@';
    }

    return $string;
}


echo("----------counting red beads<br><br>");

$redBeads = countRedBeads(2);
echo $redBeads;

echo '<br>';
echo getStringOfBeads(5);
echo '<br>';

echo("<br>counting red beads----------<br>");
