<?php
namespace Codecademy;

function willWeEat($meal, $hungry) {
  if ($meal == "dessert" || $hungry) {
    return "Yum. Thanks!";
  } else {
    return "No thanks. We're not hungry.";
  }
}

echo willWeEat("dessert", TRUE);
echo "\n";
echo willWeEat("ice cream", TRUE);
echo "\n";
echo willWeEat("dessert", FALSE);
echo "\n";
echo willWeEat("ice cream", FALSE);