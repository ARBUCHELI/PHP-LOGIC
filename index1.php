<?php
namespace Codecademy;

function both($param1, $param2) {
  if ($param1) {
    if ($param2) {
      return "both";
    } else {
      return "not both";
    }
  } else {
      return "not both";
  }
}

echo both(TRUE,TRUE);
echo "\n";
echo both(TRUE, FALSE);
echo "\n";
echo both(FALSE, TRUE);
echo "\n";
echo both(FALSE, FALSE);
