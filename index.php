<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?
function number ($x ) {
    echo $x + 1;
}
number (5);

?>
<br>
<br>
<?
function names ($x , $y) {
    echo $y .' , ' . $x;
}

  names ('Warren ' ,  'Miller');

// $txt1 = "Warren";
// $txt2 = "Miller";
// echo $txt2 . ', ' .  $txt1;
?>
<br>
<br>
<?
$x = 3;
if ($x <= 0) {
    echo "It's true!";
} else {
    echo "It's false!";
}


?>
<br>
<br>
<?
$nums = array(3,7,33);
 
function maxNumber ($arr) {
    // $maxNumber = max($arr);
    echo max($arr);
}
maxNumber($nums);
?>
<br><br>
<?
$nums = array(3,7,33);
 
function minNumber ($arr) {
    // $maxNumber = max($arr);
    echo min($arr);
}
minNumber($nums);
?>
    
</body>
</html>