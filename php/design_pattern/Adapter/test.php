<?php

require_once 'Cart.php';
require_once 'Payment.php';
require_once 'Score.php';
require_once 'PaymentWithScore.php';

$user_point = 10;

$cart = new Cart();
$cart->addOrderGoods('hogeee', 500);
$cart->addOrderGoods('fugaaa', 123);
$cart->addOrderGoods('fooooo', 1000);

// 購入とポイント付与
var_dump((new Payment())->pay($cart));
$payment_point = floor($cart->getTotalPrice() / 100);

$score = new Score($user_point);
$score->add($payment_point);
var_dump($score->getUserPoint());

var_dump((new PaymentWithScore(new Score($user_point)))->pay($cart));
