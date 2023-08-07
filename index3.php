<?php
namespace Codecademy;

function clapYourHands($happiness, $knowledge) {
  if ($happiness && $knowledge) {
    return "CLAP!";
  }
  else {
    return ":(";
  }
}

echo clapYourHands(TRUE, TRUE);
echo "\n";
echo clapYourHands(TRUE, FALSE);
echo "\n";
echo clapYourHands(FALSE, TRUE);
echo "\n";
echo clapYourHands(FALSE, FALSE);