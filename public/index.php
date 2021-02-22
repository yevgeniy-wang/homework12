<?php

require_once '../vendor/autoload.php';

$s1 = new \Hillel\Homework12\ShawarmaOdessaMama();
$s2 = new \Hillel\Homework12\ShawarmaBeef();
$s3 = new \Hillel\Homework12\ShawarmaLamb();

echo $s1->getTitle() . '<br>Цена: ' . $s1->getCost() . ' гривен' . '<br>Ингридиенты: ' . implode(', ', $s1->getIngredients());
echo '<br><br>';
echo $s2->getTitle() . '<br>Цена: ' . $s2->getCost() . ' гривен' . '<br>Ингридиенты: ' . implode(', ', $s2->getIngredients());
echo '<br><br>';
echo $s3->getTitle() . '<br>Цена: ' . $s3->getCost() . ' гривен' . '<br>Ингридиенты: ' . implode(', ', $s3->getIngredients());
echo '<br><br><br>';


$bag = new \Hillel\Homework12\ShawarmaCalculator();
$bag->add($s1);
$bag->add($s2);
$bag->add($s3);

echo 'Корзина:';
echo '<br><br>';
echo implode(', ', $bag->getBag());
echo '<br><br>';
echo 'Цена: ' . $bag->getCost();
echo '<br><br>';
echo 'Ингридиенты: ' . implode(', ', $bag->getIngredients());










