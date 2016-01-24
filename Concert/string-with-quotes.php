<!DOCTYPE html>
<html>
  <head>
    <title>Results</title>
    <link rel="stylesheet" href="css/c02.css" />
  </head>
  <body>
    <h1>Any Concert</h1>
    <div id="content">
<?php                                 
$selectedSeats = $_POST["seats"];
echo "You have bought " . count($selectedSeats) . " seat(s) <br>";  
$totalPrice=0;
foreach ($selectedSeats as $selectedSeat) {
  $price = 0;
  echo $selectedSeat;
  if ($selectedSeat[0] =="A"){
    $price = 3000;
  }else if($selectedSeat[0] == "B"){
    $price = 2000;
  }else if($selectedSeat[0] == "C"){
    $price = 1000;
  }
  echo "<br>";
  $totalPrice += $price;
  $luckySeat='A-4';
  if ($selectedSeat == $luckySeat){
    $totalPrice= (50/100 * $totalPrice);
     echo "<br>";
    echo "Congradulations! You just selected the lucky seat 50% off.";
       echo "<br>";
    echo "After 50% Discount:" . $totalPrice;
  }
}
echo "<br>";
echo "Payable Amount:" . $totalPrice;
?>  
    </div>  
  </body>
</html>