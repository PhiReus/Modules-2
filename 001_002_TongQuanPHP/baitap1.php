<?php

function readNumber($number) {
  if ($number < 0 || $number > 999) {
    echo  "Tôi không thể đọc";
  } else {
    $ones = $number % 10;
    $tens = floor(($number % 100) / 10);
    $hundreds = floor($number / 100);
    
    switch ($hundreds) {
      case 1:
        echo "one hundred";
        break;
      case 2:
        echo "two hundred";
        break;
      case 3:
        echo "three hundred";
        break;
      case 4:
        echo "four hundred";
        break;
      case 5:
        echo "five hundred";
        break;
      case 6:
        echo "six hundred";
        break;
      case 7:
        echo "seven hundred";
        break;
      case 8:
        echo "eight hundred";
        break;
      case 9:
        echo "nine hundred";
        break;
      default:
        break;
    }
    
    if ($hundreds > 0 && ($tens > 0 || $ones > 0)) {
      echo '<br>'. " and ";
    }
    
    if ($tens < 2) {
      switch ($ones) {
        case 0:
          break;
        case 1:
          echo "one";
          break;
        case 2:
          echo "two";
          break;
        case 3:
          echo "three";
          break;
        case 4:
          echo "four";
          break;
        case 5:
          echo "five";
          break;
        case 6:
          echo "six";
          break;
        case 7:
          echo "seven";
          break;
        case 8:
          echo "eight";
          break;
        case 9:
          echo "nine";
          break;
        default:
          break;
      }
    } else {
      switch ($tens) {
        case 2:
          echo "twenty";
          break;
        case 3:
          echo "thirty";
          break;
        case 4:
          echo "forty";
          break;
        case 5:
          echo "fifty";
          break;
        case 6:
          echo "sixty";
          break;
        case 7:
          echo "seventy";
          break;
        case 8:
          echo "eighty";
          break;
        case 9:
          echo "ninety";
          break;
        default:
          break;
      }
      
      if ($ones > 0) {
        echo '<br>'. " ";
        switch ($ones) {
          case 1:
            echo "one";
            break;
          case 2:
            echo "two";
            break;
          case 3:
            echo "three";
            break;
          case 4:
            echo "four";
            break;
          case 5:
            echo "five";
            break;
          case 6:
            echo "six";
            break;
          case 7:
            echo "seven";
            break;
          case 8:
            echo "eight";
            break;
          case 9:
            echo "nine";
            break;
          default:
            break;
        }
      }
    }
  }
}


readNumber(100);
readNumber(15); 
readNumber(80); 
readNumber(999); 
