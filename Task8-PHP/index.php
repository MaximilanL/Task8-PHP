<?php
$number=$_POST['number'];
$result="";
if($number>14 or $number<=1){
  $result="<span style='color: red;'>Wrong number of card! You must enter a number from 2 to 14</span>";
}

$cards=['2' => 'Deuce',
        '3' => 'Three',
        '4' => 'Four',
        '5' => 'Five',
        '6' => 'Six', 
        '7' => 'Seven',
        '8'=>'Eight',
        '9'=>'Nine',
        '10'=>'Ten',
        '11'=>'Jack',
        '12'=>'Queen',
        '13'=>'King',
        '14'=>'Ace'];

foreach ($cards as $num => $card){    
  if($number==$num){
     $result="Your card is <span style='color: green;'>$card!</span>";
  } 
}  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Task8-PHP</title>
  </head>
  <body style="padding: 2%;">
  	<p>Please, enter a number of card:</p>
    <form method="post" action="">
    <input type="number" name="number"> 
    <button type='submit' class="btn btn-primary">Done</button>   
    </form>
    <?php echo "$result";  ?>    	   
  </body>
</html>

