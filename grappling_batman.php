<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

// $W: width of the building.
// $H: height of the building.
fscanf(STDIN, "%d %d", $W, $H);
// $N: maximum number of turns before game over.
fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d %d", $X, $Y);

// game loop
while (TRUE)
{
    // $bombDir: the direction of the bombs from batman's current location (U, UR, R, DR, D, DL, L or UL)
    fscanf(STDIN, "%s", $bombDir);

    // ajuster les coordonnées du Batman en fonction de la direction de la bombe
    if ($bombDir === "U") {
        $Y -= 1;
    } elseif ($bombDir === "UR") {
        $X += 1;
        $Y -= 1;
    } elseif ($bombDir === "R") {
        $X += 1;
    } elseif ($bombDir === "DR") {
        $X += 1;
        $Y += 1;
    } elseif ($bombDir === "D") {
        $Y += 1;
    } elseif ($bombDir === "DL") {
        $Y += 1;
        $X -= 1;
    } elseif ($bombDir === "L") {
        $X -= 1;
    } elseif ($bombDir === "UL") {
        $X -= 1;
        $Y -= 1;
    }

    // deplacement du batman
    echo("$X $Y\n");
}
?>