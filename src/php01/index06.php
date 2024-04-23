<?php

function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
}
outputNumber(1);


function outputHello()
{
  echo "Hello world";
}

outputHello();

function text($number1, $number2)
{
echo $number1 + $number2;
}
 text(2, 4);
 text(7, 3);
echo "<br />";
function exam($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  if ($total > 210) {
    echo $total . "点なので合格です";
  } else {
    echo $total . "点なので不合格です";
  }
}
echo exam(80, 60, 90);


echo "\n";

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);
