<?php

$randomCoordinate = rand(5, 995);
$randomSize = rand(1, 5);

function makeTheStars() {
    $output = '';
    for ($i = 0; $i < 100; $i++) {
        $output .= '<circle class="star star' . $i;
        $output .= '" cx="';
        $output .=  rand(5, 995);
        $output .= '" cy="';
        $output .=  rand(5, 995);
        $output .= '" r="';
        $output .= rand(1, 5);
        $output .= '" fill=url(#starGradient) />';
    }
    return $output;
}


function makeOrbits($orbits) {
    $output = '';
    foreach($orbits as $orbit) {
        $output .= '<circle cx="500" cy="500" r="';
        $output .= $orbit;
        $output .= '" stroke="white" stroke-width="2" fill="none" />';
    }
    return $output;
}