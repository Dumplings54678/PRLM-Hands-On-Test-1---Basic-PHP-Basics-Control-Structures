<?php 
$username = "Almer.";
$greetings = "Hello,";
$offer = ['Book', 500000, 3099000];
$usual_price = ($offer[1] * $offer[2]);
$offer_price = ($offer[1] * $offer[3]);
$saving = ($offer_price - $usual_price);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore
    </title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php require 'header.php'; ?>
<div> 
        <p> Save p<?= $saving ?> </p>
    </div>

    <h2> Bookstore Special Offers for today!</h2>
    <h2> <?= $greetings ?> <?= $username ?></h2>
    <h2> Buy 5 Book for a discount of 10%!</h2>
    <h2> ($30.99 each)</h2>
    <?php require 'footer.php'; ?>
</body>
</html>