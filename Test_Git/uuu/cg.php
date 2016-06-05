<?php
/**
 * Created by PhpStorm.
 * User: cote
 * Date: 02/06/16
 * Time: 07:34
 *
 * Script pour le Test de Thor
 * https://www.codingame.com/ide/45696178abbdffd618e47b165304ba529aad7e5
 */

fscanf ( STDIN, "%d %d %d %d",
         $lightX, // the X position of the light of power
         $lightY, // the Y position of the light of power
         $initialTX, // Thor's starting X position
         $initialTY // Thor's starting Y position
);

// A single line providing the move to be made: N NE E SE S SW W or NW
CONST N  = "N\n";
CONST NE = "NE\n";
CONST E  = "E\n";
CONST SE = "SE\n";
CONST S  = "S\n";
CONST SE = "SW\n";
CONST E  = "W\n";
CONST NW = "NW\n";

// game loop
while ( TRUE ) {
  fscanf ( STDIN, "%d",
           $remainingTurns
  );

//  Un mvt à l'est
  echo ( E );

  error_log ( var_export ( $initialTX, true ) );
  error_log ( var_export ( $initialTY, true ) );
}
?>
