<?php
include "./main.html";

$username = $_POST["Username"];
$password = $_POST["Password"];
$jordan1_quantity = (int)$_POST["Jordan1"];
$jordan4_quantity = (int)$_POST["Jordan4"];
$jordan12_quantity = (int)$_POST["Jordan12"];
$shippingMethod = $_POST["shipping"]

echo "<br><br><div id=\"receipt\"><h1 class=\"title\">Thank you for your order, ".$username."!</h1>";

echo "<p>Password: ".$password."</p>";
echo "<table id=\"receiptTable\"><tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";

$jordan1_total = $jordan1_quantity*400;
echo "<tr><th>Air Jordan 1</th><td>".$jordan1_quantity."</td><td>$400</td><td>".$jordan1_total."</td></tr>";

$jordan4_total = $jordan4_quantity*600;
echo "<tr><th>Air Jordan 4</th><td>".$jordan4_quantity."</td><td>$600</td><td>".$jordan4_total."</td></tr>";

$jordan12_total = $jordan12_quantity*200;
echo "<tr><th>Air Jordan 12</th><td>".$jordan12_quantity."</td><td>$200</td><td>".$jordan12_total."</td></tr>";

if($shippingMethod == "sevenDay")
{
    $shippingMethod = "Seven Day";
    $shippingTotal = 0;
}
else if($shippingMethod == "threeDay")
{
    $shippingMethod = "Three Day";
    $shippingTotal = 15;
}
else
{
    $shippingMethod = "Overnight";
    $shippingTotal = 40
}

echo "<tr><th>Shipping</th><td></td>".$shippingMethod."</td><td>".$shippingTotal."</td></tr>";

$totalCost = $jordan1_total + $jordan4_total + $jordan12_total +$shippingTotal;
echo "<tr><th>Total Cost</th><td></td><td></td><th>".$totalCost."</th></tr></table></div>";

?>