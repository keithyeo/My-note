    <head>
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="shortcut icon" href="favicon.ico">
    </head>
<?php
$url = '2line.png';
$im = imagecreatefrompng($url);
imagepng($im, $url);
$rgbArray = array();
$res = $im;
$size = getimagesize($url);

//get images width
$wid = $size['0'];

//get images height
$hid = $size['1'];

for ($heightcount = 0; $heightcount < $hid; ++ $heightcount) {

  for ($widthcount = 0; $widthcount < $wid; ++ $widthcount) {


  $rgb = imagecolorat($res, $widthcount, $heightcount);
  $rgbArray[$widthcount][$heightcount] = imagecolorsforindex($res, $rgb);
  $rgbarray = imagecolorsforindex($res, $rgb);
        if ($rgbarray['red'] < 105 || $rgbarray['green'] < 105 ||
             $rgbarray['blue'] < 105)  {
    
    $baba++; 
    $show2.='1';     
  } else {
    $show2.='0';
  }

  }//for width


  if ($baba<1){
    
  }else{
    $show2.='<br>';
  }
  $baba=0;

}//for height 
echo $show2;






?>
