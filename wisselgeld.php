<?php

  $geld = $argv[1];

  $geld = round(($geld*100)/5)*5/100;

  define("BILJETEN", array(50, 20, 10, 5, 2, 1, 0.50, 0.20, 0.10, 0.05, 0.02, 0.01));

    foreach (BILJETEN as $biljet) {
          $geld = round ($geld, 2);
          $floor = floor ($geld / $biljet);
          $geld = $geld - ($floor * $biljet);

          if ($floor > 0) {
            if ($biljet < 1) {
              $cent = $biljet * 100;
              echo "$floor X $cent cent".PHP_EOL;
            } else {
                echo "$floor X $biljet euro".PHP_EOL;
            }
          }
}
