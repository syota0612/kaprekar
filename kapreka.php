<?php
function pat($z)
{
  $a = array('0','1','2','3','4','5','6','7','8','9');
  $l = 4;
  $x = array('');
  $y = array('');
  for ($i = 0; $i < $l; ++$i) {
    $_x = array();
    $_y = array();
    foreach ($a as $ak => $av) {
      foreach ($x as $xk => $xv) {
        foreach ($y as $ky => $xy) {
          $xv .= $av;
          $xy .= $av;
          // $xv = (int)$xv %99;
          // echo $xv;
          // $kaprekar = array();
          if (($xv % 99) <= 0) {
            echo "kanikama","/";
            $digits = strlen(strval($xv));
            $min_n = str_split($xv);
            sort($min_n, SORT_NUMERIC);
            $min_result = (int)implode($min_n);
            $max_n = str_pad("{$xv}", $digits, "0", STR_PAD_RIGHT);
            $max_n = str_split($max_n);
            rsort($max_n, SORT_NUMERIC);
            $max_result = (int)implode($max_n);
            $kaprekar = $max_result - $min_result;
            // array_push($kaprekar, $max_result - $min_result);
            // echo $kaprekar;
            $xv = $kaprekar;
            $_x[] = $xv;
            $_y[] = $xy;
                // $min_x = str_split($_x);
              // sort($_x, SORT_NUMERIC);
              // $xc =
              // $xy[] = $xc;
                // if (is_array($xv)) echo 'これは配列です。';
                // continue;
            }
          }
        }
          $x = $_x;
          $y = $_y;
      }
    }
   if ($x === $y) {
     array_push($z, $x);
     return sort($z);
    }
}
function kani($z, $n) {
  echo "susi","/";
  foreach ($z as $keys => $key) {
    if ($key >= $n) {
      echo $key;
      break;
    }
  }
}
function input($z)
{
  $z = $z;
  $n = fgets(STDIN);
  if ($n >= 0 && $n <= 10 ** 13 && !empty($z)) {
    echo "ok","/";
    pat($z);
    kani($z, $n);
    echo "unagi","/";
    input($z);
    echo "usi","/";
  } elseif ($n >= 0 && $n <= 10 ** 13) {
    echo "ok1","/";
    kani($z, $n);
    input($z);
  } else {
    echo "ok2","/";
    input($z);
  }
}
$z = array('');
// $z = pat($a, $l);
input($z);
?>