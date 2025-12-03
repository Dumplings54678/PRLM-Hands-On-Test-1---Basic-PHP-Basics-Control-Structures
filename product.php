<?php 
$name = "Almer";
$greeting = "Welcome back,";
if ($name == ' ') {
    $greeting + $name;
} else {
    $greetings;
}
$product = "Book";
$cost = 3099;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
     <?php require 'header.php'; ?>
    <h2> Bookstore Special Offers for today!</h2>
    <h2> <?= $greeting ?> <?= $name ?></h2>
    <h2> Book Discounts</h2>
    
    <?php  for ($i =1; $i <= 10; $i++)
            $subtotal = ($cost * $i);
            $discount = ($cost / 100  * ($i * 4));
            $total = [$i => ($subtotal - $discount)];?>
            

<table style="width:100%">
  <tr>
    <th>Book Name</th>
    <th>Discounted Price</th>
  </tr>
  <tr>
    <td><?= $product ?></td>
    <td></td>
  </tr>
  <tr>
    <td><?= $product ?></td>
    <td></td>
  </tr>
  <tr>
    <td><?= $product ?></td>
    <td></td>
  </tr>
  <tr>
    <td><?= $product ?></td>
    <td></td>
  </tr>
  <tr>
    <td><?= $product ?></td>
    <td></td>
  </tr>
</table>

<?php require 'footer.php'; ?>

</body>
</html>