<?php
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aging on Planets</title>
    <script src="ts/script.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/style.css" />
</head>
<body>
<svg id="canvas" width="1000" height="1000" viewBox="0 0 1000 1000" >
    <svg id="starContainer">
    </svg>
    <!--    sun-->
    <circle id="sun" cx="500" cy="500" r="40" fill=url(#sunGradient) />
    <!--    stars and orbit paths-->
    <?php
    echo makeOrbits([60, 90, 130, 170, 220, 280, 340, 390, 440]);
    echo makeTheStars();
    ?>
    <!--    planets-->
    <circle id="mercury" class="planet" cx="440" cy="500" r="7" stroke="red" stroke-width="1" fill="red" />
    <circle id="venus" class="planet" cx="410" cy="500" r="15" stroke="sandybrown" stroke-width="1" fill="sandybrown" />
    <circle id="earth" class="planet" cx="370" cy="500" r="20" stroke="blue" stroke-width="1" fill="blue" />
    <circle id="mars" class="planet" cx="330" cy="500" r="10" stroke="firebrick" stroke-width="1" fill="firebrick" />
    <circle id="jupiter" class="planet" cx="280" cy="500" r="30" stroke="indigo" stroke-width="1" fill="indigo" />
<!--    <g id="saturn" class="saturn" transform="translate(500,500)">-->
        <ellipse class="saturn rings planet" cx="220" cy="500" rx="35" ry="10" stroke="navajowhite" stroke-width="3" fill="none" />
        <circle class="saturn planet" cx="220" cy="500" r="25" stroke="blanchedalmond" stroke-width="1" fill="blanchedalmond" />
<!--    </g>-->
    <circle id="uranus" class="planet" cx="160" cy="500" r="15" stroke="cornflowerblue" stroke-width="1" fill="cornflowerblue" />
    <circle id="neptune" class="planet" cx="110" cy="500" r="20" stroke="slateblue" stroke-width="1" fill="slateblue" />
    <circle id="pluto" class="planet" cx="60" cy="500" r="5" stroke="grey" stroke-width="1" fill="grey" />

    <!--    defs-->
    <defs>
        <radialGradient id="sunGradient">
            <stop offset="60%" stop-color="#fff200" />
            <stop offset="90%" stop-color="rgba(255,255,255,0)" />
        </radialGradient>
        <radialGradient id="starGradient">
            <stop offset="10%" stop-color="#FFFFFF" />
            <stop offset="80%" stop-color="rgba(255,255,255,0)" />
        </radialGradient>
    </defs>
</svg>
<div class="content">
    <h1>Aging on Planets</h1>
    <form>
        <label>
            <input type="number" id="age" placeholder="age" />
        </label>
        <label>
            <select name="planets" id="planets">
                <option value="Mercury">Mercury</option>
                <option value="Venus">Venus</option>
                <option value="Mars">Mars</option>
                <option value="Jupiter">Jupiter</option>
                <option value="Saturn">Saturn</option>
            </select>
        </label>
        <label>
            <input type="submit" id="submit"/>
        </label>
    </form>
    <div id="error"></div>
    <div class="result">
        Your age is... <span id="result"></span>
    </div>
</div>
</body>
</html>