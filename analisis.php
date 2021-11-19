<?php

$price = $_REQUEST['price'];
$discount = $_REQUEST['discount'];

function calculatePriceWithDiscount($precio,$descuento) {
  $perscentagePriceWithDiscount = 100 - $descuento;
  $priceWithDiscount = ($precio * $perscentagePriceWithDiscount) / 100;

  return $priceWithDiscount;
}

echo calculatePriceWithDiscount($price,$discount);

?>