<!DOCTYPE html>
<html>
  <head>
    <title>Concert Assignment</title>
    <link rel="stylesheet" href="css/c13.css" />
  </head>
    <body>
      <h1>Best Tickets Buy</h1>
       <br></br>
       <br></br>
        <br></br>
 <div class="container login">
<form id="interests" action="string-with-quotes.php" method="post">
        <div class="two-thirds column" id="main">
          <fieldset>
<?php
$seats = ['A-1','A-2','A-3','A-4','A-5','B-1','B-2','B-3','B-4','B-5', 'C-1', 'C-2','C-3','C-4','C-5'];
$counter=1;
echo "<form action='string-with-quotes.php' method='POST'>";
foreach($seats as $seat) {
  echo "<input type='checkbox' name='seats[]' value='". $seat ."'></input>";
  echo ($seat );
  if ($counter % 5==0){
    echo "<br>";
  }
  ++$counter;
}
  echo"<input type='submit' value='Buy Now'/></form>";
?> 
<legend>Seating Plan</legend>
           </fieldset>
        </div>
      </form>
    </div>
    <script src="js/all-checkboxes.js"></script>
  </body>
</html>






 

